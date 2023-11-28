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
$staffID = $_POST['staffID'];
$staffRole = $_POST['staffRole'];
$staffLevel = $_POST['staffLevel'];
$annualPay = $_POST['annualPay'];
$payFrequency = $_POST['payFrequency'];

 // Insert the data into the "pupils" table
 $sql = "INSERT INTO salaries (staffID, staffRole, staffLevel, annualPay, payFrequency) 
 VALUES ('$staffID', '$staffRole', '$staffLevel', '$annualPay', '$payFrequency')";

 if ($conn->query($sql) === TRUE) {
     echo "Data inserted successfully<br>";
     echo '<a href="AddSalaryHTML.php"><button>Go Back</button></a>';
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
// Close connection
$conn->close();
?>