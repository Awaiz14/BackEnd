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

  // Get the form data from HTML form in AddParent.html
  $parentID = $_POST['parentID'];
  $parentName = $_POST['parentName'];
  $parentSurname = $_POST['parentSurname'];
  $parentEmail = $_POST['parentEmail'];
  $parentPhone = $_POST['parentPhone'];
  $parentAddress = $_POST['parentAddress'];

  // Insert the data into the "parents" table
  $sql = "INSERT INTO parents (parentID, parentName, parentSurname, parentEmail, parentPhone, parentAddress ) 
  VALUES ('$parentID', '$parentName', '$parentSurname', '$parentEmail', '$parentPhone', '$parentAddress')";

  if ($conn->query($sql) === TRUE) {
      echo "Data inserted into parents table successfully<br>"; //Successful message
      echo '<a href="AddParent.html"><button>Go Back</button></a>'; //Allows user to go back to form
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close connection
  $conn->close();

  // END OF MY OWN CODE
?>