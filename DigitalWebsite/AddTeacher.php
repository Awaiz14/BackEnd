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

    // Insert data into the "Teachers" table
    $sql = "INSERT INTO teachers (teacherID, teacherTitle, teacherName, teacherSurname, teacherDOB, teacherEmail, teacherPhone, teacherAddress) 
    VALUES ('$teacherID', '$teacherTitle', '$teacherName', '$teacherSurname', '$teacherDOB', '$teacherEmail', '$teacherPhone', '$teacherAddress')";
 
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully<br>";
        echo '<a href="AddTeacher.html"><button>Go Back</button></a>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

 
// Close connection
$conn->close();
?>


