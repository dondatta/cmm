<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        

        
         <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
     <!-- Styles -->
        <style>
            html, body {
                
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #f0f7fa;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
              <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
    <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="assets/img/logo.png" alt="chris michaels management">
        </div>

        <h1>Welcome to Chris Michaels Management </h1>
        <h2>We specialize in <span class="rotating">public relations, branding,marketing</span></h2>
        <div class="actions">
          <a href="#about" class="btn-get-started">Get Strated</a>
          <a href="#services" class="btn-services">Our Services</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index.html"><img src="assets/img/logo.png" alt=""></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="index.html">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.html">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
         <!-- <li><a href="#testimonials">Testimonials</a></li>-->
         <!-- <li><a href="#team">Team</a></li> -->
         
          
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">About Us</h3>
            <div class="section-title-divider"></div>
            <p class="section-description"> Chris Michaels management is an intelligence-driven model/influencer agency specializing in merging fashion and entertainment. The agency was founded in 2007 by Chris Michaels, with almost three decades of experience working in the fashion industry. Chris Michaels has, since day one, been a breeding ground for new talent, representing signature models and highly sought-after celebrities in response to business clients' demands for an international image.</p>
          </div>
        </div>
      </div>
      <div class="container about-container wow fadeInUp">
        <div class="row">

          <div class="col-lg-6 about-img">
            <img src="assets/img/about-img.jpg" alt="">
          </div>

          <div class="col-md-6 about-content">
            <h2 class="about-title">We have commitment to service</h2>
            <p class="about-text">
             Since its inception, models and celebrities from Chris Michaels have created some of the most memorable editorial and campaign images of the last decade and more, spanning international fashion brands through to independent magazines, with Chris Michaels's services including casting, negotiations and bookings.<br>  Chris Michaels has become renowned for our understanding that a booking is not just a booking, but part of a wider strategy, that having an international network is a necessity and that we must adapt to a market that is changing day by day. Working with Chris Michaels is now recognized as a stamp of credibility in the international fashion world.<br>
            </p>
            <p class="about-text">
           <br>We can provide your company with a varied range of specialized services, such as image campaigns, commercials, special appearances, celebrity endorsement, licensing, product placement, exclusivities, casting and counseling – a service both for today and for the fast-moving world of tomorrow.
            </p>
            <p class="about-text">
            
          </p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">We Can Do That.</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Chris Michaels Management is an award-winning campaign, PR, marketing, branding and public affairs firm with a proven record of success for its celebrities and clients. We have over 40 years of combined experience running campaigns across the United States. </p>
          </div>
        </div>
       <div class="row">
          <div class="col-md-4 service-item">
            <div class="service-icon"><i class="fa fa-desktop"></i></div>
            <h4 class="service-title">General Consulting</h4>
            <p class="service-description"> With over 50+ years of marketing experience under one roof, a solid team that knows how to win is what you have.</p>
          </div>
          <div class="col-md-4 service-item">
            <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
            <h4 class="service-title"><a href="">Media</a></h4>
            <p class="service-description">here is the one stop media connection, from ads to film & photography</p>
          </div>
          <div class="col-md-4 service-item">
            <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
            <h4 class="service-title"><a href="">Branding</a></h4>
            <p class="service-description">Building a brand from social media to terrestrial radio and television</p>
          </div>
          <div class="col-md-4 service-item">
            <div class="service-icon"><i class="fa fa-photo"></i></div>
            <h4 class="service-title"><a href="">Management</a></h4>
            <p class="service-description">Talent guidance, contract negotiations, or acquiring deals. We do it all</p>
          </div>
          <div class="col-md-4 service-item">
            <div class="service-icon"><i class="fa fa-road"></i></div>
            <h4 class="service-title"><a href="">Events</a></h4>
            <p class="service-description">Promotion and human resource management </p>
          </div>
          <div class="col-md-4 service-item">
            <div class="service-icon"><i class="fa fa-shopping-bag"></i></div>
            <h4 class="service-title"><a href="">Marketing</a></h4>
            <p class="service-description"> Product advertising and social media promotion are just a few of the marketing services we offer </p>
          </div>
      </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Subscrbe Section ======= -->
    <section id="subscribe">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-8">
            <h3 class="subscribe-title">Subscribe For Updates</h3>
            <p class="subscribe-text">Join our 1000+ subscribers and get access to the latest tools, freebies, product announcements and much more!</p>
          </div>
          <div class="col-md-4 subscribe-btn-container">
            <a class="subscribe-btn" href="#">Subscribe Now</a>
          </div>
        </div>
      </div>
    </section><!-- End Subscrbe Section -->

  
    
   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Chris Michaels Management</strong>. All Rights Reserved
          </div>
          <div class="credits">
            
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/wow/wow.min.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/superfish/superfish.min.js"></script>
  <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/morphext/morphext.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
        </div>
    </body>
</html>
