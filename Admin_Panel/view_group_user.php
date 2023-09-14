<?php 
require("connection.php");
require("header.php");
require("sidebar.php");

$ID = $_GET['id'];
$select = "SELECT * FROM `enrolled_in_groups` WHERE group_id = $ID";
$run = mysqli_query($con, $select);

$query = "SELECT * FROM `groups` WHERE group_id = $ID";
$run2 = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($run2);


?>


<main id="main" class="main">

<div class="pagetitle">
  <h1>Group Details(Make Their Whatsapp Group)</h1>
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
          <h5 class="card-title"><?= $res['Title'] ?> </h5>

          <!-- Table with stripped rows -->
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Contact</th>
                <th scope="col">Email</th>
                <th scope="col">Country</th>
                <th scope="col">City</th>             
              </tr>
            </thead>
            <tbody>
                <?php while($data = mysqli_fetch_assoc($run)){ ?>
                  

              <tr>
              
	
                <th scope="row"><?= $data['enrolled_id'] ?></th>
                <td><?= $data['FirstName'] ?>  <?= $data['LastName'] ?></td>
                <td style="align-items:justify;"><?= $data['Contact_No'] ?></td>
                <td><?= $data['email'] ?></td>
                <td><?= $data['country'] ?></td>
                <td><?= $data['city'] ?></td>

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

require("footer.php");
?>