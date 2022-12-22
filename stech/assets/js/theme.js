(function ($) {
	'use strict';

	//Header Search
	if($('.search-box-outer').length) {
	$('.search-box-outer').on('click', function() {
		$('body').addClass('search-active');
	});
	$('.close-search').on('click', function() {
		$('body').removeClass('search-active');
	});
	}

	// sidebar
	jQuery(document).ready(function (o) {
		0 < o(".offset-side-bar").length &&
			o(".offset-side-bar").on("click", function (e) {
				e.preventDefault(), e.stopPropagation(), o(".cart-group").addClass("isActive");
			}),
			0 < o(".close").length &&
				o(".close").on("click", function (e) {
					e.preventDefault(), o(".cart-group").removeClass("isActive");
				}),
			0 < o(".navSidebar-button").length &&
				o(".navSidebar-button").on("click", function (e) {
					e.preventDefault(), e.stopPropagation(), o(".info-group").addClass("isActive");
				}),
			0 < o(".close").length &&
				o(".close").on("click", function (e) {
					e.preventDefault(), o(".info-group").removeClass("isActive");
				}),
			o("body").on("click", function (e) {
				o(".info-group").removeClass("isActive"), o(".cart-group").removeClass("isActive");
			}),
			o(".dt-sidebar-widget").on("click", function (e) {
				e.stopPropagation();
			}),
			0 < o(".xs-modal-popup").length &&
				o(".xs-modal-popup").magnificPopup({
					type: "inline",
					fixedContentPos: !1,
					fixedBgPos: !0,
					overflowX: "auto",
					closeBtnInside: !1,
					callbacks: {
						beforeOpen: function () {
							this.st.mainClass = "my-mfp-slide-bottom xs-promo-popup";
						},
					},
				});
	});

	// PreLoader
	$(window).load(function() {
        $("#preloader").hide();
    });

	// 6.EM MOBILE MENU
	$('.mobile-menu nav').meanmenu({
		meanScreenWidth: "991",
		meanMenuContainer: ".mobile-menu",
		onePage: true,
	});
	// 6.HOME 2 HERO CAROUSEL
	$('.em-slick-slider-new').slick({
		dots: false,
		speed: 900,
		arrows: true,
		autoplay: true,
		fade: false,
		autoplaySpeed: 6000,
		responsive: [{
			breakpoint: 769,
			settings: {
				arrows: false,
			}
		}]
	});
	//* Parallaxmouse js
	function parallaxMouse() {
		if ($('#parallax').length) {
			var scene = document.getElementById('parallax');
			var parallax = new Parallax(scene);
		};
	};	
	parallaxMouse();
	// 6.EM SLICK SLIDER
	$('.em-slick-testi-description').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		fade: true,
		asNavFor: '.em-slick-testi-wraper'
	});
	$('.em-slick-testi-wraper').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.em-slick-testi-description',
		dots: false,
		arrows: false,
		centerMode: true,
		focusOnSelect: true
	});
	
	// 6.EM WOW ACTIVE JS
	new WOW().init();
	// 6.EM NIVO SLIDER
	$('#mainSlider').nivoSlider({
		directionNav: true,
		animSpeed: 1000,
		slices: 18,
		autoplay: true,
		randomStart: true,
		pauseTime: 800000,
		pauseOnHover: false,
		controlNav: true,
		prevText: '<i class="fa fa-angle-left nivo-prev-icon"></i>',
		nextText: '<i class="fa fa-angle-right nivo-next-icon"></i>'
	});
	// 6.SCROLLUP JS
	$.scrollUp({
		scrollText: '<i class="fa fa-angle-up"></i>',
		easingType: 'linear',
		scrollSpeed: 900,
		animation: 'fade'
	});
	// VenuboX
	$('.venobox').venobox({
		numeratio: true,
		infinigall: true

	});
	// 6.ONEPAGE MENU
	var top_offset = $('.one_page').height() + 0;
	$('.one_page .stech_menu .nav_scroll').onePageNav({
		currentClass: 'current',
		changeHash: false,
		scrollSpeed: 1000,
		scrollOffset: top_offset,
		scrollThreshold: 0.5,
		filter: '',
		easing: 'swing',
	});

	$(".nav_scroll li:first-child").addClass("current");
	/* sticky nav 1 */
	$('.one_page').scrollToFixed({
		preFixed: function () {
			$(this).find('.scroll_fixed').addClass('prefix');
		},
		postFixed: function () {
			$(this).find('.scroll_fixed').addClass('postfix').removeClass('prefix');
		}
	});

    /*=============================================
    =       Menu sticky & Scroll to top          =
    =============================================*/
    /*=====   Menu sticky   ======*/
	var windows = $(window);
	var screenSize = windows.width();
	var sticky = $('.header-sticky');
	var $html = $('html');
	var $body = $('body');

	windows.on('scroll', function () {
		var scroll = windows.scrollTop();
		var headerHeight = sticky.height();

		if (screenSize >= 320) {
			if (scroll < headerHeight) {
				sticky.removeClass('is-sticky');
			} else {
				sticky.addClass('is-sticky');
			}
		}

	});
 /*=====  End of Menu sticky    ======*/
	

	// 6.EM PORTFOLIO
	$('.em_load').imagesLoaded(function () {

		if ($.fn.isotope) {

			var $portfolio = $('.em_load');

			$portfolio.isotope({

				itemSelector: '.grid-item',

				filter: '*',

				resizesContainer: true,

				layoutMode: 'masonry',

				transitionDuration: '0.8s'

			});
			$('.filter_menu li').on('click', function () {

				$('.filter_menu li').removeClass('current_menu_item');

				$(this).addClass('current_menu_item');

				var selector = $(this).attr('data-filter');

				$portfolio.isotope({

					filter: selector,

				});

			});

		};

	});
	// 6.EM BLOG MASONARY
	$('.bgimgload').imagesLoaded(function () {
		if ($.fn.isotope) {
			var $blogmassonary = $('.blog-messonary');
			$blogmassonary.isotope({
				itemSelector: '.grid-item',
				filter: '*',
				resizesContainer: true,
				layoutMode: 'masonry',
				transitionDuration: '0.8s'
			});

		};
	});

	
	// 6.TEAM CAROUSEL
	$('.team_cursousel_slider').slick({
		dots: false,
		speed: 900,
		arrows: false,
		autoplay: true,
		fade: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplaySpeed: 6000,
        responsive: [
            {
                breakpoint: 1920,
                settings: {
                    slidesToShow: 3,
                }
            },
			 {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 3,
                }
            },
			
			
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2
              }
            },
            {
              breakpoint: 600,
              settings: {
                arrows: false,
                slidesToShow: 1
              }
            }
        ]
	});

	
	$('.single_gallery').owlCarousel({
		nav: true,
		dots: false,
		navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 1
			},
			992: {
				items: 1
			},
			1920: {
				items: 1
			}
		}
	})
	$('.portfolio_gallery_post').owlCarousel({
		nav: true,
		dots: false,
		navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 1
			},
			992: {
				items: 1
			},
			1920: {
				items: 1
			}
		}
	})

	// Compare Pic Js Start
	var ctrl = jQuery('.pic-comparison .comparison-ctrl');
    var pic_right = jQuery('.pic-comparison .pic--right');

    Draggable.create(ctrl,{
      bounds: ctrl.parent(),
      type: "x",
      onDrag: function(){
        pic_right.css('left','calc(50% + '+(this.x - 2)+'px)');
      }
    }); 
	// Compare Pic Js End
	


})(jQuery);

