<?php 
require("connection.php");
require("header.php");
require("sidebar.php");

@$ID = $_GET['id'];
if (@$_SESSION['DatabaseRole'] == 'Admin') {
  $select = "Select * from peer where pstatus = '$ID'";
  $run = mysqli_query($con, $select); ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Peer Table</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Peers</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Peers Details</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Occupation</th>
                    <th scope="col">Email</th>
                    <th scope="col">Category</th>
                    <th scope="col">Status</th>             
                  </tr>
                </thead>
                <tbody>
                    <?php while($data = mysqli_fetch_assoc($run)){ ?>
                      

                  <tr>
                  
                    <th scope="row"><?= $data['pid'] ?></th>
                    <td><img src="../<?= $data['pimage'] ?>" style="width:50px; height:50px; border-radius:50%;" alt=""></td>
                    <td><a href="peer_detail.php?id=<?= $data['pid'] ?>"><?= $data['pname'] ?></a></td>
                    <td style="align-items:justify;"><?= $data['poccupation'] ?></td>
                    <td><?= $data['pemail'] ?></td>
                    <td><?= $data['pcategory'] ?></td>
                
                      <?php
                      if($ID == 0)
                      {?>
                    <td></td>
                    <td><button name="approve" class="btn btn-dark text-white"><a href="crud_operations/peerapprove.php?id=<?= $data['pid'] ?>">Approve</a></button></td>
                    <td><button name="reject" class="btn btn-dark text-white"><a href="crud_operations/peerreject.php?id=<?= $data['pid'] ?>">Reject</a></button></td>
                      <?php
                      }
                      elseif($ID == 1)
                      { ?>
                    <td>Approved</td>
                    <td><button name="reject" class="btn btn-dark text-white"><a href="crud_operations/peerreject.php?id=<?= $data['pid'] ?>">Reject</a></button></td>
                      <?php
                      }
                      else
                      { ?>
                        <td>Rejected</td>
                        <td><button name="approve" class="btn btn-dark text-white"><a href="crud_operations/peerapprove.php?id=<?= $data['pid'] ?>">Approve</a></button></td>
                    <td><button  name="reject" class="btn btn-dark text-white"><a href="crud_operations/peerdelete.php?id=<?= $data['pid'] ?>">Delete</a></button></td>                      
                    <?php
                    } ?>


                  
                    <!-- <td><button class="btn btn-info text-dark"><a href="#">Del</a></button></td> -->
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

 <?php
}

else if (@$_SESSION['DatabaseRole'] == 'Customer') {
  $select = "Select * from peer where pstatus = '$ID'";
  $run = mysqli_query($con, $select); ?>
    
    <main id="main" class="main">
  
      <div class="pagetitle" style="margin-top:-50px">
        <h1>Peer Table</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Peers</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
  
      <section class="section">
        <div class="row">
  
          <div class="col-lg-12">
  
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Peers Details</h5>
  
                <!-- Table with stripped rows -->
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Image</th>
                      <th scope="col">Name</th>
                      <th scope="col">Occupation</th>
                      <th scope="col">Email</th>
                      <th scope="col">Category</th>
                      <!-- <th scope="col">Status</th>              -->
                    </tr>
                  </thead>
                  <tbody>
                      <?php while($data = mysqli_fetch_assoc($run)){ ?>
                        
  
                    <tr>
                    
                      <th scope="row"><?= $data['pid'] ?></th>
                      <td><img src="../<?= $data['pimage'] ?>" style="width:50px; height:50px; border-radius:50%;" alt=""></td>
                      <td><a href="peer_details.php?id=<?= $data['pid'] ?>"><?= $data['pname'] ?></a></td>
                      <td style="align-items:justify;"><?= $data['poccupation'] ?></td>
                      <td><?= $data['pemail'] ?></td>
                      <td><?= $data['pcategory'] ?></td>
                  
                        <?php
                        if($ID == 1)
                        { ?>
                      <td>Approved</td>
                        <?php
                        } ?>
                    
  
  
                    
                      <!-- <td><button class="btn btn-info text-dark"><a href="#">Del</a></button></td> -->
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->
  
              </div>
            </div>
  
          </div>
        </div>
      </section>
  
    </main>

    




  <?php
}

require("footer.php");
?>