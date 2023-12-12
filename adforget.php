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
                    <h5 class="card-title text-center pb-0 fs-4">Update Your Password</h5>
                    <span></span>
                  </div>

                  <form class="row g-3"  action="" method="post">
                  <div class="col-12">
                      <label for="yourPassword" class="form-label">Odd Password</label></label>
                      <input type="text" name="old" class="form-control"  required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label"> New Password</label>
                      <input type="password" name="new" class="form-control"  required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Confirm Password</label>
                      <input type="password" name="renew" class="form-control"  required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                
                    
                    <div class="col-12">
                      <button class="btn btn w-100 mt-2" type="submit" name="submit" style="background-color: #DAA520; color:#fff;">Update</button>
                    </div>
              
                  </form>

                </div>
              </div>

            

            </div>
          </div>
        </div>

      </section>

    </div>
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



<?php  
include "connection.php";
	  if     (isset( $_POST['old'])){
		    $changepass = $_POST['old'];
			$npass = $_POST['new'];
			$confirmp = $_POST['renew'];
	         
	  $usid = 'admin';
	  
	 $sql = "SELECT * from user_login where username = '".$usid."'" ;
		  $sql2 = mysqli_query($connection,$sql);
	  
		       while ($row = mysqli_fetch_array($sql2))
		          {
			           $d_pass = $row['password'];
			         if($changepass != $d_pass)
			            {  
        				   echo'<center style="color:red;">Incorrect Password</center>
						   ' ;
							
		            	}
						else if (strlen($npass) < 6)
						{
						echo '<center style="color:red;">Password must have 8 or more characters</center>';
						}
						elseif($npass != $confirmp)
						{
						
        				   echo '<center style="color:red;">Password does not match</center>';
							
						}
		        	 else
            			{
			                $insert = mysqli_query($connection,"UPDATE user_login SET password= '$npass' where  username ='$usid'") or die ('Could not connect: ' .mysqli_error($connection)); 
	
                       
                        
                         echo "<script>alert('Password Changed Successfully!')</script>";
							 	
			            }
		          }
		  
			
			 
	  }
	  
	  
	  ?>
