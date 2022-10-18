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
//* 11 OTHER JS                           =
//*========================================

let _functions = {},
  winW, winH, winScr, isTouchScreen, isAndroid, isIPhone, is_Mac, is_IE, is_Chrome,
  mobileSrc = false;

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
    _functions.yearScroll();
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


  // Animation
  const animateBlock = document.querySelectorAll('.animate-item');

  const observerOptions = {
    root: null,
    threshold: 0,
    rootMargin: (window.innerWidth > 767) ? "-70px" : "-30px"
  };

  const observerFunction = new IntersectionObserver(function(entries, observer) {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      // console.log(entry.target)
      entry.target.classList.add('animated')
      observer.unobserve(entry.target)
    })

  }, observerOptions);


  animateBlock.forEach(block => {
    observerFunction.observe(block)
  });


  // Anchor Links Scroll
  const anchorLinks = document.querySelectorAll('a[href*="#"]:not([href="#"])');

  for (let i = 0; i < anchorLinks.length; i++) {
    anchorLinks[i].addEventListener("click", function(event) {
      event.preventDefault();
      const link_href = event.currentTarget.getAttribute("href")
      const parentHasClass = event.target.closest('.header-menu') !== null;

      if (parentHasClass) {
        document.querySelector('html').classList.remove('overflow-menu');
        document.querySelector('header').classList.remove('open-menu');
        setTimeout(function() {
          _functions.smoothScroll(event, link_href)
        }, 1500);
      } else {
        _functions.smoothScroll(event, link_href)
      }
    });
  }

  _functions.smoothScroll = function(event, link) {
    event.preventDefault();

    const targetId = link === "#" ? "header" : link;
    const targetPosition = document.querySelector(targetId).offsetTop - document.querySelector('header').offsetHeight - 0;
    const startPosition = window.scrollY;
    const distance = targetPosition - startPosition;
    const duration = 1000;
    let start = null;

    window.requestAnimationFrame(step);

    function step(timestamp) {
      if (!start) start = timestamp;
      const progress = timestamp - start;
      window.scrollTo(0, distance * (progress / duration) + startPosition);
      if (progress < duration) window.requestAnimationFrame(step);
    }
  }



  if (window.innerWidth > 1199) {
    // Icon in block
    document.querySelectorAll('.review-btn').forEach(btn => {
      btn.addEventListener('mousemove', function(e) {
        e.preventDefault();
        let icon = this.querySelectorAll(`:scope ${'.review-icon'}`),
          btnW = this.getBoundingClientRect().width,
          btnH = this.getBoundingClientRect().height,
          btnRect = e.currentTarget.getBoundingClientRect(),
          btnRectX = e.clientX - btnRect.left,
          btnRectY = e.clientY - btnRect.top;

        gsap.to(icon, 1, {
          x: btnRectX - btnW / 2,
          y: btnRectY - btnH / 2,
          ease: 'slow'
        });
      });
      btn.addEventListener('mouseleave', function() {
        let icon = this.querySelectorAll(`:scope ${'.review-icon'}`);
        gsap.to(icon, 2, {
          x: 0,
          y: 0,
          ease: 'slow'
        });
      });
    })

    // Btn Brief
    document.querySelectorAll('.round-btn-listener').forEach(btn => {
      btn.addEventListener('mousemove', function(e) {
        let icon = this.nextElementSibling.querySelectorAll(`:scope ${'.circle'}`),
          iconText = this.nextElementSibling.querySelectorAll(`:scope ${'.name'}`),
          btnW = this.getBoundingClientRect().width,
          btnH = this.getBoundingClientRect().height,
          btnRect = e.currentTarget.getBoundingClientRect(),
          btnRectX = e.clientX - btnRect.left,
          btnRectY = e.clientY - btnRect.top;

        gsap.to(icon, 2, {
          x: btnRectX - btnW / 2,
          y: btnRectY - btnH / 2,
          ease: 'slow'
        });
        gsap.to(iconText, 2.5, {
          x: btnRectX - btnW / 2,
          y: btnRectY - btnH / 2,
          ease: 'slow'
        });
      });
      btn.addEventListener('mouseleave', function() {
        let icon = this.nextElementSibling.querySelectorAll(`:scope ${'.circle'}`),
          iconText = this.nextElementSibling.querySelectorAll(`:scope ${'.name'}`);

        gsap.to(icon, 0.5, {
          x: 0,
          y: 0,
          overwrite: true
        });
        gsap.to(iconText, 0.5, {
          x: 0,
          y: 0,
          overwrite: true
        });
      });
    })
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
    if (options.lazy == true) {
      $p.find('.swiper-slide').find('img').addClass('swiper-lazy').after('<div class="swiper-lazy-preloader"></div>');
    }
    options.lazy = {
      loadPrevNext: true
    };

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

  //*============
  //* 04 HEADER =
  //*============
  /* Open menu */
  document.querySelector('.btn-burger').addEventListener('click', function() {
    this.classList.toggle('is-active');
    document.querySelector('html').classList.toggle('overflow-menu');
    document.querySelector('header').classList.toggle('open-menu');
  });

  document.querySelectorAll('.has-submenu b').forEach(item => {
    item.addEventListener('click', function() {

      if (window.innerWidth > 992) {
        this.closest('.has-submenu').classList.add('active');
      } else {
        this.closest('.has-submenu').classList.toggle('active');
      }
    });
  })

  document.querySelectorAll('.submenu-close').forEach(item => {
    item.addEventListener('click', function() {
      this.closest('.has-submenu').classList.remove('active');
    });
  })



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

  _functions.videoPopup = function (src) {
    $('.video-popup .embed-responsive').html('<iframe src="' + src + '"></iframe>');
    _functions.openPopup('.video-popup');
  };

  $(document).on('click', '.open-popup', function(e) {
    e.preventDefault();
    _functions.openPopup('.popup-content[data-rel="' + $(this).data('rel') + '"]');
  });

  $(document).on('click', '.popup-wrapper .close-popup, .popup-content .layer-close', function(e) {
    e.preventDefault();
    _functions.closePopup();
  });

  $(document).on('click', '.open-video', function (e) {
    e.preventDefault();
    _functions.videoPopup($(this).data('src'));
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




  //*==============
  //* 11 OTHER JS =
  //*==============
  /* sorting */
  $(document).on('click', '.sort-btn', function() {
    $('.sort-nav').slideToggle();
    $(this).toggleClass('active');
  });

  if (winW < 1200) {
    $(document).on('click', '.js-sort-nav a', function() {
      $(this).closest('.sort-nav').slideUp();
    });
  }

  /* change year after scroll */
  _functions.yearScroll = function() {
    if (!$('.year-row').length || winW < 1200) return false;

    $('.year-row').each(function(i) {
      if ($(this).offset().top - 120 <= winScr && $(this).data('year') !== $('.year-to-change').text()) {
        $('.year-to-change').text($(this).data('year'));
      }
    });
  }

  _functions.loadFileAsync = (url) => {
    return new Promise((resolve, reject) => {
      if (url) {
        let script = document.createElement("script");
        script.src = url;
        document.body.appendChild(script);
        resolve(true);
      } else {
        reject(false);
      }
    });
  };

  if (winW > 1200) {
    window.addEventListener("load", async () => {
      try {
        await _functions.loadFileAsync("js/vendors/SmoothScroll.min.js");
      } catch (err) {} finally {}
    });
  }

});