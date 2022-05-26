<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    UIncept Accelerator is the place for startup ideas and leaders
  </title>
  
  <link rel="apple-touch-icon" sizes="57x57" href="image/icons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="image/icons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="image/icons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="image/icons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="image/icons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="image/icons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="image/icons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="image/icons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="image/icons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="image/icons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="image/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="image/icons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="image/icons/favicon-16x16.png">
  <link rel="manifest" href="image/icons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="image/icons/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- Bootstrap , fonts & icons  -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="fonts/icon-font/css/style.css">
  <link rel="stylesheet" href="fonts/typography-font/typo.css">
  <link rel="stylesheet" href="fonts/fontawesome-5/css/all.css">
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="plugins/aos/aos.min.css">
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="plugins/nice-select/nice-select.min.css">
  <link rel="stylesheet" href="plugins/slick/slick.min.css">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" href="plugins/theme-mode-switcher/switcher-panel.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/main.css">
  <!-- Custom stylesheet -->
  <style>
    .swiper-container {
  /*height: calc(50vh - 120px);*/
  margin: 60px;
}

.swiper-container-free-mode > .swiper-wrapper{
  transition-timing-function : linear;
}

.swiper-slide {
  overflow: hidden;
  background-position: center center;
  background-size: cover;
}
  </style>
</head>

