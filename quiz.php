<?php
    
    session_start();

    // connect to the database
    $db = mysqli_connect('localhost', 'root', 'root', 'elearning');   
    

    $sql = "SELECT id FROM users WHERE username = '".$_SESSION['username']."'";
    $result = mysqli_query($db, $sql);
    $row = $result->fetch_assoc(); 

    $user_id = $row['id'];
    //$username = $row['username'];

    
    $answer1 = "";
    $answer2 = "";
    $answer3 = "";
    $answer4 = "";
    $answer5 = "";
    
    

    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];

    if (empty($answer1) || empty($answer2) || empty($answer3) || empty($answer4) || empty($answer5)) { 
        
        $referer = $_SERVER['HTTP_REFERER'];        
        
        echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Attempt All the question.All the Questions are Compulsory')
                window.location.href='$referer';
                </SCRIPT>");
        
    }

    $test = $_POST['test'];

    $totalCorrect = 0;

    if($test == "personal-development"){ 
        if ($answer1 == "B") { $totalCorrect++; }
        if ($answer2 == "C") { $totalCorrect++; }
        if ($answer3 == "A") { $totalCorrect++; }
        if ($answer4 == "B") { $totalCorrect++; }
        if ($answer5 == "A") { $totalCorrect++; }
    }

    elseif($test == "web-development"){ 
        if ($answer1 == "A") { $totalCorrect++; }
        if ($answer2 == "B") { $totalCorrect++; }
        if ($answer3 == "B") { $totalCorrect++; }
        if ($answer4 == "C") { $totalCorrect++; }
        if ($answer5 == "C") { $totalCorrect++; }        
    }
    
    //echo "<b>Number of Questions: 5</b>";
    //echo "<div rid='results'>$totalCorrect / 5 correct</div>";

    
    $course_id = "";
    
    $course_id = $_POST['cid'];


    //$sql = "SELECT course_name FROM course WHERE course_id = '".$_POST['cid']."'";
    //$result = mysqli_query($db, $sql);
    //$row = $result->fetch_assoc(); 

    //$course_name = $row['course_name'];        

    $date = date('Y-m-d');
    //mysql_query("INSERT INTO quiz (quiz_date) VALUES ('$date')");
    //echo $date;

    $query = "INSERT INTO quiz (course_id, user_id, scores, quizdate) 
            VALUES('$course_id', '$user_id', '$totalCorrect', '$date')";
            
    mysqli_query($db, $query);

    header("location: quiz-result.php");

?>