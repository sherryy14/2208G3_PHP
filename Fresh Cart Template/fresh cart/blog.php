<?php
include 'header.php';

?>


<!-- section -->
<main>
  <div class="mt-4">
    <div class="container">
      <div class="row ">
        <div class="col-12">
          <!-- breadcrumb -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="#!">Home</a></li>
          <li class="breadcrumb-item"><a href="#!">Blog</a></li>
          <li class="breadcrumb-item active" aria-current="page">Freshcart Blog</li>
        </ol>
      </nav>
      </div>
      </div>
    </div>
  </div>
  <!-- section -->
  <section class="mt-8">
    <div class="container">
      <div class="row">
        <!-- logo -->
        <div class="col-12">
          <h1 class="fw-bold">FreshCart Blog</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- section -->
  <section class="mt-6 mb-lg-14 mb-8">
    <!-- container -->
  <div class="container">
    <div class="row d-flex align-items-center mb-8">
    <?php 
                                $blog= "SELECT * FROM  `blog` ";
                                $resultblog = mysqli_query($conn,$blog);

                                while($brow = mysqli_fetch_array($resultblog)){

                               
                                ?>
      <div class="col-12 col-md-12 col-lg-8"><a href="#!">
        <!-- img -->
        <div class="img-zoom">
          <img src="./assets/images/blog/<?php echo $brow['Blog_Image'] ?>" alt="" class="img-fluid w-100">
        </div>
      </a>
      
     
    </div>
      <?php } ?>
      <!-- text -->
      <?php 
                                $blog= "SELECT * FROM  `blog`";
                                $resultblog = mysqli_query($conn,$blog);

                                while($brow = mysqli_fetch_array($resultblog)){

                               
                                ?>
      <div class="col-12 col-md-12 col-lg-4">
        <div class="ps-lg-8 mt-8 mt-lg-0">
          <h2 class="mb-3"><a href="#!" class="text-inherit"><?php echo $brow['Title'] ?></a></h2>
          <p><?php echo $brow['Description'] ?></p>
          <div class="d-flex justify-content-between text-muted"><span><small><?php echo $brow['Date'] ?></small></span><span><small>Read time: <span class="text-dark fw-bold"><?php echo $brow['Time'] ?></span></small></span>
          </div>
     
        </div>
      </div>
      <?php } ?>
    </div>
    <!-- row -->
    <div class="row">
    <?php 
                                $blogcart= "SELECT * FROM  `blog_cart` ";
                                $resultblogcart = mysqli_query($conn,$blogcart);

                                while($bcrow = mysqli_fetch_array($resultblogcart)){

                               
                                ?>
      <div class="col-12 col-md-6 col-lg-4 mb-8">

        <div class="mb-4">
          <a href="#!">
            <!-- img -->
            <div class="img-zoom">
              <img src="./assets/images/blog/<?php echo $bcrow['Blog_Image'] ?>" alt="" class="img-fluid w-100 ">
            </div>
          </a>
        </div>
        <!-- text -->
        <div class="mb-3"><a href="#!">Recipes</a>
        </div>
        <!-- text -->
        <div>
          <h2 class="h5"><a href="#!" class="text-inherit"><?php echo $bcrow['Title'] ?></a></h2>
          <p><?php echo $bcrow['Description'] ?></p>
          <div class="d-flex justify-content-between text-muted mt-4"><span><small><?php echo $bcrow['Date'] ?></small></span><span><small>Read time: <span class="text-dark fw-bold"><?php echo $bcrow['Time'] ?></span></small></span>
          </div>
        </div>

      </div>
        <?php } ?>

   
     

    </div>
  </div>
  </section>

</main>





   <!-- Footer -->
   <?php
include 'footer.php';

?>

  <!-- Javascript-->
  <!-- Libs JS -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>




</body>


<!-- Mirrored from freshcart.codescandy.com/pages/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:10:34 GMT -->
</html>