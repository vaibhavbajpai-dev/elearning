<?php
    session_start();

    // initializing variables
    $username = "";
    $email    = "";
    $errors = array();

    // connect to the database
    $db = mysqli_connect('localhost', 'root', 'root', 'elearning');

    $sql = "SELECT id FROM users WHERE username = '".$_SESSION['username']."'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($result);
    $id = $row["id"];

    $sql2 = "DELETE FROM users WHERE id = '$id'";
    

    if(mysqli_query($db, $sql2)){ 
        
        $sql3 = "DELETE FROM enrollment WHERE user_id = '$id'";
        mysqli_query($db, $sql3);
        $sql4 = "DELETE FROM feedback WHERE user_id = '$id'";
        mysqli_query($db, $sql4);
        $sql5 = "DELETE FROM quiz WHERE user_id = '$id'";
        mysqli_query($db, $sql5);
        
        echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Account Deleted Successfully.')
            window.location.href='homepage.php';
            </SCRIPT>"); 
    } else { 
        echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Account cannot be deleted now.')
            window.location.href='profile.php';
            </SCRIPT>");  
    }

    
  
?>