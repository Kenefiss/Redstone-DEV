<!DOCTYPE html>
<html lang="nl">

<head>
  <?php include 'inc/_top.php';?>
  <title>REDSTONE SOFTWARE - Blog</title>
  <meta name="description" content="Redstone - een softwarebedrijf, gespecialiseerd in webontwikkeling, ontwerp, mobiele applicaties,
CRM-systemen die handig zijn voor gebruikers en onze klanten.">
  <meta name="keywords" content="ontwikkeling, web, Nijmegen, Amsterdam, Utrecht, software, ontwerp">
</head>

<body>
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
              <span itemprop="name">Blog</span>
              <meta itemprop="position" content="2" />
            </li>
          </ul>
        </div>
      </div>

      <!-- BLOG -->
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="title-with-text">
                <div class="title page-title h2">Blog</div>
              </div>
            </div>
          </div>
          <div class="row news-wrapp animate-item fadeInUp">
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="creating-custom-data-visualization-widgets">
                  <picture>
                    <source srcset="img/creating-custom-data-visualization-widgets.webp" type="image/webp">
                    <source srcset="img/creating-custom-data-visualization-widgets.jpg" type="image/jpeg">
                    <img src="img/creating-custom-data-visualization-widgets.jpg" alt="creating-custom-data-visualization-widgets">
                  </picture>
                  <span class="date">13.10.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="creating-custom-data-visualization-widgets">Het Creëren van Aangepaste Data Visualisatie Widgets</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="development-of-geolocation-services-and-cartographic-applications-on-websites">
                  <picture>
                    <source srcset="img/development-of-geolocation-services-and-cartographic-applications-on-websites.webp" type="image/webp">
                    <source srcset="img/development-of-geolocation-services-and-cartographic-applications-on-websites.jpg" type="image/jpeg">
                    <img src="img/development-of-geolocation-services-and-cartographic-applications-on-websites.jpg" alt="development-of-geolocation-services-and-cartographic-applications-on-websites">
                  </picture>
                  <span class="date">09.10.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="development-of-geolocation-services-and-cartographic-applications-on-websites">Ontwikkeling van Geolocatiediensten en Cartografische Toepassingen op Websites</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="the-rise-of-webassembly-een-game-changer-in-web-development">
                  <picture>
                    <source srcset="img/the-rise-of-webassembly-een-game-changer-in-web-development.webp" type="image/webp">
                    <source srcset="img/the-rise-of-webassembly-een-game-changer-in-web-development.jpg" type="image/jpeg">
                    <img src="img/the-rise-of-webassembly-een-game-changer-in-web-development.jpg" alt="the-rise-of-webassembly-een-game-changer-in-web-development">
                  </picture>
                  <span class="date">05.10.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="the-rise-of-webassembly-een-game-changer-in-web-development">The Rise of WebAssembly: Een Game Changer in Web Development</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="sass-and-less-benefits-of-css-preprocessors">
                  <picture>
                    <source srcset="img/sass-and-less-benefits-of-css-preprocessors.webp" type="image/webp">
                    <source srcset="img/sass-and-less-benefits-of-css-preprocessors.jpg" type="image/jpeg">
                    <img src="img/sass-and-less-benefits-of-css-preprocessors.jpg" alt="sass-and-less-benefits-of-css-preprocessors">
                  </picture>
                  <span class="date">02.10.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="sass-and-less-benefits-of-css-preprocessors">Sass en Less: Voordelen van CSS-preprocessors</a>
              </div>
            </div>
          </div>
        </div>
        <div class="spacer-xl"></div>
      </div>

      <!-- SEO -->
      <?php include 'inc/sections/_seo.php'; ?>

    </main>

    <?php include 'inc/_footer.php';?>
  </div>


  <div class="popup-wrapper" id="popups"></div>
  <?php include 'inc/_bottom.php';?>
</body>

</html>