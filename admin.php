<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Admin Login</title>
    

    <style>

        body {    
    	    background: linear-gradient(to right, #cc33ff 0% , #0033cc 100%)
		}
        
        .container {
           text-align: center;
           background-color: white;
           margin: 40px 450px 0px 450px; 
           border-radius: 20px 20px 20px 20px; 
           height: 80%; 
           padding: 10px;        
        }

        .loginbtn{
            border-radius: 70px 70px 70px 70px;
            height: 50px;
            width: 300px;
            padding: 10px auto;
            margin: 50px 55px 0px 0px;
            background-color: #33cc33;
            font-family: "Arial Black", Gadget, sans-serif;
            font-size: 15px;
            color: white;
            border: none;
            cursor: pointer;
            text-align: center;
            margin-left: 50px;
            outline: none;
        }

        .loginbtn:hover {
            background-color: green;
            outline: none;
        }

        .header {
            text-align: center;
            margin-top: 50px;
            font-size: 25px;
            font-family: "Arial Black", Gadget, sans-serif;
        }

        .txtfield {
            background: transparent;
            border: none;
            outline: none;
            border-bottom: 1px solid #000000;
            font-size: 20px;
            padding: 10px 20px;
            width: 300px;
            font-family: "Comic Sans MS", cursive, sans-serif;
        }
        

        input:focus::-webkit-input-placeholder { color:transparent; }
        input:focus:-moz-placeholder { color:transparent; }
    </style>
</head>
<body>
    
    
    
    <div class="container"> 

        <div class="header">
            <h2>Admin Login</h2>
        </div> <br><br><br><br>  
        
        <form method="post" action="admin.php">
                
                <div class="input-group">
                        <input type="text" name="admin_name"  placeholder="Username" class="txtfield" required>
                </div><br>
                <div class="input-group">
                        <input type="password" name="password"  placeholder="Password" class="txtfield" required>
                </div>
                <div class="input-group">
                        <button type="submit" class="loginbtn" name="login_admin">LOGIN</button>
                </div>
                
        </form>				
    
    </div>
</body>
</html>