<?php
include('connection.php');
session_start();
$pid = $_POST['pid'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$time = $_POST['time'];
$date = $_POST['date'];
$uid = $_SESSION['userid'];



$query  = "Select * from schedule where peer_id = $pid";
$schrows = mysqli_query($con, $query);
$schedule = mysqli_fetch_assoc($schrows);
$sch = mysqli_num_rows($schrows);


if($sch)
{
    if(!in_array(strtolower(date("l",strtotime($date))),explode(',',strtolower($schedule['day']))))
    {
        
        echo "Please Select Days In Which Peer Is Free";
    }
    else{
        $day = strtolower(date("l",strtotime($date)));
        $qu = "select * from enrolled_in_schedule where peer_id = $pid and date = $date";
        $qures = mysqli_query($con, $qu);
        $qurows = mysqli_num_rows($qures);

        if($qurows > 0)
        {
            echo "There Is Already A Session Of The User, Please Select Any Other Slot";
        }
        else{
            $query = "INSERT INTO `enrolled_in_schedule` (`user_id`, `peer_id`, `email`, `title`, `contact`, `date`, `time`, `day`) VALUES ($uid, $pid, '$email', '$subject', '$phone', '$date', '$time', '$day')";
            $GetData = mysqli_query($con, $query);
            echo "Your Session Has Been Booked";
        }
        
    }
}
else{
    echo "This Peer Has Not Decided His Scheule Yet";
}


?>