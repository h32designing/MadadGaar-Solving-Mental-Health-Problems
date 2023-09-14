<?php 
require("connection.php");
require("header.php");
require("sidebar.php");

$session = @$_SESSION['DatabaseRole'];
$id = @$_SESSION['userid'];

if (@$_SESSION['DatabaseRole'] == 'Admin') {
    $date = date('Y-m-d');

    $select = "SELECT * FROM `enrolled_in_schedule` INNER JOIN peer
    ON peer.pid = enrolled_in_schedule.peer_id
    INNER JOIN user
    ON user.userid = enrolled_in_schedule.user_id where date < '$date'";
    $run = mysqli_query($con, $select);
    ?>
    <main id="main" class="main">

        <div class="pagetitle">
        <h1>Past Sessions</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Past Session Details</li>
            </ol>
        </nav>
        </div><!-- End Page Title -->

        <section class="section">
        <div class="row">

            <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Past Sessions</h5>

                <!-- Table with stripped rows -->
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Peer Name</th>
                        <th scope="col">Title Of Session</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <!-- <th scope="col">Actions</th> -->
                    </tr>
                    </thead>
                    <tbody>
                        <?php while($data = mysqli_fetch_assoc($run)){ 
                             $time = $data['time'];
                             $correct_time = date_create("$time" , timezone_open("Asia/Karachi"));
                             $time_format = date_format($correct_time, "h:i a");
                   
                            ?>
                    <tr>
                        <th scope="row"><?= $data['enrolled_id'] ?></th>
                        <td><?= $data['name'] ?></td>
                        <td style="align-items:justify;"><?= $data['pname'] ?></td>
                        <td style="align-items:justify;"><?= $data['title'] ?></td>
                        <td><?= $data['date'] ?></td>
                        <td><?= $time_format ?></td>
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
elseif (@$_SESSION['DatabaseRole'] == 'Customer') {
    $id = $_SESSION['userid'];
    $date = date('Y-m-d');

    $select = "SELECT * FROM enrolled_in_schedule inner join peer on pid = peer_id where user_id = '$id' and `date` < '$date' ";
    $run = mysqli_query($con, $select);
    ?>

    <main id="main" class="main">

        <div class="pagetitle">
        <h1>Past Sessions</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Past Sessions Details</li>
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
                        <th scope="col">Peer Name</th>
                        <th scope="col">Title Of Session</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <!-- <th scope="col">Actions</th> -->
                    </tr>
                    </thead>
                    <tbody>
                        <?php while($data = mysqli_fetch_assoc($run)){ ?>
                    <tr>
                        <th scope="row"><?= $data['enrolled_id'] ?></th>
                        <td style="align-items:justify;"><?= $data['pname'] ?></td>
                        <td style="align-items:justify;"><?= $data['title'] ?></td>
                        <td><?= $data['date'] ?></td>
                        <td><?= $data['time'] ?></td>
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
elseif (@$_SESSION['DatabaseRole'] == 'Peer') {
    $id = $_SESSION['peerid'];
    $date = date('Y-m-d');

    $select = "SELECT * FROM enrolled_in_schedule inner join user on user_id = userid where peer_id = '$id' and `date` < '$date'";
    $run = mysqli_query($con, $select);
    ?>

    <main id="main" class="main">

        <div class="pagetitle">
        <h1>Past Sessions</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Past Session Details</li>
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
                        <th scope="col">User Name</th>
                        <th scope="col">Title Of Session</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <!-- <th scope="col">Actions</th> -->
                    </tr>
                    </thead>
                    <tbody>
                        <?php while($data = mysqli_fetch_assoc($run)){ ?>
                    <tr>
                        <th scope="row"><?= $data['enrolled_id'] ?></th>
                        <td><?= $data['name'] ?></td>
                        <td style="align-items:justify;"><?= $data['title'] ?></td>
                        <td><?= $data['date'] ?></td>
                        <td><?= $data['time'] ?></td>
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