<!DOCTYPE html>
<html lang="uk">

<head>
  <?php include 'inc/_top.php';?>
  <title>REDSTONE :: Review</title>
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
            <li class="active" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
              <span itemprop="title">Відгуки</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- REVIEWS -->
      <?php include 'inc/_reviews.php'; ?>

      <!-- CLIENTS -->
      <?php include 'inc/_clients.php'; ?>

      <!-- BRIEF -->
      <?php include 'inc/_brief.php'; ?>

      <!-- SEO -->
      <?php include 'inc/_seo.php'; ?>

    </main>

    <?php include 'inc/_footer.php';?>
  </div>


  <div class="popup-wrapper" id="popups"></div>
  <?php include 'inc/_bottom.php';?>
</body>

</html>