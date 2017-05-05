function adaptMenu(windowObject){
	if ($(windowObject).width() < 900){
	  $('.vistalife-navbar').removeClass('navbar-fixed-top');
	  $(".vistalife-navbar").addClass("vistalife-navbar-mobile vistalife-navbar-fixed");
	}else{
	  $(".vistalife-navbar").removeClass("vistalife-navbar-mobile vistalife-navbar-fixed");
	}
	if ($(windowObject).width() < 700){
		$(".img-solution").attr("src", "/assets/img/solucao_mobile.png");
	}else{
		$(".img-solution").attr("src", "/assets/img/solucao.png");
	}
}

var globalVal = 1;
var maxPics = 2;
var changeTime = 30000;
function changeImage(pos, autoChange){
	if (autoChange === undefined){
		autoChange = true;
	}
	if (pos > maxPics){
		globalVal = pos = 1;
	}else{
		globalVal = pos;
	}
	$("header").css('background-image', "url(/assets/img/background-"+globalVal+".jpg)");
	// $('header').fadeTo('slow', 0.3, function()
	// {
	// }).fadeTo('slow', 1);
	if (autoChange){
		setTimeout(function(){
			changeImage(++globalVal);
		}, changeTime);
	}
}

$(document).ready(function(){
	adaptMenu(window);
	smoothScroll.init();
	setTimeout(function(){
		changeImage(2);
	}, changeTime)

	$(window).resize(function(){
		adaptMenu(this);

	});

	$(".contact-email").submit(function(e){
		e.preventDefault();
		$("#contato-answers").html("");
		$.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function (data) {
            	if (data.status){
            		$("#contato-form").hide();
            	}
            	$("#contato-answers").html("<h2>"+data.message+"</h2>");
            }
        });
	})

	$(".left-pointer").click(function(e){
		e.preventDefault();
		if (globalVal === 1){
			globalVal = maxPics;
		}else{
			--globalVal;
		}
		changeImage(globalVal, false);
	});
	$(".right-pointer").click(function(e){
		e.preventDefault();
		if (globalVal >= maxPics){
			globalVal = 1;
		}else{
			globalVal++;
		}
		changeImage(globalVal, false);
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
		e.preventDefault();
		var anchor = document.querySelector('#contact-form-link');
		smoothScroll.animateScroll(anchor);
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
