$(document).ready(function(){
	$(".arrow").click(function(){
		$(this).toggleClass("rotate");
		$(this).parent().children(".toggle-text").slideToggle("300");
	});
});