<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/header.php";
?>    
    <div class="jumbotron">
        <div class="container">
            <h1><a  href="http://indorsoft.ru/"><img src = "/image/logo_dark.png"/></a></h1>
        </div>
    </div>

    <div class="container">        
        <div class="row">
            <div class="col-md-4">
                <a  class = "underline_link" href="/geoext/"><h2>Карта автомобильных дорог</h2></a>
                <p>Подробная карта автомобильных дорог. Послойное представление дорожных объектов в придорожной полосе.</p>
                <p><a class="btn btn-default" href="/geoext/" role="button">Подробнее »</a></p>
            </div>
            <div class="col-md-4">          
                <a  class = "underline_link" href="/fda/"><h2>Карта ФДА</h2></a>
                <p>Поиск по управляющей компании. Вывод детальной информации по участку дороги. </p>
                <p><a class="btn btn-default" href="/fda/" role="button">Подробнее »</a></p>
            </div>
            <div class="col-md-4">          
                <a  class = "underline_link" href="/operation/"><h2>Эксплуатирующие организации</h2></a>
                <p>Вывод балансовой и обслуживающей организаций по участку дороги.</p>
                <p><a class="btn btn-default" href="/operation/" role="button">Подробнее »</a></p>
            </div>                
        </div>

        <div class="row">
            <div class="col-md-4">          
                <a  class = "underline_link" href="/avtodor/"><h2>Объекты дорожного сервиса</h2></a>
                <p>Подключение WMS-слоёв на примере сайта www.russianhighways.ru</p>
                <p><a class="btn btn-default" href="/avtodor/" role="button">Подробнее »</a></p>
            </div>               
            <div class="col-md-4">          
                <a  class = "underline_link" href="/strategy/"><h2>Транспортная стратегия</h2></a>
                <p>Карта транспортной стратегии РФ. Автомобильные дороги</p>
                <p><a class="btn btn-default" href="/strategy/" role="button">Подробнее »</a></p>
            </div>        
        </div>

        <hr>

        </br>

        <h1>Уроки</h1>

        <div class="row">
            <div class="col-md-4">
                <a  class = "underline_link" href="/tutorials/tutorial1_manual.php"><h2>Подключение WMS</h2></a>
                <p>Подключение растрового слоя из WMS-источника.</p>
                <p><a class="btn btn-default" href="/tutorials/tutorial1_manual.php" role="button">Подробнее »</a></p>
            </div>              
            <div class="col-md-4">          
                <a  class = "underline_link" href="/tutorials/tutorial3_manual.php"><h2>Подключение WFS-слоя</h2></a>
                <p>Подключение векторного слоя из WFS-источника. </p>
                <p><a class="btn btn-default" href="/tutorials/tutorial3_manual.php" role="button">Подробнее »</a></p>
            </div>
                <div class="col-md-4">          
                <a  class = "underline_link" href="/tutorials/tutorial2_manual.php"><h2>Фильтрация WFS</h2></a>
                <p>Подключение векторного слоя из WFS-источника с фильтрацией данных.</p>
                <p><a class="btn btn-default" href="/tutorials/tutorial2_manual.php" role="button">Подробнее »</a></p>
            </div>                   
        </div>
<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/footer.php";
?>