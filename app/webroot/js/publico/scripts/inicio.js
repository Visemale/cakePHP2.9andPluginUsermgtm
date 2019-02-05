//Scripts Inicio v1.0
	$('.bxslider').bxSlider({
		auto: true,
	  mode: 'horizontal',
	  useCSS: false,
	  infiniteLoop: true,
	  hideControlOnEnd: true,
	  easing: 'easeInOutExpo',
	  speed: 4000
	});
	$(function() {
	    $('#menuNavigation a[href*="#"]').click(function() {
				if ($(window).width() < 1023) {
        	$("#menuNavigation").removeClass('showNavi').addClass('hideNavi');
				}
	      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	        var target = $(this.hash);
	        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	        if (target.length) {
	          $('html, body').animate({
	            scrollTop: target.offset().top - 100
	          }, 1000);
	          return false;
	        }
	      }
	    });
	  });
		
		$(function() {
        $( "#tabs" ).tabs({
          collapsible: true
        });
    });