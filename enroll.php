<?php
include('connection.php');
session_start();

if(isset($_POST['groupenroll']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
  
    $city = $_POST['city'];
    $gid = $_POST['gid'];
    
// echo $gid;
// echo $fname;
// echo $lname;
// echo $email;
// echo $phone;
// echo $country;
// echo $city;





   
    $usersearch = "Select * from enrolled_in_groups where email = '$email' AND group_id = '$gid'";
    $query1 = mysqli_query($con, $usersearch);
    $UserCount = mysqli_num_rows($query1);
    if ($UserCount) 
    {
        echo "<script>alert('You Have Already Registered');</script>";

    }
    else {
    

        // echo $filetype;
        $count = "Select * from enrolled_in_groups where group_id = '$gid'";
        $query3 = mysqli_query($con, $count);
        $groupsearch = mysqli_num_rows($query3);


        $group = "Select * from groups where group_id = '$gid'";
        $query4 = mysqli_query($con, $group);
        $res3 = mysqli_fetch_assoc($query4);
         $limit = $res3['Strength'];
        //  echo $limit;
        //  echo $groupsearch;

                if($groupsearch > $limit ){
                    echo "<script>alert('User Limit Has Been Reached');</script>";
                }
                else
                {
                    $query = "insert into `enrolled_in_groups`(FirstName, LastName, Contact_No, email, city, country, group_id)
                    values('$fname','$lname','$phone','$email','$city','$country', '$gid')";
                    $res = mysqli_query($con, $query);
                    if ($res) {
                        echo "<script>alert('Data Inserted Successfully'); window.location.href='exploregroups.php';</script>";
                    } else {
                        echo "<script>alert('Data Insertion Failed')</script>";
                    }


                }
        
   }

}



?>

