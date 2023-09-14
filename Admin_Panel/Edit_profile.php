<?php 
require("connection.php");
require("header.php");
require("sidebar.php");
$userid = $_GET['id'];
$query = "select * from user where userid = '$userid'";
$GetData = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($GetData);
?>

    <main id="main" class="main">

        <div class="pagetitle">
        <h1>Edit Profile</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Profile</li>
            <li class="breadcrumb-item active">Layouts</li>
            </ol>
        </nav>
        </div><!-- End Page Title -->
        <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Edit Profile</h5>

                    <!-- Floating Labels Form -->
                    <form class="row g-3" method="post" action="profile_crud.php" enctype="multipart/form-data">
                        <img src="<?= @$res['user_image'] ?>" id="UserImage" width="120px" height="120px" alt="No-image" style="border-radius:50%; cursor:pointer;" class="col-md-2">
                        <p style="font-size:12px; margin-bottom:-7px; text-align:left;"><b>Supported Formats: jpeg, jpg, & png only.</b></p>
                        <div class="col-md-12">
                        <div class="form-floating">
                            <input type="hidden" class="form-control" name="userid" id="floatingName" value="<?= @$res['userid']?>">
                            <input type="text" class="form-control" name="name" id="floatingName" value="<?= @$res['name']?>">
                            <label for="floatingName">User Name</label>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-floating">
                            <input type="file" class="form-control" name="image" id="Pro_Image" >
                            <!-- <label for="floatingEmail"></label> -->
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="fname" class="form-control" id="floatingPassword" value="<?= @$res['F_name']?>">
                            <label for="floatingPassword">Father Name</label>
                        </div>
                        </div>
                        <div class="col-12">
                        <div class="form-floating">
                        <input type="text" name="email" class="form-control" id="floatingTextarea" value="<?= @$res['email']?>">
                            <!-- <textarea class="form-control" name="email" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea> -->
                            <label for="floatingTextarea">Email</label>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-floating">
                                <input type="password" name="password" class="form-control" id="regpassword" value="<?= @$res['Password']?>">
                                <label for="regpassword">Password</label>
                                <input type="checkbox" style="cursor:pointer;" onclick="showregpass()" value=""><span style="font-size:13px; margin-left:5px;">Show Password</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="contact" class="form-control" id="floatingCity" value="<?= @$res['contact']?>">
                                <label for="floatingCity">Contact</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                    <input type="text" name="role" readonly class="form-control" id="floatingCity" value="<?= @$res['Role']?>">
                                    <label for="floatingCity">Role</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                    <input type="text" name="status" readonly class="form-control" id="floatingCity" value="<?php if(@$res['peer_status'] == 3){echo "Approved";}?>">
                                    <label for="floatingCity">Status</label>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="text-center">
                            <button type="submit" name="update" class="btn btn-primary">Update</button>
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
<script src="../vendor/jquery/jquery.min.js"></script>
<script>
        // edituser
        function showregpass(){
            var regpass = document.getElementById('regpassword');
            if(regpass.type === "password"){
                regpass.type = "text";
            }
            else{
                regpass.type = "password";
            }
        }

        $(document).ready(function(){
            $("#UserImage").click(function(){
            $("#Pro_Image").trigger('click')
            });

            //Show Image in Picture Box
            $('#Pro_Image').change(function(){
                if(this.files && this.files[0]){
                    var fileReader = new FileReader();
                    fileReader.readAsDataURL(this.files[0]);
                    fileReader.onload = function(x){
                        $('#UserImage').attr('src', x.target.result);
                    }
                }
            }) 
        })
        
    </script>