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
$parentID = $_POST['parentID'];
$parentName = $_POST['parentName'];
$parentSurname = $_POST['parentSurname'];
$parentEmail = $_POST['parentEmail'];
$parentPhone = $_POST['parentPhone'];
$parentAddress = $_POST['parentAddress'];

//error variable
$error = false;

// Validate name
if (!preg_match("/^[A-Za-z]+$/", $parentName)) {
    echo "Error: First name should only contain letters.<br>";
    $error = true;
 }
 // Validate surname
 if (!preg_match("/^[A-Za-z]+$/", $parentSurname)) {
    echo "Error: Last name should only contain letters.<br>";
    $error = true;
 }

 if ($error) {
    echo '<button onclick="history.go(-1)">Go Back</button>';
 }
 
 else {
    // Insert the data into the "pupils" table
    $sql = "INSERT INTO parents (parentID, parentName, parentSurname, parentEmail, parentPhone, parentAddress ) 
    VALUES ('$parentID', '$parentName', '$parentSurname', '$parentEmail', '$parentPhone', '$parentAddress')";
 
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully<br>";
        echo '<a href="AddParent.html"><button>Go Back</button></a>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
 
 
// Close connection
$conn->close();
?>