<!DOCTYPE html>
<html lang="nl">

<head>
  <?php include 'inc/_top.php';?>
  <title>Web App development Contact  Redstone software actief in Nederland</title>
  <meta name="description" content="Neem contact op met een webontwikkelingsbedrijf in Belfast, actief in Nederland, wij zullen uw indicatoren verhogen en helpen uw winst laten stijgen| Noord-Ierland | Gecertificeerd bedrijf">
  <meta name="keywords" content="software, webcompany, belfast, amsterdam, contact">
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
                <span itemprop="name">Home</span>
              </a>
              <meta itemprop="position" content="1" />
            </li>
            <li class="active" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
              <span itemprop="name">Contacts</span>
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
                    Gecertificeerd bedrijf
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="text animate-item fadeInUp delay-1">
                    Ontdek een bekroonde team in het Verenigd Koninkrijk. Ons team van experts maakt gebruik van geavanceerde technologieën voor softwareontwikkeling, webontwikkeling, branding, digitale marketing en e-commerce. Wij worden geïnspireerd om te werken ten behoeve van onze klanten.
                  </div>
                </div>
              </div>
              <div class="spacer-sm"></div>

              <div class="row">
                <div class="col-lg-6 animate-item fadeInUp delay-2">
                  <div class="contact-page-info">
                    <div class="address">
                      <h5>Nederland</h5>
                      <table>
                        <tr>
                          <td>Address:</td>
                          <td><a href="https://maps.app.goo.gl/CbsjJBKJoVAnxTMZA" target="_blank" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                              <span itemprop="addressLocality">Ewijk</span>, <span itemprop="streetAddress">Harp 38 6644DH</span></a></td>
                        </tr>
                        <tr>
                          <td>Phone:</td>
                          <td><a href="tel:+31618435868">+31618435868</a></td>
                        </tr>
                        <tr>
                          <td>Email:</td>
                          <td><a href="mailto:office@redstone.software">office@redstone.software</a></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 animate-item fadeInUp delay-2">
                  <div class="title h5 fw-500 d-none d-xl-block">
                    Vertel ons jouw idee / ideeën en wij bedenken oplossingen.
                  </div>
                  <form method="post" class="ContactForm" id="ContactForm">
                    <input type="hidden" name="g-recaptcha-response" value="">
                    <div class="form-block">
                      <div class="input-field-wrapper w-50">
                        <input class="input" placeholder="Jouw naam" type="text" name="name">
                      </div>
                      <div class="input-field-wrapper w-50">
                        <input class="input" placeholder="Jouw telefoonnummer" type="tel" name="phone">
                      </div>
                      <div class="input-field-wrapper">
                        <input class="input" placeholder="*Jouw emailadres" type="email" name="email" id="email" required>
                      </div>
                      <div class="input-field-wrapper">
                        <textarea class="input" placeholder="Omschrijf in het kort jouw project" name="mess"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">
                        <b>Submit</b>
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

    </main>

    <?php include 'inc/_footer.php';?>
  </div>

  <?php include 'inc/_popups.php';?>
  <?php include 'inc/_bottom.php';?>

</body>

</html>