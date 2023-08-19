<?php 
include 'header.php';
if(isset($_GET['page'])){
  $page = $_GET['page'];
}else{
  $page = 1;
}

$num_records = 5 ;
$start = ($page -1) *$num_records;

?>
    

    <!-- main -->
    <main class="main-content-wrapper">
      <div class="container">
        <div class="row mb-8">
          <div class="col-md-12">
            <!-- page header -->
            <div class="d-md-flex justify-content-between align-items-center">
              <div>
                <h2>Products</h2>
                  <!-- breacrumb -->
                  <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                  </ol>
                </nav>
              </div>
              <!-- button -->
              <div>
                <a href="add-product.html" class="btn btn-primary">Add Product</a>
              </div>
            </div>
          </div>
        </div>
        <!-- row -->
        <div class="row ">
          <div class="col-xl-12 col-12 mb-5">
            <!-- card -->
            <div class="card h-100 card-lg">
              <div class="px-6 py-6 ">
                <div class="row justify-content-between">
                  <!-- form -->
                  <div class="col-lg-4 col-md-6 col-12 mb-2 mb-lg-0">
                    <form class="d-flex" role="search">
                      <input class="form-control" type="search" placeholder="Search Products" aria-label="Search">
                    </form>
                  </div>
                  <!-- select option -->
                  <div class="col-lg-2 col-md-4 col-12">
                    <select class="form-select">
                      <option selected>Status</option>
                      <option value="1">Active</option>
                      <option value="2">Deactive</option>
                      <option value="3">Draft</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- card body -->
              <div class="card-body p-0">
                <!-- table -->
                <div class="table-responsive">
                  <table class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox">
                    <thead class="bg-light">
                      <tr>
                      
                        <th>Span</th>
                        <th>Image</th>
                        <th>Image2</th>
                        <th>Image3</th>
                        <th>Image4</th>
                        <th>Proudct Name</th>
                        <th>Product Description</th>
                        <th> Parent Category</th>
                        <th>Rating</th>
                        <th>New Price</th>
                        <th> Old Price</th>
                        <th>Stock</th>
                        <th>Create at</th>
                        <th>Popular</th>
                        <th>Best Sells</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
               $fetch = "SELECT * FROM `products` AS p JOIN `parent_category` AS pc ON p.Parent_Category2 = pc.p_cid LIMIT $start,$num_records";
              $presult = mysqli_query($conn, $fetch);

              while ($prow = mysqli_fetch_array($presult)) {


              ?>
                      <tr>
                      <td><?php echo $prow['span_p'] ?></td>
                        <td>
                          <a href="#!"> <img src="./assets/images/products/<?php echo $prow['Image'] ?>" alt=""
                              height="30px" width="40px"></a>
                        </td>
                        <td>
                          <a href="#!"> <img src="./assets/images/products/<?php echo $prow['Image2'] ?>" alt=""
                              height="30px" width="40px"></a>
                        </td>
                        <td>
                          <a href="#!"> <img src="./assets/images/products/<?php echo $prow['Image3'] ?>" alt=""
                              height="30px" width="40px"></a>
                        </td>
                        <td>
                          <a href="#!"> <img src="./assets/images/products/<?php echo $prow['Image4'] ?>" alt=""
                              height="30px" width="40px"></a>
                        </td>
                        
                        <td><a href="#" class="text-reset"><?php echo $prow['Product_Name'] ?></a></td>
                        <td><a href="#" class="text-reset"><?php echo $prow['Product_Description'] ?></a></td>
                        <td><?php echo $prow['Parent_Categor_Name'] ?></td>
                        <td><?php echo $prow['rating'] ?></td>

                     
                        <td><?php echo $prow['Price1'] ?></td>
                        <td><?php echo $prow['Price2'] ?></td>
                        <td>
                          <span class="badge bg-light-primary text-dark-primary"><?php echo $prow['Stock'] ?></span>
                        </td>
                        <td><?php echo $prow['Create_At'] ?></td>
                        <td><?php echo $prow['Popular'] ?></td>
                        <td><?php echo $prow['Best_Sells'] ?></td>
                        <td>
                        <div>
                        <a href="update_products.php?id=<?php echo $prow['pid'];?>" class="btn btn-primary text-white">Edit</a>
                        <a href="delete_products.php?id=<?php echo $prow['pid'];?>" class="btn btn-danger text-white">Delete</a>
                        </div>
                       
                       </td>
                      </tr>
                      <?php  } ?>
                    </tbody>
                  </table>

                </div>
              </div>
 





<nav aria-label="...">
    <ul class="pagination">
        <?php 
        if($page >1 ){

        
        ?>
    <li class="page-item">
            <a class="page-link" href="products.php?page=<?php echo $page-1 ?>">Previous</a>
        </li>

        <?php 
        }
        $fetch = "SELECT * FROM `products`";
        $fetchRes = mysqli_query($conn,$fetch);

        $total_records = mysqli_num_rows($fetchRes);

        

        $total_page = ceil($total_records/$num_records);


        for ($i=1; $i<=$total_page  ; $i++) { 
       
        ?>
        <li class="page-item"><a class="page-link" href="products.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
       
        <?php  
        }
        
        
        if($i-1 > $page){

    
        ?>
        <li class="page-item">
            <a class="page-link" href="products.php?page=<?php echo $page+1 ?>">Next</a>
        </li>
        <?php 
        }
        ?>
    </ul>
</nav>











            </div>

          </div>

        </div>
      </div>
    </main>

  </div>


  <!-- Libs JS -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>

</body>


<!-- Mirrored from freshcart.codescandy.com/dashboard/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:08 GMT -->
</html>