<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>Web design Belfast | UI UX | Dublin</title>
  <meta name="description" content="We offer high-quality UI and UX design development for users and site administrators. 
Our advantages: quality and comfort!">
  <meta name="keywords" content="web design, belfast, graphic design, northern ireland">
</head>

<body data-page="portfolio">
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
              <span itemprop="name">Portfolio</span>
              <meta itemprop="position" content="2" />
            </li>
          </ul>
        </div>
      </div>

      <!-- PORTFOLIO -->
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="title-with-text">
                <div class="title page-title h2">Explore our cases</div>
              </div>
              <div class="sort-wrapp">
                <div class="sort-btn d-xl-none">Website</div>
                <nav class="sort-nav">
                  <ul>
                    <li><a data-filter="*" href="portfolio">All</a></li>
                    <li><a data-filter="._web" href="web">Web Solutions</a></li>
                    <li><a data-filter="._app" href="app">APP</a></li>
                    <li><a data-filter="._mvp" href="mvp">MVP</a></li>
                    <li><a data-filter="._e-сommerce" href="e-commerce">E - Commerce</a></li>
                    <li><a data-filter="._car-dealers" href="car-dealers">Car Dealers</a></li>
                    <li><a data-filter="._branding" href="branding">Branding</a></li>
                    <li><a data-filter="._website" href="website" class="active">Website</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>

          <?php include 'inc/sections/_portfolio-items.php';?>

        </div>
        <div class="spacer-xl"></div>
      </div>

      <!-- SEO -->
      <div class="section fs-2">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="title h2 title-margin animate-item fadeInUp"><b>REDSTONE</b> is your trusted digital partner</h1>
              <div class="simple-page text text-sm animate-item fadeInUp delay-2">
                <p>In today's digital age, having a website for your business is no longer just an option - it's a necessity. Your website is often the first interaction a potential customer has with your brand, and it can make or break their decision to do business with you. That's why it's essential to have a professional and user-friendly website that represents your brand in the best possible light.</p>
                <p>A <b>website</b> serves as a 24/7 online presence for your business, providing valuable information about your products and services to potential customers at any time of day. It also allows you to showcase your brand's unique selling points and differentiate yourself from your competitors.</p>
                <p>In addition to being a powerful marketing tool, a website also helps to establish credibility and legitimacy for your business. Customers are more likely to trust and engage with a business that has a professional website than one that doesn't. It shows that you're invested in your business and willing to put in the effort to make a positive impression on your customers.</p>
                <p>A website also provides an opportunity to collect valuable data on your customers and their behavior. By analyzing website traffic, you can gain insights into what your customers are looking for and make informed decisions about your business strategy.</p>
                <p>Finally, a website can help you expand your reach beyond your local community. With the rise of e-commerce, having a website allows you to sell your products and services to customers all over the world.</p>
                <p>In short, having a <b>website</b> for your business is essential in today's digital landscape. It's a powerful marketing tool, establishes credibility, provides valuable data, and allows you to expand your reach beyond your local community. So if you don't already have a website, it's time to invest in one!</p>
              </div>
              <div class="signature" style="margin-top:30px"><img src="img/signature.svg" loading="lazy" alt=""></div>
            </div>
          </div>
          </div>
          <div class="spacer-xl"></div>
        </div>
      </div>

    </main>

    <?php include 'inc/_footer.php';?>
  </div>


  <div class="popup-wrapper" id="popups"></div>
  <?php include 'inc/_bottom.php';?>
  <?php include 'inc/_filter.php';?>
</body>

</html>