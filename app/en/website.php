<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>Web design Belfast | UI UX | Dublin</title>
  <meta name="description" content="We offer high-quality UI and UX design development for users and site administrators. 
Our advantages: quality and comfort!">
  <meta name="keywords" content="web design, belfast, graphic design, northern ireland">
</head>

<body>
  <div id="loader-wrapper"></div>
  <div id="content-block">
    <?php include 'inc/_header.php';?>

    <main>

      <!-- BREADCRUMBS -->
      <div class="section sec-breadcrumbs">
        <div class="container-fluid">
          <ul class="breadcrumbs">
            <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
              <a href="/" itemprop="url">
                <span itemprop="title">Home</span>
              </a>
            </li>
            <li class="active" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
              <span itemprop="title">Portfolio</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- PORTFOLIO -->
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="title-with-text">
                <div class="title page-title h2">Explore our cases</div>
              </div>
              <div class="sort-wrapp">
                <div class="sort-btn d-xl-none">All</div>
                <nav class="sort-nav">
                  <ul>
                    <li><a data-filter="*" href="portfolio">All</a></li>
                    <li><a data-filter="._web" href="web">Web Solutions</a></li>
                    <li><a data-filter="._app" href="app">APP</a></li>
                    <li><a data-filter="._mvp" href="mvp">MVP</a></li>
                    <li><a data-filter="._e-сommerce" href="e-commerce">E - Commerce</a></li>
                    <li><a data-filter="._car-dealers" href="car-dealers">Car Dealers</a></li>
                    <li><a data-filter="._branding" href="branding">Branding</a></li>
                    <li><a data-filter="._website" href="website" class="active">Website</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>

          <?php include 'inc/sections/_portfolio-items.php';?>

        </div>
        <div class="spacer-xl"></div>
      </div>

      <!-- SEO -->
      <?php include 'inc/sections/_seo-2.php'; ?>

    </main>

    <?php include 'inc/_footer.php';?>
  </div>


  <div class="popup-wrapper" id="popups"></div>
  <?php include 'inc/_bottom.php';?>
  <?php include 'inc/_filter.php';?>
</body>

</html>