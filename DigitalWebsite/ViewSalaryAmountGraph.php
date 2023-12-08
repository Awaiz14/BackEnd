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

// Retrieve salary table information from the database
$query = "SELECT staffID, annualPay FROM salaries";
$result = mysqli_query($conn, $query);

// Initialize variables for the chart
$staffIDs = array();
$annualPays = array();

// Process retrieved data for the chart
while ($row = mysqli_fetch_assoc($result)) {
    $staffIDs[] = $row['staffID'];
    $annualPays[] = $row['annualPay'];
}

// Close the database connection
mysqli_close($conn);
?>
