// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.
//<![CDATA[
	$(window).load(function() { // makes sure the whole site is loaded
		$('#spinner').fadeOut(); // will first fade out the loading animation
		$('#page-preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website
		$('body').delay(350).removeClass('overflowOculta');//.css({'overflow':'visible'})
	})
//]]>
    
jQuery(window).load(function() {
    /*-----Fecha-------*/
    //$("#fecha").text( ano );
    wow = new WOW(
    {
        boxClass:     'wow',
        animateClass: 'animated',
        offset:       100,
        mobile:       false,
        live:         true
    }
    );
    setTimeout(function() {
        wow.init();
    }, 10);
});

$(document).ready(function() {
    if(window.location.hash) {
        $(window).scrollTop(0);
        setTimeout(function() {
            doScroll(window.location.hash); 
        }, 100);
    }
    
    $('#menuCont ul li a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        
        $('a').each(function () {
            $(this).removeClass('activee');
        })
        $(this).addClass('activee');
        
        var target = this.hash;
        
        doScroll(target);
    });
});

function doScroll(target) {
    $("Html, body").delay(1000).animate({scrollTop: $(target).offset().top - 0 }, 1000);
    //console.log($('#menuCont').height() );
}