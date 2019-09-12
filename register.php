<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  

	<style>
		body {    
    	    background: linear-gradient(to right, #cc33ff 0% , #0033cc 100%);
		}
        
        
        .txtfield {
            border-radius: 70px 70px 70px 70px;
            height: 25px;
            width: 250px;
            padding: 12px 12px 12px 20px;
            margin: 0px 45px 10px 0px;
            background-color: #ddd;
            border: none;
            font-family: "Comic Sans MS", cursive, sans-serif;
            font-size: 18px;
            cursor: auto;
            outline: none;
            
        }

        input:focus::-webkit-input-placeholder { color:transparent; }
        input:focus:-moz-placeholder { color:transparent; }

        .signupbtn{
            border-radius: 70px 70px 70px 70px;
            height: 50px;
            width: 280px;
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

        .container {
            border-radius: 10px 10px 10px 10px;
            margin: 15px 180px 15px 180px;
            background: white;
            text-align: right;
            padding: 100px 150px 10px 50px;
        }

        .header {
            font-family: "Arial Black", Gadget, sans-serif;
            margin: 10px 130px 40px 0px;
            font-size: 15px;
            opacity: 0.8;
        }

        a {
            text-decoration:none;
        }
            
        .logo {
                float: left;
                margin: 150px 0px 0px 100px;
        }
	</style>
	
</head>
<body>
  
    <div class="container">
  
    <div class="logo">
        <a href="homepage.php"><img src="elearninglogo.jpg"></a>
	</div>
				
	
	<div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	
  	<div >
  	  
  	  <input class="txtfield" placeholder="Username" type="text" name="username"  required>
  	</div>
  	<div >
  	  
  	  <input class="txtfield" placeholder="Email" type="email" name="email" required>
  	</div>
  	<div >
  	  
  	  <input class="txtfield" placeholder="Password" type="password" name="password_1" requried>
  	</div>
  	<div >
  	  
  	  <input class="txtfield" placeholder="Confirm Password" type="password" name="password_2" required>
  	</div>
  	<div >
  	  <button class="signupbtn" type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		<br>Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>

  </div>
</body>
</html>