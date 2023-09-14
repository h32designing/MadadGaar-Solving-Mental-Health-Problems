<?php 
require("connection.php");
require("header.php");
require("sidebar.php");
$session = @$_SESSION['DatabaseRole'];
if (@$_SESSION['DatabaseRole'] == 'Admin') {
  $select = "Select * from therapist";
  $run = mysqli_query($con, $select);
  ?> 
  <main id="main" class="main">

      <div class="pagetitle">
        <h1>Therapist Table</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Therapist Details</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section">
        <div class="row">

          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Therapist Details</h5>

                <!-- Table with stripped rows -->
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Image</th>
                      <th scope="col">Name</th>
                      <th scope="col">Age</th>
                      <th scope="col">Edu.</th>
                      <th scope="col">Experience</th>
                      <th scope="col">Expertise</th>
                      <th scope="col">License</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php while($data = mysqli_fetch_assoc($run)){ ?>
                    <tr>
                      <th scope="row"><?= $data['Therapist_id'] ?></th>
                      <td><img src="<?= $data['Image'] ?>" style="width:50px; height:50px; border-radius:50%;" alt=""></td>
                      <td><?= $data['name'] ?></td>
                      <td style="align-items:justify;"><?= $data['age'] ?></td>
                      <td><?= $data['qualification'] ?></td>
                      <td><?= $data['Experience'] ?></td>
                      <td><?= $data['Expertise'] ?></td>
                      <td><?= $data['License_No'] ?></td>
                      <td><button class="btn btn-dark text-white"  ><a href="edittherapist.php?id=<?= $data['Therapist_id'] ?>">Edit</a></button></td>
                      <!-- <td><button class="btn btn-info text-dark"><a href="#">Del</a></button></td> -->
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->

              </div>
            </div>

          </div>
        </div>
      </section>

  </main>

<?php } 
else if (@$_SESSION['DatabaseRole'] == 'Customer' || @$_SESSION['DatabaseRole'] == 'Peer') {
  $select = "Select * from therapist";
  $run = mysqli_query($con, $select);
  ?>
  <main id="main" class="main">

      <div class="pagetitle">
        <h1>Therapist Table</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Therapist Details</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section">
        <div class="row">

          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Therapist Details</h5>

                <!-- Table with stripped rows -->
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Image</th>
                      <th scope="col">Name</th>
                      <th scope="col">Age</th>
                      <th scope="col">Edu.</th>
                      <th scope="col">Experience</th>
                      <th scope="col">Expertise</th>
                      <th scope="col">License</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php while($data = mysqli_fetch_assoc($run)){ ?>
                    <tr>
                      <th scope="row"><?= $data['Therapist_id'] ?></th>
                      <td><img src="<?= $data['Image'] ?>" style="width:50px; height:50px; border-radius:50%;" alt=""></td>
                      <td><?= $data['name'] ?></td>
                      <td style="align-items:justify;"><?= $data['age'] ?></td>
                      <td><?= $data['qualification'] ?></td>
                      <td><?= $data['Experience'] ?></td>
                      <td><?= $data['Expertise'] ?></td>
                      <td><?= $data['License_No'] ?></td>
                      <!-- <td><button class="btn btn-dark text-white"  ><a href="#">Edit</a></button></td> -->
                      <!-- <td><button class="btn btn-info text-dark"><a href="#">Del</a></button></td> -->
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->

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
 

