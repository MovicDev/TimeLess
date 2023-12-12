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
<style>
	td a{
		color:black;
		text-decoration: none;
	}
</style>
<body>
	<h1 class="text-center fs-1 my-3">Information Of Client</h1>
	<table class="mt-5 text-center table table-striped">

	<tr></tr>
		<td class="fw-bold">s/n</td>
		<td class="fw-bold">FirstName</td>
		<td class="fw-bold">LastName</td>
		<td class="fw-bold">Tel-Phone</td>
		<td class="fw-bold">Email Address</td>
		<td class="fw-bold">Date</td>
	</tr>

<?php
	
$x=1;
session_start();
$firstName=$_SESSION['name'];
$lastName=$_SESSION['last'];	
$phone=$_SESSION['phone'];
$email=$_SESSION['email'];

	

include "connection.php";

 $sql = "SELECT * FROM info";
			
		   $sql2 = mysqli_query($connection,$sql);
			  
			   while($row = mysqli_fetch_array($sql2))
				    
					{
                        $firstName=$row['firstName'];
                        $lastName=$row['lastName'];	
                        $phone=$row['telPhone'];
                        $email=$row['emailAddress'];
                        $date=$row['date'];
				   
				   echo"
<tr>
<td align='center'>".$x++."</td>
<td align='center'>".$firstName."</td>
<td align='center'>".$lastName."</td>
<td align='center'><a href='tel:$phone'>".$phone."</a></td>
<td align='center'><a href='mailto:$email'>".$email."</a></td>
<td align='center'>".$date."</strong></td>
</tr>
	";
	}
			   
	?>
	<?php 

	?>
    	</table>

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
