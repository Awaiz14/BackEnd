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

  //SQL query to fetch assistant, teacher names, and class name
  $sql = "SELECT ta.assistantID, ta.assistantTitle, ta.assistantSurname, t.teacherTitle, t.teacherSurname, c.className
          FROM teacherAssistants ta
          INNER JOIN teachers t ON ta.teacherID = t.teacherID
          INNER JOIN classes c ON t.teacherID = c.teacherID"; //Performs inner join with tables

  // Execute the query
  $result = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" .$row['assistantID']. "</td>";
      echo "<td>" .$row['assistantTitle']." ".$row['assistantSurname']. "</td>";
      echo "<td>" .$row['teacherTitle']." ".$row['teacherSurname']. "</td>";
      echo "<td>" .$row['className']. "</td>";
      echo "</tr>";
  }

  // Close the connection
  mysqli_close($conn);

  //END OF MY OWN CODE
?>