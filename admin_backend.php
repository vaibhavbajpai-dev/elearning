<?php
    
    session_start();

    // connect to the database
    $db = mysqli_connect('localhost', 'root', 'root', 'elearning');   
      
    $table = "";  

    $table = $_POST['table'];

    echo '<head><meta name="viewport" content="width=device-width, initial-scale=1"></head>';
    echo '<style>
    
    
    table {
        border-collapse: collapse;
        width: 100%;
        color: #d96459;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
        margin: 100px 50px 0px 50px;                
    }

    table tr th {
        page-break-inside: avoid;
    }

    th {
        background-color: #d96459;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    </style>';

    if($table == "users"){ 
        
        echo '<div style="margin-right:100px">';
        echo '<table >
                <tr>
                    <th >User ID</th>
                    <th >User Name</th>
                    <th >Email</th>
                    <th >Password</th>
                </tr>';        
                    

                    $sql = "CALL `getUsers`();";
                    $result = mysqli_query($db, $sql);

                    if($result -> num_rows > 0){
                        while($row = $result -> fetch_assoc()){
                            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["username"] . "</td><td>" . $row["email"] . "</td><td>" . $row["password"] . "</td></tr>";
                        }
                        echo "</table>";
                    }
                    else{
                        echo "<h1 style='text-align:center;margin-top:100px;'>No Data</h1>";
                    }              

        echo   '</table>';
        echo '</div>';
    }

    elseif($table == "course"){ 
        echo '<div style="margin-right:100px">';
        echo '<table >
                <tr>
                    <th>Course ID</th>
                    <th>Course Name</th>
                    <th>Instructor</th>
                    <th>Course Link</th>
                </tr>';        
                    

                    $sql = "CALL `getCourse`();";
                    $result = mysqli_query($db, $sql);

                    if($result -> num_rows > 0){
                        while($row = $result -> fetch_assoc()){
                            echo "<tr><td>" . $row["course_id"] . "</td><td>" . $row["course_name"] . "</td><td>" . $row["instructor_name"] . "</td><td>" . $row["course_link"] . "</td></tr>";
                        }
                        echo "</table>";
                    }
                    else{
                        echo "<h1 style='text-align:center;margin-top:100px;'>No Data</h1>";
                    }               

        echo   '</table>';
        echo '</div>';
    }

    elseif($table == "enrollment"){ 
        echo '<div style="margin-right:100px">';
        echo '<table >
                <tr>
                    <th>Enrollment ID</th>
                    <th>Course Name</th>
                    <th>Username</th>
                </tr>';        
                    

                    $sql = "CALL `getEnrollment`();";  
                    $result = mysqli_query($db, $sql);

                    if($result -> num_rows > 0){
                        while($row = $result -> fetch_assoc()){                            
                    
                            echo "<tr><td>" . $row["ce_id"] . "</td><td>" . $row["course_name"] . "</td><td>" . $row["username"] . "</td></tr>";
                        }
                        echo "</table>";
                    }
                    else{
                        echo "<h1 style='text-align:center;margin-top:100px;'>No Data</h1>";
                    }               

        echo   '</table>';
        echo '</div>';
    }

    elseif($table == "feedback"){ 
        echo '<div style="margin-right:100px">';
        echo '<table >
                <tr>
                    <th>Feedback ID</th>
                    <th>Course Name</th>
                    <th>User Name</th>
                    <th>Comment</th>
                </tr>';        
                    

                    $sql = "CALL `getFeedback`();"; 
                    $result = mysqli_query($db, $sql);

                    if($result -> num_rows > 0){
                        while($row = $result -> fetch_assoc()){
                    
                            echo "<tr><td>" . $row["feedback_id"] . "</td><td>" . $row["course_name"] . "</td><td>" . $row["username"] . "</td><td>" . $row["comment"] . "</td></tr>";
                        }
                        echo "</table>";
                    }
                    else{
                        echo "<h1 style='text-align:center;margin-top:100px;'>No Data</h1>";
                    }               

        echo   '</table>';
        echo '</div>';        
    }

    elseif($table == "quiz"){ 
        echo '<div style="margin-right:100px">';
        echo '<table >
                <tr>
                    <th>Quiz ID</th>
                    <th>Course Name</th>
                    <th>Username</th>
                    <th>Scores</th>
                    <th>Quiz date</th>
                </tr>';        
                    

                    $sql = "CALL `getQuiz`();"; 
                    $result = mysqli_query($db, $sql);

                    if($result -> num_rows > 0){
                        while($row = $result -> fetch_assoc()){
                           
                                               
                            echo "<tr><td>" . $row["q_id"] . "</td><td>" . $row["course_name"] . "</td><td>" . $row["username"] . "</td><td>" . $row["scores"] . "</td><td>" . $row["quizdate"] . "</td></tr>";
                        }
                        echo "</table>";
                    }
                    else{
                        echo "<h1 style='text-align:center;margin-top:100px;'>No Data</h1>";
                    }               

        echo   '</table>';
        echo '</div>';        
    }

    elseif($table == "admin"){ 
        echo '<div style="margin-right:100px">';
        echo '<table >
                <tr>
                    <th>Admin ID</th>
                    <th>Admin Name</th>
                    <th>Admin Email</th>
                    <th>Admin Password</th>
                </tr>';        
                    

                    $sql = "CALL `getAdmin`();"; 
                    $result = mysqli_query($db, $sql);

                    if($result -> num_rows > 0){
                        while($row = $result -> fetch_assoc()){
                            echo "<tr><td>" . $row["admin_id"] . "</td><td>" . $row["admin_name"] . "</td><td>" . $row["admin_email"] . "</td><td>" . $row["admin_password"] . "</td></tr>";
                        }
                        echo "</table>";
                    }
                    else{
                        echo "<h1 style='text-align:center;margin-top:100px;'>No Data</h1>";
                    }               

        echo   '</table>';
        echo '</div>';         
    }

    elseif($table == "user_logs"){ 
        echo '<div style="margin-right:100px">';
        echo '<table >
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>Action</th>
                    <th>Date</th>
                </tr>';        
                    

                    $sql = "CALL `getUser_logs`();"; 
                    $result = mysqli_query($db, $sql);

                    if($result -> num_rows > 0){
                        while($row = $result -> fetch_assoc()){
                            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["user_id"] . "</td><td>" . $row["action"] . "</td><td>" . $row["date"] . "</td></tr>";
                        }
                        echo "</table>";
                    }
                    else{
                        echo "<h1 style='text-align:center;margin-top:100px;'>No Data</h1>";
                    }               

        echo   '</table>';
        echo '</div>';         
    }

    echo '<br><a style="text-decoration:none; color: black;font-size: 30px;" href="admin-page.php">Go Back <===</a>';

?>