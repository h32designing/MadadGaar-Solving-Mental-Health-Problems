<?php

include("connection.php");
session_start();
if (@$_SESSION['DatabaseRole'] == 'Admin') {

    $ID = $_GET['id'];
    $peerquery = "select * from peer where pid = $ID";
    $runpeer = mysqli_query($con, $peerquery);
    $getpeer = mysqli_fetch_assoc($runpeer);
    $peer_email = $getpeer['pemail'];

    $query = "update peer set pstatus = 2 where pid= $ID";
    $run = mysqli_query($con, $query);
    if($run == 1){
        $query = "update user set peer_status = 2 where email = '$peer_email'";
        $run = mysqli_query($con, $query);
    }
    if($run)
    {
        echo "<script>alert('Peer Status Updated');window.location.href='../index.php'; </script>";
    }
    else{
        echo "<script>alert('Peer Status Updation Failed');window.location.href='../index.php'; </script>";

    }
}
else {
    echo "<script>alert('Access Denied!');window.location.href = '../../index.php'</script>";
    // echo "<script>window.location.href = '../Admin.php'</script>";
}


?>