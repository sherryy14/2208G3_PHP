<?php 
include 'header.php';
if(isset($_POST['add_Product'])){

    $Product_Name= $_POST['Product_Name'];
    $Product_Description= $_POST['Product_Description'];
    $span_p= $_POST['span_p'];
    $Parent_Category = $_POST['Parent_Category2'];
    $rating = $_POST['rating'];
    $Price1 = $_POST['Price1'];
    $Price2 = $_POST['Price2'];
    $Stock = $_POST['Stock'];
    $Create_At = $_POST['Create At'];
    $Popular=$_POST['Popular'];
    $Best_Sells=$_POST['Best_Sells'];
    $Image = $_FILES['Image'];
    $P_image = $Image['name'];
    $Image2 = $_FILES['Image2'];
    $P_image2 = $Image2['name'];
    $Image3 = $_FILES['Image3'];
    $P_image3= $Image3['name'];
    $Image4 = $_FILES['Image4'];
    $P_image4= $Image4['name'];
   
  
    $insert_product = "INSERT INTO `products` ( `span_p`, `Image`, `Image2`, `Image3`, `Image4`, `Product_Name`,`Product_Description`, `Parent_Category2`, `rating`, `Price1`, `Price2`, `Stock`, `Create_At`, `Popular`,`Best_Sells`)VALUES ( '$span_p','$P_image','$P_image2','$P_image3','$P_image4', '$Product_Name','$Product_Description', '$Parent_Category','$rating', '$Price1', '$Price2','$Stock','$Create_At','$Popular','$Best_Sells')";
    $productresult = mysqli_query($conn,$insert_product);
  
  
  }
?>

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
                                    <a href="products.php" class="btn btn-light">Back to Products</a>
                                </div>
                            </div>
                        </div>
                    </div>
				<!--end breadcrumb-->
         <form method="post" enctype="multipart/form-data">
         <div class="row">
          
                <div class="card">
                   <div class="card-body">
                
                   <h4 class="mb-4 h5 mt-5">Product Information</h4>
                                    <div class="mb-3 col-12">
                                            <label class="form-label">Product Image</label>
                                            <input id="fancy-file-upload" type="file" name="Image" accept=".jpg, .png, image/jpeg, image/png" src="../dashboard/assets/images/products/.." >
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label"> Image2</label>
                                            <input id="fancy-file-upload" type="file" name="Image2" accept=".jpg, .png, image/jpeg, image/png" src="../dashboard/assets/images/products/.." >
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Image3</label>
                                            <input id="fancy-file-upload" type="file" name="Image3" accept=".jpg, .png, image/jpeg, image/png" src="../dashboard/assets/images/products/.." >
                                            <div class="mb-3 col-12">
                                            <label class="form-label"> Image4</label>
                                            <input id="fancy-file-upload" type="file" name="Image4" accept=".jpg, .png, image/jpeg, image/png" src="../dashboard/assets/images/products/.." >
                                        </div>
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Span</label>
                                            <input type="text" class="form-control" placeholder="sale"name="span_p"
                                                >
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Product Name</label>
                                            <input type="text" class="form-control" placeholder="Product Name"name="Product_Name"
                                                required>
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Product Description</label>
                                            <input type="text" class="form-control" placeholder="Product Description"name="Product_Description"
                                                required>
                                        </div>
                                      
                                       
                                        <div class="col-12">
                              <label for="AddCategory" class="form-label fw-bold">Parent Category</label>
                              <select class="form-select" id="AddCategory"  name='Parent_Category2'>
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
                           
                            <div class="mb-3 col-12">
                                            <label class="form-label">Rating</label>
                                            <input type="number" step="0.5" class="form-control flatpickr" placeholder="Enter rating" name="rating">
                                        </div>
                            <div class="mb-3 col-12">
                                            <label class="form-label"> New Price</label>
                                            <input type="number" class="form-control flatpickr" placeholder="Enter Price of Product" name="Price1">
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label"> Old Price</label>
                                            <input type="number" class="form-control flatpickr" placeholder="Enter Price of Product" name="Price2">
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label"> Stock</label>
                                            <input type="text" class="form-control flatpickr" placeholder="" name="Stock">
                                        </div>
                            <div class="mb-3 col-12">
                                            <label class="form-label">Create At</label>
                                            <input type="date" class="form-control " placeholder="Select Date" name="Create_At">
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label"> Popular</label>
                                            <input type="text" class="form-control flatpickr" placeholder="Popular product" name="Popular">
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label"> Daily_Best_Sells</label>
                                            <input type="text" class="form-control flatpickr" placeholder="Best sells" name="Best_Sells">
                                        </div>
                                      
                                      
                    <div class="col-4">
                            <div class="d-grid mt-5"> 
                              <button type="submit" name="add_Product" class="btn btn-primary">Add Product</button>
                            </div>
                          </div>
                   </div>
                </div>
             
            
           </div><!--end row-->
           </form>
     </main>

            

  </div>


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


<!-- Mirrored from freshcart.codescandy.com/dashboard/add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:27 GMT -->
</html>