<?php 
require("connection.php");
require("header.php");
require("sidebar.php");
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
                <h5 class="card-title">Therapist</h5>

                <!-- Floating Labels Form -->
                <form class="row g-3" method="post" action="crud_operations/therapist_crud.php" enctype="multipart/form-data">
                    <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="name" id="floatingName" placeholder="Group Title (i.e. Mental Health)">
                        <label for="floatingName">Therapist Name</label>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-floating">
                        <input type="file" class="form-control" name="image" id="floatingEmail" >
                        <!-- <label for="floatingEmail"></label> -->
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="age" class="form-control" id="floatingPassword" placeholder="Date">
                        <label for="floatingPassword">Therapist Age</label>
                    </div>
                    </div>
                    <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" name="qualification" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                        <label for="floatingTextarea">Qualification(Highest One)</label>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="form-floating">
                            <input type="text" name="experience" class="form-control" id="floatingCity" placeholder="Source of Communication">
                            <label for="floatingCity">Experience</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="expertise" class="form-control" id="floatingCity" placeholder="Source of Communication">
                            <label for="floatingCity">Expertise in Specific Field</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                                <input type="text" name="license" class="form-control" id="floatingCity" placeholder="Source of Communication">
                                <label for="floatingCity">License / Registration No.</label>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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