<?php
include 'header.php';
$bid = $_GET['id'];

$query = "SELECT * FROM  `banner` WHERE `bid` ='{$bid}'";
$result = mysqli_query($conn, $query);

if(isset($_POST['update'])){
	$hiddenId = $_POST['hidden'];
	$Title = $_POST['Title'];
	$Description = $_POST['Description'];
	$Span = $_POST['Span'];
	$Shop = $_POST['Shop'];
	
    $Banner_image = $_FILES['Banner_image'];
    $Banner_img= $Banner_image['name'];

	$update_banner="UPDATE  `banner` SET `Banner_image`='{$Banner_img}', `Title`='{$Title}', `Description`='{$Description}',`Span`='{$Span}', `Shop`='{$Shop}' WHERE `bid` = '{$hiddenId}'";
	$update_bannerresult= mysqli_query($conn, $update_banner);

    if($update_bannerresult){
      
   echo"
   <script>
  window.location.href='banner.php'
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
	       <input type="hidden" class="form-control" name="hidden" value='<?php echo $row['bid'];?>'>
           <div class="mb-3 col-12">
           <input id="fancy-file-upload" type="file" name="Banner_image" accept=".jpg, .png, image/jpeg, image/png" src="./dashboard/assets/images/banner/." value="<?php echo $row['Banner_image'] ?>" >
                    </div>
             <div class="mb-3 col-12">
           <input type="text" class="form-control" placeholder=" Enter title "name="Title"value="<?php echo $row['Title'];?>"  required></div>
           <div class="mb-3 col-12">
           <input type="text" class="form-control" placeholder="Description"name="Description" value="<?php echo $row['Description'] ?>" ></div>
           <div class="mb-3 col-12">
           <input type="text" class="form-control" placeholder=""name="Span" value="<?php echo $row['Span'] ?>" ></div>
           <div class="mb-3 col-12">
           <input type="text" class="form-control flatpickr" placeholder="" name="Shop" value="<?php echo $row['Shop'] ?>"></div>
           

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