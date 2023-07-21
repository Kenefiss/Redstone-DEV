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
                <div class="title page-title h2">Bekijk onze projecten</div>
              </div>
              <div class="sort-wrapp">
                <div class="sort-btn d-xl-none">Branding</div>
                <nav class="sort-nav">
                  <ul>
                    <li><a data-filter="*" href="portfolio">Alles</a></li>
                    <li><a data-filter="._web" href="web">Web Solutions</a></li>
                    <li><a data-filter="._app" href="app">APP</a></li>
                    <li><a data-filter="._mvp" href="mvp">MVP</a></li>
                    <li><a data-filter="._e-сommerce" href="e-commerce">E - Commerce</a></li>
                    <li><a data-filter="._car-dealers" href="car-dealers">Autobranche</a></li>
                    <li><a data-filter="._branding" href="branding" class="active">Branding</a></li>
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
                <p>In today's hyper-competitive business environment, having a strong brand is essential to standing out from the crowd and gaining a loyal customer base. Your brand is not just your company name or logo; it is the perception that people have of your company and the emotions that your <b>brand</b> evokes.</p>
                <p>Having a clear and consistent brand identity is crucial for establishing trust with your customers. A well-defined brand strategy ensures that all communication channels, from your website to your social media platforms, are aligned and conveying the same message. This helps to create a cohesive and unified brand experience that resonates with your target audience. A strong brand also helps you to differentiate yourself from competitors.</p>
                <p>When customers have a clear understanding of what makes your company unique, they are more likely to choose you over your competitors. This is particularly important in crowded markets where there are many similar products and services.</p>
                <p>Additionally, a strong brand can help to attract top talent to your company. A well-defined brand identity communicates your values, culture, and vision, which can be a powerful motivator for potential employees.</p>
                <p>This is especially important in today's job market, where employees are looking for more than just a paycheck - they want to work for a company that aligns with their values and provides a meaningful career path. In short, having a strong brand is essential for any modern business that wants to thrive and grow.</p>
                <p>It helps to build trust with customers, differentiate yourself from competitors, and attract top talent to your company. So, if you haven't already invested in your <b>brand</b>, now is the time to start.</p>
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