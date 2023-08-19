<?php
include 'header.php';

?>
  <main>
  <!-- section-->
  <div class="mt-4">
    <div class="container">
      <!-- row -->
      <div class="row ">
        <!-- col -->
        <div class="col-12">
          <!-- breadcrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#!">Home</a></li>
              <li class="breadcrumb-item"><a href="#!">Shop</a></li>
              <li class="breadcrumb-item active" aria-current="page">Snacks & Munchies</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- section -->
  <div class=" mt-8 mb-lg-14 mb-8">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row gx-10">
        <!-- col -->
        <aside class="col-lg-3 col-md-4 mb-6 mb-md-0">
          <div class="offcanvas offcanvas-start offcanvas-collapse w-md-50 " tabindex="-1" id="offcanvasCategory" aria-labelledby="offcanvasCategoryLabel">

            <div class="offcanvas-header d-lg-none">
              <h5 class="offcanvas-title" id="offcanvasCategoryLabel">Filter</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ps-lg-2 pt-lg-0">
            <div class="mb-8">
            <!-- title -->
            <h5 class="mb-3">Categories</h5>
            <!-- nav -->
            <ul class="nav nav-category" id="categoryCollapseMenu">
              <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                data-bs-target="#categoryFlushOne" aria-expanded="false" aria-controls="categoryFlushOne"><a href="#"
                  class="nav-link">Dairy, Bread & Eggs <i class="feather-icon icon-chevron-right"></i></a>
                <!-- accordion collapse -->
                <div id="categoryFlushOne" class="accordion-collapse collapse"
                  data-bs-parent="#categoryCollapseMenu">
                  <div>
                    <!-- nav -->

                    <ul class="nav flex-column ms-3">
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Milk</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Milk Drinks</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Curd & Yogurt</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Eggs</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Bread</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Buns & Bakery</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Butter & More</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Cheese</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Paneer & Tofu</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Cream & Whitener</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Condensed Milk</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Vegan Drinks</a></li>
                    </ul>



                  </div>
                </div>

              </li>
              <!-- nav item -->
              <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"><a href="#"
                  class="nav-link">
                  Snacks &
                  Munchies <i class="feather-icon icon-chevron-right"></i>
                </a>

                <!-- collapse -->
                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                  data-bs-parent="#categoryCollapseMenu">
                  <div>



                    <ul class="nav flex-column ms-3">
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Chips & Crisps</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Nachos</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Popcorn</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Bhujia & Mixtures</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Namkeen Snacks</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Healthy Snacks</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Cakes & Rolls</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Energy Bars</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Papad & Fryums</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Rusks & Wafers</a></li>
                    </ul>


                  </div>
                </div>

              </li>
              <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"> <a
                  href="#" class="nav-link">Fruits & Vegetables <i class="feather-icon icon-chevron-right"></i></a>

                <!-- collapse -->
                <div id="flush-collapseThree" class="accordion-collapse collapse"
                  data-bs-parent="#categoryCollapseMenu">
                  <div>

                    <ul class="nav flex-column ms-3">
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#!">Fresh Vegetables</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Herbs & Seasonings</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Fresh Fruits</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Organic Fruits & Vegetables</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Cuts & Sprouts</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Exotic Fruits & Veggies</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Flower Bouquets, Bunches</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour"> <a
                  href="#" class="nav-link">Cold Drinks & Juices <i class="feather-icon icon-chevron-right"></i></a>

                <!-- collapse -->
                <div id="flush-collapseFour" class="accordion-collapse collapse"
                  data-bs-parent="#categoryCollapseMenu">
                  <div>
                    <ul class="nav flex-column ms-3">
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Soft Drinks</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Fruit Juices</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Coldpress</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Energy Drinks</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Water & Ice Cubes</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Soda & Mixers</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Concentrates & Syrups</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Detox & Energy Drinks</a></li>
                      <!-- nav item -->
                      <li class="nav-item"><a href="#!" class="nav-link">Juice Collection</a></li>
                    </ul>
                  </div>
                </div>
              </li>



              <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive"> <a
                  href="#" class="nav-link">Breakfast & Instant Food <i class="feather-icon icon-chevron-right"></i></a>

                <!-- collapse -->
                <div id="flush-collapseFive" class="accordion-collapse collapse"
                  data-bs-parent="#categoryCollapseMenu">
                  <div>

                    <ul class="nav flex-column ms-3">
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#!">Batter</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Breakfast Cereal</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Noodles, Pasta & Soup</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Frozen Non-Veg Snackss</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Frozen Veg</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Vermicelli</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Instant Mixes</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix"> <a href="#"
                  class="nav-link">Bakery & Biscuits <i class="feather-icon icon-chevron-right"></i></a>

                <!-- collapse -->
                <div id="flush-collapseSix" class="accordion-collapse collapse"
                  data-bs-parent="#categoryCollapseMenu">
                  <div>

                    <ul class="nav flex-column ms-3">
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#!">Cookies</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Glucose & Marie</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Sweet & Salty</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Healthy & Digestive</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Cream Biscuits</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Rusks & Wafers</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Cakes & Rolls</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">
                          Buns & Bakery</a>
                      </li>
                    </ul>

                  </div>
                </div>
              </li>
              <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven"> <a
                  href="#" class="nav-link">Chicken, Meat & Fish <i class="feather-icon icon-chevron-right"></i></a>

                <!-- collapse -->
                <div id="flush-collapseSeven" class="accordion-collapse collapse"
                  data-bs-parent="#categoryCollapseMenu">
                  <div>

                    <ul class="nav flex-column ms-3">
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#!">Chicken</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Sausage, Salami & Ham</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Exotic Meat</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Eggs</a>
                      </li>
                      <!-- nav item -->
                      <li class="nav-item">
                        <a class="nav-link" href="#!">Frozen Non-Veg Snacks</a>
                      </li>

                    </ul>
                  </div>
                </div>
              </li>

            </ul>
          </div>

          <div class="mb-8">

            <h5 class="mb-3">Stores</h5>
            <div class="my-4">
              <!-- input -->
              <input type="search" class="form-control" placeholder="Search by store">
            </div>
            <!-- form check -->
            <div class="form-check mb-2">
              <!-- input -->
              <input class="form-check-input" type="checkbox" value="" id="eGrocery" checked>
              <label class="form-check-label" for="eGrocery">
                E-Grocery
              </label>
            </div>
            <!-- form check -->
            <div class="form-check mb-2">
              <!-- input -->
              <input class="form-check-input" type="checkbox" value="" id="DealShare">
              <label class="form-check-label" for="DealShare">
                DealShare
              </label>
            </div>
            <!-- form check -->
            <div class="form-check mb-2">
              <!-- input -->
              <input class="form-check-input" type="checkbox" value="" id="Dmart">
              <label class="form-check-label" for="Dmart">
                DMart
              </label>
            </div>
            <!-- form check -->
            <div class="form-check mb-2">
              <!-- input -->
              <input class="form-check-input" type="checkbox" value="" id="Blinkit">
              <label class="form-check-label" for="Blinkit">
                Blinkit
              </label>
            </div>
            <!-- form check -->
            <div class="form-check mb-2">
              <!-- input -->
              <input class="form-check-input" type="checkbox" value="" id="BigBasket">
              <label class="form-check-label" for="BigBasket">
                BigBasket
              </label>
            </div>
            <!-- form check -->
            <div class="form-check mb-2">
              <!-- input -->
              <input class="form-check-input" type="checkbox" value="" id="StoreFront">
              <label class="form-check-label" for="StoreFront">
                StoreFront
              </label>
            </div>
            <!-- form check -->
            <div class="form-check mb-2">
              <!-- input -->
              <input class="form-check-input" type="checkbox" value="" id="Spencers">
              <label class="form-check-label" for="Spencers">
                Spencers
              </label>
            </div>
            <!-- form check -->
            <div class="form-check mb-2">
              <!-- input -->
              <input class="form-check-input" type="checkbox" value="" id="onlineGrocery">
              <label class="form-check-label" for="onlineGrocery">
                Online Grocery
              </label>
            </div>

          </div>
          <div class="mb-8">
            <!-- price -->
            <h5 class="mb-3">Price</h5>
            <div>
              <!-- range -->
              <div id="priceRange" class="mb-3"></div>
              <small class="text-muted">Price:</small> <span id="priceRange-value" class="small"></span>

            </div>



          </div>
          <!-- rating -->
          <div class="mb-8">

            <h5 class="mb-3">Rating</h5>
            <div>
              <!-- form check -->
              <div class="form-check mb-2">
                <!-- input -->
                <input class="form-check-input" type="checkbox" value="" id="ratingFive">
                <label class="form-check-label" for="ratingFive">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning "></i>
                  <i class="bi bi-star-fill text-warning "></i>
                  <i class="bi bi-star-fill text-warning "></i>
                  <i class="bi bi-star-fill text-warning "></i>
                </label>
              </div>
              <!-- form check -->
              <div class="form-check mb-2">
                <!-- input -->
                <input class="form-check-input" type="checkbox" value="" id="ratingFour" checked>
                <label class="form-check-label" for="ratingFour">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning "></i>
                  <i class="bi bi-star-fill text-warning "></i>
                  <i class="bi bi-star-fill text-warning "></i>
                  <i class="bi bi-star text-warning"></i>
                </label>
              </div>
              <!-- form check -->
              <div class="form-check mb-2">
                <!-- input -->
                <input class="form-check-input" type="checkbox" value="" id="ratingThree">
                <label class="form-check-label" for="ratingThree">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning "></i>
                  <i class="bi bi-star-fill text-warning "></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                </label>
              </div>
              <!-- form check -->
              <div class="form-check mb-2">
                <!-- input -->
                <input class="form-check-input" type="checkbox" value="" id="ratingTwo">
                <label class="form-check-label" for="ratingTwo">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                </label>
              </div>
              <!-- form check -->
              <div class="form-check mb-2">
                <!-- input -->
                <input class="form-check-input" type="checkbox" value="" id="ratingOne">
                <label class="form-check-label" for="ratingOne">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                </label>
              </div>
            </div>


          </div>
          <div class="mb-8 position-relative">
            <!-- Banner Design -->
            <!-- Banner Content -->
            <div class="position-absolute p-5 py-8">
              <h3 class="mb-0">Fresh Fruits </h3>
              <p>Get Upto 25% Off</p>
              <a href="#" class="btn btn-dark">Shop Now<i class="feather-icon icon-arrow-right ms-1"></i></a>
            </div>
            <!-- Banner Content -->
            <!-- Banner Image -->
            <!-- img --><img src="../assets/images/banner/assortment-citrus-fruits.png" alt=""
              class="img-fluid rounded ">
            <!-- Banner Image -->
          </div>
          </div>
        </div>
        </aside>
        <section class="col-lg-9 col-md-12">
          <!-- card -->
          <div class="card mb-4 bg-light border-0">
            <!-- card body -->
            <div class=" card-body p-9">
            <?php 
                $p_cid = $_GET['p_cid'];
                                $parent_category = "SELECT * FROM `parent_category` WHERE p_cid='$p_cid'";
                                
                                $parent_categoryResult = mysqli_query($conn,$parent_category);

                                while($crow = mysqli_fetch_array($parent_categoryResult)){

                               
                                ?>
             <h2 class="mb-0 fs-1"><?php echo $crow['Parent_Categor_Name']?></h2>
          
          <?php  }?>
          
            </div>
          </div>
          <!-- list icon -->
          <div class="d-lg-flex justify-content-between align-items-center">
            <div class="mb-3 mb-lg-0">
            <?php 
          $p_cid = $_GET['p_cid'];
                                $productsfound= "SELECT count(pid) FROM `products` as p JOIN `parent_category`as pc ON p.Parent_Category2 = pc.p_cid  WHERE pc.p_cid='$p_cid'";
                              
                                
                                $resultproductsfound = mysqli_query($conn,$productsfound);

                                while($pfrow = mysqli_fetch_array( $resultproductsfound)){

                               
                                ?>
              <p class="mb-0"> <span class="text-dark"><?php echo $pfrow['count(pid)']; ?></span> Products found </p>
              <?php  }?>
            </div>

            <!-- icon -->
            <div class="d-md-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center justify-content-between">
              <div>

              <a href="shop-list.html" class="text-muted me-3"><i class="bi bi-list-ul"></i></a>
              <a href="shop-grid.html" class=" me-3 active"><i class="bi bi-grid"></i></a>
              <a href="shop-grid-3-column.html" class="me-3 text-muted"><i class="bi bi-grid-3x3-gap"></i></a>
              </div>
              <div class="ms-2 d-lg-none">
                <a class="btn btn-outline-gray-400 text-muted" data-bs-toggle="offcanvas" href="#offcanvasCategory" role="button" aria-controls="offcanvasCategory"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-filter me-2">
                  <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                </svg> Filters</a>
              </div>
            </div>

              <div class="d-flex mt-2 mt-lg-0">
                <div class="me-2 flex-grow-1">
                  <!-- select option -->
                  <select class="form-select">
                    <option selected>Show: 50</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                  </select></div>
