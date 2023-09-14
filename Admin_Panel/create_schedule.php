<?php 
require("connection.php");
require("header.php");
require("sidebar.php");

?>

<main id="main" class="main">

    <div class="pagetitle" style="margin-top:-50px">
    <h1>Create Schedule</h1>
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
                <h5 class="card-title">Create Schedule</h5>

                <!-- Floating Labels Form -->
                <form class="row g-3" method="post" action="crud_operations/schedule.php">
                    
                    <div class="col-md-6">
                        <div class="container">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="day[]" value= "Monday"  id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Monday
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="day[]" value= "Tuesday" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                Tuesday
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="day[]" value= "Wednesday" id="gridCheck3">
                            <label class="form-check-label" for="gridCheck3">
                                Wednesday
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="day[]" value= "Thursday" id="gridCheck4" checked>
                            <label class="form-check-label" for="gridCheck4">
                                Thursday
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="day[]" value= "Friday" id="gridCheck5" >
                            <label class="form-check-label" for="gridCheck5">
                                Friday
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="day[]" value= "Saturday" id="gridCheck6" checked>
                            <label class="form-check-label" for="gridCheck6">
                                Saturday
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="day[]" value= "Sunday" id="gridCheck7" checked>
                            <label class="form-check-label" for="gridCheck7">
                                Sunday
                            </label>
                        </div>
                        
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="time" name="time" class="form-control" id="floatingPassword" require placeholder="Date">
                            <label for="floatingPassword">Schedule Time</label>
                        </div>
                    </div>

                    
                  
                   
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="form-floating">
                            <input type="text" name="pid" readonly value="<?php echo @$_SESSION['peerid']?>" class="form-control" id="floatingCity" placeholder="Source of Communication">
                            <label for="floatingCity">Peer Name</label>
                            </div>
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