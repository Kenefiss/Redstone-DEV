<!DOCTYPE html>
<html lang="nl">

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
              <h1 class="title h2 title-margin animate-item fadeInUp"><b>REDSTONE</b> is uw vertrouwde digitale partner</h1>
              <div class="simple-page text text-sm animate-item fadeInUp delay-2">
                <p>In de huidige hypercompetitieve zakelijke omgeving is het hebben van een sterk merk essentieel om je te onderscheiden van de massa en een loyale klantenbasis te verwerven. Uw merk is niet alleen uw bedrijfsnaam of logo; het is de perceptie die mensen hebben van jouw bedrijf en de emoties die jouw merk oproept.</p>
                <p>Het hebben van een duidelijke en consistente merkidentiteit is cruciaal voor het opbouwen van vertrouwen bij uw klanten. Een goed gedefinieerde merkstrategie zorgt ervoor dat alle communicatiekanalen, van uw website tot uw sociale mediaplatforms, op elkaar zijn afgestemd en dezelfde boodschap overbrengen. Dit helpt bij het creëren van een samenhangende en uniforme merkervaring die resoneert met uw doelgroep. Een sterk merk helpt je ook om je te onderscheiden van de concurrentie.</p>
                <p>Wanneer klanten een duidelijk inzicht hebben in wat uw bedrijf uniek maakt, is de kans groter dat ze u verkiezen boven uw concurrenten. Dit is vooral belangrijk op drukke markten waar er veel vergelijkbare producten en diensten zijn.</p>
                <p>Bovendien kan een sterk merk helpen om toptalent naar uw bedrijf te trekken. Een goed gedefinieerde merkidentiteit communiceert uw waarden, cultuur en visie, wat een krachtige motivator kan zijn voor potentiële werknemers.</p>
                <p>Dit is vooral belangrijk op de huidige arbeidsmarkt, waar werknemers op zoek zijn naar meer dan alleen een salaris: ze willen werken voor een bedrijf dat aansluit bij hun waarden en een betekenisvol carrièrepad biedt. Kortom: het hebben van een sterk merk is essentieel voor elk modern bedrijf dat wil bloeien en groeien.</p>
                <p>Het helpt om vertrouwen bij klanten op te bouwen, jezelf te onderscheiden van concurrenten en toptalent naar je bedrijf te trekken. Dus als u nog niet in uw merk heeft geïnvesteerd, is dit het moment om te beginnen.</p>
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