<?php
include("connection.php");
session_start();
if (@$_SESSION['DatabaseRole'] == 'Admin') {
    if (isset($_POST['submit'])) {
    
        if(@$_POST['title'] == "" && @$_POST['date'] == "" && @$_POST['desc'] == "" && @$_POST['source'] == "" && @$_POST['schedule'] == "" && @$_POST['strength'] == "" && @$_POST['duration'] == ""  && @$_POST['therapistname'] == ""){
            echo "<script>alert('Please Fill All Fields, which are mandantory!'); window.location.href ='../create group.php';</script>";
        }
        else{
            $title = $_POST['title'];
            $date = $_POST['date'];
            $desc = $_POST['desc'];
            $source = $_POST['source'];
            $schedule = $_POST['schedule']; 
            $strength = $_POST['strength'];
            $duration = $_POST['duration'];
            $therapistname = $_POST['therapistname'];
            
            $FileName = $_FILES['image']['name'];
            $FileType = $_FILES['image']['type'];
            $FileTempLoc = $_FILES['image']['tmp_name'];
            $FileSize = $_FILES['image']['size'];
    
            if($FileName != ""){
                if(strtolower($FileType) == 'image/jpeg' || strtolower($FileType) == 'image/jpg' || strtolower($FileType) == 'image/png' ){
                    if($FileSize <= 1000000){
                        $folder = '../group images/'. $FileName;
                        $folderurl = 'group images/'. $FileName;
                        if(file_exists($folder)){
                            echo "<script>alert('Image already Exists in the Folder.'); window.location.href='../create group.php';</script>";
                        }
                    
                        else{
                            if(move_uploaded_file($FileTempLoc, $folder)){
                                
                                //Insert query
                                $InsertQuery = "insert into groups( group_image, Title, Description, Start_Date, Source_of_communication, Schedule, Strength, Duration, Therapist_Name) 
                                values ('$folderurl', '$title', '$desc', '$date', '$source' ,'$schedule' ,'$strength' , '$duration', '$therapistname')";
            
                                $asd = mysqli_query($con, $InsertQuery);
                                if($asd){      
                                echo "<script>alert('Image Inserted Successfully!')</script>";
                                echo "<script>alert('Data has been Inserted');window.location.href = '../create group.php'</script>";
                                }
                                else{
                                    echo "<script>alert('Data Insertion Failed !!!');window.location.href = '../create group.php'</script>";
                                }
                            }
                            else{
                                echo "<script>alert('Image Insertion Failed.')</script>";
                            }
                        }
                        
                            //Images Work End Here
                        
                        
                    }
                    else{
                        echo "<script>alert('Your Image Size should be less than or equal to 1MB.'); window.location.href = '../create group.php';</script>";
                    }
                }
                else{
                        echo "<script>alert('Your Image Format is not Supported.'); window.location.href = '../create group.php';</script>";
                    }
    
            }
            else{
                echo "<script>alert('You dont Select an Image.'); window.location.href = '../create group.php';</script>";
            }
        }
        
    } 

    if (isset($_POST['edit'])) {

        if(@$_POST['title'] == "" && @$_POST['date'] == "" && @$_POST['desc'] == "" && @$_POST['source'] == "" && @$_POST['schedule'] == "" && @$_POST['strength'] == "" && @$_POST['duration'] == ""  && @$_POST['therapistname'] == ""){
            echo "<script>alert('Please Fill All Fields, which are mandantory!'); window.location.href ='../create group.php';</script>";
        }
        else{

            $groupid = $_POST['groupid'];
            $title = $_POST['title'];
            $date = $_POST['date'];
            $desc = $_POST['desc'];
            $source = $_POST['source'];
            $schedule = $_POST['schedule']; 
            $strength = $_POST['strength'];
            $duration = $_POST['duration'];
            $therapistname = $_POST['therapistname'];
            
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
        
                        $folder = '../group images/'. $FileName;
                        $folderurl = 'group images/'. $FileName;
                        //1MB likha hai bytes mai convert kar k
                        if(file_exists($folder))
                        {
                            echo "<script>alert('Image already Exists in the Folder.'); window.location.href='../create group.php';</script>";                }
                        else{
                            
                            $query = "update groups set group_image = '$folderurl', Title = '$title', Description = '$desc', Start_Date = '$date', Source_of_communication = '$source', Schedule = '$schedule', Strength = '$strength', Duration = '$duration', Therapist_Name = '$therapistname' where group_id = '$groupid'";
                            $res = mysqli_query($con, $query);
                            if ($res) {
                                echo "<script>alert('Data Updated Successfully');window.location.href = '../view_group.php';</script>";
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
                $query = "update groups set Title = '$title', Description = '$desc', Start_Date = '$date', Source_of_communication = '$source', Schedule = '$schedule', Strength = '$strength', Duration = '$duration', Therapist_Name = '$therapistname' where group_id = '$groupid'";
                // echo $query;
                $res = mysqli_query($con, $query);
                if ($res) {
                    echo "<script>alert('Data Updated Successfully');window.location.href = '../view_group.php';</script>";
                } else {
                    echo "<script>alert('Something Went Wrong');window.location.href = 'index.php';</script>";
                }
            }
        }
    }




}
else {
    echo "<script>alert('Access Denied!');window.location.href = '../index.php'</script>";
}


?>