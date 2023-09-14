<?php
include("connection.php");
session_start();
if (@$_SESSION['DatabaseRole'] == 'Customer' || @$_SESSION['DatabaseRole'] == 'Peer') {
    if (isset($_POST['submit'])) {
        if($_POST['name'] == "" && $_POST['email'] == "" && $_POST['subject'] == "" && $_POST['message'] == ""){
            echo "<script>alert('Please fill all these fields.');window.location.href='index.php'</script>";
        }
        else{

            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
    
            $InsertQuery = "insert into contact (name, email, subject, message) 
            values ('$name', '$email', '$subject', '$message')";
    
            $asd = mysqli_query($con, $InsertQuery);
            if($asd){      
            echo "<script>alert('Your Query/Complain Has Been Sent To Our Support');window.location.href = '../../index.php'</script>";
            }
            else{
                echo "<script>alert('Something Went Wrong !!!');</script>";
            }
        }

    }

}
else{
    echo "<script>window.location.href='index.php'</script>";
}