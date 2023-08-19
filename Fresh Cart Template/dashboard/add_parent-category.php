<?php
include 'header.php';
if(isset($_POST['add_category'])){
    $Parent_Categor_Name= $_POST['Parent_Categor_Name'];
	$P_Image = $_FILES['P_Image'];
    $P_I = $P_Image ['name'];
  
  
    $insert = "INSERT INTO `parent_category` (`P_Image`, `Parent_Categor_Name`) VALUES ( '$P_I ','$Parent_Categor_Name')";
    $result = mysqli_query($conn, $insert);
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
            <div class="col-12 col-lg-8">
                <div class="card">
                  <form method="post" enctype="multipart/form-data">
                   <div class="card-body">
                     <div class="mb-4">
					 <div class="mb-3 col-12">
                                            <label class="form-label"> Parent Category Image</label>
                                            <input  type="file" name="P_Image" accept=".jpg, .png, image/jpeg, image/png" src="../dashboard/assets/images/category/.." >
                                        </div>
                      <label for="">Category Title</label>

                        <input type="text" class="form-control" name="Parent_Categor_Name" placeholder="Write Parent Category Name">
                     </div>
                    
                   

                    <input type="submit" value="Add Category" name="add_category" class='btn btn-success my-3'>
                    
            
                    </form>
                </div>                
            
           </div><!--end row-->
		 
     </main>