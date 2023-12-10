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

  // Retrieve parents information from the database
  $query = "SELECT parentID, parentName, parentSurname, 
  parentEmail, parentPhone, parentAddress FROM parents";
  $result = mysqli_query($conn, $query);
  // Display the retrieved information in the HTML table
  while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row['parentID'] . "</td>";
      echo "<td>" . $row['parentName'] . "</td>";
      echo "<td>" . $row['parentSurname'] . "</td>";
      echo "<td>" . $row['parentEmail'] . "</td>";
      echo "<td>" . $row['parentPhone'] . "</td>";
      echo "<td>" . $row['parentAddress'] . "</td>";
      echo "</tr>";
  }
  
  // Close the database connection
  mysqli_close($conn);

  //END OF MY OWN CODE
?>