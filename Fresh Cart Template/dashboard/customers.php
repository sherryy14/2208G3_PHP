
    <?php
    include 'header.php'
    ?>

      <main class="main-content-wrapper">
        <div class="container">
          <div class="row mb-8">
            <div class="col-md-12">
              <div class="d-md-flex justify-content-between align-items-center">
                <div>
                  <h2>Customers</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Customers</li>
                    </ol>
                  </nav>
                </div>
               
              </div>
            </div>
          </div>
          <div class="row ">
            <div class="col-xl-12 col-12 mb-5">
              <div class="card h-100 card-lg">

                <div class="p-6">
                  <div class="row justify-content-between">
                    <div class="col-md-4 col-12">
                      <form class="d-flex" role="search">
                        <input class="form-control" type="search" placeholder="Search Customers" aria-label="Search">

                      </form>
                    </div>

                  </div>
                </div>
                <div class="card-body p-0">
                <!-- table -->
                <div class="table-responsive">
                  <table class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox">
                    <thead class="bg-light">
                      <tr>
                      
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email Address</th>
                        <th>City</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php
               $fetch = "SELECT * FROM `signup_web` ";
              $result = mysqli_query($conn, $fetch);

              while ($row = mysqli_fetch_array($result)) {


              ?>
                      <tr>
                     
                        
                        <td><a href="#" class="text-reset"><?php echo $row['su_id'] ?></a></td>
                        <td><?php echo $row['Username'] ?></td>
                        <td><?php echo $row['Email'] ?></td>
                        <td><?php echo $row['City'] ?></td>

                     
                        
                       
                        
                       
                       </td>
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


<!-- Mirrored from freshcart.codescandy.com/dashboard/customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:13 GMT -->
</html>