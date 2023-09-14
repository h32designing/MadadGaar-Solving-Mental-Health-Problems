<?php
session_start();
include "db.php";

$q = "SELECT * FROM `message`";
if ($rq = mysqli_query($db, $q)) {

  if (mysqli_num_rows($rq) > 0) {

    while ($data = mysqli_fetch_assoc($rq)) {
      if($data["email"]==@$_SESSION['CustEmail']){
        ?>
  <p class="sender">
    <!-- Sender -->
    <span><?= @$data["email"] ?>: <?php echo @$_SESSION['DatabaseName'] ?></span>
    <?= @$data["msg"] ?>
    <span ><i><?= @$data["datetime"] ?></i></span>
  </p>

  <?php
        }else{
  ?>
  <p>
    <!-- Receiver -->
    <span><?= @$data["email"] ?>: <?php echo @$data["name"] ?></span>
    <?= @$data["msg"] ?>
    <span><i><?= @$data["datetime"] ?></i></span>
  </p>

  <?php
      }
    }
  } else {

    echo "<h3> Chat is empty at this moment!!</h3>";
  }
}




?>