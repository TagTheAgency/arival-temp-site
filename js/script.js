jQuery(document).ready(function($){

	// Fade in elements on scroll function
	$(window).scroll(function() {
		$.each( $('.fade-in'), function() {

			var bottom_of_element = $(this).offset().top + $(this).outerHeight();
		   	var bottom_of_window = $(window).scrollTop() + $(window).height();

			if (bottom_of_window > bottom_of_element - 500) {
				$(this).addClass('fade-up');
			}
		});
	});

	$(".top").click(function(){
		$("html").animate({
			scrollTop: 0
		}, 1000);
	});

	$('.hero-container').fadeIn(400);
	$('.hero-container .fade-in').addClass('fade-up');

	$('.contact-form').submit(function(){
		$(this).fadeOut();
		$('#form-container').fadeOut();
		$('#form-header').fadeOut(function(){
			setTimeout(function(){
				$('#form-header').addClass('col-12 col-sm-12 col-lg-12 ls-8').html('MESSAGE SENT. THANK YOU.');
				$('#form-header').fadeIn();
			},100);
		});
	});

	$(".form-scroll").click(function(){
		$("html").animate({scrollTop: $(".contact-form").offset().top}, 1500)
		$("#form-name").focus();
	});

	$('#mobile-menu-btn').click(function(){
		$('body').css('overflow','hidden');
		$('#mobile-menu').fadeIn();
	});

	$('#mobile-menu-close').click(function(){
		$('body').css('overflow','auto');
		$('#mobile-menu').fadeOut();
	});

	$('.search-overlay-btn').click(function(){
		setTimeout(function(){
			$("input[name='search']").focus();
		},100);
	});

	$('.btn').hover(function(){
		if ($(this).find('btn-arrow') ) {
			$(this).find('i').css('padding-left','9px');
		}
	}, function(){
		if ($(this).find('btn-arrow') ) {
			$(this).find('i').css('padding-left','0');
		}
	});

	window.addEventListener('resize', function(event){
		if( $('#mobile-menu').css('display') == 'none' ){
			$('body').css('overflow','auto');
			$('#mobile-menu').fadeOut();
		}
	});

	$(window).scroll(function(){
		var st = $(this).scrollTop();
		if( st > 200){
			if( $('nav').hasClass('bg-on-scroll') ){
				$('nav').removeClass('bg-transparent');
			}
		} else if( st < 200){
			if( $('nav').hasClass('bg-on-scroll') ){
				$('nav').addClass('bg-transparent');
			}
		}
	});

	$(function(){
	  $('#video').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });

	  // If you want to keep full screen on window resize
	  $(window).resize(function(){
	    $('#video').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });
	  });
	});

	if( $('body').height() < 900 ) {
    	$('#back-to-top').hide();
		$('#social-links').addClass('justify-content-center p-0 col-10 col-sm-10');
		$('#social-links ul').addClass('justify-content-center');
		$('#footer-content').addClass('justify-content-center').removeClass('justify-content-sm-between');
	}

	// Popup Overlay
	$('[data-popup-open]').click(function(){
		var targeted_popup_class = $(this).attr('data-popup-open');
		$('[data-popup="' + targeted_popup_class + '"]').fadeIn(350).css('display','block');
		$("body").css('overflow','hidden');
	});
	$('[data-popup-close]').click(function(){
		$(".mobile-menu-wrapper").fadeOut();
		var targeted_popup_class = $(this).attr('data-popup-close');
		$('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
		$("body").css('overflow','auto');

		// Stop Youtube videos
		var iframe = $(this).parent().parent().parent().find('iframe');
		var video = iframe.attr("src");
		iframe.attr("src","");
		iframe.attr("src",video);

		$.scrollify.enable();
	});

});
