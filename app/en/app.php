<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>Mobile App development & design Belfast | Custom solution</title>
  <meta name="description" content="App development - be in every client's phone, comfortable design and style are guaranteed. Redstone placed in Belfast">
  <meta name="keywords" content="application, app, mobile, development, belfast, software, custom">
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
                <div class="sort-btn d-xl-none">APP</div>
                <nav class="sort-nav">
                  <ul>
                    <li><a data-filter="*" href="portfolio">All</a></li>
                    <li><a data-filter="._web" href="web">Web Solutions</a></li>
                    <li><a data-filter="._app" href="app" class="active">APP</a></li>
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
      <div class="section fs-2">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="title h2 title-margin animate-item fadeInUp"><b>REDSTONE</b> is your trusted digital partner</h1>
              <div class="simple-page text text-sm animate-item fadeInUp delay-2">
                <p>Looking to develop a mobile app for your business or personal needs? Look no further than our app development services. We offer comprehensive <b>app development</b> solutions that cater to the needs of businesses and individuals alike.</p>
                <p>Our team of expert app developers has years of experience in developing custom apps that are tailored to the specific needs of our clients. We work closely with you to understand your requirements and develop an app that meets your expectations. We specialize in developing apps for a range of platforms, including iOS and Android, as well as hybrid apps that work seamlessly across multiple platforms.</p>
                <p>Our developers are skilled in various programming languages and have the expertise to deliver high-quality apps that are both functional and visually appealing. We take pride in our attention to detail and ensure that each app we develop undergoes rigorous testing to ensure that it is fully functional and bug-free. Our development process is transparent, and we keep our clients informed at every stage to ensure that we are on track to meet their expectations.</p>
                <p>Whether you are looking to develop an app for your business, or a personal app that caters to your specific needs, we have the expertise to deliver. Our app development services are affordable and cater to businesses of all sizes, from startups to large enterprises.</p>
                <p>So why wait? Contact us today to discuss your <b>app development</b> needs, and let us help you bring your vision to life.</p>
              </div>
              <div class="signature" style="margin-top:30px"><img src="img/signature.svg" loading="lazy" alt=""></div>
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