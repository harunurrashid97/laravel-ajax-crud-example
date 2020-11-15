jQuery(document).ready(function ($) {
	$("#submit").click(function (e) {
		var title = jQuery("#title").val();
		var content = jQuery("#content").val();
		var time = new Date();

		alert(title);
		alert(content);
		alert(time);
	});
});
