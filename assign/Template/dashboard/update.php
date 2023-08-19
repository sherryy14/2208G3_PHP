<?php
include 'header.php';

$id = $_GET['id'];

$query = "SELECT * FROM `products` WHERE `id` ='{$id}'";
$result = mysqli_query($conn, $query);

if(isset($_POST['update'])){
    $hiddenId = $_POST['hidden'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    
    $weight = $_POST['weight'];
    $dimension = $_POST['dimension'];
    $material = $_POST['material'];
    $category = $_POST['category'];
    $img1 = $_FILES['files1'];
    $img2 = $_FILES['files2'];
    $img3 = $_FILES['files3'];
    $img4 = $_FILES['files4'];
    $img5 = $_FILES['files5'];
    $image1 = $img1['name'];
    $image2 = $img2['name'];
    $image3 = $img3['name'];
    $image4 = $img4['name'];
    $image5 = $img5['name'];

    $update = "UPDATE `products` SET `title` = '{$title}', `price`= '{$price}', `description` = '{$description}',  `img1` = '{$image1}',  `img2` = '{$image2}',  `img3` = '{$image3}',  `img4` = '{$image4}',  `img5` = '{$image5}',  `weight` = '{$weight}',  `dimension`='{$dimension}',  `material`='{$material}' ,`category`='{$category}' WHERE `id` = '{$hiddenId}'";
    $updateResult = mysqli_query($conn, $update);

    if($updateResult){
        // header("Location: products.php");
   echo"
   <script>
  window.location.href='products.php'
</script>";
    }
}

?>



<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roksyn - Bootstrap 5 Admin Template</title>

    <!--plugins-->
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet">
    <!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet">
	<script src="assets/js/pace.min.js"></script>
    <!--Styles-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/icons.css">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/dark-theme.css" rel="stylesheet">
    <link href="assets/css/semi-dark-theme.css" rel="stylesheet">
    <link href="assets/css/minimal-theme.css" rel="stylesheet">
    <link href="assets/css/shadow-theme.css" rel="stylesheet">
     
  </head>
  <body>

    <!--start header-->
    
     <!--end header-->


     <!--start sidebar-->
      <aside class="sidebar-wrapper">
          <div class="sidebar-header">
            <div class="logo-icon">
              <img src="assets/images/logo-icon.png" class="logo-img" alt="">
            </div>
            <div class="logo-name flex-grow-1">
              <h5 class="mb-0">Roksyn</h5>
            </div>
            <div class="sidebar-close ">
              <span class="material-symbols-outlined">close</span>
            </div>
          </div>
          <div class="sidebar-nav" data-simplebar="true">
            
              <!--navigation-->
              <ul class="metismenu" id="menu">
                <li>
                  <a href="index.html">
                    <div class="parent-icon"><span class="material-symbols-outlined">home</span>
                    </div>
                    <div class="menu-title">Dashboard</div>
                  </a>
                </li>
                <li>
                  <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><span class="material-symbols-outlined">apps</span>
                    </div>
                    <div class="menu-title">Application</div>
                  </a>
                  <ul>
                    <li> <a href="app-emailbox.html"><span class="material-symbols-outlined">arrow_right</span>Email</a>
                    </li>
                    <li> <a href="app-chat-box.html"><span class="material-symbols-outlined">arrow_right</span>Chat Box</a>
                    </li>
                    <li> <a href="app-file-manager.html"><span class="material-symbols-outlined">arrow_right</span>File Manager</a>
                    </li>
                    <li> <a href="app-contact-list.html"><span class="material-symbols-outlined">arrow_right</span>Contatcs</a>
                    </li>
                    <li> <a href="app-to-do.html"><span class="material-symbols-outlined">arrow_right</span>Todo List</a>
                    </li>
                    <li> <a href="app-invoice.html"><span class="material-symbols-outlined">arrow_right</span>Invoice</a>
                    </li>
                    <li> <a href="app-fullcalender.html"><span class="material-symbols-outlined">arrow_right</span>Calendar</a>
                    </li>
                  </ul>
                </li>
                <li class="menu-label">UI Elements</li>
                <li>
                  <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><span class="material-symbols-outlined">widgets</span>
                    </div>
                    <div class="menu-title">Widgets</div>
                  </a>
                  <ul>
                    <li> <a href="widget-data.html"><span class="material-symbols-outlined">arrow_right</span>Data Widget</a>
                    </li>
                    <li> <a href="widget-static.html"><span class="material-symbols-outlined">arrow_right</span>Widget Static</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><span class="material-symbols-outlined">shopping_cart</span>
                    </div>
                    <div class="menu-title">eCommerce</div>
                  </a>
                  <ul>
                    <li> <a href="ecommerce-add-product.html"><span class="material-symbols-outlined">arrow_right</span>Add Product</a>
                    </li>
                    <li> <a href="ecommerce-products.html"><span class="material-symbols-outlined">arrow_right</span>Products</a>
                    </li>
                    <li> <a href="ecommerce-customers.html"><span class="material-symbols-outlined">arrow_right</span>Customers</a>
                    </li>
                    <li> <a href="ecommerce-customer-details.html"><span class="material-symbols-outlined">arrow_right</span>Customer Details</a>
                    </li>
                    <li> <a href="ecommerce-orders.html"><span class="material-symbols-outlined">arrow_right</span>Orders</a>
                    </li>
                    <li> <a href="ecommerce-customer-details.html"><span class="material-symbols-outlined">arrow_right</span>Order Details</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><span class="material-symbols-outlined">redeem</span>
                    </div>
                    <div class="menu-title">Components</div>
                  </a>
                  <ul>
                    <li> <a href="component-alerts.html"><span class="material-symbols-outlined">arrow_right</span>Alerts</a>
                    </li>
                    <li> <a href="component-accordions.html"><span class="material-symbols-outlined">arrow_right</span>Accordions</a>
                    </li>
                    <li> <a href="component-badges.html"><span class="material-symbols-outlined">arrow_right</span>Badges</a>
                    </li>
                    <li> <a href="component-buttons.html"><span class="material-symbols-outlined">arrow_right</span>Buttons</a>
                    </li>
                    <li> <a href="component-cards.html"><span class="material-symbols-outlined">arrow_right</span>Cards</a>
                    </li>
                    <li> <a href="component-lightbox.html"><span class="material-symbols-outlined">arrow_right</span>Lightbox</a>
                    </li>
                    <li> <a href="component-carousels.html"><span class="material-symbols-outlined">arrow_right</span>Carousels</a>
                    </li>
                    <li> <a href="component-list-groups.html"><span class="material-symbols-outlined">arrow_right</span>List Groups</a>
                    </li>
                    <li> <a href="component-media-object.html"><span class="material-symbols-outlined">arrow_right</span>Media Objects</a>
                    </li>
                    <li> <a href="component-modals.html"><span class="material-symbols-outlined">arrow_right</span>Modals</a>
                    </li>
                    <li> <a href="component-navs-tabs.html"><span class="material-symbols-outlined">arrow_right</span>Navs & Tabs</a>
                    </li>
                    <li> <a href="component-paginations.html"><span class="material-symbols-outlined">arrow_right</span>Pagination</a>
                    </li>
                    <li> <a href="component-popovers-tooltips.html"><span class="material-symbols-outlined">arrow_right</span>Popovers & Tooltips</a>
                    </li>
                    <li> <a href="component-progress-bars.html"><span class="material-symbols-outlined">arrow_right</span>Progress</a>
                    </li>
                    <li> <a href="component-spinners.html"><span class="material-symbols-outlined">arrow_right</span>Spinners</a>
                    </li>
                    <li> <a href="component-notifications.html"><span class="material-symbols-outlined">arrow_right</span>Notifications</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><span class="material-symbols-outlined">add_reaction</span>
                    </div>
                    <div class="menu-title">Icons</div>
                  </a>
                  <ul>
                    <li> <a href="icons-line-icons.html"><span class="material-symbols-outlined">arrow_right</span>Line Icons</a>
                    </li>
                    <li> <a href="icons-boxicons.html"><span class="material-symbols-outlined">arrow_right</span>Boxicons</a>
                    </li>
                    <li> <a href="icons-feather-icons.html"><span class="material-symbols-outlined">arrow_right</span>Feather Icons</a>
                    </li>
                  </ul>
                </li>
                <li class="menu-label">Forms & Tables</li>
                <li>
                  <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><span class="material-symbols-outlined">diamond</span>
                    </div>
                    <div class="menu-title">Forms</div>
                  </a>
                  <ul>
                    <li> <a href="form-elements.html"><span class="material-symbols-outlined">arrow_right</span>Form Elements</a>
                    </li>
                    <li> <a href="form-input-group.html"><span class="material-symbols-outlined">arrow_right</span>Input Groups</a>
                    </li>
                    <li> <a href="form-radios-and-checkboxes.html"><span class="material-symbols-outlined">arrow_right</span>Radios & Checkboxes</a>
                    </li>
                    <li> <a href="form-layouts.html"><span class="material-symbols-outlined">arrow_right</span>Forms Layouts</a>
                    </li>
                    <li> <a href="form-validations.html"><span class="material-symbols-outlined">arrow_right</span>Form Validation</a>
                    </li>
                    <li> <a href="form-wizard.html"><span class="material-symbols-outlined">arrow_right</span>Form Wizard</a>
                    </li>
                    <li> <a href="form-file-upload.html"><span class="material-symbols-outlined">arrow_right</span>File Upload</a>
                    </li>
                    <li> <a href="form-date-time-pickes.html"><span class="material-symbols-outlined">arrow_right</span>Date Pickers</a>
                    </li>
                    <li> <a href="form-select2.html"><span class="material-symbols-outlined">arrow_right</span>Select2</a>
                    </li>
                    <li> <a href="form-repeater.html"><span class="material-symbols-outlined">arrow_right</span>Form Repeater</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><span class="material-symbols-outlined">backup_table</span>
                    </div>
                    <div class="menu-title">Tables</div>
                  </a>
                  <ul>
                    <li> <a href="table-basic-table.html"><span class="material-symbols-outlined">arrow_right</span>Basic Table</a>
                    </li>
                    <li> <a href="table-datatable.html"><span class="material-symbols-outlined">arrow_right</span>Data Table</a>
                    </li>
                  </ul>
                </li>
                <li class="menu-label">Pages</li>
                <li>
                  <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><span class="material-symbols-outlined">lock_open</span>
                    </div>
                    <div class="menu-title">Authentication</div>
                  </a>
                  <ul>
                    <li><a class="has-arrow" href="javascript:;"><span class="material-symbols-outlined">arrow_right</span>Basic</a>
                      <ul>
                        <li><a href="auth-basic-login.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Login</a></li>
                        <li><a href="auth-basic-register.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Register</a></li>
                        <li><a href="auth-basic-forgot-password.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Forgot Password</a></li>
                        <li><a href="auth-basic-reset-password.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Reset Password</a></li>
                      </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:;"><span class="material-symbols-outlined">arrow_right</span>Cover</a>
                      <ul>
                        <li><a href="auth-cover-login.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Login</a></li>
                        <li><a href="auth-cover-reset-password.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Register</a></li>
                        <li><a href="auth-cover-forgot-password.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Forgot Password</a></li>
                        <li><a href="auth-cover-reset-password.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Reset Password</a></li>
                      </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:;"><span class="material-symbols-outlined">arrow_right</span>Boxed</a>
                      <ul>
                        <li><a href="auth-boxed-login.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Login</a></li>
                        <li><a href="auth-boxed-register.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Register</a></li>
                        <li><a href="auth-boxed-forgot-password.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Forgot Password</a></li>
                        <li><a href="auth-boxed-reset-password.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Reset Password</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="user-profile.html">
                    <div class="parent-icon"><span class="material-symbols-outlined">account_circle</span>
                    </div>
                    <div class="menu-title">User Profile</div>
                  </a>
                </li>
                <li>
                  <a href="timeline.html">
                    <div class="parent-icon"><span class="material-symbols-outlined">hotel_class</span>
                    </div>
                    <div class="menu-title">Timeline</div>
                  </a>
                </li>
                <li>
                  <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><span class="material-symbols-outlined">warning</span>
                    </div>
                    <div class="menu-title">Errors</div>
                  </a>
                  <ul>
                    <li> <a href="pages-error-403.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>403 Error</a>
                    </li>
                    <li> <a href="pages-error-404.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>404 Error</a>
                    </li>
                    <li> <a href="pages-error-500.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>500 Error</a>
                    </li>
                    <li> <a href="pages-coming-soon.html" target="_blank"><span class="material-symbols-outlined">arrow_right</span>Coming Soon</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="faq.html">
                    <div class="parent-icon"><span class="material-symbols-outlined">call</span>
                    </div>
                    <div class="menu-title">FAQ</div>
                  </a>
                </li>
                <li>
                  <a href="pricing-table.html">
                    <div class="parent-icon"><span class="material-symbols-outlined">currency_bitcoin</span>
                    </div>
                    <div class="menu-title">Pricing</div>
                  </a>
                </li>
                <li class="menu-label">Charts & Maps</li>
                <li>
                  <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><span class="material-symbols-outlined">monitoring</span>
                    </div>
                    <div class="menu-title">Charts</div>
                  </a>
                  <ul>
                    <li> <a href="charts-apex.html"><span class="material-symbols-outlined">arrow_right</span>Apex</a>
                    </li>
                    <li> <a href="charts-chartjs.html"><span class="material-symbols-outlined">arrow_right</span>Chartjs</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><span class="material-symbols-outlined">distance</span>
                    </div>
                    <div class="menu-title">Maps</div>
                  </a>
                  <ul>
                    <li> <a href="map-google-maps.html"><span class="material-symbols-outlined">arrow_right</span>Google Maps</a>
                    </li>
                    <li> <a href="map-vector-maps.html"><span class="material-symbols-outlined">arrow_right</span>Vector Maps</a>
                    </li>
                  </ul>
                </li>
                <li class="menu-label">Others</li>
                <li>
                  <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><span class="material-symbols-outlined">toc</span>
                    </div>
                    <div class="menu-title">Menu Levels</div>
                  </a>
                  <ul>
                    <li> <a class="has-arrow" href="javascript:;"><span class="material-symbols-outlined">arrow_right</span>Level One</a>
                      <ul>
                        <li> <a class="has-arrow" href="javascript:;"><span class="material-symbols-outlined">arrow_right</span>Level Two</a>
                          <ul>
                            <li> <a href="javascript:;"><span class="material-symbols-outlined">arrow_right</span>Level Three</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="javascript:;">
                    <div class="parent-icon"><span class="material-symbols-outlined">receipt_long</span>
                    </div>
                    <div class="menu-title">Documentation</div>
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    <div class="parent-icon"><span class="material-symbols-outlined">shop</span>
                    </div>
                    <div class="menu-title">Support</div>
                  </a>
                </li>
              </ul>
              <!--end navigation-->
           

          </div>
          <div class="sidebar-bottom dropdown dropup-center dropup">
              <div class="dropdown-toggle d-flex align-items-center px-3 gap-3 w-100 h-100" data-bs-toggle="dropdown">
                <div class="user-img">
                   <img src="assets/images/avatars/01.png" alt="">
                </div>
                <div class="user-info">
                  <h5 class="mb-0 user-name">Jhon Maxwell</h5>
                  <p class="mb-0 user-designation">UI Engineer</p>
                </div>
              </div>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
                  account_circle
                  </span><span>Profile</span></a>
                </li>
                <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
                  tune
                  </span><span>Settings</span></a>
                </li>
                <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
                  dashboard
                  </span><span>Dashboard</span></a>
                </li>
                <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
                  account_balance
                  </span><span>Earnings</span></a>
                </li>
                <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
                  cloud_download
                  </span><span>Downloads</span></a>
                </li>
                <li>
                  <div class="dropdown-divider mb-0"></div>
                </li>
                <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
                  logout
                  </span><span>Logout</span></a>
                </li>
              </ul>
          </div>
     </aside>
     <!--end sidebar-->


    <!--start main content-->
     <main class="page-content">
        <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
				
					<div class="ms-auto">
						<div class="btn-group">
            <a href="products.php" class="btn btn-primary">Back to Products</a>
						
						</div>
					</div>
				</div>
				<!--end breadcrumb-->


       


        <div class="row">
          <div class="col-lg-12">
          <form action="" method="post" class="d-flex justify-content-center flex-column align-items-center" enctype="multipart/form-data">
            <div class="card">
              <div class="card-body p-4">
                <h5 class="mb-4">Update  Form</h5>
               
                <?php 
    while($row = mysqli_fetch_array($result)){

    
    ?>
                <input type="hidden" class="form-control" name="hidden" value='<?php echo $row['id'];?>'>
                
                <div class="row mb-3">
                  <label for="input35" class="col-sm-3 col-form-label">Title</label>
                  <div class="col-sm-9">
                    <input type="text" name="title" class="form-control" id="input35" placeholder="Enter Title" value='<?php echo $row['title'];?>'>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="input36" class="col-sm-3 col-form-label">Price</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="input36" placeholder=" Enter Price " name="price" value='<?php echo $row['price'];?>'>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="input37" class="col-sm-3 col-form-label">Description</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="input37" placeholder="Description of product" name="description" value='<?php echo $row['description'];?>'>
                  </div>
                  <div class="row mb-3">
                    <label for="input37" class="col-sm-3 col-form-label">Select Images</label>
                    <input  type="file" name="files1" accept=".jpg, .png, image/jpeg, image/png" >
                    <input type="file" name="files2" accept=".jpg, .png, image/jpeg, image/png" >
                    <input type="file" name="files3" accept=".jpg, .png, image/jpeg, image/png" >
                    <input  type="file" name="files4" accept=".jpg, .png, image/jpeg, image/png" >
                    <input  type="file" name="files5" accept=".jpg, .png, image/jpeg, image/png" >
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="AddCategory" class="form-label fw-bold">Category</label>
                  <select class="form-select" id="AddCategory"  name='category' aria-label="Default select example" required>
                                <option disabled >Select Category</option>
                                <?php 
                                $category = "SELECT * FROM `category`";
                                $categoryResult = mysqli_query($conn,$category);

                                while($crow = mysqli_fetch_array($categoryResult)){

                                  if($row['category'] == $crow['cid']){
                                    $select = 'selected';
                                }else{
                                    $select = '';
                
                                }
                                ?>
                                <option <?php echo $select;?>  value='<?php echo $crow['cid'];?>'><?php echo $crow['cname'];?></option>
                               <?php  }?>
                              </select>
                </div>
                <div class="row mb-3">
                  <label for="input39" class="col-sm-3 col-form-label">Weight</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="input37" placeholder="Product's weight" name="weight" value='<?php echo $row['weight'];?>'>
                  </div>
               
                <div class="row mb-3">
                  <label for="input39" class="col-sm-3 col-form-label">Material</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="input37" placeholder="Material" name="material" value='<?php echo $row['material'];?>'>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="input40" class="col-sm-3 col-form-label">Dimension</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="input37" placeholder="Dimension" name="dimension" value='<?php echo $row['dimension'];?>'>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label"></label>
                  <div class="col-sm-9">
                    
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
              </div>
            </div>
          </div>
       
        <?php }?>

          
    </form>
    </div> 

     </main>
     <!--end main content-->
 

    <!--end theme customization-->

   <!--plugins-->
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
   <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
   <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>

    <!--BS Scripts-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>