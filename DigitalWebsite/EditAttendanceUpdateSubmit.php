<?php
    // Establish database connection
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "school";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
$studentIDs = $_POST['studentID'];
$attendanceDates = $_POST['attendanceDate'];
$attendanceStatuses = $_POST['attendanceStatus'];
$attendanceNotes = $_POST['attendanceNotes'];

// Prepare and execute SQL statements to update data in the attendance table
$stmt = $conn->prepare("UPDATE attendance SET attendanceStatus = ?, attendanceNotes = ? WHERE studentID = ? AND attendanceDate = ?");

foreach ($studentIDs as $key => $studentID) {
    $attendanceDate = $attendanceDates[$key];
    $attendanceStatus = $attendanceStatuses[$key]; // Access status directly by key
    $attendanceNote = $attendanceNotes[$key]; // Access note directly by key

    // Bind parameters and execute the statement
    $stmt->bind_param("ssss", $attendanceStatus, $attendanceNote, $studentID, $attendanceDate);
    $stmt->execute();
}

// Close the statement
$stmt->close();

// Close the database connection
$conn->close();

// Redirect back to the page showing attendance records
header("Location: index.html");
exit();

?>