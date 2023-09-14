<?php 
require("connection.php");
require("header.php");
require("sidebar.php");

if (@$_SESSION['DatabaseRole'] == 'Admin') {
  $date = date('Y-m-d');

  $select = "SELECT * FROM `enrolled_in_schedule` INNER JOIN peer
  ON peer.pid = enrolled_in_schedule.peer_id
  INNER JOIN user
  ON user.userid = enrolled_in_schedule.user_id where date >= '$date' order by `date` ASC";
  $run = mysqli_query($con, $select);
  
  ?> 
  <main id="main" class="main">
   
  <div class="row">
    <div class="col-lg-4">
        <div class="pagetitle">
            <h1>Sessions Table</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Session Details</li>
              </ol>
            </nav>
          </div><!-- End Page Title -->
    </div>
  <div class="col-lg-8">
  <a type="button" href="pastsessions.php" class="btn btn-dark"><i class="bi bi-folder"></i> View Past Sessions</a>

  </div>
  </div>
      <?php
      
      while($data = mysqli_fetch_assoc($run))
        {
          $time = $data['time'];
          $correct_time = date_create("$time" , timezone_open("Asia/Karachi"));
          $time_format = date_format($correct_time, "h:i a");
          ?> 

      <section class="section">
        <div class="row">

          <div class="col-lg-12">
      

           
          <div class="card">
              <div class="card-body">
                <h5 class="card-title">Session # <?= $data['enrolled_id'] ?></h5>

                <!-- Vertical Pills Tabs -->
         
              <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home<?= $data['enrolled_id'] ?>" type="button" role="tab" aria-controls="v-pills-home<?= $data['enrolled_id'] ?>" aria-selected="true">Details</button>
                  <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile<?= $data['enrolled_id'] ?>" type="button" role="tab" aria-controls="v-pills-profile<?= $data['enrolled_id'] ?>" aria-selected="false">Date And Time</button>
                  <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages<?= $data['enrolled_id'] ?>" type="button" role="tab" aria-controls="v-pills-messages<?= $data['enrolled_id'] ?>" aria-selected="false">Status</button>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-home<?= $data['enrolled_id'] ?>" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  User <b><?=  $data['name'] ?></b> Have A Session With : <b><?= $data['pname'] ?></b> <br> <br>
                  On Topic: <b><?= $data['title'] ?> </b>
  
                </div>
                  <div class="tab-pane fade" id="v-pills-profile<?= $data['enrolled_id'] ?>" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                  <b>Date:</b> <?= $data['date'] ?> <br> <b>Time: </b> <?= $time_format ?> <br> <b>Day: </b> <?= $data['day'] ?>        
                </div>
                  <div class="tab-pane fade" id="v-pills-messages<?= $data['enrolled_id'] ?>" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                  <div class="text-center">  <button type="button" class="btn btn-info mb-2">
                To Be Taken Soon <span class="badge bg-white text-info"></span>
              </button></div>
                  </div>
                </div>
              </div>
              <br>
              <br>
              <!-- End Vertical Pills Tabs -->
        

              </div>
            </div>

          </div>
        </div>
      </section>
    <?php
  } ?>
  </main>
  
  <?php 
} 

else {
  echo "<script>window.location.href = '../index.php'</script>";
}

require("footer.php");
?>
 

