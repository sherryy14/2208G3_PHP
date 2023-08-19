<?php 
include 'header.php';


if(isset( $_POST['signin'])){
$Username= $_POST['Username'];
$Password=$_POST['Password'];
$query="SELECT * FROM `signup_web`  where `Username`='{$Username}' AND `Password`='{$Password}'";
$result=mysqli_query($conn,$query);
if($result){
      
  echo"
  <script>
 window.location.href='index.php'
</script>";
   }

}

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from freshcart.codescandy.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:09:24 GMT -->
<head>

  <title>FreshCart - eCommerce HTML Template</title>
  <link href="assets/libs/slick-carousel/slick/slick.css" rel="stylesheet" />
<link href="assets/libs/slick-carousel/slick/slick-theme.css" rel="stylesheet" />
<link href="assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta content="Codescandy" name="author">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-M8S4MT3EYG');
</script>

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico">


<!-- Libs CSS -->
<link href="assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet">
<link href="assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">


<!-- Theme CSS -->
<link rel="stylesheet" href="assets/css/theme.min.css">


</head>
<style>
    .container1{
        background-image: linear-gradient(lightblue,purple,lightblue);
    }
</style>
<body>




    <section class="h-100  ">
        <div class="container py-5 w-50">
          <div class="row d-flex justify-content-center align-items-center ">
            <div class="col ">
             <form action="" method="post" enctype="multipart/form-data" >

                <div class="card card-registration my-4 container1">
                <div class="card-body p-md-5 text-black">
                          <h3 class="mb-5 text-uppercase">Sign In</h3>
          
          
                          <div class="form-outline mb-4">
                          <label class="form-label" for="form3Example97">Username</label>
                            <input type="text" id="form3Example97" class="form-control form-control-lg" name="Username"  placeholder="Enter your username" required/>
              
                          </div>
                          <div class="form-outline mb-4">
                          <label class="form-label" for="form3Example97" >Password</label>
                            <input type="password" id="form3Example97" class="form-control form-control-lg" name="Password" placeholder="Enter your password" required/>
                          
                          </div>
                         
          
          
                          <div class="d-flex justify-content-end pt-3">
                           
          
                            <input type="submit" value="SignIn" name="signin" class='btn btn-success my-3'>
                          </div>
          <div>
          <p>New Customer <a href="signup.php">SignUp</a></p>
          </div>
                        </div>
             </form>




              </div>
            </div>
          </div>
        </div>
      </section>

     <!-- Javascript-->

  <!-- Libs JS -->
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="assets/js/theme.min.js"></script>
  <script src="assets/libs/jquery-countdown/dist/jquery.countdown.min.js"></script>
  <script src="assets/js/vendors/countdown.js"></script>
  <script src="assets/libs/slick-carousel/slick/slick.min.js"></script>
  <script src="assets/js/vendors/slick-slider.js"></script>
  <script src="assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
  <script src="assets/js/vendors/tns-slider.js"></script>
  <script src="assets/js/vendors/zoom.js"></script>
<script src="assets/js/vendors/increment-value.js"></script>



</body>


<!-- Mirrored from freshcart.codescandy.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:10:03 GMT -->
</html>
