<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Support</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<?php
session_start();
if (@$_SESSION['DatabaseRole'] == 'Customer' || @$_SESSION['DatabaseRole'] == 'Peer' ) {
  ?>

  <body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
        <div class="d-flex justify-content-center py-4">
                <a href="index.php" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Contact Our Support For Any Issue Or Major Complain</span>
                </a>
              </div><!-- End Logo -->
        <section class="section contact">

<div class="row gy-4">

  <div class="col-xl-6">

    <div class="row">
      <div class="col-lg-6">
        <div class="info-box card">
          <i class="bi bi-geo-alt"></i>
          <h3>Address</h3>
          <p>A108 Adam Street, Gulshan-e-Iqbal
          Karachi, Pakistan</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="info-box card">
          <i class="bi bi-telephone"></i>
          <h3>Call Us</h3>
          <p>0316 55488 55<br>0315 254445 41</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="info-box card">
          <i class="bi bi-envelope"></i>
          <h3>Email Us</h3>
          <p>hamza@madadgaar.com<br>furqan@madadgaar.com</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="info-box card">
          <i class="bi bi-clock"></i>
          <h3>Open Hours</h3>
          <p>Monday - Friday<br>9:00AM - 05:00PM</p>
        </div>
      </div>
    </div>

  </div>

  <div class="col-xl-6">
    <div class="card p-4">
        <!-- Floating Labels Form -->
        <form class="row g-3" method="post" action="crud_operations/contactins.php">
                    <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="name" id="floatingName" placeholder="Name">
                        <label for="floatingName">Name</label>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingPassword" placeholder="Email">
                        <label for="floatingPassword">Email</label>
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" name="subject" class="form-control" id="floatingPassword" placeholder="Subject">
                        <label for="floatingPassword">Subject</label>
                    </div>
                    </div>
                    <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" name="message" placeholder="Message" id="floatingTextarea" style="height: 100px;"></textarea>
                        <label for="floatingTextarea">Your Message Here: </label>
                    </div>
                    </div>
               
                    
                    <div class="col-md-12">
                        <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </div>
                </form><!-- End floating Labels Form -->
    </div>

  </div>

</div>

</section>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
<?php
}
else{
  echo "window.location.href='index.php'";
}

?>



</html>