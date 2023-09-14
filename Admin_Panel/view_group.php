<?php 
require("connection.php");
require("header.php");
require("sidebar.php");


if (@$_SESSION['DatabaseRole'] == 'Admin') {
  $select = "Select * from groups inner join therapist on groups.Therapist_Name = therapist.Therapist_id";
  $run = mysqli_query($con, $select); ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Groups Table</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Groups</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Groups Details</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Disc</th>
                    <th scope="col">SDate</th>
                    <th scope="col">Source</th>
                    <th scope="col">Sche</th>
                    <th scope="col">Stren</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Therapist</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php while($data = mysqli_fetch_assoc($run)){ ?>
                  <tr>
                    <th scope="row"><?= $data['group_id'] ?></th>
                    <td><img src="<?= $data['group_image'] ?>" style="width:50px; height:50px; border-radius:50%;" alt=""></td>
                    <td><?= $data['Title'] ?></td>
                    <td style="align-items:justify;"><?= $data['Description'] ?></td>
                    <td><?= $data['Start_Date'] ?></td>
                    <td><?= $data['Source_of_communication'] ?></td>
                    <td><?= $data['Schedule'] ?></td>
                    <td><?= $data['Strength'] ?></td>
                    <td><?= $data['Duration'] ?></td>
                    <td><?= $data['name'] ?></td>
                    <td><button class="btn btn-dark text-white mb-2" ><a href="view_group_user.php?id=<?= $data['group_id'] ?>">view</a></button><button class="btn btn-dark text-white" ><a href="editgroup.php?id=<?= $data['group_id'] ?>"> Edit</a></button></td>
                <!-- <td></td> -->
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
  $select = "Select * from groups inner join therapist on groups.Therapist_Name = therapist.Therapist_id";
  $run = mysqli_query($con, $select); ?>
    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Groups Table</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Groups</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section">
        <div class="row">

          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Groups Details</h5>

                <!-- Table with stripped rows -->
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Image</th>
                      <th scope="col">Title</th>
                      <th scope="col">Disc</th>
                      <th scope="col">SDate</th>
                      <th scope="col">Source</th>
                      <th scope="col">Sche</th>
                      <th scope="col">Stren</th>
                      <th scope="col">Duration</th>
                      <th scope="col">Therapist</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php while($data = mysqli_fetch_assoc($run)){ ?>
                    <tr>
                      <th scope="row"><?= $data['group_id'] ?></th>
                      <td><img src="<?= $data['group_image'] ?>" style="width:50px; height:50px; border-radius:50%;" alt=""></td>
                      <td><?= $data['Title'] ?></td>
                      <td style="align-items:justify;"><?= $data['Description'] ?></td>
                      <td><?= $data['Start_Date'] ?></td>
                      <td><?= $data['Source_of_communication'] ?></td>
                      <td><?= $data['Schedule'] ?></td>
                      <td><?= $data['Strength'] ?></td>
                      <td><?= $data['Duration'] ?></td>
                      <td><?= $data['name'] ?></td>
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



  <?php
}
require("footer.php");
?>