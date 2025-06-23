<?php
  include_once "database/connection.php";
  $name;
  session_start();
  $id = $_SESSION['uid'];

  $query = mysqli_query($con,"SELECT * FROM user WHERE nic='$id'");
  $row = mysqli_fetch_assoc($query);
  $name = $row['name'];
  
  if(isset($_POST['addpet'])){
     
   
    $pcatgory = $_POST['category'];
    $pbreed = $_POST['breed'];
    $pname = $_POST['p_name'];
    $page = $_POST['age'];
    $pgender = $_POST['gender'];
   
    

    $query = mysqli_query($con, "INSERT INTO pets(category,breed,p_name,age,gender,nic) VALUES('$pcatgory','$pbreed','$pname',$page,'$pgender','$id')");
  }
?>



<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from tunatheme.com/tf/html/broccoli-preview/broccoli/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 04:25:56 GMT -->
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
       
  
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="/../Beauty/css/style2.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="/../Beauty/css/responsive2.css">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->




		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

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
                                            <li><a href="contact.php">Contacts</a></li>
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
        <!-- header-area-end -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    
    <br><br>

    
   
   

    <!-- WISHLIST AREA START -->
    <div class="liton__wishlist-area pb-70 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- PRODUCT TAB AREA START -->
                    <div class="ltn__product-tab-area">
                    
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="ltn__tab-menu-list mb-50">
                                        <div class="nav">
                                            <a class="active show" data-toggle="tab" href="#liton_tab_1_1">Dashboard <i class="fas fa-home"></i></a>
                                           
                                          
                                            <a data-toggle="tab" href="#booking">Booking <i class="fas fa-arrow-down"></i></a>
                                            <a data-toggle="tab" href="#buy">Buy Product <i class="fas fa-arrow-down"></i></a>
                                        
                                            <a href="home.php">Home <i class="fas fa-sign-out-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="liton_tab_1_1">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <p>Hello <strong><?php echo $name; ?></strong> </p>
                                                <p>From your account dashboard you can view your details,booking details.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="ad">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <p>The following addresses will be used on the checkout page by default.</p>
                                                <div class="ltn__form-box">
                                                    <form action="#">
                                                      
                                                        <fieldset>
                                                            <legend>Password change</legend>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label>Current password (leave blank to leave unchanged):</label>
                                                                    <input type="password" name="ltn__name">
                                                                    <label>New password (leave blank to leave unchanged):</label>
                                                                    <input type="password" name="ltn__lastname">
                                                                    <label>Confirm new password:</label>
                                                                    <input type="password" name="ltn__lastname">
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                       
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="buy">
                                        <div class="ltn__myaccount-tab-content-inner">
                                        <div class="card">
                                        <div class="card-body">
                                        <div class="tab-pane show active" id="hoverable-rows-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-hover table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                               <th>No.</th>
                                                               <th>ID</th>
                                                               
                                                                <th>Product</th>
                                                                <th>Quantity</th>
                                                                <th>Price</th>
                                                                <th>Total</th>
                                                                <th>Shipping </th>
                                                                <th >Payment</th>
                                                                <th>Method</th>
                                                              
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $loop = 1;
                                                        $query = mysqli_query($con, "SELECT * FROM  boughtitems, shop WHERE shop.pid = boughtitems.itemid AND boughtitems.nic = '$id' ");
                                                        while ($row = mysqli_fetch_assoc($query)) {
                                                            $totalPrice = $row['qty'] * $row['price']; // Calculate the total price for the row
                                                            echo "<tr>
                                                                <td>".$loop."</td>
                                                                <td>".$row['orderId']."</td>
                                                              
                                                                <td>".$row['pname']."</td>
                                                                <td>".$row['qty']."</td>
                                                                <td>".$row['price']."</td>
                                                                <td>".$totalPrice."</td>
                                                                <td>".$row['status']."</td>
                                                                <td>".$row['payment']."</td>
                                                                <td><a href='pay.php?proid=".$row['orderId']."'<button class='pay'>PAY</button></a>
                                                                
                                                                </td>
                                                                
                                                            </tr>";
                                                            ++$loop;
                                                        }
                                                        ?>
                                                        
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->                     
                                            </div> <!-- end preview-->
                                            </div>
                                             </div> <!-- end preview-->
                                             
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="booking">
                                        <div class="ltn__myaccount-tab-content-inner">
                                        <div class="card">
                                        <div class="card-body">
                                        <h4 class="header-title">Face Threading Booking</h4>
                                        <div class="tab-pane show active" id="hoverable-rows-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-hover table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>B_ID</th>
                                                               
                                                                <th>Category</th>
                                                                <th>Age</th>
                                                                <th>Date</th>
                                                                <th>Time</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                         
                                                          
                                                         $loop = 1;
                                                         $query = mysqli_query($con, "SELECT * FROM availabletimes,user,booking,services WHERE  booking.user = user.nic AND booking.time = availabletimes.id AND services.id = booking.serviceType AND user = $id  ");
                                                         if($query){
                                                             while($row = mysqli_fetch_assoc($query)){
                                                                 if($row['date'] ==  NULL){
                                                                     continue;
                                                                 }
                                                                 else{
                                                                 echo '
                                                                     <tr>
                                                                         <td>'.$loop.'</td>
                                                                      
                                                                         <td>'.$row['bookingid'].'</td>
                                                                       
                                                                         <td>'.$row['category'].'</td>
                                                                         <td>'.$row['age'].'</td>
                                                                         <td>'.$row['date'].'</td>
                                                                         <td>'.$row['bookingtime'].'</td>
                                                                         <td>'.$row['status'].'</td>
                                                                        
                                                                         <td><a href="delete.php?cancel='.$row['bookingid'].'"<button class="delete">DELETE</button></a></td>
                                                                     </tr>';
                                                                     
                                                                 // loop here
                                                                 /* multi line comment*/    
                                                                 ++$loop;  
                                                                 }
                                                             }
                                                             }
                                                             
                                                     ?>  
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->   
                                                        
                                            </div> <!-- end preview-->
                                            
                                            </div>
                                            
                                             </div> <!-- end preview-->
                                             <br>
                                             <div class="card">
                                        <div class="card-body">
                                        <h4 class="header-title">Hair Cutting Services Booking</h4>
                                        <div class="tab-pane show active" id="hoverable-rows-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-hover table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>B_ID</th>
                                                               
                                                                <th>Category</th>
                                                                <th>Age</th>
                                                                <th>Date</th>
                                                                <th>Time</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                         
                                                          
                                                         $loop = 1;
                                                         $query = mysqli_query($con, "SELECT * FROM availabletimes,user,bookinghaircutting,services WHERE  bookinghaircutting.user = user.nic AND bookinghaircutting.time = availabletimes.id AND services.id = bookinghaircutting.serviceType AND user = $id  ");
                                                         if($query){
                                                             while($row = mysqli_fetch_assoc($query)){
                                                                 if($row['date'] ==  NULL){
                                                                     continue;
                                                                 }
                                                                 else{
                                                                 echo '
                                                                     <tr>
                                                                         <td>'.$loop.'</td>
                                                                      
                                                                         <td>'.$row['bookingid'].'</td>
                                                                     
                                                                         <td>'.$row['category'].'</td>
                                                                         <td>'.$row['age'].'</td>
                                                                         <td>'.$row['date'].'</td>
                                                                         <td>'.$row['bookingtime'].'</td>
                                                                         <td>'.$row['status'].'</td>
                                                                        
                                                                         <td><a href="delete.php?cancelother='.$row['bookingid'].'"<button class="delete">DELETE</button></a></td>
                                                                     </tr>';
                                                                     
                                                                 // loop here
                                                                 /* multi line comment*/    
                                                                 ++$loop;  
                                                                 }
                                                             }
                                                             }
                                                             
                                                     ?>  
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->   
                                                        
                                            </div> <!-- end preview-->
                                            
                                            </div>
                                            
                                             </div> <!-- end preview-->
                                             <br>
                                             <div class="card">
                                        <div class="card-body">
                                        <h4 class="header-title">Dressing Hair Makeup Booking</h4>
                                        <div class="tab-pane show active" id="hoverable-rows-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-hover table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>B_ID</th>
                                                               
                                                                <th>Category</th>
                                                                <th>Age</th>
                                                                <th>Date</th>
                                                                <th>Time</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                         
                                                          
                                                         $loop = 1;
                                                         $query = mysqli_query($con, "SELECT * FROM availabletimes,user,bookingdressing,services WHERE  bookingdressing.user = user.nic AND bookingdressing.time = availabletimes.id AND services.id = bookingdressing.serviceType AND user = $id  ");
                                                         if($query){
                                                             while($row = mysqli_fetch_assoc($query)){
                                                                 if($row['date'] ==  NULL){
                                                                     continue;
                                                                 }
                                                                 else{
                                                                 echo '
                                                                     <tr>
                                                                         <td>'.$loop.'</td>
                                                                      
                                                                         <td>'.$row['bookingid'].'</td>
                                                                        
                                                                         <td>'.$row['category'].'</td>
                                                                         <td>'.$row['age'].'</td>
                                                                         <td>'.$row['date'].'</td>
                                                                         <td>'.$row['bookingtime'].'</td>
                                                                         <td>'.$row['status'].'</td>
                                                                        
                                                                         <td><a href="delete.php?cancelgr='.$row['bookingid'].'"<button class="delete">DELETE</button></a></td>
                                                                     </tr>';
                                                                     
                                                                 // loop here
                                                                 /* multi line comment*/    
                                                                 ++$loop;  
                                                                 }
                                                             }
                                                             }
                                                             
                                                     ?>  
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->   
                                                        
                                            </div> <!-- end preview-->
                                            
                                            </div>
                                            
                                             </div> <!-- end preview-->
                                             <br>
                                             <div class="card">
                                        <div class="card-body">
                                        <h4 class="header-title">Manicure & Pedicure Services Booking</h4>
                                        <div class="tab-pane show active" id="hoverable-rows-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-hover table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>B_ID</th>
                                                               
                                                                <th>Category</th>
                                                                <th>Age</th>
                                                                <th>Date</th>
                                                                <th>Time</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                         
                                                          
                                                         $loop = 1;
                                                         $query = mysqli_query($con, "SELECT * FROM availabletimes,user,bookingmanicurepedicure,services WHERE  bookingmanicurepedicure.user = user.nic AND bookingmanicurepedicure.time = availabletimes.id AND services.id = bookingmanicurepedicure.serviceType AND user = $id  ");
                                                         if($query){
                                                             while($row = mysqli_fetch_assoc($query)){
                                                                 if($row['date'] ==  NULL){
                                                                     continue;
                                                                 }
                                                                 else{
                                                                 echo '
                                                                     <tr>
                                                                         <td>'.$loop.'</td>
                                                                      
                                                                         <td>'.$row['bookingid'].'</td>
                                                                         
                                                                         <td>'.$row['category'].'</td>
                                                                         <td>'.$row['age'].'</td>
                                                                         <td>'.$row['date'].'</td>
                                                                         <td>'.$row['bookingtime'].'</td>
                                                                         <td>'.$row['status'].'</td>
                                                                        
                                                                         <td><a href="delete.php?canceltesting='.$row['bookingid'].'"<button class="delete">DELETE</button></a></td>
                                                                     </tr>';
                                                                     
                                                                 // loop here
                                                                 /* multi line comment*/    
                                                                 ++$loop;  
                                                                 }
                                                             }
                                                             }
                                                             
                                                     ?>  
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->   
                                                        
                                            </div> <!-- end preview-->
                                            
                                            </div>
                                            
                                             </div> <!-- end preview-->
                                             <br>
                             
                                            </div>
                                            
                                        </div>
                                        
                                        
                             
                                            </div>
                                        </div>
                                        
                                       
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PRODUCT TAB AREA END -->
                </div>
            </div>
        </div>
    </div>
    <!-- WISHLIST AREA START -->

    
</div>
<!-- Body main wrapper end -->
    
		<!-- JS here -->
        <script src="/../Beauty/js/vendor/jquery-3.6.0.min.js"></script>
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
        <script src="/../Beauty/js/script.js"></script>
    
    <!-- Main JS -->
    <script src="/../Beauty/js/main2.js"></script>
  
</body>

<!-- Mirrored from tunatheme.com/tf/html/broccoli-preview/broccoli/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 04:25:57 GMT -->
</html>

