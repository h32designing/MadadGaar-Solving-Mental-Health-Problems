<?php 
require("connection.php");
require("header.php");
require("sidebar.php");
$session = @$_SESSION['DatabaseRole'];
if (@$_SESSION['DatabaseRole'] == 'Admin') {
  $select = "Select * from contact";
  $run = mysqli_query($con, $select);
  ?> 
  <main id="main" class="main">

      <div class="pagetitle">
        <h1>Contact Table</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Contact Query Details</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section">
        <div class="row">

          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">

                <!-- Table with stripped rows -->
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email.</th>
                      <th scope="col">Subject</th>
                      <th scope="col">Message</th>
                 
                    </tr>
                  </thead>
                  <tbody>
                      <?php while($data = mysqli_fetch_assoc($run)){ ?>
                    <tr>
                      <th scope="row"><?= $data['cid'] ?></th>
                      <td><?= $data['name'] ?></td>
                      <td><?= $data['email'] ?></td>
                      <td><?= $data['subject'] ?></td>
                      <td><?= $data['message'] ?></td>
                      <!-- <td><button class="btn btn-dark text-white"  ><a href="edittherapist.php?id=<?= $data['Therapist_id'] ?>">Edit</a></button></td> -->
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
else {
  echo "<script>window.location.href = '../index.php'</script>";
}

require("footer.php");
?>
 

