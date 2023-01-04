<!DOCTYPE html>
<html lang="uk">

<head>
  <?php include 'inc/_top.php';?>
  <title>REDSTONE :: Project detail</title>

</head>

<body style="--accent-clr: #ED7138;">
  <div id="loader-wrapper"></div>
  <div id="content-block">
    <?php include 'inc/_header.php';?>

    <main>

      <!-- PAGE NAV -->
      <div class="page-nav">
        <ul></ul>
      </div>

      <!-- BREADCRUMBS  * -->
      <div class="section sec-breadcrumbs">
        <div class="container-fluid">
          <ul class="breadcrumbs relative">
            <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
              <a href="index.php" itemprop="url">
                <span itemprop="title">Home</span>
              </a>
            </li>
            <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
              <a href="portfolio.php" itemprop="url">
                <span itemprop="title">Case Studies</span>
              </a>
            </li>
            <li class="active" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
              <span itemprop="title">Blum</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- PROJECT HERO SECTION  * -->
      <div class="section prj-hero">

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-11">
              <div class="prj-hero-info">
                <div class="tags">
                  <span class="tag">Custom</span>
                  <span class="tag">Manufacturer</span>
                </div>
                <h1 class="h1 title">Blum</h1>
                <a class="hero-link" href="https://shop-ua.blum.com" target="_blank">
                  <b>Check the project now</b>
                  <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.2077 0H14.4828C14.0457 0 13.6914 0.354293 13.6914 0.791479C13.6914 1.22862 14.0457 1.58292 14.4828 1.58292H19.4162V6.51632C19.4162 6.95346 19.7705 7.30775 20.2077 7.30775C20.6448 7.30775 20.9992 6.95346 20.9992 6.51632V0.791479C20.9992 0.354293 20.6449 0 20.2077 0Z" />
                    <path d="M20.7675 0.231913C20.4583 -0.0773042 19.9576 -0.0773042 19.6484 0.231913L8.35691 11.5234C8.0477 11.8323 8.0477 12.3335 8.35691 12.6425C8.51125 12.797 8.71387 12.8744 8.91649 12.8744C9.11882 12.8744 9.32144 12.797 9.47606 12.6425L20.7675 1.35102C21.0767 1.04209 21.0767 0.540842 20.7675 0.231913Z" />
                    <path d="M17.5176 9.84043C17.0805 9.84043 16.7261 10.1947 16.7261 10.6319V19.4171H1.58292V4.27383H10.3681C10.8052 4.27383 11.1595 3.91954 11.1595 3.4824C11.1595 3.04525 10.8052 2.69092 10.3681 2.69092H0.791479C0.354293 2.69092 0 3.04521 0 3.4824V20.2085C0 20.6457 0.354293 21 0.791479 21H17.5176C17.955 21 18.309 20.6457 18.309 20.2085V10.6319C18.309 10.1947 17.9548 9.84043 17.5176 9.84043Z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="prj-hero-img">
          <picture>
            <source srcset="img/prj-detail/default/hero-img.webp" type="image/webp">
            <source srcset="img/prj-detail/default/hero-img.png" type="image/jpg">
            <img src="img/prj-detail/default/hero-img.png" alt="" loading="lazy">
          </picture>
        </div>

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-11">
              <div class="row">
                <div class="col-lg-9 col-xl-7">
                  <div class="prj-hero-info m-0">
                    <div class="prj-hero-text">
                      <b>The Blum</b> company needed a high-quality multifunctional solution to provide services to its retail and wholesale customers. During the work on this project, not only the marketing website was developed, but also the configurators of the furniture fittings and the furniture itself. We also paid attention to design and concise presentation of information. The result of our cooperation with the client was a platform with many functions and a bright and discreet design.
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-xl-5 text-lg-center">
                  <div class="service-item">
                    <div class="service-title">Services provided</div>
                    <ul>
                      <li><span>HTML</span></li>
                      <li><span>Development</span></li>
                      <li><span>Support</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="spacer-xl"></div>
      </div>

      <!-- PROJECT FEATURES * -->
      <div class="section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-11">
              <div class="title-with-text">
                <div class="title h2 w-100 animate-item fadeInUp">
                  Project features
                </div>
              </div>

              <div class="row ft-row animate-item fadeInUp anime-1">
                <div class="col-lg-3 col-md-4 col-6">
                  <div class="ft-item">
                    <div class="ft-item-icon">
                      <img src="img/features/ft-icon-1.svg" alt="" loading="lazy">
                    </div>
                    <div class="ft-item-title">
                      Speed optimization
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <div class="ft-item">
                    <div class="ft-item-icon">
                      <img src="img/features/ft-icon-2.svg" alt="" loading="lazy">
                    </div>
                    <div class="ft-item-title">
                      Integration with CRM
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <div class="ft-item">
                    <div class="ft-item-icon">
                      <img src="img/features/ft-icon-3.svg" alt="" loading="lazy">
                    </div>
                    <div class="ft-item-title">
                      Constructor page
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <div class="ft-item">
                    <div class="ft-item-icon">
                      <img src="img/features/ft-icon-4.svg" alt="" loading="lazy">
                    </div>
                    <div class="ft-item-title">
                      Different levels of access to the site
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <div class="ft-item">
                    <div class="ft-item-icon">
                      <img src="img/features/ft-icon-5.svg" alt="" loading="lazy">
                    </div>
                    <div class="ft-item-title">
                      Multilingual
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <div class="ft-item">
                    <div class="ft-item-icon">
                      <img src="img/features/ft-icon-6.svg" alt="" loading="lazy">
                    </div>
                    <div class="ft-item-title">
                      Order analytics
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <div class="ft-item">
                    <div class="ft-item-icon">
                      <img src="img/features/ft-icon-7.svg" alt="" loading="lazy">
                    </div>
                    <div class="ft-item-title">
                      IRequest moderation system
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                  <div class="ft-item">
                    <div class="ft-item-icon">
                      <img src="img/features/ft-icon-8.svg" alt="" loading="lazy">
                    </div>
                    <div class="ft-item-title">
                      Product filtering
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="spacer-xl"></div>
      </div>

      <!-- DEVICE SCREEN * -->
      <div class="section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-11">
              <div class="title-with-text">
                <div class="title h2 w-100 animate-item fadeInUp">
                  Optimization for each device
                </div>
              </div>
              <div class="swiper-entry device-screen-slider animate-item fadeInUp anime-1">
                <div class="swiper-button-prev d-none d-xl-block"><i></i></div>
                <div class="swiper-button-next d-none d-xl-block"><i></i></div>
                <div class="swiper-container" data-options='{"spaceBetween": 15, "slidesPerView": 1, "breakpoints": {"575": {"slidesPerView": 2, "spaceBetween": 15},"991": {"slidesPerView": 3, "spaceBetween": 30},"1199": {"slidesPerView": 4, "spaceBetween": 40}, "1640": {"slidesPerView": 4, "spaceBetween": 70}, "1999": {"slidesPerView": 5, "spaceBetween": 70}}}'>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="device-phone">
                        <div class="device-screen">
                          <picture>
                            <source srcset="img/prj-detail/default/screen-img-1.webp" type="image/webp">
                            <source srcset="img/prj-detail/default/screen-img-1.png" type="image/png">
                            <img src="img/prj-detail/default/screen-img-1.png" alt="">
                          </picture>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="device-phone">
                        <div class="device-screen">
                          <picture>
                            <source srcset="img/prj-detail/default/screen-img-2.webp" type="image/webp">
                            <source srcset="img/prj-detail/default/screen-img-2.jpg" type="image/jpg">
                            <img src="img/prj-detail/default/screen-img-2.jpg" alt="">
                          </picture>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="device-phone">
                        <div class="device-screen">
                          <picture>
                            <source srcset="img/prj-detail/default/screen-img-1.webp" type="image/webp">
                            <source srcset="img/prj-detail/default/screen-img-1.png" type="image/png">
                            <img src="img/prj-detail/default/screen-img-1.png" alt="">
                          </picture>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="device-phone">
                        <div class="device-screen">
                          <picture>
                            <source srcset="img/prj-detail/default/screen-img-2.webp" type="image/webp">
                            <source srcset="img/prj-detail/default/screen-img-2.jpg" type="image/jpg">
                            <img src="img/prj-detail/default/screen-img-2.jpg" alt="">
                          </picture>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="device-phone">
                        <div class="device-screen">
                          <picture>
                            <source srcset="img/prj-detail/default/screen-img-1.webp" type="image/webp">
                            <source srcset="img/prj-detail/default/screen-img-1.png" type="image/png">
                            <img src="img/prj-detail/default/screen-img-1.png" alt="">
                          </picture>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="device-phone">
                        <div class="device-screen">
                          <picture>
                            <source srcset="img/prj-detail/default/screen-img-2.webp" type="image/webp">
                            <source srcset="img/prj-detail/default/screen-img-2.jpg" type="image/jpg">
                            <img src="img/prj-detail/default/screen-img-2.jpg" alt="">
                          </picture>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="device-phone">
                        <div class="device-screen">
                          <picture>
                            <source srcset="img/prj-detail/default/screen-img-1.webp" type="image/webp">
                            <source srcset="img/prj-detail/default/screen-img-1.png" type="image/png">
                            <img src="img/prj-detail/default/screen-img-1.png" alt="">
                          </picture>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-pagination swiper-pagination-relative"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="spacer-xl"></div>
      </div>

      <!-- SOLUTIONS * -->
      <div class="section">
        <div class="container-fluid">
          <div class="title-with-text">
            <div class="title h2 w-100 animate-item fadeInUp">
              Ready to go solutions
            </div>
          </div>
          <div class="row solution-row">
            <div class="col-12 d-none d-sm-block animate-item fadeInUp anime-1">
              <div class="solution-img solution-bg">
                <picture>
                  <source srcset="img/prj-detail/default/sol-img-1.webp" type="image/webp">
                  <source srcset="img/prj-detail/default/sol-img-1.png" type="image/png">
                  <img src="img/prj-detail/default/sol-img-1.png" alt="" loading="lazy">
                </picture>
              </div>
            </div>
            <div class="col-md-5">
              <div class="row solution-row">
                <div class="col-sm-6 col-md-12 animate-item fadeInUp">
                  <div class="solution-img">
                    <picture>
                      <source srcset="img/prj-detail/default/sol-img-2.webp" type="image/webp">
                      <source srcset="img/prj-detail/default/sol-img-2.png" type="image/png">
                      <img src="img/prj-detail/default/sol-img-2.png" alt="" loading="lazy">
                    </picture>
                  </div>
                </div>
                <div class="col-sm-6 col-md-12 animate-item fadeInUp">
                  <div class="solution-img">
                    <picture>
                      <source srcset="img/prj-detail/default/sol-img-4.webp" type="image/webp">
                      <source srcset="img/prj-detail/default/sol-img-4.png" type="image/png">
                      <img src="img/prj-detail/default/sol-img-4.png" alt="" loading="lazy">
                    </picture>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="row solution-row">
                <div class="col-12 animate-item fadeInUp anime-1">
                  <div class="solution-img">
                    <picture>
                      <source srcset="img/prj-detail/default/sol-img-3.webp" type="image/webp">
                      <source srcset="img/prj-detail/default/sol-img-3.png" type="image/png">
                      <img src="img/prj-detail/default/sol-img-3.png" alt="" loading="lazy">
                    </picture>
                  </div>
                </div>
                <div class="col-sm-6 animate-item fadeInUp anime-1">
                  <div class="solution-img">
                    <picture>
                      <source srcset="img/prj-detail/default/sol-img-5.webp" type="image/webp">
                      <source srcset="img/prj-detail/default/sol-img-5.png" type="image/png">
                      <img src="img/prj-detail/default/sol-img-5.png" alt="" loading="lazy">
                    </picture>
                  </div>
                </div>
                <div class="col-sm-6 animate-item fadeInUp anime-2">
                  <div class="solution-img">
                    <picture>
                      <source srcset="img/prj-detail/default/sol-img-6.webp" type="image/webp">
                      <source srcset="img/prj-detail/default/sol-img-6.png" type="image/png">
                      <img src="img/prj-detail/default/sol-img-6.png" alt="" loading="lazy">
                    </picture>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="spacer-xl"></div>
      </div>

      <!-- Tech used * -->
      <div class="section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-11">
              <div class="row justify-content-center">
                <div class="col-xl-6">
                  <div class="title-with-text">
                    <div class="title h2 w-100 animate-item fadeInUp">
                      Technologies used
                    </div>
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="tech-wrap">
                    <div class="tech-item">
                      <div class="tech-img"><img src="img/tech/tech-img-1.svg" loading="lazy" alt=""></div>
                    </div>
                    <div class="tech-item">
                      <div class="tech-img"><img src="img/tech/tech-img-2.svg" loading="lazy" alt=""></div>
                    </div>
                    <div class="tech-item">
                      <div class="tech-img"><img src="img/tech/tech-img-4.svg" loading="lazy" alt=""></div>
                    </div>
                    <div class="tech-item">
                      <div class="tech-img"><img src="img/tech/tech-img-6.svg" loading="lazy" alt=""></div>
                    </div>
                    <div class="tech-item">
                      <div class="tech-img"><img src="img/tech/tech-img-5.svg" loading="lazy" alt=""></div>
                    </div>
                    <div class="tech-item">
                      <div class="tech-img"><img src="img/tech/tech-img-7.svg" loading="lazy" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="spacer-xl"></div>
      </div>

      <!-- Client testimonial -->
      <div class="section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-11">
              <div class="row justify-content-center">
                <div class="col-xl-6">
                  <div class="title-with-text">
                    <div class="title h2 w-100 animate-item fadeInUp">
                      Client testimonial
                    </div>
                  </div>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-6">
                  <div class="reviews-slider type2">
                    <div class="review-block">
                      <a class="full-link" href="https://clutch.co/profile/redstone?project_cost=&review_type=&service_provided=&sort_by=rating_DESC#review-2045865" rel="nofollow" target="_blank"></a>
                      <div class="review-info">
                        <div class="review-quote"><img src="img/reviews/review-cl-3.jpg" alt=""></div>
                        <div class="review-title">Kevin Watson</div>
                        <div class="review-category">Proprietor, MyResto</div>
                      </div>
                      <div class="review-content">
                        <div class="rating">
                          <img src="img/start-icon.svg" loading="lazy" alt="">
                          <img src="img/start-icon.svg" loading="lazy" alt="">
                          <img src="img/start-icon.svg" loading="lazy" alt="">
                          <img src="img/start-icon.svg" loading="lazy" alt="">
                          <img src="img/start-icon.svg" loading="lazy" alt="">
                        </div>
                        <div class="text">
                          <p>"I was impressed with REDSTONE's quick turnaround time."</p>
                        </div>
                        <div class="review-price-block text">
                          <div class="verify-review"><img src="img/verified-icon.svg" loading="lazy" alt="verified icon">Verified</div>
                          <div class="verify-price"><img src="img/price-icon.svg" loading="lazy" alt="price icon">More than $ 100,000</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="spacer-xl"></div>
      </div>

      <!-- BRIEF -->
      <?php include 'inc/sections/_brief-2.php'; ?>

    </main>

    <?php include 'inc/_footer.php';?>
  </div>


  <div class="popup-wrapper" id="popups"></div>
  <?php include 'inc/_bottom.php';?>
</body>

</html>