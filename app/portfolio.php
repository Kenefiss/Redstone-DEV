<!DOCTYPE html>
<html lang="uk">

<head>
  <?php include 'inc/_top.php';?>
  <title>REDSTONE :: Portfolio</title>
</head>

<body>
  <div id="loader-wrapper"></div>
  <div id="content-block">
    <?php include 'inc/_header.php';?>

    <main>

      <!-- PORTFOLIO -->
      <div class="section">
        <div class="container">
          <div class="row">
            <div calss="col-12">
              <div class="title-with-text">
                <div class="title page-title h2">Наше портфоліо</div>
                <div class="text">Відкрийте для себе - нагородна вебстудія в Україні. Наша українська команда використовує передові веб-дизайни</div>
              </div>
              <div class="sort-wrapp js-sort-nav">
                <div class="sort-btn d-xl-none">Наше портфоліо</div>
                <nav class="sort-nav">
                  <ul>
                    <li><a class="active">Всі</a></li>
                    <li><a href="#">Будівництво</a></li>
                    <li><a href="#">Стоматологія</a></li>
                    <li><a href="#">Доставка їжі</a></li>
                    <li><a href="#">Фінанси</a></li>
                    <li><a href="#">Маркетинг</a></li>
                    <li><a href="#">Арр</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
          <div class="row categories">
            <div class="col-6 col-sm-4 category">
              <a href="category-detail.php" class="category-entry">
                <span class="category-title">Доставка їжі</span>
                <span class="category-img">
                  <picture>
                    <source srcset="img/category-img-1.webp" type="image/webp">
                    <source srcset="img/category-img-1.png" type="image/png">
                    <img src="img/category-img-1.png" alt="">
                  </picture>
                </span>
                <div class="review-btn">
                  <i class="review-icon"></i>
                </div>
              </a>
            </div>
            <div class="col-6 col-sm-4 category">
              <a href="category-detail.php" class="category-entry">
                <span class="category-title">Будівництво</span>
                <span class="category-img">
                  <picture>
                    <source srcset="img/category-img-6.webp" type="image/webp">
                    <source srcset="img/category-img-6.png" type="image/png">
                    <img src="img/category-img-6.png" alt="">
                  </picture>
                </span>
                <div class="review-btn">
                  <i class="review-icon"></i>
                </div>
              </a>
            </div>
            <div class="col-6 col-sm-4 category">
              <a href="category-detail.php" class="category-entry">
                <span class="category-title">APP</span>
                <span class="category-img">
                  <picture>
                    <source srcset="img/category-img-5.webp" type="image/webp">
                    <source srcset="img/category-img-5.png" type="image/png">
                    <img src="img/category-img-5.png" alt="">
                  </picture>
                </span>
                <div class="review-btn">
                  <i class="review-icon"></i>
                </div>
              </a>
            </div>
            <div class="col-6 col-sm-4 category">
              <a href="category-detail.php" class="category-entry">
                <span class="category-title">Фінанси</span>
                <span class="category-img">
                  <picture>
                    <source srcset="img/category-img-4.webp" type="image/webp">
                    <source srcset="img/category-img-4.png" type="image/png">
                    <img src="img/category-img-4.png" alt="">
                  </picture>
                </span>
                <div class="review-btn">
                  <i class="review-icon"></i>
                </div>
              </a>
            </div>
            <div class="col-6 col-sm-4 category">
              <a href="category-detail.php" class="category-entry">
                <span class="category-title">Aвто</span>
                <span class="category-img">
                  <picture>
                    <source srcset="img/category-img-7.webp" type="image/webp">
                    <source srcset="img/category-img-7.png" type="image/png">
                    <img src="img/category-img-7.png" alt="">
                  </picture>
                </span>
                <div class="review-btn">
                  <i class="review-icon"></i>
                </div>
              </a>
            </div>
            <div class="col-6 col-sm-4 category">
              <a href="category-detail.php" class="category-entry">
                <span class="category-title">Брендування</span>
                <span class="category-img">
                  <picture>
                    <source srcset="img/category-img-3.webp" type="image/webp">
                    <source srcset="img/category-img-3.png" type="image/png">
                    <img src="img/category-img-3.png" alt="">
                  </picture>
                </span>
                <div class="review-btn">
                  <i class="review-icon"></i>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="spacer-xl"></div>
      </div>

      <!-- SEO -->
      <?php include 'inc/_seo.php'; ?>

    </main>

    <?php include 'inc/_footer.php';?>
  </div>


  <?php include 'inc/_popups.php';?>
  <?php include 'inc/_bottom.php';?>
</body>

</html>