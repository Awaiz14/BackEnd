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

  // Get form data from EditTeacherAssistantUpdate.php
  $assistantID = $_POST['assistantID'];
  $assistantTitle = $_POST['assistantTitle'];
  $assistantName = $_POST['assistantName'];
  $assistantSurname = $_POST['assistantSurname'];
  $assistantDOB = $_POST['assistantDOB'];
  $assistantEmail = $_POST['assistantEmail'];
  $assistantPhone = $_POST['assistantPhone'];
  $assistantAddress = $_POST['assistantAddress'];
  $teacherID = $_POST['teacherID'];



  // Check if the teacher ID already exists in the database
  $query = "SELECT * FROM teacherassistants WHERE teacherID = '$teacherID' AND assistantID != '$assistantID'";
  $result = mysqli_query($conn, $query);
  // If a row is returned, it means the teacher ID is already assigned to a assistant
  if (mysqli_num_rows($result) > 0) {
    echo "The teacher is already assigned to another assistant<br>"; //error message
    echo '<button onclick="history.go(-1)">Go Back</button>';
  } 

  else {
  // Update the assistants table
  $query = "UPDATE teacherassistants SET assistantTitle = '$assistantTitle', assistantName = '$assistantName', assistantSurname = '$assistantSurname', 
  assistantDOB = '$assistantDOB', assistantEmail = '$assistantEmail', assistantPhone = '$assistantPhone', assistantAddress = '$assistantAddress', 
  teacherID = '$teacherID' WHERE assistantID = '$assistantID'";
  if (mysqli_query($conn, $query)) {
      echo "Teacherassistants table has been updated successfully!<br>"; // Successful update message
      echo '<a href="EditTeacherAssistantHTML.php"><button>Go Back</button></a>';
  } else {
      echo "Error updating teacher assistants: " . mysqli_error($connection);
  }
  }

  // Close connection
  $conn->close();

  //END OF MY OWN CODE
?>