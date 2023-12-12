<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>TIMELESS ASSETS-LIMITED</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

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

  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  <style>
    .bod{
		display: flex;
		justify-content: center;
		flex-wrap: wrap;
		min-height: 100px;
				color:black;
				margin-top: 100px;
	     }
       .joy{
			  width: 400px;
			  height: 202px;
			  background: #FFFFFF;
			  margin-top: 30px;
			  margin-left: 30px;
		  }
  </style>
</head>

<body>

  
  

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html" ><img src="logo.png" style=" width:100px; height:80px; border-radius:10px" ></a>
      
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="property-grid.html">Property</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog-grid.html">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
      
    </div>
  </nav>
  <!--/ Nav End /-->


  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">TIMELESS</h1>
            <span class="color-text-a">Our Amazing Posts</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ News Grid Star /-->

  <section class="news-grid grid">
    <div class="container">
      <div class="row">
      <?php	
	include "connection.php";
	 $sql = "SELECT * from property";
			
		   $sql2 = mysqli_query($connection,$sql);
			  
			   while($row = mysqli_fetch_array($sql2))
				    
					{
					
					  
					  
						 $id= $row["id"];   					
					  $dis= $row['discribe'];
					  $price= $row['price'];
            $date=$row['date'];
					  $wee='Uploads/'.$row['image'];
				 
					  
					 
					  
			if($wee="")
			{
			$kay="";}
			
			else
			{
			  					
					  $kay='Uploads/'.$row['image'];
					 
			}
				 
				   echo"
  <div class='col-md-4'>
          <div class='card-box-b card-shadow news-box'>
            <div class='img-box-b'>
            <img src=".$kay." alt='' class='img-b img-fluid' style='height:350px'>
            </div>
            <div class='card-overlay'>
              <div class='card-header-b'>
                <div class='card-category-b'>
                  <a href='#' class='category-b'>Timeless</a>
                </div>
                <div class='card-title-b'>
                  <h2 class='title-2'>
                    <a href='blog-single.html'>$dis</a>
                  </h2>
                </div>
                <div class='card-date'>
                <span class='date-b'>$date</span>
                </div>
              </div>
            </div>
          </div>
        </div>
		";
	}
			
			
	
	?>

        <div class="col-md-4">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/IMG-2 copy.png" alt="" class="img-b img-fluid"  style="height:350px">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Timeless</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">Finalizing a business
                      <br> deal</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Sep. 2017</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/IMG-3c.png" alt="" class="img-b img-fluid" style="height:350px">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="blog-single.html" class="category-b">Timeless</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">survaying a new
                      <br> site</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Sep. 2017</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/hero_bg_1.jpg" alt="" class="img-b img-fluid" style="height:350px">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Timeless</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">Booking for site
                      <br> inspection</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Sep. 2017</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/hero 4.jpg" alt="" class="img-b img-fluid" style="height:350px">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Timeless</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">purchase mouth watering
                      <br> deals</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Sep. 2017</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/hero 5.jpg" alt="" class="img-b img-fluid" style="height:350px">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Timeless</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">Travel is comming
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Sep. 2017</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/hero 6.jpg" alt="" class="img-b img-fluid" style="height:350px">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Timeless</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">Price increase alert
                      <br> on property</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Sep. 2017</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <nav class="pagination-a">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <span class="ion-ios-arrow-back"></span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item next">
                <a class="page-link" href="#">
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ News Grid End /-->
  <!--/ footer Star /-->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">EstateAgency</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                We aim to be the benchmark for excellence in the Real-Estate industry through innovation, Integrity and 
                client's satisfaction.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Email .</span> danihelsolutions@gmail.com</li>
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> +234 803 927 5566</li>
              </ul>
            </div>
          </div>
        </div>
       
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="index.html">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="about.html">About</a>
              </li>
              <li class="list-inline-item">
                <a href="property-grid.html">Property</a>
              </li>
              <li class="list-inline-item">
                <a href="blog-grid.html">Blog</a>
              </li>
              <li class="list-inline-item">
                <a href="contact.html">Contact</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-chrome" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>

            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
            -->
            <a href="https://bootstrapmade.com/"></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

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
