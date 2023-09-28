<!DOCTYPE html>
<html lang="nl">

<head>
  <?php include 'inc/_top.php';?>
  <title>REDSTONE SOFTWARE - Blog</title>
  <meta name="description" content="Redstone - a software company, specializing in web development, design, mobile applications, 
CRM systems that are convenient for users and our customers. Top offers in Belfast">
  <meta name="keywords" content="development, web, belfast, dublin, london, software, design">
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

              <!-- hide on phase 1 -->
              <!-- <div class="sort-wrapp js-sort-nav">
                <div class="sort-btn d-xl-none">All</div>
                <nav class="sort-nav">
                  <ul>
                    <li><a class="active">All</a></li>
                    <li><a href="#">Корисні поради</a></li>
                    <li><a href="#">Новини</a></li>
                    <li><a href="#">Майстер-класи</a></li>
                  </ul>
                </nav>
              </div> -->

            </div>
          </div>
          <div class="row news-wrapp animate-item fadeInUp">
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="tips-for-effective-mobile-app-testing">
                  <picture>
                    <source srcset="img/tips-for-effective-mobile-app-testing.webp" type="image/webp">
                    <source srcset="img/tips-for-effective-mobile-app-testing.jpg" type="image/jpeg">
                    <img src="img/tips-for-effective-mobile-app-testing.jpg" alt="tips-for-effective-mobile-app-testing">
                  </picture>
                  <span class="date">15.06.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="tips-for-effective-mobile-app-testing">Tips for Effective Mobile App Testing</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="best-practices-for-ui-ux-design-in-mobile-apps">
                  <picture>
                    <source srcset="img/best-practices-for-ui-ux-design-in-mobile-apps.webp" type="image/webp">
                    <source srcset="img/best-practices-for-ui-ux-design-in-mobile-apps.jpg" type="image/jpeg">
                    <img src="img/best-practices-for-ui-ux-design-in-mobile-apps.jpg" alt="best-practices-for-ui-ux-design-in-mobile-apps">
                  </picture>
                  <span class="date">09.06.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="best-practices-for-ui-ux-design-in-mobile-apps">Best Practices for UI/UX Design in Mobile Apps</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="importance-of-seo-friendly-web-development">
                  <picture>
                    <source srcset="img/importance-of-seo-friendly-web-development.webp" type="image/webp">
                    <source srcset="img/importance-of-seo-friendly-web-development.jpg" type="image/jpeg">
                    <img src="img/importance-of-seo-friendly-web-development.jpg" alt="importance-of-seo-friendly-web-development">
                  </picture>
                  <span class="date">05.06.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="importance-of-seo-friendly-web-development">Importance of SEO-Friendly Web Development</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="the-impact-of-chatbots-on-customer-experience">
                  <picture>
                    <source srcset="img/the-impact-of-chatbots-on-customer-experience.webp" type="image/webp">
                    <source srcset="img/the-impact-of-chatbots-on-customer-experience.jpg" type="image/jpeg">
                    <img src="img/the-impact-of-chatbots-on-customer-experience.jpg" alt="the-impact-of-chatbots-on-customer-experience">
                  </picture>
                  <span class="date">01.06.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="the-impact-of-chatbots-on-customer-experience">The Impact of Chatbots on Customer Experience</a>
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