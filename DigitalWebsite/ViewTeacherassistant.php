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

  // Retrieve teacherassistants information from the database
  $query = "SELECT assistantID, assistantTitle, assistantName, assistantSurname, assistantDOB, 
  assistantEmail, assistantPhone, assistantAddress, teacherID, assistantSalary FROM teacherassistants";
  $result = mysqli_query($conn, $query);
  // Display the retrieved information in the HTML table
  while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row['assistantID'] . "</td>";
      echo "<td>" . $row['assistantTitle'] . "</td>";
      echo "<td>" . $row['assistantName'] . "</td>";
      echo "<td>" . $row['assistantSurname'] . "</td>";
      echo "<td>" . $row['assistantDOB'] . "</td>";
      echo "<td>" . $row['assistantEmail'] . "</td>";
      echo "<td>" . $row['assistantPhone'] . "</td>";
      echo "<td>" . $row['assistantAddress'] . "</td>";
      echo "<td>" . $row['teacherID'] . "</td>";
      echo "<td>" . $row['assistantSalary'] . "</td>";
      echo "</tr>";
  }
  
  // Close the database connection
  mysqli_close($conn);

  //END OF MY OWN CODE
?>