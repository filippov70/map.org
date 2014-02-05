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

		<ol>
			<li>
				<h1>Установка OpenLayers.</h1>
		  
				<p><h2>Скачиваем библиотеку и распаковываем её в свой домашний каталог. Для нормальной работы 
				достаточно скопировать файл OpenLayers.js  и каталоги theme и img.</h2></p>		  
			</li>
			<li>
				<h1>Заготовка для карты.</h1>
		  
				<p><h2>Создаём исходный файл, в который будет встроена карта. (OpenLayers поддерживает встраивание карт в
				 любой блочный элемент html-кода с заданными размерами width и height ). Кроме этого нужно подключить 
				 скрипт из библиотеки OpenLayers:				
					<pre>
				       &lt;html&gt;
					   &lt;head&gt;
					       &lt;title&gt;OpenLayers Example&lt;/title&gt;
					       &lt;script src = "OpenLayers/OpenLayers.js"&gt;&lt;/script&gt;
					   &lt;/head&gt;
					   &lt;body&gt;
					       &lt;div style = "width:100%; height:100% id = "map"&gt;&lt;/div&gt;	
					   &lt;/body&gt;
					&lt;/html&gt;
					</pre>				
				</h2></p>		  
			</li>
			<li>
				<h1>Создание объекта, отображающего карту.</h1>
		  
				<p><h2>Создаём объект, который будет отвечать за отображение карты:
					<pre>
					 map = new OpenLayers.Map('mapId'),
					 </pre>
				В конструкторе объекта map использует аргумент – «mapId». Это ID блочного элемента html, в который 
				будет отображаться карта.

				Устанавливаем координаты центра карты и начальный масштаб:
					<pre>
					lat = 54.915856,				
					lon = 37.99599,					
					zoom = 10,
					</pre>
				Преобразовываем координаты в нужную проекцию:
					<pre>
					lonLat = new OpenLayers.LonLat(lon, lat).transform(new OpenLayers.Projection("EPSG:4326"), new OpenLayers.Projection("EPSG:900913")),
					</pre>
				Задаём центр карты:
					<pre>
					 map.setCenter (lonLat, zoom);
					</pre>
				</h2></p>		  
			</li>
			<li>
				<h1>Создание переключателя слоёв.</h1>
		  
				<p><h2>Создаём переключатель:
					<pre>		  		  
					layerSwitcher = new OpenLayers.Control.LayerSwitcher(),
					</pre>
				Добавляем переключатель на карту:
					<pre>
					map.addControl(layerSwitcher);
					</pre>
				</h2></p>
			</li>
			<li>
				<h1>Добавление слоёв.</h1>
		  
				<p><h2>Создаём слой WMS:
					<pre>			  
					gasStation = new OpenLayers.Layer.WMS("RoadGasStation", "http://data1.geo.indorsoft.ru/geoserver/geoportal/wms?",
					    {transparent: 'true', layers: "geoportal:RoadGasStation", format: 'image/png'},
					    {isBaseLayer: false, visibility: false, projection: "EPSG:900913"}),
					</pre>
				Добавляем слой на карту:
					<pre>
					map.addLayers([osmMap,gasStation]);
					</pre>
				</h2></p>
			</li>
			<li>
				<h1>Готовый вариант.</h1>
					<a href="tutorial1_example.php">Смотреть >></a>
					<pre>
					&lt;html&gt;
					    &lt;head&gt;
                                                &lt;meta charset="utf-8"&gt;
						&lt;title&gt;OpenLayers Example&lt;/title&gt;						
						&lt;script src="OpenLayers/OpenLayers.js"&gt;&lt;/script&gt;
						&lt;script type="text/javascript"&gt;
						    function init(){
						        var lat = 54.915856,
						            lon = 37.99599,
						            zoom = 10,
						            map = new OpenLayers.Map('map'),
						            osmMap = new OpenLayers.Layer.OSM("OpenStreetMap"),
						            lonLat = new OpenLayers.LonLat(lon, lat).transform(new OpenLayers.Projection("EPSG:4326"), new OpenLayers.Projection("EPSG:900913")),
						            layerSwitcher = new OpenLayers.Control.LayerSwitcher(),
						            gasStation = new OpenLayers.Layer.WMS("RoadGasStation",
						                "http://data1.geo.indorsoft.ru/geoserver/geoportal/wms?", {transparent: 'true', layers: "geoportal:RoadGasStation", format: 'image/png'},
						                {isBaseLayer: false, visibility: false, projection: "EPSG:900913"});
						            map.addLayers([osmMap,gasStation]);
						            map.setCenter (lonLat, zoom);
						            map.addControl(layerSwitcher);
						     }
						 &lt;/script&gt;						 
					    &lt;/head&gt;
					    &lt;body onload="init()"&gt;
						&lt;div style="width:100%; height:100%" id="map"&gt;&lt;/div&gt;
					    &lt;/body&gt;
					&lt;/html&gt;
					</pre>	
			</li>
		</ol>
<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/ya.php";
?> 		
	</body>
</html>