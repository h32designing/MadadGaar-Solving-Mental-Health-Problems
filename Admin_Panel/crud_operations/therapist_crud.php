<?php
include("connection.php");
session_start();
if (@$_SESSION['DatabaseRole'] == 'Admin') {
    if (isset($_POST['submit'])) {
    
        if(@$_POST['name'] == "" && @$_POST['age'] == "" && @$_POST['qualification'] == "" && @$_POST['experience'] == "" && @$_POST['expertise'] == "" && @$_POST['license'] == ""){
            echo "<script>alert('Please Fill All Fields, which are mandantory!'); window.location.href ='../create_therapist.php';</script>";
        }
        else{
            $name = $_POST['name'];
            $age = $_POST['age'];
            $qualification = $_POST['qualification'];
            $experience = $_POST['experience'];
            $expertise = $_POST['expertise']; 
            $license = $_POST['license'];
            
            $FileName = $_FILES['image']['name'];
            $FileType = $_FILES['image']['type'];
            $FileTempLoc = $_FILES['image']['tmp_name'];
            $FileSize = $_FILES['image']['size'];
    
            if($FileName != ""){
                if(strtolower($FileType) == 'image/jpeg' || strtolower($FileType) == 'image/jpg' || strtolower($FileType) == 'image/png' ){
                    if($FileSize <= 1000000){
                        $folder = '../assets/img/'. $FileName;
                        $folderurl = 'assets/img/'. $FileName;
                        if(file_exists($folder)){
                            echo "<script>alert('Image already Exists in the Folder.'); window.location.href='create_therapist.php';</script>";
                        }
                    
                        else{
                            if(move_uploaded_file($FileTempLoc, $folder)){
                                
                                //Insert query
                                $InsertQuery = "insert into therapist (Image, name, age, qualification, Experience, Expertise, License_No) 
                                values ('$folderurl', '$name', '$age', '$qualification', '$experience' ,'$expertise' ,'$license')";
            
                                $asd = mysqli_query($con, $InsertQuery);
                                if($asd){      
                                echo "<script>alert('Image Inserted Successfully!')</script>";
                                echo "<script>alert('Data has been Inserted');window.location.href = '../create_therapist.php'</script>";
                                }
                                else{
                                    echo "<script>alert('Data Insertion Failed !!!');</script>";
                                }
                            }
                            else{
                                echo "<script>alert('Image Insertion Failed.')</script>";
                            }
                        }
                        
                            //Images Work End Here
                        
                        
                    }
                    else{
                        echo "<script>alert('Your Image Size should be less than or equal to 1MB.'); window.location.href = '../create_therapist.php';</script>";
                    }
                }
                else{
                        echo "<script>alert('Your Image Format is not Supported.'); window.location.href = '../create_therapist.php';</script>";
                    }
    
            }
            else{
                echo "<script>alert('You dont Select an Image.'); window.location.href = '../create_therapist.php';</script>";
            }
        }
        
    } 
    
    if (isset($_POST['edit'])) {

        if(@$_POST['name'] == "" && @$_POST['age'] == "" && @$_POST['qualification'] == "" && @$_POST['experience'] == "" && @$_POST['expertise'] == "" && @$_POST['license'] == ""){
            echo "<script>alert('Please Fill All Fields, which are mandantory!'); window.location.href ='../create_therapist.php';</script>";
        }
        else{

            $id = $_POST['id'];
             $name = $_POST['name'];
             $age = $_POST['age'];
             $qualification = $_POST['qualification'];
             $experience = $_POST['experience'];
             $expertise = $_POST['expertise']; 
             $license = $_POST['license'];
             
             $FileName = $_FILES['image']['name'];
             $FileType = $_FILES['image']['type'];
             $FileTempLoc = $_FILES['image']['tmp_name'];
             $FileSize = $_FILES['image']['size'];
        
        
            if (is_uploaded_file($FileTempLoc)) {    
                if (
                    strtolower($FileType) == 'image/jpeg' ||
                    strtolower($FileType) == 'image/jpg' ||
                    strtolower($FileType) == 'image/png'
                ) {
                    if ($FileSize <= 1000000) {
        
                        $folder = '../assets/img/'. $FileName;
                        $folderurl = 'assets/img/'. $FileName;
                        //1MB likha hai bytes mai convert kar k
                        if(file_exists($folder))
                        {
                            echo "<script>alert('Image already Exists in the Folder.'); </script>";                }
                        else{
                            
                            $query = "update therapist set Image = '$folderurl', name = '$name', age = $age, qualification = '$qualification', Experience = '$experience', Expertise = '$expertise', License_No = '$license' where Therapist_id = '$id'";
                            $res = mysqli_query($con, $query);
                            if ($res) {
                                echo "<script>alert('Data Updated Successfully');window.location.href = 'view_therapist.php';</script>";
                                move_uploaded_file($FileTempLoc, $folder);
                            } else {
                                echo "<script>alert('Something Went Wrong');window.location.href = 'index.php';</script>";
                            }
                        }
                    } else {
                        echo "<script>alert('Image should be less than 1MB !! ')</script>";
                    }
                } else {
                    echo "<script>alert('Image Formate not supported!! ')</script>";
                }
            } else {
                $query = "update therapist set name = '$name', age = $age, qualification = '$qualification', Experience = '$experience', Expertise = '$expertise', License_No = '$license' where Therapist_id = '$id'";
                echo $query;
                $res = mysqli_query($con, $query);
                if ($res) {
                    echo "<script>alert('Data Updated Successfully');window.location.href = '../view_therapist.php';</script>";
                } else {
                    echo "<script>alert('Something Went Wrong');window.location.href = '../index.php';</script>";
                }
            }
        }
    }
}

else {
    echo "<script>alert('Access Denied!')</script>";
    echo "<script>window.location.href = '../index.php'</script>";
}


?>