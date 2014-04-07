<ol>
    <li>
        <h3>Установка OpenLayers.</h3>
        <p>Скачиваем библиотеку и распаковываем её в свой домашний каталог. Для нормальной работы 
        достаточно скопировать файл OpenLayers.js  и каталоги theme и img.</p>       
    </li>
    <li>
        <h3>Заготовка для карты.</h3>
        <p>Создаём исходный файл, в который будет встроена карта. (OpenLayers поддерживает встраивание карт в
         любой блочный элемент html-кода с заданными размерами width и height ). Кроме этого нужно подключить 
         скрипт из библиотеки OpenLayers:</p>
<pre>
&lt;html&gt;
    &lt;head&gt;
       &lt;title&gt;OpenLayers Example&lt;/title&gt;
       &lt;script src = "OpenLayers/OpenLayers.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
       &lt;div style = "width:100%; height:100% id = "map"&gt;&lt;/div&gt;  
    &lt;/body&gt;
&lt;/html&gt;</pre>
    </li>
    <li>
        <h3>Создание объекта, отображающего карту.</h3>
        <p>Создаём объект, который будет отвечать за отображение карты:</p>
<pre>
 map = new OpenLayers.Map('mapId'),</pre>
        <p>В конструкторе объекта map использует аргумент – «mapId». Это ID блочного элемента html, в который будет 
            отображаться карта. Устанавливаем координаты центра карты и начальный масштаб:</p>
<pre>
lat = 54.915856,                
lon = 37.99599,                 
zoom = 10,</pre>
        <p>Преобразовываем координаты в нужную проекцию:</p>
<pre>
lonLat = new OpenLayers.LonLat(lon, lat).transform(new OpenLayers.Projection("EPSG:4326"), new OpenLayers.Projection("EPSG:900913")),</pre>
        <p>Задаём центр карты:</p>
<pre>
map.setCenter (lonLat, zoom);</pre>
    </li>
    <li>
        <h3>Создание переключателя слоёв.</h3>
        <p>Создаём переключатель:</p>
<pre>
layerSwitcher = new OpenLayers.Control.LayerSwitcher(),</pre>
        <p>Добавляем переключатель на карту:</p>
<pre>
map.addControl(layerSwitcher);</pre>
    </li>
    <li>
        <h3>Добавление слоёв.</h3>
        <p>Создаём слой WMS:</p>
<pre>
gasStation = new OpenLayers.Layer.WMS("RoadGasStation", "http://data1.geo.indorsoft.ru/geoserver/geoportal/wms?",
    {transparent: 'true', layers: "geoportal:RoadGasStation", format: 'image/png'},
    {isBaseLayer: false, visibility: false, projection: "EPSG:900913"}),</pre>
        <p>Добавляем слой на карту:</p>
<pre>
map.addLayers([osmMap,gasStation]);</pre>
    </li>
    <li>
        <h3>Готовый вариант.</h3>
        <a href="tutorialex1">Смотреть >></a>
<pre>
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="utf-8"&gt;
        &lt;title&gt;OpenLayers Example&lt;/title&gt;                       
        &lt;script src="OpenLayers/OpenLayers.js"&gt;&lt;/script&gt;
        &lt;script type="text/javascript"&gt;
            function init() {
                var lat = 54.915856,
                    lon = 37.99599,
                    zoom = 10,
                    map = new OpenLayers.Map('map'),
                    osmMap = new OpenLayers.Layer.OSM("OpenStreetMap"),
                    lonLat = new OpenLayers.LonLat(lon, lat).transform(new OpenLayers.Projection("EPSG:4326"), new OpenLayers.Projection("EPSG:900913")),
                    layerSwitcher = new OpenLayers.Control.LayerSwitcher(),
                    gasStation = new OpenLayers.Layer.WMS("RoadGasStation",
                        "http://data1.geo.indorsoft.ru/geoserver/geoportal/wms?", {
                            transparent: 'true',
                            layers: "geoportal:RoadGasStation",
                            format: 'image/png'
                        }, {
                            isBaseLayer: false,
                            visibility: true,
                            projection: "EPSG:900913"
                        });
                map.addLayers([osmMap, gasStation]);
                map.setCenter(lonLat, zoom);
                map.addControl(layerSwitcher);
            }
         &lt;/script&gt;                         
    &lt;/head&gt;
    &lt;body onload="init()"&gt;
        &lt;div style="width:100%; height:100%" id="map"&gt;&lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;</pre>
    </li>
</ol>