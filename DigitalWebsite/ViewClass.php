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
  $query = "SELECT className, teacherID, classCapacity FROM classes";
  $result = mysqli_query($conn, $query);
  // Display the retrieved information in the HTML table
  while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row['className'] . "</td>";
      echo "<td>" . $row['teacherID'] . "</td>";
      echo "<td>" . $row['classCapacity'] . "</td>";
      echo "</tr>";
  }
  // Close the database connection
  mysqli_close($conn);

  //END OF MY OWN CODE
?>