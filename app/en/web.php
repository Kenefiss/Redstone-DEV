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
      <div class="section fs-2">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 offset-xl-1">
              <h1 class="title h2 title-margin animate-item fadeInUp"><b>REDSTONE</b> is your trusted digital partner</h1>
              <div class="simple-page text text-sm animate-item fadeInUp delay-2">
                <p>In today's fast-paced world, having a strong online presence is crucial for individuals and businesses alike. Web solutions have become an essential part of modern regular life, enabling people to connect with others, share their ideas and products, and make their mark on the digital landscape.</p>
                <p>At our <b>web solutions</b> company, we understand the importance of staying ahead of the curve in the ever-evolving world of online technology. Our team of experts offers a comprehensive range of services to help individuals and businesses achieve their online goals, from website design and development to SEO, social media marketing, and more. We believe that every client is unique, which is why we take a customized approach to web solutions. We work closely with our clients to understand their specific needs and goals, and develop tailored plans to help them succeed in the online space.</p>
                <p>Our cutting-edge technologies and industry-leading tools ensure that our clients stay ahead of the competition and reach their full potential. Our team stays up-to-date with the latest trends and best practices in web design, development, and marketing, so our clients can be sure that they're receiving the most effective solutions available.</p>
                <p>We pride ourselves on providing exceptional customer support and building long-lasting relationships with our clients.</p>
                <p>If you're looking to establish or enhance your online presence, we invite you to learn more about our <b>web solutions</b> and how we can help you achieve your goals. Contact us today to get started.</p>
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