<?php
include 'header.php';
$pid = $_GET['id'];

$query = "SELECT * FROM `products` WHERE `pid` ='{$pid}'";
$result = mysqli_query($conn, $query);

if(isset($_POST['update'])){
	$hiddenId = $_POST['hidden'];
	$Product_Name= $_POST['Product_Name'];
	$Product_Description= $_POST['Product_Description'];
    $span_p= $_POST['span_p'];
    $Parent_Category2 = $_POST['Parent_Category2'];
    $rating = $_POST['rating'];
    $Price1 = $_POST['Price1'];
    $Price2 = $_POST['Price2'];
    $Stock = $_POST['Stock'];
    $Create_At = $_POST['Create_At'];
    $Popular=$_POST['Popular'];
    $Best_Sells=$_POST['Best_Sells'];
    $Image = $_FILES['Image'];
    $P_image = $Image['name'];
    $Image2 = $_FILES['Image2'];
    $P_image2 = $Image2['name'];
    $Image3 = $_FILES['Image3'];
    $P_image3= $Image3['name'];
    $Image4 = $_FILES['Image4'];
    $P_image4= $Image4['name'];

	$update_product="UPDATE `products` SET `span_p`='{$span_p}', `Image`='{$P_image}', `Image2`='{$P_image2}', `Image3`='{$P_image3}', `Image4`='{$P_image4}' ,`Product_Name`='{$Product_Name}', `Product_Description`='{$Product_Description}',`Parent_Category2`='{$Parent_Category2}' , `rating`='{$rating}', `Price1`='{$Price1}' , `Price2`='{$Price2}', `Stock`='{$Stock}', `Create_At`='{$Create_At}', `Popular`='{$Popular}', `Best_Sells`='{$Best_Sells}' WHERE `pid` = '{$hiddenId}' ";
  $update_productResult = mysqli_query($conn, $update_product);
    if($update_productResult){
      
   echo"
   <script>
  window.location.href='products.php'
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
            <a href="products.php" class="btn btn-primary">Back to Products</a>
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
			
	       <input type="hidden" class="form-control" name="hidden" value='<?php echo $row['pid'];?>'>
           <div class="mb-3 col-12">
           <input id="fancy-file-upload" type="file" name="Image" accept=".jpg, .png, image/jpeg, image/png" src="./assets/images/products/."value="<?php echo $row['Image'] ?>" >
            </div>
           <div class="mb-3 col-12">
           <input id="fancy-file-upload" type="file" name="Image2" accept=".jpg, .png, image/jpeg, image/png" src="./assets/images/products/."value="<?php echo $row['Image2'] ?>" >
            </div>
           <div class="mb-3 col-12">
           <input id="fancy-file-upload" type="file" name="Image3" accept=".jpg, .png, image/jpeg, image/png" src="./assets/images/products/."value="<?php echo $row['Image3'] ?>" >
            </div>
           <div class="mb-3 col-12">
           <input id="fancy-file-upload" type="file" name="Image4" accept=".jpg, .png, image/jpeg, image/png" src="./assets/images/products/."value="<?php echo $row['Image4'] ?>" >
            </div>
             <div class="mb-3 col-12">
          
          
          
           <div class="mb-3 col-12">
           <input type="text" class="form-control" placeholder="sale"name="span_p" value="<?php echo $row['span_p'] ?>"></div>
           <div class="mb-3 col-12">
           <input type="text" class="form-control" placeholder="Product Name"name="Product_Name" value="<?php echo $row['Product_Name'] ?>"  required></div>
           <input type="text" class="form-control" placeholder="Product Description"name="Product_Name" value="<?php echo $row['Product_Description'] ?>"  ></div>
           
           <div class="mb-3 col-12">
           <select class="form-select " id="AddCategory"  name='Parent_Category2' >
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
           <div class="mb-3 col-12">
           <input type="number" step="0.5" class="form-control flatpickr" placeholder="Enter rating" name="rating" value="<?php echo $row['rating'] ?>" ></div>
           <div class="mb-3 col-12">
           <input type="number" class="form-control flatpickr" placeholder="Enter Price of Product" name="Price1" value="<?php echo $row['Price1'] ?>" ></div>
           <div class="mb-3 col-12">
           <input type="number" class="form-control flatpickr" placeholder="Enter Price of Product" name="Price2" value="<?php echo $row['Price2'] ?>" ></div>
           <div class="mb-3 col-12">
           <input type="text" class="form-control flatpickr" placeholder="" name="Stock" value="<?php echo $row['Stock'] ?>" ></div>
           <div class="mb-3 col-12">
           <input type="date" class="form-control " placeholder="Select Date" name="Create_At" value="<?php echo $row['Create_At'] ?>" ></div>
           <div class="mb-3 col-12">
           <input type="text" class="form-control flatpickr" placeholder="Popular product" name="Popular" value="<?php echo $row['Popular'] ?>" ></div>
           <div class="mb-3 col-12">
           <input type="text" class="form-control flatpickr" placeholder="Best sells" name="Best_Sells" value="<?php echo $row['Best_Sells'] ?>" ></div>

                     </div>
                    
					<div class="row">
                  <label class="col-sm-3 col-form-label"></label>
                  <div class="col-sm-9">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                      <button name='update' type="submit" class="btn btn-primary px-4">Update</button>
                  
                    </div>
                  </div>
                </div>
                     </div>
                   </div>
                </form> 
                </div> 
                </div>              
        <?php }?>
                  
         </div>  
            
          <!--end row-->
		 
     </main>