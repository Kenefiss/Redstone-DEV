<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title> Web App development   Contact  Redstone software from Belfast</title>
  <meta name="description" content="Get in touch with a web development team in Belfast, we will raise your indicators 
and increase your profit | Norther Ireland">
  <meta name="keywords" content="software, belfast, contact">
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
                    Certified company
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="text animate-item fadeInUp delay-1">
                    Discover an award-winning team in the United Kingdom. Our team of experts uses advanced technologies for software development, web development, branding, digital marketing, and e-commerce. We are inspired to work for the benefit of our clients.
                  </div>
                </div>
              </div>
              <div class="spacer-sm"></div>

              <div class="row">
                <div class="col-lg-6 animate-item fadeInUp delay-2">
                  <div class="contact-page-info">
                    <div class="address">
                      <h5>United Kingdom</h5>
                      <table>
                        <tr>
                          <td>Address:</td>
                          <td><a href="https://goo.gl/maps/6JEchaCUh4aAeoKq8" target="_blank" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                              <span itemprop="addressLocality">Lurgan</span>, <span itemprop="streetAddress">4 Ferndale Co Armagh BT66 8LQ</span></a></td>
                        </tr>
                        <tr>
                          <td>Email:</td>
                          <td><a href="mailto:office@redstone.software">office@redstone.software</a></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="title h5 fw-500 d-none d-xl-block">
                    Tell us about your idea, and we will offer a solution. Leave an application and we will start!
                  </div>
                  <form method="post" class="ContactForm" id="ContactForm">
                    <input type="hidden" name="g-recaptcha-response" value="">
                    <div class="form-block">
                      <div class="input-field-wrapper w-50">
                        <input class="input" placeholder="Your name" type="text" name="name">
                      </div>
                      <div class="input-field-wrapper w-50">
                        <input class="input" placeholder="Your phone number" type="tel" name="phone">
                      </div>
                      <div class="input-field-wrapper">
                        <input class="input" placeholder="*Your email" type="email" name="email" id="email" required>
                      </div>
                      <div class="input-field-wrapper">
                        <textarea class="input" placeholder="Briefly describe your project" name="mess"></textarea>
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