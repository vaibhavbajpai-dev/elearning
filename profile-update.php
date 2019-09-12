
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
        body {
            background-color: #00537e;
        }

        .box {
            border-radius: 10px 10px 10px 10px;
            margin: 150px 180px 15px 180px;
            background: white;
            text-align: left;
            padding: 50px 150px 10px 50px;
        }

        .txtfield {
            border-radius: 70px 70px 70px 70px;
            height: 50px;
            width: 250px;
            padding: 12px 12px 12px 20px;
            margin: 0px 45px 10px 0px;
            background-color: #ddd;
            border: none;
            font-family: "Comic Sans MS", cursive, sans-serif;
            font-size: 25px;
            cursor: auto;
            outline: none;
            
        }

        input:focus::-webkit-input-placeholder { color:transparent; }
        input:focus:-moz-placeholder { color:transparent; }

        .signupbtn{
            border-radius: 70px 70px 70px 70px;
            height: 50px;
            width: 250px;
            padding: 15px 15px 15px 15px;
            margin: 25px 47px 10px 0px;
            background-color: #33cc33;
            font-family: "Arial Black", Gadget, sans-serif;
            font-size: 15px;
            color: white;
            border: none;
            cursor: pointer;
            outline: none;
        }

        .signupbtn:hover {
            background-color: green;
            outline: none;
        }

        .header {
            font-family: "Arial Black", Gadget, sans-serif;
            margin: 0px 130px 40px 0px;
            font-size: 15px;
            opacity: 0.8;
        }

        a {
            text-decoration:none;
        }
    </style>
    <body>
		
		
	    <header id="header" id="home">
	  		
			  <div class="container main-menu">
				  <div class="row align-items-center justify-content-between d-flex">
					  <div id="logo">
						  <a href="index.php" style="text-decoration: none; color:white; font-family: Arial, Helvetica, sans-serif; font-size: 30px">eclassroom</a>
						</div>
					<nav id="nav-menu-container">
					  <ul class="nav-menu">
						<li><a href="index.php">Home</a></li>
						
						<li><a href="profile-courses.php" >Courses</a></li>
							 
						<li class="menu-has-children"><a href=""><strong><?php echo $_SESSION['username']; ?></strong></a>
						  <ul>
							  <li style="float:right" > <a href="index.php?logout='1'" style="color: red;">LOGOUT</a> </li>
						  </ul>
						</li>
						
						  
					</nav><!-- #nav-menu-container -->		    		
				  </div>
			  </div>
			</header><!-- #header -->
		
		<div class='box'>
		    	
            <div class="header">
                <h2>Update Profile</h2>
            </div>
                
            <form method="post" action="profile_backend.php">
                
                <div >                    
                    <input class="txtfield" placeholder="Username" type="text" name="username">
                </div>

                <div >                    
                    <input class="txtfield" placeholder="Email" type="email" name="email">
                </div>

                <div >                    
                    <input class="txtfield" placeholder="Password" type="password" name="password">
                </div>
                
                <div >
                    <button class="signupbtn" type="submit" class="btn" name="reg_user">Save Changes</button>
                </div>
                
            </form>

            <p style="color: black;">*Fill the fields which you wants to change. Keep other blank.</p>

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
  
    
</body>
</html>