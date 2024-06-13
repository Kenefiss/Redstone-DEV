<!DOCTYPE html>
<html lang="nl">

<head>
  <?php include 'inc/_top.php';?>
  <title>Webontwikkeling en ontwerp in heel Nederland, in jouw regio</title>
  <meta name="description" content="Websiteontwikkeling en -ontwerp van de hoogste kwaliteit al meer dan 17 jaar van ervaring | Londen | Dublin | Belfast | Amsterdam | Nijmegen.">
  <meta name="keywords" content="applicatie, web, mobiel, ontwikkeling, Nederland, software, maatwerk">
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
                <div class="sort-btn d-xl-none">Web Solutions</div>
                <nav class="sort-nav">
                  <ul>
                    <li><a data-filter="*" href="portfolio">Alles</a></li>
                    <li><a data-filter="._web" href="web" class="active">Web Solutions</a></li>
                    <li><a data-filter="._app" href="app">APP</a></li>
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
            <div class="col-12">
              <h1 class="title h2 title-margin animate-item fadeInUp"><b>REDSTONE</b> is uw vertrouwde digitale partner</h1>
              <div class="simple-page text text-sm animate-item fadeInUp delay-2">
                <p>In de snelle wereld van vandaag is een sterke online aanwezigheid cruciaal voor zowel individuen als bedrijven. Weboplossingen zijn een essentieel onderdeel geworden van het moderne dagelijkse leven, waardoor mensen in contact kunnen komen met anderen, hun ideeën en producten kunnen delen en hun stempel kunnen drukken op het digitale landschap.</p>
                <p>Bij ons bedrijf voor weboplossingen begrijpen we hoe belangrijk het is om voorop te blijven lopen in de steeds evoluerende wereld van online technologie. Ons team van experts biedt een uitgebreid scala aan diensten om individuen en bedrijven te helpen hun online doelen te bereiken, van websiteontwerp en -ontwikkeling tot SEO, socialemediamarketing en meer. Wij geloven dat elke klant uniek is en daarom hanteren wij een maatwerkaanpak voor weboplossingen. We werken nauw samen met onze klanten om hun specifieke behoeften en doelen te begrijpen en ontwikkelen op maat gemaakte plannen om hen te helpen succesvol te zijn in de online ruimte.</p>
                <p>Onze geavanceerde technologieën en toonaangevende tools zorgen ervoor dat onze klanten de concurrentie voor blijven en hun volledige potentieel bereiken. Ons team blijft op de hoogte van de nieuwste trends en best practices op het gebied van webdesign, ontwikkeling en marketing, zodat onze klanten er zeker van kunnen zijn dat ze de meest effectieve oplossingen krijgen die beschikbaar zijn.</p>
                <p>We zijn er trots op dat we uitzonderlijke klantenondersteuning bieden en langdurige relaties met onze klanten opbouwen.</p>
                <p>Als u uw online aanwezigheid wilt vestigen of verbeteren, nodigen wij u uit om meer te weten te komen over onze weboplossingen en hoe wij u kunnen helpen uw doelen te bereiken. Neem vandaag nog contact met ons op om aan de slag te gaan.</p>
              </div>
              <div class="signature" style="margin-top:30px"><img src="img/signature.svg" loading="lazy" alt=""></div>
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