<ol>
    <li>
        <h3>Фильтрация данных</h3>
        <p>Для демонстрации фильтрации используется слой 'Участки обслуживания'. У этого слоя есть два атрибутивных поля - 'BalanceOrganizationName' и 'ServiceOrganizationName'<br>
        Первый атрибут используется для того чтобы загрузить не все объеты слоя, а только те которые принадлежат одному балансодержателю.<br>
        Второй атрибут будет использоваться в фильтре визуализатора. Участки обслуживания убслуживаемые ФКУ "Федеральное управление автомобильных дорог "Сибирь"
        выделяются цветом:</p>
<pre>
layerRoad = new OpenLayers.Layer.Vector('Service', {
        strategies: [new OpenLayers.Strategy.Fixed({
            preload: true
        })],
        protocol: new OpenLayers.Protocol.WFS({
            version: '1.1.0',
            url: 'http://data1.geo.indorsoft.ru/geoserver/geoportal/wfs',
            featurePrefix: 'geoportal',
            //srsName: 'EPSG:4326',
            featureType: 'RoadServiceSegment_ln',
            featureNS: 'http://geoportal.indorsoft.ru/road',
            geometryName: 'geom_ln'
        }),
        filter: new OpenLayers.Filter.Logical({
            type: OpenLayers.Filter.Logical.OR,
            filters: [
                new OpenLayers.Filter.Comparison({
                    type: OpenLayers.Filter.Comparison.LIKE,
                    property: 'BalanceOrganizationName',
                    value: '%Сибирь%' // только то, что сожержит 'Сибирь' в атрибуте "TitleName" 
                    //(ФКУ "Федеральное управление автомобильных дорог "Сибирь"")
                })
            ]
        }),
        // Оформление слоя
        styleMap: new OpenLayers.StyleMap({
            // оформление по умолчанию
            "default": new OpenLayers.Style({
                strokeColor: "#ffcc66",
                strokeWidth: 2
            }, {
                // Фильтрация данных слоя
                rules: [new OpenLayers.Rule({
                        // Фильтрация данных слоя
                        filter: new OpenLayers.Filter.Logical({
                            type: OpenLayers.Filter.Logical.OR,
                            filters: [
                                new OpenLayers.Filter.Comparison({
                                    type: OpenLayers.Filter.Comparison.EQUAL_TO,
                                    property: 'ServiceOrganizationName',
                                    value: 'ОАО "Автодор"' // выделение цветом обслуживающей организации ОАО "Автодор"
                                })
                            ]
                        }),
                        // оформление для отфильтрованных данных
                        symbolizer: {
                            fillColor: "#ffffff",
                            strokeColor: "#ff9933",
                            strokeWidth: 3
                            //graphicZIndex: 1
                        }

                    }),
                    // оформление внешнего вида всех других обслуживающих организаций
                    new OpenLayers.Rule({
                        elseFilter: true,
                        symbolizer: {
                            fillColor: "navy",
                            strokeColor: "navy"
                        }
                    })
                ]
            })
        }));
</pre>
    </li>
    <li>
        <h3>Готовый вариант</h3>
        <a href="tutorialex2">Смотреть >></a>
<pre>
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="utf-8"&gt;
        &lt;script src="OpenLayers/OpenLayers.js"&gt;&lt;/script&gt;
        &lt;script type="text/javascript"&gt;
            OpenLayers.ProxyHost = "/cgi-bin/proxy.cgi?url=";
            var layerRoad;
            var map;
            function init() {
                map = new OpenLayers.Map('map');
                var osmMap = new OpenLayers.Layer.OSM('OpenStreetMap');
                var layerSwitcher = new OpenLayers.Control.LayerSwitcher();
                // Слой по WFS-протоколу
                layerRoad = new OpenLayers.Layer.Vector('Service', {
                    strategies: [new OpenLayers.Strategy.Fixed({
                        preload: true
                    })],
                    protocol: new OpenLayers.Protocol.WFS({
                        version: '1.1.0',
                        url: 'http://data1.geo.indorsoft.ru/geoserver/geoportal/wfs',
                        featurePrefix: 'geoportal',
                        //srsName: 'EPSG:4326',
                        featureType: 'RoadServiceSegment_ln',
                        featureNS: 'http://geoportal.indorsoft.ru/road',
                        geometryName: 'geom_ln'
                    }),
                    filter: new OpenLayers.Filter.Logical({
                        type: OpenLayers.Filter.Logical.OR,
                        filters: [
                            new OpenLayers.Filter.Comparison({
                                type: OpenLayers.Filter.Comparison.LIKE,
                                property: 'BalanceOrganizationName',
                                value: '%Сибирь%' // только то, что сожержит 'Сибирь' в атрибуте "TitleName"
                                // (ФКУ "Федеральное управление автомобильных дорог "Сибирь"")
                            })
                        ]
                    }),
                    // Оформление слоя
                    styleMap: new OpenLayers.StyleMap({
                        // оформление по умолчанию
                        "default": new OpenLayers.Style({
                            strokeColor: "#ffcc66",
                            strokeWidth: 2
                        }, {
                            rules: [new OpenLayers.Rule({
                                    // Фильтрация данных слоя
                                    filter: new OpenLayers.Filter.Logical({
                                        type: OpenLayers.Filter.Logical.OR,
                                        filters: [
                                            new OpenLayers.Filter.Comparison({
                                                type: OpenLayers.Filter.Comparison.EQUAL_TO,
                                                property: 'ServiceOrganizationName',
                                                value: 'ОАО "Автодор"' // выделение цветом обслуживающей организации ОАО "Автодор"
                                            })
                                        ]
                                    }),
                                    // оформление для отфильтрованных данных
                                    symbolizer: {
                                        fillColor: "#ffffff",
                                        strokeColor: "#ff9933",
                                        strokeWidth: 3
                                        //graphicZIndex: 1
                                    }
                                }),
                                // оформление внешнего вида всех других обслуживающих организаций
                                new OpenLayers.Rule({
                                    elseFilter: true,
                                    symbolizer: {
                                        fillColor: "navy",
                                        strokeColor: "navy"
                                    }
                                })
                            ]
                        })
                    })
                });
                // Добавление реакции на событие завершения загрузки слоя 'loadend' 
                layerRoad.events.register("loadend", layerRoad, function() {
                    map.zoomToExtent(layerRoad.getDataExtent())
                });
                map.addLayers([osmMap, layerRoad]);
                // Показать слой layerRoad полностью
                map.zoomToExtent(layerRoad.getDataExtent(), true);
                map.addControl(layerSwitcher);
            }
        &lt;/script&gt;                         
    &lt;/head&gt;
    &lt;body onload="init()"&gt;
        &lt;div style="width:600px; height:600px" id="map"&gt;&lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre>
    </li>
</ol>