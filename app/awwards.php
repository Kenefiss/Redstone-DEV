<!DOCTYPE html>
<html lang="uk">

<head>
  <?php include 'inc/_top.php';?>
  <title>REDSTONE :: Awwards</title>
</head>

<body>
  <div id="loader-wrapper"></div>
  <div id="content-block">
    <?php include 'inc/_header.php';?>

    <main>

      <!-- AWWARDS -->
      <div class="section">
        <div class="container">
          <div class="row">
            <div calss="col-12">
              <div class="title-with-text">
                <div class="title page-title h2">Наші нагороди</div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-xl-3 d-none d-xl-block">
              <div class="year-wrap">
                <div class="year">
                  <div class="svg-text">
                    <svg version="1.1" viewBox="0 0 100 200" width="100%" height="100%" preserveAspectRatio="xMinYMin meet">
                      <text x="0" y="110" fill="none" stroke="#141414" stroke-width="2" font-size="160">
                        <tspan fill="#141414" stroke-width="0">20</tspan><tspan class="year-to-change">19</tspan>
                        <tspan fill="#BE0000" stroke-width="0" font-size="60">.</tspan>
                      </text>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-9">
              <div class="row year-row" data-year="19">
                <div class="col-12 d-xl-none h2 text-center"><span class="border-bottom">2019</span></div>
                <div class="col-lg-4 award-item">
                  <div class="award-title">Love & Dress</div>
                  <div class="award-subtitle">AWWWARDS Honors</div>
                  <div class="award-img">
                    <a href="#!">
                      <span class="review-btn"><i class="review-icon"></i></span>
                      <img src="img/award-1.jpg" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="spacer-xl"></div>
      </div>

      <!-- SEO -->
      <?php include 'inc/_seo.php'; ?>

    </main>

    <?php include 'inc/_footer.php';?>
  </div>


  <?php include 'inc/_popups.php';?>
  <?php include 'inc/_bottom.php';?>
</body>

</html>