
<?php include('connection.php')?>
<?php include('header.php');

$ID = $_GET['id'];
$query = "select * from peer p inner join schedule s on p.pid = s.peer_id where p.pid = '$ID'";
$GetData = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($GetData);

if($res)
{
  if(isset($_SESSION['userid']))
  {
    $email = $_SESSION['CustEmail'];
 
  ?>



  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <!-- <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Blog</h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div> -->
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

   
   <!-- ======= Contact Section ======= -->
   <section class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Book Your Session</h2>
          <p>95% People Get Comfort After Talking To The Peers.</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-person-heart flex-shrink-0"></i>
                <div>
                  <h4>Name:</h4>
                  <p> <b><?= @$res['pname'] ?></b></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                <h4>Days Availablity:</h4>
                  <p><b> <?= @$res['day'] ?></b></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Standard Time:</h4>
                  <p><b><?= @$res['time'] ?></b></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Open Hours:</h4>
                  <p>Mon-Sat: 10AM - 9PM</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form id="form" class="contact-form">
              <div class="row">

              <input type="hidden" class="form-control" name="pid" id="pid" value="<?= @$res['pid'] ?>" >

              <div class="col-md-6 form-group">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone No" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" value="<?= $email ?>" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="date" class="form-control" name="date"  id="date" placeholder="Date" required>
               <script>
                date.min = new Date().toISOString().split("T")[0];
               </script>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject Of Session" required>
              </div>

              <div class="form-group mt-3">
                <input type="time" readonly class="form-control" id ="time" value="<?= @$res['time'] ?>" name="time" placeholder="Time" >
              </div>
              
              
              <div class="text-center"><button type="submit" value ="submit" id="btn">Book</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include('footer.php')?>


  <script>
  $(document).ready(function(){
    $('#btn').click(function(e){
                e.preventDefault();

                let pid =  $('#pid').val()
                let phone = $('#phone').val();
                let email = $('#email').val();
                let date = $('#date').val();
                let time = $('#time').val();
                let subject = $('#subject').val();

                $.ajax({
                    url: 'scheduleins.php',
                    type: "POST",
                    data: {
                      pid: pid,
                      phone : phone,
                      email : email,
                      date : date,
                      subject : subject,
                      time : time
                       
                    },
                    cache: false,
                    success: function(data) {
                        alert(data);
                    },
                })



      


            })
  })
  </script>

  <?php
  }
  else{
    echo "<script>alert('Please Login First');window.location.href = 'pages-login.php'</script>";

  }
}

else{
  echo "<script>alert('Peer Has Not Decided His Schedule Yet');window.location.href = 'index.php'</script>";
}
?>