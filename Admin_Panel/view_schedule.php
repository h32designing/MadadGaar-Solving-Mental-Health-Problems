<?php 
require("connection.php");
require("header.php");
require("sidebar.php");
$session = @$_SESSION['DatabaseRole'];
if (@$_SESSION['DatabaseRole'] == 'Peer' || @$_SESSION['DatabaseRole'] == 'Customer') {
  $id = @$_SESSION['peerid'];
  $select = "SELECT * FROM schedule inner join peer on pid = peer_id where peer_id = '$id'";
  $run = mysqli_query($con, $select);
  $data = mysqli_fetch_assoc($run);

  // Set Correct time format
  @$time = $data['time'];
  @$correct_time = date_create("$time" , timezone_open("Asia/Karachi"));
  @$time_format = date_format($correct_time, "h:i a");

  ?> 
  <main id="main" class="main">

      <div class="pagetitle">
        <h1>Schedule Table</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Schedule Details</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section">
        <div class="row">

          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Schedule Details</h5>
                <!-- Vertical Pills Tabs -->
              <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Days</button>
                  <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Time</button>
                  <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Action</button>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <?= @$data['day'] ?>
  
                </div>
                  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                  <?php echo $time_format ?>                  
                </div>
                  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                  <div class="text-center"><button class="btn btn-primary" value ="submit" id="btn"><a href="editschedule.php?id=<?= @$data['pid'] ?>" style="color:white;">Edit</a></button></div>
                  </div>
                </div>
              </div>
              <!-- End Vertical Pills Tabs -->

              </div>
            </div>

          </div>
        </div>
      </section>

  </main>

<?php } 

else {
  echo "<script>window.location.href = '../index.php'</script>";
}

require("footer.php");
?>
 

