<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>Web development portfolio | Work cases | Belfast</title>
  <meta name="description" content="A portfolio shows our work qualifications, and experience. Write to us and make sure. 
Web development Belfast">
  <meta name="keywords" content="eCommerce, web, application, design, Crm, MVP, solution, belfast, london">
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
              <a href="index.php" itemprop="url">
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
                    <li><a data-filter="*" href="portfolio.php" class="active">All</a></li>
                    <li><a data-filter="._web" href="web.php ">Web Solutions</a></li>
                    <li><a data-filter="._app" href="app.php">APP</a></li>
                    <li><a data-filter="._mvp" href="mvp.php">MVP</a></li>
                    <li><a data-filter="._e-сommerce" href="e-commerce.php">E - Commerce</a></li>
                    <li><a data-filter="._car-dealers" href="car-dealers.php">Car Dealers</a></li>
                    <li><a data-filter="._branding" href="branding.php">Branding</a></li>
                    <li><a data-filter="._website" href="website.php">Website</a></li>
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