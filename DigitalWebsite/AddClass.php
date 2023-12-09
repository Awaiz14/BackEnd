<?php
  
  //MY OWN CODE
  //Database connection learnt from following link: 
  //https://www.raghwendra.com/blog/how-to-connect-html-to-database-with-mysql-using-php-example/

  // Database connection parameters
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $database = "school";
  
  // Create the connection using the parameters
  $conn = new mysqli($servername, $username, $password, $database);
  
  // Checks the connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // Get form data from the HTML form in AddClass.html
  $className = $_POST['className'];
  $teacherID = $_POST['teacherID'];
  $classCapacity = $_POST['classCapacity'];

  // Check if the teacher ID already exists in the database
  $query = "SELECT * FROM classes WHERE teacherID = '$teacherID'";
  $result = mysqli_query($conn, $query);
  // If a row is returned, it means the teacher ID is already assigned to a class
  if (mysqli_num_rows($result) > 0) {
    echo "Error: The teacher is already assigned to another class<br>"; //Display error message
    echo '<button onclick="history.go(-1)">Go Back</button>'; //Allows user to go back to form
  } 

  else {
    // Insert data into the "classes" table
    $sql = "INSERT INTO classes (className, teacherID, classCapacity) VALUES ('$className', '$teacherID', '$classCapacity')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted into classes table successfully<br>"; //Successful message
        echo '<a href="AddClass.html"><button>Go Back</button></a>'; //Allows user to go back to form
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  
  // Close connection
  $conn->close();

  // END OF MY OWN CODE
?>