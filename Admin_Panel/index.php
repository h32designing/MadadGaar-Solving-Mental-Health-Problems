<?php 
require("header.php");
require("sidebar.php");
require("connection.php");
if (@$_SESSION['DatabaseRole'] == 'Admin') {
  ?>  
 <!-- Grapical Representation start here-->
 <main id="main" class="main">

          <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </nav>
          </div><!-- End Page Title -->

          <section class="section dashboard">
          <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
              <div class="row">

                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-6">
                  <div class="card info-card sales-card">

              

                    <div class="card-body">
                      <h5 class="card-title">Peers Joined <span>| Till Today</span></h5>

                      <?php
                        $query = 'select * from peer';
                        ($peerres = mysqli_query($con, $query)) or die('Incorrect Query!!');
                        $peerrows = mysqli_num_rows($peerres);
                      ?>
                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-person-plus-fill"></i>
                        </div>
                        <div class="ps-3">
                          <h6><?= $peerrows?></h6>
                          <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Increasing</span>

                        </div>
                      </div>
                    </div>

                  </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-6">
                  <div class="card info-card revenue-card">

                    

                    <div class="card-body">
                      <h5 class="card-title">Users Registered <span>| Till Today</span></h5>
                      <?php
                        $query2 = 'select * from user';
                        ($userres = mysqli_query($con, $query2)) or die('Incorrect Query!!');
                        $userrows = mysqli_num_rows($userres);
                      ?>
                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-currency-dollar"></i>
                        </div>
                        <div class="ps-3">
                          <h6><?= $userrows?></h6>
                          <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Increasing</span>

                        </div>
                      </div>
                    </div>

                  </div>
                </div><!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-xxl-4 col-xl-12">

                  <div class="card info-card customers-card">

                  
                    <div class="card-body">
                      <h5 class="card-title">Group Session <span>| Till Today</span></h5>
                      <?php
                        $query3 = 'select * from enrolled_in_groups';
                        ($groupsesres = mysqli_query($con, $query3)) or die('Incorrect Query!!');
                        $groupsesrows = mysqli_num_rows($groupsesres);
                      ?>
                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                          <h6><?= $groupsesrows?></h6>
                          <span class="text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Increasing</span>

                        </div>
                      </div>

                    </div>
                  </div>

                </div><!-- End Customers Card -->

                <!-- Customers Card -->
                  <div class="col-xxl-12 col-xl-12">

                    <div class="card info-card customers-card">



                      <div class="card-body">
                        <h5 class="card-title">Peer To Peer Session <span>| Till Today</span></h5>
                        <?php
                          $query4 = 'select * from enrolled_in_schedule';
                          ($peersesres = mysqli_query($con, $query4)) or die('Incorrect Query!!');
                          $peersesrows = mysqli_num_rows($peersesres);
                        ?>
                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people"></i>
                          </div>
                          <div class="ps-3">
                            <h6><?= $peersesrows?></h6>
                            <span class="text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Increasing</span>

                          </div>
                        </div>

                      </div>
                  </div>

                      <!-- Top Selling -->
              <div class="col-12">
                <div class="card top-selling overflow-auto">

                  
                  <div class="card-body pb-0">
                    <h5 class="card-title">Top 5 Peers <span></span></h5>
                    <?php
                    $select = "Select * from p_remarks inner join peer on p_remarks.pid = peer.pid where p_remarks.total > 0 ORDER by positive DESC limit 5";
                    $run = mysqli_query($con, $select);
                    ?>

                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th scope="col">Preview</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Positive</th>
                          <th scope="col">Negative</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php while($data = mysqli_fetch_assoc($run)){ ?>
                        <tr>
                          <th scope="row"><a href="#"><img src="../<?= $data['pimage'] ?>" alt=""></a></th>
                          <td><a href="peer_detail.php?id=<?= $data['pid'] ?>" class="text-primary fw-bold"><?= $data['pname'] ?></a></td>
                          <td><?= $data['pemail'] ?></td>
                          <td class="fw-bold"><?= $data['positive'] ?></td>
                          <td><?= $data['negative'] ?></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>

                  </div>

                </div>
              </div><!-- End Top Selling -->

          </div><!-- End Customers Card -->

                

              </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">





              <!-- Website Traffic -->
              <div class="card">
                

                <div class="card-body pb-0">
                  <h5 class="card-title">Peers Traffic <span>| Till Today</span></h5>
                  <?php 
                  $q1 = "SELECT * FROM `peer` WHERE pmarketing = 'Instagram'";
                  $res1 = mysqli_query($con, $q1);
                  $instarows = mysqli_num_rows($res1);

                  $q2 = "SELECT * FROM `peer` WHERE pmarketing = 'Linkedin'";
                  $res2 = mysqli_query($con, $q2);
                  $linkedinrows = mysqli_num_rows($res2);

                  $q3 = "SELECT * FROM `peer` WHERE pmarketing = 'Facebook'";
                  $res3 = mysqli_query($con, $q3);
                  $fbrows = mysqli_num_rows($res3);

                  $q4 = "SELECT * FROM `peer` WHERE pmarketing = 'Google'";
                  $res4 = mysqli_query($con, $q4);
                  $googlerows = mysqli_num_rows($res4);
                  
                  $q5 = "SELECT * FROM `peer` WHERE pmarketing = 'Existing Peer'";
                  $res5 = mysqli_query($con, $q5);
                  $peerrows = mysqli_num_rows($res5);
                  
                  ?>
                  <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      echarts.init(document.querySelector("#trafficChart")).setOption({
                        tooltip: {
                          trigger: 'item'
                        },
                        legend: {
                          top: '5%',
                          left: 'center'
                        },
                        series: [{
                          name: 'Reached Through',
                          type: 'pie',
                          radius: ['40%', '70%'],
                          avoidLabelOverlap: false,
                          label: {
                            show: false,
                            position: 'center'
                          },
                          emphasis: {
                            label: {
                              show: true,
                              fontSize: '18',
                              fontWeight: 'bold'
                            }
                          },
                          labelLine: {
                            show: false
                          },
                          data: [{
                              value: <?= $instarows?>,  
                              name: 'Instagram'
                            },
                            {
                              value: <?= $fbrows?>,
                              name: 'Facbook'
                            },
                            {
                              value: <?= $peerrows?>,
                              name: 'Existing Peer'
                            },
                            {
                              value: <?= $linkedinrows?>,
                              name: 'Linkedin'
                            },
                            {
                              value: <?= $googlerows?>,
                              name: 'Google'
                            }
                          ]
                        }]
                      });
                    });
                  </script>

                </div>
              </div><!-- End Website Traffic -->

            </div><!-- End Right side columns -->

          </div>
          </section>

