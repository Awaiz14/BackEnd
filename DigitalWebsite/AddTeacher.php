<?php
// Database connection parameters
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "school";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Get form data
$teacherID = $_POST['teacherID'];
$teacherTitle = $_POST['teacherTitle'];
$teacherName = $_POST['teacherName'];
$teacherSurname = $_POST['teacherSurname'];
$teacherDOB = $_POST['teacherDOB'];
$teacherEmail = $_POST['teacherEmail'];
$teacherPhone = $_POST['teacherPhone'];
$teacherAddress = $_POST['teacherAddress'];
$annualSalary = $_POST['annualSalary'];

//error variable
$error = false;

// Validate name
if (!preg_match("/^[A-Za-z]+$/", $teacherName)) {
    echo "Error: First name should only contain letters.<br>";
    $error = true;
 }
 // Validate surname
 if (!preg_match("/^[A-Za-z]+$/", $teacherSurname)) {
    echo "Error: Last name should only contain letters.<br>";
    $error = true;
 }
 // Validate annual salary
 if (!preg_match("/^£\d+$/", $annualSalary)) {
    echo "Error: Annual salary should start with £ and be followed by digits.<br>";
    $error = true;
 }

 if ($error) {
    echo '<button onclick="history.go(-1)">Go Back</button>';
 }
 
 else{
    // Insert data into the "pupils" table
    $sql = "INSERT INTO teachers (teacherID, teacherTitle, teacherName, teacherSurname, teacherDOB, teacherEmail, teacherPhone, teacherAddress, annualSalary) 
    VALUES ('$teacherID', '$teacherTitle', '$teacherName', '$teacherSurname', '$teacherDOB', '$teacherEmail', '$teacherPhone', '$teacherAddress', '$annualSalary')";
 
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully<br>";
        echo '<a href="AddTeacher.html"><button>Go Back</button></a>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
 
// Close connection
$conn->close();
?>


