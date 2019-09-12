<?php
    
    session_start();

    // connect to the database
    $db = mysqli_connect('localhost', 'root', 'root', 'elearning');   
    

    $sql = "SELECT id FROM users WHERE username = '".$_SESSION['username']."'";
    $result = mysqli_query($db, $sql);
    $row = $result->fetch_assoc();    
    
    $user_id = $row['id'];
    //$username = $row['username'];
    $course_id = $_POST['id'];


    $query = "INSERT INTO enrollment (course_id, user_id) 
            VALUES($course_id, '$user_id')";
            
    mysqli_query($db, $query);

    if($course_id == 1)
    {
        header('location: personal-development-lesson.php');
    }
           

    else if($course_id == 2)
    {
        header('location: web-development-lesson.php');
    }
       

    else if($course_id == 3)
    {
        header('location: photography-lesson.php');
    }
        

    else if($course_id == 4)
    {
        header('location: trading-lesson.php');
    }
        

?>