<?php include('connection.php')?>
<?php include('header.php')?>


  <main id="main">



       <!-- ======= Our Services Section ======= -->
   <section id="services" class="services sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Testimonials</h2>
        <p>Valuable Feedbacks</p>
      </div>

      
      <?php
            $query1 = 'select * from feedback';
            ($groups = mysqli_query($con, $query1)) or die('Incorrect Query!!');
        ?>

      <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

      <?php while ($gdata = mysqli_fetch_assoc($groups)) {?>
        <div class="col-lg-4 col-md-6">
          <div class="service-item position-relative">
          
            <h3><?=@$gdata['title']?></h3>
            <p><?=@$gdata['description']?></p>
            <a href="#" class="readmore stretched-link"><b>-<?=@$gdata['name']?></b> </a>
          </div>
        </div><!-- End Service Item -->
        <?php } ?>


      </div>

    </div>
  </section><!-- End Our Services Section -->


  </main><!-- End #main -->

  <?php include('footer.php')?>
