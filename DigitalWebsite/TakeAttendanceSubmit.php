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
    $studentNames = $_POST['studentName'];
    $studentSurnames = $_POST['studentSurname'];
    $classNames = $_POST['className'];

    // Prepare and execute SQL statements to insert data into the attendance table
    $stmt = $conn->prepare("INSERT INTO attendance (studentID, attendanceDate, studentName, studentSurname, className, attendanceStatus, attendanceNotes) VALUES (?, ?, ?, ?, ?, ?, ?)");

    foreach ($studentIDs as $key => $studentID) {
        $attendanceDate = $attendanceDates[$key];
        $attendanceStatus = $attendanceStatuses[$key];
        $attendanceNote = $attendanceNotes[$key];
        $studentName = $studentNames[$key];
        $studentSurname = $studentSurnames[$key];
        $className = $classNames[$key];

        // Bind parameters and execute the statement
        $stmt->bind_param("sssssss", $studentID, $attendanceDate, $studentName, $studentSurname, $className, $attendanceStatus, $attendanceNote);
        $stmt->execute();
    }

    // Close the statement and the database connection
    $stmt->close();
    $conn->close();

    // Redirect or show a success message after insertion
    header("Location: TakeAttendanceHTML.php");
    exit();

?>
