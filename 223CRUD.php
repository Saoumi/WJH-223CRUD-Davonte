<?php

$host = "localhost";
$username = "saoumi";
$password = "davoncloud9231303";
$dbname = "students";
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Post student info
echo '<form action="223CRUD.php" method="post"><pre>'; 
echo '<br>STUDENT NAME<br><input type="text"/>';
echo '<br><input type="submit" value="SUBMIT"/>';
echo '</pre></form>';

$studentName = $_POST["studentName"];

if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') ' . $mysqli->connect_error);
}

    $statement = $mysqli->prepare("INSERT INTO student_info (studentName) VALUES(?)");
    $statement->bind_param($studentNAME);
    if($statement->execute())
        {
            echo nl2br("Welcome $studentName");
        }
        else {
            print $mysqli->error;
        }
        
        
// Design the 'basics' of the page
echo "<body style='background-color:gray'>";
echo "<h1>Class Student Roster</h1>";