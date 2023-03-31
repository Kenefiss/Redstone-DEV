<!DOCTYPE html>
<html lang="pl">

<head>
  <?php include 'inc/_top.php';?>
  <title>REDSTONE SOFTWARE — tworzenie najnowocześniejszych rozwiązań dla Twojej firmy</title>
  <meta name="description" content="W Redstone Software dokładamy wszelkich starań, aby pomóc firmom każdej wielkości i z różnych branż odnieść sukces dzięki innowacyjnym rozwiązaniom programowym. Nasi doświadczeni programiści i inżynierowie ściśle współpracują z klientami, aby zrozumieć ich wyjątkowe potrzeby i opracować niestandardowe rozwiązania programowe, które spełniają, a nawet przekraczają ich oczekiwania. Od aplikacji mobilnych po systemy oprogramowania dla przedsiębiorstw — wykorzystujemy najnowsze technologie i najlepsze praktyki branżowe, aby dostarczać niezawodne, skalowalne i bezpieczne rozwiązania. Pozwól nam pomóc Ci uwolnić pełny potencjał Twojej firmy dzięki oprogramowaniu, które pracuje dla Ciebie. Skontaktuj się z nami już dziś, aby dowiedzieć się więcej.">
  <meta name="keywords" content="tworzenie stron internetowych, projektowanie, aplikacja, mvp, cms, crm, firma wrocław, wrocław, REDSTONE">
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
                <span itemprop="name">Dom</span>
              </a>
              <meta itemprop="position" content="1" />
            </li>
            <li class="active" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
              <span itemprop="name">Teczka</span>
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
                <div class="title page-title h2">Poznaj nasze przypadki</div>
              </div>
              <div class="sort-wrapp">
                <div class="sort-btn d-xl-none">Sprzedawcy samochodów</div>
                <nav class="sort-nav">
                  <ul>
                    <li><a data-filter="*" href="portfolio">Wszystko</a></li>
                    <li><a data-filter="._web" href="web">Rozwiązania internetowe</a></li>
                    <li><a data-filter="._app" href="app">Aplikacja</a></li>
                    <li><a data-filter="._mvp" href="mvp">MVP</a></li>
                    <li><a data-filter="._e-сommerce" href="e-commerce">E - Commerce</a></li>
                    <li><a data-filter="._car-dealers" href="car-dealers" class="active">Sprzedawcy samochodów</a></li>
                    <li><a data-filter="._branding" href="branding">Branding</a></li>
                    <li><a data-filter="._website" href="website">Strona internetowa</a></li>
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
              <h1 class="title h2 title-margin animate-item fadeInUp"><b>REDSTONE</b> to Twój zaufany partner cyfrowy</h1>
              <div class="simple-page text text-sm animate-item fadeInUp delay-2">
                <p>Jesteś <b>sprzedawcą samochodów</b> i szukasz sposobów na zwiększenie swojej obecności online i przyciągnięcie większej liczby klientów? Nie szukaj dalej niż nasze rozwiązania internetowe dla dealerów samochodowych.</p>
                <p>Nasz zespół doświadczonych programistów internetowych i ekspertów SEO rozumie wyjątkowe wyzwania i możliwości, przed którymi stoją dealerzy samochodowi na rynku online. Dlatego oferujemy szereg konfigurowalnych rozwiązań, które spełnią Twoje specyficzne potrzeby i cele. Nasze usługi obejmują projektowanie i tworzenie stron internetowych, optymalizację wyszukiwarek (SEO), marketing w mediach społecznościowych i reklamę online.</p>
                <p>Możemy pomóc Ci stworzyć oszałamiającą wizualnie i przyjazną dla użytkownika witrynę internetową, która zaprezentuje Twoje zasoby i usługi, a także przyciągnie docelowy ruch do Twojej witryny za pomocą strategicznego SEO i kampanii reklamowych.</p>
                <p>Dzięki naszym rozwiązaniom internetowym możesz również zwiększyć zaangażowanie i utrzymanie klientów dzięki skutecznemu marketingowi e-mailowemu i integracji CRM. Nasz zespół może pomóc Ci opracować ukierunkowane kampanie e-mailowe i zintegrować dane klientów ze scentralizowaną platformą CRM, aby zapewnić bardziej spersonalizowaną i skuteczną komunikację.</p>
                <p>Nie pozwól, aby Twoja obecność w internecie powstrzymywała Cię przed osiągnięciem pełnego potencjału jako <b>dealer samochodowy</b>. Skontaktuj się z nami już dziś, aby dowiedzieć się więcej o naszych rozwiązaniach internetowych i o tym, jak możemy pomóc Ci osiągnąć Twoje cele.</p>
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