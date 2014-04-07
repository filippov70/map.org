<ol>
    <li>
        <h3>Добавления векторного слоя на основании запроса</h3>
        <p>Векорные слои в OpenLayers реализованы в OpenLayers.Layer.Vector. Источник векторных данных устанавливается в свойстве <b><i>protocol</i></b>.<br>
                В данном примере используется WFS источник который предоставляется геопорталом. Внимание, в геоинформационном 
                портале автомобильных дорог используются нестандартные имена полей геометрии (geometryName), поэтому их 
                нужно указать явно:</p>
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
});</pre>
    </li>
    <li>
        <h3>Решение проблемы с cross-domain security</h3>
            <p>Для JavaScript сущетвует ограничения для обращения на другие адреса (домены). 
                Для решения этой проблемы используют <a href="http://trac.osgeo.org/openlayers/wiki/ru_proxyhost">proxy-скрипты</a> на языках Python или Perl.
                В самом файле скрипта (proxy.cgi) нужно внести запись о адресе геоинформационного портала автомобильных дорог LINK в список <b><i>[allowedHosts]</i></b>.
                Библиотеке OpenLayers нужно указать расположение такого скрипта в вашем веб-сервере:</p>
<pre>
OpenLayers.ProxyHost = "/cgi-bin/proxy.cgi?url=";</pre>
    </li>
    <li>
        <h3>Готовый вариант.</h3>
        <a href="tutorialex3">Смотреть >></a>
<pre>
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="utf-8"&gt;
        &lt;script src="OpenLayers/OpenLayers.js"&gt;&lt;/script&gt;
        &lt;script type="text/javascript"&gt;
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
         &lt;/script&gt;                         
    &lt;/head&gt;
    &lt;body onload="init()"&gt;
    &lt;div style="width:600px; height:600px" id="map"&gt;&lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre>
    </li>
</ol>