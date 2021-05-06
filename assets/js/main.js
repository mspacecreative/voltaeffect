/*
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {
	
	// CALCULATE POST TITLE POSITION
	/*function positionTitle() {
		var titleHeight = $('.post-title-container').outerHeight(),
		    subtract50 = titleHeight - 50;
		//$('.post-title-container').css('margin-top', -doMath);
		$('.shadow-cover-left, .shadow-cover-right').css({
			'height' : titleHeight
		});
	}*/
	
	var pagesTitle = $('.search .row-width-1280 > h2:first-child');
	if ( pagesTitle.children().length ) {
		pagesTitle.show();
	} else {
		pagesTitle.hide();
	}
	
	// POSITIONING CTA BUTTON AT BOTTOM OF FLEXBOX
	var ctaButton = $('.major').children().find('.button');
	if ( ctaButton.length ) {
		ctaButton.parent().css({
			'margin-top' : 'auto',
			'margin-right' : '0',
		});
		
		ctaButton.parent().prev().css('margin-bottom', '1em');
	}
	
	// MASONRY LAYOUT / FILTERING
	var grid = $('.iso-grid').isotope( {
		itemSelector: ".grid-item",
		percentPosition: true,
		masonry: {
		    columnWidth: '.grid-sizer',
			gutter: '.gutter-sizer',
		}
	});
		
	$(window).load(function () {
		grid.imagesLoaded().progress( function() {
			grid.isotope('layout');
		});
	});
	
	$('.mobile-filter button').click(function() {
	    $(this).parent().siblings('.filters-button-group').slideToggle();
		$(this).toggleClass('open');
			
		if ( $('.mobile-filter button').hasClass('open') ) {
			$(this).html('Close');
		} else {
			$(this).html('Filter by category');
		}
	});
	
	// INLINE BUTTONS
	var buttonAmount = $('.content-section').children().find('.inline-button');
	if ( buttonAmount.length > 1 ) {
		$('.inline-button').parent().css({
			'display': 'inline-block',
			'margin-right': '15px'
		});
	}
	
	// TOUCH HOVER FOR DESKTOP MENU
	$('.desktop-nav-menu .menu-item-has-children').on("touchstart", function (e) {
	'use strict'; //satisfy code inspectors
	var link = $(this); //preselect the link
	if (link.hasClass('hover')) {
	    return true;
	 } 
	else {
	   link.addClass('hover');
	   $('.desktop-nav-menu > ul > li').not(this).removeClass('hover');
	   e.preventDefault();
	   return false; //extra, and to make sure the function has consistent return points
	  }
	});
	
	// TEAM MEMBERS
	$('.team-profile, .team-bio-inner .fa').click(function () {
		$(this).next('.team-bio-container').toggleClass('show');
		$('body').addClass('header-switch');
	});
	$('.team-bio-container .mobile').click(function () {
		$(this).parent().toggleClass('show');
		$('body').removeClass('header-switch');
	});
	$('.team-bio-inner .desktop').click(function () {
		$(this).parent().parent().toggleClass('show');
		$('body').removeClass('header-switch');
	});
	
	// CORPORATE PRICING TABLE
	function corporatePricingTable() {
		// STICKY HEADER ROW
		var header = $('.corporate_pricing_table');
		if ( header.length ) {
			var headerTop = header.offset().top;
			var viewport = $(window);
			var bottom = headerTop + header.outerHeight(true) - 46;
			$(window).scroll(function() {
				if ( viewport.scrollTop() + 46 >= header.offset().top && viewport.scrollTop() + 46 <= bottom ) {
					header.addClass('fixed');
				} else {
					header.removeClass('fixed');
				}
				
				if ( $('.corporate_pricing_table').hasClass('fixed') ) {
					$('.header-row').css('max-width', $('.header-row').parent().parent().outerWidth());
				}
			});
		}
	}
	
	// SOCIAL MEDIA BAR POSITIONING
	function socialMediaBarPositioning() {
		$('.addthis-container').height( $('.addthis-container').prev().outerHeight() );
	}
	
	// SMOOTH SCROLL
	// Select all links with hashes
	$('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top - 50
				}, 1000);
	        return false;
			}
	    }
	});
	
	$('.search .inner > h2').each(function () {
		if ( $(this).next('h2')[0] ) {
			$(this).not($(this).remove());
		}
	});
	
	if ( $('.search .inner > h1').next('h1')[0] ) {
		$(this).remove();
	}
	
	$('.post-content-container ul').each(function () {
	
		if ( $(this).next()[0] ) {
			$(this).css('margin-bottom', '1em');
		} else {
			$(this).css('margin-bottom', '0');
		}
		
	});
	
	/*function calcNegativeMargins() {
		if (window.matchMedia("(min-width: 1600px)").matches) {
			
			var windowWidth = $(window).width() - 1600;
			var moreMath = windowWidth / 2;
			$('.page .features, .banner, .columns-container, .span-browser').css({
				'margin-right' : -moreMath,
				'margin-left' : -moreMath,
			});
			
		} else {
			$('.page .features, .banner, .columns-container, .span-browser').css({
				'margin-right' : 'auto',
				'margin-left' : 'auto',
			});
		}
	}*/
	
	function splashHeight() {
		$('#header').height($(window).height());
	}
	
	$(document).ready(function () {
		splashHeight();
		//calcNegativeMargins();
		socialMediaBarPositioning();
		//positionTitle();
		
		$('.window-close-button').click(function() {
			$(this).closest('.qtip').hide();
			$('html').removeClass('fixed');
		});
		
		if ( $('#page-wrapper').hasClass('no-featured-image-in-header') ) {
			$('body').addClass('no-featured-image');
			$('.classic-block-wrap').addClass('no-bottom-padding');
		}
		
		// MOVE STICKY MENU DOWN IF ADMIN BAR IS ACTIVE
		var navMenu = $('.stickymenu');
		if ( $('#wpadminbar').length ) {
			navMenu.css('top', '32px');
		}
	});
	
	$(document).ajaxSuccess(function() {
		$('.simcal-tooltip-content').prepend('<span class="window-close-button"></span>');
	});
	
	$(document).ajaxSuccess(function() {
		$('.qtip-content .simcal-events').prepend('<span class="window-close-button"></span>');
	});
	
	$(document).ajaxSuccess(function() {
		$('.window-close-button').click(function() {
			$(this).closest('.qtip').hide();
			$('html').removeClass('fixed');
		});
	});
	
	$('.simcal-event-title, .simcal-events-dots').click(function() {
		$('html').addClass('fixed');
	});
	
	$(document).ajaxSuccess(function() {
		$('.simcal-event-title, .simcal-events-dots').click(function() {
			$('html').addClass('fixed');
		});
	});
	
	// Google Calendar
	//$('.simcal-tooltip-content').prepend('<i class="fa fa-times simcal-close-2"></i>');
	$('.simcal-tooltip-content').prepend('<span class="window-close-button"></span>');
	$('.qtip-content .simcal-events').prepend('<span class="window-close-button"></span>');
	
	// Google Calendar
	
	// CAROUSELS
	/* PARTNERS */
	$('.partner-slider').slick({
	    dots: false, 
		arrows: false,
		slidesToShow: 3,
		slidesToScroll: 3,
		centerPadding: '20px', 
		autoplay: true, 
		autoplaySpeed: 3000, 
		speed: 1000,
		responsive: [
		    {
		      breakpoint: 980,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 450,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		]
	});
	/* PARTNERS */
	
	/* GENERAL */
	$('.slider-carousel').slick({
	    dots: true, 
		arrows: true,
		adaptiveHeight: true,
	});
	
	var slickDots = $('.slick-dots');
	if ( $('.slick-track').children('.slick-slide').length < 2 ) {
		slickDots.hide();
	}
	/* GENERAL */
	// CAROUSELS
	
	$(window).resize(function () {
		splashHeight();
		//calcNegativeMargins();
		socialMediaBarPositioning();
		//positionTitle();
	});
	
	$(window).scroll(function () {
		corporatePricingTable();
	});
	
	/*var	$window = $(window),
		$body = $('body'),
		settings = {

			// Carousels
				carousels: {
					speed: 4,
					fadeIn: true,
					fadeDelay: 250
				},

		};

	// Breakpoints.
		breakpoints({
			wide:      [ '1281px',  '1680px' ],
			normal:    [ '961px',   '1280px' ],
			narrow:    [ '841px',   '960px'  ],
			narrower:  [ '737px',   '840px'  ],
			mobile:    [ null,      '736px'  ]
		});

	// Play initial animations on page load.
		$window.on('load', function() {
			window.setTimeout(function() {
				$body.removeClass('is-preload');
			}, 100);
		});

	// Dropdowns.
		$('#nav > ul').dropotron({
			mode: 'fade',
			speed: 350,
			noOpenerFade: true,
			alignment: 'center'
		});

	// Scrolly.
		$('.scrolly').scrolly();

	// Carousels.
		$('.carousel').each(function() {

			var	$t = $(this),
				$forward = $('<span class="forward"></span>'),
				$backward = $('<span class="backward"></span>'),
				$reel = $t.children('.reel'),
				$items = $reel.children('article');

			var	pos = 0,
				leftLimit,
				rightLimit,
				itemWidth,
				reelWidth,
				timerId;

			// Items.
				if (settings.carousels.fadeIn) {

					$items.addClass('loading');

					$t.scrollex({
						mode: 'middle',
						top: '-20vh',
						bottom: '-20vh',
						enter: function() {

							var	timerId,
								limit = $items.length - Math.ceil($window.width() / itemWidth);

							timerId = window.setInterval(function() {
								var x = $items.filter('.loading'), xf = x.first();

								if (x.length <= limit) {

									window.clearInterval(timerId);
									$items.removeClass('loading');
									return;

								}

								xf.removeClass('loading');

							}, settings.carousels.fadeDelay);

						}
					});

				}

			// Main.
				$t._update = function() {
					pos = 0;
					rightLimit = (-1 * reelWidth) + $window.width();
					leftLimit = 0;
					$t._updatePos();
				};

				$t._updatePos = function() { $reel.css('transform', 'translate(' + pos + 'px, 0)'); };

			// Forward.
				$forward
					.appendTo($t)
					.hide()
					.mouseenter(function(e) {
						timerId = window.setInterval(function() {
							pos -= settings.carousels.speed;

							if (pos <= rightLimit)
							{
								window.clearInterval(timerId);
								pos = rightLimit;
							}

							$t._updatePos();
						}, 10);
					})
					.mouseleave(function(e) {
						window.clearInterval(timerId);
					});

			// Backward.
				$backward
					.appendTo($t)
					.hide()
					.mouseenter(function(e) {
						timerId = window.setInterval(function() {
							pos += settings.carousels.speed;

							if (pos >= leftLimit) {

								window.clearInterval(timerId);
								pos = leftLimit;

							}

							$t._updatePos();
						}, 10);
					})
					.mouseleave(function(e) {
						window.clearInterval(timerId);
					});

			// Init.
				$window.on('load', function() {

					reelWidth = $reel[0].scrollWidth;

					if (browser.mobile) {

						$reel
							.css('overflow-y', 'hidden')
							.css('overflow-x', 'scroll')
							.scrollLeft(0);
						$forward.hide();
						$backward.hide();

					}
					else {

						$reel
							.css('overflow', 'visible')
							.scrollLeft(0);
						$forward.show();
						$backward.show();

					}

					$t._update();

					$window.on('resize', function() {
						reelWidth = $reel[0].scrollWidth;
						$t._update();
					}).trigger('resize');

				});

		});*/

})(jQuery);