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

      <!-- FORM -->
      <div class="section">
        <div class="map-img d-none d-xl-block"><img src="img/map.png" loading="lazy" alt=""></div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="title-with-text">
                <div class="title page-title h2">Наші контакти</div>
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


  <?php include 'inc/_popups.php';?>
  <?php include 'inc/_bottom.php';?>
</body>

</html>