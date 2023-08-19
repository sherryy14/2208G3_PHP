<?php
include 'header.php';
$p_cid = $_GET['id'];

$query = "SELECT * FROM `parent_category` WHERE `p_cid` ='{$p_cid}'";
$result = mysqli_query($conn, $query);

if(isset($_POST['update'])){
	$hiddenId = $_POST['hidden'];
  $P_Image = $_FILES['P_Image'];
  $P_Img= $P_Image['name'];
    $Parent_Categor_Name = $_POST['Parent_Categor_Name'];
	$update_parent="UPDATE `parent_category` SET `P_Image`='{$P_Img}', `Parent_Categor_Name`='{$Parent_Categor_Name}' WHERE `p_cid` = '{$hiddenId}' ";
	$update_parentResult = mysqli_query($conn, $update_parent);

    if($update_parentResult){
      
   echo"
   <script>
  window.location.href='parent_category.php'
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
            <a href="parent_category.php" class="btn btn-primary">Back to Parent Category</a>
          </div>
				<!--end breadcrumb-->
         
         <div class="row mt-5">
           
						<?php 
    while($row = mysqli_fetch_array($result)){

    
    ?>
     <div class="col-12 col-lg-8">
                <div class="card">
                  <form method="post"  enctype="multipart/form-data" >
                   <div class="card-body">
                     <div class="mb-4">
                        <h5 class="mb-3">Update Form</h5>
	       <input type="hidden" class="form-control" name="hidden" value='<?php echo $row['p_cid'];?>'>
         <input id="fancy-file-upload" type="file" name="Slider_image" accept=".jpg, .png, image/jpeg, image/png" src="./dashboard/assets/images/category/." value="<?php echo $row['P_Image'] ?>" >
                        <input type="text" class="form-control" name="Parent_Categor_Name" placeholder="Write Parent Category Name"  value='<?php echo $row['Parent_Categor_Name'];?>'>
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