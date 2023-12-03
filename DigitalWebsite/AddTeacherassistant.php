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

// Check if the teacher ID already exists in the database
$query = "SELECT * FROM teacherassistants WHERE teacherID = '$teacherID'";
$result = mysqli_query($conn, $query);
// If a row is returned, it means the teacher ID is already assigned to a assistant
if (mysqli_num_rows($result) > 0) {
   echo "The teacher already has an existing assistant <br>";
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
        echo "Data inserted into TeacherAssistants table successfully<br>";
        echo '<a href="AddTeacherassistant.html"><button>Go Back</button></a>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
 
// Close connection
$conn->close();
?>