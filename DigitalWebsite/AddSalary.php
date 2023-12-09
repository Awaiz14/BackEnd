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

  // Get form data from the HTML form in AddSalaryHTML.php
  $staffID = $_POST['staffID'];
  $staffRole = $_POST['staffRole'];
  $staffLevel = $_POST['staffLevel'];
  $annualPay = $_POST['annualPay'];
  $payFrequency = $_POST['payFrequency'];

  // Insert the data into the "salaries" table
  $sql = "INSERT INTO salaries (staffID, staffRole, staffLevel, annualPay, payFrequency) 
  VALUES ('$staffID', '$staffRole', '$staffLevel', '$annualPay', '$payFrequency')";
  if ($conn->query($sql) === TRUE) {
      echo "Data inserted in Salaries table successfully<br>"; //successful message
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Update the annual salary in the teachers table
  $sql = "UPDATE teachers SET teacherSalary = '$annualPay' WHERE teacherID = '$staffID'";
  if ($conn->query($sql) === TRUE) {
    echo "Annual salary updated successfully in Teachers table for TeacherID: $staffID if staff is in this table<br>";
  } else {
    echo "Error updating annual salary: " . $conn->error;
  }
  // Update the annual salary in the teacherassistants table
  $sql = "UPDATE teacherassistants SET assistantSalary = '$annualPay' WHERE assistantID = '$staffID'";
  if ($conn->query($sql) === TRUE) {
    echo "Annual salary updated successfully in TeacherAssistants table for assistantID: $staffID if staff is in this table<br>";
    echo '<a href="AddSalaryHTML.php"><button>Go Back</button></a>';
  } else {
    echo "Error updating annual salary: " . $conn->error;
  }

  // Close connection
  $conn->close();

  //END OF MY OWN CODE
?>