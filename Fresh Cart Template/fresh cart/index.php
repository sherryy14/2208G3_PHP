<?php
include 'header.php';

?>
  <main>
    <section class="mt-8">
      <div class="container">
        <div class="hero-slider ">
        <?php 
                                $slider= "SELECT * FROM `slider`";
                                $sliderResult = mysqli_query($conn,$slider);

                                while($crow = mysqli_fetch_array($sliderResult)){

                               
                                ?>
     
         
          
          <div
          style="background: url('assets/images/slider/<?php echo $crow['Slider_image'] ?>') center center / cover no-repeat; border-radius: 0.5rem; width: 1108px; height:500px;">
            <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
              <span class="badge text-bg-warning"><?php echo $crow['Span'] ?></span>

              <h2 class="text-dark display-5 fw-bold mt-4"><?php echo $crow['Title'] ?> </h2>
              <p class="lead"><?php echo $crow['Description'] ?></p>
              <a href="#!" class="btn btn-dark mt-3"><?php echo $crow['Shop'] ?><i class="feather-icon icon-arrow-right ms-1"></i></a>
            </div>

          </div>
          
          <?php  }?>
        </div>
      </div>
    </section>

    <!-- Category Section Start-->
    <section class="mb-lg-10 mt-lg-14 my-8">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-6">

            <h3 class="mb-0">Featured Categories</h3>

          </div>
        </div>
        <div class="category-slider ">
        <?php 
                                $parent= "SELECT * FROM `parent_category`";
                                $resultparent = mysqli_query($conn,$parent);

                                while($prow = mysqli_fetch_array($resultparent)){

                               
                                ?>
        <div class="hero-slider ">
       
          <div class="item"> <a href="shop-grid.php" class="text-decoration-none text-inherit">
              <div class="card card-product mb-lg-4">
                <div class="card-body text-center py-8">
                  <a href="productscard.php?p_cid=<?php echo $prow['p_cid'] ?>">
                  <img src="./assets/images/category/<?php echo $prow['P_Image'] ?>" alt="Grocery Ecommerce Template"
                    class="mb-3 img-fluid" ></a>
                  <div class="text-truncate"><?php echo $prow['Parent_Categor_Name']?></div>
                </div>
              </div>
            </a>
          </div>
          
  </div>
          <?php  }?>
          </div>
      </div>
    </section>
    <!-- Category Section End-->
    <section>
      <div class="container">
        <div class="row">
        <?php 
                                $banner= "SELECT * FROM `banner`";
                                $resultbanner = mysqli_query($conn,$banner);

                                while($brow = mysqli_fetch_array($resultbanner)){

                               
                                ?>
          <div class="col-12 col-md-6 mb-3 mb-lg-0">
            <div>
            
              <div class="py-10 px-8 rounded"
                style="background:url(assets/images/banner/<?php echo $brow['Banner_image'] ?>)no-repeat; background-size: cover; background-position: center;">
                <div>
                  <h3 class="fw-bold mb-1"><?php echo $brow['Title'] ?>
                  </h3>
                  <p class="mb-4"><?php echo $brow['Description'] ?><span class="fw-bold"><?php echo $brow['Span'] ?></span> Off</p>
                  <a href="#!" class="btn btn-dark"><?php echo $brow['Shop'] ?></a>
                </div>
              </div>

              </div>
          

       

          </div>
          <?php  }?>
        </div>
      </div>
    </section>
    <!-- Popular Products Start-->
    <section class="my-lg-14 my-8">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-6">

            <h3 class="mb-0">Popular Products</h3>

          </div>
        </div>

        <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
        <?php 
                                $popular= "SELECT * FROM `products` as p JOIN `parent_category`as pc ON p.Parent_Category2 = pc.p_cid   WHERE p.Popular= 'Popular' AND p.Stock='In Stock'";
                                $resultpopular = mysqli_query($conn,$popular);

                                while($pprow = mysqli_fetch_array($resultpopular)){

                               
                                ?>
        <div class="col">

       
         
            <div class="card card-product ">
              <div class="card-body">

                <div class="text-center position-relative ">
                  <div class=" position-absolute top-0 start-0">
                    <span class="badge bg-danger"><?php echo $pprow['span_p'] ?></span>
                  </div>
                  <div class=" position-absolute top-0 end-0">
                    <span class="badge bg-success"><?php echo $pprow['Stock'] ?></span>
                  </div>
                  <a href="#!"> <img src="./assets/images/products/<?php echo $pprow['Image'] ?>"
                      class="mb-3 "  height="150px" width="150px"></a>

                  <div class="card-product-action">
                  <a href="discription_of_products.php?did=<?php echo $pprow['pid'] ?>"><i
                        class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                        class="bi bi-heart"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                        class="bi bi-arrow-left-right"></i></a>
                  </div>

                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small><?php echo $pprow['Parent_Categor_Name'] ?></small></a></div>
                <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none"><?php echo $pprow['Product_Name'] ?></a></h2>
                <div>

                  <small class="text-warning"> <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></small> <span class="text-muted small"><?php echo $pprow['rating'] ?></span>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark"><?php echo $pprow['Price1'] ?>$</span> 
                  <span class="text-decoration-line-through text-muted"><?php echo $pprow['Price2'] ?>$</span>
                  </div>
                  <div><a href="signup.php" class="btn btn-primary btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg> Add</a></div>
                </div>
              </div>
            </div>



          
            </div>
            <?php  }?>


          

          
         
         






        </div>
      </div>
    </section>
    <!-- Popular Products End-->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-6">
            <h3 class="mb-0">Daily Best Sells</h3>
          </div>
        </div>
        <div class="table-responsive-xl pb-6">
        <div class="row row-cols-lg-4 row-cols-1 row-cols-md-2 g-4 flex-nowrap">
        <?php 
                                $dailybanner= "SELECT * FROM  `daily_best_sells`";
                                $resultdailybanner = mysqli_query($conn,$dailybanner);

                                while($dbrow = mysqli_fetch_array($resultdailybanner)){

                               
                                ?>
     <div class="col h-100" >
            <div>
            
            <div class="py-10 px-8 rounded"
                style="background:url('assets/images/banner/<?php echo $dbrow['Daily_Image'] ?>')no-repeat; background-size: cover; background-position: center;">
              <div>
                <h3 class="fw-bold text-white"><?php echo $dbrow['Daily_Title'] ?>
                </h3>
                <p class="text-white"><?php echo $dbrow['Daily_Description'] ?></p>
                <a href="#!" class="btn btn-primary"><?php echo $dbrow['Daily_Shop'] ?><i class="feather-icon icon-arrow-right ms-1"></i></a>
              </div>
            </div>

              </div>
          

       

          </div>
          <?php  }?>
         
          <?php 
                                $dailspro= "SELECT * FROM `products` as p JOIN `parent_category`as pc ON p.Parent_Category2 = pc.p_cid   WHERE Best_Sells='Best Sells'";
                                $resultdailspro = mysqli_query($conn,$dailspro);

                                while($dprow = mysqli_fetch_array($resultdailspro)){

                               
                                ?>
        <div class="col">

       
         
            <div class="card card-product ">
              <div class="card-body">

                <div class="text-center position-relative ">
                  <div class=" position-absolute top-0 start-0">
                    <span class="badge bg-danger"><?php echo $dprow['span_p'] ?></span>
                  </div>
                  <div class=" position-absolute top-0 end-0">
                    <span class="badge bg-success"><?php echo $dprow['Stock'] ?></span>
                  </div>
                  <a href="#!"> <img src="./assets/images/products/<?php echo $dprow['Image'] ?>"
                      class="mb-3 "  height="150px"></a>

                  <div class="card-product-action">
                  <a href="discription_of_products.php?did=<?php echo $dprow['pid'] ?>"><i
                        class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                        class="bi bi-heart"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                        class="bi bi-arrow-left-right"></i></a>
                  </div>

                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small><?php echo $dprow['Parent_Categor_Name'] ?>s</small></a></div>
                <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none"><?php echo $dprow['Product_Name'] ?></a></h2>
                <div>

                  <small class="text-warning"> <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></small> <span class="text-muted small"><?php echo $dprow['rating'] ?></span>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark"><?php echo $dprow['Price1'] ?>$</span> 
                  <span class="text-decoration-line-through text-muted"><?php echo $dprow['Price2'] ?>$</span>
                  </div>
                  <div><a href="signup.php" class="btn btn-primary btn-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                      </svg> Add</a></div>
                </div>
              </div>
            </div>



          
            </div>
            <?php  }?>

        </div>
      </div>
      </div>
    </section>
    <section class="my-lg-14 my-8">
      <div class="container">
        <div class="row">
        <?php 
                                $details= "SELECT * FROM `details` ";
                                $resultdetails = mysqli_query($conn,$details);

                                while($derow = mysqli_fetch_array($resultdetails)){

                               
                                ?>
          <div class="col-md-6 col-lg-3">
            <div class="mb-8 mb-xl-0">
              <div class="mb-6"><img src="./assets/images/icons/<?php echo $derow['Detail_Image'] ?>" alt=""></div>
              <h3 class="h5 mb-3">
              <?php echo $derow['Title'] ?>
              </h3>
              <p><?php echo $derow['Description'] ?></p>
            </div>
          </div>
          
          <?php  }?>

        
        </div>
      </div>
    </section>
  </main>


  <!-- Modal -->
