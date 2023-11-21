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
$className = $_POST['className'];
$teacherID = $_POST['teacherID'];
$classCapacity = $_POST['classCapacity'];
 
    // Insert data into the "pupils" table
    $sql = "INSERT INTO classes (className, teacherID, classCapacity) VALUES ('$className', '$teacherID', '$classCapacity')";
 
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
 
 
// Close connection
$conn->close();
?>