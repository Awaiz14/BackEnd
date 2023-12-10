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
  
 // Checks connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }

  // Retrieve form data from TakeAttendance.php
  $studentIDs = $_POST['studentID'];
  $attendanceDates = $_POST['attendanceDate'];
  $attendanceStatuses = $_POST['attendanceStatus'];
  $attendanceNotes = $_POST['attendanceNotes'];
  $studentNames = $_POST['studentName'];
  $studentSurnames = $_POST['studentSurname'];
  $classNames = $_POST['className'];

  // Prepare and execute SQL statements to insert data into the attendance table
  $stmt = $conn->prepare("INSERT INTO attendance (studentID, attendanceDate, studentName, studentSurname, className, attendanceStatus, attendanceNotes) VALUES (?, ?, ?, ?, ?, ?, ?)");

  foreach ($studentIDs as $key => $studentID) { // $key represents the identifier of the current student in the array
      $attendanceDate = $attendanceDates[$key]; // Retrieves all the information in relation to the current student in the loop
      $attendanceStatus = $attendanceStatuses[$key];
      $attendanceNote = $attendanceNotes[$key];
      $studentName = $studentNames[$key];
      $studentSurname = $studentSurnames[$key];
      $className = $classNames[$key];

      // Bind parameters and execute the statement
      $stmt->bind_param("sssssss", $studentID, $attendanceDate, $studentName, $studentSurname, $className, $attendanceStatus, $attendanceNote);
      $stmt->execute();
  }

  // Close the statement and the database connection
  $stmt->close();
  $conn->close();

  // Success message when attendance updated
  echo '<p>Attendance taken successfully!</p>';
  echo '<a href="ViewAttendanceHTML.php"><button>Go Back</button></a>'; //Allows user to go to view attendance 
  exit();

?>
