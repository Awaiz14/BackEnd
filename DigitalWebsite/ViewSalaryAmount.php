<?php
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

   // Retrieve Salary information from the database
$query = "SELECT s.staffID, s.annualPay, s.payFrequency, t.teacherName, ta.assistantName 
FROM salaries s
LEFT JOIN teachers t ON s.staffID = t.teacherID
LEFT JOIN teacherAssistants ta ON s.staffID = ta.assistantID";
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
       $monthlyPayment = $annualPay / 12;
       echo "<td>£" . number_format($monthlyPayment,2) . "/Month</td>";
   } else if ($payFrequency == 'Weekly') {
       $weeklyPayment = $annualPay / 52;
       echo "<td>£" . number_format($weeklyPayment,2) . "/Week</td>";
   } else {
       echo "<td>Invalid Pay Frequency</td>";
   }
   echo "</tr>";
}

   // Close the database connection
   mysqli_close($conn);
?>