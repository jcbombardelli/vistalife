$(document).ready(function(){
	$('.nav a').on('click', function(){
	    $('.navbar-toggle').click() //bootstrap 3.x by Richard
	});

	$(window).scroll(function () {
		if ($(window).scrollTop() > 280) {
		  $('.vistalife-navbar').addClass('navbar-fixed-top vistalife-navbar-fixed');
		}
		if ($(window).scrollTop() < 281) {
		  $('.vistalife-navbar').removeClass('navbar-fixed-top vistalife-navbar-fixed');
		}
	});

	$(".fadein-item").click(function(e){
		e.preventDefault();
		var target = $(this).attr("target");
		if ($(target).is(":visible")){
			$(target).fadeOut();
		}else{
			$(target).fadeIn();
		}
	});
})