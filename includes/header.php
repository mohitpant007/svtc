<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SVTC - Trust</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/logo_new1.jpg" rel="icon">
    <link href="aassets/img/logo_new1.jpg" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/css/loader.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    
    <!-- =======================================================
  * Template Name: Active
  * Template URL: https://bootstrapmade.com/active-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/logo_new1.jpg" alt="">
                <!-- <h1 class="sitename">Active.</h1> -->
            </a>

    <nav id="navmenu" class="navmenu">
        <ul>
          <?php
          $current_page = basename($_SERVER['PHP_SELF']);
          
          ?>
          <li><a href="index" class="<?php echo $current_page == "index.php"?"active":""
          ?>"> Home</a></li>
          <li><a href="about" class="<?php echo $current_page == "about.php"?"active":""
          ?>">About</a></li>
          <li><a href="contact" class="<?php echo $current_page == "contact.php"?"active":""
          ?>">Contact</a></li>
          <li><a href="application-status" class="<?php echo $current_page == "application-status.php"?"active":""
          ?>">Application Status</a></li>
          <li><a href="donate" class="<?php echo $current_page == "donate.php"?"active":""
          ?>">Donate</a></li>
          <!-- <li><a href="#" class="loginBtn">Sigin <i class="fa fa-sign-in" aria-hidden="true"></i></a></li> -->
          <!-- <li><a href="blog.html">Blog</a></li>-->
           <?php if(isset($_SESSION['svtc_user_login']) && $_SESSION['svtc_user_login'] == 1){?>
          <li class="dropdown"><a href="#"><span>Welcome <?php echo $_SESSION['svtc_user_detais']['name'];?></span> <i class="fa fa-user"></i></a>
            <ul>
              <li><a href="scholarship-apply-form-step-1">Apply Scholarship </a></li>
              <li><a href="logout.php">Logout </a></li>
             
            </ul>
          </li>
          <?php } ?>
          
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

        </div>
    </header>
    