<?php
include 'header.php';
$dsid = $_GET['id'];

$query = "SELECT * FROM  `daily_best_sells`WHERE `dbsid` ='{$dsid}'";
$result = mysqli_query($conn, $query);

if(isset($_POST['update'])){
	$hiddenId = $_POST['hidden'];
	$Daily_Title = $_POST['Daily_Title'];
	$Daily_Description = $_POST['Daily_Description'];
	$Daily_Shop = $_POST['Daily_Shop'];
	
    $Daily_Image = $_FILES['Daily_Image'];
    $Daily_Img= $Daily_Image['name'];

	$update_bestsells="UPDATE  `daily_best_sells` SET `Daily_Image`='{$Daily_Img}', `Daily_Title`='{$Daily_Title}', `Daily_Description`='{$Daily_Description}', `Daily_Shop`='{$Daily_Shop}' WHERE `dbsid` = '{$hiddenId}'";
	$update_bestsellsresult = mysqli_query($conn, $update_bestsells);

    if($update_bestsellsresult){
      
   echo"
   <script>
  window.location.href='organic_coffe_banner.php'
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
	       <input type="hidden" class="form-control" name="hidden" value='<?php echo $row['dbsid'];?>'>
           <div class="mb-3 col-12">
           <input id="fancy-file-upload" type="file" name="Daily_Image" accept=".jpg, .png, image/jpeg, image/png" src="./dashboard/assets/images/banner/." value="<?php echo $row['Daily_Image'] ?>" >
                    </div>
             <div class="mb-3 col-12">
           <input type="text" class="form-control" placeholder=" Enter title "name="Daily_Title"value="<?php echo $row['Daily_Title'];?>"  required></div>
           <div class="mb-3 col-12">
           <input type="text" class="form-control" placeholder="Description"name="Daily_Description" value="<?php echo $row['Daily_Description'] ?>" ></div>
           <div class="mb-3 col-12">
           <input type="text" class="form-control flatpickr" placeholder="" name="Daily_Shop" value="<?php echo $row['Daily_Shop'] ?>"></div>
           

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