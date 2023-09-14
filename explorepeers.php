<?php include('connection.php')?>
<?php include('header.php')?>


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Explore Peers</h2>
              <p>Our Valuable And Renown Peers Having One Or More Years Of Experience In Their Relevant Fields, are shown below! </p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home /</a></li>
            <li>Explore Groups</li>
          </ol>
        </div>
      </nav>
      
    </div><!-- End Breadcrumbs -->

    <section class="sample-page">
      <div data-aos="fade-up">
   <!-- ======= Portfolio Section ======= -->
   <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

      <?php
            $query = 'select * from peer where softdelete = 0';
            ($peerres = mysqli_query($con, $query)) or die('Incorrect Query!!');
        ?>
        <div class="section-header">
          <h2>Our Verified Peers</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
          
          <div class="col-lg-12 mb-4">
            <form id="form" class="php-email-form">
              <div class="row">

                <!-- <input type="hidden" class="form-control" name="pid" id="pid" value="<?= @$res['pid'] ?>" > -->

                <div class="col-md-2 form-group">
                  <input type="text" class="form-control" id="name" placeholder="By Name">
                  <!-- <span><button class="text-center btn btn-dark" id="name_btn">Search</button></span> -->
                </div>

                <div class="col-md-3 form-group mt-3 mt-md-0">
                  <!-- <input type="text" class="form-control" name="city" id="city" placeholder="By City" required> -->
                  <!-- <span><button class="text-center btn btn-dark" id="city_btn">Search</button></span> -->
                  <select  id="city" class="form-control">
                    <option selected disabled>Sort By City</option>
                    <?php 
                    include('connection.php');
                    $fetch = "SELECT DISTINCT(pcity) FROM `peer`";
                    $result = mysqli_query($con, $fetch);
                    while($row = mysqli_fetch_assoc($result)){

                    ?>
                    <option value="<?= $row['pcity'] ?>"><?= $row['pcity'] ?></option>
                    
                    <?php 
                    }
                    ?>
                  </select>
                </div>
                
                <div class="col-md-3 form-group mt-3 mt-md-0">
                  <select  id="category" class="form-control">
                    <option selected disabled>Sort By Category</option>
                    <?php 
                    include('connection.php');
                    $fetch = "SELECT DISTINCT(pcategory) FROM `peer`";
                    $result = mysqli_query($con, $fetch);
                    while($row = mysqli_fetch_assoc($result)){

                    ?>
                    <option value="<?= $row['pcategory'] ?>"><?= $row['pcategory'] ?></option>
                    <?php 
                    }
                    ?>
                  </select>
                  <!-- <span><button  class="text-center btn btn-dark" id="category_btn">Search</button></span> -->
                </div>

                <div class="col-md-2 form-group mt-3 mt-md-0">
                  <select  id="therapy" class="form-control">
                    <option selected disabled>Sort By Therapy</option>
                    <?php 
                    include('connection.php');
                    $fetch = "SELECT DISTINCT(ptherapy) FROM `peer`";
                    $result = mysqli_query($con, $fetch);
                    while($row = mysqli_fetch_assoc($result)){

                    ?>
                    <option value="<?= $row['ptherapy'] ?>"><?= $row['ptherapy'] ?></option>
                    <?php 
                    }
                    ?>
                  </select>
                </div>
                
                <div class="col-md-2 form-group mt-3 mt-md-0">
                  <select  id="kids" class="form-control">
                    <option selected disabled>Sort By Kids</option>
                    <?php 
                    include('connection.php');
                    $fetch = "SELECT DISTINCT(pkids) FROM `peer`";
                    $result = mysqli_query($con, $fetch);
                    while($row = mysqli_fetch_assoc($result)){

                    ?>
                    <option value="<?= $row['pkids'] ?>"><?= $row['pkids'] ?></option>
                    <?php 
                    }
                    ?>
                  </select>
                </div>
              </div>
              
            </form>
          </div>
          <div class="row gy-4 portfolio-container" id="data">

        
          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->
       

      </div>
    </section>

  </main><!-- End #main -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        $(document).ready(function(){
            function fetch(){
                $.ajax({
                    url: 'fetch.php',
                    type: "POST",
                    success:function(Data){
                        $('#data').html(Data)
                    }

                })
            }

            fetch()
               
            $("#name").keyup(function(){
                // let name =$("#searchName").val()
                let name =$(this).val()

                console.log(name);
                $.ajax({
                    url: "searchName.php",
                    type: "POST",
                    data: { name:name },
                    success: function(data){
                        $('#data').html(data)
                    }
                  })
              
                })
                // $('#name').trigger('reset')
              

            $('#city').change(function(){
                let city = $(this).val()

            console.log(city);
                $.ajax({
                    url: "sortcity.php",
                    type: "POST",
                    data: { city:city },
                    success: function(data){
                        $('#data').html(data)
                    }
                })
              })
              
            $('#category').change(function(){
                let category = $(this).val();

                $.ajax({
                    url: 'category.php',
                    type: "POST",
                    data: {category : category},
                    success:function(data){
                        $('#data').html(data)
                    }
                })
              })
            $('#therapy').change(function(){
                let therapy = $(this).val();

                $.ajax({
                    url: 'therapy.php',
                    type: "POST",
                    data: {therapy : therapy},
                    success:function(data){
                        $('#data').html(data)
                    }
                })
              })

              $('#kids').change(function(){
                  let kids = $(this).val();

                  $.ajax({
                      url: 'kids.php',
                      type: "POST",
                      data: {kids : kids},
                      success:function(data){
                          $('#data').html(data)
                      }
                  })
              })

        })
    </script>
  <?php include('footer.php')?>
