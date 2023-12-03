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
   
// Update the students table
$query = "UPDATE students SET studentName = '$studentName', studentSurname = '$studentSurname', 
studentDOB = '$studentDOB', studentEmail = '$studentEmail', studentAddress = '$studentAddress', 
className = '$className', teacherID = '$teacherID', parent1ID = '$parent1ID',
parent2ID = '$parent2ID', medicalInfo = '$medicalInfo'
WHERE studentID = '$studentID'";
if (mysqli_query($conn, $query)) {
   // Successful update
   echo "Students table has been updated successfully!<br>";
   echo '<a href="EditStudentHTML.php"><button>Go Back</button></a>';
} else {
   echo "Error updating students: " . mysqli_error($connection);
}



// Close connection
$conn->close();
?>