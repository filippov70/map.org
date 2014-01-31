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
var cursorPosition, popup, cart;

Ext.application({
    name: 'Карта ',
    launch: function() { 
        var lat = 55.605991,
            lon = 37.059406,
            zoom = 6,
            map = new OpenLayers.Map('map_indor', {
                controls: [
                    new OpenLayers.Control.Navigation({
                        dragPanOptions: {
                            enableKinetic: false
                        }
                    }),
                    new OpenLayers.Control.Attribution(),
                    new OpenLayers.Control.Zoom({
                        zoomInId: "zoom-in",
                        zoomOutId: "zoom-out"
                    })
                ],
            }),
            osmMap = new OpenLayers.Layer.OSM("OpenStreetMap"),
           // yandexMap = new OpenLayers.Layer.Yandex("карта",{type:"", sphericalMercator: true}),
            /*googleMap = new OpenLayers.Layer.Google(
                "Google Streets", // the default
                {
                    numZoomLevels: 6,
                    'sphericalMercator': true
                }
            );*/
            lonLat = new OpenLayers.LonLat(lon, lat).transform(new OpenLayers.Projection("EPSG:4326"),
                new OpenLayers.Projection("EPSG:900913"));

        //layerSwitcher = new OpenLayers.Control.LayerSwitcher(),

        gasStation = new OpenLayers.Layer.WMS("АЗС1",
            "http://data1.geo.indorsoft.ru/geoserver/geoportal/wms", {
                transparent: 'true',
                layers: "geoportal:RoadGasStation",
                format: 'image/png'
            }, {
                isBaseLayer: false,
                visibility: true,
                projection: "EPSG:900913"
            });
        RoadParking = new OpenLayers.Layer.WMS("АЗС2",
            "http://data1.geo.indorsoft.ru/geoserver/geoportal/wms", {
                transparent: 'true',
                layers: "geoportal:RoadParking",
                format: 'image/png'
            }, {
                isBaseLayer: false,
                visibility: true,
                projection: "EPSG:900913"
            });
        RoadTollStation = new OpenLayers.Layer.WMS("АЗС3",
            "http://data1.geo.indorsoft.ru/geoserver/geoportal/wms", {
                transparent: 'true',
                layers: "geoportal:RoadTollStation_pt",
                format: 'image/png'
            }, {
                isBaseLayer: false,
                visibility: true,
                projection: "EPSG:900913"
            });
        RoadToilet = new OpenLayers.Layer.WMS("АЗС4",
            "http://data1.geo.indorsoft.ru/geoserver/geoportal/wms", {
                transparent: 'true',
                layers: "geoportal:RoadToilet_ar",
                format: 'image/png'
            }, {
                isBaseLayer: false,
                visibility: true,
                projection: "EPSG:900913"
            });
        RoadHotel = new OpenLayers.Layer.WMS("АЗС5",
            "http://data1.geo.indorsoft.ru/geoserver/geoportal/wms", {
                transparent: 'true',
                layers: "geoportal:RoadHotel",
                format: 'image/png'
            }, {
                isBaseLayer: false,
                visibility: true,
                projection: "EPSG:900913"
            });
        RoadWashingPoint = new OpenLayers.Layer.WMS("АЗС6",
            "http://data1.geo.indorsoft.ru/geoserver/geoportal/wms", {
                transparent: 'true',
                layers: "geoportal:RoadWashingPoint",
                format: 'image/png'
            }, {
                isBaseLayer: false,
                visibility: true,
                projection: "EPSG:900913"
            });
        RoadTechServiceStation = new OpenLayers.Layer.WMS("АЗС7",
            "http://data1.geo.indorsoft.ru/geoserver/geoportal/wms", {
                transparent: 'true',
                layers: "geoportal:RoadTechServiceStation",
                format: 'image/png'
            }, {
                isBaseLayer: false,
                visibility: true,
                projection: "EPSG:900913"
            });
        RoadPublicCatering = new OpenLayers.Layer.WMS("АЗС8",
            "http://data1.geo.indorsoft.ru/geoserver/geoportal/wms", {
                transparent: 'true',
                layers: "geoportal:RoadPublicCatering",
                format: 'image/png'
            }, {
                isBaseLayer: false,
                visibility: true,
                projection: "EPSG:900913"
            });
        RoadGAIPost = new OpenLayers.Layer.WMS("АЗС9",
            "http://data1.geo.indorsoft.ru/geoserver/geoportal/wms", {
                transparent: 'true',
                layers: "geoportal:RoadGAIPost",
                format: 'image/png'
            }, {
                isBaseLayer: false,
                visibility: true,
                projection: "EPSG:900913"
            });

        map.addLayers([osmMap, gasStation /*,RoadGAIPost*/ , RoadPublicCatering, RoadTechServiceStation, RoadWashingPoint,
            RoadHotel, RoadToilet, RoadTollStation, RoadParking
        ]);
        //map.addControl(layerSwitcher);
        map.setCenter(lonLat, zoom);
       // map.addLayer(yandexMap);
       // map.setBaseLayer(yandexMap);
        //map.addLayer(googleMap);
        //map.setBaseLayer(googleMap);

        map.events.register('mousemove', map, function(e) {
            //cursorPosition = e.xy;
        });

        OpenLayers.Control.Click = OpenLayers.Class(OpenLayers.Control, {
            defaultHandlerOptions: {
                'single': true,
                'double': false,
                'pixelTolerance': 0,
                'stopSingle': false,
                'stopDouble': false
            },
            initialize: function(options) {
                this.handlerOptions = OpenLayers.Util.extend({}, this.defaultHandlerOptions);
                OpenLayers.Control.prototype.initialize.apply(
                    this, arguments
                );
                this.handler = new OpenLayers.Handler.Click(
                    this, {
                        'click': this.trigger
                    }, this.handlerOptions
                );
            },
            trigger: function(e) {
                cursorPosition = map.getLonLatFromPixel(e.xy);                
            }
        });

        var click = new OpenLayers.Control.Click();
        map.addControl(click);
        click.activate();

       /*var mapPanel = Ext.create('GeoExt.panel.Map', {
            title: 'Объекты дорожного сервиса',
            region: 'east',
            map: map,
            width: "100%"
        });*/

        cart = {
            '46': {
                'gridName': 'Автозаправочные станции',
                'Name': 'Наименование',
                'Square': 'Плащадь (кв.м.)',
                'SiteSquare': 'Площадь участка (кв.м)',
                'Distance': 'Расстояние от кромки(м) ',
                'PhoneNumber': 'Номер телефона ',
                'WorkingTime': 'Часы работы ',
                'ColumnCount': 'Количество колонок',
                'Power': 'Мощность(количество заправок в сутки)',
                'TitleName': 'Наименование титула'
            },
            '68': {
                'gridName': 'Пункт оплаты',
                'Name': 'Наименование',
                'Square': 'Плащадь (кв.м.)',
                'SiteSquare': 'Площадь участка (кв.м) ',
                'Distance': 'Расстояние от кромки(м)',
                'PhoneNumber': 'Номер телефона ',
                'WorkingTime': 'Часы работы'
            },
            '59': {
                'gridName': 'Туалет',
                'Name': 'Наименование',
                'Square': 'Плащадь (кв.м.)',
                'SiteSquare': 'Площадь участка (кв.м) ',
                'Distance': 'Расстояние от кромки(м)',
                'PhoneNumber': 'Номер телефона ',
                'WorkingTime': 'Часы работы'
            },
            '58': {
                'gridName': 'Станция техобслуживания',
                'Name': 'Наименование',
                'Square': 'Плащадь (кв.м.)',
                'SiteSquare': 'Площадь участка (кв.м) ',
                'Distance': 'Расстояние от кромки(м)',
                'PhoneNumber': 'Номер телефона ',
                'WorkingTime': 'Часы работы'
            },
            '57': {
                'gridName': 'Автомойка',
                'Name': 'Наименование',
                'Square': 'Плащадь (кв.м.)',
                'SiteSquare': 'Площадь участка (кв.м) ',
                'Distance': 'Расстояние от кромки(м)',
                'PhoneNumber': 'Номер телефона ',
                'WorkingTime': 'Часы работы'
            },
            '55': {
                'gridName': 'Пункт общепита',
                'Name': 'Наименование',
                'Square': 'Плащадь (кв.м.)',
                'SiteSquare': 'Площадь участка (кв.м) ',
                'Distance': 'Расстояние от кромки(м)',
                'PhoneNumber': 'Номер телефона ',
                'WorkingTime': 'Часы работы'
            },
            '53': {
                'gridName': 'Парковка',
                'Name': 'Наименование',
                'Square': 'Плащадь (кв.м.)',
                'SiteSquare': 'Площадь участка (кв.м) ',
                'Distance': 'Расстояние от кромки(м)',
                'PhoneNumber': 'Номер телефона ',
                'WorkingTime': 'Часы работы'
            },
            '52': {
                'gridName': 'Гостиница',
                'Name': 'Наименование',
                'Square': 'Плащадь (кв.м.)',
                'SiteSquare': 'Площадь участка (кв.м) ',
                'Distance': 'Расстояние от кромки(м)',
                'PhoneNumber': 'Номер телефона ',
                'WorkingTime': 'Часы работы'
            },
            '48': {
                'gridName': 'Пост ГАИ',
                'Name': 'Наименование',
                'Square': 'Плащадь (кв.м.)',
                'SiteSquare': 'Площадь участка (кв.м) ',
                'Distance': 'Расстояние от кромки(м)',
                'PhoneNumber': 'Номер телефона ',
                'WorkingTime': 'Часы работы'
            }
        };

        var clickRoadService = new OpenLayers.Control.WMSGetFeatureInfo({
            layers: [gasStation, RoadPublicCatering, RoadTechServiceStation, RoadWashingPoint,
                RoadHotel, RoadToilet, RoadTollStation, RoadParking
            ],
            queryVisible: true,
            infoFormat: 'application/vnd.ogc.gml',
            maxFeatures: 1,
            autoActivate: true,
            queryVisible: true,
            eventListeners: {
                'getfeatureinfo': function(e) {                    
                    if (e.features[0] != undefined) {
                        console.log(e.features[0]);

                        var objType = Math.round(e.features[0].attributes.typeid);

                        if (cart.hasOwnProperty(objType)) {
                            var accord = cart[objType];
                            
                            var new_attributes = {};

                            for (attr in accord) {
                                if (attr === "gridName") {
                                    new_attributes['title'] = accord[attr];
                                } else {
                                    if (e.features[0].attributes[attr] == "Null" || e.features[0].attributes[attr] == undefined) {
                                        e.features[0].attributes[attr] = "Нет данных";
                                    }
                                    new_attributes[accord[attr]] = e.features[0].attributes[attr];
                                }
                            }
                        }

                        if (popup != undefined) {
                            popup.destroy();
                        }
                        
                        createPopup(e.features[0], new_attributes);
                    }
                }
            }
        });

        function createPopup(feature, attributes) {
            var link;

            if (feature == undefined) {
                return;
            }

            var str = '<div>';
            var title;

            for (attr in attributes) {
                if (attr == 'title') {
                    title = attributes[attr];
                } else {
                    str = str + '<b>' + attr + ':</b> ' + attributes[attr] + '</br>';
                }
            }
            str = str + '</div>';

            popup = Ext.create('GeoExt.window.Popup', {
                title: title,
                location: feature,
                width: 400,
                html: str,
                collapsible: false,
                map: map
            });

            popup.on({
                close: function() {}
            });
            var loc = cursorPosition;
            
            popup.location = loc;
            popup.show();
        }

        map.addControl(clickRoadService);

        //RoadGAIPost.mergeNewParams({'CQL_FILTER': "TitleName like '%Беларусь%'"}); 
        RoadPublicCatering.mergeNewParams({
            'CQL_FILTER': "TitleName like '%Беларусь%'"
        });
        RoadTechServiceStation.mergeNewParams({
            'CQL_FILTER': "TitleName like '%Беларусь%'"
        });
        RoadWashingPoint.mergeNewParams({
            'CQL_FILTER': "TitleName like '%Беларусь%'"
        });
        RoadHotel.mergeNewParams({
            'CQL_FILTER': "TitleName like '%Беларусь%'"
        });
        RoadToilet.mergeNewParams({
            'CQL_FILTER': "TitleName like '%Беларусь%'"
        });
        RoadTollStation.mergeNewParams({
            'CQL_FILTER': "TitleName like '%Беларусь%'"
        });
        RoadParking.mergeNewParams({
            'CQL_FILTER': "TitleName like '%Беларусь%'"
        });
        gasStation.mergeNewParams({
            'CQL_FILTER': "TitleName like '%Беларусь%'"
        });

        //RoadGAIPost.redraw();
        RoadPublicCatering.redraw();
        RoadTechServiceStation.redraw();
        RoadWashingPoint.redraw();
        RoadHotel.redraw();
        RoadToilet.redraw();
        RoadTollStation.redraw();
        RoadParking.redraw();
        gasStation.redraw();

        /*mainPanel = Ext.create('Ext.Panel', {
            renderTo: 'map_indor',
            layout: 'border',
            height: '100%',
            width: '100%',
            items: [mapPanel]
        });*/
    }
});