/* PANA v1.0.0 CUSTOM SCRIPTS
 * Copyright 2018 HUGESTEM
 * http://www.hugestem.com */

window.jQuery = window.$ = jQuery;
$(document).ready(function(){
/*--------------------------------------------------*/
/*	MISC
/*--------------------------------------------------*/
	$('.path-taxonomy .views-element-container').addClass('row');	
	$('.path-taxonomy .sidebar .views-element-container').removeClass('row');
	$('.fullwidth .row-wrap').removeClass('row');
	$('.cta-style3').addClass('container');
	
	$('.ticket-button [name=op]').val('Get Ticket');
	$(".contact-message-reservation-form #edit-preview").remove();
	
	$(".event-session-wrap .team-teaser .toggle-content-wrap").remove();
	$(".event-session-wrap .team-social").remove();
	$(".event-session-wrap .team-meta .team-position").remove();
	//$(".event-session-wrap .session-item-content .team-quick-view").remove();
	
	
	$(".quicktabs-tabs li > a").html(function () {
		return $(this).html().replace("|", "<br/>"); 
	});
	
	
	if ( $(window).width() < 767) {
		//Mobile Bootstrap Grid
		$('.grid-wrapper').removeClass('grid');
	}
	
//MAIN MENU
	$('.primary-navbar .menu-parent').smartmenus();
	$('.primary-navbar .menu-parent').addClass('sm sm-menu');
	
/*	FEAT BLOCK  */
	/*
	$('.feat-block-content-alt .field-field-block').addClass('row');
	$(".feat-block-content-alt .feat-item").parent().addClass('col-md-6');
	*/

/*	PRODUCT  */
	$(".product-teaser .form-item").remove();
	$(".pricing-table .form-item").remove();

	if( $('.toggle-content').length > 0 ) {
		var toggleNavs = $('.toggle-content');
		
		toggleNavs.each(function(){
			var toggleNav = $(this),
				toggleNavTrigger = toggleNav.find('.toggle-nav');
			
			toggleNavTrigger.on('click', function(event){
				event.preventDefault();
				toggleNav.toggleClass('active');
			});
		});

		$(document).on('click', function(event){
			( !$(event.target).is('.toggle-nav') && !$(event.target).is('.toggle-nav span') ) && toggleNavs.removeClass('active');
		});
		
		$(window).on('scroll', function () {
			var top = $(window).scrollTop(),
				divBottom = $('.toggle-content').offset().top + $('.toggle-content').outerHeight();
			if (divBottom != top) {
				toggleNavs.removeClass('active');
			}
		});
		
	}

/*	FACET  */	
    $('.facet-list').slimScroll({
          height: '200px',
		  width: '100%',
		  railVisible: false,
		  alwaysVisible: true,
		  size: '2px',
		  wheelStep: 15
    });

/*	TAB  */	
	$(".tab-content .my-group:first").addClass("active");
	
/*	NICE SELECT  */		
	$('.views-exposed-form select').niceSelect();
	$('.field--widget-commerce-product-variation-attributes select').niceSelect();

/*	OWL SLIDER  */	  
    $('.slide-carousel').each( function() {
        var $carousel = $(this);
        $carousel.owlCarousel({
            items : $carousel.data("items"),
            slideBy : $carousel.data("slideby"),
            center : $carousel.data("center"),
            loop : $carousel.data("loop"),
            margin : $carousel.data("margin"),
            nav : $carousel.data("nav"),
			dots : $carousel.data("dots"),
            autoplay : $carousel.data("autoplay"),
			autoplaySpeed : $carousel.data("autoplayspeed"),
			autoplayHoverPause : $carousel.data("autoplayhoverpause"),
            autoplayTimeout : $carousel.data("autoplaytimeout"),
			URLhashListener : $carousel.data("urlhashlistener"),
        });
    });
	
  // Declare Carousel jquery object
  var owl = $('.hero');

  // add animate.css class(es) to the elements to be animated
  function setAnimation ( _elem, _InOut ) {
    // Store all animationend event name in a string.
    var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

    _elem.each ( function () {
      var $elem = $(this);
      var $animationType = 'animated ' + $elem.data( 'animation-' + _InOut );

      $elem.addClass($animationType).one(animationEndEvent, function () {
        $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
      });
    });
  }

// Fired before current slide change
  owl.on('change.owl.carousel', function(event) {
      var $currentItem = $('.owl-item', owl).eq(event.item.index);
      var $elemsToanim = $currentItem.find("[data-animation-out]");
      setAnimation ($elemsToanim, 'out');
  });

// Fired after current slide has been changed
  owl.on('changed.owl.carousel', function(event) {
      var $currentItem = $('.owl-item', owl).eq(event.item.index);
      var $elemsToanim = $currentItem.find("[data-animation-in]");
      setAnimation ($elemsToanim, 'in');
  });

/*	SEARCH & FORM  */
 	//SEARCH TOGGLE
	$('#search .search-trigger').on('click',function(){
        $('.search-bar').animate({height: 'toggle'},500);
    });
	// SEARCH PLACHOLDER
	$("#search-modal .form-search").attr("placeholder", "Search..");
	$(".search-content .form-search").attr("placeholder", "Search...");
	
    // LABEL TO PLACEHOLDER
    $("form.contact-form :input, .contact-form form :input, form.user-login-form :input, form.user-register-form :input, form.user-pass :input, form.comment-form :input, .search-page-form :input, #views-exposed-form-blog-blog-page :input, #toggle-sidebar .block-search :input, .block-simplenews :input, #toggle-sidebar :input").not(':checkbox, :radio').each(function (index, elem) {
		var eId = $(elem).attr("id");
		var label = null;
		if (eId && (label = $(elem).parents("form").find("label[for=" + eId + "]")).length == 1) {
			$(elem).attr("placeholder", $(label).html());
			$(label).remove();
		}
	});

});

