<!-- ======= Sidebar ======= -->
<?php
include 'connection.php';

if (@$_SESSION['DatabaseRole'] == 'Admin') { ?>
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <!-- Go to Home Page -->
  <li class="nav-item">
    <a class="nav-link " href="../index.php">
      <i class="bi bi-grid"></i>
      <span>Goto Home</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="create group.php">
      <i class="bi bi-person"></i>
      <span>Create Groups</span>
    </a>
  </li><!-- End Group Page Nav -->

  <!-- View Groups -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="view_group.php">
    <i class="bi bi-layout-text-window-reverse"></i>
      <span>View Groups</span>
    </a>
  </li>

  <!-- Create Therapist -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="create_therapist.php">
    <i class="bi bi-journal-text"></i>
      <span>Create Therapist</span>
    </a>
  </li>

  <!-- View Therapist -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="view_therapist.php">
    <i class="bi bi-card-list"></i>
      <span>View Therapist</span>
    </a>
  </li>

  <!-- View Schedule -->
  <li class="nav-item">
      <a class="nav-link collapsed" href="view_all_schedule.php">
      <i class="bi bi-layout-text-window-reverse"></i>
        <span>View Sessions</span>
      </a>
  </li>

      <!-- View User -->
    <li class="nav-item">
          <a class="nav-link collapsed" href="view_user.php">
          <i class="bi bi-layout-text-window-reverse"></i>
            <span>View User</span>
          </a>
    </li>
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Peers</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="view_peer.php?id=0">
          <i class="bi bi-circle"></i><span>New Peers</span>
        </a>
      </li>
      <li>
        <a href="view_peer.php?id=1">
          <i class="bi bi-circle"></i><span>Accepted Peers</span>
        </a>
      </li>
      <li>
        <a href="view_peer.php?id=2">
          <i class="bi bi-circle"></i><span>Rejected Peers</span>
        </a>
      </li>
      
    </ul>
  </li><!-- End Forms Nav -->

   <!-- View profile -->
   <li class="nav-item">
        <a class="nav-link collapsed" href="view_remarks.php">
        <i class="bi bi-card-list"></i>
          <span>View Peer Remarks</span>
        </a>
    </li>

    <!-- View profile -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="view_queries.php">
        <i class="bi bi-card-list"></i>
          <span>View Contact Queries</span>
        </a>
    </li>
      <!-- View profile -->
  <li class="nav-item">
        <a class="nav-link collapsed" href="view_feedback.php">
        <i class="bi bi-card-list"></i>
          <span>View Feedback</span>
        </a>
    </li>
  <!-- View profile -->
  <li class="nav-item">
        <a class="nav-link collapsed" href="profile.php">
        <i class="bi bi-person"></i>
          <span>View My Profile</span>
        </a>
    </li>
</ul>

</aside><!-- End Sidebar-->
<?php }
else if (@$_SESSION['DatabaseRole'] == 'Peer') { ?>
<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="index.php">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <!-- Go to Home Page -->
    <li class="nav-item">
      <a class="nav-link " href="../index.php">
        <!-- <i class="bi bi-grid"></i> -->
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <span>Goto Home</span>
      </a>
    </li>



    <!-- View Groups -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="view_group.php">
      <i class="bi bi-layout-text-window-reverse"></i>
        <span>View Groups</span>
      </a>
    </li>
   
    <!-- View Therapist -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="view_therapist.php">
      <i class="bi bi-card-list"></i>
        <span>View Therapist</span>
      </a>
    </li>
<?php
$id = $_SESSION['peerid'];
$query = "Select * from schedule where peer_id = '$id'";
$res = mysqli_query($con,$query);
$rows = mysqli_num_rows($res);
if($rows>0)
{ ?>
  <!-- View Schedule -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="view_schedule.php">
    <i class="bi bi-layout-text-window-reverse"></i>
      <span>View Schedule</span>
    </a>
  </li>

   <!-- View Schedule -->
   <li class="nav-item">
    <a class="nav-link collapsed" href="view_sessions.php">
    <i class="bi bi-layout-text-window-reverse"></i>
      <span>My Sessions</span>
    </a>
  </li>
<?php }
else{ ?>
    <!-- Create Schedule -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="create_schedule.php">
      <i class="bi bi-journal-text"></i>
        <span>Create Schedule</span>
      </a>
    </li>
<?php }
?>
    <!-- View profile -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="profile.php">
        <i class="bi bi-person"></i>
          <span>View My Profile</span>
        </a>
    </li>

       <!-- View Groups -->
      <li class="nav-item">
      <a class="nav-link collapsed" href="support.php">
      <i class="bi bi-layout-text-window-reverse"></i>
        <span>Our Support</span>
      </a>
    </li>
   
   

  </ul>
</aside><!-- End Sidebar-->

<?php }
else if (@$_SESSION['DatabaseRole'] == 'Customer') { ?>
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
  
      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
  
      <!-- Go to Home Page -->
      <li class="nav-item">
        <a class="nav-link " href="../index.php">
          <!-- <i class="bi bi-grid"></i> -->
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <span>Goto Home</span>
        </a>
      </li>
  
      <!-- View Groups -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="view_group.php">
        <i class="bi bi-layout-text-window-reverse"></i>
          <span>View Groups</span>
        </a>
      </li>

      <!-- View Sessions -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="view_usession.php">
        <i class="bi bi-layout-text-window-reverse"></i>
          <span>View Session</span>
        </a>
      </li>
  
      <!-- View Therapist -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="view_therapist.php">
        <i class="bi bi-card-list"></i>
          <span>View Therapist</span>
        </a>
      </li>
  
       <!-- View User -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="view_user.php">
        <i class="bi bi-layout-text-window-reverse"></i>
          <span>View User</span>
        </a>
      </li>
      
       <!-- View profile -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="profile.php">
        <i class="bi bi-person"></i>
          <span>View My Profile</span>
        </a>
    </li>

      <!-- View Groups -->
      <li class="nav-item">
      <a class="nav-link collapsed" href="support.php">
      <i class="bi bi-layout-text-window-reverse"></i>
        <span>Our Support</span>
      </a>
    </li>
    </ul>

   
  </aside><!-- End Sidebar-->
  <?php }
else {
    echo "<script>window.location.href = '../index.php'</script>";
}

?>
  