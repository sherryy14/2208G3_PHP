<?php
include 'header.php';
$fid = $_GET['id'];

$query = "SELECT * FROM  `footer` WHERE `fid` ='{$fid}'";
$result = mysqli_query($conn, $query);

if(isset($_POST['update'])){
	$hiddenId = $_POST['hidden'];
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
	
   
	$update_footer="UPDATE  `footer` SET `Title`='{$Title}', `Partner_Image1`='{$Partner_Img1}' , `Partner_Image2`='{$Partner_Img2}', `Partner_Image3`='{$Partner_Img3}', `Partner_Image4`='{$Partner_Img4}' , `Partner_Image5`='{$Partner_Img5}', `Title2`='{$Title2}', `Partner_Image6`='{$Partner_Img6}', `Partner_Image7`='{$Partner_Img7}'WHERE `fid` = '{$hiddenId}'";
	$update_footerresult= mysqli_query($conn, $update_footer);

    if($update_footerresult){
      
   echo"
   <script>
  window.location.href='footer.php.php'
</script>";
    }
}
?>


<main class="page-content mt-5">
        <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">eCommerce</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add Category</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<a href="categories.php" class="btn btn-primary">Show Category</a>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
              	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
                <div>
            <a href="organic_coffe_banner.php" class="btn btn-primary">Back to banner</a>
          </div>
				<!--end breadcrumb-->
         
         <div class="row mt-5">
            
						<?php 
    while($row = mysqli_fetch_array($result)){

    
    ?>
    <div class="col-12 ">
                <div class="card">
                <form method="post" enctype="multipart/form-data" >
                   <div class="card-body">
                     <div class="mb-4">
                        <h5 class="mb-3">Update Form</h5>
	       <input type="hidden" class="form-control" name="hidden" value='<?php echo $row['fid'];?>'>
           <div class="mb-3 col-12">
           <input type="text" class="form-control" placeholder=" Enter title "name="Title"value="<?php echo $row['Title'];?>"  required></div>
           <div class="mb-3 col-12">
           <input id="fancy-file-upload" type="file" name="Partner_Image1" accept=".jpg, .png, image/jpeg, image/png" src="./dashboard/assets/images/payment/." value="<?php echo $row['Partner_Image1'] ?>" >
                    </div>
           <div class="mb-3 col-12">
           <input id="fancy-file-upload" type="file" name="Partner_Image2" accept=".jpg, .png, image/jpeg, image/png" src="./dashboard/assets/images/payment/." value="<?php echo $row['Partner_Image2'] ?>" >
                    </div>
           <div class="mb-3 col-12">
           <input id="fancy-file-upload" type="file" name="Partner_Image3" accept=".jpg, .png, image/jpeg, image/png" src="./dashboard/assets/images/payment/." value="<?php echo $row['Partner_Image3'] ?>" >
                    </div>
           <div class="mb-3 col-12">
           <input id="fancy-file-upload" type="file" name="Partner_Image4" accept=".jpg, .png, image/jpeg, image/png" src="./dashboard/assets/images/payment/." value="<?php echo $row['Partner_Image4'] ?>" >
                    </div>
           <div class="mb-3 col-12">
           <input id="fancy-file-upload" type="file" name="Partner_Image5" accept=".jpg, .png, image/jpeg, image/png" src="./dashboard/assets/images/payment/." value="<?php echo $row['Partner_Image5'] ?>" >
                    </div>
                    <div class="mb-3 col-12">
           <input type="text" class="form-control" placeholder=" Enter title "name="Title2"value="<?php echo $row['Title2'];?>"  required></div>
           <div class="mb-3 col-12">
           <input id="fancy-file-upload" type="file" name="Partner_Image6" accept=".jpg, .png, image/jpeg, image/png" src="./dashboard/assets/images/appbutton/." value="<?php echo $row['Partner_Image5'] ?>" >
                    </div>
           <div class="mb-3 col-12">
           <input id="fancy-file-upload" type="file" name="Partner_Image7" accept=".jpg, .png, image/jpeg, image/png" src="./dashboard/assets/images/appbutton/." value="<?php echo $row['Partner_Image5'] ?>" >
                    </div>
           
          
           

                     </div>
                   </div>
					<div class="row">
                  <label class="col-sm-3 col-form-label"></label>
                  <div class="col-sm-9">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                      <button name='update' type="submit" class="btn btn-primary px-4">Update</button>
                  
                    </div>
                  </div>
                </div>
             </form>
                </div>                
            </div>
        <?php }?>

                    
           </div><!--end row-->
		 
     </main>