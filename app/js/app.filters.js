"use strict";

document.addEventListener("DOMContentLoaded", function() {

  $(function() {
    function t(t) {
      return state = {
        url: t
      },
      history.pushState(state, null, t),
      !1
    }
    $(".portfolio-number").each(function(t, i) {
      $(i).text(("00" + ++t).substr(-3))
    });
    var i = $(".sorting-container").isotope({
      itemSelector: ".sorting-item",
      masonry: {
        columnWidth: ".grid-sizer"
      }
    });
    $(".sorting-menu a").click(function(e) {
      if (e.preventDefault(),
      $(this).hasClass("active"))
        return !1;
      $(this).parent().parent().find(".active").removeClass("active"),
      $(this).addClass("active"),
      $(this).closest(".sorting-menu").find(".responsive-filtration-title .text").text($(this).text());
      var n = $(this).attr("data-filter");
      i.isotope({
        filter: n,
        transitionDuration: "0.4s"
      }),
      $(".responsive-filtration-title").removeClass("active"),
      t($(this).attr("href"))
    }),
    i.isotope({
      filter: $(".sorting-menu a.active").attr("data-filter"),
      transitionDuration: 0
    }),
    $(".responsive-filtration-title").on("click", function() {
      $(this).toggleClass("active")
    }),
    void 0 !== history.replaceState && history.replaceState({
      url: location.pathname.replace("/", "")
    }, null, null),
    window.addEventListener("popstate", function(t) {
      window.location.href = t.state.url
    })
  });
  

});