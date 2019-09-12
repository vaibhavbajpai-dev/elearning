<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'elearning');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, strtoupper($_POST['username']));
  $email = mysqli_real_escape_string($db, strtoupper($_POST['email']));
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { 
    array_push($errors, "Username is required");
    echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Username field cannot be empty')
            window.location.href='register.php';
            </SCRIPT>"); 
  }
  if (empty($email)) { 
    array_push($errors, "Email is required"); 

    echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Email field cannot be empty')
            window.location.href='register.php';
            </SCRIPT>");
  }
  if (empty($password_1)) { 
    array_push($errors, "Password is required"); 
  
    echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Password field cannot be empty.')
            window.location.href='register.php';
            </SCRIPT>");
  }
  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");

    echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Password is not matching')
            window.location.href='register.php';
            </SCRIPT>");
  }
  if (strlen($password_1) < 5) {
    array_push($errors, "Password is too short");

    echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Password is too short')
            window.location.href='register.php';
            </SCRIPT>");
  }
  if (strlen($password_2) < 5) {
    array_push($errors, "Password is too short");

    echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Password is too short')
            window.location.href='register.php';
            </SCRIPT>");
  }

    

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  
  //For successful SELECT, SHOW, DESCRIBE, or EXPLAIN queries it will return a mysqli_result object. 
  //For other successful queries it will return TRUE. FALSE on failure
  $result = mysqli_query($db, $user_check_query);

  //returns associative array of strings representing the fetched row.
  //null if there is are no more rows
  $user = mysqli_fetch_assoc($result);
   
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");

      echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Username already exists.')
            window.location.href='register.php';
            </SCRIPT>");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");

      echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Email already exists.');
            window.location.href='register.php';
            </SCRIPT>");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	//$_SESSION['username'] = $username;//Commenting because wants to logout after registering
    /*$_SESSION['success'] ="Successfully Registered You are now logged in";*/
    
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Successfully Registered.\\nPlease Login');
            window.location.href='login.php';
            </SCRIPT>");
    
    //header('location: login.php');
    
  }
}

// ...

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, strtoupper($_POST['username']));
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          /*$_SESSION['success'] = "You are now logged in";*/
          header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
            
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Username and/or Password incorrect.\\nTry again.')
            window.location.href='login.php';
            </SCRIPT>");
        }
    }

    
  }
  
  // ADMIN LOGIN
  if (isset($_POST['login_admin'])) {
    $admin_name = mysqli_real_escape_string($db, ($_POST['admin_name']));
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($admin_name)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        //$password = md5($password);
        $query = "SELECT * FROM admin WHERE admin_name='$admin_name' AND admin_password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['admin_name'] = $admin_name;
          /*$_SESSION['success'] = "You are now logged in";*/
          header('location: admin-page.php');
        }else {
            array_push($errors, "Wrong username/password combination");
            
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Username and/or Password incorrect.\\nTry again.')
            window.location.href='admin.php';
            </SCRIPT>");
        }
    }

    
  }  
  
?>