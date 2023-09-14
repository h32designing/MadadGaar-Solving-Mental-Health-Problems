<?php 
require("connection.php");
require("header.php");
require("sidebar.php");
$session = @$_SESSION['DatabaseRole'];
if (@$_SESSION['DatabaseRole'] == 'Peer' && @$_SESSION['status'] == 1) {

  $ID = $_SESSION['peerid'];
  $query = "select * from peer where pid = $ID";
  $GetData = mysqli_query($con, $query);
  $res = mysqli_fetch_assoc($GetData);
  $status = $res['pstatus'];

  ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1><?php echo @$_SESSION['DatabaseRole'] ?> Details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="../<?= @$res['pimage'] ?>" alt="Profile" class="rounded-circle">
              <h2><?= @$res['pname'] ?></h2>
              <h3><?= @$res['poccupation'] ?></h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-target="#profile-overview">Overview</button>
                </li>
              
                  <li class="nav-item">
                    <button class="nav-link" data-bs-target="#profile-settings"><a href="../Form.php?pid=<?= @$res['pid'] ?>">Edit a Profile</a></button>
                    </li>

              

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">About</h5>
                  <p class="small fst-italic"><?= @$res['pbio']?> </p>

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Email</div>
                    <div class="col-lg-9 col-md-8"><?= @$res['pemail']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?= @$res['pno']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Marital Status</div>
                    <div class="col-lg-9 col-md-8"><?= @$res['pmaritalstatus']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Languages</div>
                    <div class="col-lg-9 col-md-8"><?= @$res['plang']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Category</div>
                    <div class="col-lg-9 col-md-8"><?= @$res['pcategory']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Therapy</div>
                    <div class="col-lg-9 col-md-8"><?= @$res['ptherapy']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Status</div>
                    <div class="col-lg-9 col-md-8"><?php if(@$res['pstatus'] == 1){echo "Approved"; }else{ echo "Not Approved";} ?></div>
                  </div>


                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Gender</div>
                    <div class="col-lg-9 col-md-8"><?= @$res['pgender']?></div>
                  </div>


                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Birthday</div>
                    <div class="col-lg-9 col-md-8"><?= @$res['pbirthday']?></div>
                  </div>


                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Kids</div>
                    <div class="col-lg-9 col-md-8"><?= @$res['pkids']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">City</div>
                    <div class="col-lg-9 col-md-8"><?= @$res['pcity']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Age</div>
                    <div class="col-lg-9 col-md-8"><?= @$res['page']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Education</div>
                    <div class="col-lg-9 col-md-8"><?= @$res['peducation']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">University</div>
                    <div class="col-lg-9 col-md-8"><?= @$res['puniversity']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Social Media</div>
                    <div class="col-lg-9 col-md-8"><a href="<?= @$res['psocialmedia']?>">Click Here</a></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Where Did Peer Hear About Us</div>
                    <div class="col-lg-9 col-md-8"><?= @$res['pmarketing']?></div>
                  </div>

                </div>

     

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
    <?php
}
else if (@$_SESSION['DatabaseRole'] == 'Admin' || @$_SESSION['DatabaseRole'] == 'Customer') {

  $query = "select * from user where userid = '".$_SESSION['userid']."'";
  $GetData = mysqli_query($con, $query);
  $res = mysqli_fetch_assoc($GetData);
  
  ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1><?php echo @$_SESSION['DatabaseRole'] ?> Details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="<?= @$res['user_image'] ?>" alt="No-Image" style="border-radius:50%; cursor:pointer;" class="rounded-circle">
              <h2><?= @$res['name'] ?></h2>
              <h3><?= @$res['Role'] ?></h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-target="#profile-overview">Overview</button>
                </li>
              
                  <li class="nav-item">
                    <button class="nav-link active" data-bs-target="#profile-settings"><a href="Edit_profile.php?id=<?= $_SESSION['userid'] ?>">Edit Profile</a></button>
                  </li>

              

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">F-Name</div>
                    <div class="col-lg-9 col-md-8"><?= @$res['F_name']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Email</div>
                    <div class="col-lg-9 col-md-8"><?= @$res['email']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Password</div>
                    <div class="col-lg-9 col-md-8">**************</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?= @$res['contact']?></div>
                  </div>

                </div>

     

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
    <?php
}
else{
    echo "<script>window.location.href = '../index.php'</script>";
}
require("footer.php");
?>
  
