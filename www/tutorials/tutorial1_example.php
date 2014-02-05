<html>
	<head>
		<meta charset="utf-8">
		<title>OpenLayers Example</title>						
		<script src="OpenLayers/OpenLayers.js"></script>
		<script type="text/javascript">
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
						{isBaseLayer: false, visibility: true, projection: "EPSG:900913"});
					map.addLayers([osmMap,gasStation]);
					map.setCenter (lonLat, zoom);
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