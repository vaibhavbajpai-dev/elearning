<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>eclassroom</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">			
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
		  <header id="header" id="home">
	  		
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
					<div id="logo">
						<a href="index.php" style="text-decoration: none; color: white; font-family: Arial, Helvetica, sans-serif; font-size: 30px">eclassroom</a>
					  </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="index.php">Home</a></li>
			          
			          <li><a href="profile-courses.php">Courses</a></li>
                           
			          <li class="menu-has-children"><a href=""><strong><?php echo $_SESSION['username']; ?></strong></a>
			            <ul>
  							<li style="float:right"> <a href="profile.php" style="font-size:15px;"> Profile </li>
                            <li style="float:right"> <a href="index.php?logout='1'" style="color:red;font-size:15px;font-weight:bold;">LOGOUT</a> </li>
			            </ul>
			          </li>
			          
			            
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">
								We Ensure better education
								for a better world			
							</h1>
							<p class="pt-10 pb-10">
								“Online learning is not the next big thing, it is the now big thing.” – Donna J. Abernathy
							</p>
							
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			
			<!-- Start popular-course Area -->
			<section class="popular-course-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Popular Courses we offer</h1>
								<p>There is a moment in the life of any aspiring.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="active-popular-carusel">
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<a href="profile-course-details1.php"><img class="img-fluid" src="img/p1.jpg" alt=""></a>
									</div>
																		
								</div>
								<div class="details">
									<a href="profile-course-details1.php">
										<h4>
											Personal Development
										</h4>
									</a>
									<p>
										Personal development covers activities that improve awareness and identity and contribute to the realization of dreams and aspirations.										
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<a href="profile-course-details2.php"><img class="img-fluid" src="img/p2.jpg" alt=""></a>
									</div>
																		
								</div>
								<div class="details">
									<a href="profile-course-details2.php">
										<h4>
											Learn Web Development
										</h4>
									</a>
									<p>
										Web development is the work involved in developing a web site for the Internet or an intranet.										
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<a href="profile-course-details3.php"><img class="img-fluid" src="img/p3.jpg" alt=""></a>
									</div>
																		
								</div>
								<div class="details">
									<a href="profile-course-details3.php">
										<h4>
											Learn Photography
										</h4>
									</a>
									<p>
										Photography is the art, application and practice of creating durable images
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<a href="profile-course-details4.php"><img class="img-fluid" src="img/p4.jpg" alt=""></a>
									</div>
																		
								</div>
								<div class="details">
									<a href="profile-course-details4.php">
										<h4>
											Learn Trading
										</h4>
									</a>
									<p>
										Learn Trading and understand the various transactions that take place in the stock market										
									</p>
								</div>
							</div>
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<a href="profile-course-details1.php"><img class="img-fluid" src="img/p1.jpg" alt=""></a>
									</div>
																		
								</div>
								<div class="details">
									<a href="profile-course-details1.php">
										<h4>
											Personal Development
										</h4>
									</a>
									<p>
										Personal development covers activities that improve awareness and identity and contribute to the realization of dreams and aspirations.										
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<a href="profile-course-details2.php"><img class="img-fluid" src="img/p2.jpg" alt=""></a>
									</div>
																		
								</div>
								<div class="details">
									<a href="profile-course-details2.php">
										<h4>
											Learn Web Development
										</h4>
									</a>
									<p>
										Web development is the work involved in developing a web site for the Internet or an intranet.										
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<a href="profile-course-details3.php"><img class="img-fluid" src="img/p3.jpg" alt=""></a>
									</div>
																		
								</div>
								<div class="details">
									<a href="profile-course-details3.php">
										<h4>
											Learn Photography
										</h4>
									</a>
									<p>
										Photography is the art, application and practice of creating durable images
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<a href="profile-course-details4.php"><img class="img-fluid" src="img/p4.jpg" alt=""></a>
									</div>
																		
								</div>
								<div class="details">
									<a href="profile-course-details4.php">
										<h4>
											Learn Trading
										</h4>
									</a>
									<p>
										Learn Trading and understand the various transactions that take place in the stock market										
									</p>
								</div>
							</div>							
						</div>
					</div>
				</div>	
			</section>
			<!-- End popular-course Area -->
			

			
			
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>