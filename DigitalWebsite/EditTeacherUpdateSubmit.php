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

 if ($error) {
    echo '<button onclick="history.go(-1)">Go Back</button>';
 }
 
 else {
    
// Update the teachers table
$query = "UPDATE teachers SET teacherTitle = '$teacherTitle', teacherName = '$teacherName', teacherSurname = '$teacherSurname', 
teacherDOB = '$teacherDOB', teacherEmail = '$teacherEmail', teacherPhone = '$teacherPhone', teacherAddress = '$teacherAddress' 
WHERE teacherID = '$teacherID'";
if (mysqli_query($conn, $query)) {
   // Successful update
   echo "Teachers table has been updated successfully!<br>";
   echo '<a href="EditTeacherHTML.php"><button>Go Back</button></a>';
} else {
   echo "Error updating teachers: " . mysqli_error($connection);
}
}


// Close connection
$conn->close();
?>