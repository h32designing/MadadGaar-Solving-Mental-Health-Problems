<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Peer Edit</title>


    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">

     <!-- Favicons -->
    <link href="Admin_Panel/assets/img/favicon.ico" rel="icon">

</head>
<script>
    var div = document.getElementsByClassName('hide');
    function hideShow()
    {
        // if(display == 1)
        // {
        //   div.style.display = 'block';
        //   display = 0;    
        // }
        // else
        // {
          
        // }
        div.style.display = 'none';
    }
    </script>
    

<body>
    <?php if(@$_GET['pid'] == ""){ ?>
    <button class="btn btn--blue"><a href="index.php" style="text-decoration:none; color:white;">Back</a></button>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Peer Registration</h2>
                    <form method="POST" action="peercrud.php" enctype="multipart/form-data" >
                        <img src="assets/img/Noimage.jpg" id="UserImage" alt="No-image" width="100px" height="100px" style="border-radius:50%; margin-bottom:5px; margin-top:-40px; display:flex; justify-content:center;" class="rounded-circle">
                        <p style="font-size:12px; margin-bottom:10px; text-align:left;"><b>Supported Formats: jpeg, jpg, & png only.</b></p>
                        <div class="row row-space">
                            <input class="input--style-4" type="hidden" name="role" value="Peer">

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Full name</label>
                                    <input class="input--style-4" type="text" required name="name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Your Occupation</label>
                                    <input class="input--style-4" type="text" required name="occupation">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input class="form-control" type="date" max="2005-01-01"name="birthday">
                                        <!-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" required value="male" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" required value="female">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" required type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" required type="text" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Marital Status</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="marital" required>
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Single</option>
                                    <option>Married</option>
                                    <option>Seperated</option>
                                    <option>Divorced</option>
                                    <option>Widow/Widower</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                                <label class="label">Password</label>
                                <input class="input--style-4" id="regpassword" required type="password" name="password">
                                <!-- <input type="checkbox" style="cursor:pointer; margin-left:-265px; margin-right:-258px;" onclick="showregpass()">Show Password -->
                            </div>

                        <div class="input-group">
                            <label class="label">Which Languages Are You Profecient in</label>
                            <input class="input--style-4" required type="text" name="languages">
                        </div>
                        <div class="input-group">
                            <label class="label">In Which Category Your Medical Condition Lie</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="category" required>
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Relationships</option>
                                    <option>Mental Health</option>
                                    <option>Childhood Trauma</option>
                                    <option>Anxiety</option>
                                    <option>Deppression</option>
                                    <option>Parental-Trauma</option>
                                    <option>Stress</option>
                                    <option>Grief/Loss</option>
                                    <option>Bioplar-Disorder</option>                    

                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <label class="label">Have You Taken Any Therapy</label>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">Yes
                                    <input type="radio" checked="checked" name="therapy" required value="Yes">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="therapy" required value="No">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                        <div class="input-group">
                            <label class="label">Upload Your Clear Image</label>
                            <input class="input--style-4 form-control" required type="file" name="image">
                        </div>

                        <div class="input-group">
                            <label class="label">Write About Your Background</label>
                            <textarea class="input--style-4" name="bio" required id="exampleFormControlTextarea1" rows="3"></textarea>

                        </div>

                        <div class="input-group">
                                    <label class="label">Do You Have Kids</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Yes
                                            <input type="radio" checked="checked" name="kids" required value="Yes">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" name="kids" required value="No">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                        
                        <!-- <div class="row row-space hide">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Select Day And</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="day" required>
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Monday</option>
                                            <option>Tuesday</option>
                                            <option>Wednesday</option>
                                            <option>Thursday</option>
                                            <option>Friday</option>
                                            <option>Saturday</option>
                                            <option>Sunday</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Time For Slot 1</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="time" required>
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>12:00</option>
                                            <option>01:00</option>
                                            <option>01:00</option>
                                            <option>01:00</option>
                                            <option>01:00</option>
                                            <option>01:00</option>
                                            <option>01:00</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                             </div>
                             <button class="btn-small" onclick="hideShow()">Add More Slots</button> -->

                            <br>
                             <h2 class="title">Information That Will Not Be Displayed</h2>

                             <div class="input-group">
                                    <label class="label">Your City</label>
                                    <input class="input--style-4" required type="text" name="city">
                            </div>

                        <div class="input-group">
                            <label class="label">Your Level Of Education</label>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">Undergraduate
                                    <input type="radio" checked="checked" required name="education" value="Undergraduate">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container m-r-45">Graduate
                                    <input type="radio"  name="education" required value="Graduate">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Masters
                                    <input type="radio"  name="education" required value="Masters">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Your University</label>
                                    <input class="input--style-4" type="text" required name="uni">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Your Any Social Media Link</label>
                                    <input class="input--style-4" type="text" required name="socialmedia">
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                                    <label class="label">How Did You Hear About Us</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="marketing">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Linkedin</option>
                                            <option>Facebook</option>
                                            <option>Instagram</option>
                                            <option>Google</option>
                                            <option>Friend/Family</option>
                                            <option>Youtube</option>
                                            <option>Existing Peer</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>

                        
                        
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="peer">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php 
    }
    else if(@$_GET['pid'] != ""){
     session_start();
     include('connection.php');
     $pid = $_GET['pid'];
     $ID = @$_SESSION['peerid'];
     $query = "select * from peer where pid = $ID";
     $GetData = mysqli_query($con, $query);
     $res = mysqli_fetch_assoc($GetData);
     $status = $res['pstatus'];   
        
        
        ?>
        <button class="btn btn--blue"><a href="Admin_Panel/profile.php" style="text-decoration:none; color:white;">Back</a></button>
        <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Peer Edit</h2>
                    <form method="POST" action="editpeer.php" enctype="multipart/form-data" >
                        <img src="<?= @$res['pimage'] ?>" id="UserImage" alt="No-image" width="100px" height="100px" style="border-radius:50%;margin-bottom:5px; margin-top:-40px; display:flex; justify-content:center;" class="rounded-circle">
                        <p style="font-size:12px; margin-bottom:10px; text-align:left;"><b>Supported Formats: jpeg, jpg, & png only.</b></p>
                        <div class="row row-space">
                            <input class="input--style-4" type="hidden" name="role" value="Peer">
                            <input class="input--style-4" type="hidden" name="peerid" value="<?php echo $_GET['pid'] ?>">

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Full name</label>
                                    <input class="input--style-4" type="text" required name="name" value="<?php echo $res['pname'] ?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Your Occupation</label>
                                    <input class="input--style-4" type="text" required name="occupation" value="<?php echo $res['poccupation'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input class="form-control" type="date" max="" name="birthday" value="<?php echo $res['pbirthday'] ?>">
                                        <!-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" required <?php if($res['pgender'] == 'male'){ echo 'checked';} ?> value="male" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" required <?php if($res['pgender'] == 'female'){ echo 'checked';} ?>  value="female">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" required type="email" name="email" value="<?php echo $res['pemail'] ?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" required type="text" name="phone" value="<?php echo $res['pno'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Marital Status</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="marital" required>
                                    <!-- <option disabled="disabled" selected="selected">Choose option</option> -->
                                    <!-- <option value="<?= $res['pmaritalstatus'] ?>"><?= $res['pmaritalstatus'] ?></option> -->
                                    <?php $query = "select DISTINCT(pmaritalstatus) from peer";
                                           $Data = mysqli_query($con, $query);
                                           while ($fetchdata = mysqli_fetch_assoc($Data)) { ?>
                                           <option value="<?= $fetchdata['pmaritalstatus'] ?>"><?= $fetchdata['pmaritalstatus'] ?></option>
                                        <?php } 
                                                  
                                    ?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                                <label class="label">Password</label>
                                <input class="input--style-4" id="regpassword" required type="password" value="<?php echo $res['password'] ?>" name="password">
                                <input type="checkbox" style="cursor:pointer; margin-left:-268px;" onclick="showregpass()" value=""><span style="margin-left:-262px;">Show Password</span>
                            </div>

                        <div class="input-group">
                            <label class="label">Which Languages Are You Profecient in</label>
                            <input class="input--style-4" required type="text" value="<?php echo $res['plang'] ?>" name="languages">
                        </div>
                        <div class="input-group">
                            <label class="label">In Which Category Your Medical Condition Lie</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="category" required>
                                    <?php $query = "select DISTINCT(pcategory) from peer";
                                           $Data = mysqli_query($con, $query);
                                           while ($fetchdata = mysqli_fetch_assoc($Data)) { ?>
                                           <option value="<?= $fetchdata['pcategory'] ?>"><?= $fetchdata['pcategory'] ?></option>
                                        <?php }             
                                    ?>                   

                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <label class="label">Have You Taken Any Therapy</label>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">Yes
                                    <input type="radio" checked="checked" value="Yes" <?php if($res['ptherapy'] == 'Yes'){echo 'checked';} ?> name="therapy" required>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="therapy" value="No" required  <?php if($res['ptherapy'] == 'No'){echo 'checked';} ?>>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                        <div class="input-group">
                            <label class="label">Upload Your Clear Image</label>
                            <input class="input--style-4 form-control" id="Pro_Image" type="file" name="image">
                        </div>

                        <div class="input-group">
                            <label class="label">Write About Your Background</label>
                            <textarea class="input--style-4" name="bio" value="" required id="exampleFormControlTextarea1" rows="3"><?php echo $res['pbio'] ?></textarea>

                        </div>

                        <div class="input-group">
                                    <label class="label">Do You Have Kids</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Yes
                                            <input type="radio" checked="checked" name="kids" required <?php if($res['pkids'] == 'Yes'){echo 'checked';} ?> value="Yes">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" name="kids" required <?php if($res['pkids'] == 'No'){echo 'checked';} ?> value="No">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                    
                            <br>
                             <h2 class="title">Information That Will Not Be Displayed</h2>

                             <div class="input-group">
                                    <label class="label">Your City</label>
                                    <input class="input--style-4" required  type="text" value="<?php echo $res['pcity'] ?>" name="city">
                            </div>

                        <div class="input-group">
                            <label class="label">Your Level Of Education</label>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">Undergraduate
                                    <input type="radio" checked="checked" name="education" <?php if($res['peducation'] == 'Undergraduate'){echo 'checked';} ?> required value="Undergraduate">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container m-r-45">Graduate
                                    <input type="radio"  name="education" <?php if($res['peducation'] == 'Graduate'){echo 'checked';} ?> required value="Graduate">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Masters
                                    <input type="radio"  name="education" <?php if($res['peducation'] == 'Masters'){echo 'checked';} ?> required value="Masters">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Your University</label>
                                    <input class="input--style-4" type="text" required value="<?php echo $res['puniversity'] ?>" name="uni">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Your Any Social Media Link</label>
                                    <input class="input--style-4" type="text" value="<?php echo $res['psocialmedia'] ?>" required name="socialmedia">
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                                    <label class="label">How Did You Hear About Us</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="marketing" required>
                                            <!-- <option disabled="disabled" selected="selected">Choose option</option> -->
                                            <?php $query = "select DISTINCT(pmarketing) from peer";
                                           $Data = mysqli_query($con, $query);
                                           while ($fetchdata = mysqli_fetch_assoc($Data)) { ?>
                                           <option value="<?= $fetchdata['pmarketing'] ?>"><?= $fetchdata['pmarketing'] ?></option>
                                        <?php }             
                                        ?> 
                                            <!-- <option>Linkedin</option>
                                            <option>Facebook</option>
                                            <option>Instagram</option>
                                            <option>Google</option>
                                            <option>Friend/Family</option>
                                            <option>Youtube</option>
                                            <option>Existing Peer</option> -->
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>

                        
                        
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="Edit_peer">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <!-- Jquery JS-->
        <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <!-- <script src="assets/js/main.js"></script> -->
    <script>
        // Login
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

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->


    
    
