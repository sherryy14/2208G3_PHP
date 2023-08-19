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
        <!-- row -->
        <div class="row mb-8">
          <div class="col-md-12">
            <div class="d-md-flex justify-content-between align-items-center">
              <!-- pageheader -->
              <div>
                <h2>Categories</h2>
                 <!-- breacrumb -->
                 <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Categories</li>
                  </ol>
                </nav>
              </div>
              <!-- button -->
              <div>
                <a href="add-category.html" class="btn btn-primary">Add New Category</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row ">
          <div class="col-xl-12 col-12 mb-5">
            <!-- card -->
            <div class="card h-100 card-lg">
              <div class=" px-6 py-6 ">
                <div class="row justify-content-between">
                  <div class="col-lg-4 col-md-6 col-12 mb-2 mb-md-0">
                    <!-- form -->
                    <form class="d-flex" role="search">
                      <input class="form-control" type="search" placeholder="Search Category" aria-label="Search">
                    </form>
                  </div>
                  <!-- select option -->
                  <div class="col-xl-2 col-md-4 col-12">
                    <select class="form-select">
                      <option selected>Status</option>
                      <option value="Published">Published</option>
                      <option value="Unpublished">Unpublished</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- card body -->
              <div class="card-body p-0">
                <!-- table -->
                <div class="table-responsive ">
                  <table class="table table-centered table-hover mb-0 text-nowrap table-borderless table-with-checkbox">
                    <thead class="bg-light">
                      <tr>
                       
                        <th>Icon</th>
                        <th> Name</th>
                        <th>Parent Category</th>
                        <th>Proudct</th>
                        <th>Date</th>
                        <th>Action</th>
                      

                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
              $fetch = "SELECT * FROM `category` AS c JOIN `parent_category` AS pc ON c.Parent_Category1 = pc.p_cid LIMIT $start,$num_records";
              $result = mysqli_query($conn, $fetch);

              while ($row = mysqli_fetch_array($result)) {


              ?>
           
                      <tr>
                        <td>
                          <a href="#!"> <img src="./assets/images/icons/<?php echo $row['Icon'] ?>" alt=""
                              class="icon-shape icon-sm"></a>
                        </td>
                        <td><?php echo $row['Name'] ?></td>
                      

                        <td>
                        <?php echo $row['Parent_Categor_Name'] ?>
                        </td>
                        <td>
                        <?php echo $row['Product'] ?>
                        </td>
                        <td>
                        <?php echo $row['Date'] ?>
                        </td>
                        
                    <td>
                        <div>
                        <a href="update_category.php?id=<?php echo $row['cid'];?>" class="btn btn-success text-white">Edit</a>
                        <a href="delete_category.php?id=<?php echo $row['cid'];?>" class="btn btn-danger text-white">Delete</a>
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
            <a class="page-link" href="categories.php?page=<?php echo $page-1 ?>">Previous</a>
        </li>

        <?php 
        }
        $fetch = "SELECT * FROM `category`";
        $fetchRes = mysqli_query($conn,$fetch);

        $total_records = mysqli_num_rows($fetchRes);

        

        $total_page = ceil($total_records/$num_records);


        for ($i=1; $i<=$total_page  ; $i++) { 
       
        ?>
        <li class="page-item"><a class="page-link" href="categories.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
       
        <?php  
        }
        
        
        if($i-1 > $page){

    
        ?>
        <li class="page-item">
            <a class="page-link" href="categories.php?page=<?php echo $page+1 ?>">Next</a>
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


<!-- Mirrored from freshcart.codescandy.com/dashboard/categories.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:11 GMT -->
</html>