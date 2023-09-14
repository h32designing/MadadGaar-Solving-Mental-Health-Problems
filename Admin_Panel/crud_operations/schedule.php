<?php
include("connection.php");
session_start();
if (@$_SESSION['DatabaseRole'] == 'Peer') {
    if (isset($_POST['submit'])) {

        $day = $_POST['day'];
        $days = "";
        
        $time = $_POST['time'];
        $pid = $_POST['pid'];

        foreach($day as $chk1)  
            {  
                $days .= $chk1.",";  
            } 

            $query = "INSERT INTO `schedule`(`peer_id`, `day`, `time`) VALUES ('$pid', '$days', '$time')";
            $res = mysqli_query($con, $query);
            if($res)
            {
                echo "<script>alert('Data has been Inserted');window.location.href = '../Index.php'</script>";

            }
            else{
                echo "<script>alert('Data Insertion Failed');</script>";

            }
            

    }
}

if (@$_SESSION['DatabaseRole'] == 'Peer') {
    if (isset($_POST['edit'])) {

        $day = $_POST['day'];
        $days = "";
        $time = $_POST['time'];
        $pid = $_POST['pid'];

        foreach($day as $chk1)  
            {  
                $days .= $chk1.",";  
            } 

            $query = "update `schedule` set `day`= '$days', `time` = '$time' where peer_id = '$pid'";
            $res = mysqli_query($con, $query);
            if($res)
            {
                echo "<script>alert('Data has been Updated');window.location.href = '../Index.php'</script>";

            }
            else{
                echo "<script>alert('Data Updation Failed');</script>";

            }
            

    }
}
?>