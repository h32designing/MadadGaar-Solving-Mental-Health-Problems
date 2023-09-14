<?php 
require("connection.php");
require("header.php");
require("sidebar.php");

$session = @$_SESSION['DatabaseRole'];
$id = @$_SESSION['userid'];

if (@$_SESSION['DatabaseRole'] == 'Admin') {
    $select = "Select * from user";
    $run = mysqli_query($con, $select);
    ?>
    <main id="main" class="main">

        <div class="pagetitle">
        <h1>User Table</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">User Details</li>
            </ol>
        </nav>
        </div><!-- End Page Title -->

        <section class="section">
        <div class="row">

            <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">User Details</h5>

                <!-- Table with stripped rows -->
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">FName</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Role</th>
                        <!-- <th scope="col">Actions</th> -->
                    </tr>
                    </thead>
                    <tbody>
                        <?php while($data = mysqli_fetch_assoc($run)){ ?>
                    <tr>
                        <th scope="row"><?= $data['userid'] ?></th>
                        <td><?= $data['name'] ?></td>
                        <td style="align-items:justify;"><?= $data['F_name'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td><?= $data['contact'] ?></td>
                        <td><?= $data['Role'] ?></td>
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
else if (@$_SESSION['DatabaseRole'] == 'Customer' || @$_SESSION['DatabaseRole'] == 'Peer') {
    $select = "Select * from user where Role = '$session' and userid = '$id'";
    $run = mysqli_query($con, $select);
    ?>
    <main id="main" class="main">

        <div class="pagetitle">
        <h1>User Table</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">User Details</li>
            </ol>
        </nav>
        </div><!-- End Page Title -->

        <section class="section">
        <div class="row">

            <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">User Details</h5>

                <!-- Table with stripped rows -->
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">FName</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Role</th>
                        <th scope="col">Peer Status</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php while($data = mysqli_fetch_assoc($run)){ ?>
                    <tr>
                        <th scope="row"><?= $data['userid'] ?></th>
                        <td><?= $data['name'] ?></td>
                        <td style="align-items:justify;"><?= $data['F_name'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td><?= $data['contact'] ?></td>
                        <td><?= $data['Role'] ?></td>
                        <td><?php if($data['peer_status'] == 1){ echo "Approved"; } else{ echo "This is not a Peer.";} ?></td>
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