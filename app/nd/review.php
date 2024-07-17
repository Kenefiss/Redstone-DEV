<!DOCTYPE html>
<html lang="nl">

<head>
  <?php include 'inc/_top.php';?>
  <title>REDSTONE SOFTWARE - Geavanceerde oplossingen voor uw bedrijf</title>
  <meta name="description" content="REDSTONE SOFTWARE geeft merken een moderne technische oplossing. Ons team beschikt over hoogwaardige expertise op verschillende IT-gebieden en helpt klanten de beste weg te vinden in hun merkontwikkeling met de nieuwste IT-technologieën.">
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
              <span itemprop="name">Reviews</span>
              <meta itemprop="position" content="2" />
            </li>
          </ul>
        </div>
      </div>

      <!-- CLIENTS -->
      <?php include 'inc/sections/_clients.php'; ?>

      <!-- BRIEF -->
      <?php include 'inc/sections/_brief.php'; ?>

      <!-- SEO -->
      <?php include 'inc/sections/_seo.php'; ?>

    </main>

    <?php include 'inc/_footer.php';?>
  </div>


  <div class="popup-wrapper" id="popups"></div>
  <?php include 'inc/_bottom.php';?>
</body>

</html>