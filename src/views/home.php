<?php require __DIR__ . "/../../components/includes.php" //Loading Req Files ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?=CFG::bank_name ?></title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/home/img/favicon.png" rel="icon">
    <link href="/home/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/home/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="/home/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/home/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="/home/vendor/owl.carousel/home/owl.carousel.min.css" rel="stylesheet">
    <link href="/home/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/home/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Day - v2.0.0
    * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <i class="icofont-envelope"></i> <a href="mailto:<?=CFG::contact_mail ?>"><?=CFG::contact_mail ?></a>
                <i class="icofont-phone"></i> <?=CFG::contact_phone ?>
            </div>
            <div class="social-links">
                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                <a href="#" class="skype"><i class="icofont-skype"></i></a>
                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
            </div>
        </div>
    </div>

  <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
        <h1 class="logo mr-auto"><a class="" href="/"><?=CFG::bank_name ?></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="home/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="<?=URL::auth_login ?>">Sign in</a></li>
                </ul>

            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
        <h1>Welcome to <?=CFG::bank_name?>!</h1>
        <h2><?=CFG::bank_title ?></h2>
        <a href="<?=URL::auth_create ?>" class="btn-get-started scrollto">Create Account</a>
    </div>
  </section>
  <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <h1>Our services</h1>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
        <div class="container">

            <div class="row">

            <div class="col-lg-4" data-aos="fade-up">
                <div class="box">
                <span>01</span>
                <h4>Best Service in the USA</h4>
                    <p>We give to our the best that we can offer.</p>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
                <div class="box">
                <span>02</span>
                <h4>24/7 Support</h4>
                    <p>If you have questiuons feel free to contact us at every time.</p>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="box">
                <span>03</span>
                <h4>Best online banking</h4>
                    <p>We have for our customer online banking panel.</p>
                </div>
            </div>

            </div>

        </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
        <div class="container" data-aos="zoom-in">

            <div class="row d-flex align-items-center">

            <div class="col-lg-2 col-md-4 col-6">
                <img src="home/img/clients/client-1.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <img src="home/img/clients/client-2.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <img src="home/img/clients/client-3.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <img src="home/img/clients/client-4.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <img src="home/img/clients/client-5.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <img src="home/img/clients/client-6.png" class="img-fluid" alt="">
            </div>

            </div>

        </div>
        </section><!-- End Clients Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
        <div class="container">

            <div class="section-title">
            <span>Services</span>
            <h2>Services</h2>
            <p>We can offer you that</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="icon-box">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4><a href="">Low Fees</a></h4>
                    <p>Every transaction haves fees but our are the lowest!</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
                    <div class="icon-box">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4><a href="">Account Management</a></h4>
                    <p>If you have multiple accounts to manage, we will give you an manager for that!</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                    <h4><a href="">Credit Cards</a></h4>
                    <p>Get your free credit card here!</p>
                    </div>
                </div>

            </div>

        </div>
        </section><!-- End Services Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <span>Contact</span>
                <h2>Contact</h2>
                <p>If you have any questions or similar, please inquire here.</p>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p><?=CFG::contact_mail ?></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p><?=CFG::contact_phone ?></p>
                    </div>
                </div>

            </div>

            <div class="row" data-aos="fade-up">

            <div class="col-lg-6 ">
                <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>

            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-row">
                    <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

            </div>

        </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col">
            <div class="footer-info">
              <h3><?=CFG::bank_name ?></h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> <?=CFG::contact_phone ?><br>
                <strong>Email:</strong> <?=CFG::contact_mail ?><br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span><?=CFG::bank_name ?></span></strong>. All Rights Reserved
            </div>
            <div class="credits">

                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->

                Designed by <a href="https://bootstrapmade.com/"><?=CFG::bank_name ?> Team</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="/home/vendor/jquery/jquery.min.js"></script>
    <script src="/home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/home/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="/home/vendor/php-email-form/validate.js"></script>
    <script src="/home/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/home/vendor/venobox/venobox.min.js"></script>
    <script src="/home/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="/home/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="home/js/main.js"></script>

</body>

</html>