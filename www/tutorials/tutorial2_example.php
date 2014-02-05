<html>
	<head>
    <meta charset="utf-8">
	<title>OpenLayers Example WFS</title>						
	<script src="OpenLayers/OpenLayers.js"></script>
	<script type="text/javascript">
		OpenLayers.ProxyHost = "/cgi-bin/proxy.cgi?url=";
		var layerRoad;
		var map;
		function navigateOnRoadLayer() {
			map.zoomToExtent(layerRoad.getDataExtent(), true);
		}
		function init(){

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
                            symbolizer:{
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
			layerRoad.events.register("loadend",layerRoad,function(){map.zoomToExtent(layerRoad.getDataExtent())});
			map.addLayers([osmMap, layerRoad]);
			// Показать слой layerRoad полностью
			map.zoomToExtent(layerRoad.getDataExtent(), true); 
			map.addControl(layerSwitcher);
		}
	 </script>						 
	</head>
	<body onload="init()">
		<div style="width:100%; height:100%" id="map"></div>
<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/ya.php";
?>         
	</body>
</html>