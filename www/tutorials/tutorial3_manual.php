<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>OpenLayers Example 4</title>
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
		<h1>Подключение векторного слоя из WFS-источника</h1>
		<ol>
			<li>
				<h1>Подготовка</h1>
		  
				<p><h2>Выполнить пункты 1-3 из предыдущего <a href="tutorial2_manual.php" >примера</a></h2></p>
                <p><h2><b>Вниание! По протоколу WFS данные сначала скачиваеются к Вам полностью, а только потом отображаются на карте.</b></h2></p>
			</li>
			<li>
				<h1>Добавления векторного слоя на основании запроса</h1>
		  
				<p><h2>Векорные слои в OpenLayers реализованы в OpenLayers.Layer.Vector. Источник векторных данных устанавливается в свойстве <b><i>protocol</i></b>.<br>
				В данном примере используется WFS источник который предоставляется геопорталом. Внимание, в геоинформационном портале автомобильных дорог используются нестандартные имена полей геометрии (geometryName), поэтому их нужно указать явно:				
					<pre>
				    layerWayside = new OpenLayers.Layer.Vector('Придорожная полоса', {
						strategies: [new OpenLayers.Strategy.Fixed()],
						protocol: new OpenLayers.Protocol.WFS({
							version: '1.1.0',
							url: 'http://data1.geo.indorsoft.ru/geoserver/geoportal/wfs',
							featurePrefix: 'geoportal',
							featureType: 'Wayside_ar',
							featureNS: 'http://geoportal.indorsoft.ru/road',
							geometryName: 'geom_ar'
						}),
					});
					</pre>
				</h2></p>		  
			</li>
			<li>
				<h1>
				Решение проблемы с cross-domain security
				</h1>
				<p><h2>
				Для JavaScript сущетвует ограничения для обращения на другие адреса (домены). 
				Для решения этой проблемы используют <a href="http://trac.osgeo.org/openlayers/wiki/ru_proxyhost">proxy-скрипты</a> на языках Python или Perl.
				В самом файле скрипта (proxy.cgi) нужно внести запись о адресе геоинформационного портала автомобильных дорог LINK в список <b><i>[allowedHosts]</i></b>.
				Библиотеке OpenLayers нужно указать расположение такого скрипта в вашем веб-сервере:
				<pre>
					OpenLayers.ProxyHost = "/cgi-bin/proxy.cgi?url=";
				</pre>
				</h2></p>
            </li>
			<li>
				<h1>Готовый вариант.</h1>
					<a href="tutorial3_example.php">Смотреть >></a>
					<pre>
					&lt;html&gt;
					    &lt;head&gt;
						// другие элементы head
                                                &lt;meta charset="utf-8"&gt;
						&lt;script src="OpenLayers/OpenLayers.js"&gt;&lt;/script&gt;
						&lt;script type="text/javascript"&gt;
						OpenLayers.ProxyHost = "/cgi-bin/proxy.cgi?url=";
						    function init(){
						        var lat = 54.915856,
							lon = 37.99599,
							zoom = 10,
							map = new OpenLayers.Map('map'),
							osmMap = new OpenLayers.Layer.OSM('OpenStreetMap'),
							lonLat = new OpenLayers.LonLat(lon, lat).transform(new OpenLayers.Projection("EPSG:4326"), new OpenLayers.Projection("EPSG:900913")),
							layerSwitcher = new OpenLayers.Control.LayerSwitcher(),
							layerWayside = new OpenLayers.Layer.Vector('Придорожная полоса', {
								strategies: [new OpenLayers.Strategy.Fixed()],
								protocol: new OpenLayers.Protocol.WFS({
									version: '1.1.0',
									url: 'http://data1.geo.indorsoft.ru/geoserver/geoportal/wfs',
									featurePrefix: 'geoportal',
									//srsName: 'EPSG:4326',
									featureType: 'Wayside_ar',
									featureNS: 'http://geoportal.indorsoft.ru/road',
									geometryName: 'geom_ar'
								}),
							});
							console.log(layerWayside);
							console.log(layerWayside.features);
							map.addLayers([osmMap, layerWayside]);
							map.setCenter (lonLat, zoom);
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
									
			</li>
		</ol>
<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/ya.php";
?> 		
	</body>
</html>