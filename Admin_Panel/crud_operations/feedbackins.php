<?php
include("connection.php");
session_start();
if (@$_SESSION['DatabaseRole'] == 'Customer') {
    if (isset($_POST['submit'])) {
        $pid = $_SESSION['pid'];
        $title = $_POST['title'];
        $desc = $_POST['description'];
        $peer = $_POST['peerfeed'];
        $name = $_SESSION['DatabaseName'];

        $InsertQuery = "insert into feedback (title, description, name) 
        values ('$title', '$desc', '$name')";

        $asd = mysqli_query($con, $InsertQuery);
        if($asd){      
            $query = "select * from `p_remarks` WHERE pid = $pid";
            $xyz = mysqli_query($con, $query);
            $res = mysqli_fetch_assoc($xyz);
            // echo $res['total'];
            // echo $res['positive'];
            if($peer == 1)
            {
                $total = $res['total']+1;
                $positive = $res['positive']+1;
                $q1 = "UPDATE `p_remarks` SET `total`= $total, `positive`= $positive WHERE pid = $pid";
                $abc = mysqli_query($con, $q1);
                echo "<script>alert('Thankyou For Your Feedback');window.location.href = '../index.php'</script>";

            }
            else
            {
                $total = $res['total']+1;
                $negative = $res['negative']+1;
                $q1 = "UPDATE `p_remarks` SET `total`= '$total', `negative`= '$negative' WHERE pid = $pid";
                $abc = mysqli_query($con, $q1);
                echo "<script>alert('Thankyou For Your Feedback');window.location.href = '../index.php'</script>";
            }
        }
        else{
            echo "<script>alert('Something Went Wrong !!!');</script>";
        }

    }

}
else{
    echo "window.location.href='index.php'";
}