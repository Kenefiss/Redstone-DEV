<!DOCTYPE html>
<html lang="nl">

<head>
  <?php include 'inc/_top.php';?>
  <title>Web design Nederland | UI UX | Amsterdam</title>
  <meta name="description" content="Wij bieden hoogwaardige UI- en UX-ontwerpontwikkeling voor gebruikers en sitebeheerders. Onze voordelen: kwaliteit en comfort!">
  <meta name="keywords" content="webdesign, Amsterdam, grafisch ontwerp, Nederland">
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
                <div class="sort-btn d-xl-none">Website</div>
                <nav class="sort-nav">
                  <ul>
                    <li><a data-filter="*" href="portfolio">Alles</a></li>
                    <li><a data-filter="._web" href="web">Web Solutions</a></li>
                    <li><a data-filter="._app" href="app">APP</a></li>
                    <li><a data-filter="._mvp" href="mvp">MVP</a></li>
                    <li><a data-filter="._e-сommerce" href="e-commerce">E - Commerce</a></li>
                    <li><a data-filter="._car-dealers" href="car-dealers">Autobranche</a></li>
                    <li><a data-filter="._branding" href="branding">Branding</a></li>
                    <li><a data-filter="._website" href="website" class="active">Website</a></li>
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
                <p>In het huidige digitale tijdperk is het hebben van een website voor uw bedrijf niet langer slechts een optie: het is een noodzaak. Uw website is vaak de eerste interactie die een potentiële klant met uw merk heeft, en kan de beslissing om zaken met u te doen bepalen of breken. Daarom is het essentieel om een ​​professionele en gebruiksvriendelijke website te hebben die uw merk zo goed mogelijk vertegenwoordigt.</p>
                <p>Een website dient als een 24/7 online aanwezigheid voor uw bedrijf en biedt op elk moment van de dag waardevolle informatie over uw producten en diensten aan potentiële klanten. Hiermee kunt u ook de unieke verkoopargumenten van uw merk onder de aandacht brengen en uzelf onderscheiden van uw concurrenten.</p>
                <p>Een website is niet alleen een krachtig marketinginstrument, maar helpt ook om de geloofwaardigheid en legitimiteit van uw bedrijf te vergroten. Het is waarschijnlijker dat klanten een bedrijf met een professionele website vertrouwen en ermee in contact komen dan een bedrijf dat dat niet heeft. Het laat zien dat u in uw bedrijf investeert en bereid bent moeite te doen om een ​​positieve indruk op uw klanten te maken.</p>
                <p>Een website biedt ook de mogelijkheid om waardevolle gegevens over uw klanten en hun gedrag te verzamelen. Door websiteverkeer te analyseren, kunt u inzicht krijgen in waar uw klanten naar op zoek zijn en weloverwogen beslissingen nemen over uw bedrijfsstrategie.</p>
                <p>Ten slotte kan een website u helpen uw bereik buiten uw lokale gemeenschap uit te breiden. Met de opkomst van e-commerce kunt u met een website uw producten en diensten aan klanten over de hele wereld verkopen.</p>
                <p>Kortom, het hebben van een website voor uw bedrijf is essentieel in het huidige digitale landschap. Het is een krachtig marketinginstrument, zorgt voor geloofwaardigheid, levert waardevolle gegevens op en stelt u in staat uw bereik buiten uw lokale gemeenschap uit te breiden. Dus als u nog geen website heeft, is het tijd om erin te investeren!</p>
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