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
   // Retrieve teachers' information from the database
   $query = "SELECT teacherID, teacherName, teacherSurname FROM teachers";
   $result = mysqli_query($conn, $query);
   // Display the retrieved information in the HTML table
   while ($row = mysqli_fetch_assoc($result)) {
       echo "<tr>";
       echo "<td>" . $row['teacherID'] . "</td>";
       echo "<td>" . $row['teacherName'] . "</td>";
       echo "<td>" . $row['teacherSurname'] . "</td>";
       echo "</tr>";
   }
   // Close the database connection
   mysqli_close($conn);
?>