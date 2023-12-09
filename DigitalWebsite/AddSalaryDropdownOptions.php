<?php

  //MY OWN CODE
  //Database connection learnt from following link: 
  //https://www.raghwendra.com/blog/how-to-connect-html-to-database-with-mysql-using-php-example/

  // Database connection parameters
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $database = "school";
  
  // Creates the connection using the parameters
  $conn = new mysqli($servername, $username, $password, $database);

  // Query to retrieve teacherIDs from the teachers table
  $teacherQuery = "SELECT teacherID FROM teachers";
  $teacherResult = mysqli_query($conn, $teacherQuery);
  // Query to retrieve assistantIDs from the teacherassistants table
  $assistantQuery = "SELECT assistantID FROM teacherassistants";
  $assistantResult = mysqli_query($conn, $assistantQuery);
?>

<!-- HTML CODE for dropdown options -->
<option value=""disabled selected>Select an option</option> 

<?php
  // Loops through the teacherIDs and populates the dropdown options
  while ($row = mysqli_fetch_assoc($teacherResult)) {
    echo "<option value='" . $row['teacherID'] . "'>" . $row['teacherID'] . "</option>";
  }
  // Loops through the assistantIDs and populates the dropdown options
  while ($row = mysqli_fetch_assoc($assistantResult)) {
    echo "<option value='" . $row['assistantID'] . "'>" . $row['assistantID'] . "</option>";
  }

  // Close the database connection
  mysqli_close($conn);

  //END OF MY OWN CODE
?>