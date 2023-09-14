<?php include('connection.php')?>
<?php include('header.php')?>


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Explore Groups</h2>
              <p>Here you can find more prestigious group that you want. The details of valuable group members are given below. Please see your desire groups members with different categories. Please Scroll Down! </p>
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

      <?php
            $query1 = 'select * from groups';
            ($groups = mysqli_query($con, $query1)) or die('Incorrect Query!!');
        ?>
        <div class="section-header">
          <h2>Groups</h2>
          <p>Here Below Click On Any Group</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">


          <div class="row gy-4 portfolio-container">

          <?php while ($gdata = mysqli_fetch_assoc($groups)) {?>
            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="Admin_Panel/<?=@$gdata['group_image']?>" data-gallery="portfolio-gallery-app" class="glightbox"><img src="Admin_Panel/<?=@$gdata['group_image']?>" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="group.php?id=<?=@$gdata['group_id']?>" class="streched-link" title="More Details"><?=@$gdata['Title']?></h4>
                  <p><?=@$gdata['Duration']?> Sessions | Starting From: <?=@$gdata['Start_Date']?></p>
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
