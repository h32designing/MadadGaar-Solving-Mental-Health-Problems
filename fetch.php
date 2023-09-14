<?php 

include('connection.php');

$fetch = "SELECT * FROM `peer`";
$result = mysqli_query($con, $fetch);

$output = '';

while($row = mysqli_fetch_assoc($result)){
    $output .= '
    <div class="row gy-4 portfolio-container">

      <div class="col-xl-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <a href='.$row["pimage"].' data-gallery="portfolio-gallery-app" class="glightbox"><img src='.$row["pimage"].' class="img-fluid"></a>
          <div class="portfolio-info">
            <h4><a href="peer.php?id='.$row["pid"].'" class="streched-link" title="More Details">'.$row["pname"].'</h4>
            <p>'.$row["page"].' | '.$row["poccupation"].'| '.$row["pmaritalstatus"].'</p>
          </a></div>
        </div>
      </div>

    </div>';

}

echo $output;

?>