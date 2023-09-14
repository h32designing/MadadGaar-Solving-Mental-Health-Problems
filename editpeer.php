<?php

include('connection.php');
session_start();

if(isset($_POST['Edit_peer'])){

    if (@$_SESSION['DatabaseRole'] == 'Peer' && @$_SESSION['status'] == 1) {
    //Update query


        $role = $_POST['role'];
        $peerid = $_POST['peerid'];
        $name = $_POST['name'];
        $occupation = $_POST['occupation'];
        $birthday = $_POST['birthday'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $marital = $_POST['marital'];
        $password = $_POST['password'];

        $languages = $_POST['languages'];
        $category = $_POST['category'];
        $therapy = $_POST['therapy'];

        $bio = $_POST['bio'];
        $kids = $_POST['kids'];
        // $day = $_POST['day'];
        // $time = $_POST['time'];
        $city = $_POST['city'];
        $education = $_POST['education'];
        $uni = $_POST['uni'];
        $socialmedia = $_POST['socialmedia'];
        $marketing = $_POST['marketing'];
        $age;
        
        function getAge($birthday) {
            return intval(date('Y', time() - strtotime($birthday)))-1970;
        }
        $age = getAge($birthday);
        // echo $age;
        // echo $password;
        
            $file = $_FILES['image'];
            $filename = $_FILES['image']['name'];
            $filetype = $_FILES['image']['type'];
            $filetemploc = $_FILES['image']['tmp_name'];
            $filesize = $_FILES['image']['size'];

            $folder = "assets/img/";

                if($age >=18)
                {   
                    if($filename != ""){
                        if(strtolower($filetype) == "image/jpeg" || strtolower($filetype) == "image/jpg" || strtolower($filetype) == "image/png"){
                            if($filesize <= 1000000){
                                $time = strtotime($birthday);
                                $newformat = date('Y-m-d',$time);
                                // echo $newformat;
                            
                                $pstatus = 1;
                                
                                $Folder = $folder.$filename;
                                $query = "update peer set pname = '$name', poccupation = '$occupation', pbirthday = '$newformat', pgender = '$gender', pemail ='$email', pno = '$phone', password = '$password', pmaritalstatus = '$marital', plang = '$languages', pcategory = '$category', ptherapy = '$therapy', pimage = '$Folder', pstatus = '$pstatus', pkids = '$kids', pbio = '$bio', pcity = '$city', page = '$age', peducation = '$education', puniversity = '$uni', psocialmedia = '$socialmedia', pmarketing = '$marketing'
                                where pid = '$peerid'";

                                $res = mysqli_query($con, $query);
                                if($res == 1){
                                    $query = "update user set user_image = '$Folder', name = '$name', email = '$email', Password = '$password', contact = '$phone',Role = '$role', peer_status = '$pstatus' 
                                    where email = '".$_SESSION['CustEmail']."'";
                                    $result = mysqli_query($con, $query);
                                    if ($result) {
                                        move_uploaded_file($filetemploc,$Folder);
                                        echo "<script>alert('Your Profile Has Been Updated.');window.location.href = 'Admin_Panel/profile.php';</script>";
                                    } 
                                }
                                else {
                                    echo "<script>alert('Something Went Wrong');window.location.href = 'Form.php';</script>";
                                }
                            }
                            else{
                                echo "<script>alert('Your Image Size should be less than or equal to 1MB.');</script>";
                            }


                        }
                        else{
                            echo "<script>alert('Image Format not supported!! ');</script>";
                        }
                    }
                    else{
                        $pstatus = 1;
                        $time = strtotime($birthday);
                        $newformat = date('Y-m-d',$time);
                        // Update data without image
                                $query = "update peer set pname = '$name', poccupation = '$occupation', pbirthday = '$newformat', pgender = '$gender', pemail ='$email', pno = '$phone', password = '$password', pmaritalstatus = '$marital', plang = '$languages', pcategory = '$category', ptherapy = '$therapy', pstatus = '$pstatus', pkids = '$kids', pbio = '$bio', pcity = '$city', page = '$age', peducation = '$education', puniversity = '$uni', psocialmedia = '$socialmedia', pmarketing = '$marketing'
                                where pid = '$peerid'";

                                $res = mysqli_query($con, $query);
                                if($res == 1){
                                    $query = "update user set name = '$name', email = '$email', Password = '$password',contact = '$phone',Role = '$role', peer_status = '$pstatus' 
                                    where email = '".$_SESSION['CustEmail']."'";
                                    $result = mysqli_query($con, $query);
                                    if ($result) {
                                        echo "<script>alert('Your Profile Has Been Updated.');window.location.href = 'Admin_Panel/profile.php';</script>";
                                    } 
                                }
                                else {
                                    echo "<script>alert('Something Went Wrong');window.location.href = 'Form.php';</script>";
                                }
                    }
                }
                else{
                    echo "<script>alert('Sorry You Cant Register You Are Less Than 18 ');</script>";
                }
        

    }
    else {
        echo "<script>alert('Access Denied!');window.location.href = 'index.php'</script>";
        // echo "<script>window.location.href = '../Admin.php'</script>";
    }
    
}
?>