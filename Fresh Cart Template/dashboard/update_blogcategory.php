<?php
include 'header.php';
$bcatid = $_GET['id'];

$query = "SELECT * FROM   `blog_category` WHERE `bcatid` ='{$bcatid}'";
$result = mysqli_query($conn, $query);

if(isset($_POST['update'])){
	$hiddenId = $_POST['hidden'];
	$Title = $_POST['Title'];
	$Description = $_POST['Description'];
	$Date = $_POST['Date'];
	$Time = $_POST['Time'];
	
    $Image = $_FILES['Image'];
    $Img= $Image['name'];

	$update_blog="UPDATE  `blog_category` SET `Image`='{$Img}', `Title`='{$Title}', `Description`='{$Description}',`Date`='{$Date}', `Time`='{$Time}' WHERE `bcatid` = '{$hiddenId}'";
	$update_blogresult= mysqli_query($conn, $update_blog);

    if($update_blogresult){
      
   echo"
   <script>
  window.location.href='blogcategory.php'
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
            <a href="blogcart.php" class="btn btn-primary">Back to blog cards</a>
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
	       <input type="hidden" class="form-control" name="hidden" value='<?php echo $row['bcatid'];?>'>
           <div class="mb-3 col-12">
           <input id="fancy-file-upload" type="file" name="Image" accept=".jpg, .png, image/jpeg, image/png" src="./dashboard/assets/images/blog/." value="<?php echo $row['Image'] ?>" >
                    </div>
             <div class="mb-3 col-12">
           <input type="text" class="form-control" placeholder=" Enter title "name="Title"value="<?php echo $row['Title'];?>"  required></div>
           <div class="mb-3 col-12">
           <input type="text" class="form-control" placeholder="Description"name="Description" value="<?php echo $row['Description'] ?>" ></div>
           <div class="mb-3 col-12">
           <input type="Date" class="form-control" placeholder=""name="Date" value="<?php echo $row['Date'] ?>" ></div>
           <div class="mb-3 col-12">
           <input type="text" class="form-control flatpickr" placeholder="" name="Time" value="<?php echo $row['Time'] ?>"></div>
           

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