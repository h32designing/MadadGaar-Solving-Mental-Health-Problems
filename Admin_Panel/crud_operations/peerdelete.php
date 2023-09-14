<?php

include("connection.php");
session_start();
if (@$_SESSION['DatabaseRole'] == 'Admin' || @$_SESSION['DatabaseRole'] == 'Peer') {

    $ID = $_GET['id'];
    $peerquery = "select * from peer where pid = $ID";
    $runpeer = mysqli_query($con, $peerquery);
    $getpeer = mysqli_fetch_assoc($runpeer);
    $peer_email = $getpeer['pemail'];

    $query = "delete from peer where pid= $ID";
    $run = mysqli_query($con, $query);
    if($run == 1){
        $query = "delete from user where email = '$peer_email'";
        $run = mysqli_query($con, $query);
    }
    if($run)
    {
        echo "<script>alert('Peer Deleted');window.location.href='../index.php'; </script>";
    }
    else{
        echo "<script>alert('Peer Deletion Failed');window.location.href='../index.php'; </script>";

    }
}
else {
    echo "<script>alert('Access Denied!');window.location.href = '../../index.php'</script>";
    // echo "<script>window.location.href = '../Admin.php'</script>";
}


?>