<div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body p-8">
        <div class="position-absolute top-0 end-0 me-3 mt-3">
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="row">
          
          <div class="col-lg-6">
            <!-- img slide -->
            <div class="product productModal" id="productModal">
              <div
                class="zoom"
                onmousemove="zoom(event)"
                style="
                  background-image: url(assets/images/products/product-single-img-1.jpg);
                "
              >
                <!-- img -->
                <img
                  src="assets/images/products/product-single-img-1.jpg"
                  alt=""
            >
              </div>
              <div>
                <div
                  class="zoom"
                  onmousemove="zoom(event)"
                  style="
                    background-image: url(assets/images/products/product-single-img-2.jpg);
                  "
                >
                  <!-- img -->
                  <img
                    src="assets/images/products/product-single-img-2.jpg"
                    alt=""
              >
                </div>
              </div>
              <div>
                <div
                  class="zoom"
                  onmousemove="zoom(event)"
                  style="
                    background-image: url(assets/images/products/product-single-img-3.jpg);
                  "
                >
                  <!-- img -->
                  <img
                    src="assets/images/products/product-single-img-3.jpg"
                    alt=""
              >
                </div>
              </div>
              <div>
                <div
                  class="zoom"
                  onmousemove="zoom(event)"
                  style="
                    background-image: url(assets/images/products/product-single-img-4.jpg);
                  "
                >
                  <!-- img -->
                  <img
                    src="assets/images/products/product-single-img-4.jpg"
                    alt=""
              >
                </div>
              </div>
            </div>
            <!-- product tools -->
            <div class="product-tools">
              <div class="thumbnails row g-3" id="productModalThumbnails">
                <div class="col-3" class="tns-nav-active">
                  <div class="thumbnails-img">
                    <!-- img -->
                    <img
                      src="assets/images/products/product-single-img-1.jpg"
                      alt=""
                >
                  </div>
                </div>
                <div class="col-3">
                  <div class="thumbnails-img" >
                    <!-- img -->
                    <img
                      src="assets/images/products/product-single-img-2.jpg"
                      alt=""
                >
                  </div>
                </div>
                <div class="col-3">
                  <div class="thumbnails-img">
                    <!-- img -->
                    <img
                      src="assets/images/products/product-single-img-3.jpg"
                      alt=""
                >
                  </div>
                </div>
                <div class="col-3">
                  <div class="thumbnails-img">
                    <!-- img -->
                    <img
                      src="assets/images/products/product-single-img-4.jpg"
                      alt=""
                >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="ps-lg-8 mt-6 mt-lg-0">
              <a href="#!" class="mb-4 d-block">Bakery Biscuits</a>
              <h2 class="mb-1 h1">Napolitanke Ljesnjak</h2>
              <div class="mb-4">
                <small class="text-warning">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i></small
                ><a href="#" class="ms-2">(30 reviews)</a>
              </div>
              <div class="fs-4">
                <span class="fw-bold text-dark">$32</span>
                <span class="text-decoration-line-through text-muted">$35</span
                ><span
                  ><small class="fs-6 ms-2 text-danger">26% Off</small></span
                >
              </div>
              <hr class="my-6">
              <div class="mb-4">
                <button type="button" class="btn btn-outline-secondary">
                  250g
                </button>
                <button type="button" class="btn btn-outline-secondary">
                  500g
                </button>
                <button type="button" class="btn btn-outline-secondary">
                  1kg
                </button>
              </div>
              <div>
                <!-- input -->
                <!-- input -->
                <div class="input-group input-spinner  ">
                  <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                  <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input   ">
                  <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                </div>
              </div>
              <div
                class="mt-3 row justify-content-start g-2 align-items-center"
              >

                <div class="col-lg-4 col-md-5 col-6 d-grid">
                  <!-- button -->
                  <!-- btn -->
                  <button type="button" class="btn btn-primary">
                    <i class="feather-icon icon-shopping-bag me-2"></i>Add to
                    cart
                  </button>
                </div>
                <div class="col-md-4 col-5">
                  <!-- btn -->
                  <a
                    class="btn btn-light"
                    href="#"
                    data-bs-toggle="tooltip"
                    data-bs-html="true"
                    aria-label="Compare"
                    ><i class="bi bi-arrow-left-right"></i
                  ></a>
                  <a
                    class="btn btn-light"
                    href="#!"
                    data-bs-toggle="tooltip"
                    data-bs-html="true"
                    aria-label="Wishlist"
                    ><i class="feather-icon icon-heart"></i
                  ></a>
                </div>
              </div>
              <hr class="my-6">
              <div>
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <td>Product Code:</td>
                      <td>FBB00255</td>
                    </tr>
                    <tr>
                      <td>Availability:</td>
                      <td>In Stock</td>
                    </tr>
                    <tr>
                      <td>Type:</td>
                      <td>Fruits</td>
                    </tr>
                    <tr>
                      <td>Shipping:</td>
                      <td>
                        <small
                          >01 day shipping.<span class="text-muted"
                            >( Free pickup today)</span
                          ></small
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php
include 'footer.php';

?>
  <!-- Javascript-->

  <!-- Libs JS -->
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="assets/js/theme.min.js"></script>
  <script src="assets/libs/jquery-countdown/dist/jquery.countdown.min.js"></script>
  <script src="assets/js/vendors/countdown.js"></script>
  <script src="assets/libs/slick-carousel/slick/slick.min.js"></script>
  <script src="assets/js/vendors/slick-slider.js"></script>
  <script src="assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
  <script src="assets/js/vendors/tns-slider.js"></script>
  <script src="assets/js/vendors/zoom.js"></script>
<script src="assets/js/vendors/increment-value.js"></script>



</body>


<!-- Mirrored from freshcart.codescandy.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:10:03 GMT -->
</html>