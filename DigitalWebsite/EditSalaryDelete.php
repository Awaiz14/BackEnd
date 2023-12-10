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
  // Retrieve staffID parameter from the URL
  $staffID = $_GET['id'];

  //SQL query to delete the record
  $query = "DELETE FROM salaries WHERE staffID = '$staffID'";

  // Execute the query (deletes record)
  if ($conn->query($query) === TRUE) {
    header('location:EditSalaryHTML.php');
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  
  // Close the database connection
  $conn->close();

  //END OF MY OWN CODE
?>