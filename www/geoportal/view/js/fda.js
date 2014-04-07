/*
 * Copyright (c) 2008-2012 The Open Source Geospatial Foundation
 *
 * Published under the BSD license.
 * See https://github.com/geoext/geoext2/blob/master/license.txt for the full
 * text of the license.
 */

/**
Филиппов Владислав ООО "ИндорСофт"
**/

OpenLayers.ProxyHost = "/cgi-bin/proxy.cgi?url=";
var mapPanel, mainPanel;
var listView;
var popup;
var cursorPosition;
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
    'GeoExt.window.Popup'
]);

Ext.application({
    name: 'Карта ',
    launch: function() {
        var lon = 11038848.925229;
        var lat = 8032508.6373168;
        var zoom = 3;
        var lonLat = new OpenLayers.LonLat(lon,lat);
        var map = new OpenLayers.Map();
        var osmLayer = new OpenLayers.Layer.OSM('OpenStreetMap');
        var selectedStyle = new OpenLayers.Style({
            strokeColor: "red",
            strokeWidth: 3
        });

        var style = new OpenLayers.StyleMap({
            "default": new OpenLayers.Style({
                strokeColor: "grey",
                strokeWidth: 2
            }, {
                rules: [new OpenLayers.Rule({
                        filter: new OpenLayers.Filter.Comparison({
                            type: OpenLayers.Filter.Comparison.EQUAL_TO,
                            property: "stage",
                            value: 2
                        }),
                        symbolizer: {
                            strokeColor: "#ff6600",
                            strokeDashstyle: "dash"
                        }
                    }), new OpenLayers.Rule({
                        filter: new OpenLayers.Filter.Comparison({
                            type: OpenLayers.Filter.Comparison.EQUAL_TO,
                            property: "stage",
                            value: 0
                        }),
                        symbolizer: {
                            strokeColor: "grey"
                        }
                    }), new OpenLayers.Rule({
                        filter: new OpenLayers.Filter.Comparison({
                            type: OpenLayers.Filter.Comparison.EQUAL_TO,
                            property: "stage",
                            value: 1
                        }),
                        symbolizer: {
                            strokeColor: "grey",
                            strokeDashstyle: "dash"
                        }
                    }),
                    new OpenLayers.Rule({
                        elseFilter: true
                    })
                ]
            }),
            "select": selectedStyle
        });

        // Слой с трассами
        var vecLayer = new OpenLayers.Layer.Vector("vector", {
            protocol: new OpenLayers.Protocol.WFS({
                version: '1.1.0',
                url: 'http://data1.geo.indorsoft.ru/geoserver/geoportal/wfs',
                featurePrefix: 'geoportal',
                featureType: 'trunk',
                featureNS: 'http://geoportal.indorsoft.ru/road',
                geometryName: 'geom_ln'
            }),
            styleMap: style,
            strategies: [new OpenLayers.Strategy.Fixed()]
        });

        var selector = new OpenLayers.Control.SelectFeature(vecLayer, {
            multiple: false
        });

        var wmsLayer = new OpenLayers.Layer.WMS("RoadService",
            "http://data1.geo.indorsoft.ru/geoserver/geoportal/wms?", {
                transparent: 'true',
                layers: "geoportal:trunk",
                format: 'image/png'
            }, {
                isBaseLayer: false,
                visibility: false,
                projection: "EPSG:900913"
            });

        var infoControl = new OpenLayers.Control.GetFeature({
            protocol: OpenLayers.Protocol.WFS.fromWMSLayer(wmsLayer),
            clickTolerance: 10
        });

        var sketchSymbolizers = {
            "Line": {
                strokeWidth: 3,
                strokeColor: "red",
                strokeDashstyle: "solid"
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

        highlightLayer.setZIndex(1000);
        map.addLayers([highlightLayer]);

        map.events.register('mousemove', map, function(e) {
            cursorPosition = e.xy;
        });

        infoControl.events.register('featureselected', infoControl, function(e) {            
            if(popup != undefined)
                popup.destroy();
            selector.unselectAll();
            highlightLayer.destroyFeatures();
            highlightLayer.addFeatures(e.feature);
            highlightLayer.setZIndex(1000);
            highlightLayer.redraw();
            createPopup(e.feature, formatter);
        });

        var formatter = {
            wiki: function(attr) {
                return '<a href="' + this.feature[attr] + '" target="_blank">Википедия</a>';
            },
            roadid: function(attr) {
                return '<b>Идентификатор:</b> ' + this.feature[attr];
            },
            path: function(attr) {
                return '<b>Маршрут:</b> ' + this.feature[attr];
            },
            nameupr: function(attr) {

                var attrValue = this.feature['url'];

                if (!this.validate(attrValue)) {
                    return '<b>Управление:</b> ' + this.feature[attr];
                }

                return '<b>Управление:</b> <a href="http://' + this.feature['url'] + '" target="_blank">' + this.feature[attr] + '</a>';
            },
            url: function(attr) {
                return this.feature[attr];
            },
            ref: function(attr) {

                var attrValue = this.feature['ref_new'];

                if (!this.validate(attrValue)) {
                    return '<b>Наименование:</b> ' + this.feature[attr];
                }

                return '(' + this.feature[attr] + ')';
            },
            ref_new: function(attr) {
                return '<b>Наименование:</b> ' + this.feature[attr];
            },
            validate: function(attr) {
                if (attr == "Null" ||
                    attr == "undefined" ||
                    attr == undefined ||
                    attr == "" ||
                    attr == "NaN") {
                    return false;
                }
                return true;
            },
            getAttributeView: function(attr) {

                var attrValue = this.feature[attr];

                if (!this.validate(attrValue)) {
                    return "";
                }

                return this[attr](attr);
            },
            get_view: function(feature) {
                this.feature = feature;
                var view =
                    '<div>' +
                    this.getAttributeView('ref_new') +
                    this.getAttributeView('ref') + '</br>' +
                    this.getAttributeView('roadid') + '</br>' +
                    this.getAttributeView('path') + '</br>' +
                    this.getAttributeView('nameupr') + '</br>' +
                    this.getAttributeView('wiki') +
                    '</div>';
                return view;
            }
        };
        function createPopup(feature, formatter) {

            var link, ref, roadid;

            if (feature == undefined) {
                return;
            }

            popup = Ext.create('GeoExt.window.Popup', {
                title: 'Информация о дороге',
                location: feature,
                width: 400,
                html: formatter.get_view(feature.attributes),
                collapsible: false,
                map: map
            });

            popup.on({
                close: function() {
                    highlightLayer.destroyFeatures();
                    highlightLayer.redraw();
                    selector.unselectAll();
                }
            });
            var loc = map.getLonLatFromViewPortPx(cursorPosition);
            popup.location = loc;
            popup.show();
        }

        var uniqueValues = [];
        var uniqueStore;

        var store = Ext.create('GeoExt.data.FeatureStore', {
            layer: vecLayer,
            sorters: ['nameupr'],
            fields: [{
                name: 'nameupr',
                type: 'string'
            }, {
                name: 'id',
                type: 'int'
            }],
            autoLoad: true
        });

        map.addLayers([osmLayer, vecLayer]);
        map.setCenter(lonLat,zoom);

        vecLayer.events.register('loadend', vecLayer, function zoomToTrace() {

            map.zoomToExtent(vecLayer.getDataExtent());

            uniqueValues = store.collect('nameupr', false);

            var unuqueArray = [];
            for (var i = 0; i < uniqueValues.length; i++) {
                unuqueArray.push(new Array(uniqueValues[i]));
            }
            uniqueStore = new Ext.data.ArrayStore({
                data: unuqueArray,
                fields: [{
                    name: 'nameupr',
                    type: 'string'
                }]
            });
            uniqueStore.groupField = 'nameupr';
            listView.bindStore(uniqueStore);
            myMask.hide();
        });

        map.addControl(selector);
        map.addControl(infoControl);
        selector.activate();
        infoControl.activate();

        var myMask = new Ext.LoadMask(Ext.getBody(), {
            msg: "Подождите. Идет загрузка данных..."
        });
        myMask.show();

        mapPanel = Ext.create('GeoExt.panel.Map', {
            title: 'Карта',
            region: 'east',
            map: map,
            width: "80%"
        });

        listView = Ext.create('Ext.grid.Panel', {
            store: store,
            region: 'north',
            height:'80%',
            multiSelect: false,
            columns: [{
                header: 'Наименование',
                width: '100%',
                sortable: true,
                dataIndex: 'nameupr'
            }],
            loadMask: true
        });      

        listView.on('itemclick', function(view, nodes) {

            selector.unselectAll();
            highlightLayer.destroyFeatures();
            highlightLayer.redraw();
            
            var uprValue = nodes.data.nameupr;

            var selectedFeatures = vecLayer.getFeaturesByAttribute('nameupr', uprValue);

            var firstBound = selectedFeatures[0].geometry.getBounds();
            for (var i = 0; i < selectedFeatures.length; i++) {
                if (firstBound.left >= selectedFeatures[i].geometry.getBounds().left) {
                    firstBound.left = selectedFeatures[i].geometry.getBounds().left
                }
                if (firstBound.bottom >= selectedFeatures[i].geometry.getBounds().bottom) {
                    firstBound.bottom = selectedFeatures[i].geometry.getBounds().bottom
                }
                if (firstBound.right <= selectedFeatures[i].geometry.getBounds().right) {
                    firstBound.right = selectedFeatures[i].geometry.getBounds().right
                }
                if (firstBound.top <= selectedFeatures[i].geometry.getBounds().top) {
                    firstBound.top = selectedFeatures[i].geometry.getBounds().top
                }
                selector.select(selectedFeatures[i]);
            }
            map.zoomToExtent(firstBound);
            selector.activate();
        });

        var legendPanel = Ext.create('Ext.Panel', {
            title: 'Легенда',
            region: 'south',
            height:'20%',
            html:  '</br><div class="line Existing"></div><div class="legendDescription">Существующие участки</div></br>'+
                    '</br><div class="line Constructed"></div><div class="legendDescription">Строящиеся участки</div></br>'+
                    '</br><div class="line Projected"></div><div class="legendDescription">Проектируемые участки</div></br>'
        });  

        var selectorPanel = Ext.create('Ext.Panel', {
            region: 'west',
            title: 'Дорожные управления',
            width: '20%',
            layout: 'border',
            items: [listView,legendPanel]
        });

        mainPanel = Ext.create('Ext.Panel', {
            renderTo: 'mainpanel',
            layout: 'border',
            height: '100%',
            width: '100%',
            items: [selectorPanel, mapPanel]
        });
    }
});