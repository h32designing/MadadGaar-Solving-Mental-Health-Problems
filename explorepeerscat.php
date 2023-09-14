<?php include('connection.php')?>
<?php include('header.php')?>


  <main id="main">
  <?php
      $cat = $_GET['cat'];
            $query = "select * from peer where pcategory = '$cat'";
            ($peerres = mysqli_query($con, $query)) or die('Incorrect Query!!');
        ?>
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2><?=$cat?></h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home /</a></li>
            <li>Explore Groups</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <section class="sample-page">
      <div data-aos="fade-up">
   <!-- ======= Portfolio Section ======= -->
   <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

      
        <div class="section-header">
          <h2>Our Verified Peers</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-product">Product</li>
              <li data-filter=".filter-branding">Branding</li>
              <li data-filter=".filter-books">Books</li>
            </ul><!-- End Portfolio Filters -->
          </div>

          <div class="row gy-4 portfolio-container">

          <?php while ($data = mysqli_fetch_assoc($peerres)) {?>
            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="<?= @$data['pimage'] ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img src="<?= @$data['pimage'] ?>" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="peer.php?id=<?=@$data['pid']?>" class="streched-link" title="More Details"><?= @$data['pname'] ?></h4>
                  <p><?= @$data['page'] ?> | <?= @$data['poccupation'] ?> | <?= @$data['pmaritalstatus'] ?></p>
                </a></div>
              </div>
            </div><!-- End Portfolio Item -->
          <?php } ?>


          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->
       

      </div>
    </section>

  </main><!-- End #main -->

  <?php include('footer.php')?>
