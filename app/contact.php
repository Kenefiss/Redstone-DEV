<!DOCTYPE html>
<html lang="uk">

<head>
  <?php include 'inc/_top.php';?>
  <title>REDSTONE :: Contact</title>
</head>

<body>
  <div id="loader-wrapper"></div>
  <div id="content-block">
    <?php include 'inc/_header.php';?>

    <main>

      <!-- BREADCRUMBS -->
      <div class="section sec-breadcrumbs">
        <div class="container">
          <ul class="breadcrumbs">
            <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
              <a href="index.php" itemprop="url">
                <span itemprop="title">Головна</span>
              </a>
            </li>
            <li class="active" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
              <span itemprop="title">Контакти</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- FORM -->
      <div class="section">
        <div class="map-img position-2 d-none d-xl-block">
          <picture>
            <source srcset="img/map.webp" type="image/webp">
            <source srcset="img/map.png" type="image/png">
            <img src="img/map.png" alt="">
          </picture>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="title-with-text">
                <div class="title page-title h2">Наші контакти</div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-6 col-xl-3">
              <div class="address">
                <h5>Львів</h5>
                <table>
                  <tr>
                    <td>Адреса:</td>
                    <td><a href="https://goo.gl/maps/dHkt3o9xMfiJruYX7" target="_blank" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress"><span itemprop="addressLocality">м. Львів</span>, <span itemprop="streetAddress">вул. Героїв УПА 73</span></a></td>
                  </tr>
                  <tr>
                    <td>Телефон:</td>
                    <td><a href="tel:+38 (098) 15 15 285">+38 (098) 15 15 285 </a></td>
                  </tr>
                  <tr>
                    <td>Email:</td>
                    <td><a href="mailto:office@redstone.agency">office@redstone.agency</a></td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
              <div class="address">
                <h5>Львів 2</h5>
                <table>
                  <tr>
                    <td>Адреса:</td>
                    <td><a href="https://goo.gl/maps/dHkt3o9xMfiJruYX7" target="_blank" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress"><span itemprop="addressLocality">м. Львів</span>, <span itemprop="streetAddress">вул. Героїв УПА 73</span></a></td>
                  </tr>
                  <tr>
                    <td>Телефон:</td>
                    <td><a href="tel:+38 (098) 15 15 285">+38 (098) 15 15 285 </a></td>
                  </tr>
                  <tr>
                    <td>Email:</td>
                    <td><a href="mailto:office@redstone.agency">office@redstone.agency</a></td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
              <div class="address">
                <h5>Київ</h5>
                <table>
                  <tr>
                    <td>Адреса:</td>
                    <td><a href="https://goo.gl/maps/dHkt3o9xMfiJruYX7" target="_blank" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress"><span itemprop="addressLocality">м. Київ</span>, <span itemprop="streetAddress">вул. Солом'янська, 1</span></a></td>
                  </tr>
                  <tr>
                    <td>Телефон:</td>
                    <td><a href="tel:+38 (098) 15 15 285">+38 (098) 15 15 285 </a></td>
                  </tr>
                  <tr>
                    <td>Email:</td>
                    <td><a href="mailto:office@redstone.agency">office@redstone.agency</a></td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
              <div class="address">
                <h5>Київ 2</h5>
                <table>
                  <tr>
                    <td>Адреса:</td>
                    <td><a href="https://goo.gl/maps/dHkt3o9xMfiJruYX7" target="_blank" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress"><span itemprop="addressLocality">м. Київ</span>, <span itemprop="streetAddress">вул. Солом'янська, 1</span></a></td>
                  </tr>
                  <tr>
                    <td>Телефон:</td>
                    <td><a href="tel:+38 (098) 15 15 285">+38 (098) 15 15 285 </a></td>
                  </tr>
                  <tr>
                    <td>Email:</td>
                    <td><a href="mailto:office@redstone.agency">office@redstone.agency</a></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-5 offset-xl-7">
              <div class="ml-80">
                <div class="title h5 fw-500 d-none d-xl-block">Розкажіть про свою ідею, а ми запропонуємо рішення. Залишайте заявку і стартуємо!</div>
                <form method="post" class="ContactForm">
                  <div class="form-block">
                    <div class="input-field-wrapper w-50">
                      <input class="input" placeholder="Ваше ім’я" type="text" name="name">
                    </div>
                    <div class="input-field-wrapper w-50">
                      <input class="input" placeholder="Ваш телефон" type="tel" name="phone">
                    </div>
                    <div class="input-field-wrapper">
                      <input class="input" placeholder="*Ваш email" type="email" name="email" id="email" required>
                    </div>
                    <div class="input-field-wrapper">
                      <textarea class="input" placeholder="Коротко опишіть свій проект" name="mess"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">
                      <b>НАДІСЛАТИ</b>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="spacer-xl"></div>
      </div>

      <!-- BRIEF -->
      <?php include 'inc/_brief.php'; ?>

    </main>

    <?php include 'inc/_footer.php';?>
  </div>


  <div class="popup-wrapper" id="popups"></div>
  <?php include 'inc/_bottom.php';?>
</body>

</html>