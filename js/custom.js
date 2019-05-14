//menu toggle
$("#sidebarNavbarClose").click(function(e) {
	e.preventDefault();
	$(".wrapper").toggleClass("toggled");
	$("#sidebarNavbarOpen").toggleClass("hidden");
	$(".content").toggleClass("full");
});

$("#sidebarNavbarOpen").click(function(e) {
	e.preventDefault();
	$(".wrapper").toggleClass("toggled");
	$("#sidebarNavbarOpen").toggleClass("hidden");
	$(".content").toggleClass("full");
});

$(document).ready(function(){

	var window_width = $(window).width();
	var content_status = $(".content").hasClass("full");

	if (window_width <= 1400 && content_status === false) {
		$(".home #infos .info_box").each(function(){
			$(this).removeClass("col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12");
			$(this).addClass("col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12");
		});
	}

});

//SCROLL-TO-TOP BUTTON
$(window).scroll(function(){
	if ($(this).scrollTop() > 100) {
		$(".scrollToTop").fadeIn();
	} else {
		$(".scrollToTop").fadeOut();
	}
});

//CLick for scroll
$(".scrollToTop").click(function(){
	$("html, body").animate({scrollTop : 0},800);
	return false;
});
