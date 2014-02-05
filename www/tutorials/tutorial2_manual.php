<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>OpenLayers Example</title>
		<style type="text/css">
			h1 { 
			font-size: 120%; 
			font-family: Verdana, Arial, Helvetica, sans-serif; 
			color: #333366;
			}
			h2 { 
			font-size: 95%; 
			font-family: Verdana, Arial, Helvetica, sans-serif;
			font-weight:normal; 
			color: #333366;
			}
		</style>
	</head>

	<body>
		<h1>Подключение векторного слоя из WFS-источника с фильтрацией данных</h1>
		<ol>
			<li>
				<h1>Подготовка</h1>
		  
				<p><h2>Выполнить пункты 1-3 из предыдущего примера 
					<a href="tutorial3_manual.php" >(Подключение векторного слоя из WFS-источника)</a></h2></p>		  
			</li>
			<li>
				<h1>Фильтрация данных</h1>
		  
				<p><h2>Для демонстрации фильтрации используется слой 'Участки обслуживания'. У этого слоя есть два атрибутивных поля - 'BalanceOrganizationName' и 'ServiceOrganizationName'<br>
				Первый атрибут используется для того чтобы загрузить не все объеты слоя, а только те которые принадлежат одному балансодержателю.<br>
				Второй атрибут будет использоваться в фильтре визуализатора. Участки обслуживания убслуживаемые ФКУ "Федеральное управление автомобильных дорог "Сибирь"
				выделяются цветом:				
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
						}));
					</pre>
				</h2></p>		  
			</li>
			
			<li>
				<h1>Готовый вариант</h1>
					<a href="tutorial2_example.php">Смотреть >></a>
					<pre>
					&lt;html&gt;
					    &lt;head&gt;
						// другие элементы head
                                                &lt;meta charset="utf-8"&gt;
						&lt;script src="OpenLayers/OpenLayers.js"&gt;&lt;/script&gt;
						&lt;script type="text/javascript"&gt;
						OpenLayers.ProxyHost = "/cgi-bin/proxy.cgi?url=";
						var layerRoad;
						var map;
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
						 &lt;/script&gt;						 
					    &lt;/head&gt;
					    &lt;body onload="init()"&gt;
						// другие элементы body
						&lt;div style="width:600px; height:600px" id="map"&gt;&lt;/div&gt;
						// другие элементы body
					    &lt;/body&gt;
					&lt;/html&gt;
					</pre>
				<li>
				<h1>Результат</h1>
					<p><h2>
					На карте показаны только участки обслуживания находящиеся на балансе ФКУ "Федеральное управление автомобильных дорог "Сибирь".
					Оранжевым цветом выделены участки ослуживаемые ОАО "Автодор", остальные участки обозначены синим цветом.
					</p></h2>
				</li>
				<img src="tutorial4.png" />					
			</li>
		</ol>
<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/ya.php";
?> 		
	</body>
</html>