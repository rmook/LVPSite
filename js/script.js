

var menu = $("#menu");

$("#navicon").click(function() {
	menu.slideToggle("slow")
});

$(window).resize(function(){

	var w = $(window).width();

	if (w > 768 && menu.is(':hidden')) {
 		menu.removeAttr("style");
	}
});