<?php 
  session_start(); 

  if (!isset($_SESSION['admin_name'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: admin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['admin_name']);
  	header("location: admin.php");
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <style>
            body {
                font-family: "Lato", sans-serif;
            }

            .sidenav {
                height: 100%;
                width: 160px;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #111;
                overflow-x: hidden;
                padding-top: 20px;
            }

            .sidenav a,button {
                padding: 6px 8px 6px 16px;
                text-decoration: none;
                font-size: 25px;
                color: #818181;
                display: block;
            }

            .sidenav a:hover {
                color: #f1f1f1;
            }

            .main {
                margin-left: 160px; /* Same as the width of the sidenav */
                font-size: 28px; /* Increased text to enable scrolling */
                padding: 0px 10px;
            }

            @media screen and (max-height: 450px) {
                .sidenav {padding-top: 15px;}
                .sidenav a {font-size: 18px;}
            }

            table {
                border-collapse: collapse;
                width: 100%;
                color: #d96459;
                font-family: monospace;
                font-size: 25px;
                text-align: left;
            }

            th {
                background-color: #d96459;
                color: white;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>

        <div class="sidenav">
            <a name="table-det" value="ud" href="#ud">User Details</a>
            <a href="#courses">Courses</a>
            <a href="#enrolled">Course Enrollment</a>
            <a href="#feedback">Feedbacks</a>
            <a href="#quiz">Quizzes</a>
            <form method="post" action="admin.php">
                <div class="feedback">
                    <button type="submit" class="primary-btn text-uppercase" name="table_det" style="margin: 10px 0px 0px 200px">submit</button>
                </div>				
            </form>
        </div>

        

        <div class="main">
            <table id="ud">
                <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
                <?php

                    echo 'style="display:none;"'; 
                    $conn = mysqli_connect("localhost", "root", "root", "elearning");
                    if($conn -> connect_error){
                        die("connection failed:". $conn -> connect_error);
                    }

                    $sql = "SELECT id, username, email, password FROM users";
                    $result = $conn -> query($sql);

                    if($result -> num_rows > 0){
                        while($row = $result -> fetch_assoc()){
                            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["username"] . "</td><td>" . $row["email"] . "</td><td>" . $row["password"] . "</td></tr>";
                        }
                        echo "</table>";
                    }
                    else{
                        echo "No Results";
                    }

                    $conn -> close();
                ?>

            </table>

            <table id="courses">
                <tr>
                    <th>Course ID</th>
                    <th>Course Name</th>
                    <th>Instructor</th>
                    <th>Course Link</th>
                </tr>
                <?php
                    echo 'style="display:none;"'; 
                    $conn = mysqli_connect("localhost", "root", "root", "elearning");
                    if($conn -> connect_error){
                        die("connection failed:". $conn -> connect_error);
                    }

                    $sql = "SELECT course_id, course_name, instructor_name, course_link FROM course";
                    $result = $conn -> query($sql);

                    if($result -> num_rows > 0){
                        while($row = $result -> fetch_assoc()){
                            echo "<tr><td>" . $row["course_id"] . "</td><td>" . $row["course_name"] . "</td><td>" . $row["instructor_name"] . "</td><td>" . $row["course_link"] . "</td></tr>";
                        }
                        echo "</table>";
                    }
                    else{
                        echo "No Results";
                    }

                    $conn -> close();
                ?>
            </table>

            <table id="enrolled">
                <tr>
                    <th>Enrollment ID</th>
                    <th>Course Name</th>
                    <th>Username</th>
                    
                </tr>
                <?php

                    echo 'style="display:none;"'; 
                    $conn = mysqli_connect("localhost", "root", "root", "elearning");
                    if($conn -> connect_error){
                        die("connection failed:". $conn -> connect_error);
                    }

                    $sql = "SELECT ce_id, course_id, user_id FROM enrollment";
                    $result = $conn -> query($sql);

                    if($result -> num_rows > 0){
                        while($row = $result -> fetch_assoc()){

                            $sql1 = "SELECT username FROM users where id = '".$row['user_id']."'";
                            $result1 = $conn->query($sql1);
                            $row1 = $result1->fetch_assoc();

                            $sql2 = "SELECT course_name FROM course where course_id = '".$row['course_id']."'";
                            $result2 = $conn->query($sql2);
                            $row2 = $result2->fetch_assoc();


                    
                            echo "<tr><td>" . $row["ce_id"] . "</td><td>" . $row2["course_name"] . "</td><td>" . $row1["username"] . "</td></tr>";
                        }
                        echo "</table>";
                    }
                    else{
                        echo "No Results";
                    }

                    $conn -> close();
                ?>
            </table>

            <table id="feedback">
                <tr>
                    <th>Feedback ID</th>
                    <th>Course Name</th>
                    <th>User Name</th>
                    <th>Comment</th>
                </tr>
                <?php

                    echo 'style="display:none;"'; 
                    $conn = mysqli_connect("localhost", "root", "root", "elearning");
                    if($conn -> connect_error){
                        die("connection failed:". $conn -> connect_error);
                    }

                    $sql = "SELECT feedback_id, course_id, user_id, comment FROM feedback";
                    $result = $conn -> query($sql);

                    if($result -> num_rows > 0){
                        while($row = $result -> fetch_assoc()){
                            
                            $sql1 = "SELECT username FROM users where id = '".$row['user_id']."'";
                            $result1 = $conn->query($sql1);
                            $row1 = $result1->fetch_assoc();

                            $sql2 = "SELECT course_name FROM course where course_id = '".$row['course_id']."'";
                            $result2 = $conn->query($sql2);
                            $row2 = $result2->fetch_assoc();
                    
                            echo "<tr><td>" . $row["feedback_id"] . "</td><td>" . $row2["course_name"] . "</td><td>" . $row1["username"] . "</td><td>" . $row["comment"] . "</td></tr>";
                        }
                        echo "</table>";
                    }
                    else{
                        echo "No Results";
                    }

                    $conn -> close();
                ?>
            </table>

            <table id="quiz">
                <tr>
                    <th>Quiz ID</th>
                    <th>Course Name</th>
                    <th>Username</th>
                    <th>Scores</th>
                    <th>Quiz date</th>
                </tr>
                <?php

                    //echo '<style> .ud,.courses,.enrolled,.feedback {display:none;"} </style>';
                    //echo '<style> .main {display:none;} </style>';
                    //echo '<style> .quiz {display:block;} </style>';  
                    
                    $conn = mysqli_connect("localhost", "root", "root", "elearning");
                    if($conn -> connect_error){
                        die("connection failed:". $conn -> connect_error);
                    }

                    $sql = "SELECT q_id, course_id, user_id, scores, quizdate FROM quiz";
                    $result = $conn -> query($sql);

                    if($result -> num_rows > 0){
                        while($row = $result -> fetch_assoc()){
                           
                            $sql1 = "SELECT username FROM users where id = '".$row['user_id']."'";
                            $result1 = $conn->query($sql1);
                            $row1 = $result1->fetch_assoc();

                            $sql2 = "SELECT course_name FROM course where course_id = '".$row['course_id']."'";
                            $result2 = $conn->query($sql2);
                            $row2 = $result2->fetch_assoc();


                    
                            echo "<tr><td>" . $row["q_id"] . "</td><td>" . $row2["course_name"] . "</td><td>" . $row1["username"] . "</td><td>" . $row["scores"] . "</td><td>" . $row["quizdate"] . "</td></tr>";
                        }
                        echo "</table>";
                    }
                    else{
                        echo "No Results";
                    }

                    $conn -> close();
                ?>
            </table>

        </div>


        
        
    </body>
</html>




































<!--<div class="main">
        <h2>Sidebar</h2>
        <p>This sidebar is of full height (100%) and always shown.</p>
        <p>Scroll down the page to see the result.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        
        <p id="123">Here I am,,,,,,,Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        
        </div>-->
