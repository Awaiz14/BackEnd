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
  
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // Get form data from EditTeacherUpdate.php
  $teacherID = $_POST['teacherID'];
  $teacherTitle = $_POST['teacherTitle'];
  $teacherName = $_POST['teacherName'];
  $teacherSurname = $_POST['teacherSurname'];
  $teacherDOB = $_POST['teacherDOB'];
  $teacherEmail = $_POST['teacherEmail'];
  $teacherPhone = $_POST['teacherPhone'];
  $teacherAddress = $_POST['teacherAddress'];
    
  // Update the teachers table
  $query = "UPDATE teachers SET teacherTitle = '$teacherTitle', teacherName = '$teacherName', teacherSurname = '$teacherSurname', 
  teacherDOB = '$teacherDOB', teacherEmail = '$teacherEmail', teacherPhone = '$teacherPhone', teacherAddress = '$teacherAddress' 
  WHERE teacherID = '$teacherID'";
  if (mysqli_query($conn, $query)) {
    echo "Teachers table has been updated successfully!<br>"; // Successful update message
    echo '<a href="EditTeacherHTML.php"><button>Go Back</button></a>';
  } else {
    echo "Error updating teachers: " . mysqli_error($connection);
  }

  // Close connection
  $conn->close();

  //END OF MY OWN CODE
?>