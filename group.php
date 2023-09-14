<?php include('header.php')?>


<?php include('connection.php')?>
<main id="main">


<?php
@$ID = $_GET['id'];
$query = "select * from groups where group_id = $ID";
$GetData = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($GetData);
$therapist = @$res['Therapist_Name'];

$q = "select * from therapist where Therapist_id = $therapist";
$data = mysqli_query($con, $q);
$therap = mysqli_fetch_assoc($data);

$date_now = date("Y-m-d");
$startdate = @$res['Start_Date'];



$count = "Select * from enrolled_in_groups where group_id = '$ID'";
$query3 = mysqli_query($con, $count);
$groupsearch = mysqli_num_rows($query3);
$limit = $res['Strength'];
$remaining = $limit - $groupsearch;

// $date_convert = date_format($startdate, "m/d/Y");
// echo $startdate;
// echo $date_now;
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
                      <img src="Admin_Panel/<?= @$res['group_image'] ?>" alt="">
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
                <h1><b><?= @$res['Title'] ?></b></h1>
                <ul>
                  <li><strong>Satrting: <?= @$res['Start_Date'] ?> | On <?= @$res['Source_of_communication'] ?></strong> </li>
                  <li><strong><?= @$res['Schedule'] ?></strong></li>
                  <li><strong><?= @$res['Duration'] ?> Sessions</strong> <span></span></li>
                  <li><strong>Max Persons: <?= @$res['Strength'] ?></strong> <a href="#"></a></li>
                  
                  <li><strong><h4 class="therapy"><b><?= @$therap['name'] ?> (Therapist)</b></h4></strong> 
                  
                  <?php
                  if($startdate > $date_now) {
                    if($groupsearch < $limit ){?>
                     
                     <?php
                      if($remaining == 1)
                          {?>
                        <li><a href="groupregister.php?id=<?=@$res['group_id']?>" class="btn-visit align-self-start">Register Now</a></li>  

                          <li><strong style="Color:red;">Only <?= @$remaining?> Slot Remaining!</strong> <a href="#"></a></li>
                          <?php
                          }
                          else
                          {?>
                          <li><a href="groupregister.php?id=<?=@$res['group_id']?>" class="btn-visit align-self-start">Register Now</a></li>  

                          <li><strong><?= @$remaining?> Slots Remaining</strong> <a href="#"></a></li>
                          <?php
                          }
                      }
                    else{?>

                        <li><a href="#" class="btn-visit align-self-start">Slots Fullfilled</a></li>
                        <?php }

                } 
                else{ ?>
                  <li><strong style="color:red;">Sorry! You Are Late Group Sessions Has Been Started</strong> <a href="#"></a></li>
                  <li><a href="#" class="btn-visit align-self-start disabled " aria-disabled="true" role="button">Register</a></li>
                  <?php
                   }
                  ?>
                </ul>
                
                
               
                <div class="row justify-content-between gy-4 mt-4">

         
              <div class="portfolio-description">
                <p>
                <?= @$res['Description'] ?>
                </p>
                <p>
                  Amet consequatur qui dolore veniam voluptatem voluptatem sit. Non aspernatur atque natus ut cum nam et. Praesentium error dolores rerum minus sequi quia veritatis eum. Eos et doloribus doloremque nesciunt molestiae laboriosam.
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
              <h2>Benefits Of Group Conversation</h2>
            
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


                <!-- ======= Stats Counter Section ======= -->
                <section id="stats-counter" class="stats-counter">
          <div class="container" data-aos="fade-up">
            <div class="row gy-4 align-items-center">

              <div class="col-lg-5">
                <img src="Admin_Panel/<?= @$therap['Image'] ?>" alt="" class="img-fluid">
              </div>

              <div class="col-lg-7">
              <h1>Meet your Facilitator</h1>

                <div class="stats-item d-flex align-items-center">
                  <p><strong>Therapist Name: </strong> <?= @$therap['name'] ?></p>
                </div><!-- End Stats Item -->
                <div class="stats-item d-flex align-items-center">
                  <p><strong>Age: </strong> <?= @$therap['age'] ?></p>
                </div><!-- End Stats Item -->

                <div class="stats-item d-flex align-items-center">
                  <p><strong>Qualification: </strong> <?= @$therap['qualification'] ?></p>
                </div><!-- End Stats Item -->
                <div class="stats-item d-flex align-items-center">
                  <p><strong>Experience: </strong> <?= @$therap['Experience'] ?></p>
                </div><!-- End Stats Item -->

                <div class="stats-item d-flex align-items-center">
                  <p><strong>Expertise: </strong> <?= @$therap['Expertise'] ?></p>
                </div><!-- End Stats Item -->

              </div>

            </div>

          </div>
    </section><!-- End Stats Counter Section -->


  </main><!-- End #main -->


  <?php include('footer.php');?>