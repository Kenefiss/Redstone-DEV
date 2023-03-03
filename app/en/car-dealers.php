<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>REDSTONE SOFTWARE - Cutting-edge solutions for your brand</title>
  <meta name="description" content="REDSTONE SOFTWARE empowers brands with a modern tech solution. Our team has high-level expertise in different IT fields and helps clients to find the best way in their brand development with the latest IT technologies.">
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
                <div class="sort-btn d-xl-none">Car Dealers</div>
                <nav class="sort-nav">
                  <ul>
                    <li><a data-filter="*" href="portfolio">All</a></li>
                    <li><a data-filter="._web" href="web">Web Solutions</a></li>
                    <li><a data-filter="._app" href="app">APP</a></li>
                    <li><a data-filter="._mvp" href="mvp">MVP</a></li>
                    <li><a data-filter="._e-сommerce" href="e-commerce">E - Commerce</a></li>
                    <li><a data-filter="._car-dealers" href="car-dealers" class="active">Car Dealers</a></li>
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
      <div class="section fs-2">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 offset-xl-1">
              <h1 class="title h2 title-margin animate-item fadeInUp"><b>REDSTONE</b> is your trusted digital partner</h1>
              <div class="simple-page text text-sm animate-item fadeInUp delay-2">
                <p>Are you a <b>car dealer</b> looking for ways to boost your online presence and attract more customers? Look no further than our web solutions for car dealers.</p>
                <p>Our team of experienced web developers and SEO experts understands the unique challenges and opportunities that car dealers face in the online marketplace. That's why we offer a range of customizable solutions to meet your specific needs and goals. Our services include website design and development, search engine optimization (SEO), social media marketing, and online advertising.</p>
                <p>We can help you create a visually stunning and user-friendly website that showcases your inventory and services, as well as drive targeted traffic to your site through strategic SEO and advertising campaigns.</p>
                <p>With our web solutions, you can also improve your customer engagement and retention through effective email marketing and CRM integration. Our team can help you develop targeted email campaigns and integrate your customer data into a centralized CRM platform for more personalized and effective communication.</p>
                <p>Don't let your online presence hold you back from reaching your full potential as a <b>car dealer</b>. Contact us today to learn more about our web solutions and how we can help you achieve your goals.</p>
              </div>
              <div class="signature" style="margin-top:30px"><img src="img/signature.svg" loading="lazy" alt=""></div>
            </div>
            <div class="col-xl-5 d-none d-xl-block">
              <div class="video-wrap ml-80 animate-item fadeInUp delay-1">
                <div class="video">
                  <video preload="none" poster="img/seo-img.jpg" src="" playsinline loop autoplay muted disablePictureInPicture></video>
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="spacer-xl"></div>
        </div>
      </div>

    </main>

    <?php include 'inc/_footer.php';?>
  </div>


  <div class="popup-wrapper" id="popups"></div>
  <?php include 'inc/_bottom.php';?>
  <?php include 'inc/_filter.php';?>
</body>

</html>