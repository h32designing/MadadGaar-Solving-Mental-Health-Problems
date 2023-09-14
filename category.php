<?php 

include('connection.php');
 
$category = $_POST['category'];

$fetch = "SELECT * FROM `peer` WHERE `pcategory` LIKE '%$category%' ";
$result = mysqli_query($con, $fetch);

$output = '';

while($data = mysqli_fetch_assoc($result)){
    $output .= '
    <div>

      <div class="col-xl-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <a href='.$data["pimage"].' data-gallery="portfolio-gallery-app" class="glightbox"><img src='.$data["pimage"].' class="img-fluid"></a>
          <div class="portfolio-info">
            <h4><a href="peer.php?id='.$data["pid"].'" class="streched-link" title="More Details">'.$data["pname"].'</h4>
            <p>'.$data["page"].' | '.$data["poccupation"].'| '.$data["pmaritalstatus"].'</p>
          </a></div>
        </div>
      </div>

    </div>';
}

echo $output;


?>