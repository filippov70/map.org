<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="robots" content="index, follow">
<meta name="keywords" content="1С-Битрикс, CMS, PHP, bitrix, система управления контентом">
<meta name="description" content="1С-Битрикс: Управление сайтом">
<link href="/geoportal/view/avtodor/core.css" type="text/css" rel="stylesheet">
<link href="/geoportal/view/avtodor/style_002.css" type="text/css" rel="stylesheet">
<link href="/geoportal/view/avtodor/style_003.css" type="text/css" rel="stylesheet">
<link href="/geoportal/view/avtodor/styles.css" type="text/css" rel="stylesheet">
<link href="/geoportal/view/avtodor/template_styles.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/geoportal/view/avtodor/core.js"></script>
<script type="text/javascript" src="/geoportal/view/avtodor/core_ajax.js"></script>
<script type="text/javascript" src="/geoportal/view/avtodor/session.js"></script>

<title>Объекты дорожного сервиса</title>
<script src="/geoportal/view/avtodor/jquery-1.js" type="text/javascript" language="javascript"></script>
<script src="/geoportal/view/avtodor/jquery_002.js" type="text/javascript" language="javascript"></script>
<script src="/geoportal/view/avtodor/jquery_003.js" type="text/javascript" language="javascript"></script>
<script src="/geoportal/view/avtodor/jquery_004.js" type="text/javascript" language="javascript"></script>
<script src="/geoportal/view/avtodor/jquery-ui-1.js" type="text/javascript" language="javascript"></script>
<script src="/geoportal/view/avtodor/jquery.js" type="text/javascript" language="javascript"></script>
<script src="/geoportal/view/avtodor/site.js" type="text/javascript" language="javascript"></script>
<link rel="icon" href="http://www.russianhighways.ru/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="http://www.russianhighways.ru/favicon.ico" type="image/x-icon">
<link href="/geoportal/view/avtodor/jquery.css" type="text/css" rel="stylesheet">
<link href="/geoportal/view/avtodor/style.css" type="text/css" rel="stylesheet">


	    <!--ExtJs-->
	    <script type="text/javascript" charset="utf-8" src="/jslib/extjs/ext-all.js"></script>
	    <link rel="stylesheet" type="text/css" href="/jslib/extjs/resources/css/ext-all.css"/>
	    <link rel="stylesheet" type="text/css" href="/jslib/extjs/resources/ext-theme-gray/ext-theme-gray-all.css"/>

	    <!--OpenLayer-->
	    <script src="/jslib/OpenLayers/lib/OpenLayers.js"></script>
	    <!--script src="http://api-maps.yandex.ru/1.1/index.xml?key=AN_b70oBAAAAjxliYwIAZVeJO3-qlxI70qk3hk2nuaa1TgkAAAAAAAAAAADqAFYT--zW10R8t4NuN-XR-tQ5Tg==&modules=hotspots" type="text/javascript"></script-->
	    <!--script src="/jslib/OpenLayers/yandex/OL_Yandex.js"></script-->
	    <!--script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAINgesJb4VJ2iYHIcc-gT7hQGhS5yCmtMNZMUBKgpbJFW2uH_cRSd35D9AE7VSWY096Cd7dLkCk3bRA" type="text/javascript" encoding="utf-8"></script-->

	    <!-- GeoExt resources -->
	    <link rel="stylesheet" type="text/css" href="/jslib/geoext/resources/css/popup.css"/>
	    <script type="text/javascript" charset="utf-8" src="/jslib/geoext/src/GeoExt/GeoExt.js"></script>

		<!-- Custom scripts -->
	    <script type="text/javascript" src="/geoportal/view/js/loader.js"></script>
	    <!--script type="text/javascript" src="execute.js"></script-->

   		<!--script src="OpenLayers/OpenLayers.js"></script-->
		<script src="/geoportal/view/js/avtodor.js"></script>





