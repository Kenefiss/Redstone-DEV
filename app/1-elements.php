<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>Redstone :: Elements</title>
</head>

<body>
  <div id="loader-wrapper"></div>
  <div id="content-block">
    <?php include 'inc/_header.php';?>

    <main class="main">

      <!-- colors  * -->
      <div class="section">
        <div class="spacer-sm"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
              <h1>Colors</h1>
              <div class="spacer-xs"></div>
              <div class="row g-4">
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                  <span style="display: inline-block; width: 100px;height: 100px;border: 2px dashed #000; background: var(--clr-title)">
                  </span>
                  <br>
                  <b>--clr-title: #232323</b>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                  <span style="display: inline-block; width: 100px;height: 100px;border: 2px dashed #000; background: var(--clr-text)">
                  </span>
                  <br>
                  <b>--clr-text: #424242</b>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                  <span style="display: inline-block; width: 100px;height: 100px;border: 2px dashed #000; background: var(--clr-grey)">
                  </span>
                  <br>
                  <b>--clr-grey: #e1e1e1</b>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                  <span style="display: inline-block; width: 100px;height: 100px;border: 2px dashed #000; background: var(--clr-grey2)">
                  </span>
                  <br>
                  <b>--clr-grey2: #e4e4e4</b>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                  <span style="display: inline-block; width: 100px;height: 100px;border: 2px dashed #000; background: var(--clr-grey3)">
                  </span>
                  <br>
                  <b>--clr-grey3: #f8f8f8</b>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                  <span style="display: inline-block; width: 100px;height: 100px;border: 2px dashed #000; background: var(--clr-white)">
                  </span>
                  <br>
                  <b>--clr-white: #ffffff</b>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                  <span style="display: inline-block; width: 100px;height: 100px;border: 2px dashed #000; background: var(--clr-black)">
                  </span>
                  <br>
                  <b>--clr-black: #232323</b>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                  <span style="display: inline-block; width: 100px;height: 100px;border: 2px dashed #000; background: var(--clr-red)">
                  </span>
                  <br>
                  <b>--clr-red: #e70000</b>
                </div>
              </div>
            </div>
          </div>
          <div class="spacer-sm"></div>
        </div>
      </div>

      <!-- Editor text -->
      <div class="section">
        <div class="spacer-sm"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
              <h1>Editor text</h1>
              <div class="spacer-xs"></div>
              <div class="text">
                <h1>Сміливі кольори H1 -- 80px</h1>
                <h2>Сміливі кольори H2 -- 50px</h2>
                <h3>Сміливі кольори H3 -- 46px</h3>
                <h4>Сміливі кольори H4 -- 38px</h4>
                <h5>Сміливі кольори H5 -- 26px</h5>
                <h6>Сміливі кольори H6 -- 20px</h6>
                <p>
                  Якісний та потужний веб-дизайн цікавить всіх спеціалістів, які розробляють <a href="#">інтернет-проекти</a> для сучасних компаній України. Рівень якості дизайну впливає безпосередньо на зацікавленість сайтом цільової аудиторії.
                </p>
                <picture>
                  <source srcset='img/simple-img-1.webp' type='image/webp'>
                  <source srcset='img/simple-img-1.jpg' type='image/jpg'>
                  <img src='img/simple-img-1.jpg' alt=''>
                </picture>
                <h5>
                  Моушн-дизайн та анімація
                </h5>
                <p>
                  По-перше, сайт повинен бути <b>зрозумілим</b>. Будемо відвертими більше половини читачів, які відвідують такі сайти, <strong>мало що розуміють </strong> у фінансовій сфері. Найчастіше це люди, які стикнулися з проблемою чи питанням
                </p>
                <ul>
                  <li>
                    Кожен рік дизайн трансформується завдяки новим трендам і темам. 2019 рік
                  </li>
                  <li>
                    Не став виключенням та вніс корективи у сферу веб-дизайну.
                  </li>
                  <li>
                    Серед популярних трендів веб-дизайну спеціалісти виділяють 3 головних:
                  </li>
                </ul>
                <div class="swiper-entry">
                  <div class="swiper-container" data-options='{"slidesPerView": 1, "effect":"fade", "autoHeight": true, "loop":true, "lazy": true }'>
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="slide-img">
                          <picture>
                            <source srcset="img/simple-img-2.webp" type="image/webp">
                            <source srcset="img/simple-img-2.jpg" type="image/jpg">
                            <img src="img/simple-img-2.jpg" alt="" loading="lazy">
                          </picture>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="slide-img">
                          <picture>
                            <source srcset="img/simple-img-3.webp" type="image/webp">
                            <source srcset="img/simple-img-3.jpg" type="image/jpg">
                            <img src="img/simple-img-3.jpg" alt="" loading="lazy">
                          </picture>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="slide-img">
                          <picture>
                            <source srcset="img/simple-img-1.webp" type="image/webp">
                            <source srcset="img/simple-img-1.jpg" type="image/jpg">
                            <img src="img/simple-img-1.jpg" alt="" loading="lazy">
                          </picture>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="slide-img">
                          <picture>
                            <source srcset="img/simple-img-3.webp" type="image/webp">
                            <source srcset="img/simple-img-3.jpg" type="image/jpg">
                            <img src="img/simple-img-3.jpg" alt="" loading="lazy">
                          </picture>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-relative"></div>
                  </div>
                </div>
                <h5>
                  Сміливі кольори
                </h5>
                <p>
                  Сильні кольори були важливою тенденцією протягом останніх двох років і будуть трендом 2020 року. Насичені кольори і навіть надзвичайно яскраві – вони можуть бути первинними або навіть вторинними відтінками.
                </p>
                <p>
                  Коли ми ведемо мову про кольорові тенденції, ми бачимо сміливі кольорові поєднання, які стратегічно використовуються для того, щоб веб-дизайни буквально вистрибували з екрану. Веб-дизайн стає все сміливішим і сміливішим, використовуючи світлі неонові і яскраво насичені кольори в поєднанні з більш темними, приглушеними
                </p>
                <ol>
                  <li>
                    Кожен рік дизайн трансформується завдяки новим трендам і темам. 2019 рік
                  </li>
                  <li>
                    Не став виключенням та вніс корективи у сферу веб-дизайну.
                  </li>
                  <li>
                    Серед популярних трендів веб-дизайну спеціалісти виділяють 3 головних:
                  </li>
                </ol>
                <iframe src="https://www.youtube.com/embed/lmsykQMZ7b0" loading='lazy' allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <blockquote>
                  Сміливі кольори ідеально підходять для ілюстрацій. Вони створюють веселу атмосферу, змушують персонажів виділятися та розповідати історію за зображенням.
                </blockquote>
                <table>
                  <thead>
                    <tr>
                      <td>МАРКЕТИНГ</td>
                      <td>ЛЕНДІНГ</td>
                      <td>ІНТЕРНЕТ МАГАЗИН</td>
                      <td>APP</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>2,086</td>
                      <td>2,086</td>
                      <td>14,602</td>
                      <td>14,602</td>
                    </tr>
                    <tr>
                      <td>3,346</td>
                      <td>3,346</td>
                      <td>23,422</td>
                      <td>23,422</td>
                    </tr>
                    <tr>
                      <td>4,186</td>
                      <td>4,186</td>
                      <td>29,302</td>
                      <td>29,302</td>
                    </tr>
                    <tr>
                      <td>3,346</td>
                      <td>3,346</td>
                      <td>23,422</td>
                      <td>23,422</td>
                    </tr>
                    <tr>
                      <td>2,086</td>
                      <td>2,086</td>
                      <td>14,602</td>
                      <td>14,602</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="spacer-lg"></div>
      </div>

      <!-- btn -->
      <div class="section">
        <div class="spacer-sm"></div>
        <div class="container">
          <div class="row">
            <div class="col-xl-8 col-lg-10">
              <div class="btn"><b> button </b></div>
              <div class="btn btn-primary"><b> button primary</b></div>
              <div class="btn btn-third"><b> button third</b></div>
              <div class="btn-close"></div>
            </div>
            <div class="spacer-xs"></div>
            <div class="col-xl-8 col-lg-10" style="background: var(--clr-black)">
              <div class="spacer-xs"></div>
              <div class="btn btn-secondary"><b> button secondary </b></div>
              <div class="spacer-xs"></div>
            </div>
          </div>
        </div>
        <div class="spacer-sm"></div>
      </div>

      <!-- popup -->
      <div class="section">
        <div class="spacer-sm"></div>
        <div class="container">
          <div class="row">
            <div class="col-xl-8 col-lg-10">
              <div class="btn btn-primary open-popup" data-rel="1">
                <div>
                  <b>popup 1</b><i></i>
                </div>
              </div>

              <div class="btn btn-primary open-popup" data-rel="2">
                <div>
                  <b>popup 2</b><i></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="spacer-sm"></div>
      </div>



    </main>


    <?php include 'inc/_footer.php';?>
  </div>


  <?php include 'inc/_bottom.php';?>
  <?php include 'inc/_popups.php';?>
</body>

</html>