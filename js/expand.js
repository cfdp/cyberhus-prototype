$(document).ready(function(){
	$(".post").click(function(){
		$(this).children(".arrow").toggleClass("rotate");
		$(this).children(".toggle-text").slideToggle("300");
	});

	$(".komm-arrow").click(function(){
		$(this).toggleClass("rotate");
		$(this).parents("p").siblings(".inline-komm").slideToggle("300");
	});
});