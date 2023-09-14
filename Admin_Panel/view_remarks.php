<?php 
require("connection.php");
require("header.php");
require("sidebar.php");

$session = @$_SESSION['DatabaseRole'];
$id = @$_SESSION['userid'];

if (@$_SESSION['DatabaseRole'] == 'Admin') {
    $select = "Select * from p_remarks inner join peer on p_remarks.pid = peer.pid where p_remarks.total > 0 ORDER by positive DESC";
    $run = mysqli_query($con, $select);
    ?>
    <main id="main" class="main">

        <div class="pagetitle">
        <h1>Ratings Table</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Rating Details</li>
            </ol>
        </nav>
        </div><!-- End Page Title -->

        <section class="section">
        <div class="row">

            <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Peers Who Have Some Ratings</h5>

                <!-- Table with stripped rows -->
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Total Feedback</th>
                        <th scope="col">Positive</th>
                        <th scope="col">Negative</th>
                        <!-- <th scope="col">Actions</th> -->
                    </tr>
                    </thead>
                    <tbody>
                        <?php while($data = mysqli_fetch_assoc($run)){ ?>
                    <tr>
                        <th scope="row"><?= $data['rid'] ?></th>
                        <td><?= $data['pname'] ?></td>
                        <td style="align-items:justify;"><?= $data['pemail'] ?></td>
                        <td><?= $data['total'] ?></td>
                        <td><?= $data['positive'] ?></td>
                        <td><?= $data['negative'] ?></td>
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


?>




  <?php

require("footer.php");
?>