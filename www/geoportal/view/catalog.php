 <div class="jumbotron">
            <div class="container">
                <h1>Каталог</h1>
            </div>
        </div>

        <div class="container">            

            <div class = "row">
                <div class="col-md-12 layer_meta">
                    <h3>Доступные сервисы</h3>
                    <h5><strong>WMS:</strong></h5>
                    <p>http://data1.geo.indorsoft.ru/geoserver/geoportal/wms</p>
                    <h5><strong>WFS:</strong></h5>
                    <p>http://data1.geo.indorsoft.ru/geoserver/geoportal/wfs</p>   
                    <h5><strong>Система координат:</strong></h5>
                    <p>WGS-84</p>                                       
                </div>
            </div>       

            <div class = "row">
                <div class="col-md-12">
                    <h3>Состав слоёв</h3>
                    </br>
                    <table class="table table-hover">                        
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>Имя</th>
                                <th>Слой</th>
                                <!--th>URL</th-->
                            </tr>
                        </thead>
                        <tbody>
                            <tr class = "info bold">
                                <td colspan = "3" align = "center" >Логические участки</td>
                            </tr>
                            <tr>                            
                                <td colspan = "3" style = "padding:0;">                             
                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            1
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Оси дорог
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadInternodalSegment_ln
                                                        </div>                            
                                                    </div>                                                                       
                                                </a>                          
                                            </div>
                                            <div id="collapse1" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах меньше 1:50 000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - линии (geoportal:RoadInternodalSegment_ln)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;TitleName&raquo; &ndash; Наименование титула </li> 
                                                                <li class="list-group-item">&laquo;TraceName&raquo; &ndash; Наименование трассы </li>
                                                                <li class="list-group-item">&laquo;StartNodeName&raquo; &ndash; Начальный узел </li>
                                                                <li class="list-group-item">&laquo;EndNodeName&raquo; &ndash; Конечный узел </li>
                                                                <li class="list-group-item">&laquo;Name&raquo; &ndash; Наименование </li>
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            2
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Участки обслуживания
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadServiceSegment_ln
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Описание:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Участки автомобильных дорог обслуживаемые подрядными организациями, которые занимаются работами по содержанию автомобильных дорог. 
                                                                </li>
                                                            </ul>
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1: 700 000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - линии (geoportal:RoadServiceSegment_ln)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;BalanceOrganizationName&raquo; &ndash; Балансовая (управляющая) организация </li>
                                                                <li class="list-group-item">&laquo;ServiceOrganizationName&raquo; &ndash; Обслуживающая организация </li>
                                                                <li class="list-group-item">&laquo;TitleName&raquo; &ndash; Наименование титула </li>
                                                                <li class="list-group-item">&laquo;TraceName&raquo; &ndash; Наименование трассы </li>
                                                                <li class="list-group-item">&laquo;RoadSegmentName&raquo; &ndash; Наименование межузлового участка </li>
                                                                <li class="list-group-item">&laquo;Position&raquo; &ndash; Начало участка(км) </li>
                                                                <li class="list-group-item">&laquo;Ending&raquo; &ndash; Конец участка (км) </li>
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                                            
                                    </div>                                                                              
                                </td>                              
                            </tr>
                            <tr class = "info bold">
                                <td colspan = "3" align = "center">Участки дороги</td>
                            </tr>                        
                           <tr>
                                <td colspan = "3" style = "padding:0;"> 
                                    <div class="panel-group" id="accordion2">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse3">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            3
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Проезжая часть
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadDrivewaySegment_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a>                          
                                            </div>
                                            <div id="collapse3" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Описание:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Основной элемент дороги, предназначенный для непосредственного движения транспортных средств.
                                                                </li>
                                                            </ul>
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:25000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - полигон (geoportal:RoadDrivewaySegment_ar)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;TitleName&raquo; &ndash; Наименование титула </li>
                                                                <li class="list-group-item">&laquo;Position&raquo; &ndash; Расположение </li>
                                                                <li class="list-group-item">&laquo;Width&raquo; &ndash; Ширина (м) </li>
                                                                <li class="list-group-item">&laquo;LaneCount&raquo; &ndash; Количество полос движения </li>
                                                                <li class="list-group-item">&laquo;CoverTypeString&raquo; &ndash; Тип покрытия </li>
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse4">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            4
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Полосы уширения
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadAccelLine_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse4" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Описание:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Полоса переходно-скоростная полоса движения, устраиваемая для обеспечения разгона или 
                                                                    торможения автомобилей при выезде из транспортного потока или въезде в общий поток, 
                                                                    движущийся по основным полосам, преимущественно на пересечениях и примыканиях, а также 
                                                                    в местах разворота автомобилей, у автобусных остановок и т.п. Устраивают двух типов: 
                                                                    постоянной ширины параллельно основной проезжей части и с постепенным изменением ширины 
                                                                    на длине отгона полосы.

                                                                </li>
                                                            </ul>
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:25000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - полигон (geoportal:RoadAccelLine_ar)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;TitleName&raquo; &ndash; Наименование титула </li>
                                                                <li class="list-group-item">&laquo;WideningTypeString&raquo; &ndash; Вид уширения </li>
                                                                <li class="list-group-item">&laquo;Width&raquo; &ndash; Ширина (м) </li>
                                                                <li class="list-group-item">&laquo;AccelArea&raquo; &ndash; Площадь полосы разгона (кв.м) </li>
                                                                <li class="list-group-item">&laquo;BrakeArea&raquo; &ndash; Площадь полосы торможения (кв.м) </li>
                                                                <li class="list-group-item">&laquo;CoverTypeString&raquo; &ndash; Тип покрытия </li>
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse5">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            5
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Обочины (Обочины)
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadEdgeSegment_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse5" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Описание:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Обочина - элемент дороги, примыкающий непосредственно к проезжей части на одном уровне с ней, 
                                                                    отличающийся типом покрытия или выделенный с помощью разметки 1.2.1 либо 1.2.2, 
                                                                    используемый для движения, остановки и стоянки в соответствии с "Правилами дорожного движения".
                                                                </li>
                                                            </ul>
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:25000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - полигон (geoportal:RoadEdgeSegment_ar)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;Square&raquo; &ndash; Площадь </li>
                                                                <li class="list-group-item">&laquo;StoppingLaneCoverTypeDescription&raquo; &ndash; Тип покрытия остновочной полосы </li>
                                                                <li class="list-group-item">&laquo;StoppingLaneWidth&raquo; &ndash; Ширина остановочной полосы </li>
                                                                <li class="list-group-item">&laquo;HardStripCoverTypeDescription&raquo; &ndash; Покрытие укрепительной полосы </li>
                                                                <li class="list-group-item">&laquo;HardStripWidth&raquo; &ndash; Ширина укрепительной полосы (м) </li>
                                                                <li class="list-group-item">&laquo;Width&raquo; &ndash; Ширина (м)</li>
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse6">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            6
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Обочины (Укрепление обочины)
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:EdgeFortification_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse6" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Описание:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Укреплённая часть обочины - часть обочины, имеющая дорожную одежду.
                                                                </li>
                                                            </ul>
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:10000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - полигон (geoportal:EdgeFortification_ar)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;Width&raquo; &ndash; Ширина (м) </li>
                                                                <li class="list-group-item">&laquo;FortificationMaterialDescription&raquo; &ndash; Материал укрепления </li>
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse7">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            7
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Обочины (Укрепительные полосы)
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:HardStrip_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse7" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Описание:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Краевая укрепительная полоса - часть обочины или разделительной полосы (на дорогах I категории), 
                                                                    непосредственно примыкающая к проезжей части и имеющая конструкцию более прочную, чем на 
                                                                    остальной части обочины. Заезд автомобильного транспорта на краевую полосу ограничен. 
                                                                    С этой целью краевую полосу отделяют сплошной разметочной линией. Возможно устройство 
                                                                    краевой полосы другого цвета, чем на основной проезжей части.
                                                                </li>
                                                            </ul>
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:10000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - полигон (geoportal:HardStrip_ar)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;Width&raquo; &ndash; Ширина (м) </li>                                                                
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse8">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            8
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Обочины (Остановочные полосы)
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:StoppingLane_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse8" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Описание:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Остановочная полоса - укреплённая часть обочины, предназначенная для вынужденной остановки автомобилей.
                                                                </li>
                                                            </ul>
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:10000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - полигон (geoportal:StoppingLane_ar)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;Width&raquo; &ndash; Ширина (м) </li>                                                                
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse9">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            9
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Тротуары и пешеходные дорожки
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadSidewalk_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse9" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Описание:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Пешеходная дорожка - обособленное сооружение предназначенное для движения пешеходов, имеющее твёрдый 
                                                                    тип покрытия.
                                                                </br></br>
                                                                    Тротуар - пешеходная дорожка, примыкающая к проезжей части (располагающаяся сбоку или по бокам улицы) 
                                                                    и обрамлённая бордюром для функционального отделения от неё или отделённая от неё газоном.
                                                                </li>
                                                            </ul>
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:10000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - полигон (geoportal:RoadSidewalk_ar)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;SidewalkTypeString&raquo; &ndash; Вид тротуара </li>                                                                
                                                                <li class="list-group-item">&laquo;PlacementString&raquo; &ndash; Расположение </li> 
                                                                <li class="list-group-item">&laquo;CoveringTypeString&raquo; &ndash; Тип покрытия </li> 
                                                                <li class="list-group-item">&laquo;DistanceFromMarginalStrip&raquo; &ndash; Расстояние от кромки (м) </li> 
                                                                <li class="list-group-item">&laquo;RealLength&raquo; &ndash; Фактическая дина (м) </li>                                                                                                                                                                                                                                                                 
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse10">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            10
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Бордюры
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadBorder_ln
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse10" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Описание:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Бордюр - бортовые камни, отделяющие проезжую часть дороги от обочин, тротуаров и т.п.
                                                                </li>
                                                            </ul>
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:10000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - линии (geoportal:RoadBorder_ln)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;BorderTypeString&raquo; &ndash; Тип бордюра </li>                                                                
                                                                <li class="list-group-item">&laquo;PlacementString&raquo; &ndash; Расположение </li> 
                                                                <li class="list-group-item">&laquo;HeightStart&raquo; &ndash; Высота бордюра в начале (м) </li> 
                                                                <li class="list-group-item">&laquo;HeightEnd&raquo; &ndash; Высота бордюра в конце (м) </li>                                                                                                                                                                                                                                                                                                                                
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse11">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            11
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Проблемные участки
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadProblemSegment_ln
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse11" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Описание:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Проблемные участки - участки дорог, требующие дополнительных 
                                                                    мер и ресурсов для их содержания (вечно мерзлотные, снегозаносимые, оползневые, затопляемые и др.).
                                                                </li>
                                                            </ul>
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:10000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - линии (geoportal:RoadProblemSegment_ln)
                                                                </li>                                                                
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse12">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            12
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Откосы насыпи
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadSlopeSegment_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse12" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Описание:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Откосы насыпи - боковые наклонные поверхности насыпи.
                                                                </li>
                                                            </ul>
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:25000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - полигон (geoportal:RoadSlopeSegment_ar)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;Square&raquo; &ndash; Площадь (кв.м) </li>                                                                
                                                                <li class="list-group-item">&laquo;SlopeSquare&raquo; &ndash; Площадь откосов (кв.м) </li> 
                                                                <li class="list-group-item">&laquo;LeftWidth&raquo; &ndash; Заложение слева (м) </li> 
                                                                <li class="list-group-item">&laquo;LeftHeight&raquo; &ndash; Высота левого (м) </li>                                                                                                                                                                                                                                                                                                                                
                                                                <li class="list-group-item">&laquo;RightWidth&raquo; &ndash; Заложение справа (м) </li>                                                                
                                                                <li class="list-group-item">&laquo;RightHeight&raquo; &ndash; Высота справа (м) </li> 
                                                                <li class="list-group-item">&laquo;ForcementTypeString&raquo; &ndash; Укрепление </li> 
                                                                <li class="list-group-item">&laquo;RoadbedWidth&raquo; &ndash; Ширина земельного полотна (м) </li>   
                                                                <li class="list-group-item">&laquo;SoilTypeString&raquo; &ndash; Вид грунта </li>                                                                
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse13">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            13
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Разделительные полосы
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadDemarcationStripSegment_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse13" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Описание:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Разделительная полоса – элемент дороги, выделенный конструктивно и (или) с 
                                                                    помощью разметки 1.2.1, разделяющий смежные проезжие части и не предназначенный 
                                                                    для движения и остановки транспортных средств.
                                                                </li>
                                                            </ul>
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:25000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - полигон (geoportal:RoadDemarcationStripSegment_ar)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;Square&raquo; &ndash; Площадь (кв.м) </li>                                                                
                                                                <li class="list-group-item">&laquo;Width&raquo; &ndash; Ширина (м) </li> 
                                                                <li class="list-group-item">&laquo;ConstructionTypeString&raquo; &ndash; Конструкция </li> 
                                                                <li class="list-group-item">&laquo;ConsolidationMaterialString&raquo; &ndash; Материал укрепления </li>                                                                                                                                                                                                                                                                                                                                
                                                                <li class="list-group-item">&laquo;LeftSafetyStripCoverTypeString&raquo; &ndash; Тип покрытия слева </li>                                                                
                                                                <li class="list-group-item">&laquo;RightSafetyStripCoverTypeString&raquo; &ndash; Тип покрытия справа </li> 
                                                                <li class="list-group-item">&laquo;LeftSafetyStripWidth&raquo; &ndash; Ширина слева (м) </li> 
                                                                <li class="list-group-item">&laquo;RightSafetyStripWidth&raquo; &ndash; Ширина справа (м) </li>                                                                                                                                 
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse14">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            14
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Полосы безопасности
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:SafetyStrip_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse14" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Описание:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Полоса безопасности - краевая полоса у разделительной полосы.
                                                                </li>
                                                            </ul>
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:25000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - полигон (geoportal:SafetyStrip_ar)
                                                                </li>                                                                
                                                            </ul>                                                             
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>              
                                    </div>                                     
                                </td>                                                            
                            </tr> 
                            <tr class = "info bold">
                                <td colspan = "3" align = "center">Сооружения</td>
                            </tr>                            
                           <tr>
                                <td colspan = "3" style = "padding:0;"> 
                                    <div class="panel-group" id="accordion3">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion3" href="#collapse15">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            15
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Водоотведение
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadDrainageSegment_ln, geoportal:RoadDrainageSegment_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a>                          
                                            </div>
                                            <div id="collapse15" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Описание:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Водоотведение - сооружения для сбора поверхностных вод и организации стока.
                                                                </li>
                                                            </ul>
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:10000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - линии (geoportal:RoadDrainageSegment_ln), полигон (geoportal:RoadDrainageSegment_ar)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;Square&raquo; &ndash; Площадь (кв.м) </li>                                                                
                                                                <li class="list-group-item">&laquo;DrainageLength&raquo; &ndash; Длина (м) </li> 
                                                                <li class="list-group-item">&laquo;ForcementTypeString&raquo; &ndash; Тип укрепления </li> 
                                                                <li class="list-group-item">&laquo;BldTypeString&raquo; &ndash; Тип водоотводного сооружения </li>                                                                                                                                                                                                
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            16
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Снегозащитные сооружения
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadSnowProtection_ln, geoportal:RoadSnowProtection_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse16" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Описание:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Снегозащитные сооружения - все виды устройств и оборудования, которые служат для предотвращения снежных заносов проезжей части 
                                                                    дороги: снегозащитные устройства, щитовые ограждения, заборы, стенки, снегозащитные посадки.
                                                                </li>
                                                            </ul>
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:10000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - линии(geoportal:RoadSnowProtection_ln), полигон (geoportal:RoadSnowProtection_ar)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;Square&raquo; &ndash; Площадь (кв.м) </li>                                                                
                                                                <li class="list-group-item">&laquo;SnowProtectTypeString&raquo; &ndash; Вид сооружения </li> 
                                                                <li class="list-group-item">&laquo;LineCount&raquo; &ndash; Количество рядов (шт.) </li> 
                                                                <li class="list-group-item">&laquo;ShieldCount&raquo; &ndash; Количество щитов (шт.) </li>                                                                                                                                                                                                
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion3" href="#collapse17">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            17
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Шумозащитные сооружения
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadNoiseBarrier_ln
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse17" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Описание:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Шумозащитные сооружения - все виды устройств и оборудования, которые служат для снижения 
                                                                    уровня шумового загрязнения от дороги: шумозащитные устройства, щитовые ограждения, заборы, 
                                                                    стенки, шумозащитные посадки.
                                                                </li>
                                                            </ul>
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:10000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - линии (geoportal:RoadNoiseBarrier_ln)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;Square&raquo; &ndash; Площадь (кв.м) </li>                                                                
                                                                <li class="list-group-item">&laquo;BarrierTypeDescription&raquo; &ndash; Вид сооружения </li> 
                                                                <li class="list-group-item">&laquo;TranslucencyDescription&raquo; &ndash; Светопроницаемость </li> 
                                                                <li class="list-group-item">&laquo;Distance&raquo; &ndash; Расстояние от кромки (м) </li>                                                                                                                                                                                                
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion3" href="#collapse18">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            18
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Подпорные стенки
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadBreastWall_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse18" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Описание:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Подпорные стены - инженерные сооружения, служащие для удержания массива грунта от обрушения. 
                                                                </li>
                                                            </ul>
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:10000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - полигон (geoportal:RoadBreastWall_ar)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;MaterialTypeString&raquo; &ndash; Материал </li>                                                                                                                                                                                                
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion3" href="#collapse19">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            19
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Съезды
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadExit_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse19" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Описание:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Съезд (въезд) - соединительный элемент пересечения или примыкания, предназначенный для 
                                                                    сопряжения проезжих частей дорог, подъездов к домам, выездов в поле и пр. между собой.
                                                                </li>
                                                            </ul>
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:25000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - полигон (geoportal:RoadExit_ar)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;Square&raquo; &ndash; Площадь (кв.м) </li> 
                                                                <li class="list-group-item">&laquo;Width&raquo; &ndash; Ширина (м) </li>
                                                                <li class="list-group-item">&laquo;Length&raquo; &ndash; Длина (м) </li>
                                                                <li class="list-group-item">&laquo;Name&raquo; &ndash; Наименование </li>
                                                                <li class="list-group-item">&laquo;Angle&raquo; &ndash; Угол примыкания (градусы) </li>
                                                                <li class="list-group-item">&laquo;CurveStart&raquo; &ndash; Начало закругления(км+) </li>
                                                                <li class="list-group-item">&laquo;CurveEnd&raquo; &ndash; Конец закругления(км+) </li>                                                                                                                                                                                                                                                              
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>                                      
                                </td>                                
                            </tr> 
                            <tr class = "info bold">
                                <td colspan = "3" align = "center">Инженерное обустройство</td>
                            </tr>                          
                           <tr>
                                <td colspan = "3" style = "padding:0;"> 
                                    <div class="panel-group" id="accordion4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion4" href="#collapse20">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            20
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Километровые столбы
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadDistanceMark_pt
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse20" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1 : 50 000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - точки (geoportal:RoadDistanceMark_pt)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;Distance&raquo; &ndash; Расстояние от кромки (м) </li> 
                                                                <li class="list-group-item">&laquo;LocationTypeString&raquo; &ndash; Способ размещения </li>
                                                                <li class="list-group-item">&laquo;DirectionString&raquo; &ndash; Направление </li>
                                                                <li class="list-group-item">&laquo;KMValue&raquo; &ndash; Номер километрового столба </li>
                                                                <li class="list-group-item">&laquo;Text&raquo; &ndash; Текст на знаке </li>
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                      
                                    </div>                                     
                                </td>                                
                            </tr>  
                            <tr class = "info bold">
                                <td colspan = "3" align = "center">Придорожная полоса</td>
                            </tr>                          
                           <tr>
                                <td colspan = "3" style = "padding:0;"> 
                                    <div class="panel-group" id="accordion5">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion5" href="#collapse21">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            21
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Земельные участки
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadROFSegment_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse21" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Описание:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Земельные участки на которых расположена автомобильная дорога.
                                                                </li>
                                                            </ul>
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1 : 50 000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - полигон (geoportal:RoadROFSegment_ar)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;Square&raquo; &ndash; Плащадь (кв.м.) </li>
                                                                <li class="list-group-item">&laquo;RepresentSquare&raquo; &ndash; Плащадь по документам(кв.м.) </li>
                                                                <li class="list-group-item">&laquo;CadasterNumber&raquo; &ndash; Кадастровый номер </li>
                                                                <li class="list-group-item">&laquo;UsageString&raquo; &ndash; Разрешённое использование </li>
                                                                <li class="list-group-item">&laquo;RightTypeString&raquo; &ndash; Вид права </li>
                                                                <li class="list-group-item">&laquo;RightCertificationDocName&raquo; &ndash; Наименование правоудостоверяющего документа </li>
                                                                <li class="list-group-item">&laquo;RightCertificationDocNumber&raquo; &ndash; Номер правоудостоверяющего документа </li>
                                                                <li class="list-group-item">&laquo;RightCertificationDocRegistrationDate&raquo; &ndash; Дата правоудостоверяющего документа </li>
                                                                <li class="list-group-item">&laquo;RightEstablishmentDocName&raquo; &ndash; Наименование правоустанавливающего документа </li>
                                                                <li class="list-group-item">&laquo;RightEstablishmentDocNumber&raquo; &ndash; Номер правоустанавливающего документа </li>
                                                                <li class="list-group-item">&laquo;RightEstablishmentDocRegistrationDate&raquo; &ndash; Дата правоустанавливающего документа </li>
                                                                <li class="list-group-item">&laquo;Notes&raquo; &ndash; Примечания </li>                                                                
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion5" href="#collapse22">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            22
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Придорожные полосы
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:Wayside_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse22" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Описание:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Придорожная полоса автомобильной дороги - зона с особыми условиями использования территории. 
                                                                    Порядок установления и использования придорожных полос автомобильных дорог федерального значения 
                                                                    устанавливается на основании Приказа Минтранса от 13 января 2010 №4 и в соответствии со статьей 
                                                                    26 Федерального закона от 8 ноября 2007 г. N 257-ФЗ "Об автомобильных дорогах и о 
                                                                    дорожной деятельности в Российской Федерации и о внесении изменений в отдельные законодательные 
                                                                    акты Российской Федерации"1 (далее - Федеральный закон от 8 ноября 2007 г. N 257-ФЗ) и 
                                                                    пунктом 5.2.53.28 Положения о Министерстве транспорта Российской Федерации, утвержденного 
                                                                    постановлением Правительства Российской Федерации от 30 июля 2004 г. N 3952.
                                                                </li>
                                                            </ul>
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1 : 50 000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - полигон (geoportal:Wayside_ar)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;Name&raquo; &ndash; Наименование </li>
                                                                <li class="list-group-item">&laquo;Square&raquo; &ndash; Плащадь (кв.м.) </li>
                                                                <li class="list-group-item">&laquo;Width&raquo; &ndash; Ширина(м) </li>
                                                                <li class="list-group-item">&laquo;TitleName&raquo; &ndash; Наименование титула </li>                                                              
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                         
                                    </div>                                       
                                </td>                                
                            </tr>  
                            <tr class = "info bold">
                                <td colspan = "3" align = "center">Недвижимость</td>
                            </tr>                          
                           <tr>
                                <td colspan = "3" style = "padding:0;"> 
                                    <div class="panel-group" id="accordion6">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion6" href="#collapse23">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            23
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Автозаправочные станции
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadGasStation_pt, geoportal:RoadGasStation_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a>                          
                                            </div>
                                            <div id="collapse23" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Описание:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Комплекс оборудования на придорожной территории, предназначенный для заправки топливом транспортных средств.
                                                                </li>
                                                            </ul>
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:700 000 00
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - полигон (geoportal:RoadGasStation_ar), точка (geoportal:RoadGasStation_pt)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;Name&raquo; &ndash; Наименование </li>
                                                                <li class="list-group-item">&laquo;Square&raquo; &ndash; Плащадь (кв.м.) </li>
                                                                <li class="list-group-item">&laquo;SiteSquare&raquo; &ndash; Площадь участка (кв.м) </li>
                                                                <li class="list-group-item">&laquo;Distance&raquo; &ndash; Расстояние от кромки(м) </li>                                                              
                                                                <li class="list-group-item">&laquo;PhoneNumber&raquo; &ndash; Номер телефона </li>
                                                                <li class="list-group-item">&laquo;WorkingTime&raquo; &ndash; Часы работы </li>
                                                                <li class="list-group-item">&laquo;ColumnCount&raquo; &ndash; Количество колонок </li>
                                                                <li class="list-group-item">&laquo;Power&raquo; &ndash; Мощность(количество заправок в сутки) </li>                                                                   
                                                                <li class="list-group-item">&laquo;TitleName&raquo; &ndash; Наименование титула </li> 
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion6" href="#collapse24">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            24
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Посты ГИБДД
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadGAIPost_pt, geoportal:RoadGAIPost_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse24" class="panel-collapse collapse">
                                               <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:700 000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - точка (geoportal:RoadGAIPost_pt), полигон (geoportal:RoadGAIPost_ar)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;Name&raquo; &ndash; Наименование </li>
                                                                <li class="list-group-item">&laquo;Square&raquo; &ndash; Плащадь (кв.м.) </li>
                                                                <li class="list-group-item">&laquo;SiteSquare&raquo; &ndash; Площадь участка (кв.м) </li>
                                                                <li class="list-group-item">&laquo;Distance&raquo; &ndash; Расстояние от кромки(м) </li>                                                              
                                                                <li class="list-group-item">&laquo;PhoneNumber&raquo; &ndash; Номер телефона </li>
                                                                <li class="list-group-item">&laquo;WorkingTime&raquo; &ndash; Часы работы </li>
                                                                
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion6" href="#collapse25">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            25
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Гостиницы
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadHotel_pt, geoportal:RoadHotel_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse25" class="panel-collapse collapse">
                                               <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:700 000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - точка (geoportal:RoadHotel_pt), полигон (geoportal:RoadHotel_ar)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;Name&raquo; &ndash; Наименование </li>
                                                                <li class="list-group-item">&laquo;Square&raquo; &ndash; Плащадь (кв.м.) </li>
                                                                <li class="list-group-item">&laquo;SiteSquare&raquo; &ndash; Площадь участка (кв.м) </li>
                                                                <li class="list-group-item">&laquo;Distance&raquo; &ndash; Расстояние от кромки(м) </li>                                                              
                                                                <li class="list-group-item">&laquo;PhoneNumber&raquo; &ndash; Номер телефона </li>
                                                                <li class="list-group-item">&laquo;WorkingTime&raquo; &ndash; Часы работы </li>
                                                                
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion6" href="#collapse26">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            26
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Парковки
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadParking_pt, geoportal:RoadParking_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse26" class="panel-collapse collapse">
                                               <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:700 000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - точка (geoportal:RoadParking_pt), полигон (geoportal:RoadParking_ar)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;Name&raquo; &ndash; Наименование </li>
                                                                <li class="list-group-item">&laquo;Square&raquo; &ndash; Плащадь (кв.м.) </li>
                                                                <li class="list-group-item">&laquo;SiteSquare&raquo; &ndash; Площадь участка (кв.м) </li>
                                                                <li class="list-group-item">&laquo;Distance&raquo; &ndash; Расстояние от кромки(м) </li>                                                              
                                                                <li class="list-group-item">&laquo;PhoneNumber&raquo; &ndash; Номер телефона </li>
                                                                <li class="list-group-item">&laquo;WorkingTime&raquo; &ndash; Часы работы </li>
                                                                
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion6" href="#collapse27">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            27
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Пункты общепита
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadPublicCatering_pt, geoportal:RoadPublicCatering_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse27" class="panel-collapse collapse">
                                               <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:700 000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - точка (geoportal:RoadPublicCatering_pt), полигон (geoportal:RoadPublicCatering_ar)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;Name&raquo; &ndash; Наименование </li>
                                                                <li class="list-group-item">&laquo;Square&raquo; &ndash; Плащадь (кв.м.) </li>
                                                                <li class="list-group-item">&laquo;SiteSquare&raquo; &ndash; Площадь участка (кв.м) </li>
                                                                <li class="list-group-item">&laquo;Distance&raquo; &ndash; Расстояние от кромки(м) </li>                                                              
                                                                <li class="list-group-item">&laquo;PhoneNumber&raquo; &ndash; Номер телефона </li>
                                                                <li class="list-group-item">&laquo;WorkingTime&raquo; &ndash; Часы работы </li>
                                                                
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion6" href="#collapse28">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            28
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Автомойки
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadWashingPoint_pt, geoportal:RoadWashingPoint_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse28" class="panel-collapse collapse">
                                               <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:700 000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - точка (geoportal:RoadWashingPoint_pt), полигон (geoportal:RoadWashingPoint_ar)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;Name&raquo; &ndash; Наименование </li>
                                                                <li class="list-group-item">&laquo;Square&raquo; &ndash; Плащадь (кв.м.) </li>
                                                                <li class="list-group-item">&laquo;SiteSquare&raquo; &ndash; Площадь участка (кв.м) </li>
                                                                <li class="list-group-item">&laquo;Distance&raquo; &ndash; Расстояние от кромки(м) </li>                                                              
                                                                <li class="list-group-item">&laquo;PhoneNumber&raquo; &ndash; Номер телефона </li>
                                                                <li class="list-group-item">&laquo;WorkingTime&raquo; &ndash; Часы работы </li>
                                                                
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion6" href="#collapse29">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            29
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Станции техобслуживания
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadTechServiceStation_pt, geoportal:RoadTechServiceStation_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse29" class="panel-collapse collapse">
                                               <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:700 000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - точка (geoportal:RoadTechServiceStation_pt) , полигон (geoportal:RoadTechServiceStation_ar)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;Name&raquo; &ndash; Наименование </li>
                                                                <li class="list-group-item">&laquo;Square&raquo; &ndash; Плащадь (кв.м.) </li>
                                                                <li class="list-group-item">&laquo;SiteSquare&raquo; &ndash; Площадь участка (кв.м) </li>
                                                                <li class="list-group-item">&laquo;Distance&raquo; &ndash; Расстояние от кромки(м) </li>                                                              
                                                                <li class="list-group-item">&laquo;PhoneNumber&raquo; &ndash; Номер телефона </li>
                                                                <li class="list-group-item">&laquo;WorkingTime&raquo; &ndash; Часы работы </li>
                                                                
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion6" href="#collapse30">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            30
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Туалеты
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadToilet_ar
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse30" class="panel-collapse collapse">
                                               <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:700 000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - полигон (geoportal:RoadToilet_ar)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;Name&raquo; &ndash; Наименование </li>
                                                                <li class="list-group-item">&laquo;Square&raquo; &ndash; Плащадь (кв.м.) </li>
                                                                <li class="list-group-item">&laquo;SiteSquare&raquo; &ndash; Площадь участка (кв.м) </li>
                                                                <li class="list-group-item">&laquo;Distance&raquo; &ndash; Расстояние от кромки(м) </li>                                                              
                                                                <li class="list-group-item">&laquo;PhoneNumber&raquo; &ndash; Номер телефона </li>
                                                                <li class="list-group-item">&laquo;WorkingTime&raquo; &ndash; Часы работы </li>
                                                                
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion6" href="#collapse31">
                                                    <div class = "row">
                                                        <div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                            31
                                                        </div>
                                                        <div class = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            Пункты оплаты
                                                        </div>
                                                        <div class = "col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                            geoportal:RoadTollStation_pt
                                                        </div>                            
                                                    </div>                                                                       
                                                </a> 
                                            </div>
                                            <div id="collapse31" class="panel-collapse collapse">
                                               <div class="panel-body">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <h5>
                                                                Оформление WMS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Виден на масштабах крупнее 1:700 000
                                                                </li>                                                                
                                                            </ul> 
                                                            <h5>
                                                                Данные предоставляемые по WFS:
                                                            </h5>                                                        
                                                             <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    Тип геометрии  - точки (geoportal:RoadTollStation_pt)
                                                                </li>                                                                
                                                            </ul>                                                                                                                        
                                                            <h5>
                                                                Атрибуты:
                                                            </h5>                                                         
                                                            <ul class="list-group">
                                                                <li class="list-group-item">&laquo;Name&raquo; &ndash; Наименование </li>
                                                                <li class="list-group-item">&laquo;Square&raquo; &ndash; Плащадь (кв.м.) </li>
                                                                <li class="list-group-item">&laquo;SiteSquare&raquo; &ndash; Площадь участка (кв.м) </li>
                                                                <li class="list-group-item">&laquo;Distance&raquo; &ndash; Расстояние от кромки(м) </li>                                                              
                                                                <li class="list-group-item">&laquo;PhoneNumber&raquo; &ndash; Номер телефона </li>
                                                                <li class="list-group-item">&laquo;WorkingTime&raquo; &ndash; Часы работы </li>
                                                                
                                                            </ul>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                                      
                                    </div>                                     
                                </td>                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>