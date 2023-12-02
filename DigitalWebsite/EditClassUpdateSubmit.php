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


// Check if the teacher ID already exists in the database
$query = "SELECT * FROM classes WHERE teacherID = '$teacherID' AND className != '$className'";
$result = mysqli_query($conn, $query);
// If a row is returned, it means the teacher ID is already assigned to a class
if (mysqli_num_rows($result) > 0) {
   echo "The teacher is already assigned to another class<br>";
   echo '<button onclick="history.go(-1)">Go Back</button>';
   // You can also redirect the user back to the form or display an error message 
} 

else {
// Update the classes table
$query = "UPDATE classes SET teacherID = '$teacherID', classCapacity = '$classCapacity' WHERE className = '$className'";
if (mysqli_query($conn, $query)) {
   // Successful update
   echo "Classes table has been updated successfully!<br>";
}

// Update the corresponding pay in teachers table
$teacherQuery = "UPDATE students SET teacherID = '$teacherID' WHERE className = '$className'";
if (mysqli_query($conn, $teacherQuery)) {
   echo "Updated in Students!<br>";
   echo '<a href="EditClassHTML.php"><button>Go Back</button></a>';
} else {
   echo "Error updating teachers: " . mysqli_error($connection);
}
}

// Close connection
$conn->close();
?>