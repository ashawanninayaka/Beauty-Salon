
<?php
   include_once "database/connection.php";

   $account = 0;
   $noAccount = 0;
   $passwordNotMatch = 0;

 if(isset($_POST['comp'])){
    $cname = $_POST['c_name'];
    $cemail = $_POST['c_email'];
    $cmobile = $_POST['c_mobile'];
    $cmessage = $_POST['c_message'];

    $query = mysqli_query($con, "INSERT INTO complaints(c_name, c_email, c_mobile, c_message) VALUES('$cname', '$cemail', '$cmobile', '$cmessage')");
   
 }
 
  
?>

<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from themebeyond.com/pre/petco-prev/petco-live/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2023 08:32:26 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Beauty</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="/../Beauty/css/bootstrap.min.css">
        <link rel="stylesheet" href="/../Beauty/css/animate.min.css">
        <link rel="stylesheet" href="/../Beauty/css/magnific-popup.css">
        <link rel="stylesheet" href="/../Beauty/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="/../Beauty/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/../Beauty/css/nice-select.css">
        <link rel="stylesheet" href="/../Beauty/css/flaticon.css">
        <link rel="stylesheet" href="/../Beauty/css/odometer.css">
        <link rel="stylesheet" href="/../Beauty/css/jquery-ui.css">
        <link rel="stylesheet" href="/../Beauty/css/slick.css">
        <link rel="stylesheet" href="/../Beauty/css/default.css">
        <link rel="stylesheet" href="/../Beauty/css/style.css">
        <link rel="stylesheet" href="/../Beauty/css/responsive.css">
    </head>
    <body>

      

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header>
            <div id="sticky-header" class="menu-area">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo"><a href="index.html"><img src="/../Beauty/img/logo/logo.png" alt=""></a></div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li ><a href="home.php">Home</a></li>
                                            <li><a href="about.php">About Us</a></li>
                                            <li><a href="services.php">Services</a></li>
                                            <li class="menu-item-has-children"><a href="shop.php">Shop</a></li>
                                            <li class="menu-item-has-children"><a href="blog.php">Blog</a></li>
                                            <li class="active menu-item-has-children"><a href="contact.php">Contacts</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                           
                                        <li><a href="account.php"><i class="fa fa-user-circle"></i></a></li>
                                            <li><a href="shop.php"><i class="fa fa-shopping-cart"></i></a></li>
                                          
                                                
                                            <li class="header-btn"><a href="/../Beauty/" class="btn">Logout  <img src="/../Beauty/img/icon/w_pawprint.png" alt=""></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fas fa-times"></i></div>
                                    <div class="nav-logo"><a href="index.html"><img src="/../Beauty/img/logo/logo.png" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                   
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
                <div class="header-shape" data-background="/../Beauty/img/bg/header_shape.png"></div>
            </div>
          
        </header>
            <!-- header-search-end -->
        </header>
        <!-- header-area-end -->


        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="/../Beauty/img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">Contact Us</h2>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- contact-area -->
            <section class="contact-area pt-110 pb-110">
                <div class="container">
                    <div class="container-inner-wrap">
                        <div class="row justify-content-center justify-content-lg-between">
                            <div class="col-lg-6 col-md-8 order-2 order-lg-0">
                                <div class="contact-title mb-20">
                                    <h5 class="sub-title">Contact Us</h5>
                                    <h2 class="title">Let's Talk Question<span>.</span></h2>
                                </div>
                                <div class="contact-wrap-content">
                                   
                                <form  class="contact-form" method="POST">
                                        <div class="form-grp">
                                            <label for="name">Your Name </label>
                                            <input type="text"  name="c_name">
                                        </div>
                                       
                                        <div class="form-grp">
                                            <label for="email">Your Email </label>
                                            <input type="text"  placeholder="info.example@.com" name="c_email">
                                        </div>
                                        <div class="form-grp">
                                            <label for="email">Contact No </label>
                                            <input type="text"  name="c_mobile">
                                        </div>
                                        <div class="form-grp">
                                            <label for="message">Your Message </label>
                                            <textarea   placeholder="Opinion..." name="c_message"></textarea>
                                        </div>
                                       
                            
                                        <button class="btn" name="comp" >Send Now </button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6 col-md-8">
                                <div class="contact-info-wrap">
                                    <div class="contact-img">
                                        <img src="/../Beauty/img/images/contact_img.png" alt="">
                                    </div>
                                    <div class="contact-info-list">
                                        <ul>
                                            <li>
                                                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                                <div class="content">
                                                    <p>BEAUTY,Nikaweratiya,SL</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon"><i class="fas fa-phone-alt"></i></div>
                                                <div class="content">
                                                    <p>0769262642</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon"><i class="fas fa-envelope-open"></i></div>
                                                <div class="content">
                                                    <p> beauty@gmail.com</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="contact-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                          
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

            <!-- newsletter-area -->
            

        </main>
        <!-- main-area-end -->


        <!-- footer-start -->
        <?php include 'footer.php'; ?>
        <!-- footer-end -->





		<!-- JS here -->
        <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="/../Beauty/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="/../Beauty/js/bootstrap.min.js"></script>
        <script src="/../Beauty/js/isotope.pkgd.min.js"></script>
        <script src="/../Beauty/js/imagesloaded.pkgd.min.js"></script>
        <script src="/../Beauty/js/jquery.magnific-popup.min.js"></script>
        <script src="/../Beauty/js/owl.carousel.min.js"></script>
        <script src="/../Beauty/js/jquery.odometer.min.js"></script>
        <script src="/../Beauty/js/jquery.nice-select.min.js"></script>
        <script src="/../Beauty/js/jquery-ui.min.js"></script>
        <script src="/../Beauty/js/jquery.appear.js"></script>
        <script src="/../Beauty/js/slick.min.js"></script>
        <script src="/../Beauty/js/wow.min.js"></script>
        <script src="/../Beauty/js/plugins.js"></script>
        <script src="/../Beauty/js/main.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/pre/petco-prev/petco-live/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2023 08:32:27 GMT -->
</html>
