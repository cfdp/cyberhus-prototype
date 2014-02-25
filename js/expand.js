$(document).ready(function(){
	$(".arrow").click(function(){
		$(this).toggleClass("rotate");
		$(this).siblings(".toggle-text").slideToggle("300");
	});

	$(".komm-arrow").click(function(){
		$(this).parents("p").siblings(".inline-komm").slideToggle("300");
	});
	$(".se-komm").click(function(){
		$(this).parents("p").siblings(".inline-komm").slideToggle("300");
	});
});