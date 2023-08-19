<?php 
include 'header.php';
if(isset($_POST['add'])){

   
    $Title = $_POST['Title'];
    $Title2 = $_POST['Title2'];
    $Partner_Image1 = $_FILES['Partner_Image1'];
    $Partner_Img1 = $Partner_Image1['name'];
    $Partner_Image2 = $_FILES['Partner_Image2'];
    $Partner_Img2 = $Partner_Image2['name'];
    $Partner_Image3 = $_FILES['Partner_Image3'];
    $Partner_Img3 = $Partner_Image3['name'];
    $Partner_Image4 = $_FILES['Partner_Image4'];
    $Partner_Img4 = $Partner_Image4['name'];
    $Partner_Image5 = $_FILES['Partner_Image5'];
    $Partner_Img5 = $Partner_Image5['name'];
    $Partner_Image6 = $_FILES['Partner_Image6'];
    $Partner_Img6 = $Partner_Image6['name'];
    $Partner_Image7= $_FILES['Partner_Image7'];
    $Partner_Img7 = $Partner_Image7['name'];
   
  
    $bottom= "INSERT INTO `footer` (`Title`, `Partner_Image1`, `Partner_Image2`, `Partner_Image3`, `Partner_Image4`, `Partner_Image5`, `Title2`, `Partner_Image6`, `Partner_Image7`) VALUES ( '$Title', '$Partner_Img1', '$Partner_Img2', '$Partner_Img3', '$Partner_Img4', '$Partner_Img5', '$Title2', '$Partner_Img6', '$Partner_Img7')";
    $bottomresult = mysqli_query($conn, $bottom);
  
  
  
  
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
                   <h4 class="mb-4 h5 mt-5">Payments Partners</h4>
                   <div class="mb-3 col-12">
                                            <label class="form-label">Payment</label>
                                            <input type="text" class="form-control" placeholder=" "name="Title"
                                                >
                                        </div>
                                    <div class="mb-3 col-12">
                                            <label class="form-label">Partner_Image</label>
                                            <input  type="file" name="Partner_Image1" accept=".jpg, .png, .svg,image/jpeg, image/png, image/svg" src="../dashboard/assets/images/payment/.." >
                                        </div>
                                    <div class="mb-3 col-12">
                                            <label class="form-label">Partner_Image2</label>
                                            <input  type="file" name="Partner_Image2" accept=".jpg, .png, .svg,image/jpeg, image/png, image/svg" src="../dashboard/assets/images/payment/.." >
                                        </div>
                                    <div class="mb-3 col-12">
                                            <label class="form-label">Partner_Image3</label>
                                            <input  type="file" name="Partner_Image3" accept=".jpg, .png, .svg,image/jpeg, image/png, image/svg" src="../dashboard/assets/images/payment/.." >
                                        </div>
                                    <div class="mb-3 col-12">
                                            <label class="form-label">Partner_Image4</label>
                                            <input  type="file" name="Partner_Image4" accept=".jpg, .png, .svg,image/jpeg, image/png, image/svg" src="../dashboard/assets/images/payment/.." >
                                        </div>
                                    <div class="mb-3 col-12">
                                            <label class="form-label">Partner_Image5</label>
                                            <input  type="file" name="Partner_Image5" accept=".jpg, .png, .svg,image/jpeg, image/png, image/svg" src="../dashboard/assets/images/payment/.." >
                                        </div>
                                        <h4 class="mb-4 h5 mt-5">Methods for delivery</h4>
                                      
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Deliverise</label>
                                            <input type="text" class="form-control" placeholder=" "name="Title2"
                                                >
                                        </div>
                                       
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Image6</label>
                                            <input  type="file" name="Partner_Image6" accept=".jpg, .png, .svg,image/jpeg, image/png, image/svg" src="../dashboard/assets/images/appbutton/.." >
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Image7</label>
                                            <input  type="file" name="Partner_Image7" accept=".jpg, .png, .svg,image/jpeg, image/png, image/svg" src="../dashboard/assets/images/appbutton/.." >
                                        </div>
                                        
                                     
                    <div class="col-4">
                            <div class="d-grid mt-5"> 
                              <button type="submit" name="add" class="btn btn-primary">Add </button>
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