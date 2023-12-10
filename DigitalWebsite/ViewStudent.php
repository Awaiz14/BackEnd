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

  // Retrieve students information from the database
  $query = "SELECT studentID, studentName, studentSurname, studentDOB, 
  studentEmail, studentAddress, className, teacherID, parent1ID, parent2ID, medicalInfo FROM students";
  $result = mysqli_query($conn, $query);
  // Display the retrieved information in the HTML table
  while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row['studentID'] . "</td>";
      echo "<td>" . $row['studentName'] . "</td>";
      echo "<td>" . $row['studentSurname'] . "</td>";
      echo "<td>" . $row['studentDOB'] . "</td>";
      echo "<td>" . $row['studentEmail'] . "</td>";
      echo "<td>" . $row['studentAddress'] . "</td>";
      echo "<td>" . $row['className'] . "</td>";
      echo "<td>" . $row['teacherID'] . "</td>";
      echo "<td>" . $row['parent1ID'] . "</td>";
      echo "<td>" . $row['parent2ID'] . "</td>";
      echo "<td>" . $row['medicalInfo'] . "</td>";
      echo "</tr>";
  }
  
  // Close the database connection
  mysqli_close($conn);

  //END OF MY OWN CODE
?>