$(document).ajaxComplete(function(){
	
	$('.field--widget-commerce-product-variation-attributes select').niceSelect();
	
	$(".ui-dialog-buttonpane, #drupal-modal .product-info, .ui-dialog .ui-dialog-titlebar-close span").remove();
	$(".ui-dialog .ui-dialog-titlebar-close").removeClass('ui-button');
	
	$("#drupal-modal .product-image").removeClass('slide-carousel');
	$("#drupal-modal .product-image").addClass('quick-carousel');
	
	$('.quick-carousel').owlCarousel({
		loop: true,
		margin: 0,
		nav: true,
		items: 1,
		dots: false,
	});
	
	
	$(".product-teaser .form-item").remove();
	$(".ui-dialog .ui-dialog-buttonpane").remove();

/*	SHUFFLE GRID  */
	var $grid = $('.grid');

	$grid.shuffle({
		itemSelector: '.grid-item'
	});

});

$(window).on('load', function (){
/*	PRELOADER  */
	$(".preloader-spinner").fadeOut();
	$(".preloader").delay(200).fadeOut("slow").delay(200, function(){
		$(this).remove();
	});

/*	COUNTER  */
	if ($().appear) {
		$('.counter').appear();
		$('.counter').filter(':appeared').each(function(index){
			if ($(this).hasClass('counted')) {
				return;
			} else {
				$(this).countTo().addClass('counted');
			}
		});
		$('body').on('appear', '.counter', function(e, $affected ) {
			$($affected).each(function(index){
				if ($(this).hasClass('counted')) {
					return;
				} else {
					$(this).countTo().addClass('counted');
				}	
			});
		});
	}
});

/*	PIECHART PROGRESS  */
function pieChart() {
	//circle progress bar
	if (($().easyPieChart)) {
		//var count = 0 ;
		//var colors = ['#4D91BA', '#5FCCA3', '#FFBB19'];
		$('.chart').each(function(){
				
			var imagePos = $(this).offset().top;
			var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+900) {

				$(this).easyPieChart({
			        barColor: '#333333',
					trackColor: '#f5f5f5',
					scaleColor: false,
					scaleLength: false,
					//lineCap: 'butt',
					lineWidth: 4,
					size: 110,
					rotate: 0,
					animate: 3000,
					onStep: function(from, to, percent) {
							$(this.el).find('.percent').text(Math.round(percent));
						}
			    });
			}
			//count++;
			//if (count >= colors.length) { count = 0};
		});
	}
}

$(window).scroll(function() {
	/*	PIE CHART  */
	pieChart();
	
    /*	BACK TO TOP & STICKY HEADER  */
	if($(this).scrollTop() != 0) {
        $(".back-to-top").fadeIn();
		$('.header').addClass("sticky");
    } else {
        $(".back-to-top").fadeOut();
		$('.header').removeClass("sticky");
    };

});

$(".back-to-top").click(function() {
    $("body, html").animate({scrollTop:0},800);
});

/*------------------------------------------------------*/
/*	SCROLL NAVIGATION
/*------------------------------------------------------*/
$('.nav.menu a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
              $('html,body').animate({
                  scrollTop: target.offset().top
              }, 1000);
              return false;
          }
      }
  });
