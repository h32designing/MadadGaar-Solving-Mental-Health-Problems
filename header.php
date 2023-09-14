<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Madadgaar - Helping People For Their Mental Problems</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Admin_Panel/assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:madad_gaar786@gmail.com">madad_gaar786@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>0316 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
      <?php if (@$_SESSION['DatabaseRole'] == 'Admin' || @$_SESSION['DatabaseRole'] == 'Customer' || @$_SESSION['DatabaseRole'] == 'Peer') { ?>
      Welcome! You are Logged In: <i class="bi bi-envelope d-flex align-items-center"> <span><u><?php echo @$_SESSION['CustEmail'] ?></u></span></i>
      <?php } ?>
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center navbar-brand">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="Admin_Panel/assets/img/madadgaar.png" style="width:150px; max-height:150px;"alt="">
        <!-- <h1>MadadGaar<span>.</span></h1> -->
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li class="dropdown"><a href="explorepeers.php"><span>Strong Peers</span> </a>
            <ul>
            <li><a href="explorepeerscat.php?cat=Relationships">Relationships</a></li>
              <li><a href="explorepeerscat.php?cat=Mental Health">Mental Health</a></li>
              <li><a href="explorepeerscat.php?cat=Childhood Trauma">Childhood Trauma</a></li>
              <li><a href="explorepeerscat.php?cat=Anxiety">Anxiety</a></li>
              <li><a href="explorepeerscat.php?cat=Deppression">Deppression</a></li>
              <li><a href="explorepeerscat.php?cat=Parental Trauma">Parental-Trauma</a></li>
              <li><a href="explorepeerscat.php?cat=Stress">Stress</a></li>
              <li><a href="explorepeerscat.php?cat=Grief/Loss">Grief/Loss</a></li>
              <li><a href="explorepeerscat.php?cat=Bioplar Disorder">Bioplar-Disorder</a></li>
            </ul>
          </li>
          <li><a href="exploregroups.php">Conversation Groups</a></li>
          <li><a href="testimonials.php">Testimonials</a></li>

          <li><a href="form.php">Join As A Peer</a></li>

          <?php if (@$_SESSION['DatabaseRole'] == 'Admin' || @$_SESSION['DatabaseRole'] == 'Customer' || @$_SESSION['DatabaseRole'] == 'Peer') { ?>
            <li>
              <a href="Credentials.php?name=Logout">Logout
              <input type="hidden" name="Logout" value="" style="width:100%;">
              </a>
            </li>

            <li><a href="Admin_Panel/index.php">Goto Dashboard</a></li>

          <?php } 
          
          else{ ?>
            <li><a href="pages-login.php">Login</a></li>
           <?php }
          ?>

          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->
