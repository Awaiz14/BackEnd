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

  // Get form data from EditParentUpdate.php
  $parentID = $_POST['parentID'];
  $parentName = $_POST['parentName'];
  $parentSurname = $_POST['parentSurname'];
  $parentEmail = $_POST['parentEmail'];
  $parentPhone = $_POST['parentPhone'];
  $parentAddress = $_POST['parentAddress'];
    
  // Update the parents table
  $query = "UPDATE parents SET parentName = '$parentName', parentSurname = '$parentSurname', 
  parentEmail = '$parentEmail', parentPhone = '$parentPhone', parentAddress = '$parentAddress' 
  WHERE parentID = '$parentID'";
  if (mysqli_query($conn, $query)) {
    echo "Parents table has been updated successfully!<br>"; // Successful update message
    echo '<a href="EditparentHTML.php"><button>Go Back</button></a>';
  } else {
    echo "Error updating parents: " . mysqli_error($connection);
  }

  // Close connection
  $conn->close();

  //END OF MY OWN CODE
?>