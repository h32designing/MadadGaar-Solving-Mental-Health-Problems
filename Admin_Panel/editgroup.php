<?php 
require("connection.php");
require("header.php");
require("sidebar.php");


$ID = $_GET['id'];
$query = "SELECT * FROM `groups` WHERE group_id = $ID";
$run2 = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($run2);
?>

<main id="main" class="main">

    <div class="pagetitle">
    <h1>Edit Group</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Layouts</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->
    <section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title"><img src="<?= $res['group_image'] ?>" style="width:50px; height:50px; border-radius:50%;" alt=""></h5>

                <!-- Floating Labels Form -->
                <form class="row g-3" method="post" action="crud_operations/group_crud.php" enctype="multipart/form-data">
                    <div class="col-md-12">
                    <div class="form-floating">
                        <input type="hidden" name="groupid" value="<?= @$res['group_id'] ?>">
                        <input type="text" value="<?= @$res['Title'] ?>" class="form-control" name="title" id="floatingName" placeholder="Group Title (i.e. Mental Health)">
                        <label for="floatingName">Group Title (i.e. Mental Health)</label>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-floating">
                        <input type="file" class="form-control" value="<?php echo $res['group_image'];  ?>" name="image" id="image" > 
                        <label for="image"><span><?php echo $res['group_image']; ?></span></label>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-floating">
                        <input type="date" name="date" value="<?= @$res['Start_Date'] ?>" class="form-control" id="floatingPassword" placeholder="Date">
                        <label for="floatingPassword">Starting Date</label>
                    </div>
                    </div>
                    <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" name="desc" placeholder="Address" id="floatingTextarea" style="height: 100px;"><?php echo $res['Description']; ?></textarea>
                        <label for="floatingTextarea">Short Description</label>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="form-floating">
                            <input type="text" name="source" value="<?= @$res['Source_of_communication'] ?>" class="form-control" id="floatingCity" placeholder="Source of Communication">
                            <label for="floatingCity">Source of Communication</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="schedule" value="<?= @$res['Schedule'] ?>"  class="form-control" id="floatingCity" placeholder="Source of Communication">
                            <label for="floatingCity">Set Schedule</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                                <input type="number" name="strength"  value="<?= @$res['Strength'] ?>" class="form-control" id="floatingCity" placeholder="Source of Communication">
                                <label for="floatingCity">Group Strength</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                                <input type="number" name="duration"  value="<?= @$res['Duration'] ?>" class="form-control" id="floatingCity" placeholder="Source of Communication">
                                <label for="floatingCity">Duration</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <select id="floatingCity" name="therapistname" class="form-control">
                              <option value="">Select Therapist Name</option>
                              <?php 
                              include('connection.php');
                              $select = "select * from therapist";
                              $run = mysqli_query($con, $select);
                              while($data = mysqli_fetch_assoc($run)):?>
                              <option value="<?php echo $data['Therapist_id']?>"
                              <?php if ($res['Therapist_Name'] == $data['Therapist_id']) {
                                echo 'selected';
                                } 
                                ?>> <?= $data['name'] ?></option>
                              <?php endwhile; ?>
                            </select>
                                <!-- <input type="text" name="therapistname" class="form-control" id="floatingCity" placeholder="Source of Communication">
                                <label for="floatingCity"></label> -->
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="text-center">
                        <button type="submit" name="edit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </div>
                </form><!-- End floating Labels Form -->

                </div>
            </div>
        </div>
    </div>
    </section>

</main>
<?php

require("footer.php");
?>