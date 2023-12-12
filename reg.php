<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Favicons -->
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

    <!-- main -->
    
  <main id="main" class="main">
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
	  <h1 class="text-center fs-4 mt-2 text-dark">REGISTRATION</h1>
	  	<?php echo $er . $chk ?>
	  <form action="reg.php" method="post">
	  <div class="container">
		     <div class="row">
			  <div class="col-12">
			  <label for="exampleFormControlInput1" class="form-label fs-6">First Name</label>
              <input type="text" class="form-control rounded-0 " id="exampleFormControlInput1" name="name" placeholder="Enter your FirstName**" required>
			  </div>
              <div class="col-12">
			  <label for="exampleFormControlInput1" class="form-label fs-6">Last Name</label>
              <input type="text" class="form-control rounded-0 " id="exampleFormControlInput1" name="last" placeholder="Enter your Last Name**" required>
			  </div>
			  <div class="col-12">
			  <label for="exampleFormControlInput1" class="form-label fs-6">Tel-Phone</label>
              <input type="number" class="form-control rounded-0" id="exampleFormControlInput1" name="phone" placeholder="Enter your Tel_Phone" required>
			  </div>

              <div class="col-12">
			  <label for="exampleFormControlInput1" class="form-label fs-6">Address</label>
              <input type="email" class="form-control rounded-0 " id="exampleFormControlInput1" name="email" placeholder="Enter your mail@gmail.com" required>
            
			  </div>
      </div>
      <button class="btn btn w-100 mt-4" name="submit" type="submit" style="background-color:#DAA520; color:#fff;">Submit</button>
</div>

		  </form>
		  </div>
              </div>

            

            </div>
          </div>
        </div>

      </section>
<?php 
$accpt_err = $er = $err1 = ""; $err1_ = $chk = $err2 = $err_msg = $err3 = $err3_ = $err4 = $err5 = $err6 = $err7 = $err8 = $err9 = $err10 = $err11 = $err12 = $err13 = $err4= $msg ="";
$accpt_err=""; $success = ""; $success1 = "";
if(isset($_POST['submit'])){
	
$firstName=$_POST['name'];
$lastName=$_POST['last'];	
$phone=$_POST['phone'];
$email=$_POST['email'];

	
include "connection.php";

$mail_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
$string_exp = "/^[A-Za-z .'-]+$/";
if (
		
 (!$firstName) || (!preg_match($string_exp, $firstName)) || (!$lastName) || (!preg_match($string_exp,$lastName)) || (!$phone) || (strlen($phone) < 11) || (!$email) ||  (!preg_match($email_exp,$email)))
	           {  
                $er = '<font color="red">Check every empty or invalid fields</font>'; 
		       }
		else{					 
		$extract_user = mysqli_query($connection,"SELECT * FROM info WHERE id='$id'");
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) 
		 
		 {
			$chk = '<font color="red">User already exists,Please try again </font>';

		 }
	
		else         
		                 
					{
						$date = date('Y-m-d h:i:sa');
					 $submit = mysqli_query($connection,"insert into info (firstName, lastName, telPhone, emailAddress, date) values ('$firstName', '$lastName', '$phone','$email','$date')") or die ('Could not connect: ' .mysqli_error($connection));
			
  
  echo "<script>alert('Dear Mr/Mrs $firstName "." $lastName successfully Register to our Website');window.location.assign('reg.php')</script>";

			
		}
		}
}
?>
		

  </main><!-- End #main -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
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