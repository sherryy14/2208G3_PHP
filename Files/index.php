<?php 

if(isset($_POST['submit'])){

 $image = $_FILES['file'];
 $name = $image['name'];
 $temp = $image['tmp_name'];
 $size = $image['size'];

// echo "<pre>";
// print_r($image);
// echo "</pre>";

if($size <=1000000){

    // temp_name , fileName 
    move_uploaded_file($temp, "image/$name");
    // $success = "File has been uploaded.";
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert" id="success">
    <strong>Successfully uploaded!</strong>Your image has been uploaded
   
  </div>';

}else{
    // $error = "Please choose a file less than 1mb.";
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" id="error">
    <strong>Successfully uploaded!</strong>"Please choose a file less than 1mb
   
  </div>';
}

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Files</title>
</head>
<body>
    <div class="container my-4">
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="formFile" class="form-label">Choose An Image</label>
                <input class="form-control" type="file" id="formFile" name='file'>
            </div>
            <input type="submit" value="Submit" name='submit' class='btn btn-warning'>
        </form>
    </div>

    <h4 class="text-danger"><?php echo @$error;?></h4> 
    <h4 class="text-success"><?php echo @$success;?></h4> 

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        setTimeout(() => {
            document.getElementById('success').style.display = 'none';
         
        }, 2000);
        setTimeout(() => {
            document.getElementById('error').style.display = 'none';
         
        }, 2000);
    </script>
    </body>
</html>