<body data-theme-mode-panel-active data-theme="light">
  <div class="site-wrapper overflow-hidden ">
    <div id="loading">
      <img src="image/preloader.gif" alt="">
    </div>
    <!-- Clean The Code And Hop in -->
    <!-- Header Area -->
    <!-- Preloader -->
    <!-- <div id="loading">
    <div class="preloader">
     <img src="./image/preloader-3.gif" alt="preloader">
   </div>
   </div>   -->
    <!-- Header Area -->
    <header class="site-header site-header--menu-left dynamic-sticky-bg px-3 site-header--absolute site-header--sticky">
      <div class="container-fluid">
        <nav class="navbar site-navbar">
          <!-- Brand Logo-->
          <div class="brand-logo">
            <a href="{{ route('home') }}">
              <!-- light version logo (logo must be black)-->
              <img src="image/uincept.jpg" alt="" class="light-version-logo">
              <!-- Dark version logo (logo must be White)-->
              <img src="image/uincept.jpg" alt="" class="dark-version-logo">
            </a>
          </div>
          <div class="menu-block-wrapper  ms-lg-7">
            <div class="menu-overlay"></div>
            <nav class="menu-block" id="append-menu-header">
              <div class="mobile-menu-head">
                <div class="go-back">
                  <i class="fa fa-angle-left"></i>
                </div>
                <div class="current-menu-title"></div>
                <div class="mobile-menu-close">&times;</div>
              </div>
              <ul class="site-menu-main">
                <li class="nav-item">
                  <a href="#" class="nav-link-item drop-trigger">Programs</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link-item drop-trigger">Portfolio</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link-item drop-trigger">Communities</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link-item drop-trigger">Enterprise</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link-item drop-trigger">Events</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link-item drop-trigger">People</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link-item drop-trigger">Blog</a>
                </li>
                <li class="nav-item nav-item-has-children">
                  <a href="#" class="nav-link-item drop-trigger">Apply <i class="fas fa-angle-down"></i>
                  </a>
                  <ul class="sub-menu" id="submenu-2">
                    <li class="sub-menu--item">
                      <a href="#">Startups Application</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="#">Mentor & Advisor Application</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="#">Investor Network Application</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="#">Careers at UIncept</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="#">Intern with Startup</a>
                    </li>
                  </ul>
                </li>
                
              </ul>
            </nav>
          </div>
          <div class="header-btns  ms-auto ms-lg-0 d-none d-sm-flex align-items-center">
            <!-- <a class="btn-link heading-default-color-2 me-4" href="#">
              Login
            </a> -->
            <a class="btn btn-header-btns btn-link-water btn--medium-2 h-45 text-shark rounded-5 ms-1" href="#">
              IXI Summit
            </a>
          </div>
          <!-- mobile menu trigger -->
          <div class="mobile-menu-trigger">
            <span></span>
          </div>
          <!--/.Mobile Menu Hamburger Ends-->
        </nav>
      </div>
    </header>
    <!-- navbar- -->
    <!--/ .Header Area -->
    <!-- Hero Area -->
    <div class="welcome-area welcome-area--l1 position-relative bg-default">
      <!-- <img class="img-fluid full-width" src="image/slider/slider1.jpg"> -->
      <img class="img-fluid full-width" src="image/slider/slider12.jpg">
      <div class="lower-welcome ">
        <h5>UIncept Accelerator Programme application is now open and will be until May 20th, 2022</h5>
        <a href="#"><span class="widget-text">Apply Now</span></a>
      </div>
    </div>
    
    <div class="service-area service-area--l1 border-top border-default-color-2 bg-default">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title">
              <h3>Portfolio Overview</h3>
            </div>
          </div>
          <div class="portfolio-grid">
            <div class="row">
              <div class="col-md-3">
                <div class="portfolio-box">
                  <span>500+</span>
                  STARTUPS REVIEWED 
                </div>
              </div>
              <div class="col-md-3">
                <div class="portfolio-box">
                  <span>30+</span>
                  EDTECH STARTUPS ACCELERATED
                </div>
              </div>
              <div class="col-md-3">
                <div class="portfolio-box">
                  <span>1000+</span>
                  GLOBAL INVESTOR NETWORK 
                </div>
              </div>
              <div class="col-md-3">
                <div class="portfolio-box">
                  <span>250+</span>
                  GLOBAL MENTOR NETWORK
                </div>
              </div>

              <div class="col-md-3">
                <div class="portfolio-box">
                  <span>300+</span>
                  ENTREPRENEURES 
                </div>
              </div>
              <div class="col-md-3">
                <div class="portfolio-box">
                  <span><div class="small">INR </div>80 <div class="small">Cr.+</div></span>
                  EDTECH STARTUPS ACCELERATED
                </div>
              </div>
              <div class="col-md-3">
                <div class="portfolio-box">
                  <span>1000+</span>
                  GLOBAL INVESTOR NETWORK 
                </div>
              </div>
              <div class="col-md-3">
                <div class="portfolio-box">
                  <span>250+</span>
                  GLOBAL MENTOR NETWORK
                </div>
              </div>


            </div>
            
          </div>
        </div>
      </div>
    </div>
    <!--/ .Hero Area -->

    <div class="news-area news-area--l9 bg-default">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8">
            <!-- Section Title -->
            <div class="section-title section-title--l9 text-center">
              <h3 class="" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Featured News</h3>
            </div>
            <!--/ .Section Title -->
          </div>
        </div>
        <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
          <div class="row">
            <div class="col-md-12">
              <div class="swiper-container swiper-container-free-mode featurednews">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    
                      <div class="blogs-post blogs-post--small">
                        <img class="w-100" src="image/news/img1.jpg" alt="">
                        <div class="hover-content">
                          
                          <a href="blog-details.html" class="hover-content__title">Bibhu Prasad Das</a>
                          <a href="blog-details.html" class="hover-content__title content-small">Co-founder & CEO, Propelld</a>
                          <ul class="hover-content__post-meta list-unstyled">
                            <li>
                              <a href="blog-details.html">UIncept’s portfolio company Propelld gets $35mn in funding and takes Exit</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    
                  </div>
                  <div class="swiper-slide">
                    <div class="blogs-post blogs-post--small">
                      <img class="w-100" src="image/news/img2.jpg" alt="">
                      <div class="hover-content">
                        
                        <a href="blog-details.html" class="hover-content__title">Mamta Kumari </a>
                        <a href="blog-details.html" class="hover-content__title content-small">Co-founder PrepBytes</a>
                        <ul class="hover-content__post-meta list-unstyled">
                          <li>
                            <a href="blog-details.html">CollegeDekho acquires UIncept Portfolio company PrepBytes and has takes Exit.</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="blogs-post blogs-post--small">
                      <img class="w-100" src="image/news/img3.jpg" alt="">
                      <div class="hover-content">
                        <a href="blog-details.html" class="hover-content__title">Shark Tank India</a>
                        <a href="blog-details.html" class="hover-content__title content-small">Eventbeep</a>
                        <ul class="hover-content__post-meta list-unstyled">
                          <li>
                            <a href="blog-details.html">EventBeep gets investments from 3 Sharks on Shark Tank India, World biggest Business Reality Show </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="blogs-post blogs-post--small">
                      <img class="w-100" src="image/home-8/blogs-img-3.png" alt="">
                      <div class="hover-content">
                        <a href="blog-details.html" class="hover-content__title">Mayank Singh</a>
                        <a href="blog-details.html" class="hover-content__title content-small">Co-founder, Campus 365</a>
                        <ul class="hover-content__post-meta list-unstyled">
                          <li>
                            <a href="blog-details.html">Campus 365, Raised USD $300 K in Seed Funding Round</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  
                </div>
                
              </div>
            </div>
          </div>
          
          <!-- <div class="col-lg-4 col-md-6 col-xs-10">
            <div class="blogs-post blogs-post--small">
              <img class="w-100" src="image/news/img1.jpg" alt="">
              <div class="hover-content">
                
                <a href="blog-details.html" class="hover-content__title">Bibhu Prasad Das</a>
                <a href="blog-details.html" class="hover-content__title content-small">Co-founder & CEO, Propelld</a>
                <ul class="hover-content__post-meta list-unstyled">
                  <li>
                    <a href="blog-details.html">UIncept’s portfolio company Propelld gets $35mn in funding and takes Exit</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 col-xs-10">
            <div class="blogs-post blogs-post--small">
              <img class="w-100" src="image/home-8/blogs-img-2.png" alt="">
              <div class="hover-content">
                
                <a href="blog-details.html" class="hover-content__title">Mamta Kumari </a>
                <a href="blog-details.html" class="hover-content__title content-small">Co-founder PrepBytes</a>
                <ul class="hover-content__post-meta list-unstyled">
                  <li>
                    <a href="blog-details.html">CollegeDekho acquires UIncept Portfolio company PrepBytes and has takes Exit.</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 col-xs-10">
            <div class="blogs-post blogs-post--small">
              <img class="w-100" src="image/home-8/blogs-img-3.png" alt="">
              <div class="hover-content">
                <a href="blog-details.html" class="hover-content__title">Shark Tank India</a>
                <a href="blog-details.html" class="hover-content__title content-small">Eventbeep</a>
                <ul class="hover-content__post-meta list-unstyled">
                  <li>
                    <a href="blog-details.html">EventBeep gets investments from 3 Sharks on Shark Tank India, World biggest Business Reality Show </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 col-xs-10">
            <div class="blogs-post blogs-post--small">
              <img class="w-100" src="image/home-8/blogs-img-3.png" alt="">
              <div class="hover-content">
                <a href="blog-details.html" class="hover-content__title">Mayank Singh</a>
                <a href="blog-details.html" class="hover-content__title content-small">Co-founder, Campus 365</a>
                <ul class="hover-content__post-meta list-unstyled">
                  <li>
                    <a href="blog-details.html">Campus 365, Raised USD $300 K in Seed Funding Round</a>
                  </li>
                </ul>
              </div>
            </div>
          </div> -->
          
        </div>
      </div>
    </div>

    <div class="portfolio-area portfolio-area--l9 bg-default">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8">
            
            <!-- <div class="section-title section-title--l9 text-center">
              <h6 class="section-title__sub-heading text-electric-violet-2" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Portfolio</h6>
              <h2 class="section-title__heading" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">The Works We Are Proud Of</h2>
            </div> -->
            
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-10" data-aos="fade-right" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
            <div class="portfolio-img mb-5 mb-lg-0">
              <div class="portfolio-img__single">
                <img class="w-100" src="image/interact/ic1.jpg" alt="">
                <div class="portfolio-img__single__shape">
                  <img class="w-100" src="image/home-8/portfolio-shape.png" alt="">
                  <div class="shape-content">
                    <h1>01</h1>
                  </div>
                </div>
              </div>
              <div class="portfolio-img__single">
                <img class="w-100" src="image/interact/ic2.jpg" alt="">
                <div class="portfolio-img__single__shape">
                  <img class="w-100" src="image/home-8/portfolio-shape.png" alt="">
                  <div class="shape-content">
                    <h1>02</h1>
                  </div>
                </div>
              </div>
              <div class="portfolio-img__single">
                <img class="w-100" src="image/home-8/testimonial-img-3.jpg" alt="">
                <div class="portfolio-img__single__shape">
                  <img class="w-100" src="image/home-8/portfolio-shape.png" alt="">
                  <div class="shape-content">
                    <h1>03</h1>
                  </div>
                </div>
              </div>
              <div class="portfolio-img__single">
                <img class="w-100" src="image/home-8/testimonial-img-4.jpg" alt="">
                <div class="portfolio-img__single__shape">
                  <img class="w-100" src="image/home-8/portfolio-shape.png" alt="">
                  <div class="shape-content">
                    <h1>04</h1>
                  </div>
                </div>
              </div>
              <div class="portfolio-img__single">
                <img class="w-100" src="image/home-8/testimonial-img-5.jpg" alt="">
                <div class="portfolio-img__single__shape">
                  <img class="w-100" src="image/home-8/portfolio-shape.png" alt="">
                  <div class="shape-content">
                    <h1>05</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-10" data-aos="fade-left" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
            <div class="portfolio-content">
              <div class="portfolio-content__single">
                
                <h2 class="portfolio-content__heading">GROW YOUR STARTUP </h2>
                
                <p class="portfolio-content__text">From aspiring founders to early stage entrepreneurs,<br>
                UIncept can scale your vision into a thriving business.</p>
                <a href="#" class="btn btn-electric-violet-2 btn--lg-2 rounded-50">Learn More</a>
              </div>
              <div class="portfolio-content__single">
                
                <h2 class="portfolio-content__heading">
                  Build deep engagements <br>With startup</h2>
                <p class="portfolio-content__text">Uincept helps enterprise discover and partner with great startups across technologies and sectors</p>
                <a href="#" class="btn btn-electric-violet-2 btn--lg-2 rounded-50">Let's Connect</a>
              </div>
              <div class="portfolio-content__single">
                <h6 class="portfolio-content__sub-heading">
                  <span class="text-electric-violet-2">Project 03</span>/ 05
                </h6>
                <h2 class="portfolio-content__heading">Principle Of<br class="d-none d-xs-block"> Product Design</h2>
                <span class="portfolio-content__heading-small">By Mehmet Armande</span>
                <p class="portfolio-content__text" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">We are idea generators,goal seekers, challenge-thirsty professionals creators of unique interner projects. we deliver unconventional solutions, combining the most advanced web technologies, modern design and bold communication. For us, each project is a meaningful adventure, in which we become partners with our clients, on the road to perfection </p>
                <a href="#" class="btn btn-electric-violet-2 btn--lg-2 rounded-50">Launch project</a>
              </div>
              <div class="portfolio-content__single">
                <h6 class="portfolio-content__sub-heading">
                  <span class="text-electric-violet-2">Project 04</span>/ 05
                </h6>
                <h2 class="portfolio-content__heading">Principle Of<br class="d-none d-xs-block"> Product Design</h2>
                <span class="portfolio-content__heading-small">By Mehmet Armande</span>
                <p class="portfolio-content__text" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">We are idea generators,goal seekers, challenge-thirsty professionals creators of unique interner projects. we deliver unconventional solutions, combining the most advanced web technologies, modern design and bold communication. For us, each project is a meaningful adventure, in which we become partners with our clients, on the road to perfection </p>
                <a href="#" class="btn btn-electric-violet-2 btn--lg-2 rounded-50">Launch project</a>
              </div>
              <div class="portfolio-content__single">
                <h6 class="portfolio-content__sub-heading">
                  <span class="text-electric-violet-2">Project 05</span>/ 05
                </h6>
                <h2 class="portfolio-content__heading">Principle Of<br class="d-none d-xs-block"> Product Design</h2>
                <span class="portfolio-content__heading-small">By Mehmet Armande</span>
                <p class="portfolio-content__text" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">We are idea generators,goal seekers, challenge-thirsty professionals creators of unique interner projects. we deliver unconventional solutions, combining the most advanced web technologies, modern design and bold communication. For us, each project is a meaningful adventure, in which we become partners with our clients, on the road to perfection </p>
                <a href="#" class="btn btn-electric-violet-2 btn--lg-2 rounded-50">Launch project</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Services Area -->
    <div class="service-area service-area--l1 border-top border-default-color-2 bg-default">
      <div class="service-shape service-shape--l1">
        <img class="w-100" src="image/home-1/services-shape-l1.png" alt="">
      </div>
      <div class="container">
        <!-- Section Title -->
        <div class="row align-items-end justify-content-center">
          <div class="col-lg-5 col-md-12 col-xs-10">
            <div class="section-title text-center text-md-start" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
              <h2 class="section-title__heading">Eco-system <br>Partners</h2>

            </div>
          </div>
          <div class="col-lg-7 col-md-12 col-xs-10">
            <div class="section-title  text-center text-md-start" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
              <p class="section-title__description"><p>Here are some of the most notable names in the startup ecosystem we’ve hosted at our Gurugram HQ. <br>
              With regular events, talks and workshops, you’ll get to learn and hear from the best in the industry. </p></p>
            </div>
          </div>
        </div>
        <!--/ .Section Title -->
        <div class="service-items">
          <div class="row justify-content-center justify-content-md-start">
            <!-- Single Service -->
            <div class="col-lg-4 col-xs-6 col-10">
              <div class="widget widget--service text-center text-md-start" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true">
                <div class="widget__icon widget__icon--golden-tainoi mx-auto mx-md-0">
                  <img src="image/svg/athletics.svg" alt="">
                </div>
                <div class="widget__body">
                  <h5 class="widget__heading">2.5 Lakh</h5>
                  <p class="widget__description">Educational Institutions Network</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-xs-6 col-10">
              <div class="widget widget--service text-center text-md-start" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true">
                <div class="widget__icon widget__icon--ice-cold mx-auto mx-md-0">
                  <img src="image/svg/archery-target.svg" alt="">
                </div>
                <div class="widget__body">
                  <h5 class="widget__heading">80 +</h5>
                  <p class="widget__description">Global Technology + Perk Partners offering perks worth $20,00</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-xs-6 col-10">
              <div class="widget widget--service text-center text-md-start" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true">
                <div class="widget__icon widget__icon--anakiwaap mx-auto mx-md-0">
                  <img src="image/svg/money-coins.svg" alt="">
                </div>
                <div class="widget__body">
                  <h5 class="widget__heading">300 +</h5>
                  <p class="widget__description">Global Mentors + Entrepreneur</p>
                </div>
              </div>
            </div>
            <!--/ .Single Service -->
          </div>
        </div>
      </div>
    </div>
    <!--/ .Services Area -->

    <div class="brand-area brand-area--l2 bg-default-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="section-title--2 text-center">
              <h2 class="section-title--2__heading" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Alumni Startups / Portfolio</h2>
              <p class="section-title--2__description" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Meet some of our most promising alumni startups</p>
              <div class="section-title--2__button">
                <a class="btn-link--2 with--line border--primary" href="#" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" data-aos-once="true">Explore All</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-9" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
            <div class="brand-image-group brand-image-group--l2">
              <div class="brand-image-group--l2__image--main circle-126">
                <div class="img-0">
                  <img class="w-100" src="image/logo-only.png" alt="">
                </div>
              </div>
              <!-- Image -->
              <div class="brand-image-group--l2__single brand-image-group--l2__img-1 circle-91">
                <div class="brand-logo-1">
                  <img class="w-100" src="image/brand/brand1.png" alt="">
                </div>
              </div>
              <div class="brand-image-group--l2__single brand-image-group--l2__img-2 circle-103">
                <div class="brand-logo-2">
                  <img class="w-100" src="image/brand/brand2.png" alt="">
                </div>
              </div>
              <div class="brand-image-group--l2__single brand-image-group--l2__img-3 circle-98">
                <div class="brand-logo-3">
                  <img class="w-100" src="image/brand/brand3.png" alt="">
                </div>
              </div>
              <div class="brand-image-group--l2__single brand-image-group--l2__img-4 circle-99">
                <div class="brand-logo-4">
                  <img class="w-100" src="image/brand/brand4.png" alt="">
                </div>
              </div>
              <div class="brand-image-group--l2__single brand-image-group--l2__img-5 circle-95">
                <div class="brand-logo-5">
                  <img class="w-100" src="image/brand/brand5.png" alt="">
                </div>
              </div>
              <div class="brand-image-group--l2__single brand-image-group--l2__img-6 circle-113">
                <div class="brand-logo-6">
                  <img class="w-100" src="image/brand/brand6.png" alt="">
                </div>
              </div>
              <div class="brand-image-group--l2__single brand-image-group--l2__img-7 circle-88">
                <div class="brand-logo-7">
                  <img class="w-100" src="image/brand/brand7.png" alt="">
                </div>
              </div>
              <div class="brand-image-group--l2__single brand-image-group--l2__img-8 circle-108">
                <div class="brand-logo-8">
                  <img class="w-100" src="image/brand/brand8.png" alt="">
                </div>
              </div>
              <!-- Image Line -->
              <div class="brand-image-group--l2__line-1">
                <img class="w-100" src="image/home-2/brand-line-1.png" alt="">
              </div>
              <div class="brand-image-group--l2__line-2">
                <img class="w-100" src="image/home-2/brand-line-2.png" alt="">
              </div>
              <div class="brand-image-group--l2__line-3">
                <img class="w-100" src="image/home-2/brand-line-3.png" alt="">
              </div>
              <div class="brand-image-group--l2__line-4">
                <img class="w-100" src="image/home-2/brand-line-4.png" alt="">
              </div>
              <div class="brand-image-group--l2__line-5">
                <img class="w-100" src="image/home-2/brand-line-5.png" alt="">
              </div>
              <div class="brand-image-group--l2__line-6">
                <img class="w-100" src="image/home-2/brand-line-6.png" alt="">
              </div>
              <div class="brand-image-group--l2__line-7">
                <img class="w-100" src="image/home-2/brand-line-7.png" alt="">
              </div>
              <div class="brand-image-group--l2__line-8">
                <img class="w-100" src="image/home-2/brand-line-8.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="feature-section feature-section--l1 bg-orange-color dark-mode-texts">
      <!-- Section Shape -->
      <div class="feature-section--l1__shape-group">
        <img class="w-100" src="image/home-1/l1-half-circle-shape.png" alt="">
        <div class="img-1">
          <img class="w-100" src="image/home-1/l1-full-circle-shape.png" alt="">
        </div>
      </div>
      <!--/ .Section Shape -->
      <div class="container">
        <div class="row">
          <div class="col-xl-8 col-lg-10">
            <div class="section-title" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
              <h2 class="section-title__heading mb-5">A Global Philosoph</h2>
              <p class="section-title__description mt-8">
                Our investment approach is fundamentally driven by our worldwide network of managing directors. These passionate leaders interact with startup founders on a Regular basis, guiding, mentoring, and cultivating them along their journey.<br> The sheer scale of our reach results in a diversified strategy that provides investors with a uniquely qualified dealflow.</p><br>
                <a class="widget widget--feature nav-item col-lg-12 col-md-4 col-xs-6 col-8 me-md-3 me-lg-0 active" data-bs-toggle="pill" id="v-pills-home-tab" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                  <span class="widget-text">Become our Investor</span></a>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <div class="about-us-area about-us-area--l9 bg-default">
      <div class="container">
        <div class="row align-items-center justify-content-center g-0">
          <div class="col-xxl-6 col-lg-5 col-md-10">
            <div class="about-us-img about-us__image mb-4 mb-lg-0">
              <img class="w-100 home-video-img" src="image/video-img.jpg" alt="">
              <a class="video-btn btn-white popup-btn sonar-emitter-2 text-white" href="https://www.youtube.com/watch?time_continue=28&v=cNK33ouMhPs&feature=emb_logo"> <i
                            class="fa fa-play"></i> </a>
            </div>
          </div>
          <div class="col-xxl-6 col-lg-7 col-md-10">
            <div class="about-us-content-box bg-gorse">
              <!-- Section Title -->
              <div class="section-title section-title--l9">
                <h6 class="section-title__sub-heading text-electric-violet-2 sub-heading--electric-violet-2" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Founders Testimonial</h6>
                <h2 class="section-title__heading" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
                  Startup Speaks </h2>
                <p class="section-title__description" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Top of the list of dreams for many small firms and solo professionals is to win lucrative work with big corporate clients. A few decent projects can keep your business very healthy for a long time. The trouble is, those lucrative corporate contracts can be extremely tricky to land.</p>
              </div>
              <!--/ .Section Title -->
            </div>
          </div>
        </div>
      </div>
    </div>

    


    


    <div class="content-section content-section--l1-1 bg-default">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="section-title section-title--l9 text-center">
              <h2 class="section-title__heading aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
              Upcoming Event</h2>
              <p class="section-title--2__description aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Register and join Uincept programs for their live virtual or in-personal events!<br>
                Check back here often. As most events are scheduled, they will be added below!
              </p>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-xs-6">
            <img class="w-100" src="image/events/event1.png" alt="" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
          </div>

          <div class="col-xl-6 col-lg-6 col-xs-6">
            <img class="w-100" src="image/events/event2.jpg" alt="" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
          </div>
          
        </div>
      </div>
    </div>

    <div class="blog-area blog-area--l9 bg-default">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8">
            <!-- Section Title -->
            <div class="section-title section-title--l9 text-center">
              <h2 class="section-title__heading" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Guest At Uincept</h2>
            </div>
            <!--/ .Section Title -->
          </div>
        </div>
        <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
          <!--/ .Single Blogs -->
          <div class="col-lg-4 col-md-6 col-xs-10">
            <div class="blogs-post blogs-post--small">
              <img class="w-100" src="image/speaker/speaker1.jpg" alt="">
              <div class="hover-content">
                
                <a href="blog-details.html" class="hover-content__title">
                  Manoj Kohli 
                  </a>
                <ul class="hover-content__post-meta list-unstyled">
                  <li>
                    <a href="blog-details.html">Chairman, SoftBank India</a>
                    <!-- <a href="blog-details.html"> 0 Comments</a> -->
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--/ .Single Blogs -->
          <!--/ .Single Blogs -->
          <div class="col-lg-4 col-md-6 col-xs-10">
            <div class="blogs-post blogs-post--small">
              <img class="w-100" src="image/speaker/speaker2.jpg" alt="">
              <div class="hover-content">
                
                <a href="blog-details.html" class="hover-content__title">
                Raghav Verma</a>
                <ul class="hover-content__post-meta list-unstyled">
                  <li>
                    <a href="blog-details.html">
                    Co-founder, Chaayos</a>
                    <!-- <a href="blog-details.html"> 0 Comments</a> -->
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--/ .Single Blogs -->
          <!--/ .Single Blogs -->
          <div class="col-lg-4 col-md-6 col-xs-10">
            <div class="blogs-post blogs-post--small">
              <img class="w-100" src="image/speaker/speaker3.jpg" alt="">
              <div class="hover-content">
                
                <a href="blog-details.html" class="hover-content__title">
                  Sanjay Seth
                  </a>
                <ul class="hover-content__post-meta list-unstyled">
                  <li>
                    <a href="blog-details.html">Co-founder, Shopclues.com</a>
                    <!-- <a href="blog-details.html"> 0 Comments</a> -->
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--/ .Single Blogs -->
        </div>
      </div>
    </div>

    <div class="content-section content-section--l1-1 bg-default">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="section-title section-title--l9 text-center">
              <h2 class="section-title__heading aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
              Media Partners</h2>
            </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-xs-6">
            <img class="w-100" src="image/mediapartner/1.png" alt="" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
          </div>

          <div class="col-xl-2 col-lg-2 col-xs-6">
            <img class="w-100" src="image/mediapartner/2.png" alt="" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
          </div>

          <div class="col-xl-2 col-lg-2 col-xs-6">
            <img class="w-100" src="image/mediapartner/3.png" alt="" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
          </div>

          <div class="col-xl-2 col-lg-2 col-xs-6">
            <img class="w-100" src="image/mediapartner/4.png" alt="" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
          </div>

          <div class="col-xl-2 col-lg-2 col-xs-6">
            <img class="w-100" src="image/mediapartner/5.png" alt="" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
          </div>

          <div class="col-xl-2 col-lg-2 col-xs-6">
            <img class="w-100" src="image/mediapartner/6.png" alt="" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
          </div>
          
        </div>
      </div>
    </div>

    
    
    <!-- Footer Area -->
    <div class="cta-section cta-section--l1 dark-mode-texts">
      <div class="footer__shape-1">
        <img class="w-100" src="image/home-1/footer-shape.png" alt="">
      </div>
      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="300" data-aos-once="true">
          <div class="col-lg-7 col-md-8">
            <div class="section-title text-center">
              <h2 class="section-title__heading">To get Latest Updated <br class="d-none d-xs-block"> About Uincept.</h2>
              <!-- Newsletter -->
              <div class="newsletter-form  mx-auto newsletter--l1-2">
                <form action="https://finestdevs.com/.">
                  <div class="d-flex align-items-center justify-content-center flex-column flex-xs-row">
                    <input class="form-control " type="email" placeholder="Enter your email" required>
                    <button class=" btn btn--lg btn-primary text-white h-70" type="submit">Subscribe</button>
                  </div>
                </form>
              </div>
              <!--/ .Newsletter -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer-area--l1 dark-mode-texts">
      <div class="container">
        <div class="footer-area footer-area--l1">
          <div class="row ">
            <div class="col-lg-4 col-md-5 col-xs-7">
              <div class="footer-widgets">
                <!-- Brand Logo-->
                <div class="brand-logo mt-1 mb-8">
                  <a href="#">
                    <!-- light version logo (logo must be black)-->
                    <img src="image/png/logo-dark.png" alt="" class="light-version-logo">
                    <!-- Dark version logo (logo must be White)-->
                    <img src="image/png/uincept-white.png" alt="" class="dark-version-logo">
                  </a>
                </div>
                <p class="footer-widgets__text">The best
                  medicines & biggest<br class="d-none d-xs-block"> brands within 30 minutes at your<br class="d-none d-xs-block"> home. Experience the power of<br class="d-none d-xs-block"> MedCartel today.</p>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="row">
                <div class="col-md-4 col-xs-6">
                  <div class="footer-widgets">
                    <h4 class="footer-widgets__title">Company</h4>
                    <ul class="footer-widgets__list">
                      <li>
                        <a href="about-us.html">About us</a>
                      </li>
                      <li>
                        <a href="terms-page.html">Privacy Policy</a>
                      </li>
                      <li>
                        <a href="terms-page.html">Terms & Conditions</a>
                      </li>
                      <li>
                        <a href="testimonial-1.html">Reviews</a>
                      </li>
                      <li>
                        <a href="contact-1.html">Contact</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4 col-xs-6">
                  <div class="footer-widgets">
                    <h4 class="footer-widgets__title">More Links</h4>
                    <ul class="footer-widgets__list">
                      <li>
                        <a href="about-us.html">About us</a>
                      </li>
                      <li>
                        <a href="terms-page.html">Privacy Policy</a>
                      </li>
                      <li>
                        <a href="terms-page.html">Terms & Conditions</a>
                      </li>
                      <li>
                        <a href="testimonial-1.html">Reviews</a>
                      </li>
                      <li>
                        <a href="contact-1.html">Contact</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4 col-xs-7">
                  <div class="footer-widgets footer-widgets--1">
                    <h4 class="footer-widgets__title">Contact Details</h4>
                    <ul class="footer-widgets__list footer-widgets--address">
                      <li>
                        <i class="fa fa-map-marker-alt"></i>
                        <span>10th Floor, M3M Cosmopolitan 
                           <br class="d-block">Sector 66, Badshahpur 
                          <br class="d-block">Gurugram, Haryana, India-122001</span>
                      </li>
                      <li>
                        <i class="fa fa-phone-alt"></i>
                        <div class="list-content">
                          <a href="#">+31 62 19
                            22 705</a>
                          <span> 7 Days - 8am
                                                - 10pm </span>
                        </div>
                      </li>
                      <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:support@uincept.com">support@uincept.com</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-copyright footer-copyright--l1">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7">
              <div class="copyright text-center text-md-start">
                <p class="copyright__text">© 2022 Uincept, All Rights Reserved</p>
              </div>
            </div>
            <div class="col-md-5">
              <div class="footer-social-share dot-right footer-social-share--1">
                <ul class="list-unstyled d-flex align-items-center justify-content-center justify-content-md-end">
                  <li>
                    <a href="#">
                      <i
                                        class="fab fa-facebook-square"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i
                                        class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i
                                        class="fab fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--/ .Footer Area -->
    <!-- <script src="plugins/type-js/typed.min.js"></script>
    <script>
      var typed = new Typed('.highlight-text', {
        strings: ["business.", "agency."],
        typeSpeed: 80,
        backSpeed: 80,
        cursorChar: '',
        shuffle: true,
        smartBackspace: false,
        loop: true
      });
    </script> -->
  </div>
  <!-- Plugin's Scripts -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/jquery/jquery-migrate.min.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="plugins/nice-select/jquery.nice-select.min.js"></script>
  <script src="plugins/aos/aos.min.js"></script>
  <script src="plugins/counter-up/jquery.counterup.min.js"></script>
  <script src="plugins/counter-up/waypoints.min.js"></script>
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/skill-bar/skill.bars.jquery.js"></script>
  <script src="plugins/isotope/isotope.pkgd.min.js"></script>
  <!-- Activation Script -->
  <script src="js/menu.js"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="js/custom.js"></script>
  <script type="text/javascript">
    
    var swiperOptions = {
      loop: true,
      autoplay: {
        delay: 0,
        disableOnInteraction: false
      },
      slidesPerView: 2.5,
      spaceBetween: 30,
      speed: 5000,
      grabCursor: true,
      mousewheelControl: true,
      keyboardControl: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      }
    };
    var swiper = new Swiper(".featurednews", swiperOptions);

  </script>
</body>


</html>