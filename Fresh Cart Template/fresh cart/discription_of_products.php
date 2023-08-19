<?php
include 'header.php'
?>
  <main>
  <div class="mt-4">
    <div class="container">
      <!-- row -->
      <div class="row ">
        <!-- col -->
        <div class="col-12">
          <!-- breadcrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Bakery Biscuits</a></li>

              <li class="breadcrumb-item active" aria-current="page">Napolitanke Ljesnjak</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <section class="mt-8">
    <div class="container">
      <div class="row">
      <?php 
                 $did = $_GET['did'];
                                $popular= "SELECT * FROM `products` as p JOIN `parent_category`as pc ON p.Parent_Category2 = pc.p_cid WHERE pid=$did  ";
                               
                                $resultpopular = mysqli_query($conn,$popular);

                                while($pprow = mysqli_fetch_array($resultpopular)){

                               
                                ?>
        <div class="col-md-6">
          <!-- img slide -->
          <div class="product" id="product">
            <div class="zoom" onmousemove="zoom(event)"
              style="background-image: url(assets/images/products/<?php echo $pprow['Image'] ?>) " height="515.98" width="386.98"> 
              <!-- img -->
              <!-- img --><img src="assets/images/products/<?php echo $pprow['Image'] ?>" alt="" width="515.98" height="386.98">
            </div>
            <div>
              <div class="zoom" onmousemove="zoom(event)"
                style="background-image: url(assets/images/products/<?php echo $pprow['Image2'] ?>)">
                <!-- img -->
                <img src="assets/images/products/<?php echo $pprow['Image2'] ?>" alt="">
              </div>
            </div>
            <div>
              <div class="zoom" onmousemove="zoom(event)"
                style="background-image: url(assets/images/products/<?php echo $pprow['Image3'] ?>)">
                <!-- img -->
                <img src="assets/images/products/<?php echo $pprow['Image3'] ?>" alt="">
              </div>
            </div>
            <div>
              <div class="zoom" onmousemove="zoom(event)"
                style="background-image: url(assets/images/products/<?php echo $pprow['Image4'] ?>)">
                <!-- img -->
                <img src="assets/images/products/<?php echo $pprow['Image4'] ?>" alt="">
              </div>
            </div>
          </div>
          <!-- product tools -->
          <div class="product-tools">
            <div class="thumbnails row g-3" id="productThumbnails">
              <div class="col-3">
                <div class="thumbnails-img">
                  <!-- img -->
                  <img src="assets/images/products/<?php echo $pprow['Image'] ?>" alt="" >
                </div>
              </div>
              <div class="col-3">
                <div class="thumbnails-img">
                  <!-- img -->
                  <img src="assets/images/products/<?php echo $pprow['Image2'] ?>" alt="">
                </div>
              </div>
              <div class="col-3">
                <div class="thumbnails-img">
                  <!-- img -->
                  <img src="assets/images/products/<?php echo $pprow['Image3'] ?>" alt="">
                </div>
              </div>
              <div class="col-3">
                <div class="thumbnails-img">
                  <!-- img -->
                  <img src="assets/images/products/<?php echo $pprow['Image4'] ?>" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
                            
                                

        <div class="col-md-6">
          <div class="ps-lg-10 mt-6 mt-md-0">
            <!-- content -->
            <a href="#!" class="mb-4 d-block"><?php echo $pprow['Parent_Categor_Name'] ?></a>
            <!-- heading -->
            <h1 class="mb-1"><?php echo $pprow['Product_Name'] ?></h1>
            <div class="mb-4">
              <!-- rating -->
              <!-- rating --> <small class="text-warning"> <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i></small><a href="#" class="ms-2"><?php echo $pprow['rating'] ?>(30 reviews)</a></div>
            <div class="fs-4">
              <!-- price --><span class="fw-bold text-dark"><?php echo $pprow['Price1'] ?>$</span> <span
                class="text-decoration-line-through text-muted"><?php echo $pprow['Price2'] ?>$</span><span><small class="fs-6 ms-2 text-danger"><?php echo $pprow['span_p'] ?>
                  Off</small></span>
            </div>
            <!-- hr -->
            <hr class="my-6">
            <div class="mb-5"><button type="button" class="btn btn-outline-secondary">250g</button>
              <!-- btn --> <button type="button" class="btn btn-outline-secondary">500g</button>
              <!-- btn --> <button type="button" class="btn btn-outline-secondary">1kg</button></div>
              <div>


                <!-- input -->
                <div class="input-group input-spinner  ">
                  <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                  <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input   ">
                  <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                </div>

            </div>
            <div class="mt-3 row justify-content-start g-2 align-items-center">

              <div class="col-xxl-4 col-lg-4 col-md-5 col-5 d-grid">
                <!-- button -->
                <!-- btn --><a href="signup.php"> <button type="button" class="btn btn-primary"><i class="feather-icon icon-shopping-bag me-2"></i>Add to
                  cart</button></a>
              </div>
              <div class="col-md-4 col-4">
                <!-- btn -->
                <a class="btn btn-light " href="#" data-bs-toggle="tooltip" data-bs-html="true" aria-label="Compare"><i class="bi bi-arrow-left-right"></i></a>
                <a class="btn btn-light " href="shop-wishlist.html" data-bs-toggle="tooltip" data-bs-html="true" aria-label="Wishlist"><i class="feather-icon icon-heart"></i></a>
              </div>
            </div>
            <!-- hr -->
            <hr class="my-6">
            <div>
              <!-- table -->
              <table class="table table-borderless mb-0">

                <tbody>
                  <tr>
                    <td>Product Code:</td>
                    <td>FBB00255</td>

                  </tr>
                  <tr>
                    <td>Availability:</td>
                    <td><?php echo $pprow['Stock'] ?></td>

                  </tr>
                  <tr>
                    <td>Type:</td>
                    <td><?php echo $pprow['Parent_Categor_Name'] ?></td>

                  </tr>
                  <tr>
                    <td>Shipping:</td>
                    <td><small>01 day shipping.<span class="text-muted">( Free pickup today)</span></small></td>

                  </tr>


                </tbody>
              </table>

            </div>
            <div class="mt-8">
              <!-- dropdown -->
              <div class="dropdown">
                <a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Share
                </a>

                <ul class="dropdown-menu" >
                  <li><a class="dropdown-item" href="#"><i class="bi bi-facebook me-2"></i>Facebook</a></li>
                  <li><a class="dropdown-item" href="#"><i class="bi bi-twitter me-2"></i>Twitter</a></li>
                  <li><a class="dropdown-item" href="#"><i class="bi bi-instagram me-2"></i>Instagram</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <?php } ?>
      </div>
    </div>
  </section>
  <section class="mt-lg-14 mt-8 ">
    <div class="container">
      <div class="row">
      <?php 
                 $did = $_GET['did'];
                                $popular= "SELECT * FROM `products` as p JOIN `parent_category`as pc ON p.Parent_Category2 = pc.p_cid WHERE pid=$did  ";
                               
                                $resultpopular = mysqli_query($conn,$popular);

                                while($pprow = mysqli_fetch_array($resultpopular)){

                               
                                ?>
        <div class="col-md-12">
          <ul class="nav nav-pills nav-lb-tab" id="myTab" role="tablist">
            <!-- nav item -->
            <li class="nav-item" role="presentation">
              <!-- btn --> <button class="nav-link active" id="product-tab" data-bs-toggle="tab"
                data-bs-target="#product-tab-pane" type="button" role="tab" aria-controls="product-tab-pane"
                aria-selected="true">Product Details</button>
            </li>
            <!-- nav item -->
            <li class="nav-item" role="presentation">
              <!-- btn --> <button class="nav-link" id="details-tab" data-bs-toggle="tab"
                data-bs-target="#details-tab-pane" type="button" role="tab" aria-controls="details-tab-pane"
                aria-selected="false">Information</button>
            </li>
            <!-- nav item -->
            <li class="nav-item" role="presentation">
              <!-- btn --> <button class="nav-link" id="reviews-tab" data-bs-toggle="tab"
                data-bs-target="#reviews-tab-pane" type="button" role="tab" aria-controls="reviews-tab-pane"
                aria-selected="false">Reviews</button>
            </li>
            <!-- nav item -->
            <li class="nav-item" role="presentation">
              <!-- btn --> <button class="nav-link" id="sellerInfo-tab" data-bs-toggle="tab"
                data-bs-target="#sellerInfo-tab-pane" type="button" role="tab" aria-controls="sellerInfo-tab-pane"
                aria-selected="false" disabled>Seller
                Info</button>
            </li>
          </ul>
          <!-- tab content -->
          <div class="tab-content" id="myTabContent">
            <!-- tab pane -->
            <div class="tab-pane fade show active" id="product-tab-pane" role="tabpanel" aria-labelledby="product-tab"
              tabindex="0">
              <div class="my-8">
                <div class="mb-5">
                  <!-- text -->
                  <h4 class="mb-1"><?php echo $pprow['Product_Name'] ?></h4>
                  <p class="mb-0"><?php echo $pprow['Product_Description'] ?></p>
                </div>
                
              
              </div>
            </div>
            <!-- tab pane -->
            <div class="tab-pane fade" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
              <div class="my-8">
                <div class="row">
                  <div class="col-12">
                    <h4 class="mb-4">Details</h4>
                  </div>
                  <div class="col-12 col-lg-6">
                    <table class="table table-striped">
                      <!-- table -->
                      <tbody>
                        <tr>
                          <th>Weight</th>
                          <td>1000 Grams</td>
                        </tr>
                        <tr>
                          <th>Ingredient Type</th>
                          <td>Vegetarian</td>
                        </tr>
                        <tr>
                          <th>Brand</th>
                          <td>Dmart</td>
                        </tr>
                        <tr>
                          <th>Item Package Quantity</th>
                          <td>1</td>
                        </tr>
                        <tr>
                          <th>Form</th>
                          <td>Larry the Bird</td>
                        </tr>
                        <tr>
                          <th>Manufacturer</th>
                          <td>Dmart</td>
                        </tr>
                        <tr>
                          <th>Net Quantity</th>
                          <td>340.0 Gram</td>
                        </tr>
                        <tr>
                          <th>Product Dimensions</th>
                          <td>9.6 x 7.49 x 18.49 cm</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="col-12 col-lg-6">
                    <table class="table table-striped">
                      <!-- table -->
                      <tbody>
                        <tr>
                          <th>ASIN</th>
                          <td>SB0025UJ75W</td>
                        </tr>
                        <tr>
                          <th>Best Sellers Rank</th>
                          <td>#2 in Fruits</td>
                        </tr>
                        <tr>
                          <th>Date First Available</th>
                          <td>30 April 2022</td>
                        </tr>
                        <tr>
                          <th>Item Weight</th>
                          <td>500g</td>
                        </tr>
                        <tr>
                          <th>Generic Name</th>
                          <td>Banana Robusta</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- tab pane -->
            <div class="tab-pane fade" id="reviews-tab-pane" role="tabpanel" aria-labelledby="reviews-tab" tabindex="0">
              <div class="my-8">
                <!-- row -->
                <div class="row">
                  <div class="col-md-4">
                    <div class="me-lg-12 mb-6 mb-md-0">
                      <div class="mb-5">
                        <!-- title -->
                        <h4 class="mb-3">Customer reviews</h4>
                        <span>
                          <!-- rating --> <small class="text-warning"> <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i></small><span class="ms-3">4.1 out of 5</span><small
                            class="ms-3">11,130 global ratings</small></span>
                      </div>
                      <div class="mb-8">
                        <!-- progress -->
                        <div class="d-flex align-items-center mb-2">
                          <div class="text-nowrap me-3 text-muted"><span
                              class="d-inline-block align-middle text-muted">5</span><i
                              class="bi bi-star-fill ms-1 small text-warning"></i></div>
                          <div class="w-100">
                            <div class="progress" style="height: 6px;">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;"
                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div><span class="text-muted ms-3">53%</span>
                        </div>
                        <!-- progress -->
                        <div class="d-flex align-items-center mb-2">
                          <div class="text-nowrap me-3 text-muted"><span
                              class="d-inline-block align-middle text-muted">4</span><i
                              class="bi bi-star-fill ms-1 small text-warning"></i></div>
                          <div class="w-100">
                            <div class="progress" style="height: 6px;">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="50"></div>
                            </div>
                          </div><span class="text-muted ms-3">22%</span>
                        </div>
                        <!-- progress -->
                        <div class="d-flex align-items-center mb-2">
                          <div class="text-nowrap me-3 text-muted"><span
                              class="d-inline-block align-middle text-muted">3</span><i
                              class="bi bi-star-fill ms-1 small text-warning"></i></div>
                          <div class="w-100">
                            <div class="progress" style="height: 6px;">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 35%;"
                                aria-valuenow="35" aria-valuemin="0" aria-valuemax="35"></div>
                            </div>
                          </div><span class="text-muted ms-3">14%</span>
                        </div>
                        <!-- progress -->
                        <div class="d-flex align-items-center mb-2">
                          <div class="text-nowrap me-3 text-muted"><span
                              class="d-inline-block align-middle text-muted">2</span><i
                              class="bi bi-star-fill ms-1 small text-warning"></i></div>
                          <div class="w-100">
                            <div class="progress" style="height: 6px;">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 22%;"
                                aria-valuenow="22" aria-valuemin="0" aria-valuemax="22"></div>
                            </div>
                          </div><span class="text-muted ms-3">5%</span>
                        </div>
                        <!-- progress -->
                        <div class="d-flex align-items-center mb-2">
                          <div class="text-nowrap me-3 text-muted"><span
                              class="d-inline-block align-middle text-muted">1</span><i
                              class="bi bi-star-fill ms-1 small text-warning"></i></div>
                          <div class="w-100">
                            <div class="progress" style="height: 6px;">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 14%;"
                                aria-valuenow="14" aria-valuemin="0" aria-valuemax="14"></div>
                            </div>
                          </div><span class="text-muted ms-3">7%</span>
                        </div>
                      </div>
                      <div class="d-grid">
                        <h4>Review this product</h4>
                        <p class="mb-0">Share your thoughts with other customers.</p>
                        <a href="#" class="btn btn-outline-gray-400 mt-4 text-muted">Write the Review</a>
                      </div>

                    </div>
                  </div>
                  <!-- col -->
                  <div class="col-md-8">
                    <div class="mb-10">
                      <div class="d-flex justify-content-between align-items-center mb-8">
                        <div>
                          <!-- heading -->
                          <h4>Reviews</h4>
                        </div>
                        <div>
                          <select class="form-select">
                            <option selected>Top Review</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>

                      </div>
                      <div class="d-flex border-bottom pb-6 mb-6">
                        <!-- img -->
                        <!-- img --><img src="assets/images/avatar/avatar-10.jpg" alt=""
                          class="rounded-circle avatar-lg">
                        <div class="ms-5">
                          <h6 class="mb-1">
                            Shankar Subbaraman

                          </h6>
                          <!-- select option -->
                          <!-- content -->
                          <p class="small"> <span class="text-muted">30 December 2022</span>
                            <span class="text-primary ms-3 fw-bold">Verified Purchase</span></p>
                          <!-- rating -->
                          <div class=" mb-2">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <span class="ms-3 text-dark fw-bold">Need to recheck the weight at delivery point</span>
                          </div>
                          <!-- text-->
                          <p>Product quality is good. But, weight seemed less than 1kg. Since it is being sent in open
                            package, there is a possibility of pilferage in between. FreshCart sends the veggies and
                            fruits through sealed plastic covers and Barcode on the weight etc. .</p>
                          <div>
                            <div class="border icon-shape icon-lg border-2 ">
                              <!-- img --><img src="assets/images/products/product-img-1.jpg" alt=""
                                class="img-fluid ">
                            </div>
                            <div class="border icon-shape icon-lg border-2 ms-1 ">
                              <!-- img --><img src="assets/images/products/product-img-2.jpg" alt=""
                                class="img-fluid ">
                            </div>
                            <div class="border icon-shape icon-lg border-2 ms-1 ">
                              <!-- img --><img src="assets/images/products/product-img-3.jpg" alt=""
                                class="img-fluid ">
                            </div>

                          </div>
                          <!-- icon -->
                          <div class="d-flex justify-content-end mt-4">
                            <a href="#" class="text-muted"><i class="feather-icon icon-thumbs-up me-1"></i>Helpful</a>
                            <a href="#" class="text-muted ms-4"><i class="feather-icon icon-flag me-2"></i>Report
                              abuse</a>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex border-bottom pb-6 mb-6 pt-4">
                        <!-- img --><img src="assets/images/avatar/avatar-12.jpg" alt=""
                          class="rounded-circle avatar-lg">
                        <div class="ms-5">
                          <h6 class="mb-1">
                            Robert Thomas

                          </h6>
                          <!-- content -->
                          <p class="small"> <span class="text-muted">29 December 2022</span>
                            <span class="text-primary ms-3 fw-bold">Verified Purchase</span></p>
                          <!-- rating -->
                          <div class=" mb-2">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star text-warning"></i>
                            <span class="ms-3 text-dark fw-bold">Need to recheck the weight at delivery point</span>
                          </div>

                          <p>Product quality is good. But, weight seemed less than 1kg. Since it is being sent in open
                            package, there is a possibility of pilferage in between. FreshCart sends the veggies and
                            fruits through sealed plastic covers and Barcode on the weight etc. .</p>

                          <!-- icon -->
                          <div class="d-flex justify-content-end mt-4">
                            <a href="#" class="text-muted"><i class="feather-icon icon-thumbs-up me-1"></i>Helpful</a>
                            <a href="#" class="text-muted ms-4"><i class="feather-icon icon-flag me-2"></i>Report
                              abuse</a>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex border-bottom pb-6 mb-6 pt-4">
                        <!-- img --><img src="assets/images/avatar/avatar-9.jpg" alt=""
                          class="rounded-circle avatar-lg">
                        <div class="ms-5">
                          <h6 class="mb-1">
                            Barbara Tay

                          </h6>
                          <!-- content -->
                          <p class="small"> <span class="text-muted">28 December 2022</span>
                            <span class="text-danger ms-3 fw-bold">Unverified Purchase</span></p>
                          <!-- rating -->
                          <div class=" mb-2">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star text-warning"></i>
                            <span class="ms-3 text-dark fw-bold">Need to recheck the weight at delivery point</span>
                          </div>

                          <p>Everytime i ordered from fresh i got greenish yellow bananas just like i wanted so go for
                            it , its happens very rare that u get over riped ones.</p>

                          <!-- icon -->
                          <div class="d-flex justify-content-end mt-4">
                            <a href="#" class="text-muted"><i class="feather-icon icon-thumbs-up me-1"></i>Helpful</a>
                            <a href="#" class="text-muted ms-4"><i class="feather-icon icon-flag me-2"></i>Report
                              abuse</a>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex border-bottom pb-6 mb-6 pt-4">
                        <!-- img --><img src="assets/images/avatar/avatar-8.jpg" alt=""
                          class="rounded-circle avatar-lg">
                        <div class="ms-5 flex-grow-1">
                          <h6 class="mb-1">
                            Sandra Langevin

                          </h6>
                          <!-- content -->
                          <p class="small"> <span class="text-muted">8 December 2022</span>
                            <span class="text-danger ms-3 fw-bold">Unverified Purchase</span></p>
                          <!-- rating -->
                          <div class=" mb-2">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star text-warning"></i>
                            <span class="ms-3 text-dark fw-bold">Great product</span>
                          </div>

                          <p>Great product & package. Delivery can be expedited. </p>

                          <!-- icon -->
                          <div class="d-flex justify-content-end mt-4">
                            <a href="#" class="text-muted"><i class="feather-icon icon-thumbs-up me-1"></i>Helpful</a>
                            <a href="#" class="text-muted ms-4"><i class="feather-icon icon-flag me-2"></i>Report
                              abuse</a>
                          </div>
                        </div>
                      </div>
                      <div>
                        <a href="#" class="btn btn-outline-gray-400 text-muted">Read More Reviews</a>
                      </div>
                    </div>
                    <div>
                      <!-- rating -->
                      <h3 class="mb-5">Create Review</h3>
                      <div class="border-bottom py-4 mb-4">
                        <h4 class="mb-3">Overall rating</h4>
                        <div id="rater"></div>
                      </div>
                      <div class="border-bottom py-4 mb-4">
                        <h4 class="mb-0">Rate Features</h4>
                        <div class="my-5">
                          <h5>Flavor</h5>
                          <div id="rate-2"></div>
                        </div>
                        <div class="my-5">
                          <h5>Value for money</h5>
                          <div id="rate-3"></div>
                        </div>
                        <div class="my-5">
                          <h5>Scent</h5>
                          <div id="rate-4"></div>
                        </div>


                      </div>
                      <!-- form control -->
                      <div class="border-bottom py-4 mb-4">
                        <h5>Add a headline</h5>
                        <input type="text" class="form-control" placeholder="What’s most important to know">
                      </div>
                      <div class="border-bottom py-4 mb-4">
                        <h5>Add a photo or video</h5>
                        <p>Shoppers find images and videos more helpful than text alone.</p>
                        <!-- form -->
                        <form action="#" class=" dropzone profile-dropzone">
                          <div class="fallback">
                            <input name="file" type="file" multiple />
                          </div>
                        </form>

                      </div>
                      <div class=" py-4 mb-4">
                        <!-- heading -->
                        <h5>Add a written review</h5>
                        <textarea class="form-control" rows="3"
                          placeholder="What did you like or dislike? What did you use this product for?"></textarea>

                      </div>
                      <!-- button -->
                      <div class="d-flex justify-content-end">
                        <a href="#" class="btn btn-primary">Submit Review</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
            <!-- tab pane -->
            <div class="tab-pane fade" id="sellerInfo-tab-pane" role="tabpanel" aria-labelledby="sellerInfo-tab"
              tabindex="0">...</div>
          </div>
        </div>


        <?php }?>
      </div>
    </div>



  </section>

  <!-- section -->
  <section class="my-lg-14 my-14">
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-12">
          <!-- heading -->
          <h3>Related Items</h3>
        </div>
      </div>
      <!-- row -->
      <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-2 mt-2">
        
      <?php 
               $did = $_GET['did'];
                                $popular= "SELECT * FROM `products` as p JOIN `parent_category`as pc ON p.Parent_Category2 = pc.p_cid  WHERE pc.p_cid='$did'";
                               
                                $resultpopular = mysqli_query($conn,$popular);

                                while($pprow = mysqli_fetch_array($resultpopular)){

                               
                                ?>
        <div class="col" id="data">
       
       
         
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
                      class="mb-3 " w-80 height="120px"></a>

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
                <h2 class="fs-6"><a href="discription_of_products.php" class="text-inherit text-decoration-none"><?php echo $pprow['Product_Name'] ?></a></h2>
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
                  <div><a href="#!" class="btn btn-primary btn-sm">
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

</main>
 <?php
 include 'footer.php';
 ?>
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




  <!-- Javascript-->
  <script src="assets/libs/rater-js/index.js"></script>
  <script src="assets/libs/dropzone/dist/min/dropzone.min.js"></script>

  <!-- Libs JS -->
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="assets/js/theme.min.js"></script>

  <script src="assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
  <script src="assets/js/vendors/tns-slider.js"></script>
  <script src="assets/js/vendors/zoom.js"></script>
  <script src="assets/js/vendors/increment-value.js"></script>





</body>


<!-- Mirrored from freshcart.codescandy.com/pages/shop-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:10:29 GMT -->
</html>