<?php
include('connection.php');
session_start();
if (@$_SESSION['DatabaseRole'] == 'Admin' || @$_SESSION['DatabaseRole'] == 'Customer') {
    
    //Update query
    if(isset($_POST['update']))
    {
        if($_POST['name'] == "" && $_POST['fname'] == "" && $_POST['email'] == "" && $_POST['password'] == "" && $_POST['contact'] == "" && $_POST['role'] == "" && $_POST['status'] == "")
        {
            echo "<script>alert('Please fill all the fields.');window.location.href = '../profile.php';</script>";
        }
        else{

            $userid = $_POST['userid'];
            $name = $_POST['name'];
            $fname = $_POST['fname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $contact = $_POST['contact'];
            $role = $_POST['role'];
            
            
            $file = $_FILES['image'];
            $filename = $_FILES['image']['name'];
            $filetype = $_FILES['image']['type'];
            $filetemploc = $_FILES['image']['tmp_name'];
            $filesize = $_FILES['image']['size'];

            $folder = "assets/img/";

            if($filename != ""){
                if(strtolower($filetype) == "image/jpeg" || strtolower($filetype) == "image/jpg" || strtolower($filetype) == "image/png"){
                    if($filesize <= 1000000){
                        $status = 3;
                        $Folder = $folder.$filename;
                        $query = "update user set user_image = '$Folder', name = '$name', F_name = '$fname', email = '$email', Password = '$password', contact = '$contact', Role = '$role', peer_status = '$status' 
                        where userid  = '$userid'";
                        $result = mysqli_query($con, $query);
                        if ($result) {
                            move_uploaded_file($filetemploc,$Folder);
                            echo "<script>alert('Your Profile Has Been Updated.');window.location.href = 'profile.php';</script>";
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
                // Update data without image
                $status = 3;
                $query = "update user set name = '$name', F_name = '$fname', email = '$email', Password = '$password', contact = '$contact', Role = '$role', peer_status = '$status' 
                where userid  = '$userid'";
                $result = mysqli_query($con, $query);
                if ($result) {
                    echo "<script>alert('Your Profile Has Been Updated.');window.location.href = 'profile.php';</script>";
                } 
                        
            }
                    
        }
        
    }
}
else {
    echo "<script>alert('Access Denied!');window.location.href = '../index.php'</script>";
    // echo "<script>window.location.href = '../Admin.php'</script>";
}

?>

