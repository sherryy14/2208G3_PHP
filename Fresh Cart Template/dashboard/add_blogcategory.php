<?php 
include 'header.php';
if(isset($_POST['add_blog'])){

   
    $Title = $_POST['Title'];
   
    $Description = $_POST['Description'];
    $Date = $_POST['Date'];
    $Time = $_POST['Time'];
   
    $Image = $_FILES['Image'];
    $Img = $Image['name'];
   
  
    $blogcategory= "INSERT INTO `blog_category` ( `Image`, `Title`, `Description`, `Date`, `Time`)VALUES ('$Img', '$Title', '$Description', '$Date', '$Time')";
    $blogcategoryresult = mysqli_query($conn, $blogcategory);
  
  
  
  
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
                   <h4 class="mb-4 h5 mt-5">BLOG CATEGORY</h4>
                                    <div class="mb-3 col-12">
                                            <label class="form-label"> Blog Image</label>
                                            <input  type="file" name="Image" accept=".jpg, .png, .svg,image/jpeg, image/png, image/svg" src="../dashboard/assets/images/blog/.." >
                                        </div>
                                      
                                        
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Title</label>
                                            <input type="text" class="form-control" placeholder="Title "name="Title"
                                                >
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Description</label>
                                            <input type="text" class="form-control" placeholder="Enter any Description"name="Description"
                                                >
                                            
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Date</label>
                                            <input type="Date" class="form-control" placeholder=""name="Date"
                                                >
                                            
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Time</label>
                                            <input type="text" class="form-control" placeholder=""name="Time"
                                                >
                                            
                                        </div>
                                        
                                     
                    <div class="col-4">
                            <div class="d-grid mt-5"> 
                              <button type="submit" name="add_blog" class="btn btn-primary">Add Blogs</button>
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