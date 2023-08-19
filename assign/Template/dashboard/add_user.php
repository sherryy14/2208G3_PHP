<?php 
include 'header.php';
if(isset($_POST['add'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query="SELECT * FRom `login` Where `username`='$username' ";
    $res = mysqli_query($conn, $query);
   
  if(mysqli_num_rows($res)>0){
    $error= "user already exist";
  }else{
    $insert = "INSERT INTO `login` ( `username`, `password`) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $insert);
  }

  
  }
?>

<main class="page-content">
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
				<!--end breadcrumb-->
         
         <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card">
                  <form method="post" >
                   <div class="card-body">
                     <div class="mb-4">
                        <h5 class="mb-3">Email</h5>
                        <input type="text" class="form-control" name="username" placeholder="Enter your email">
                     </div>
                    
                     <div class="mb-4">
                      <h5 class="mb-3">Password</h5>
                      <input type="password" class="form-control" name="password" placeholder="Enter your password">   
                                     </div>
                                     <h2><?php echo @$error?></h2>

                    <input type="submit" value="Submit" name="add" class='btn btn-primary my-3'>
                    </form>
                </div>                
            
           </div><!--end row-->
		 
     </main>
     <!--end main content-->




    