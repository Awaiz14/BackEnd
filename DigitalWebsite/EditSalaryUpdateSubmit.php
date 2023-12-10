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

  // Get form data from EditSalaryUpdate.php
  $staffID = $_POST['staffID'];
  $staffRole = $_POST['staffRole'];
  $staffLevel = $_POST['staffLevel'];
  $annualPay = $_POST['annualPay'];
  $payFrequency = $_POST['payFrequency'];

  // Update the salaries table
  $query = "UPDATE salaries SET staffLevel = '$staffLevel', annualPay = '$annualPay', payFrequency = '$payFrequency' WHERE staffID = '$staffID'";
  if (mysqli_query($conn, $query)) {
    echo "Salaries table has been updated successfully!<br>"; // Successful update
  }

  // Update the corresponding pay in teachers table
  $teacherQuery = "UPDATE teachers SET teacherSalary = '$annualPay' WHERE teacherID = '$staffID'";
  if (mysqli_query($conn, $teacherQuery)) {
    echo "Updated in teachers!<br>";
  } else {
    echo "Error updating teachers: " . mysqli_error($connection);
  }
  // Update the corresponding pay in teacherassistants table if staffRole is 'teacherassistant'
  $assistantQuery = "UPDATE teacherassistants SET assistantSalary = '$annualPay' WHERE assistantID = '$staffID'";
  if (mysqli_query($conn, $assistantQuery)) {
    echo "Updated in teacher assistants!<br>";
    echo '<a href="EditSalaryHTML.php"><button>Go Back</button></a>';
  } else {
    echo "Error updating teacher assistants: " . mysqli_error($connection);
  }

  // Close connection
  $conn->close();

  //END OF MY OWN CODE
?>