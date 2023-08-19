<?php
include 'header.php';
$cid = $_GET['id'];

$query = "SELECT * FROM `category` WHERE `cid` ='{$cid}'";
$result = mysqli_query($conn, $query);

if(isset($_POST['update'])){
	$hiddenId = $_POST['hidden'];
	$Name = $_POST['Name'];
	$Parent_category1 = $_POST['Parent_category1'];
	$Product = $_POST['Product'];
	$Date = $_POST['Date'];
    $Icon = $_FILES['Icon'];
    $Icon_image = $Icon['name'];

	$update_category="UPDATE `category` SET `Icon`='{$Icon_image}',  `Name`='{$Name}' ,`Parent_category1`='{$Parent_category1}' ,`Product`='{$Product}', `Date`='{$Date}' WHERE `cid` = '{$hiddenId}' ";
	$update_categoryResult = mysqli_query($conn, $update_category);

    if($update_categoryResult){
      
   echo"
   <script>
  window.location.href='categories.php'
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
            <a href="categories.php" class="btn btn-primary">Back to Category</a>
          </div>
				<!--end breadcrumb-->
         
         <div class="row mt-5">
            <div class="col-12 ">
                <div class="card">
                  <form method="post" >
                   <div class="card-body">
                     <div class="mb-4">
                        <h5 class="mb-3">Update Form</h5>
						<?php 
    while($row = mysqli_fetch_array($result)){

    
    ?>
	       <input type="hidden" class="form-control" name="hidden" value='<?php echo $row['cid'];?>'>
           <div class="mb-3 col-12">
           <input id="fancy-file-upload" type="file" name="Icon" accept=".jpg, .png, image/jpeg, image/png" src="./dashboard/assets/images/icons/." value="<?php echo $row['Icon'] ?>" >
                   
                                        </div>
                                        <div class="mb-3 col-12">
           <input type="text" class="form-control" placeholder="Category Name"name="Name"value="<?php echo $row['Name'];?>"  required></div>
           <div class="mb-3 col-12">
           <input type="text" class="form-control" placeholder="Total Products"name="Product" value="<?php echo $row['Product'] ?>" required></div>
           <div class="mb-3 col-12">
           <input type="text" class="form-control flatpickr" placeholder="Select Date" name="Date" value="<?php echo $row['Date'] ?>"></div>
           <div class="mb-3 col-12">
           <select class="form-select " id="AddCategory"  name='Parent_category1' >
                                <option disabled selected>Select Category</option>
                                <?php 
                                $parent_category= "SELECT * FROM `parent_category`";
                                
                                $parent_categoryResult = mysqli_query($conn,$parent_category);

                                while($crow = mysqli_fetch_array($parent_categoryResult)){
                                    if($row['Parent_category1'] == $crow['Parent_Categor_Name']){
                                        $select = 'selected';
                                    }else{
                                        $select = '';
                    
                                    }
                               
                                ?>
                                <option value="<?php echo $crow['p_cid']?>"><?php echo $crow['Parent_Categor_Name']?></option>
                               <?php  }?>
                              </select>
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
             
        <?php }?>
                    </form>
                </div>                
            
           </div><!--end row-->
		 
     </main>