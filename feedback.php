<?php
    
    session_start();

    // connect to the database
    $db = mysqli_connect('localhost', 'root', 'root', 'elearning');   
    

    $sql = "SELECT id FROM users WHERE username = '".$_SESSION['username']."'";
    $result = mysqli_query($db, $sql);
    $row = $result->fetch_assoc();    
    
    $user_id = $row['id'];
    //$username = $row['username'];
    $comment = mysqli_real_escape_string($db, $_POST['feedback']);
    $course_id = $_POST['id'];

    $query = "INSERT INTO feedback (course_id, user_id, comment) 
            VALUES($course_id, '$user_id', '$comment')";
            
    mysqli_query($db, $query);

    $referer = $_SERVER['HTTP_REFERER'];
    header("Location: $referer");
    //header('location: personal-development-lesson.php');

?>