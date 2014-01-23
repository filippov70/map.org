OpenLayers.ProxyHost = "/cgi-bin/proxy.cgi?url=";
Ext.require([
    'GeoExt.panel.Map',
    'GeoExt.data.FeatureStore',
    'GeoExt.selection.FeatureModel',
    'Ext.grid.GridPanel',
    'Ext.data.ArrayReader',
    'Ext.data.MemoryProxy',
    'Ext.data.Record',
    'Ext.layout.container.Border',
    'GeoExt.window.Popup',
    'GeoExt.panel.Map',
    'GeoExt.window.Popup',
     'GeoExt.tree.OverlayLayerContainer',
    'GeoExt.tree.BaseLayerContainer',
    'GeoExt.data.LayerTreeModel',
    'GeoExt.tree.View',
    'GeoExt.container.WmsLegend',
    'GeoExt.tree.Column'
]);
var cursorPosition, popup;
Ext.application({
    name: 'Карта транспортной стратегии РФ. Автомобильные дороги',
    launch: function() {
        var lat = 54.915856,
            lon = 80.99599,
            zoom = 3;

        var lonLat = new OpenLayers.LonLat(lon, lat).transform(new OpenLayers.Projection("EPSG:4326"),
            new OpenLayers.Projection("EPSG:900913"));
        var map = new OpenLayers.Map();
        var osmMap = new OpenLayers.Layer.OSM("OpenStreetMap");

        var roadService = new OpenLayers.Layer.WMS("Автомобильные дороги",
            "http://data1.geo.indorsoft.ru/geoserver/geoportal/wms", {
                transparent: 'true',
                layers: "geoportal:strategy",
                format: 'image/png'
            }, {
                isBaseLayer: false,
                visibility: true,
                projection: "EPSG:900913"
            });

        var sketchSymbolizers = {
            "Line": {
                strokeWidth: 5,
                strokeOpacity: 1,
                strokeColor: "#ffff00",
                strokeDashstyle: "dash"
            }
        };

        var style = new OpenLayers.Style();

        style.addRules([
            new OpenLayers.Rule({
                symbolizer: sketchSymbolizers
            })
        ]);

        var styleMap = new OpenLayers.StyleMap({
            "default": style
        });

        var highlightLayer = new OpenLayers.Layer.Vector("Highlighted Features", {
            styleMap: styleMap,
            displayInLayerSwitcher: false,
            isBaseLayer: false
        });

        map.addLayers([osmMap, roadService, highlightLayer]);
        map.setCenter(lonLat, zoom);

        map.events.register('mousemove', map, function(e) {
            cursorPosition = e.xy;
        });

        var mapPanel = Ext.create('GeoExt.panel.Map', {
            title: 'Карта транспортной стратегии РФ. Автомобильные дороги',
            region: 'east',
            map: map,
            width: "100%"
        });

        var gridFeature;
        var clickRoad = new OpenLayers.Control.WMSGetFeatureInfo({
            layers: [roadService],
            queryVisible: true,
            infoFormat: 'application/vnd.ogc.gml',
            maxFeatures: 1,
            autoActivate: true,
            eventListeners: {
                'getfeatureinfo': function(e) {
                    if (e.features[0] !== undefined) {
                        if (popup !== undefined) {
                            popup.destroy();
                        }
                        createPopup(e.features[0]);
                    }
                }
            }
        });

        map.addControl(clickRoad);

        function createPopup(feature) {
            if (feature === undefined) {
                return;
            }
            var purpose, start_build, finish_build, cost, finance, stage, inova;
            if (feature.attributes['purpose'] === undefined || feature.attributes['purpose'] === '') {
                purpose = '';
            } else {
                purpose = '<br/>' + '<b>Задача::</b> ' + feature.attributes['purpose'];
            }
            if (feature.attributes['stage'] === undefined || feature.attributes['stage'] === '') {
                stage = '';
            } else {
                stage = '<br/>' + '<b>Стадия:</b> ' + feature.attributes['stage'];
            }
            if (feature.attributes['cost'] === undefined || feature.attributes['cost'] === '') {
                cost = '';
            } else {
                cost = '<br/>' + '<b>Стоимость:</b> ' + feature.attributes['cost'];
            }
            if (feature.attributes['finance'] === undefined || feature.attributes['finance'] === '') {
                finance = '';
            } else {
                finance = '<br/>' + '<b>Финансирование:</b> ' + feature.attributes['finance'];
            }
            if (feature.attributes['start_build'] === undefined || feature.attributes['start_build'] === '') {
                start_build = '';
            } else {
                start_build = '<br/>' + '<b>Дата начала:</b> ' + feature.attributes['start_build'];
            }
            if(feature.attributes['finish_build'] === undefined || feature.attributes['finish_build'] === '') {
                finish_build = '';
            } else {
                finish_build = '<br/>' + '<b>Дата окончания:</b> ' + feature.attributes['finish_build'];
            }
            popup = Ext.create('GeoExt.window.Popup', {
                title: 'Описание',
                location: feature,
                width: 400,
                html: '<div>' +
                    '<b>Описание:</b> ' + feature.attributes['description'] + '<br/>' +
                    purpose + 
                    stage + cost + finance + start_build + finish_build + '</div>',
                collapsible: false,
                map: map
            });

            popup.on({
                close: function() {}
            });
            var loc = map.getLonLatFromViewPortPx(cursorPosition);
            popup.location = loc;
            popup.show();
        }
        
        var store = Ext.create('Ext.data.TreeStore', {
            model: 'GeoExt.data.LayerTreeModel',
            root: {
                plugins: [{
                    ptype: "gx_layercontainer",
                    loader: {
                        createNode: function(attr) {
                            // add a WMS legend to each node created
                            attr.component = {
                                xtype: "gx_wmslegend",
                                layerRecord: mapPanel.layers.getByLayer(attr.layer),
                                showTitle: false,
                                // custom class for css positioning
                                // see tree-legend.html
                                cls: "legend"
                            };
                            return GeoExt.tree.LayerLoader.prototype.createNode.call(this, attr);
                        }
                    }
                }]
            }
        });
         
        var layer;
        var tree = Ext.create('GeoExt.tree.Panel', {
            region: "south",
            title: "Слои",
            height: 170,
            autoScroll: true,
            viewConfig: {
                plugins: [{
                    ptype: 'treeviewdragdrop',
                    appendOnly: false
                }]
            },
            store: store,
            rootVisible: false,
            lines: false
        });
        
/*         var legendPanel = Ext.create('GeoExt.panel.Legend', {
            defaults: {
                labelCls: 'mylabel',
                style: 'padding:5px'
            },
            map: map,
            //title: "Условные знаки"
            bodyStyle: 'padding:5px',
            height: 100,
            autoScroll: true,
            region: 'south'
        }); */
        
        mainPanel = Ext.create('Ext.Panel', {
            renderTo: 'mainpanel',
            layout: 'border',
            height: '100%',
            width: '100%',
            items: [mapPanel, tree]
        });
    }
});