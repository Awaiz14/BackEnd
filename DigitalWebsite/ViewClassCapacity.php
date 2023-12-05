<?php
      // Creates the connection using parameters
      $conn = new mysqli($servername, $username, $password, $database);

      // Checks connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      // Retrieve class table information from the database
      $query = "SELECT className, classCapacity FROM classes";
      $result = mysqli_query($conn, $query);

      // Initialize variables for the chart
      $classNames = array();
      $classCapacities = array();

      // Process retrieved data for the chart
      while ($row = mysqli_fetch_assoc($result)) {
          $classNames[] = $row['className'];
          $classCapacities[] = $row['classCapacity'];
      }

      // Close the database connection
      mysqli_close($conn);
      ?>