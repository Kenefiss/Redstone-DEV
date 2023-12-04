<!DOCTYPE html>
<html lang="nl">

<head>
  <?php include 'inc/_top.php';?>
  <title>REDSTONE SOFTWARE - Geavanceerde oplossingen voor uw bedrijf</title>
  <meta name="description" content="REDSTONE SOFTWARE geeft merken een moderne technische oplossing. Ons team beschikt over hoogwaardige expertise op verschillende IT-gebieden en helpt klanten de beste weg te vinden in hun merkontwikkeling met de nieuwste IT-technologieën.">
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
                <div class="sort-btn d-xl-none">Autobranche</div>
                <nav class="sort-nav">
                  <ul>
                    <li><a data-filter="*" href="portfolio">Alles</a></li>
                    <li><a data-filter="._web" href="web">Web Solutions</a></li>
                    <li><a data-filter="._app" href="app">APP</a></li>
                    <li><a data-filter="._mvp" href="mvp">MVP</a></li>
                    <li><a data-filter="._e-сommerce" href="e-commerce">E - Commerce</a></li>
                    <li><a data-filter="._car-dealers" href="car-dealers" class="active">Autobranche</a></li>
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
                <p>Bent u een autodealer en zoekt u naar manieren om uw online aanwezigheid te vergroten en meer klanten aan te trekken? Zoek niet verder dan onze weboplossingen voor autodealers.</p>
                <p>Ons team van ervaren webontwikkelaars en SEO-experts begrijpt de unieke uitdagingen en kansen waarmee autodealers op de online markt worden geconfronteerd. Daarom bieden wij een reeks aanpasbare oplossingen om aan uw specifieke behoeften en doelstellingen te voldoen. Onze diensten omvatten websiteontwerp en -ontwikkeling, zoekmachineoptimalisatie (SEO), socialemediamarketing en online adverteren.</p>
                <p>Wij kunnen u helpen een visueel verbluffende en gebruiksvriendelijke website te creëren die uw aanbod en diensten onder de aandacht brengt, en gericht verkeer naar uw site leiden via strategische SEO- en advertentiecampagnes.</p>
                <p>Met onze weboplossingen kunt u ook uw klantbetrokkenheid en -behoud verbeteren door effectieve e-mailmarketing en CRM-integratie. Ons team kan u helpen bij het ontwikkelen van gerichte e-mailcampagnes en het integreren van uw klantgegevens in een gecentraliseerd CRM-platform voor meer gepersonaliseerde en effectieve communicatie.</p>
                <p>Laat uw online aanwezigheid u er niet van weerhouden uw volledige potentieel als autodealer te benutten. Neem vandaag nog contact met ons op voor meer informatie over onze weboplossingen en hoe we u kunnen helpen uw doelen te bereiken.</p>
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