<?php
include 'header.php'
?>
  
  
  <main>
  <!-- section -->
  <div class="mt-4">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row ">
        <!-- col -->
        <div class="col-12">
          <!-- breadcrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#!">Home</a></li>
              <li class="breadcrumb-item"><a href="#!">Blog</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blog Category</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <!-- section -->
  <section class="mt-8">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-12 mb-4">
          <!-- heading -->
          <h1 class="fw-bold">Recipes</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- section -->
  <section class="mb-lg-14 mb-8">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <!-- col -->
        
      <?php 
                                $blogcategory ="SELECT * FROM  `blog_category`";
                                $resultblogcategory  = mysqli_query($conn,$blogcategory );

                                while($bcatrow = mysqli_fetch_array($resultblogcategory )){

                               
                                ?>
        <div class="col-12 col-md-6 col-lg-4 mb-8">
          <div class="mb-4">
            <a href="#!">
              <!-- img -->
              <div class="img-zoom">
                <img src="./assets/images/blog/<?php echo $bcatrow['Image'] ?>" alt="" class="img-fluid w-100">
              </div>
            </a></div>
          <div class="mb-3"><a href="#!">Recipes</a>

          </div>
          <!-- text -->
          <div>
            <h2 class="h5"><a href="#!" class="text-inherit"><?php echo $bcatrow['Title'] ?></a></h2>
            <p><?php echo $bcatrow['Description'] ?></p>
            <div class="d-flex justify-content-between text-muted mt-4"><span><small><?php echo $bcatrow['Date'] ?></small></span><span><small>Read time: <span class="text-dark fw-bold"><?php echo $bcatrow['Time'] ?></span></small></span>
            </div>
          </div>

        </div>
        <?php }?>
        
       
       
         

        </div>
        


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


<!-- Mirrored from freshcart.codescandy.com/pages/blog-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:10:37 GMT -->
</html>