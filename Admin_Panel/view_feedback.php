<?php 
require("connection.php");
require("header.php");
require("sidebar.php");
$session = @$_SESSION['DatabaseRole'];
if (@$_SESSION['DatabaseRole'] == 'Admin') {
  $select = "Select * from feedback";
  $run = mysqli_query($con, $select);
  ?> 
  <main id="main" class="main">

      <div class="pagetitle">
        <h1>Feedback Table</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Feedback Details</li>
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
                      <th scope="col">Title</th>
                      <th scope="col">User Name</th>
                      <th scope="col">Description</th>
                 
                    </tr>
                  </thead>
                  <tbody>
                      <?php while($data = mysqli_fetch_assoc($run)){ ?>
                    <tr>
                      <th scope="row"><?= $data['fid'] ?></th>
                      <td><?= $data['title'] ?></td>
                      <td><?= $data['name'] ?></td>
                      <td><?= $data['description'] ?></td>
              
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
 

