$(document).ready(allFunc);
function allFunc() {
	//Sticky header
	$(window).on('scroll load resize', function(event) {
		var scrollValue = $(window).scrollTop();
		if (scrollValue > 70) {
			 $('.wrapper_header').addClass('fixed-top');
		} else {
			$('.wrapper_header').removeClass('fixed-top');
		}
	});
	//Navbar scroll nav
	$('.navbar a[href^="#"],\
		.header-appointment__btn,\
		.home-main__order-btn,\
		.home-main__order-btn_mobile__inner,\
		.about__order-btn,\
		.service-main__order-btn,\
		.services-main__order-btn,\
		.service_category-main__order-btn,\
		.service-category-about_order-btn,\
		.special__order-btn,\
		.specials-list-item__order-btn,\
		.specialist-menu a,\
		.specialist-about_order-btn,\
		.service-category-menu a,\
		.service-menu a').click(function(){
        var linkPath = $(this).attr('href');
        $('html, body').animate({ scrollTop: $(linkPath).offset().top - 0 }, 500);
        return false;
    });
	//Active menu link
	$('.nav-link').each(function() {
		$(this).removeClass('active');
	});
	var path = window.location.href;
	$('.nav-link').each(function() {
		if (this.href === path) {
			$(this).addClass('active');
		}
		if (path.indexOf("service") > -1) {
		   $('.nav-item_services .nav-link').addClass('active');
		}
	});
	//Services dropdown
	$(".nav-item_services").hoverIntent({
		over: function over() {
				$('.services-dropdown').addClass('visible');
		},
		out: function out() {
				$('.services-dropdown').removeClass('visible');
		},
		timeout: 1000
	});
	$(".services-dropdown").hoverIntent({
		over: function over() {
				$(this).addClass('visible-when-hover');
		},
		out: function out() {
				$(this).removeClass('visible-when-hover');
		},
		timeout: 1000
	});
	$(".services-dropdown__item").hoverIntent({
		over: function over() {
				if ($(this).find('.services-dropdown__item-level-3-menu')) {
					$(this).find('.services-dropdown__item-level-3-menu').addClass('visible');
				}
		},
		out: function out() {
				if ($(this).find('.services-dropdown__item-level-3-menu')) {
					$(this).find('.services-dropdown__item-level-3-menu').removeClass('visible');
				}
		},
		timeout: 1000
	});
	$(".services-dropdown__item-level-3-menu").hoverIntent({
		over: function over() {
				$(this).addClass('visible-when-hover');
		},
		out: function out() {
				$(this).removeClass('visible-when-hover');
		},
		timeout: 100
	});
	//Partners swiper
    var swiperPartners = new Swiper('.swiper-container_partners', {
      navigation: {
        nextEl: '.swiper-button-next_partners',
        prevEl: '.swiper-button-prev_partners',
      },
	  slidesPerView: 4,
	  //centeredSlides: true,
	  loop: true,
	  spaceBetween: 40,
	  breakpoints: {
		// when window width is <= 320px
		320: {
		  slidesPerView: 2,
		},
		// when window width is <= 240px
		240: {
		  slidesPerView: 1,
		}
	  }
    });
	//Partners match height
	$('.partner').matchHeight();
	//Specials slides match height
	$('.swiper-slide_specials').matchHeight();
	//Specials parts match height
	$('.specials-list-item__part').matchHeight();
	//Specials swiper
    var swiperSpecials = new Swiper('.swiper-container_specials', {
      navigation: {
        nextEl: '.swiper-button-next_specials',
        prevEl: '.swiper-button-prev_specials',
      },
      pagination: {
        el: '.swiper-pagination_specials',
		clickable: true,
      },
	  loop: true,
    });
	//Phone mask
	$("[type='tel']").mask("+7(999) 999-9999");
	//Pricelist-items able to hide
	$('.pricelist__item').slice(0, 5).removeClass('able-to-hide');
	//Pricelist-items show/hide
	$('.pricelist__show-all').on( "click", function() {
		$('.able-to-hide').toggle('medium');
		$(this).text(function(i, text){
			return text === "Скрыть последние" ? "Все цены" : "Скрыть последние";
		});	
	});
	//Doctors swiper
    var swiperDoctors = new Swiper('.swiper-container_doctors', {
      navigation: {
        nextEl: '.swiper-button-next_doctors',
        prevEl: '.swiper-button-prev_doctors',
      },
			slidesPerView: 5,
			//centeredSlides: true,
			loop: true,
			spaceBetween: 0,
			breakpoints: {
				// when window width is <= 1170px
				1170: {
					slidesPerView: 3,
				},
				// when window width is <= 991px
				991: {
					slidesPerView: 2,
				},
				// when window width is <= 767px
				767: {
					slidesPerView: 1,
				}
	  	}
    });
	//Videos swiper
    var swiperVideos = new Swiper('.swiper-container_videos', {
	  slidesPerView: 2,
      navigation: {
        nextEl: '.swiper-button-next_videos',
        prevEl: '.swiper-button-prev_videos',
      },
      pagination: {
        el: '.swiper-pagination_videos',
		clickable: true,
      },
			loop: true,
			spaceBetween: 0,
			breakpoints: {
				767: {
					slidesPerView: 1,
				}
			}
    });
	//Testimonials swiper
    var swiperSpecials = new Swiper('.swiper-container_testimonials', {
	  slidesPerView: 2,
      navigation: {
        nextEl: '.swiper-button-next_testimonials',
        prevEl: '.swiper-button-prev_testimonials',
      },
      pagination: {
        el: '.swiper-pagination_testimonials',
			clickable: true,
				},
			loop: true,
			spaceBetween: 0,
			breakpoints: {
				767: {
					slidesPerView: 1,
				}
			}
    });
		//Testimonial inner match height
		$('.testimonial__inner').matchHeight();
		//Procedures swiper
    var swiperProcedures = new Swiper('.swiper-container_procedures', {
      navigation: {
        nextEl: '.swiper-button-next_procedures',
        prevEl: '.swiper-button-prev_procedures',
      },
			slidesPerView: 5,
			//centeredSlides: true,
			loop: true,
			spaceBetween: 0,
			breakpoints: {
				// when window width is <= 1170px
				1170: {
					slidesPerView: 3,
				},
				// when window width is <= 991px
				991: {
					slidesPerView: 2,
				},
				// when window width is <= 767px
				767: {
					slidesPerView: 1,
				}
			}
    });
		//Sertificates swiper
    var swiperSertificates = new Swiper('.swiper-container_sertificates-list', {
      navigation: {
        nextEl: '.swiper-button-next_sertificates-list',
        prevEl: '.swiper-button-prev_sertificates-list',
      },
			slidesPerView: 3,
			//centeredSlides: true,
			loop: true,
			spaceBetween: 10,
			breakpoints: {
				// when window width is <= 991px
				991: {
					slidesPerView: 2,
				},
				// when window width is <= 767px
				767: {
					slidesPerView: 1,
				}
			}
    });
		//Examples swiper
    var swiperExamples = new Swiper('.swiper-container_examples-list', {
      navigation: {
        nextEl: '.swiper-button-next_examples-list',
        prevEl: '.swiper-button-prev_examples-list',
      },
			slidesPerView: 1,
			//centeredSlides: true,
			loop: true,
			spaceBetween: 0,
    });
		//Examples swiper
    var swiperServiceCategoryAbout = new Swiper('.swiper-container_service-category-about', {
      navigation: {
        nextEl: '.swiper-button-next_service-category-about',
        prevEl: '.swiper-button-prev_service-category-about',
      },
			slidesPerView: 1,
			//centeredSlides: true,
			loop: true,
			spaceBetween: 0,
      pagination: {
        el: '.swiper-pagination_service-category-about',
				clickable: true,
			},
    });
		//Products swiper
    var swiperProducts = new Swiper('.swiper-container_products', {
      navigation: {
        nextEl: '.swiper-button-next_products',
        prevEl: '.swiper-button-prev_products',
      },
	  	slidesPerView: 1,
			loop: true,
    });
		$('#myModal').on('shown.bs.modal', function(e) {
    	swiperProducts.update();
    	var $invoker = $(e.relatedTarget);
      swiperProducts.slideTo($invoker.data('slider'));
      swiperProducts.update();
    });
}