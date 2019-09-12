<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Log In</title>

	<style>
		body {    
    	    background: linear-gradient(to right, #cc33ff 0% , #0033cc 100%);
		}
        
        .txtfield {
            border-radius: 70px 70px 70px 70px;
            height: 25px;
            width: 200px;
            padding: 15px 15px 15px 30px;
            margin: 0px 60px 10px 0px;
            background-color: #ddd;
            border: none;
            font-family: "Comic Sans MS", cursive, sans-serif;
            font-size: 18px;
            cursor: auto;
            outline: none;
        }

        input:focus::-webkit-input-placeholder { color:transparent; }
        input:focus:-moz-placeholder { color:transparent; }

        .loginbtn{
            border-radius: 70px 70px 70px 70px;
            height: 50px;
            width: 250px;
            padding: 15px 15px 15px 15px;
            margin: 25px 55px 10px 0px;
            background-color: #33cc33;
            font-family: "Arial Black", Gadget, sans-serif;
            font-size: 15px;
            color: white;
            border: none;
            cursor: pointer;
            outline: none;
        }

        .loginbtn:hover {
            background-color: green;
            outline: none;
        }

        .container {
            border-radius: 10px 10px 10px 10px;
            margin: 15px 180px 10px 180px;
            background: white;
            text-align: right;
            padding: 100px 150px 10px 50px;
        }

        .header {
            font-family: "Arial Black", Gadget, sans-serif;
            margin: 50px 90px 50px 0px;
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
					<h2>Member Login</h2>
			</div>
			
			<form method="post" action="login.php">
					
					<div class="input-group">
							<input type="text" name="username"  placeholder="Username" class="txtfield" required>
					</div>
					<div class="input-group">
							<input type="password" name="password"  placeholder="Password" class="txtfield" required>
					</div>
					<div class="input-group">
							<button type="submit" class="loginbtn" name="login_user">LOGIN</button>
					</div>
					<p>
							<br><br><br><br>Not a member yet? <a href="register.php">Join us Today</a><br>
                            <a style="color:red;" href="admin.php">Admin Login</a>

					</p>
			</form>

				
    
    </div>
    
    
</body>
</html>