<!-- Filter -->

                  <div class="me-2 flex-grow-1">
 
<?php
 if(isset($_POST["filter"])){
  // $price=$_POST['price'];
  $p_cid = $_GET['p_cid'];
  $popular= "SELECT * FROM `products` as p JOIN `parent_category`as pc ON p.Parent_Category2 = pc.p_cid  WHERE pc.p_cid='$p_cid' ORDER BY Price1 DESC";

}
?>
                    <form  method="post">
                      
                      <select name="price" id="idFilter" class="form-select">
                        <option selected disabled>Filter by Price</option>
                        <option value="ASC"> Low to High Price</option>
                        <option value="DESC"> High to Low Price</option>
                      </select>
                      <button type="submit" name="filter" >filter</button>
                    </form>
            </div>
<!-- <div class="row " id="data">

</div> -->

 <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!-- <script>
        $(document).ready(function() {
           

           

            // id filter 

            $('#idFilter').change(function() {
                let sort = $(this).val()
                console.log(sort);

                $.ajax({
                    url: "sortprice.php",
                    type: "POST",
                    data: {
                        price1: sort
                    },
                    success: function(data) {
                        $("#data").html(data)
                    }
                })
            })
           

        })
    </script> -->

              </div>
            </div>
          </div>
          <!-- row -->
          <div class="row g-4 row-cols-xl-4 row-cols-lg-3 row-cols-2 row-cols-md-2 mt-2">

          
          <?php 
               $p_cid = $_GET['p_cid'];
                                $popular= "SELECT * FROM `products` as p JOIN `parent_category`as pc ON p.Parent_Category2 = pc.p_cid  WHERE pc.p_cid='$p_cid'";
                               
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
                  <div><a href="signup.php"class="btn btn-primary btn-sm">
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
         
        </section>
      </div>
    </div>
  </div>
</main>



 


  <!-- Footer -->
  <?php
include 'footer.php';

?>

  <!-- Javascript-->
  <script src="../assets/libs/nouislider/dist/nouislider.min.js"></script>
  <script src="../assets/libs/wnumb/wNumb.min.js"></script>
  <!-- Libs JS -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>
  <script src="../assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
  <script src="../assets/js/vendors/tns-slider.js"></script>
  <script src="../assets/js/vendors/zoom.js"></script>
  <script src="../assets/js/vendors/increment-value.js"></script>




</body>


<!-- Mirrored from freshcart.codescandy.com/pages/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:10:09 GMT -->
</html>