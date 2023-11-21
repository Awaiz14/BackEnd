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
$studentName = $_POST['studentName'];
$studentSurname = $_POST['studentSurname'];
 
    // Insert the data into the "pupils" table
    $sql = "INSERT INTO pupils (studentName, studentSurname) VALUES ('$studentName', '$studentSurname')";
 
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
 
 
// Close connection
$conn->close();
?>