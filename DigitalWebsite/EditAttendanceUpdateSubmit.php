<?php

  //MY OWN CODE
  //Database connection learnt from following link: 
  //https://www.raghwendra.com/blog/how-to-connect-html-to-database-with-mysql-using-php-example/

  // Database connection parameters
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "school";

    // Create the connection using the parameters
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

  // Retrieve form data from EditAttendanceUpdate.php
  $studentIDs = $_POST['studentID'];
  $attendanceDates = $_POST['attendanceDate'];
  $attendanceStatuses = $_POST['attendanceStatus'];
  $attendanceNotes = $_POST['attendanceNotes'];

  // Prepare and execute SQL statements to update data in the attendance table
  $stmt = $conn->prepare("UPDATE attendance SET attendanceStatus = ?, attendanceNotes = ? WHERE studentID = ? AND attendanceDate = ?");

  foreach ($studentIDs as $key => $studentID) {
      $attendanceDate = $attendanceDates[$key];
      $attendanceStatus = $attendanceStatuses[$key]; // Access attendanceStatus directly by key
      $attendanceNote = $attendanceNotes[$key]; // Access attendanceNotes directly by key

      // Bind parameters and then execute the statement
      $stmt->bind_param("ssss", $attendanceStatus, $attendanceNote, $studentID, $attendanceDate);
      $stmt->execute();
  }

  // Close the statement
  $stmt->close();

  // Close the database connection
  $conn->close();

  // Success message when attendance updated
  echo '<p>Updated Attendance table successfully!</p>';
  echo '<a href="ViewAttendanceHTML.php"><button>Go Back</button></a>'; //Allows user to go to view attendance 
  exit();

  //END OF MY OWN CODE

?>