</head>
<body>
<div id="panel"></div>
<div id="all_wrapper">
		<div class="top_1_wrapper limited">
			<a href="#"><img src="/geoportal/view/avtodor/logo_top.png" alt="" class="logo"></a>
			<div class="top_langs">
				<a href="#" class="lang_rus current"><img src="/geoportal/view/avtodor/lang_flag_rus.png" alt=""> РУС</a>
				<a href="#" class="lang_eng"><img src="/geoportal/view/avtodor/lang_flag_eng.png" alt=""> ENG</a>
			</div>
			<a href="#" class="feedback_link">Контакты <i class="ico ico_arrow_right_1"></i></a>
			<div class="form-wrapper form-wrapper-search-top">
				<form action="/search/" method="GET">
					<div class="form-el form-el-input">
						<label>
							<span class="form-el-wrapper">
								<span class="form-el-field">
									<input name="q" placeholder="Поиск по сайту" type="text">
								</span>
							</span>
						</label>
					</div>
					<div class="form-el form-el-button">
						<label>
							<span class="form-el-wrapper">
								<span class="form-el-field">
									<input value="" type="submit">
								</span>
							</span>
						</label>
					</div>
				</form>
			</div>
		</div>
		<div class="top_2_wrapper">
			<div class="limited">
				<div class="menu_top_wrapper">
<script src="/geoportal/view/avtodor/script_003.js" type="text/javascript"></script>
<ul>


	
	
					<li><a href="#" class="root-item">О компании</a>
				<div class="submenu">
					<div class="submenu_inside">
				<ul>
		
	
	

	
	
		
							<li><a href="#">Миссия цели и функции</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Структура</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Наблюдательный совет</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Правление компании </a></li>
			
		
	
	

	
	
		
							<li><a href="#">Нормативная база</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Вакансии</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Устойчивое развитие </a></li>
			
		
	
	

	
	
		
							<li><a href="#">Инновационная деятельность</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Противодействие коррупции</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Партнеры</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Проектная техническая документация</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Контакты</a></li>
			
		
	
	

			</ul></div></div></li>	
	
					<li><a href="#" class="root-item">Пресс-Центр</a>
				<div class="submenu">
					<div class="submenu_inside">
				<ul>
		
	
	

	
	
		
							<li><a href="#">Новости</a></li>
			
		
	
	

	
	
		
							<li><a href="#">СМИ о компании</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Пресс-кит</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Фотогалерея</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Видео</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Мнения</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Контакты для СМИ</a></li>
			
		
	
	

			</ul></div></div></li>	
	
					<li><a href="#" class="root-item-selected">Пользователям автодорог</a>
				<div class="submenu">
					<div class="submenu_inside">
				<ul>
		
	
	

	
	
		
							<li class="current"><a href="#">Трасса М-1 «Беларусь»</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Трасса М-3 «Украина»</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Трасса М-4 «Дон»</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Трасса М-11 «Москва – Санкт-Петербург»</a></li>
			
		
	
	

	
	
		
							<li><a href="#">ЦКАД</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Грузоперевозчикам</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Оперативная информация</a></li>
			
		
	
	

			</ul></div></div></li>	
	
					<li><a href="#" class="root-item">Инвесторам</a>
				<div class="submenu">
					<div class="submenu_inside">
				<ul>
		
	
	

	
	
		
							<li><a href="#">Принципы инвестиционной деятельности</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Виды применяемых контрактов</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Инвестиционные проекты</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Раскрытие информации</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Дорожный сервис</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Открытый международный конкурс</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Инвестиционные конкурсы</a></li>
			
		
	
	

			</ul></div></div></li>	
	
					<li><a href="#" class="root-item">Закупки и реализация</a>
				<div class="submenu">
					<div class="submenu_inside">
				<ul>
		
	
	

	
	
		
							<li><a href="#">Закупки</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Реализация</a></li>
			
		
	
	

	
	
		
							<li><a href="#">Архив</a></li>
			
		
	
	

	</ul></div></div></li></ul>
 
				</div>
				<div class="top_img floats_wrapper">
					<div class="top_img_mask_wrapper">
						<img src="/geoportal/view/avtodor/Road_serv.JPG">
						<div class="top_img_mask"></div>
					</div>
					<div class="top_img_text"></div>
				</div>
			</div>
		</div>
		<div class="center_wrapper limited">
			<div class="floats_wrapper">
				<a href="#" class="print_link"><img src="/geoportal/view/avtodor/ico_print.png" alt=""> Версия для печати</a>
				<div class="path">
<h1>Пользователям автодорог</h1><h4><a href="#" title="Трасса М-1 «Беларусь»">Трасса М-1 «Беларусь»</a></h4><h4><a href="#" title="Объекты дорожного сервиса">Объекты дорожного сервиса</a></h4>				</div>
			</div>
			<div class="floats_wrapper">
				<div class="left_part">	
 <script src="/geoportal/view/avtodor/script.js" type="text/javascript"></script><div class="menu_left_wrapper">
