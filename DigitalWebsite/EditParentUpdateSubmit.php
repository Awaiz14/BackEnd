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
$parentID = $_POST['parentID'];
$parentName = $_POST['parentName'];
$parentSurname = $_POST['parentSurname'];
$parentEmail = $_POST['parentEmail'];
$parentPhone = $_POST['parentPhone'];
$parentAddress = $_POST['parentAddress'];
   
// Update the parents table
$query = "UPDATE parents SET parentName = '$parentName', parentSurname = '$parentSurname', 
parentEmail = '$parentEmail', parentPhone = '$parentPhone', parentAddress = '$parentAddress' 
WHERE parentID = '$parentID'";
if (mysqli_query($conn, $query)) {
   // Successful update
   echo "Parents table has been updated successfully!<br>";
   echo '<a href="EditparentHTML.php"><button>Go Back</button></a>';
} else {
   echo "Error updating parents: " . mysqli_error($connection);
}



// Close connection
$conn->close();
?>