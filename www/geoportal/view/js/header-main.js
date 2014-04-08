$('#test_link').click(function(e) {
	e.preventDefault();
	$.ajax({
		async: false,
		type: "POST",
		url: 'ajax',
		data: "action=pano&param1=13",
		cache: false,
		success: function(html) {
			console.log(html);
		}
	});
})