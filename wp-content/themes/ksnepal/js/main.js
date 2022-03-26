/**
 * File main.js.
 *
 * Theme main script.
 *
 * Contains all theme custom features.
 */
var ss;
(function ($) {
	ss = {
		init: function () {
			this.img();
			this.nav();
			this.form();
			this.misc();
			this.slider();
			this.gallery();
		},
		ie: function () {
			try {
				if (/MSIE (\d+\.\d+);/.test(navigator.userAgent) || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
					$('body').addClass('ie-user');
					return true;
				}
			} catch (err) {
				console.log(err);
			}
			return false;
		},
		img: function (context) {
			if (!context) context = $('body');
			context.find('.bg-cover,[data-fix="image"]').each(function () {
				var wrap = $(this), image = wrap.find('>img');
				if (image.attr('src')) {
					if (wrap.data('fix') != 'image') {
						image.hide();
						wrap.css({ 'background-image': 'url(\'' + image.attr('src') + '\')' });
					} else {
						wrap.find('.svg.img-fluid').css({ 'background-image': 'url(\'' + image.attr('src') + '\')' });
					}
				}
				if (ss.ie()) {
					wrap.find('.svg').removeClass('img-fluid');
				}
			});
		},
		nav: function () {

		},
		form: function () {
			try {
				$('.input-text.qty').each(function () {
					var elm = $(this);
					$('<span class="qty-des"><i class="icon-angle-left"></i></span>').insertBefore($(this));
					$('<span class="qty-ins"><i class="icon-angle-right"></i></span>').insertAfter($(this));
					elm.prev('.qty-des').on('click', function () {
						var val = parseInt(elm.val());
						if (val > 1) {
							elm.val(val - 1);
						}
					});
					elm.next('.qty-ins').on('click', function () {
						var val = parseInt(elm.val());
						elm.val(val + 1);
					});
				});
			} catch (err) {
				console.log(err);
			}
		},
		misc: function () {
			try {
				$(window).on('load', function () {
					//var url = window.location.href;
					var array = window.location.href.split('/')
					var divID = array.slice(-1)[0]

					if (divID.indexOf('#') === 0) {
						$('html, body').animate({
							'scrollTop': $(divID).position().top
						}, 1300);
					}
				})

				$('.navbar-toggler .navbar-toggler-icon').on('click', function () {
					if ($('#nav-pri').hasClass('show')) {
						$('#nav-pri').hide()
						$('#nav-pri > .site-tool').remove()
					} else {
						// var pageOrigin = document.location.origin;
						// $('#nav-pri').append(
						// 	"<div class='site-tool'><div class='site-header-item site-header-button'><a class='btn' href='" + pageOrigin + "/contact-us/' target='_self' title='Request A Quote <i class=&quot;fas fac-arrow-right&quot;></i>'>सम्पर्क गर्नुहोस <span class='icon-arrow-right2'></span> </a></div></div>"
						// )
						$('#nav-pri').show()
					}
				});

				$(window).on('scroll', function () {
					if ($(window).scrollTop() > 400) {
						$('.navbar').addClass('header-sticky');
					} else {
						$('.navbar').removeClass('header-sticky');
					}
				})

				var matchHeight = function () {
					function init() {
						eventListeners();
						matchHeight();
					}

					function eventListeners() {
						$(window).on('resize', function () {
							matchHeight();
						});
					}

					function matchHeight() {
						var groupName = $('.industry-table__height');
						var groupHeights = [];

						groupName.css('height', 'auto');

						groupName.each(function () {
							groupHeights.push($(this).outerHeight());
						});

						var maxHeight = Math.max.apply(null, groupHeights);
						groupName.css('height', maxHeight);
					}
					return {
						init: init
					};

				}();

				matchHeight.init();
				$('.same-height').matchHeight();
				//$('.same-height').matchHeight();

				$(window).resize(function () {
					$.fn.matchHeight._update();
				})
			} catch (err) {
				console.log(err);
			}
		},
		slider: function () {
			try {

				$('.carousel-items').slick({
					slidesToShow: 3,
					slidesToScroll: 3,
					arrows: false,
					dots: true,
					infinite: true,
					responsive: [{
						breakpoint: 768,
						settings: {
							arrows: false,
							slidesToShow: 1,
							slidesToScroll: 1,
							dots: true
						}
					}, {
						breakpoint: 992,
						settings: {
							arrows: false,
							slidesToShow: 2,
							slidesToScroll: 1,
							dots: true
						}
					}]
				});

				$('.news-single-slider').slick({
					slidesToShow: 1,
					slidesToScroll: 1,
					prevArrow: '<button type="button" class="slick-prev work-block__prev work-block__btn"><span class="icon-arrow-left2"></span></button>',
					nextArrow: '<button type="button" class="slick-next work-block__next work-block__btn"><span class="icon-arrow-right2"></span></button>',
					dots: false,
					infinite: true,
				});

				$('.testimonial-slider').slick({
					slidesToShow: 2,
					slidesToScroll: 1,
					arrows: false,
					dots: true,
					infinite: true,
					responsive: [{
						breakpoint: 1025,
						settings: {
							arrows: false,
							slidesToShow: 1,
							slidesToScroll: 1,
							dots: true
						}
					}]
				});

				$('.news-slider').slick({
					slidesToShow: 3,
					slidesToScroll: 1,
					arrows: false,
					dots: true,
					infinite: true,
					responsive: [{
						breakpoint: 1025,
						settings: {
							arrows: false,
							slidesToShow: 2,
							slidesToScroll: 2,
							dots: true
						}
					}, {
						breakpoint: 768,
						settings: {
							arrows: false,
							slidesToShow: 1,
							slidesToScroll: 1,
							dots: true
						}
					}
					],

				});

				$('.image-slider').slick({
					slidesToShow: 3,
					slidesToScroll: 1,
					prevArrow: '<button type="button" class="slick-prev work-block__prev work-block__btn"><span class="icon-arrow-left2"></span></button>',
					nextArrow: '<button type="button" class="slick-next work-block__next work-block__btn"><span class="icon-arrow-right2"></span></button>',
					dots: true,
					infinite: true,
					// centerMode: true,
					// centerPadding: '130px',
					//autoplay: true,
					autoplaySpeed: 2000,
					adaptiveHeight: true,

					responsive: [{
						breakpoint: 768,
						settings: {
							slidesToShow: 2,
							// centerMode: true,
							// centerPadding: '80px',
							slidesToScroll: 1,
							dots: true
						}
					},
					{
						breakpoint: 480,
						settings: {

							slidesToShow: 1,
							slidesToScroll: 1,
							centerMode: false,
							dots: true
						}
					}
					]
				});

				// $('.carousel-items').flickity({
				// 	cellAlign: 'left',
				// 	pageDots: true,
				// 	wrapAround: true,
				// 	contain: true,
				// 	imagesLoaded: true,
				// 	autoplay: true,
				// 	groupCells: 3,
				// 	resize: true,
				// });

				$('.accordion-button, .accordion-header > span').on('click', function () {

					var parentId = $(this).parent().attr('id');
					var target = $(this).attr('data-bs-target') != undefined ? $(this).attr('data-bs-target') : $(this).prev().attr('data-bs-target');
					var thisSelect = $(this).attr('data-bs-target') != undefined ? $(this) : $(this).prev();
					var checkClass = $(target).hasClass('show');
					var parent = $(thisSelect).parents()[2];
					var parent1 = $(thisSelect).parents()[1];
					if (checkClass === true) {
						$(target).removeClass('show');
						$(thisSelect).next().removeClass('icon-circle-down')
						$(thisSelect).next().addClass('icon-circle-up')
						$(parent1).removeClass('active')
					} else {

						$(parent).children().children().removeClass('show')
						$(parent1).siblings().removeClass('active')
						$(parent1).siblings().children().children('span').removeClass('icon-circle-down')
						$(parent1).siblings().children().children('span').addClass('icon-circle-up')

						$(parent1).addClass('active', 1000)
						$(thisSelect).next().removeClass('icon-circle-up')
						$(thisSelect).next().addClass('icon-circle-down')
						$(target).addClass('show', 1000);
					}
				})
			} catch (err) {
				console.log(err);
			}
		},
		gallery: function () {
			try {
				var fix = function () {
					var t = $('.woocommerce-product-gallery__trigger'), h = t.next('.flex-viewport').outerHeight() - 16;
					t.height(h);
				}
				$(window).bind('load resize', fix);
				$('.woocommerce-product-gallery .flex-control-nav li').on('click', function () {
					setTimeout(fix, 500);
				});
			} catch (err) {
				console.log(err);
			}
		}
	};
	$('[data-bs-toggle="tooltip"]').tooltip();

	$(function () {
		ss.init();

	});
})(jQuery);