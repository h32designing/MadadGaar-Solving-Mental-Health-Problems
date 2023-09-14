<?php include('header.php')?>


<?php include('connection.php')?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Peer Details</h2>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->
<?php
$ID = $_GET['id'];
$query = "select * from peer where pid = $ID";
$GetData = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($GetData);
$gender = @$res['pgender'];
$cat = @$res['pcategory'];

?>
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">
          <div class="row">

            <div class="col-lg-8">
              <div class="position-relative">
                <div class="slides-1 portfolio-details-slider swiper">
                  <div class="swiper-wrapper align-items-center">
      
                    <div class="swiper-slide">
                      <img src="<?= @$res['pimage'] ?>" alt="">
                    </div>
      
                    <!-- <div class="swiper-slide">
                      <img src="assets/img/portfolio/product-1.jpg" alt="">
                    </div>
      
                    <div class="swiper-slide">
                      <img src="assets/img/portfolio/branding-1.jpg" alt="">
                    </div>
      
                    <div class="swiper-slide">
                      <img src="assets/img/portfolio/books-1.jpg" alt="">
                    </div> -->
      
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
      
              </div>
            </div>
            <!-- <div class="col-lg-2"></div> -->
            <div class="col-lg-4">
              <div class="portfolio-info">
                <h1><b><?= @$res['pname'] ?></b></h1>
                <ul>
                  <li><strong><?= @$res['page'] ?> | <?= @$res['poccupation'] ?> | <?= @$res['pmaritalstatus'] ?></strong> </li>
                  <li><strong><?= @$res['plang'] ?></strong></li>
                  <li><strong>Price: </strong> <span>Free of Cost</span></li>
                  <li><strong>Email: </strong> <a href="#"><?= @$res['pemail']?></a></li>
                  <li><a href="bookshedule.php?id=<?= @$res['pid'] ?>" class="btn-visit align-self-start">Schedule Time</a></li>
                </ul>
                
                <h4 class="therapy"><i class="bi bi-star"></i> Have Taken Therapy</h4>
                <?php
                if($res['ptherapy'] == "Yes")
                {?>
                <style>
                  .therapy{
                    display: inline-block;
                    }
                </style>
                <?php }
                else{ ?>
                  <style>
                  .therapy{
                      display: none;
                      }
                  </style>
                <?php } ?>
                <div class="row justify-content-between gy-4 mt-4">

         
              <div class="portfolio-description">
                <p>
                <?= @$res['pbio'] ?>
                </p>
              
              </div>
              </div>
</div>
            </div>

             <!-- ======= Stats Counter Section ======= -->


          </div>
       

        <div class="row justify-content-between gy-4 mt-4">

         <div class = "col-lg-8">
            <div class="portfolio-description">
              <h2>Benefits Of Peer To Peer Conversation</h2>
            
            <section>
              <div class="container" data-aos="zoom-out">
                <div class="row justify-content-between">
                  <div class="col-lg-6" id="benefits">
                    <div class="col-lg-12 text-center text-lg-start">
                      <h2 class="cta-title">✓ Peer Intelligence & Coping strategies</h2>
                      <p class="cta-text"> Since your Peer has gone through something similar, you can exchange notes, learn from their experiences and find brand new perspectives about your common challenges</p>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="col-lg-12 text-center text-lg-start">
                      <h2 class="cta-title">✓ Validation & support From Peers</h2>
                      <p class="cta-text"> Madagar Conversations allow you to recognize that there are others who have had the same challenges as you. Talking about common emotions is a great source of hope and strength.</p>
                    </div>
                  </div>
                </div>
      
            </div>
          </section><!--  End Call To Action Section -->
        
            </div>
            </div>

          <div class="col-lg-4">
            <section id="stats-counter" class="stats-counter">
              <div class="container" data-aos="fade-up">
        
                <div class="row align-items-center">
        
              
                  <div class="col-lg-12">
        
                    <div class="stats-item d-flex align-items-center">
                      <span class="bi bi-heart-fill"></span>
                      <p><strong> Happy Clients</strong></p>
                    </div><!-- End Stats Item -->
        
                    <div class="stats-item d-flex align-items-center">
                      <span class="bi bi-activity"></span>
                      <p><strong>Projects</strong></p>
                    </div><!-- End Stats Item -->
        
                    <div class="stats-item d-flex align-items-center">
                      <span class="bi bi-activity"></span>
                      <p><strong>Hours Of Support</strong> </p>
                    </div><!-- End Stats Item -->
        
                  </div>
        
                </div>
        
              </div>
            </section><!-- End Stats Counter Section -->
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->


    <section id="portfolio" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">
     
        <?php
              $query = "select * from peer where pgender = '$gender' and pcategory ='$cat' and pid !='$ID' limit 3";
              ($peerres = mysqli_query($con, $query)) or die('Incorrect Query!!');
          ?>
          <div class="section-header">
            <h2>Similar Peers</h2>
          </div>

          <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

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


  <?php include('footer.php');?>