<!DOCTYPE html>
<html lang="pl">

<head>
  <?php include 'inc/_top.php';?>
  <title>REDSTONE SOFTWARE — tworzenie najnowocześniejszych rozwiązań dla Twojej firmy</title>
  <meta name="description" content="W Redstone Software dokładamy wszelkich starań, aby pomóc firmom każdej wielkości i z różnych branż odnieść sukces dzięki innowacyjnym rozwiązaniom programowym. Nasi doświadczeni programiści i inżynierowie ściśle współpracują z klientami, aby zrozumieć ich wyjątkowe potrzeby i opracować niestandardowe rozwiązania programowe, które spełniają, a nawet przekraczają ich oczekiwania. Od aplikacji mobilnych po systemy oprogramowania dla przedsiębiorstw — wykorzystujemy najnowsze technologie i najlepsze praktyki branżowe, aby dostarczać niezawodne, skalowalne i bezpieczne rozwiązania. Pozwól nam pomóc Ci uwolnić pełny potencjał Twojej firmy dzięki oprogramowaniu, które pracuje dla Ciebie. Skontaktuj się z nami już dziś, aby dowiedzieć się więcej.">
  <meta name="keywords" content="tworzenie stron internetowych, projektowanie, aplikacja, mvp, cms, crm, firma wrocław, wrocław, REDSTONE">
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
                <span itemprop="name">Dom</span>
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
                <a href="benefits-of-headless-cms-for-web-development">
                  <picture>
                    <source srcset="img/headless-cms1.webp" type="image/webp">
                    <source srcset="img/headless-cms1.jpg" type="image/jpeg">
                    <img src="img/headless-cms1.jpg" alt="headless-cms1">
                  </picture>
                  <span class="date">05.05.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="benefits-of-headless-cms-for-web-development">Korzyści z Headless CMS do tworzenia stron internetowych</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="benefits-of-custom-web-development">
                  <picture>
                    <source srcset="img/benefit-custom1.webp" type="image/webp">
                    <source srcset="img/benefit-custom1.jpg" type="image/jpeg">
                    <img src="img/benefit-custom1.jpg" alt="benefit-custom1">
                  </picture>
                  <span class="date">04.05.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="benefits-of-custom-web-development">Korzyści z niestandardowego tworzenia stron internetowych w porównaniu z gotowymi rozwiązaniami</a>
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