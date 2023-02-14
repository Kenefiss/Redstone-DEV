<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>REDSTONE :: Blog</title>
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
              <span itemprop="title">Blog</span>
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
                <a href="blog-detail-two.php">
                  <picture>
                    <source srcset="img/news-item1.webp" type="image/webp">
                    <source srcset="img/news-item1.jpg" type="image/jpeg">
                    <img src="img/news-item1.jpg" alt="">
                  </picture>
                  <span class="date">18.09.2020</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="blog-detail-two.php">Чотири нагороди для наші роботи в the Awwwards</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="blog-detail-two.php">
                  <picture>
                    <source srcset="img/news-item2.webp" type="image/webp">
                    <source srcset="img/news-item2.jpg" type="image/jpeg">
                    <img src="img/news-item2.jpg" alt="">
                  </picture>
                  <span class="date">10.09.2020</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="blog-detail-two.php">Безкоштовний майстер-клас «Запуск прибуткового інтернет магазину»</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="blog-detail-two.php">
                  <picture>
                    <source srcset="img/news-item3.webp" type="image/webp">
                    <source srcset="img/news-item3.jpg" type="image/jpeg">
                    <img src="img/news-item3.jpg" alt="">
                  </picture>
                  <span class="date">21.08.2020</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="blog-detail-two.php">Чотири нагороди для наші роботи в the Awwwards</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="blog-detail-two.php">
                  <picture>
                    <source srcset="img/news-item4.webp" type="image/webp">
                    <source srcset="img/news-item4.jpg" type="image/jpeg">
                    <img src="img/news-item4.jpg" alt="">
                  </picture>
                  <span class="date">01.08.2020</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="blog-detail-two.php">Безкоштовний майстер-клас «Запуск прибуткового інтернет магазину»</a>
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