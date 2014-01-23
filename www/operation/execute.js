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
    'GeoExt.window.Popup'
]);
var cursorPosition, popup;
Ext.application({
    name: 'Карта ',
    launch: function() {
        var lat = 54.915856,
            lon = 80.99599,
            zoom = 5;

        var lonLat = new OpenLayers.LonLat(lon, lat).transform(new OpenLayers.Projection("EPSG:4326"),
            new OpenLayers.Projection("EPSG:900913"));
        var map = new OpenLayers.Map();
        var osmMap = new OpenLayers.Layer.OSM("Simple OSM Map");

        var roadService = new OpenLayers.Layer.WMS("RoadService",
            "http://data1.geo.indorsoft.ru/geoserver/geoportal/wms", {
                transparent: 'true',
                layers: "geoportal:RoadServiceSegment_ln",
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
            title: 'Карта',
            region: 'east',
            map: map,
            width: "100%"
        });

        var gridFeature;
        var clickRoadService = new OpenLayers.Control.WMSGetFeatureInfo({
            layers: [roadService],
            queryVisible: true,
            infoFormat: 'application/vnd.ogc.gml',
            maxFeatures: 1,
            autoActivate: true,
            queryVisible: true,
            eventListeners: {
                'getfeatureinfo': function(e) {
                    if (e.features[0] != undefined) {
                        if (popup != undefined) {
                            popup.destroy();
                        }
                        createPopup(e.features[0]);
                    }
                }
            }
        });

        map.addControl(clickRoadService);

        function createPopup(feature) {
            var link;
            if (feature == undefined) {
                return;
            }

            popup = Ext.create('GeoExt.window.Popup', {
                title: 'Управление автодорогой',
                location: feature,
                width: 400,
                html: '<div>' +
                    '<b>Балансовая организация:</b> ' + feature.attributes['BalanceOrganizationName'] + '<br/>' +
                    '<b>Обслуживающая организация:</b> ' + feature.attributes['ServiceOrganizationName'] + '<br/>' +
                    '<b>Обслуживаемый участок, км+:</b> ' + feature.attributes['RoadSegmentName'],
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

        mainPanel = Ext.create('Ext.Panel', {
            renderTo: 'mainpanel',
            layout: 'border',
            height: '100%',
            width: '100%',
            items: [mapPanel]
        });
    }
});