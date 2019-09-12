<?php
    session_start();

    // initializing variables
    $username = "";
    $email    = "";
    $errors = array();
    $checksum_username = 10;
    $checksum_email = 100; 

    // connect to the database
    $db = mysqli_connect('localhost', 'root', 'root', 'elearning');

    $sql = "SELECT * from users WHERE username = '".$_SESSION['username']."'";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();

    $id = $row['id'];

    $username = mysqli_real_escape_string($db, strtoupper($_POST['username']));
    $email = mysqli_real_escape_string($db, strtoupper($_POST['email']));
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) { 
        $username = $row['username'];
        $checksum_username = 20;
    }
    if (empty($email)) { 
        $email = $row['email'];
        $checksum_email = 200;
    }
    if (!empty($password))
    {
        if (strlen($password) < 5) {
            array_push($errors, "Password is too short");
        
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Password is too short')
                    window.location.href='profile-update.php';
                    </SCRIPT>");
        }
        
        $password = md5($password);
    }
    if (empty($password)) { 
        $password = $row['password'];
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
        
        if($checksum_username === 10)
        {
            if ($user['username'] === $username) {
                array_push($errors, "Username already exists");

                echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('Username already exists.')
                        window.location.href='profile-update.php';
                        </SCRIPT>");
            }
        }

        if($checksum_email === 100)
        {
            if ($user['email'] === $email) {
                array_push($errors, "email already exists");
    
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('Email already exists.');
                        window.location.href='profile-update.php';
                        </SCRIPT>");
            }
        }
            
    }
    
    if(count($errors) == 0)
    {
        $sql = "UPDATE users SET username = '$username', email = '$email', password = '$password' WHERE id = '$id'";

        if(mysqli_query($db, $sql)){ 
            
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Record was updated successfully.')
                window.location.href='login.php';
                </SCRIPT>"); 
        } else { 
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Record Not updated.')
                window.location.href='profile-update.php';
                </SCRIPT>");  
        }
    }
    
  
?>