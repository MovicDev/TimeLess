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
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                    <span></span>
                  </div>

                  <form class="row g-3"  action="" method="post">
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">UserName</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="name" class="form-control" required>
                        <div class="invalid-feedback">Please enter your Email.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control"  required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember_me" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn w-100" type="submit" name="submit" style="background-color: #DAA520; color:#fff;">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0"> <a href="adforget.php">Forget Password?</a></p>
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
	  if (isset($_POST['submit'])){
		  $username = $_POST['name'];
	     $password = $_POST['password'];
					
	 
	  if ($email == "" || $password == "")
	     {
		    
		 }
	  else 
	    {
		  $sql = "SELECT * FROM user_login WHERE password = '".$password."' && username = '".$username."'";
		  $sql2 = mysqli_query($connection,$sql);
		  
		    if (mysqli_affected_rows($connection) == 0)
			  {
			  
	        echo "<script>alert('pls not a valid user')</script>";
				
			  } 
			 else 
			  {
			     while($row = mysqli_fetch_array($sql2))
				    
					{
					  $id= $row['id'];  					
					  $username = $row['username'];
					  $password = $row['password'];
	
					 
				   
					 }		
                echo "<script>alert('Admin succefully login');window.location.assign('info.php')</script>";

			 
		}
					
			 }
				 
	  }
			  
		
	  ?>

