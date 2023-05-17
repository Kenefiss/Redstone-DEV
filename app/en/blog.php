<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/_top.php';?>
  <title>REDSTONE SOFTWARE - Blog</title>
  <meta name="description" content="Redstone - a software company, specializing in web development, design, mobile applications, 
CRM systems that are convenient for users and our customers. Top offers in Belfast">
  <meta name="keywords" content="development, web, belfast, dublin, london, software, design">
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
              <span itemprop="name">Blog</span>
              <meta itemprop="position" content="2" />
            </li>
          </ul>
        </div>
      </div>

      <!-- BLOG -->
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="title-with-text">
                <div class="title page-title h2">Blog</div>
              </div>

              <!-- hide on phase 1 -->
              <!-- <div class="sort-wrapp js-sort-nav">
                <div class="sort-btn d-xl-none">All</div>
                <nav class="sort-nav">
                  <ul>
                    <li><a class="active">All</a></li>
                    <li><a href="#">Корисні поради</a></li>
                    <li><a href="#">Новини</a></li>
                    <li><a href="#">Майстер-класи</a></li>
                  </ul>
                </nav>
              </div> -->

            </div>
          </div>
          <div class="row news-wrapp animate-item fadeInUp">
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="the-rise-of-progressive-web-apps">
                  <picture>
                    <source srcset="img/the-rise-of-progressive-web-apps.webp" type="image/webp">
                    <source srcset="img/the-rise-of-progressive-web-apps.jpg" type="image/jpeg">
                    <img src="img/the-rise-of-progressive-web-apps.jpg" alt="the-rise-of-progressive-web-apps">
                  </picture>
                  <span class="date">11.05.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="the-rise-of-progressive-web-apps">The Rise of Progressive Web Apps (PWAs): Bridging the Gap between Web and Mobile Experiences</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="the-benefits-of-using-content-delivery-network">
                  <picture>
                    <source srcset="img/the-benefits-of-using-content-delivery-network.webp" type="image/webp">
                    <source srcset="img/the-benefits-of-using-content-delivery-network.jpg" type="image/jpeg">
                    <img src="img/the-benefits-of-using-content-delivery-network.jpg" alt="the-benefits-of-using-content-delivery-network">
                  </picture>
                  <span class="date">08.05.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="the-benefits-of-using-content-delivery-network">The Benefits of Using a Content Delivery Network (CDN): Optimizing Web Performance and User Experience</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="best-practices-for-database">
                  <picture>
                    <source srcset="img/best-practices-for-database.webp" type="image/webp">
                    <source srcset="img/best-practices-for-database.jpg" type="image/jpeg">
                    <img src="img/best-practices-for-database.jpg" alt="best-practices-for-database">
                  </picture>
                  <span class="date">03.05.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="best-practices-for-database">Best Practices for Database Design in Web Applications: Ensuring Efficiency and Scalability</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="streamlining-workflow">
                  <picture>
                    <source srcset="img/streamlining-workflow.webp" type="image/webp">
                    <source srcset="img/streamlining-workflow.jpg" type="image/jpeg">
                    <img src="img/streamlining-workflow.jpg" alt="streamlining-workflow">
                  </picture>
                  <span class="date">01.05.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="streamlining-workflow">Essential Tools for Web Developers: Streamlining Workflow and Boosting Productivity</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="e-commerce-website-development">
                  <picture>
                    <source srcset="img/e-commerce-website-development.webp" type="image/webp">
                    <source srcset="img/e-commerce-website-development.jpg" type="image/jpeg">
                    <img src="img/e-commerce-website-development.jpg" alt="e-commerce-website-development">
                  </picture>
                  <span class="date">13.04.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="e-commerce-website-development">E-commerce website development: best practices for creating successful online stores</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="accessibility-in-web-design">
                  <picture>
                    <source srcset="img/accessibility-in-web-design.webp" type="image/webp">
                    <source srcset="img/accessibility-in-web-design.jpg" type="image/jpeg">
                    <img src="img/accessibility-in-web-design.jpg" alt="accessibility-in-web-design">
                  </picture>
                  <span class="date">10.04.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="accessibility-in-web-design">Accessibility in web design: how to design websites accessible to people with disabilities</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="content-management-systems">
                  <picture>
                    <source srcset="img/content-management-systems.webp" type="image/webp">
                    <source srcset="img/content-management-systems.jpg" type="image/jpeg">
                    <img src="img/content-management-systems.jpg" alt="content-management-systems">
                  </picture>
                  <span class="date">07.04.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="content-management-systems">Content Management Systems (CMS): a comparison of popular CMSs such as WordPress, Drupal, and Joomla</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="web-development-frameworks">
                  <picture>
                    <source srcset="img/development-frameworks.webp" type="image/webp">
                    <source srcset="img/development-frameworks.jpg" type="image/jpeg">
                    <img src="img/development-frameworks.jpg" alt="development-frameworks">
                  </picture>
                  <span class="date">03.04.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="web-development-frameworks">Web development frameworks: a comparison of popular frameworks such as React, Angular, and Vue.js</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="benefits-of-headless-cms-for-web-development">
                  <picture>
                    <source srcset="img/headless-cms1.webp" type="image/webp">
                    <source srcset="img/headless-cms1.jpg" type="image/jpeg">
                    <img src="img/headless-cms1.jpg" alt="headless-cms1">
                  </picture>
                  <span class="date">13.03.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="benefits-of-headless-cms-for-web-development">Benefits of Headless CMS for Web Development</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="benefits-of-custom-web-development">
                  <picture>
                    <source srcset="img/benefit-custom1.webp" type="image/webp">
                    <source srcset="img/benefit-custom1.jpg" type="image/jpeg">
                    <img src="img/benefit-custom1.jpg" alt="benefit-custom1">
                  </picture>
                  <span class="date">08.03.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="benefits-of-custom-web-development">Benefits of Custom Web Development vs. Off-the-Shelf Solutions</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="the-impact-of-color-on-website-design-and-user-experience">
                  <picture>
                    <source srcset="img/impact-color1.webp" type="image/webp">
                    <source srcset="img/impact-color1.jpg" type="image/jpeg">
                    <img src="img/impact-color1.jpg" alt="impact-color1">
                  </picture>
                  <span class="date">06.03.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="the-impact-of-color-on-website-design-and-user-experience">The Impact of Color on Website Design and User Experience</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="how-to-secure-your-website-from-hackers-and-cyber-attacks">
                  <picture>
                    <source srcset="img/hackers1.webp" type="image/webp">
                    <source srcset="img/hackers1.jpg" type="image/jpeg">
                    <img src="img/hackers1.jpg" alt="hackers1">
                  </picture>
                  <span class="date">01.03.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="how-to-secure-your-website-from-hackers-and-cyber-attacks">How to Secure Your Website from Hackers and Cyber Attacks</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="website-integration-with-crm">
                  <picture>
                    <source srcset="img/integration1.webp" type="image/webp">
                    <source srcset="img/integration1.jpg" type="image/jpeg">
                    <img src="img/integration1.jpg" alt="integration">
                  </picture>
                  <span class="date">15.02.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="website-integration-with-crm">Website integration with CRM</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="website-optimisation">
                  <picture>
                    <source srcset="img/optimisation1.webp" type="image/webp">
                    <source srcset="img/optimisation1.jpg" type="image/jpeg">
                    <img src="img/optimisation1.jpg" alt="">
                  </picture>
                  <span class="date">08.02.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="website-optimisation">Website optimisation</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="popular-hosting-services-and-domains">
                  <picture>
                    <source srcset="img/hosting1.webp" type="image/webp">
                    <source srcset="img/hosting1.jpg" type="image/jpeg">
                    <img src="img/hosting1.jpg" alt="">
                  </picture>
                  <span class="date">01.02.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="popular-hosting-services-and-domains">Popular hosting services and domains</a>
              </div>
            </div>
            <div class="col-md-6 news-item">
              <div class="news-img">
                <a href="web-design-trends-in-2023">
                  <picture>
                    <source srcset="img/trends1.webp" type="image/webp">
                    <source srcset="img/trends1.jpg" type="image/jpeg">
                    <img src="img/trends1.jpg" alt="design trends">
                  </picture>
                  <span class="date">25.01.2023</span>
                </a>
              </div>
              <div class="news-title title h5">
                <a href="web-design-trends-in-2023">Web design trends in 2023</a>
              </div>
            </div>
          </div>
        </div>
        <div class="spacer-xl"></div>
      </div>

      <!-- SEO -->
      <?php include 'inc/sections/_seo.php'; ?>

    </main>

    <?php include 'inc/_footer.php';?>
  </div>


  <div class="popup-wrapper" id="popups"></div>
  <?php include 'inc/_bottom.php';?>
</body>

</html>