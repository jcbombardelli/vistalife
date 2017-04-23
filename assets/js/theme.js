function adaptMenu(windowObject){
	if ($(windowObject).width() < 700){
	  $('.vistalife-navbar').removeClass('navbar-fixed-top');
	  $(".vistalife-navbar").addClass("vistalife-navbar-mobile vistalife-navbar-fixed");
	}else{
	  $(".vistalife-navbar").removeClass("vistalife-navbar-mobile vistalife-navbar-fixed");
	}
}

$(document).ready(function(){
	adaptMenu(window);
	smoothScroll.init();
	$(window).resize(function(){
		adaptMenu(this);
	});

	$(window).scroll(function () {
		if ($(window).width() >= 700){
			if ($(window).scrollTop() > 100) {
			  $('.vistalife-navbar').addClass('navbar-fixed-top vistalife-navbar-fixed');
			}
			if ($(window).scrollTop() < 101) {
			  $('.vistalife-navbar').removeClass('navbar-fixed-top vistalife-navbar-fixed');
			}
		}
	});

	$(".fadein-item").click(function(e){
		e.preventDefault();
		contactFunction(this);
	});

	$(".contact-item").click(function(e){
		e.preventDefault();
		contactFunction(this);
	});

	$(".act-letstalk").click(function(e){
		// e.preventDefault();
		// var anchor = document.querySelector('#contact-form-link');
		// smoothScroll.animateScroll(anchor);
		$("#contact-form-link").click();
	})

	var contactFunction = function(object){
		var target = $(object).attr("target");
		if ($(target).is(":visible")){
			$(target).fadeOut();
		}else{
			$(target).fadeIn();
		}
	};
})