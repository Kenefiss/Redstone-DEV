<link href="css/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script>
  Array.from(document.querySelectorAll('.section')).forEach(function(el) {
    el.style.setProperty('--h-section', Math.round(el.offsetHeight) + "px");
  })
</script>
<style>
  .section {
    content-visibility: auto;
    contain-intrinsic-size: auto var(--h-section);
  }
</style>

<script defer src="js/vendors/jquery.min.js"></script>
<script defer src="js/vendors/swiper-bundle.min.js"></script>
<script defer src="js/app.global.js"></script>

<!-- Remove on mobile device -->
<script defer src="js/vendors/SmoothScroll.js"></script>