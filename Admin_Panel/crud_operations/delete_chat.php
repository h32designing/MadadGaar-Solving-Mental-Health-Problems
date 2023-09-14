<?php

include("connection.php");
session_start();
if (@$_SESSION['DatabaseRole'] == 'Customer' || @$_SESSION['DatabaseRole'] == 'Peer') {

    if($_GET['email'] != ""){

        $email = $_GET['email'];
        
        $chatquery = "delete from message where email = '$email'";
        $runquery = mysqli_query($con, $chatquery);
        
        if($runquery)
        {
            echo "<script>alert('Chat has been Ended');window.location.href='../chatfeed.php'; </script>";
        }
        else{
            echo "<script>alert('Chat Deletion Failed');window.location.href='../chatfeed.php'; </script>";
    
        }
    }
    else{
        header("location:../index.php");
    }
}
else {
    echo "<script>alert('Access Denied!');window.location.href = '../../index.php'</script>";
    // echo "<script>window.location.href = '../Admin.php'</script>";
}


?>