</main><!-- End #main -->
<?php }
elseif(@$_SESSION['DatabaseRole'] == 'Customer'){
  ?>
 <main id="main" class="main">

      <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

          <?php
            $id = $_SESSION['userid'];
            $date = date('Y-m-d');
            $select = "SELECT * FROM enrolled_in_schedule inner join peer on pid = peer_id where user_id = '$id' and `date` = '$date' ";
            $run = mysqli_query($con, $select);
            $rows = mysqli_num_rows($run);
          ?>
      <!-- Sales Card -->
      <div class="col-xxl-4 col-md-12">
          <section class="section">
            <div class="row">

              <div class="col-lg-12">

                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Today's Session</h5>

                    <!-- Vertical Pills Tabs -->
                    <?php
                    if($rows>0)
                    { 
                      $data = mysqli_fetch_assoc($run);
                      @$time = $data['time'];
                      @$correct_time = date_create("$time" , timezone_open("Asia/Karachi"));
                      @$time_format = date_format($correct_time, "h:i a");
                      ?>
                  <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home<?= $data['enrolled_id'] ?>" type="button" role="tab" aria-controls="v-pills-home<?= $data['enrolled_id'] ?>" aria-selected="true">Details</button>
                      <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile<?= $data['enrolled_id'] ?>" type="button" role="tab" aria-controls="v-pills-profile<?= $data['enrolled_id'] ?>" aria-selected="false">Date And Time</button>
                      <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages<?= $data['enrolled_id'] ?>" type="button" role="tab" aria-controls="v-pills-messages<?= $data['enrolled_id'] ?>" aria-selected="false">Action</button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-home<?= $data['enrolled_id'] ?>" role="tabpanel" aria-labelledby="v-pills-home-tab">
                      You Have A Session With : <b><?= $data['pname'] ?></b> <br> <br>
                      On Topic: <b><?= $data['title'] ?> </b>
      
                    </div>
                      <div class="tab-pane fade" id="v-pills-profile<?= $data['enrolled_id'] ?>" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                      <b>Date:</b> <?= $data['date'] ?> <br> <b>Time: </b> <?= $time_format ?> <br> <b>Day: </b> <?= $data['day'] ?>        
                    </div>
                      <div class="tab-pane fade" id="v-pills-messages<?= $data['enrolled_id'] ?>" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                      <div class="text-center"><button class="btn btn-primary" value ="submit" id="btn"><a href="Realtimechat/index.php?id=<?= $data['peer_id'] ?> " style="color:white;">Start Chat</a></button></div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <br>
                  <!-- End Vertical Pills Tabs -->
                  <?php 
                  } 
                  else{ ?>
                  <h3 class="card-title">There is No Session For Today</h3>


                  <?php 
                  }
                    ?>
            

                  </div>
                </div>

              </div>
            </div>
          </section>
      </div><!-- End Sales Card -->
            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

          

                <div class="card-body">
                  <h5 class="card-title">Peers Joined <span>| Till Today</span></h5>

                  <?php
                    $query = 'select * from peer';
                    ($peerres = mysqli_query($con, $query)) or die('Incorrect Query!!');
                    $peerrows = mysqli_num_rows($peerres);
                  ?>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person-plus-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $peerrows?></h6>
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Increasing</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                

                <div class="card-body">
                  <h5 class="card-title">Users Registered <span>| Till Today</span></h5>
                  <?php
                    $query2 = 'select * from user';
                    ($userres = mysqli_query($con, $query2)) or die('Incorrect Query!!');
                    $userrows = mysqli_num_rows($userres);
                  ?>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $userrows?></h6>
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Increasing</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

              
                <div class="card-body">
                  <h5 class="card-title">Group Session <span>| Till Today</span></h5>
                  <?php
                    $query3 = 'select * from enrolled_in_groups';
                    ($groupsesres = mysqli_query($con, $query3)) or die('Incorrect Query!!');
                    $groupsesrows = mysqli_num_rows($groupsesres);
                  ?>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $groupsesrows?></h6>
                      <span class="text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Increasing</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Customers Card -->
              <div class="col-xxl-12 col-xl-12">

                <div class="card info-card customers-card">



                  <div class="card-body">
                    <h5 class="card-title">Peer To Peer Session <span>| Till Today</span></h5>
                    <?php
                      $query3 = 'select * from enrolled_in_groups';
                      ($groupsesres = mysqli_query($con, $query3)) or die('Incorrect Query!!');
                      $groupsesrows = mysqli_num_rows($groupsesres);
                    ?>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6><?= $groupsesrows?></h6>
                        <span class="text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Increasing</span>

                      </div>
                    </div>

                  </div>
              </div>

      </div><!-- End Customers Card -->

            

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">





          <!-- Website Traffic -->
          <div class="card">
            

            <div class="card-body pb-0">
              <h5 class="card-title">Peers Traffic <span>| Till Today</span></h5>
              <?php 
              $q1 = "SELECT * FROM `peer` WHERE pmarketing = 'Instagram'";
              $res1 = mysqli_query($con, $q1);
              $instarows = mysqli_num_rows($res1);

              $q2 = "SELECT * FROM `peer` WHERE pmarketing = 'Linkedin'";
              $res2 = mysqli_query($con, $q2);
              $linkedinrows = mysqli_num_rows($res2);

              $q3 = "SELECT * FROM `peer` WHERE pmarketing = 'Facebook'";
              $res3 = mysqli_query($con, $q3);
              $fbrows = mysqli_num_rows($res3);

              $q4 = "SELECT * FROM `peer` WHERE pmarketing = 'Google'";
              $res4 = mysqli_query($con, $q4);
              $googlerows = mysqli_num_rows($res4);
              
              $q5 = "SELECT * FROM `peer` WHERE pmarketing = 'Existing Peer'";
              $res5 = mysqli_query($con, $q5);
              $peerrows = mysqli_num_rows($res5);
              
              ?>
              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Reached Through',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: <?= $instarows?>,  
                          name: 'Instagram'
                        },
                        {
                          value: <?= $fbrows?>,
                          name: 'Facbook'
                        },
                        {
                          value: <?= $peerrows?>,
                          name: 'Existing Peer'
                        },
                        {
                          value: <?= $linkedinrows?>,
                          name: 'Linkedin'
                        },
                        {
                          value: <?= $googlerows?>,
                          name: 'Google'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->

        </div><!-- End Right side columns -->

      </div>
      </section>

</main><!-- End #main -->

<?php }
elseif(@$_SESSION['DatabaseRole'] == 'Peer'){
  ?>
 <main id="main" class="main">

      <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
            <?php
              $id = $_SESSION['peerid'];
              $date = date('Y-m-d');
            $select = "SELECT * FROM enrolled_in_schedule inner join user on user_id = userid where peer_id = '$id' and `date` = '$date'";
            $run = mysqli_query($con, $select);
            $rows = mysqli_num_rows($run);
          ?>
      <!-- Sales Card -->
      <div class="col-xxl-4 col-md-12">
          <section class="section">
            <div class="row">

              <div class="col-lg-12">

                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Today's Session</h5>

                    <!-- Vertical Pills Tabs -->
                    <?php
                    if($rows>0)
                    { 
                      $data = mysqli_fetch_assoc($run);
                      @$time = $data['time'];
                      @$correct_time = date_create("$time" , timezone_open("Asia/Karachi"));
                      @$time_format = date_format($correct_time, "h:i a");
                      ?>
                  <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home<?= $data['enrolled_id'] ?>" type="button" role="tab" aria-controls="v-pills-home<?= $data['enrolled_id'] ?>" aria-selected="true">Details</button>
                      <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile<?= $data['enrolled_id'] ?>" type="button" role="tab" aria-controls="v-pills-profile<?= $data['enrolled_id'] ?>" aria-selected="false">Date And Time</button>
                      <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages<?= $data['enrolled_id'] ?>" type="button" role="tab" aria-controls="v-pills-messages<?= $data['enrolled_id'] ?>" aria-selected="false">Action</button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-home<?= $data['enrolled_id'] ?>" role="tabpanel" aria-labelledby="v-pills-home-tab">
                      You Have A Session With : <b><?= $data['name'] ?></b> <br> <br>
                      On Topic: <b><?= $data['title'] ?> </b>
      
                    </div>
                      <div class="tab-pane fade" id="v-pills-profile<?= $data['enrolled_id'] ?>" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                      <b>Date:</b> <?= $data['date'] ?> <br> <b>Time: </b> <?= $time_format ?> <br> <b>Day: </b> <?= $data['day'] ?>        
                    </div>
                      <div class="tab-pane fade" id="v-pills-messages<?= $data['enrolled_id'] ?>" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                      <div class="text-center"><button class="btn btn-primary" value ="submit" id="btn"><a href="Realtimechat/index.php?id=<?= $data['peer_id'] ?> " style="color:white;">Start Chat</a></button></div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <br>
                  <!-- End Vertical Pills Tabs -->
                  <?php 
                  } 
                  else{ ?>
                  <h3 class="card-title">There is No Session For Today</h3>


                  <?php 
                  }
                    ?>
            

                  </div>
                </div>

              </div>
            </div>
          </section>
      </div><!-- End Sales Card -->
            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

          

                <div class="card-body">
                  <h5 class="card-title">Positive Ratings <span>| Till Today</span></h5>

                  <?php
                      $id = $_SESSION['peerid'];
                    $query = "select * from p_remarks where pid = '$id'";
                    ($peerres = mysqli_query($con, $query)) or die('Incorrect Query!!');
                    $peerrows = mysqli_fetch_assoc($peerres);
                  ?>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $peerrows['positive']?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                

                <div class="card-body">
                  <h5 class="card-title">Negative Ratings <span>| Till Today</span></h5>
               
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-star"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $peerrows['negative']?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

              
                <div class="card-body">
                  <h5 class="card-title">No Of Session <span>| Till Today</span></h5>
                  <?php
                  $id = $_SESSION['peerid'];
                    $query3 = "select * from enrolled_in_schedule where peer_id = '$id' ";
                    ($groupsesres = mysqli_query($con, $query3)) or die('Incorrect Query!!');
                    $groupsesrows = mysqli_num_rows($groupsesres);
                  ?>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $groupsesrows?></h6>
                      <span class="text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">You Are Helping Out People</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

          

            

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">





          <!-- Website Traffic -->
          <div class="card">
            

            <div class="card-body pb-0">
              <h5 class="card-title">Peers Traffic <span>| Till Today</span></h5>
              <?php 
              $q1 = "SELECT * FROM `peer` WHERE pmarketing = 'Instagram'";
              $res1 = mysqli_query($con, $q1);
              $instarows = mysqli_num_rows($res1);

              $q2 = "SELECT * FROM `peer` WHERE pmarketing = 'Linkedin'";
              $res2 = mysqli_query($con, $q2);
              $linkedinrows = mysqli_num_rows($res2);

              $q3 = "SELECT * FROM `peer` WHERE pmarketing = 'Facebook'";
              $res3 = mysqli_query($con, $q3);
              $fbrows = mysqli_num_rows($res3);

              $q4 = "SELECT * FROM `peer` WHERE pmarketing = 'Google'";
              $res4 = mysqli_query($con, $q4);
              $googlerows = mysqli_num_rows($res4);
              
              $q5 = "SELECT * FROM `peer` WHERE pmarketing = 'Existing Peer'";
              $res5 = mysqli_query($con, $q5);
              $peerrows = mysqli_num_rows($res5);
              
              ?>
              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Reached Through',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: <?= $instarows?>,  
                          name: 'Instagram'
                        },
                        {
                          value: <?= $fbrows?>,
                          name: 'Facbook'
                        },
                        {
                          value: <?= $peerrows?>,
                          name: 'Existing Peer'
                        },
                        {
                          value: <?= $linkedinrows?>,
                          name: 'Linkedin'
                        },
                        {
                          value: <?= $googlerows?>,
                          name: 'Google'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->

        </div><!-- End Right side columns -->

      </div>
      </section>

</main><!-- End #main -->

<?php }

else {
    echo "<script>window.location.href = '../index.php'</script>";
}

?>
 
<!-- Grapical Representation End here-->
  <?php 
require("footer.php");
?>