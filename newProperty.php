<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="trade2earn.co" class="logo d-flex align-items-center w-auto">
                
             
                 
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">New Arriver</h5>
                    <span></span>
                  </div>

                  <form class="row g-3"  action="" method="post" enctype="multipart/form-data">
                    <div class="col-12">
                      <label for="" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" required>
                      </div>
                    <div class="col-12">
                      <label for="" class="form-label">Describe</label>
                      <textarea name="dis" id="" cols="10" rows="3" class="form-control"  required></textarea>
                    </div>
                    <div class="col-12">
                      <label for="" class="form-label">Price</label>
                      <input type="number" name="price" class="form-control"  required>
                    </div>
                    

                    <div class="col-12">
                      <button class="btn btn w-100 my-2" type="submit" name="submit" style="background-color: #DAA520; color:#fff;">Post</button></button>
                    </div>

                </form>
                <div class="col-12">
                 <a href="info.php"><button class="btn btn w-25 my-2" type="" style="background-color: #DAA520; color:#fff;">Back</button></a>
                </div>

                </div>
              </div>

            

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  
<?php 
$accpt_err = $er = $err1 = ""; $err1_ = $chk = $err2 = $err_msg = $err3 = $err3_ = $err4 = $err5 = $err6 = $err7 = $err8 = $err9 = $err10 = $err11 = $err12 = $err13 = $err4= $msg ="";
$accpt_err=""; $success = ""; $success1 = "";
if(isset($_POST['submit'])){
$image= basename($_FILES["image"]["name"]);
$price=$_POST['price'];
$dis=$_POST['dis'];


include "connection.php";

$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 $string_exp = "/^[A-Za-z .'-]+$/";
   

if (
		
 (!$image) || (!$price) || (!$dis))
	
	           {  $er = '<font color="red">Check every empty or invalid fields</font>'; 
		
		       }
		else{					 
		$extract_user = mysqli_query($connection,"SELECT * FROM property WHERE id='$id'");
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) 
		 
		 {
			$chk = '<font color="red">Email already exists,Please try again </font>';
		 }
		
		else 
				    
					{
                        $date = date('Y-m-d h:i:sa');
					   $submit = mysqli_query($connection,"insert into property (image, discribe, price, date) values ('$image', '$dis', '$price', '$date')") or die ('Could not connect: ' .mysqli_error($connection));
			 $statusMsg = '';

// File upload path
$targetDir ="Uploads/";
$fileName = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

 if(isset($_POST["submit"]) && !empty($_FILES["image"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
     // Upload file to server
     if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){
     // Insert image file name into database
     $insert = mysqli_query($connection,"INSERT into image (filename,input, uploaded_on) VALUES ('".$file1Name."','$n2', NOW())");
 }}}

  
  
 		echo "<script>alert('New post Updated');window.location.assign('newProperty.php')</script>";

		 }
		 }
		 }
		 session_start(); 





$_SESSION['id'] = $id;
		  ?>

		 
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->

  <script>
$(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>
 

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>	
</body>
</html>

