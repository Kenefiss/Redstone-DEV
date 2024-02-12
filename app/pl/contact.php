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
              <span itemprop="name">Łączność</span>
              <meta itemprop="position" content="2" />
            </li>
          </ul>
        </div>
      </div>

      <!--New contact Block -->
      <div class="section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-11 col--2k-contacts">
              <div class="row">
                <div class="col-lg-6">
                  <div class="title h2 animate-item fadeInUp">
                    Certyfikowana firma
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="text animate-item fadeInUp delay-1">
                    Odkryj wielokrotnie nagradzane studio internetowe w Zjednoczonym Królestwie. Nasz zespół ekspertów wykorzystuje zaawansowane technologie do tworzenia oprogramowania, projektowania stron internetowych, brandingu, marketingu cyfrowego i e-commerce. Jesteśmy inspirowani do pracy dla dobra naszych klientów.
                  </div>
                </div>
              </div>
              <div class="spacer-sm"></div>
              <div class="row">
                <div class="col-lg-6 animate-item fadeInUp delay-2">
                  <div class="contact-page-info">
                    <div class="address">
                      <h5>Polska</h5>
                      <table>
                        <tr>
                          <td>Adres:</td>
                          <td><a href="https://goo.gl/maps/RkRvUoUEqbpJutz69" target="_blank" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                              <span itemprop="addressLocality">Wrocław</span>, <span itemprop="streetAddress">plac Grunwaldzki 22, 50-363</span></a></td>
                        </tr>
                        <tr>
                          <td>Telefon:</td>
                          <td><a href="tel:+380676075784">+380676075784</a></td>
                        </tr>
                        <tr>
                          <td>E-mail:</td>
                          <td><a href="mailto:office@redstone.software">office@redstone.software</a></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 animate-item fadeInUp delay-2">
                  <div class="title h5 fw-500 d-none d-xl-block">
                    Opowiedz nam o swoim pomyśle, a my zaproponujemy rozwiązanie. Zostaw zgłoszenie, a my zaczniemy!
                  </div>
                  <form method="post" class="ContactForm" id="ContactForm">
                    <input type="hidden" name="g-recaptcha-response" value="">
                    <div class="form-block">
                      <div class="input-field-wrapper w-50">
                        <input class="input" placeholder="Imię i nazwisko" type="text" name="name">
                      </div>
                      <div class="input-field-wrapper w-50">
                        <input class="input" placeholder="Twój numer telefonu" type="tel" name="phone">
                      </div>
                      <div class="input-field-wrapper">
                        <input class="input" placeholder="*Twój adres e-mail" type="email" name="email" id="email" required>
                      </div>
                      <div class="input-field-wrapper">
                        <textarea class="input" placeholder="Krótko opisz swój projekt" name="mess"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">
                        <b>Zadaj pytanie</b>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="spacer-lg"></div>
      </div>

      <!-- Map section -->
      <div class="section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-11">
              <div class="map-block animate-item fadeInUp">
                <div class="map" id="map" data-lat="51.113060" data-lng="17.059090" data-zoom="15" data-xs-zoom="15"></div>
                <a class="marker" data-rel="map" data-lat="51.113060" data-lng="17.059090" data-image="img/point-map.svg" 
                data-string='<div class="address">
                      <h5>Polska</h5>
                      <table>
                        <tbody>
                          <tr>
                            <td>Adres:</td>
                            <td><a href="https://goo.gl/maps/RkRvUoUEqbpJutz69" target="_blank" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                              <span itemprop="addressLocality">Wrocław</span>, <span itemprop="streetAddress">plac Grunwaldzki 22, 50-363</span></a></td>
                          </tr>
                          <tr>
                            <td>Telefon:</td>
                            <td><a href="tel:+380676075784">+380676075784</a></td>
                          </tr>
                          <tr>
                            <td>Email:</td>
                            <td><a href="mailto:office@redstone.software">office@redstone.software</a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>'></a>
              </div>
            </div>
          </div>
        </div>
        <div class="spacer-lg"></div>
      </div>

    </main>

    <?php include 'inc/_footer.php';?>
  </div>


  <?php include 'inc/_popups.php';?>
  <?php include 'inc/_bottom.php';?>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOmjBT0e4aih28ddm_w2xmIY0z1K1ZaoQ&v=3&amp;language=en"></script>
  <script src="js/infobox.js"></script>
  <script src="js/map.js"></script>

</body>

</html>