<?php 
include 'header.php';


?>
    

    <!-- main -->
    <main class="main-content-wrapper">
      <div class="container">
        <div class="row mb-8">
          <div class="col-md-12">
            <!-- page header -->
            <div class="d-md-flex justify-content-between align-items-center">
              <div>
                <h2>Daily Best Sells</h2>
                  <!-- breacrumb -->
                  <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Daily Best Sells</li>
                  </ol>
                </nav>
              </div>
              <!-- button -->
              <div>
                <a href="add_organic_coffee_banner.php" class="btn btn-primary">Add Banner</a>
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
                      
                        <th> Banner Image</th>
                       
                        <th>Title</th>
                        <th>Description</th>
                        <th> Shop</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
              $fetchbanner = "SELECT * FROM `daily_best_sells`";
              $bannerresult = mysqli_query($conn, $fetchbanner);

              while ($srow = mysqli_fetch_array($bannerresult)) {


              ?>
                      <tr>

                        <td>
                       
                          <a href="#!"> <img src="./assets/images/banner/<?php echo $srow['Daily_Image'] ?>" alt=""
                          height="40px" width="40px"></a>
                        </td>
                        
                        <td><?php echo $srow['Daily_Title'] ?></td>

                     
                        <td><?php echo $srow['Daily_Description'] ?></td>
                        <td><?php echo $srow['Daily_Shop'] ?></td>
                        <td>
                        <div>
                        <a href="update_best_sells.php?id=<?php echo $srow['dbsid'];?>" class="btn btn-primary text-white">Edit</a>
                        <a href="delete_best_sells.php?id=<?php echo $srow['dbsid'];?>" class="btn btn-danger text-white">Delete</a>
                        </div>
                       
                       </td>>
                      </tr>
                      <?php  } ?>
                    </tbody>
                  </table>

                </div>
              </div>
 
















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