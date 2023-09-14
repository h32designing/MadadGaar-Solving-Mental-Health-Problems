<?php 
require("connection.php");
require("header.php");
require("sidebar.php");


$ID = $_GET['id'];
$query = "SELECT * FROM `therapist` WHERE Therapist_id = $ID";
$run2 = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($run2);
?>

<main id="main" class="main">

    <div class="pagetitle">
    <h1>Create Therapist</h1>
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
                <h5 class="card-title"><img src="<?= $res['Image'] ?>" style="width:50px; height:50px; border-radius:50%;" alt=""></h5>

                <!-- Floating Labels Form -->
                <form class="row g-3" method="post" action="crud_operations/therapist_crud.php" enctype="multipart/form-data">
                    <div class="col-md-12">
                    <div class="form-floating">
                        <input type="hidden" name="id" value="<?= $res['Therapist_id'] ?>">
                        <input type="text" class="form-control" value = "<?= $res['name'] ?>" name="name"  id="floatingName" placeholder="Group Title (i.e. Mental Health)">
                        <label for="floatingName">Therapist Name</label>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-floating">
                        <input type="file" class="form-control" name="image" id="image" >
                        <label for="floatingEmail"><?= $res['Image'] ?></label>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="age" value = "<?= $res['age'] ?>"  class="form-control" id="floatingPassword" placeholder="Date">
                        <label for="floatingPassword">Therapist Age</label>
                    </div>
                    </div>
                    <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control"  name="qualification" placeholder="Address" id="floatingTextarea" style="height: 100px;"><?= $res['qualification'] ?></textarea>
                        <label for="floatingTextarea">Qualification(Highest One)</label>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="form-floating">
                            <input type="text" name="experience" value = "<?= $res['Experience'] ?>"  class="form-control" id="floatingCity" placeholder="Source of Communication">
                            <label for="floatingCity">Experience</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="expertise" value = "<?= $res['Expertise'] ?>" class="form-control" id="floatingCity" placeholder="Source of Communication">
                            <label for="floatingCity">Expertise in Specific Field</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                                <input type="text" name="license" value = "<?= $res['License_No'] ?>" class="form-control" id="floatingCity" placeholder="Source of Communication">
                                <label for="floatingCity">License / Registration No.</label>
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