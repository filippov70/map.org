$(document).ready(function() {
	$(".menu_right_wrapper").appendTo($(".right_part"));

	$('.fancybox').fancybox({
		minWidth: 0,
		minHeight: 0,
		padding: 0,
		openSpeed: 'normal',
		closeSpeed: 'fast',
		nextEffect: 'fade',
		prevEffect: 'fade',
		nextSpeed: 'normal',
		prevSpeed: 'normal'
	});

    $(".various").fancybox({
        maxWidth	: 800,
        maxHeight	: 600,
        fitToView	: false,
        width		: '70%',
        height		: '70%',
        autoSize	: false,
        closeClick	: false,
        openEffect	: 'none',
        closeEffect	: 'none'
    });


	
	$('.dynamic_trigger').click(function() {
		var that = $(this);
		that.addClass('active').siblings('.dynamic_trigger').removeClass('active')
			.siblings('.dynamic_content').slideUp();
		that.next('.dynamic_content').slideDown();
		return false;
	});
	
	$('.form-el-datepicker input').datepicker({
		showOn: "both",
		buttonImage: "/img/siteimage/ico_calendar.png",
		buttonImageOnly: true,
		dateFormat: 'dd.mm.yy',
		nextText: ' ',
		prevText: ' '
	});
	
	$("#tender_pager a").click(function(){
		var lnk = $(this).attr("href");
		$("#tendersform").attr("action", lnk);
		$("#tendersform").submit();
		return false;
	});

    $(".searchroll").click(function(){
		if ($(".rolling_search:visible").size() > 0) {
			$(".rolling_search").hide();
            $(this).html("Показать расширенный поиск");
		} else {
			$(".rolling_search").show();
            $(this).html("Свернуть расширенный поиск");
		}
		
		return false;
	});
	/*zebra stripping*/
	$("table:not(.formtable) tr:nth-child(even)").addClass("even");
	/*zebra stripping - end*/

	if ($("li.grey").size() > 0) {
		$(".menu_left_wrapper").after('<div class="menu_left_wrapper menu_left_wrapper_2"><ul></ul><span class="menu_crn menu_crn_tr"></span><span class="menu_crn menu_crn_br"></span></div>');
		$("li.grey").each(function(){
			$(this).appendTo($(".menu_left_wrapper_2 ul"));
		});
	}

        $("#road_service_objects").change(function(){
            var lnk = $(this).val();
            window.location = lnk;
        });

	$("#cleartenders").live("click", function(){
		$("#tendersform").find("input[type=text]").removeAttr("value");
		$("#tendersform").find("input[type=text]").attr("value", "");
		$("#tendersform").submit();
	});
});