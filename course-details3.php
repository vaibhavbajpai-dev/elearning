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
						<a href="homepage.php" style="text-decoration: none; color: white; font-family: Arial, Helvetica, sans-serif; font-size: 30px">eclassroom</a>
					  </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="homepage.php">Home</a></li>
			          
			          <li><a href="courses.php">Courses</a></li> 
					  <li><a href="login.php">Login</a></li> 
					  <li><a href="register.php">SignUp</a></li> 
					          
			          
			          
			            
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->
			  
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Popular Courses		
							</h1>	
							<p class="text-white link-nav"><a href="homepage.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="courses.php"> Popular Courses</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
<!-- Start course-details Area -->
<section class="course-details-area pt-120">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 left-contents">
							<div class="main-image">
								<img class="img-fluid" src="img/m-img.jpg" alt="">
							</div>
							<div class="jq-tab-wrapper" id="horizontalTab">
	                            <div class="jq-tab-menu">
	                                <div class="jq-tab-title active" data-tab="1">Objectives</div>
	                                
	                                
	                                
	                                <div class="jq-tab-title" data-tab="5">Reviews</div>
	                            </div>
	                            <div class="jq-tab-content-wrapper">
	                                <div class="jq-tab-content active" data-tab="1">
									With the popularity of smartphones and tablets, photography has become one of the easiest ways to document daily life. 
									In this lesson plan, students will explore their surroundings and take pictures that show examples of the elements of art and principles of design using PPHM archive photos as an introduction. <br>
									<br>The elements of art are the building blocks used by artists to create a work of art. Line - The most fundamental of the art elements.
									 A moving point in space Can be real—a yellow line on a road—or implied— geese flying in a “V”Objects in your photo such as a rectangular door, a round tree, or square tiles add “shape” to an image.		
										</div>
	                               
	                                
	                                <div class="jq-tab-content" data-tab="5">	
	                                	
						                <div class="comments-area mb-30">
						                    <div class="comment-list">
						                        
						                    </div>  

											
											<?php
												$servername = "localhost";
												$username = "root";
												$password = "root";
												$dbname = "elearning";

												// Create connection
												$conn = new mysqli($servername, $username, $password, $dbname);
												// Check connection
												if ($conn->connect_error) {
													die("Connection failed: " . $conn->connect_error);
												} 

												$sql = "SELECT user_id, comment FROM feedback where course_id='3'";
												$result = $conn->query($sql);

												if ($result->num_rows > 0) {
													// output data of each row
													
													while($row = $result->fetch_assoc()) {
														
														$sql1 = "SELECT username FROM users where id = '".$row['user_id']."'";
														$result1 = $conn->query($sql1);
														$row1 = $result1->fetch_assoc();

														echo '<div style="margin-left:40px;margin-right:350px;font-weight: bold;font-size: 20px;color: black;">' . $row1["username"] . '</div>' .  '<div style="margin-left:40px;margin-right:350px;font-size: 20px;color: black;">' . $row["comment"] . "<br><br><br>" . '</div>';
													}
												
												} else {
													echo '<div style="margin-left: 40px;margin-bottom:100px;font-weight: bold;font-size: 20px;color: black;">No Comments!</div>';
												}

												$conn->close();
											?>  						                                                                      
						                </div>	                                	
	                                </div>                                
	                            </div>
	                        </div>
						</div>
						<div class="col-lg-4 right-contents">
							<ul>
								<li>
									<a class="justify-content-between d-flex">
										<p>Trainer’s Name</p> 
										<span class="or">Tek Syndicate</span>
									</a>
								</li>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Course Title </p>
										<span>Learn Photography</span>
									</a>
								</li>
								
							</ul>
							
							<!--<a href="personal-development-lesson.php" class="primary-btn text-uppercase" method="POST" action="enroll.php">Enroll the course</a>
							-->
							<form method="post" action="enroll.php">
							<div class="input-group">
								<input type="hidden" name="id" value="3" />
								<button type="submit" class="primary-btn text-uppercase" name="enroll">Enroll the Course</button>
							</div>
							
							</form>
						</div>
					</div>
				</div>	
			</section>
			<!-- End course-details Area -->
			

			<!-- Start popular-courses Area --> 
			<section class="popular-courses-area section-gap courses-page">
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
					<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<a href="course-details1.php"><img class="img-fluid" src="img/p1.jpg" alt=""></a>
								</div>
																	
							</div>
							<div class="details">
								<a href="course-details1.php">
									<h4>
										Personal Development
									</h4>
								</a>
								<p>
									Personal development covers activities that improve awareness and identity and contribute to the realization of dreams and aspirations.										
								</p>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<a href="course-details2.php"><img class="img-fluid" src="img/p2.jpg" alt=""></a>
								</div>
																	
							</div>
							<div class="details">
								<a href="course-details2.php">
									<h4>
										Learn Web Development
									</h4>
								</a>
								<p>
									Web development is the work involved in developing a web site for the Internet or an intranet.										
								</p>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<a href="course-details3.php"><img class="img-fluid" src="img/p3.jpg" alt=""></a>
								</div>
																	
							</div>
							<div class="details">
								<a href="course-details3.php">
									<h4>
										Learn Photography
									</h4>
								</a>
								<p>
									Photography is the art, application and practice of creating durable images
								</p>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<a href="course-details4.php"><img class="img-fluid" src="img/p4.jpg" alt=""></a>
								</div>
																	
							</div>
							<div class="details">
								<a href="course-details4.php">
									<h4>
										Learn Trading
									</h4>
								</a>
								<p>
									Learn Trading and understand the various transactions that take place in the stock market										
								</p>
							</div>
						</div>							
						<a href="courses.php" class="primary-btn text-uppercase mx-auto">Load More Courses</a>													
					</div>
				</div>	
			</section>
			<!-- End popular-courses Area -->					
					

			

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