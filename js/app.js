$(document).ready(function() {

	$('.menu').click(function() {
		$('.desktopView').toggleClass('active');
		$('.toggle').toggleClass('underlineNavTop');
		
	});

	
});

$('.nestedMenu').click(function() {

	$(this).children('ul').toggleClass('show');

});






$(".tenTypes").click(function() {
	$(this).next().toggleClass("open");
});  