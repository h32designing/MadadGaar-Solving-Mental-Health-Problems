<?php
include('connection.php');
session_start();

    //insert query
    if(isset($_POST['peer']))
    {
        $role = $_POST['role'];
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
    
        $emailSearch = "Select * from peer where pemail = '$email'";
        $query1 = mysqli_query($con, $emailSearch);
        $EmailCount = mysqli_num_rows($query1);
        if ($EmailCount) 
        {
            echo "<script>alert('Email Already Exist');</script>";

        }
        else {
            $file = $_FILES['image'];

            // echo '<pre>';
            //     print_r($file);
            // echo '</pre>';

            $filename = $_FILES['image']['name'];
            $filetype = $_FILES['image']['type'];
            $filetemploc = $_FILES['image']['tmp_name'];
            $filesize = $_FILES['image']['size'];

            $folder = "assets/img/";

            // echo $filetype;
            
                if($age >=18)
                {
                    if($filename != ""){
                            if(strtolower($filetype) == "image/jpeg" || strtolower($filetype) == "image/jpg" || strtolower($filetype) == "image/png"){
                                if($filesize <= 1000000){
                                    $time = strtotime($birthday);
                                    $newformat = date('Y-m-d',$time);
                                    // echo $newformat;
                            
                                    $pstatus = 0;
                                    
                                    $folder = $folder.$filename;
                                    $query = "insert into peer (pname, poccupation, pbirthday, pgender, pemail, pno, password, pmaritalstatus, plang, pcategory, ptherapy,pimage, pstatus, pkids, pbio, pcity, page, peducation, puniversity, psocialmedia, pmarketing) 
                                    values ('$name','$occupation','$newformat','$gender','$email','$phone', '$password','$marital','$languages','$category','$therapy', '$folder', '$pstatus','$kids', '$bio', '$city', '$age','$education','$uni','$socialmedia','$marketing')";
                                    $res = mysqli_query($con, $query);
                                    if($res == 1){
                                        $query = "insert into user(user_image, name, email, Password,contact,Role,peer_status) values('$folder', '$name','$email','$password','$phone','$role','$pstatus')";
                                        $res = mysqli_query($con, $query);

                                        $q1 = "SELECT * FROM `peer` WHERE `pemail` = '$email'";
                                        $r1 = mysqli_query($con, $q1);
                                        $assoc = mysqli_fetch_assoc($r1);
                                        $p_id = $assoc['pid'];

                                        $q2 = "INSERT INTO `p_remarks`(`pid`, `total`, `positive`, `negative`) VALUES ($p_id, 0, 0, 0)";
                                        $r2 = mysqli_query($con, $q2);
                                        if ($res) {
                                            move_uploaded_file($filetemploc,$folder);
                                            echo "<script>alert('Your Application Has Been Submitted For Review');</script>";
                                            if($r2)
                                            {
                                                echo "<script>alert('Remarks Inserted');window.location.href = 'index.php';</script>";

                                            }
                                            else{
                                                echo "<script>alert('Remarks Insertion Failed');</script>";

                                            }
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
                        echo "<script>alert('Please Upload An Image ');</script>";
                    }
                }
                else{
                    echo "<script>alert('Sorry You Cant Register You Are Less Than 18 ');</script>";
                }
        }

    }
  
    


   

?>

