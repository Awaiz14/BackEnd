<?php

  //MY OWN CODE
  //Database connection learnt from following link: 
  //https://www.raghwendra.com/blog/how-to-connect-html-to-database-with-mysql-using-php-example/

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

  // Retrieve teachers information from the database
  $query = "SELECT teacherDOB FROM teachers";
  $result = mysqli_query($conn, $query);

  // Initialize arrays to store age ranges
  $ageRanges = array(
    'Below 30' => 0,
    '30 - 40' => 0,
    '41 - 50' => 0,
    '51 - 60' => 0,
    'Above 60' => 0
  );

  // Calculate age ranges based on the teacherDOB
  while ($row = mysqli_fetch_assoc($result)) {
      $dob = new DateTime($row['teacherDOB']);
      $age = $dob->diff(new DateTime())->y; // Calculate age from DOB

      // Categorise all the teachers into age ranges
      if ($age < 30) {
          $ageRanges['Below 30']++;
      } elseif ($age >= 30 && $age <= 40) {
          $ageRanges['30 - 40']++;
      } elseif ($age >= 41 && $age <= 50) {
          $ageRanges['41 - 50']++;
      } elseif ($age >= 51 && $age <= 60) {
          $ageRanges['51 - 60']++;
      } else {
          $ageRanges['Above 60']++;
      }
  }

  // Close the database connection
  mysqli_close($conn);

  //END OF MY OWN CODE
?>
