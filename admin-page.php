<?php 
  session_start(); 

  if (!isset($_SESSION['admin_name'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: admin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['admin_name']);
  	header("location: admin.php");
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

            

            <style>

                body {
                    background-color: black;
                }

            </style>
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
			          
                           
			          <li class="menu-has-children"><a href=""><strong><?php echo $_SESSION['admin_name']; ?></strong></a>
			            <ul>
  							<li style="float:right"> <a href="index.php?logout='1'" style="color:red;font-size:15px;font-weight:bold;">LOGOUT</a> </li>
			            </ul>
			          </li>
			          
			            
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->

          <div style="margin: 150px 300px 0px 500px;">
            <strong style="color:white;font-size:40px;">See Table Data</strong><br><br>
                <form method="post" action="admin_backend.php">
                    <strong style="color:white;">Select Table:</strong><select  style="width:200px;height:40px;"name="table">
                        <option value="users">Users</option>
                        <option value="course">Course</option>
                        <option value="enrollment">Enrollment</option>
                        <option value="feedback">Feedback</option>
                        <option value="quiz">Quiz</option>
                        <option value="admin">Admin</option>
                        <option value="user_logs">User_logs</option>
                    </select>

                    <input style="margin:20px 0px 0px 0px;" type='submit' name='submit'/>
                </form>
                
                <br><br><br><br>

          </div>

			
			

			
			
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