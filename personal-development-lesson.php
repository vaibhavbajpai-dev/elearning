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

    <style>
        .desce {
            background-color: #e6ffff;
        }

        .feedback {
            padding: 100px 300px 80px 300px;
        }

		.quiz {
			margin: 0px 300px 80px 300px;
			border-radius: 10px;
			background-color: #99ccff;
			padding: 20px 10px 5px 10px;
			text-align:center;
		}

		.quiz:hover  {
			background-color: dodgerblue;
			color: white;
		}
		



    </style>
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
							  <li style="float:right"> <a href="index.php?logout='1'" style="color: red;">LOGOUT</a> </li>
						  </ul>
						</li>
						
						  
					</nav><!-- #nav-menu-container -->		    		
				  </div>
			  </div>
			</header><!-- #header -->

        <p style="text-align:center;margin-left:auto;margin-right:auto;font-size:40px;padding:30px;"> Personal Development </p>
		<iframe style="align:center;display:block;margin-left:auto;margin-right:auto;padding:0px; "width="800" height="449" src="https://www.youtube.com/embed/786WKDhcU8U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
		

		<form method="post" action="feedback.php">
			<div class="feedback">
				<h3>Your Feedback</h3><br/>
				<textarea name="feedback" class="form-control" cols="10" rows="10"></textarea>
				<input type="hidden" name="id" value="1" />
				<button type="submit" class="primary-btn text-uppercase" name="enroll" style="margin: 10px 0px 0px 0px">submit</button>
			</div>				
		</form>

		
		<div class="quiz">
			<a href="personal-development-quiz.php"><h3>Take a Quiz</h3></a><br/>
		</div>
		

		<h3 style="color:black;margin-left:300px;margin-bottom:20px;">Reviews</h3><br/>
		
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

			$sql = "SELECT user_id, comment FROM feedback where course_id='1'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				
				while($row = $result->fetch_assoc()) {
					
					$sql1 = "SELECT username FROM users where id = '".$row['user_id']."'";
					$result1 = $conn->query($sql1);
					$row1 = $result1->fetch_assoc();

					echo '<div style="margin-left: 350px;margin-right:350px;font-weight: bold;font-size: 20px;color: black;">' . $row1["username"] . '</div>' .  '<div style="margin-left: 350px;margin-right:350px;font-size: 20px;color: black;">' . $row["comment"] . "<br><br><br>" . '</div>';
				}
			
			} else {
				echo '<div style="margin-left: 350px;margin-bottom:100px;font-weight: bold;font-size: 20px;color: black;">No Comments!</div>';
			}

			$conn->close();
		?>
       
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