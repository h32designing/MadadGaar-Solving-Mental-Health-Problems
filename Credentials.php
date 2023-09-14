<?php include 'connection.php'; ?>
<?php session_start(); ?>

<!-- Login -->
<?php if (isset($_POST['login'])) {
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    $CheckEmail = "select * from user where email = '$Email'";

    $pid = "select * from peer where pemail = '$Email'";

    $query2 = mysqli_query($con, $pid);
    $peerFound = mysqli_num_rows($query2);

    $query = mysqli_query($con, $CheckEmail);
    $EmailFound = mysqli_num_rows($query);

    if($EmailFound) {
        $res = mysqli_fetch_assoc($query);
        $_SESSION['DatabasePassword'] = $res['Password'];
        if($peerFound)
        {
        $res2 = mysqli_fetch_assoc($query2);
        $_SESSION['peerid'] = $res2['pid'];
        $_SESSION['softdelete'] = $res2['softdelete'];

        }
        
        if($_SESSION['DatabasePassword'] == $Password){
            
            if($res['peer_status'] == 1 || $res['peer_status'] == 3){
                

                $_SESSION['DatabaseName'] = $res['name']; 
                $_SESSION['userid'] = $res['userid'];
                $_SESSION['CustEmail'] = $res['email'];
                $_SESSION['CustContact'] =$res['contact'];
                $_SESSION['status'] = $res['peer_status'];
                $_SESSION['DatabaseRole'] = $res['Role'];

                if(@$_SESSION['DatabaseRole'] == "Admin"){
                    echo "<script>alert('Login Successfully');window.location.href = 'Admin_Panel/index.php'</script>";
                }
                if(@$_SESSION['DatabaseRole'] == "Customer"){
                    echo "<script>alert('Login Successfully');window.location.href = 'Admin_Panel/index.php'</script>";
                }
                else if(@$_SESSION['DatabaseRole'] == "Peer"){
                    if(@$_SESSION['status'] == 1){
                        echo "<script>alert('You are verified now so, Login Successfully');window.location.href = 'Admin_Panel/index.php'</script>";
                    
                    }
                    else{
                        echo "<script>alert('Sorry, you are not verified by the Admin rightnow.');window.location.href = 'index.php'</script>";
                    }
                }
            }
            else{
                echo "<script>alert('Sorry, you are not verified by the Admin rightnow.');window.location.href = 'index.php'</script>";
            }

            
            
        }
        else{
            echo "<script>alert('Password is Incorrect'); window.location.href = 'index.php'</script>";
        }
    }
    else{
        echo "<script>alert('Email is Incorrect'); window.location.href = 'index.php'</script>";
    }
} 
?>

<!-- Register -->
<?php if (isset($_POST['regis'])) {
    $Name = $_POST['name'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    
    // $EncreptedPassword = password_hash($Password, PASSWORD_BCRYPT);

    $CheckEmail = "select * from user where email = '$email'";

    $query = mysqli_query($con, $CheckEmail);
    $EmailFound = mysqli_num_rows($query);

    if($EmailFound){
        echo "<script>alert('Email Already Exist')</script>";
    }
    else{
    
            $Role = "Customer";
            $InsertQuery = "insert into user (name,F_name, email, Password, contact, Role) values ('$Name', '$fname','$email','$password','$contact', '$Role')";
            $Check = mysqli_query($con, $InsertQuery);
            if($Check){
                echo "<script>alert('Data has been Inserted');window.location.href = 'pages-login.php'</script>";
            }
            else{
                echo "<script>alert('Data Insertion Failed !!!');window.location.href = 'pages-register.php'</script>";
            }
        
    }

} ?>


<?php
if(@$_GET['name'] == "Logout"){
    session_destroy();
    echo "<script>alert('You have Logout out Successfully!');window.location.href = 'index.php';</script>";
}
else if(isset($_POST['Logout'])) {
    session_destroy();
    echo "<script>alert('You have Logout out Successfully!');window.location.href = 'index.php';</script>";
}
?>