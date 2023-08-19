<?php 
include 'header.php';
if(isset($_POST['add_category'])){

    $Name= $_POST['Name'];
    $Parent_category1 = $_POST['Parent_category1'];
    $Date = $_POST['Date'];
    $Product = $_POST['Product'];
    $Icon = $_FILES['Icon'];
    $Icon_image = $Icon['name'];
   
  
    $insert = "INSERT INTO `category` ( `Icon`, `Name`, `Parent_Category1`, `Date`, `Product`) VALUES ( '$Icon_image', '$Name', '$Parent_category1', '$Date','$Product' )";
    $result = mysqli_query($conn, $insert);
  
  
  
  
  }
?>

 <!--start main content-->
 <main class="page-content">
        <!--breadcrumb-->
        <div class="row mb-8">
                        <div class="col-md-12">
                            <div class="d-md-flex justify-content-between align-items-center">
                               
                                <div>
                                    <h2>Add New Category</h2>
                                      
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb mb-0">
                                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Categories</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Add New Category</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div>
                                    <a href="categories.php" class="btn btn-light">Back to Categories</a>
                                </div>
                            </div>
                        </div>
                    </div>
				<!--end breadcrumb-->
         <form method="post" enctype="multipart/form-data">
         <div class="row">
          
                <div class="card">
                   <div class="card-body">
                   <h4 class="mb-4 h5 mt-5">Category Information</h4>
                                    <div class="mb-3 col-12">
                                            <label class="form-label">Category Image</label>
                                            <input id="fancy-file-upload" type="file" name="Icon" accept=".jpg, .png, image/jpeg, image/png" src="../dashboard/assets/images/icons/.." >
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Category Name</label>
                                            <input type="text" class="form-control" placeholder="Category Name"name="Name"
                                                required>
                                        </div>
                                        
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Products</label>
                                            <input type="text" class="form-control" placeholder="Total Products"name="Product"
                                                required>
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Date</label>
                                            <input type="text" class="form-control flatpickr" placeholder="Select Date" name="Date">
                                        </div>
                                        <div class="col-12">
                              <label for="AddCategory" class="form-label fw-bold">Parent Category</label>
                              <select class="form-select" id="AddCategory"  name='Parent_category1'>
                                <option disabled selected>Select Category</option>
                                <?php 
                                $parent_category= "SELECT * FROM `parent_category`";
                                
                                $parent_categoryResult = mysqli_query($conn,$parent_category);

                                while($crow = mysqli_fetch_array($parent_categoryResult)){

                               
                                ?>
                                <option value="<?php echo $crow['p_cid']?>"><?php echo $crow['Parent_Categor_Name']?></option>
                               <?php  }?>
                              </select>
                            </div>
                    <div class="col-4">
                            <div class="d-grid mt-5"> 
                              <button type="submit" name="add_category" class="btn btn-primary">Add Category</button>
                            </div>
                          </div>
                   </div>
                </div>
             
            
           </div><!--end row-->
           </form>
     </main>

            
  
    <script src="../assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <!-- Libs JS -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>
    <script src="../assets/libs/quill/dist/quill.min.js"></script>
    <script src="../assets/js/vendors/editor.js"></script>
    <script src="../assets/libs/dropzone/dist/min/dropzone.min.js"></script>


</body>


<!-- Mirrored from freshcart.codescandy.com/dashboard/add-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:28 GMT -->
</html>  