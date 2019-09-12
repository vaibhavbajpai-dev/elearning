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

        .quiz {
            padding: 100px 300px 80px 300px;
        }

        h4 {
            font-size: 27px;
            margin-right: 100px;
            text-align: justify;
        }

        label {
            font-size: 18px;
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
	

		<form method="post" action="quiz.php">
			<div class="quiz">
				
                <input type="hidden" name="test" value="web-development" />
                <input type="hidden" name="cid" value="2" />
                <li style="list-style:none;">

                    <h4>1. What does HTML Stands for...</h4><br>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Hypertext Markup Language </label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Hypertext Markup</label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Hypertext Programming</label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) None of the above</label>
                    </div>
                </li><br><br><br>

                 <li style="list-style:none;">

                    <h4>2. Which HTML attribute is used to define inline styles?</h4><br>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) class </label>
                    </div>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) style </label>
                    </div>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) styles </label>
                    </div>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) font </label>
                    </div>
                </li><br><br><br>

                <li style="list-style:none;">

                    <h4>3. How do you insert a comment in a CSS file?</h4><br>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) // this is a comment // </label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) /* this is a comment */ </label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) ' this is a comment </label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) // this is a comment </label>
                    </div>
                </li><br><br><br>

                <li style="list-style:none;">

                    <h4>4. Which property is used to change the background color?</h4><br>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) color </label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) bgcolor </label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) background-color</label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) text-color </label>
                    </div>
                </li><br><br><br>

                <li style="list-style:none;">

                    <h4>5. How do you make each word in a text start with a capital letter?</h4><br>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) You can't do that with CSS </label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) transform:capitalize </label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) text-transform:capitalize </label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) text-style:captialize </label>
                    </div>
                </li><br><br><br>


				<button type="submit" class="primary-btn text-uppercase" name="enroll" style="margin: 10px 0px 0px 0px">submit</button>
			</div>				
		</form>

		
       
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