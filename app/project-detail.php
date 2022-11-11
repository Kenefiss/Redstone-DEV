<!DOCTYPE html>
<html lang="uk">

<head>
  <?php include 'inc/_top.php';?>
  <title>REDSTONE :: Project detail</title>
  <style>
    .btn-link{color: #0000F5!important;}
    .swiper-pagination-bullet-active{border-color:#0000F5!important;}
    @media (min-width: 1200px){
      .breadcrumbs a:hover {color: #0000F5!important;}
      .swiper-pagination-bullet:hover{border-color:#0000F5!important;}
      .swiper-button-prev:hover i::after, .swiper-button-next:hover i::after{color: #0000F5!important;}
    }
  </style>
</head>

<body>
  <div id="loader-wrapper"></div>
  <div id="content-block">
    <?php include 'inc/_header.php';?>

    <main>

      <!-- BREADCRUMBS -->
      <div class="section sec-breadcrumbs">
        <div class="container-fluid">
          <ul class="breadcrumbs">
            <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
              <a href="index.php" itemprop="url">
                <span itemprop="title">Головна</span>
              </a>
            </li>
            <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
              <a href="portfolio.php" itemprop="url">
                <span itemprop="title">Портфоліо</span>
              </a>
            </li>
            <li class="active" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
              <span itemprop="title">Inspe</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- PROJECT BANNER -->
      <div class="section project-banner">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-8 order-xl-2">
              <div class="swiper-entry">
                <div class="swiper-container" data-options='{"spaceBetween": 15, "slidesPerView": 1, "breakpoints": {"575": {"spaceBetween": 0}}}'>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="project-banner-img">
                        <picture>
                          <source srcset="img/inspe-banner-1.webp" type="image/webp">
                          <source srcset="img/inspe-banner-1.jpg" type="image/jpg">
                          <img src="img/inspe-banner-1.jpg" alt="">
                        </picture>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="project-banner-img">
                        <picture>
                          <source srcset="img/inspe-banner-1.webp" type="image/webp">
                          <source srcset="img/inspe-banner-1.jpg" type="image/jpg">
                          <img src="img/inspe-banner-1.jpg" alt="">
                        </picture>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="project-banner-img">
                        <video preload="auto" poster="img/seo-img.jpg" src="video/project-video.mp4" playsinline loop autoplay muted disablePictureInPicture></video>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-pagination swiper-pagination-absolute"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 order-xl-1 align-self-center">
              <div class="project-detail-info">
                <div class="tags">
                  <span class="tag">стоматологія</span>
                  <span class="tag">інтеграція з</span>
                </div>
                <h1 class="title h1 name-project">Inspe</h1>
                <div class="text desc">
                  <p><b>INSPE</b> прийшов до нас із готовим дизайном. На його основі потрібно було створити потужний інструмент для бізнесу - залучати нових клієнтів, працювати з уже існуючими, Інтернет-магазин, електронну комерцію, заходи, обладнання та багато іншого. Це повинен бути не просто хороший сайт, а потужний універсальний ресурс для всіх у галузі стоматології.</p>
                </div>
                <div class="title h5 fw-500 project-services">Надані послуги</div>
                <ul class="service-item">
                  <li><span>HTML</span></li>
                  <li><span>Розробка</span></li>
                  <li><span>Підтримка</span></li>
                </ul>
                <a href="#" class="btn-link" target="_blank">ПЕРЕЙТИ НА САЙТ<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 11L6 6L1 1" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg></a>
              </div>
            </div>
          </div>
        </div>
        <div class="spacer-xl"></div>
      </div>

      <!-- BENEFITS -->
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="swiper-entry benefit-slider animate-item fadeInUp">
              <div class="swiper-container" data-options='{"spaceBetween": 15, "slidesPerView": 1, "autoHeight": true, "slidesPerGroup":1, "breakpoints": {"991": {"slidesPerView": 3, "slidesPerGroup":3},"575": {"slidesPerView": 2, "slidesPerGroup":2}}}'>
                <div class="swiper-wrapper benefits">
                  <div class="swiper-slide">
                    <div class="project-benefit">
                      <div class="icon"><img src="img/icon-1.svg" alt=""></div>
                      <div class="title h6">Завантажте оптимізацію швидкості</div>
                      <div class="text">Оптимізація швидкості відповідно до Google Speed Test</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="project-benefit">
                      <div class="icon"><img src="img/icon-2.svg" alt=""></div>
                      <div class="title h6">Завантажте оптимізацію швидкості</div>
                      <div class="text">Набір кроків для покращення позиції вашого веб-сайту в пошуку</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="project-benefit">
                      <div class="icon"><img src="img/icon-3.svg" alt=""></div>
                      <div class="title h6">Зручний модуль додавання квартир</div>
                      <div class="text">Зручний модуль для додавання квартир, підлог та секцій</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="project-benefit">
                      <div class="icon"><img src="img/icon-4.svg" alt=""></div>
                      <div class="title h6">Багатомовний</div>
                      <div class="text">Підключення та оптимізація веб-сайту для багатомовного відображення</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="project-benefit">
                      <div class="icon"><img src="img/icon-5.svg" alt=""></div>
                      <div class="title h6">Інтернет-платежі</div>
                      <div class="text">Платіжна система, яка приймає електронні платежі за онлайн-транзакції</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="project-benefit">
                      <div class="icon"><img src="img/icon-6.svg" alt=""></div>
                      <div class="title h6">eCommerce</div>
                      <div class="text">Модулі оплати, замовлення, реєстрації товарів та послуг</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="project-benefit">
                      <div class="icon"><img src="img/icon-7.svg" alt=""></div>
                      <div class="title h6">Онлайн реєстрація на події</div>
                      <div class="text">Система реєстрації на події з різними налаштуваннями</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="project-benefit">
                      <div class="icon"><img src="img/icon-8.svg" alt=""></div>
                      <div class="title h6">Нагадування про систему бронювання</div>
                      <div class="text">Нагадування про припинення, оплату та образливу подію</div>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination swiper-pagination-relative"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="spacer-xl"></div>
      </div>

      <!-- OPTIMIZATION -->
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="title-with-text">
                <div class="title h2 animate-item fadeInUp">Оптимізовано для кожного пристрою</div>
              </div>
            </div>
          </div>
          <div class="row animate-item fadeInUp delay-1">
            <div class="swiper-entry">
              <div class="swiper-button-prev d-none d-xl-block"><i></i></div>
              <div class="swiper-button-next d-none d-xl-block"><i></i></div>
              <div class="swiper-container" data-options='{"spaceBetween": 15, "slidesPerView": 1, "autoHeight": true, "breakpoints": {"1199": {"slidesPerView": 4, "spaceBetween": 60},"991": {"slidesPerView": 3, "spaceBetween": 40, "slidesPerGroup":3},"575": {"slidesPerView": 2, "spaceBetween": 40, "slidesPerGroup":2}}}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="optimaze-img">
                      <picture>
                        <source srcset="img/inspe-optimaze-1.webp" type="image/webp">
                        <source srcset="img/inspe-optimaze-1.png" type="image/png">
                        <img src="img/inspe-optimaze-1.png" alt="">
                      </picture>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="optimaze-img">
                      <picture>
                        <source srcset="img/inspe-optimaze-2.webp" type="image/webp">
                        <source srcset="img/inspe-optimaze-2.png" type="image/png">
                        <img src="img/inspe-optimaze-2.png" alt="">
                      </picture>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="optimaze-img">
                      <picture>
                        <source srcset="img/inspe-optimaze-3.webp" type="image/webp">
                        <source srcset="img/inspe-optimaze-3.png" type="image/png">
                        <img src="img/inspe-optimaze-3.png" alt="">
                      </picture>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="optimaze-img">
                      <picture>
                        <source srcset="img/inspe-optimaze-4.webp" type="image/webp">
                        <source srcset="img/inspe-optimaze-4.png" type="image/png">
                        <img src="img/inspe-optimaze-4.png" alt="">
                      </picture>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="optimaze-img">
                      <picture>
                        <source srcset="img/inspe-optimaze-1.webp" type="image/webp">
                        <source srcset="img/inspe-optimaze-1.png" type="image/png">
                        <img src="img/inspe-optimaze-1.png" alt="">
                      </picture>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="optimaze-img">
                      <picture>
                        <source srcset="img/inspe-optimaze-2.webp" type="image/webp">
                        <source srcset="img/inspe-optimaze-2.png" type="image/png">
                        <img src="img/inspe-optimaze-2.png" alt="">
                      </picture>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination swiper-pagination-relative"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="spacer-xl"></div>
      </div>

      <!-- ELEMENTS SITE -->
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="title-with-text">
                <div class="title h2 animate-item fadeInUp">Готові рішення</div>
              </div>
            </div>
          </div>
          <div class="row solution-wrapp">
            <div class="col-12 animate-item fadeInUp delay-1">
              <picture>
                <source srcset="img/inspe-screen1.webp" type="image/webp">
                <source srcset="img/inspe-screen1.png" type="image/jpeg">
                <img src="img/inspe-screen1.png" alt="">
              </picture>
            </div>
            <div class="col-12 col-md-6 animate-item fadeInUp delay-1">
              <picture>
                <source srcset="img/inspe-screen2.webp" type="image/webp">
                <source srcset="img/inspe-screen2.png" type="image/jpeg">
                <img src="img/inspe-screen2.png" alt="">
              </picture>
            </div>
            <div class="col-12 col-md-6 animate-item fadeInUp delay-1">
              <picture>
                <source srcset="img/inspe-screen4.webp" type="image/webp">
                <source srcset="img/inspe-screen4.png" type="image/jpeg">
                <img src="img/inspe-screen4.png" alt="">
              </picture>
            </div>
            <div class="col-12 animate-item fadeInUp delay-1">
              <picture>
                <source srcset="img/inspe-screen3.webp" type="image/webp">
                <source srcset="img/inspe-screen3.png" type="image/jpeg">
                <img src="img/inspe-screen3.png" alt="">
              </picture>
            </div>
          </div>
        </div>
        <div class="spacer-xl"></div>
      </div>

      <!-- WHAT WE USE -->
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="title-with-text">
                <div class="title h2 animate-item fadeInUp">Що ми використовуємо для досягнення успіху</div>
              </div>
            </div>
          </div>
          <div class="row animate-item fadeInUp delay-1">
            <div class="swiper-entry clients-slider size2">
              <div class="swiper-container" data-options='{"spaceBetween": 15, "slidesPerView": 4, "autoHeight": true, "slidesPerGroup":4, "breakpoints": {"991": {"slidesPerView": 6},"575": {"slidesPerView": 5}}}'>
                <div class="swiper-wrapper clients justify-content-xl-center">
                  <div class="swiper-slide">
                    <div class="client-img"><img src="img/tech-10.png" loading="lazy" alt=""></div>
                  </div>
                  <div class="swiper-slide">
                    <div class="client-img"><img src="img/tech-11.png" loading="lazy" alt=""></div>
                  </div>
                  <div class="swiper-slide">
                    <div class="client-img"><img src="img/tech-15.png" loading="lazy" alt=""></div>
                  </div>
                  <div class="swiper-slide">
                    <div class="client-img"><img src="img/tech-6.png" loading="lazy" alt=""></div>
                  </div>
                  <div class="swiper-slide">
                    <div class="client-img"><img src="img/tech-7.png" loading="lazy" alt=""></div>
                  </div>
                  <div class="swiper-slide">
                    <div class="client-img"><img src="img/tech-8.png" loading="lazy" alt=""></div>
                  </div>
                </div>
                <div class="swiper-pagination swiper-pagination-relative"></div>
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