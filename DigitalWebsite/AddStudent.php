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

  // Get the form data from HTML form in Addstudent.html
  $studentID = $_POST['studentID'];
  $studentName = $_POST['studentName'];
  $studentSurname = $_POST['studentSurname'];
  $studentDOB = $_POST['studentDOB'];
  $studentEmail = $_POST['studentEmail'];
  $studentAddress = $_POST['studentAddress'];
  $className = $_POST['className'];
  $teacherID = $_POST['teacherID'];
  $parent1ID = $_POST['parent1ID'];
  $parent2ID = $_POST['parent2ID'];
  $medicalInfo = $_POST['medicalInfo'];
  
  // Insert the data into the "students" table
  $sql = "INSERT INTO students (studentID, studentName, studentSurname, studentDOB, studentEmail, studentAddress, className, teacherID, parent1ID, parent2ID, medicalInfo) 
  VALUES ('$studentID', '$studentName', '$studentSurname', '$studentDOB', '$studentEmail', '$studentAddress', '$className', '$teacherID', '$parent1ID', '$parent2ID', '$medicalInfo')";

  if ($conn->query($sql) === TRUE) {
      echo "Data inserted into students table successfully<br>"; //success message
      echo '<a href="AddStudentHTML.php"><button>Go Back</button></a>'; //Allows user to go back to form
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  // Close connection
  $conn->close();

  //END OF MY OWN CODE
?>