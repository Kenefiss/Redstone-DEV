//*========================================
//* 01 FUNCTIONS ON DOCUMENT READY        =
//*========================================
//* 02 FUNCTIONS CALC & RESIZE, SCROLL    =
//*========================================
//* 03 SWIPER                             =
//*========================================
//* 04 HEADER                             =
//*========================================
//* 05 ANIMATION & GSAP, ANCHOR SCROLL    =
//*========================================
//* 06 POPUPS                             =
//*========================================
//* 07 INPUTS                             =
//*========================================
//* 08 OTHER JS                           =
//*========================================
//* 09 DYNAMIC LOAD JS                    =
//*========================================

"use strict";

let _functions = {},
  winW, winH, winScr, isTouchScreen, isAndroid, isIPhone, is_Mac, is_IE, is_Chrome;

document.addEventListener("DOMContentLoaded", function() {

  //*=================================
  //* 01 FUNCTIONS ON DOCUMENT READY =
  //*=================================
  isTouchScreen = navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i),
    isAndroid = navigator.userAgent.match(/Android/i),
    isIPhone = navigator.userAgent.match(/iPhone/i),
    is_Mac = navigator.platform.toUpperCase().indexOf('MAC') >= 0,
    is_IE = /MSIE 9/i.test(navigator.userAgent) || /rv:11.0/i.test(navigator.userAgent) || /MSIE 10/i.test(navigator.userAgent) || /Edge\/\d+/.test(navigator.userAgent),
    is_Chrome = navigator.userAgent.indexOf('Chrome') >= 0 && navigator.userAgent.indexOf('Edge') < 0;


  //* check browser 
  if (isTouchScreen) document.documentElement.classList.add("touch-screen");
  if (isAndroid) document.documentElement.classList.add("android");
  if (isIPhone) document.documentElement.classList.add("ios");
  if (is_Mac) document.documentElement.classList.add("mac");
  if (is_IE) document.documentElement.classList.add("ie");
  if (is_Chrome) document.documentElement.classList.add("chrome");


  setTimeout(function() {
    document.body.classList.add('loaded');
  }, 500);




  //*=====================================
  //* 02 FUNCTIONS CALC & SCROLL, RESIZE =
  //*=====================================
  //* Function Calculations on page
  _functions.pageCalculations = function() {
    winW = window.innerWidth;
    winH = window.innerHeight;
  }
  _functions.pageCalculations();


  //* Function on page scroll
  window.addEventListener("scroll", () => {
    _functions.scrollCall();
    // _functions.yearScroll();
  });


  _functions.scrollCall = function() {
    winScr = window.scrollY;
    if (document.querySelector("header")) {
      let header = document.querySelector(".header-wrap");

      if (winScr > 10) {
        header.classList.add("scrolled");
      } else {
        header.classList.remove("scrolled");
      }
    }
  };


  //*  Function on page resize 
  _functions.resizeCall = function() {
    setTimeout(() => {
      _functions.pageCalculations();
    }, 100);
  };


  if (!isTouchScreen) {
    window.addEventListener("resize", () => {
      _functions.resizeCall();
    });
  } else {
    window.addEventListener("orientationchange", () => {
      _functions.resizeCall();
    }, false);
  }




  //*============
  //* 03 SWIPER =
  //*============
  _functions.getSwOptions = function(swiper) {
    let options = JSON.parse(swiper.dataset.options);
    options = (!options || typeof options !== "object") ? {} : options;
    const $p = swiper.closest(".swiper-entry"),
      slidesLength = swiper.querySelectorAll(".swiper-wrapper>.swiper-slide").length;


    if (!options.pagination) options.pagination = {
      el: $p.querySelector(".swiper-pagination"),
      clickable: true
    };
    if (!options.navigation) options.navigation = {
      nextEl: $p.querySelector(".swiper-button-next"),
      prevEl: $p.querySelector(".swiper-button-prev"),
    };
    if (options.arrowsOut) options.navigation = {
      nextEl: $p.closest('.section').find('.swiper-button-next')[0],
      prevEl: $p.closest('.section').find('.swiper-button-prev')[0]
    };
    if (options.lazy == true) {
      swiper.querySelectorAll(".swiper-wrapper>.swiper-slide img").forEach((img) => {
        img.classList.add('swiper-lazy');
        img.insertAdjacentHTML('afterend', '<div class="swiper-lazy-preloader"></div>');
      });
    }
    if (options.speed) options.speed = 1000;
    if (slidesLength <= 1) options.loop = false;
    if (isTouchScreen) options.direction = "horizontal";
    if (!options.centerInsufficientSlides) options.centerInsufficientSlides = false;


    options.preloadImages = false;
    options.lazy = {
      loadPrevNext: true
    };
    options.observer = true;
    options.observeParents = true;
    options.watchOverflow = true;
    options.roundLengths = false;


    return options;
  };


  _functions.initSwiper = function(el) {
    let options = _functions.getSwOptions(el);
    let swiper;

    if (options.destroy) {
      const breakpoint = window.matchMedia(options.destroy);
      const breakpointChecker = function() {
        if (breakpoint.matches === true) {
          if (swiper !== undefined) {
            swiper.destroy(true, true);
          }
          return;

        } else if (breakpoint.matches === false && swiper.destroyed) {
          swiper = new Swiper(el, options);
        }
      };
      breakpointChecker();
      breakpoint.addEventListener("change", breakpointChecker);

    } else {
      swiper = new Swiper(el, options);
    }
  };


  if (document.querySelectorAll(".swiper-entry .swiper-container").length) {
    document.querySelectorAll(".swiper-entry .swiper-container").forEach((element) => {
      _functions.initSwiper(element);
    });
  }




  //*============
  //* 04 HEADER =
  //*============
  //* Open menu 
  document.querySelector('.btn-burger').addEventListener('click', function() {
    this.classList.toggle('is-active');
    document.querySelector('html').classList.toggle('overflow-menu');
    document.querySelector('header').classList.toggle('open-menu');
  });


  //* Open Sub menu
  document.querySelectorAll('.has-submenu b').forEach(item => {
    item.addEventListener('click', function() {
      if (window.innerWidth > 992) {
        this.closest('.has-submenu').classList.add('active');
      } else {
        this.closest('.has-submenu').classList.toggle('active');
      }
    });
  })


  //* Close Sub menu
  document.querySelectorAll('.submenu-close').forEach(item => {
    item.addEventListener('click', function() {
      this.closest('.has-submenu').classList.remove('active');
    });
  })


  // * Close Header informer
  if (sessionStorage.getItem("informer-hide")) {
    document.querySelector('.header-informer').classList.add('hide-informer')
  }

  document.addEventListener('click', (e) => {
    if (e.target.closest('.header-informer .btn-close')) {
      e.target.parentNode.classList.add('hide-informer');
      sessionStorage.setItem("informer-hide", "true");
    }
  });



  //*========================================
  //* 05 ANIMATION & GSAP, ANCHOR SCROLL    =
  //*========================================
  // Animation
  const animateBlock = document.querySelectorAll('.animate-item');

  const observerOptions = {
    root: null,
    threshold: 0,
    rootMargin: (window.innerWidth > 767) ? "-70px" : "0px"
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
    const targetPosition = document.querySelector(targetId).offsetTop - document.querySelector('header').offsetHeight - 30;
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


  // GSAP
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


  if (window.innerWidth < 576) {

    const obElements = document.querySelectorAll('.category');

    const obOptions = {
      root: null,
      rootMargin: '-160px 0px 100px 0px',
      threshold: 0
    };

    obElements.forEach(el => {

      const box = el.querySelector('img');
      el.tl = gsap.timeline({
        paused: true
      });

      el.tl
        .fromTo(box, {
          y: 300,
          scale: 1
        }, {
          y: -50,
          scale: 1.5
        }, {
          y: -500,
          scale: 6
        })

      el.observer = new IntersectionObserver(entry => {
        if (entry[0].intersectionRatio > 0) {
          gsap.ticker.add(el.progressTween)
          entry[0].target.classList.add('show-bg')
        } else {
          gsap.ticker.remove(el.progressTween)
          entry[0].target.classList.remove('show-bg')
        }
      }, obOptions);

      el.progressTween = () => {
        // Get scroll distance to bottom of viewport.
        const scrollPosition = (window.scrollY + window.innerHeight);
        // Get element's position relative to bottom of viewport.
        const elPosition = (scrollPosition - el.offsetTop);
        // Set desired duration.
        const durationDistance = (window.innerHeight + el.offsetHeight);
        // Calculate tween progresss.
        const currentProgress = (elPosition / durationDistance);
        // Set progress of gsap timeline.     
        el.tl.progress(currentProgress / 1.5);
      }

      el.observer.observe(el);
    });
  }




  //*============
  //* 06 POPUPS =
  //*============
  // Popups Functions
  let popupTop = 0;

  _functions.removeScroll = function() {
    popupTop = window.scrollY;
    const html = document.querySelector('html');

    html.style.top = -popupTop + "px";
    html.style.width = "100%";
    html.classList.add("overflow-hidden");
  };

  _functions.addScroll = function() {
    document.documentElement.classList.remove("overflow-hidden");
    window.scroll(0, popupTop);
  };

  _functions.openPopup = function(popup) {
    document.querySelectorAll(".popup-content").forEach((element) => {
      element.classList.remove("active");
    });
    document.querySelectorAll(popup + ", .popup-wrapper").forEach((element) => {
      element.classList.add("active");
    });
    _functions.removeScroll();
  };

  _functions.closePopup = function() {
    document.querySelectorAll(".popup-wrapper, .popup-content").forEach((element) => {
      element.classList.remove("active");
      document.querySelector('.video-popup iframe').remove();
    });
    _functions.addScroll();
  };

  document.addEventListener('click', (e) => {
    if (e.target.closest('.popup-content .layer-close, .popup-wrapper .close-popup')) {
      e.preventDefault();
      _functions.closePopup();
    }
  });


  document.addEventListener('click', (e) => {
    const popupWrapper = document.getElementById("popups");

    if (e.target.closest('.open-popup')) {
      e.preventDefault();
      let dataRel = e.target.closest('.open-popup').getAttribute('data-rel');

      if (popupWrapper.hasChildNodes()) {
        _functions.openPopup('.popup-content[data-rel="' + dataRel + '"]');

      } else {
        const ajaxPopup = new XMLHttpRequest();

        ajaxPopup.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            popupWrapper.innerHTML = this.responseText;

            setTimeout(function() {
              _functions.openPopup('.popup-content[data-rel="' + dataRel + '"]');
            }, 50);
          }
        };
        ajaxPopup.open("GET", "inc/_popups.php", true);
        ajaxPopup.send();
      }
    }
  });

  _functions.videoPopup = function(src) {
    const videoPopup = document.querySelector('.video-popup');
    const videoContent = videoPopup.querySelector('.video-popup-container iframe');

    videoContent.src = src
    videoPopup.classList.add('active');

    _functions.removeScroll();
  };

  _functions.closeVideoPopup = function() {
    const videoPopup = document.querySelector('.video-popup');
    const videoContent = videoPopup.querySelector('.video-popup-container iframe');

    videoContent.src = 'about:blank'
    videoPopup.classList.remove('active');

    _functions.addScroll();
  };

  document.addEventListener('click', (e) => {
    if (e.target.closest('.open-video')) {
      const srcVideo = e.target.closest('.open-video').getAttribute('data-src')
      e.preventDefault();
      _functions.videoPopup(srcVideo);
    }
  });

  document.addEventListener('click', (e) => {
    if (e.target.closest('.video-popup-close, .video-popup-layer')) {
      e.preventDefault();
      _functions.closeVideoPopup();
    }
  });




  //*==============
  //* 07 INPUTS   =
  //*==============
  // Input events
  const inputs = document.querySelectorAll('.input');

  inputs.forEach(function(input) {
    input.addEventListener('focus', function(e) {
      e.target.parentNode.classList.add('focus');
    }, true)

    input.addEventListener('blur', function(e) {
      e.target.parentNode.classList.remove('focus');

      if (e.target.hasAttribute('required')) {
        if (e.target.value.trim()) {
          e.target.parentNode.classList.remove('invalid');
        } else {
          e.target.parentNode.classList.add('invalid');
        }
      }
    }, true)

    input.addEventListener('keyup', function(e) {
      if (e.target.value) {
        e.target.parentNode.classList.add('value');
      } else {
        e.target.parentNode.classList.remove('value');
      }
    }, true)
  })


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
  //* 08 OTHER JS =
  //*==============
  /* sorting */
  // $(document).on('click', '.sort-btn', function() {
  //   $('.sort-nav').slideToggle();
  //   $(this).toggleClass('active');
  // });

  // if (winW < 1200) {
  //   $(document).on('click', '.js-sort-nav a', function() {
  //     $(this).closest('.sort-nav').slideUp();
  //   });
  // }

  // /* change year after scroll */
  // _functions.yearScroll = function() {
  //   if (!$('.year-row').length || winW < 1200) return false;

  //   $('.year-row').each(function(i) {
  //     if ($(this).offset().top - 120 <= winScr && $(this).data('year') !== $('.year-to-change').text()) {
  //       $('.year-to-change').text($(this).data('year'));
  //     }
  //   });
  // }




  //*=====================
  //* 09 DYNAMIC LOAD JS =
  //*=====================
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