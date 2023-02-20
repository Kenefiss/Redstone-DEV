<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>Web development and Design Belfast , Norther Ireland</title>
  <meta name="description" content="The highest quality website development and design in Belfast, over 16 years 
of experience | London | Dublin |Belfast">
  <meta name="keywords" content="web, developer, northern ireland, development">
</head>

<body data-page="portfolio">
  <div id="loader-wrapper"></div>
  <div id="content-block">
    <?php include 'inc/_header.php';?>

    <main>

      <!-- BREADCRUMBS -->
      <div class="section sec-breadcrumbs">
        <div class="container-fluid">
          <ul class="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
              <a href="/" itemprop="item">
                <span itemprop="name">Home</span>
              </a>
              <meta itemprop="position" content="1" />
            </li>
            <li class="active" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
              <span itemprop="name">Portfolio</span>
              <meta itemprop="position" content="2" />
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
                <div class="sort-btn d-xl-none">Web Solutions</div>
                <nav class="sort-nav">
                  <ul>
                    <li><a data-filter="*" href="portfolio">All</a></li>
                    <li><a data-filter="._web" href="web" class="active">Web Solutions</a></li>
                    <li><a data-filter="._app" href="app">APP</a></li>
                    <li><a data-filter="._mvp" href="mvp">MVP</a></li>
                    <li><a data-filter="._e-сommerce" href="e-commerce">E - Commerce</a></li>
                    <li><a data-filter="._car-dealers" href="car-dealers">Car Dealers</a></li>
                    <li><a data-filter="._branding" href="branding">Branding</a></li>
                    <li><a data-filter="._website" href="website">Website</a></li>
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