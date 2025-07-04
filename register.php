<?php
  include_once "database/connection.php";

  $account = 0;
  $noAccount = 0;
  $passwordNotMatch = 0;

  //  registration
  if(isset($_POST['CusReg'])){
    
    $nic = $_POST['nic'];
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $query = mysqli_query($con, "SELECT * FROM user WHERE nic='$nic'");
    $rows = mysqli_num_rows($query);

    if($rows > 0){
      $account = 1;
    }
    else{
      $query = mysqli_query($con,
        "INSERT INTO user(nic,name,sex,email,contact,address,password,role) VALUE('$nic','$name','$sex','$email','$contact','$address','$password',1)"
      );
      header("location: login.php");
    }
  }
  ?>

<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from themebeyond.com/pre/petco-prev/petco-live/breeder-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2023 08:32:12 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Beauty </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/odometer.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>

        

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header>
            
        <header>
            <div id="sticky-header" class="menu-area">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo"><a href="index.html"><img src="img/logo/logo.png" alt=""></a></div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class=" menu-item-has-children"><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About Us</a></li>
                                            <li><a href="services.php">Services</a></li>
                                            <li class="menu-item-has-children"><a href="shop.php">Shop</a></li>
                                            <li class="menu-item-has-children"><a href="blog.php">Blog</a></li>
                                            <li><a href="contact.php">Contacts</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                           
                                        <li><a href="login.php"><i class="fa fa-user-circle"></i></a></li>
                                            <li><a href="shop.php"><i class="fa fa-shopping-cart"></i></a></li>
                                          
                                                
                                            <li class="header-btn"><a href="login.php" class="btn">Sign In  <img src="img/icon/w_pawprint.png" alt=""></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fa fa-sign-out"></i></div>
                                    <div class="nav-logo"><a href="index.html"><img src="img/logo/logo.png" alt="" title=""></a>
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
                <div class="header-shape" data-background="img/bg/header_shape.png"></div>
            </div>
          
        </header>
        </header>
        <!-- header-area-end -->


        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">Create Account</h2>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
            <section class="breeder-details-area">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-6">
                    <aside class="breeder-sidebar">
                                <div class="widget breeder-widget">
                                    <div class="breeder-widget-title mb-20">
                                        <h5 class="title">Create In Your Account</h5>
                                    </div>
                                    <form action="#" class="sidebar-find-pets" method="POST">
                                 
                                    <div class="form-grp">
                                           <i class="fa fa-user"></i>
                                            <input type="text" placeholder="NIC" name="nic" id="contact-nic"onkeyup="validateNic()">
                                            <span id ="nic-error"></span>
                                            
                                            
                                        </div>
                                        <div class="form-grp">
                                           <i class="fa fa-user"></i>
                                            <input type="text" placeholder="Enter Name" name="name" id="contact-name"onkeyup="validateName()">
                                            <span id ="name-error"></span>
                                        </div>
                                        
                                        <div class="form-grp">
                                            <i class="fa fa-venus-mars"></i>
                                            <select name="sex" class="selected" name="sex" id="contact-gender" onkeyup="validateGender()">
                                                <option data-display>Gender</option>
                                                <option value="female">Female</option>
                                                <option value="male">Male</option>
                                            </select>
                                            <span id="gender-error"></span>
                                        </div>

                                        <div class="form-grp">
                                           <i class="fa fa-envelope"></i>
                                            <input type="text" placeholder="Email" name="email" id="contact-email"onkeyup="validateEmail()">
                                            <span id ="email-error"></span>
                                        </div>
                                        <div class="form-grp">
                                           <i class="fa fa-mobile"></i>
                                            <input type="text" placeholder="Mobile"name="contact" id="contact-phone"onkeyup="validatePhone()">
                                            <span id ="phone-error"></span>
                                        </div>
                                        <div class="form-grp">
                                           <i class="fa fa-map-marker"></i>
                                            <input type="text" placeholder="Address" name="address" id="contact-address"onkeyup="validateAddress()">
                                            <span id ="address-error"></span>
                                        </div>
                                        <div class="form-grp">
                                            <i class="fa fa-key"></i>
                                            <input type="password" placeholder="Password" name="password" id="contact-password"onkeyup="validatePassword()">
                                            <span id ="password-error"></span>
                                        </div>
                                      
                                      
                                           
                                       
                                        <span id ="subit-error" style="color: red;"></span>
                                        <button class="btn" name="CusReg" onclick="return validateForm()">CREATE ACCOUNT </button>
                                        
                                    </form>
                                </div>
                                <?php
                                    if($account == 1){
                                        echo '<script>
                                        alert("Account Already Exists.");  
                                        </script>';
                                    }
                                    elseif($noAccount == 1){
                                        echo '<script>
                                        alert("Account not Found.");  
                                        </script>';
                                    }
                                    elseif($passwordNotMatch == 1){
                                        echo '<script>
                                        alert("Your Password does not Match.");  
                                        </script>';
                                    }

                                    ?>
                            </aside>
                        </div>
                       
                        <div class="col-lg-6">
                            <div class="breeder-details-content">
                               
                                <div class="breeder-details-img">
                                    <img src="img/images/breeder_details.jpg" alt="">
                                </div>
                                <h4 class="title">Join Us</h4>
                                <p>We are a friendly team dedicated to bringing out your beauty</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breeder-details-area-end -->
           

          
        </main>
        <!-- main-area-end -->
<br><br><br>

        <!-- footer-start -->
        <?php include 'footer.php'; ?>
        <!-- footer-end -->





		<!-- JS here -->
        <script src="js/vendor/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.odometer.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/script.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/pre/petco-prev/petco-live/breeder-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2023 08:32:15 GMT -->
</html>
