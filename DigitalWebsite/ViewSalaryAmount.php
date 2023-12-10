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

  // Retrieve Salary, teachers and teacherassistants information from the database
  $query = "SELECT s.staffID, s.annualPay, s.payFrequency, t.teacherName, ta.assistantName 
  FROM salaries s
  LEFT JOIN teachers t ON s.staffID = t.teacherID
  LEFT JOIN teacherAssistants ta ON s.staffID = ta.assistantID"; //performs a Left Join to put information together
  $result = mysqli_query($conn, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['staffID'] . "</td>";
    echo "<td>" . ($row['teacherName'] ?? $row['assistantName']) . "</td>";
    echo "<td>" . $row['annualPay'] . "</td>";
    echo "<td>" . $row['payFrequency'] . "</td>";
    // Calculate monthly or weekly payment
    $annualPay = $row['annualPay'];
    $payFrequency = $row['payFrequency'];
    if ($payFrequency == 'Monthly') {
        $monthlyPayment = $annualPay / 12; //calculation is pay is monthly
        echo "<td>£" . number_format($monthlyPayment,2) . "/Month</td>";
    } else if ($payFrequency == 'Weekly') {
        $weeklyPayment = $annualPay / 52; //calculation if pay is weekly
        echo "<td>£" . number_format($weeklyPayment,2) . "/Week</td>"; //format pay in 2 decimal places
    } else {
        echo "<td>Invalid Pay Frequency</td>";
    }
    echo "</tr>";
  }

  // Close the database connection
  mysqli_close($conn);

  //END OF MY OWN CODE
?>