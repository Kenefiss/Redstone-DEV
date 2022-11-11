"use strict";

document.addEventListener("DOMContentLoaded", function() {

    function t(t) {
      let state;
      return state = {
        url: t
      },
      history.pushState(state, null, t),
      !1
    }

    
    let isoContainer = document.querySelector('.cases-isotope');
    let iso = new Isotope( isoContainer, {
      // options
      itemSelector: '.cases-isotope [class*=col]',
      layoutMode: 'fitRows'
    //   masonry: {
    //     columnWidth: ".grid-sizer"
    //   }
    });


    document.addEventListener('click', function (e) {
      if (e.target.closest('.sort-btn')) {
        e.target.closest('.sort-wrapp').classList.toggle('active');
      }
    });


    document.addEventListener('click', function (e) {
      if (e.target.closest('.sort-nav a')) {
        e.preventDefault()

        const $this = e.target.closest('.sort-nav a');
        const $wrap = $this.closest('.sort-wrapp');
        const $wrapTitle = document.querySelector(".sort-btn");


        if ($this.classList.contains("active")) return !1;
        
        document.querySelector('.sort-nav a.active').classList.remove("active")
        $this.classList.add("active");

        let n = $this.getAttribute("data-filter");

        iso.arrange({
          filter: n,
          transitionDuration: "0.4s"
        });


        $wrap.classList.remove("active");
        $wrapTitle.innerText = $this.innerText;

        t($this.getAttribute("href"));
      }
    });


    iso.arrange({
      filter: document.querySelector(".sort-nav a.active").getAttribute("data-filter"),
      transitionDuration: 0
    }),



    void 0 !== history.replaceState && history.replaceState({
      url: location.pathname.replace("/", "")
    }, null, null),
    window.addEventListener("popstate", function(t) {
      window.location.href = t.state.url
    })

});