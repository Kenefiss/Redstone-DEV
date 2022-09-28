//*========================================
//* 01 FUNCTIONS ON DOCUMENT READY        =
//*========================================
//* 02 FUNCTIONS CALC & RESIZE, SCROLL    =
//*========================================
//* 03 HEADER                             =
//*========================================
//* 04 SWIPER                             =
//*========================================
//* 05 POPUPS                             =
//*========================================
//* 06 INPUTS, KEY FOCUS                  =
//*========================================
//* 07 TABS, ACCORDION                    =
//*========================================
//* 11 OTHER JS                           =
//*========================================

let _functions = {},
  winW, winH, winScr, isTouchScreen, isAndroid, isIPhone, is_Mac, is_IE, is_Chrome;

jQuery(function($) {
  "use strict";

  //*=================================
  //* 01 FUNCTIONS ON DOCUMENT READY =
  //*=================================
  isTouchScreen = navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i),
    isAndroid = navigator.userAgent.match(/Android/i),
    isIPhone = navigator.userAgent.match(/iPhone/i),
    is_Mac = navigator.platform.toUpperCase().indexOf('MAC') >= 0,
    is_IE = /MSIE 9/i.test(navigator.userAgent) || /rv:11.0/i.test(navigator.userAgent) || /MSIE 10/i.test(navigator.userAgent) || /Edge\/\d+/.test(navigator.userAgent),
    is_Chrome = navigator.userAgent.indexOf('Chrome') >= 0 && navigator.userAgent.indexOf('Edge') < 0;


  const $body = $('body');
  setTimeout(function() {
    $body.addClass('loaded');
  }, 500);


  if (isTouchScreen) {
    $('html').addClass('touch-screen');
  }
  if (isAndroid) {
    $('html').addClass('android');
  }
  if (isIPhone) {
    $('html').addClass('ios');
  }
  if (is_Mac) {
    $('html').addClass('mac');
  }
  if (is_IE) {
    $('html').addClass('ie');
  }
  if (is_Chrome) {
    $('html').addClass('chrome');
  }




  //*=====================================
  //* 02 FUNCTIONS CALC & SCROLL, RESIZE =
  //*=====================================
  // Function Calculations on page
  _functions.pageCalculations = function() {
    winW = $(window).width();
    winH = $(window).height();
  }
  _functions.pageCalculations();



  /* Function on page scroll */
  $(window).on('scroll', function() {
    _functions.scrollCall();
  });

  var prev_scroll = 0;
  _functions.scrollCall = function() {
    winScr = $(window).scrollTop();
    if (winScr > prev_scroll) {
      $('.header-wrap').addClass('scrolled');
    } else if (winScr <= 10) {
      $('.header-wrap').removeClass('scrolled');
      prev_scroll = 0;
    };
  }
  _functions.scrollCall();



  /* Function on page resize */
  _functions.resizeCall = function() {
    setTimeout(function() {
      _functions.pageCalculations();
    }, 100);
  };

  if (!isTouchScreen) {
    $(window).resize(function() {
      _functions.resizeCall();
    });
  } else {
    window.addEventListener("orientationchange", function() {
      _functions.resizeCall();
    }, false);
  }




  //*============
  //* 03 SWIPER =
  //*============
  // Options set Swiper
  _functions.getSwOptions = function(swiper) {
    let options = swiper.data('options');
    options = (!options || typeof options !== 'object') ? {} : options;
    const $p = swiper.closest('.swiper-entry'),
      slidesLength = swiper.closest('.section').find('.swiper-wrapper>.swiper-slide').length;

    if (!options.pagination) options.pagination = {
      el: $p.find('.swiper-pagination')[0],
      clickable: true
    };
    if (!options.navigation) options.navigation = {
      nextEl: $p.find('.swiper-button-next')[0],
      prevEl: $p.find('.swiper-button-prev')[0]
    };
    if (options.arrowsOut) options.navigation = {
      nextEl: $p.closest('.section').find('.swiper-button-next')[0],
      prevEl: $p.closest('.section').find('.swiper-button-prev')[0]
    };
    options.preloadImages = false;
    options.lazy = {
      loadPrevNext: true
    };
    if (options.lazy) {
      $p.find('.swiper-slide').find('img').addClass('swiper-lazy').after('<div class="swiper-lazy-preloader"></div>');
    }

    options.observer = true;
    options.observeParents = true;
    options.watchOverflow = true;
    options.centerInsufficientSlides = true;
    if (options.speed) options.speed = 1000;
    options.roundLengths = true;
    if (isTouchScreen) options.direction = "horizontal";
    if (slidesLength <= 1) {
      options.loop = false;
    }
    if (options.customFraction) {
      $p.addClass('custom-fraction');
      if (slidesLength > 1 && slidesLength < 100) {
        $p.closest('.section').find('.c-fraction-current').text('1');
        $p.closest('.section').find('.c-fraction-total').text(slidesLength);
      }
    }
    return options;
  };


  // Init each Swiper
  _functions.initSwiper = function(el) {
    const swiper = new Swiper(el[0], _functions.getSwOptions(el));
  };
  $('.swiper-entry .swiper-container').each(function() {
    _functions.initSwiper($(this));

    let $thisSwiper = $(this)[0].swiper;

    if ($thisSwiper.isLocked) {
      $thisSwiper.$wrapperEl.closest('.section').addClass('swiper-controls-hide')
    } else {
      $thisSwiper.$wrapperEl.closest('.section').removeClass('swiper-controls-hide');
    }

    $thisSwiper.on('resize', function() {
      if ($thisSwiper.isLocked) {
        $thisSwiper.$wrapperEl.closest('.section').addClass('swiper-controls-hide')
      } else {
        $thisSwiper.$wrapperEl.closest('.section').removeClass('swiper-controls-hide');
      }
    });
  });




  // Custom fraction
  $('.custom-fraction').each(function() {
    var $this = $(this),
      $thisSwiper = $this.find('.swiper-container')[0].swiper;

    $thisSwiper.on('slideChange', function() {
      $this.closest('.section').find('.c-fraction-current').text(
        function() {
          if ($thisSwiper.realIndex < 100) {
            return ($thisSwiper.realIndex + 1)
          } else {
            return $thisSwiper.realIndex + 1
          }
        }
      )
    });
  });




  //*============
  //* 04 HEADER =
  //*============
  /* Open menu */
  $(document).on('click', '.hamburger', function() {
    _functions.scrollWidth();
    $(this).toggleClass('is-active');
    $('html').toggleClass('overflow-menu');
    $(this).parents('header').toggleClass('open-menu');
    $(this).closest('header').removeClass('open-search');
    $(this).closest('header').find('.h-second').removeClass('active')
    $('html').removeClass('open-second-menu');
  });


  //*============
  //* 05 POPUPS =
  //*============
  // Popups Functions
  let popupTop = 0;
  _functions.removeScroll = function() {
    popupTop = $(window).scrollTop();
    $('html').css({
      "top": -$(window).scrollTop(),
      "width": "100%"
    }).addClass("overflow-hidden");
  }
  _functions.addScroll = function() {
    $('html').removeClass("overflow-hidden");
    window.scroll(0, popupTop);
  }
  _functions.openPopup = function(popup) {
    $('.popup-content').removeClass('active');
    $(popup + ', .popup-wrapper').addClass('active');
    _functions.removeScroll();
  };
  _functions.closePopup = function() {
    $('.popup-wrapper, .popup-content').removeClass('active');
    $('.video-popup iframe').remove();
    _functions.addScroll();
  };


  $(document).on('click', '.open-popup', function(e) {
    e.preventDefault();
    _functions.openPopup('.popup-content[data-rel="' + $(this).data('rel') + '"]');
  });


  // Video popup
  $(document).on('click', '.video-open', function(e) {
    e.preventDefault();
    var video = $(this).attr('href');
    $('.video-popup-container iframe').attr('src', video);
    $('.video-popup').addClass('active');
    $('html').addClass('overflow-hidden');
  });
  $('.video-popup-close, .video-popup-layer').on('click', function(e) {
    $('html').removeClass('overflow-hidden');
    $('.video-popup').removeClass('active');
    $('.video-popup-container iframe').attr('src', 'about:blank');
    e.preventDefault();
  });



  //*=======================
  //* 06 INPUTS, KEY FOCUS =
  //*=======================
  // Inputs 
  $(document).on('focus', '.input-field-wrapper .input, .input-button-wrap .input', function() {
    $(this).closest('.input-field-wrapper').addClass('focus');
  });
  $(document).on('blur', '.input-field-wrapper .input, .input-button-wrap .input', function() {
    $(this).closest('.input-field-wrapper').removeClass('focus');
  });
  $(document).on('keyup', '.input-field-wrapper .input', function() {
    if ($(this).val()) $(this).closest('.input-field-wrapper').addClass('value');
    else $(this).closest('.input-field-wrapper').removeClass('value');
  });


  // Invalid Input
  $(document).on('blur', '.input-field-wrapper .input[required]', function() {
    if ($(this).val().trim()) {
      $(this).closest('.input-field-wrapper').removeClass('invalid');
    } else {
      $(this).closest('.input-field-wrapper').addClass('invalid');
    }
  });


  // Check if input has value or autofill
  $(document).ready(function() {
    $('.input-field-wrapper .input').each(function() {
      let $this = $('.input-field-wrapper .input')
      if ($this.val()) {
        $this.closest('.input-field-wrapper').addClass('value');
      }
    });

    $('.input-field-wrapper .input:-webkit-autofill').each(function() {
      let $this = $('.input-field-wrapper .input')

      $this.closest('.input-field-wrapper').addClass('value');
    });
  });


  // Detect if user is using keyboard tab-button to navigate
  // with 'keyboard-focus' class we add default css outlines
  function keyboardFocus(e) {
    if (e.keyCode !== 9) {
      return;
    }

    switch (e.target.nodeName.toLowerCase()) {
      case 'input':
      case 'select':
      case 'textarea':
        break;
      default:
        document.documentElement.classList.add('keyboard-focus');
        document.removeEventListener('keydown', keyboardFocus, false);
    }
  }
  document.addEventListener('keydown', keyboardFocus, false);




  //*======================
  //* 07 TABS, ACCORDION  =
  //*======================
  // Tabs
  $(document).on('click', '.un__tab-title', function() {
    $(this).closest('.un__tab-nav').toggleClass('active');
  });

  $(document).on('click', '.un__tab-toggle>div', function(e) {
    e.preventDefault();
    var tab = $(this).closest('.un__tabs').find('.un__tabs-block .un__tab');
    var i = $(this).index();
    $(this).addClass('active').siblings().removeClass('active');
    tab.eq(i).siblings('.un__tab:visible').stop().finish().fadeOut(function() {
      tab.eq(i).fadeIn(200);
    });
    $(this).closest('.un__tab-nav').removeClass('active').find('.un__tab-title b').text($(this).text());
  });

  $(document).on('click', function(e) {
    if (!$(e.target).closest('.un__tab-nav').length && $(window).width() < 991) {
      $('.un__tab-nav').removeClass('active');
    }
  });

  // Accordion
  $(document).on('click', '.custom-acr .custom-acr-item .custom-acr-title', function() {
    if ($(this).hasClass('active')) {
      $(this).removeClass('active').next().slideUp();
    } else {
      $(this).closest('.custom-acr').find('.custom-acr-title').not(this).removeClass('active').next().slideUp();
      $(this).addClass('active').next().slideDown();
    }

    _functions.cutText();
  });






  //*==============
  //* 11 OTHER JS =
  //*==============


});