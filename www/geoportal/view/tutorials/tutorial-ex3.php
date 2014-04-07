<html>
    <head>
        <meta charset="utf-8">
        <script src="/jslib/OpenLayers/lib/OpenLayers.js"></script>
        <script type="text/javascript">
            OpenLayers.ProxyHost = "/cgi-bin/proxy.cgi?url=";
            function init() {
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
                            featureType: 'Wayside_ar',
                            featureNS: 'http://geoportal.indorsoft.ru/road',
                            geometryName: 'geom_ar'
                        }),
                    });
                map.addLayers([osmMap, layerWayside]);
                map.setCenter(lonLat, zoom);
                map.addControl(layerSwitcher);
            }
         </script>                         
    </head>
    <body onload="init()">
    <div style="width:600px; height:600px" id="map"></div>
<?php
require_once VIEW_DIR."ya.php";
?>     
    </body>
</html>