<?php
// Database connection parameters
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "school";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

 // Query to retrieve teacherIDs from the teachers table
 $teacherQuery = "SELECT teacherID FROM teachers";
 $teacherResult = mysqli_query($conn, $teacherQuery);
 // Query to retrieve assistantIDs from the teacherassistants table
 $assistantQuery = "SELECT assistantID FROM teacherassistants";
 $assistantResult = mysqli_query($conn, $assistantQuery);
?>
<option value=""disabled selected>Select an option</option>
<?php
 // Loop through the teacherIDs and populate the dropdown options
 while ($row = mysqli_fetch_assoc($teacherResult)) {
   echo "<option value='" . $row['teacherID'] . "'>" . $row['teacherID'] . "</option>";
 }
 // Loop through the assistantIDs and populate the dropdown options
 while ($row = mysqli_fetch_assoc($assistantResult)) {
   echo "<option value='" . $row['assistantID'] . "'>" . $row['assistantID'] . "</option>";
 }
 // Close the database connection
 mysqli_close($conn);
?>