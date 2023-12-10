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

  // Get form data from EditClassUpdate.php
  $className = $_POST['className'];
  $teacherID = $_POST['teacherID'];
  $classCapacity = $_POST['classCapacity'];


  // Check if the teacher ID already exists in the database
  $query = "SELECT * FROM classes WHERE teacherID = '$teacherID' AND className != '$className'";
  $result = mysqli_query($conn, $query);
  // If a row is returned, it means the teacher ID is already assigned to a class
  if (mysqli_num_rows($result) > 0) {
    echo "The teacher is already assigned to another class<br>"; //Display error message
    echo '<button onclick="history.go(-1)">Go Back</button>'; //Allows user to go back to form 
  } 

  else {
  // Update the classes table
  $query = "UPDATE classes SET teacherID = '$teacherID', classCapacity = '$classCapacity' WHERE className = '$className'";
  if (mysqli_query($conn, $query)) {
    echo "Classes table has been updated successfully!<br>"; // Successful update message
  }

  // Update the corresponding teacher in students table
  $teacherQuery = "UPDATE students SET teacherID = '$teacherID' WHERE className = '$className'";
  if (mysqli_query($conn, $teacherQuery)) {
    echo "Also Updated in Students!<br>";
    echo '<a href="EditClassHTML.php"><button>Go Back</button></a>'; //Allows user to go back to edit classes page
  } else {
    echo "Error updating teachers: " . mysqli_error($connection);
  }
  }

  // Close connection
  $conn->close();

  //END OF MY OWN CODE
?>