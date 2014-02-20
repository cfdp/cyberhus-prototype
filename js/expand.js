$(document).ready(function(){
	$(".arrow").click(function(){
		$(this).toggleClass("rotate");
		$(this).siblings(".toggle-text").slideToggle("300");
	});
});