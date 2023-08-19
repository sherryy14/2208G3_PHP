<?php 
include 'header.php';
if(isset($_POST['add_banner'])){

   
    $Daily_Title = $_POST['Daily_Title'];
   
    $Daily_Description = $_POST['Daily_Description'];
    $Daily_Shop = $_POST['Daily_Shop'];
    $Daily_Image = $_FILES['Daily_Image'];
    $Daily_Img = $Daily_Image['name'];
   
  
    $bestsells= "INSERT INTO `daily_best_sells` ( `Daily_Image`, `Daily_Title`, `Daily_Description`, `Daily_Shop`)   VALUES ( '$Daily_Img ', '$Daily_Title', '$Daily_Description', '$Daily_Shop')";
    $bestsellsresult = mysqli_query($conn, $bestsells);
  
  
  
  
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
                   <h4 class="mb-4 h5 mt-5">Banner</h4>
                                    <div class="mb-3 col-12">
                                            <label class="form-label"> Organic Banner Image</label>
                                            <input  type="file" name="Daily_Image" accept=".jpg, .png, image/jpeg, image/png" src="../dashboard/assets/images/banner/.." >
                                        </div>
                                      
                                        
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Title</label>
                                            <input type="text" class="form-control" placeholder="Title for your Banner"name="Daily_Title"
                                                >
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Description</label>
                                            <input type="text" class="form-control" placeholder="Enter any Description"name="Daily_Description"
                                                >
                                            
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Shop</label>
                                            <input type="text" class="form-control "  name="Daily_Shop">
                                        </div>
                                     
                    <div class="col-4">
                            <div class="d-grid mt-5"> 
                              <button type="submit" name="add_banner" class="btn btn-primary">Add Best Sells</button>
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