<ul id="vertical-multilevel-menu">


	
	
					<li class="current "><a href="#">Трасса М-1 «Беларусь»</a>
				<ul class="root-item">
		
	
	

	
	
									<li class=" "><a href="#">Достопримечательности</a></li>
					
		
	
	

	
	
									<li class=" "><a href="#">Содержание дороги</a></li>
					
		
	
	

	
	
									<li class=" "><a href="#">Ремонтные работы</a></li>
					
		
	
	

	
	
									<li class=" "><a href="#">Реконструкция и строительство</a></li>
					
		
	
	

	
	
									<li class="current "><a id = "road_services" href="#">Объекты дорожного сервиса</a></li>
					
		
	
	

	
	
									<li class=" "><a href="#">Многофункциональные зоны сервиса</a></li>
					
		
	
	

	
	
									<li class=" "><a href="#">Платные участки</a></li>
					
		
	
	

			</ul></li>	
	
					<li class=" "><a href="#">Трасса М-3 «Украина»</a>
				<ul class="root-item">
		
	
	

	
	
									<li class=" "><a href="#">История</a></li>
					
		
	
	

	
	
									<li class=" "><a href="#">Достопримечательности</a></li>
					
		
	
	

	
	
									<li class=" "><a href="#">Содержание дороги</a></li>
					
		
	
	

	
	
									<li class=" "><a href="#">Ремонтные работы</a></li>
					
		
	
	

	
	
									<li class=" "><a href="#">Реконструкция и строительство</a></li>
					
		
	
	

	
	
									<li class=" "><a href="#">Объекты дорожного сервиса</a></li>
					
		
	
	

			</ul></li>	
	
					<li class=" "><a href="#">Трасса М-4 «Дон»</a>
				<ul class="root-item">
		
	
	

	
	
									<li class=" "><a href="#">История</a></li>
					
		
	
	

	
	
									<li class=" "><a href="#">Достопримечательности</a></li>
					
		
	
	

	
	
									<li class=" "><a href="#">Содержание дороги</a></li>
					
		
	
	

	
	
									<li class=" "><a href="#">Ремонтные работы</a></li>
					
		
	
	

	
	
									<li class=" "><a href="#">Реконструкция и строительство</a></li>
					
		
	
	

	
	
									<li class=" "><a href="#">Платные участки</a></li>
					
		
	
	

	
	
									<li class=" "><a href="#">Объекты дорожного сервиса</a></li>
					
		
	
	

	
	
									<li class=" "><a href="#">Многофункциональные зоны сервиса</a></li>
					
		
	
	

			</ul></li>	
	
									<li class=" "><a href="#">Трасса М-11 «Москва – Санкт-Петербург»</a></li>
					
		
	
	

	
	
					<li class=" "><a href="#">ЦКАД</a>
				<ul class="root-item">
		
	
	

	
	
									<li class=" "><a href="#">Схема трассы</a></li>
					
		
	
	

			</ul></li>	
	
									<li class=" "><a href="#">Грузоперевозчикам</a></li>
					
		
	
	

	
	
									<li class=" "><a href="#">Оперативная информация</a></li>
					
		
	
	


</ul>
<span class="menu_crn menu_crn_tl"></span>
<span class="menu_crn menu_crn_br"></span>
</div>
					<div class="description">
						</div>
				</div>
				<div class="content_part">
					<div class="content_part_inside">

<div style="width:600px; height:500px" id="map_indor">

</div>

<br>

<br>



					</div>
				</div>
			</div>
		</div>
		<div id="footer_spacer"></div>
	</div>
	<div id="footer">
		<div class="limited">
			<div class="ftr_block ftr_copyright">
 © 2009–2013&nbsp;
<br>
 				Государственная компания 
<br>
 				«Российские автомобильные дороги»			</div>
			<div class="ftr_block ftr_contacts">
 109074, Москва, Славянская пл., д. 2/5/4, стр. 3 
<br>
 				<span>Тел.: +7 (495) 727-11-95, </span>
<br>
Факс: +7 (495) 784-68-04 						</div>
			<div class="ftr_block ftr_social">
			</div>
			<div class="ftr_block ftr_menu">

<ul class="left-menu">

			<li><a href="#">Карта сайта</a></li>
		
			<li><a href="#">Контакты</a></li>
		

</ul>
 
			</div>
		</div>
	</div>
<?php
require_once VIEW_DIR."ya.php";
?> 

</body></html>