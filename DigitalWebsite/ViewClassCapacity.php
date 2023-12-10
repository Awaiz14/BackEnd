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

  // Retrieve class table information from the database
  $query = "SELECT className, classCapacity FROM classes";
  $result = mysqli_query($conn, $query);

  // Initialize variables for the bar chart
  $classNames = array();
  $classCapacities = array();

  // Process the retrieved data for the chart
  while ($row = mysqli_fetch_assoc($result)) {
      $classNames[] = $row['className'];
      $classCapacities[] = $row['classCapacity'];
  }

  // Close the database connection
  mysqli_close($conn);
?>