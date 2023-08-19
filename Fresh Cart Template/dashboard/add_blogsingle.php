<?php 
include 'header.php';
if(isset($_POST['add_blog'])){

   
    $Title = $_POST['Title'];
   
    $Description1 = $_POST['Description1'];
    $Description2 = $_POST['Description2'];
    $Description3 = $_POST['Description3'];
    $Description4 = $_POST['Description4'];
    $Description5 = $_POST['Description5'];
   
    $Date = $_POST['Date'];
    $Time = $_POST['Time'];
   
    $Blog_Image = $_FILES['Blog_Image'];
    $Blog_Img = $Blog_Image['name'];
   
  
    $blogsingle= "INSERT INTO `blog_single` ( `Blog_Image`, `Title`, `Description1`, `Description2`, `Description3`, `Description4`, `Description5`, `Date`, `Time`) VALUES ('$Blog_Img', '$Title', '$Description1', '$Description2', '$Description3', '$Description4', '$Description5', '$Date', '$Time')";
    $blogsingleresult = mysqli_query($conn, $blogsingle);
  
  
  
  
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
                   <h4 class="mb-4 h5 mt-5">BLOG SINGLE</h4>
                                    <div class="mb-3 col-12">
                                            <label class="form-label"> Blog Image</label>
                                            <input  type="file" name="Blog_Image" accept=".jpg, .png, .svg,image/jpeg, image/png, image/svg" src="../dashboard/assets/images/blog/.." >
                                        </div>
                                      
                                        
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Title</label>
                                            <input type="text" class="form-control" placeholder="Title "name="Title"
                                                >
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Description1</label>
                                            <input type="text" class="form-control" placeholder="Enter any Description"name="Description1"
                                                >
                                            
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Description2</label>
                                            <input type="text" class="form-control" placeholder="Enter any Description"name="Description2"
                                                >
                                            
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Description3</label>
                                            <input type="text" class="form-control" placeholder="Enter any Description"name="Description3"
                                                >
                                            
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Description4</label>
                                            <input type="text" class="form-control" placeholder="Enter any Description"name="Description4"
                                                >
                                            
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Description5</label>
                                            <input type="text" class="form-control" placeholder="Enter any Description"name="Description5"
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