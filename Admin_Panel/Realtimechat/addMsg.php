
<?php
session_start();
include "db.php";
$msg = $_GET["msg"];
$email = @$_SESSION['CustEmail'];
$name = @$_SESSION['DatabaseName'];
date_default_timezone_set("Asia/Karachi");
// $datetime = date("d-m-y h:i:sa");

$q = "SELECT * FROM `user` WHERE email ='$email'";
if ($rq = mysqli_query($db, $q)) {
  if (mysqli_num_rows($rq) == 1) {

    $q = "INSERT INTO `message`(`email`,`name`, `msg`) VALUES ('$email', '$name', '$msg')";
    $rq = mysqli_query($db, $q);


  }
}



?>