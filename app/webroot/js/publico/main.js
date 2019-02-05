//Scripts Generales
$(document).foundation();
/* --- Menufunction --- */
function MenuMovil() {
    var screen = $(window);
    if (screen.width() > 1023) {
        $("#menuNavigation").removeClass("menuMobCont hideNavi").addClass('mnuCont');
        $("#menuCont .menu").removeClass("vertical").addClass('expanded');
    }
    else {
        $("#menuNavigation").addClass("menuMobCont hideNavi").removeClass('mnuCont');
        $("#menuCont .menu").removeClass("expanded").addClass('vertical');
    }
}
//Menu fixed
	function checkScrollPosition() {
	    if($(window).scrollTop() > 100) {
	      $("header").addClass("scroll");
	  } else {
	      $("header").removeClass("scroll");
	  }
	}

	$(document).ready(function () {
	    checkScrollPosition();
	});

	$(window).on("scroll", function() {
	    checkScrollPosition();
	});

/* --- Open menu mobile --- */
$(function() {
	function triggerMobileMenu() {

	$("#abre--menu").click(function () {
		if ($("#menuNavigation").hasClass('hideNavi')) {
			setTimeout(function(){
                $("#menuNavigation").removeClass('hideNavi').addClass('showNavi');
			}, 100);
		}else {
			setTimeout(function(){
                $("#menuNavigation").removeClass('showNavi').addClass('hideNavi');
			}, 100);
        }
		return false;
	});

	$("#menuNavigation .closeBtn").click(function () {
		setTimeout(function(){
			$("#menuNavigation").addClass('hideNavi').removeClass('showNavi');
			}, 100);
		});

	}

/* 	$('#menuNavigation btnJugar').click(function() {
		$("#menuNavigation").addClass("hideNavi").removeClass('showNavi');
	}); */

	triggerMobileMenu();
});
/* --- Scroll banner --- */
function EasyPeasyParallax() {
	scrollPos = $(this).scrollTop();
	$('body').css({
		'background-position' : '50% ' + (-scrollPos/4)+"px"
	});
	/*$('#Fiixed').css({
		'margin-top': (scrollPos/4)+"px",
		'opacity': 1-(scrollPos/250)
	});*/
}
/* --- WindowResize MenuMobile CSS --- */
$(window).resize(function() {
  MenuMovil();

});
/* --- FuncionesDocument --- */
$(document).ready(function() {
    MenuMovil();
    $(window).scroll(function() {
		EasyPeasyParallax();
	});

    var modal = $( "#modalLogin" ).hide();
    /*$('.loginMod').click(function() {
         $("#menuNavigation").addClass('hideNavi');	
        modal.show();
    });*/

    $( "#cerrarModalLogin" ).click(function() {
        $( "#modalLogin" ).hide();//.remove()
    });
    
    
    if ($(window).width() < 1023) {
       $('.loginMod').click(function() {
             $("#menuNavigation").addClass('hideNavi');	
            modal.show();
        });
    }
    else {
        $('.loginMod').click(function() {
            modal.show();
        });
    }
	
});


//Modal
var gsl_viewport = $(window).width();
var slideTour = $('.slider-tour').bxSlider();
$('#tour-hide').hide();
$('#abreTour, #abreTour-2').click(function(e){
	if ($(window).width() < 1023) {
		$("#menuNavigation").addClass("hideNavi").removeClass('showNavi');//cerrar menumobile
	}
	
  e.preventDefault();
  $('#tour-hide').fadeIn(500);
  $('body').addClass('overflow-hidden');
  slideTour.reloadSlider({
	  auto: false,
	  pager: (gsl_viewport < 640) ? true : false,
	  controls: (gsl_viewport < 640) ? false : true,
	  hideControlOnEnd: true,
	  infiniteLoop: false
  });

  
});
$('#cierraModal').click(function(){
	$('#tour-hide').fadeOut(500);
	$('body').removeClass('overflow-hidden');
});
