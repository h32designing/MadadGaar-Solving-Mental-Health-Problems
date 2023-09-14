<?php
require("db.php");
session_start();

if(@$_SESSION['DatabaseRole'] == 'Customer')
{
  $pid = $_GET['id'];
$_SESSION['pid'] = $pid;
echo $pid;
}
if(@$_SESSION['DatabaseRole'] == 'Customer' || @$_SESSION['DatabaseRole'] == 'Peer'){

  $select_q = "select * from message where email = '".@$_SESSION['CustEmail']."'";
  $run_q = mysqli_query($db, $select_q);
  $fetch_data = mysqli_fetch_assoc($run_q);
  $email = $_SESSION['CustEmail'];
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatRoom</title>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    
    <h1>Live_Chat</h1>
    <div class="chat">
    <div class="input_msg">
      <a href="../crud_operations/delete_chat.php?email=<?= @$email ?>"><button id="finishbtn">Finish Chat</button></a>
    </div>
      <h2>Welcome to <span><?= @$_SESSION['DatabaseName'] ?></span></h2>
    
      <div class="msg">
        
      </div>
      
      <div class="input_msg">
        <input type="text" placeholder="write message" id="input_msg">
        <button onclick="update()">Send</button>
      </div>
    </div>
  </body>
  <script src="js/script.js"></script>

  </html>

  <?php
}else{

  header("location: ../../index.php");


}
?>