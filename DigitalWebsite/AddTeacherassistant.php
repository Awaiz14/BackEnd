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
$assistantID = $_POST['assistantID'];
$assistantTitle = $_POST['assistantTitle'];
$assistantName = $_POST['assistantName'];
$assistantSurname = $_POST['assistantSurname'];
$assistantDOB = $_POST['assistantDOB'];
$assistantEmail = $_POST['assistantEmail'];
$assistantPhone = $_POST['assistantPhone'];
$assistantAddress = $_POST['assistantAddress'];
$teacherID = $_POST['teacherID'];

//error variable
$error = false;

// Validate name
if (!preg_match("/^[A-Za-z]+$/", $assistantName)) {
    echo "Error: First name should only contain letters.<br>";
    $error = true;
 }
 // Validate surname
 if (!preg_match("/^[A-Za-z]+$/", $assistantSurname)) {
    echo "Error: Last name should only contain letters.<br>";
    $error = true;
 }

 if ($error) {
    echo '<button onclick="history.go(-1)">Go Back</button>';
 }
 
 else{
    // Insert data into the "pupils" table
    $sql = "INSERT INTO teacherassistants (assistantID, assistantTitle, assistantName, assistantSurname, assistantDOB, assistantEmail, assistantPhone, assistantAddress, teacherID) 
    VALUES ('$assistantID', '$assistantTitle', '$assistantName', '$assistantSurname', '$assistantDOB', '$assistantEmail', '$assistantPhone', '$assistantAddress', '$teacherID')";
 
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully<br>";
        echo '<a href="AddTeacherassistant.html"><button>Go Back</button></a>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
 
// Close connection
$conn->close();
?>