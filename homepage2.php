<!doctype <!DOCTYPE html>
<html>
<head>
    
    <title>eclassroom</title>    
    
    
    <style>
        
        body {    
    	    background: linear-gradient(to right, #cc33ff 0% , #0033cc 100%)
		}
        
        ul {
            padding: 0px;
            margin: 0px;
            text-align: center;
            list-style-type: none;
            font-size: 20px;
            overflow: hidden;
            background-color: black;
            
        }
        
        li {
            float: left;
        }

        li a {
            display: block;
            text-align: center;
            padding: 20px 30px;
            text-decoration: none;
            color: white;
            margin: 0px 10px;
            
        }

        .active {
            background-color: #4CAF50;
            border-radius: 20px 20px 20px 20px;
        }
        
        .quote {
            font-family: Arial, Helvetica, sans-serif;
            margin-left: 100px;
            margin-top: 200px;
        }

        ul li{
            border-radius: 10px;
            background-color: black;
            color: white;
        }

        li a:hover:not(.active) {
            background-color: dodgerblue;
            border-radius: 5px 5px 5px 5px;
        }   
        
    </style>
</head>
<body>
        
      
    
    <ul>
        
        <li><a href="homepage.php">elearning</a></li>
        <li>
           <a href="explore.php">Explore</a>
        </li>
        <li style="float:right"><a class="active"  href="register.php">Sign Up</a></li>
        <li style="float:right"><a href="login.php">Log In</a></li>
        
    </ul>

    <div class="quote">
        <p style="font-size: 40px"> Learn on your schedule </p>
        <p style="font-size: 20px"> Study any topic, anytime. </p>
    </div>


 <script> 
      var myHeading = document.querySelector('h1');
      myHeading.textContent = 'Hello world!';
    </script>      
   
</body>
</html>