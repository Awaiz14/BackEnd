<?php
// Database connection parameters
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "school";
 
// Creates the connection using parameters
$conn = new mysqli($servername, $username, $password, $database);
 
// Checks connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Get the form data from html file
$studentID = $_POST['studentID'];
$studentName = $_POST['studentName'];
$studentSurname = $_POST['studentSurname'];
$studentDOB = $_POST['studentDOB'];
$studentEmail = $_POST['studentEmail'];
$studentAddress = $_POST['studentAddress'];
$className = $_POST['className'];
$teacherID = $_POST['teacherID'];
$parent1ID = $_POST['parent1ID'];
$parent2ID = $_POST['parent2ID'];
$medicalInfo = $_POST['medicalInfo'];
 
    // Insert the data into the "pupils" table
    $sql = "INSERT INTO students (studentID, studentName, studentSurname, studentDOB, studentEmail, studentAddress, className, teacherID, parent1ID, parent2ID, medicalInfo) 
    VALUES ('$studentID', '$studentName', '$studentSurname', '$studentDOB', '$studentEmail', '$studentAddress', '$className', '$teacherID', '$parent1ID', '$parent2ID', '$medicalInfo')";
 
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
        echo '<a href="AddStudent.html"><button>Go Back</button></a>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
 
 
// Close connection
$conn->close();
?>