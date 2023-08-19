<?php 
include 'header.php';

if(isset($_POST['signup'])){
 
  $Username = $_POST['Username'];
 $Email_Address=$_POST['Email_Address'];
  $Password = $_POST['Password'];
  
  $City = $_POST['City'];
    $query="SELECT * FROM `signup_web` Where `Username`='$Username' ";
    $res = mysqli_query($conn, $query);
   

  
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
    .signup{
        background-image: linear-gradient(seagreen,lightgreen,seagreen);

    }
    </style>
<body>




    <section class="h-100 ">
        <div class="container py-5 ">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
             <form action="" method="post" enctype="multipart/form-data">

                <div class="card card-registration my-4">
                    <div class="row g-0">
                      <div class="col-xl-6 d-none d-xl-block">
                        <img src="./assets/images/signup/signup.JPG"
                          alt="Sample photo" class="img-fluid"
                          style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                      </div>
                      <div class="col-xl-6  signup">
                        <div class="card-body p-md-5 text-black">
                          <h3 class="mb-5 text-uppercase">Sign Up</h3>
          
                          <div class="form-outline mb-4">
                          <label class="form-label" for="form3Example97">Username</label>
                            <input type="text" id="form3Example97" class="form-control form-control-lg" name="Username"  placeholder="Enter your email address" required/>
                 
                          </div>
          
                          <div class="form-outline mb-4">
                          <label class="form-label" for="form3Example97">Email Address</label>
                            <input type="email" id="form3Example97" class="form-control form-control-lg" name="Email_Address"  placeholder="Enter your email address" required/>
              
                          </div>
                          <div class="form-outline mb-4">
                          <label class="form-label" for="form3Example97" >Password</label>
                            <input type="password" id="form3Example97" class="form-control form-control-lg" name="Password" placeholder="Enter your password" required/>
                          
                          </div>
                          <div class="form-outline mb-4">
                          <label class="form-label" for="form3Example97">City</label>
                            <input type="text" id="form3Example97" class="form-control form-control-lg" name="City" placeholder="Enter your city"/>
                           
                          </div>
          
          
                          <div class="d-flex justify-content-end pt-3">
                           
          
                          <input type="submit" value="SignUp" name="signup" class='btn btn-success my-3 text-dark'>
                          </div>
          <div>
        <p>Already Have An Account <a href="signin.php" class="text-light">SignIn</a></p>    
        </div>
                        </div> 
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
