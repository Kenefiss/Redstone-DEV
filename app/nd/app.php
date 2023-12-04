<!DOCTYPE html>
<html lang="nl">

<head>
  <?php include 'inc/_top.php';?>
  <title>Ontwikkeling en ontwerp van mobiele apps Nederland | Aangepaste oplossing</title>
  <meta name="description" content="App-ontwikkeling - zit in de telefoon van elke klant, user-friendly ontwerp en stijl zijn gegarandeerd. Redstone Software.">
  <meta name="keywords" content="applicatie, app, mobiel, ontwikkeling, Nederland, software, maatwerk">
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
                <div class="sort-btn d-xl-none">APP</div>
                <nav class="sort-nav">
                  <ul>
                    <li><a data-filter="*" href="portfolio">Alles</a></li>
                    <li><a data-filter="._web" href="web">Web Solutions</a></li>
                    <li><a data-filter="._app" href="app" class="active">APP</a></li>
                    <li><a data-filter="._mvp" href="mvp">MVP</a></li>
                    <li><a data-filter="._e-сommerce" href="e-commerce">E - Commerce</a></li>
                    <li><a data-filter="._car-dealers" href="car-dealers">Autobranche</a></li>
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
              <h1 class="title h2 title-margin animate-item fadeInUp"><b>REDSTONE</b> is uw vertrouwde digitale partner</h1>
              <div class="simple-page text text-sm animate-item fadeInUp delay-2">
                <p>Wilt u een mobiele app ontwikkelen voor uw zakelijke of persoonlijke behoeften? Zoek niet verder dan onze app-ontwikkelingsdiensten. Wij bieden uitgebreide oplossingen voor app-ontwikkeling die tegemoetkomen aan de behoeften van zowel bedrijven als particulieren.</p>
                <p>Ons team van deskundige app-ontwikkelaars heeft jarenlange ervaring met het ontwikkelen van apps op maat die zijn afgestemd op de specifieke behoeften van onze klanten. We werken nauw met u samen om uw vereisten te begrijpen en een app te ontwikkelen die aan uw verwachtingen voldoet. Wij zijn gespecialiseerd in het ontwikkelen van apps voor een reeks platforms, waaronder iOS en Android, maar ook in hybride apps die naadloos op meerdere platforms werken.</p>
                <p>Onze ontwikkelaars beheersen verschillende programmeertalen en hebben de expertise om hoogwaardige apps te leveren die zowel functioneel als visueel aantrekkelijk zijn. We zijn trots op onze aandacht voor detail en zorgen ervoor dat elke app die we ontwikkelen strenge tests ondergaat om ervoor te zorgen dat deze volledig functioneel en vrij van bugs is. Ons ontwikkelingsproces is transparant en we houden onze klanten in elke fase op de hoogte om ervoor te zorgen dat we op koers liggen om aan hun verwachtingen te voldoen.</p>
                <p>Of u nu een app voor uw bedrijf wilt ontwikkelen of een persoonlijke app die aan uw specifieke behoeften voldoet, wij hebben de expertise om u te voorzien. Onze app-ontwikkelingsdiensten zijn betaalbaar en geschikt voor bedrijven van elke omvang, van startups tot grote ondernemingen.</p>
                <p>Dus waarom wachten? Neem vandaag nog contact met ons op om uw behoeften op het gebied van app-ontwikkeling te bespreken en laat ons u helpen uw visie tot leven te brengen.</p>
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