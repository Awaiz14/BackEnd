<!DOCTYPE html> <!-- Specify the document is written in HTML -->
<html lang="en"> <!-- indicates start of HTML document and the language of it (english) -->
  <head> <!-- Head section provides non-visible information, metadata and resource links -->
    <meta charset="UTF-8"> <!-- Specify metadata such as character encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>View Class!</title> <!-- Set the title of the page which is shown in the browser tabs -->
    <!-- Links elements to link external resources (Bootstrap) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <!-- MY OWN CODE -->
  <style> 
    body { /* Styling the main body */
      margin: 0; 
      padding: 0; /* Setting no margin or padding for any content in the body*/
      background-color: Yellow;
    }
      
    .navbar {
    background-color: blueviolet; /* Adds background colour to bootstrap nav bar */
    border-bottom: 4px solid black; /* Adds a bottom border to bootstrap nav bar */
    }

    .navbar-nav .nav-link {
      font-size: 18px; /* Changes size of navbar link text */
      color: white; /* Changes colour of navbar link text */
    }

    h1 { /* Styles the heading on the page */
      margin-left: 20px;
      margin-top: 20px;
      margin-bottom: 20px;
    }

    table { /* Styles the table on the page */
      border-collapse: collapse;
      width: 100%; /* Makes table width of page */
    }

    th, td { /* Stands for table header & table data */
      padding: 6px;
      color: white; /* Styles the colour of header and data texts in the table */
      text-align: center; /* Centers the texts in their boxes */
    }

    th { /* Styles table header alone */
      background-color: maroon; /* Adds background colour for header */
    }

    tr { /* Styles table rows */
      background-color: grey; /* background colour of table rows */
      border-bottom: 1px solid white; /* Adds a border below each row */
    }

    tr:hover { /* Styles the hover over table rows */
      background-color: blue; 
    }

    /* END OF MY OWN CODE */
  </style>

  <body>
      <nav class="navbar navbar-expand-lg bg-maroon">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">St Alphonsus Primary School</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Classes
                </a>
                <ul class="dropdown-menu"> <!-- Added Classes link as dropdown options -->
                  <li><a class="dropdown-item" href="ViewClassHTML.php">View Classes</a></li>
                  <li><a class="dropdown-item" href="AddClass.html">Add a Class</a></li>
                  <li><a class="dropdown-item" href="EditClassHTML.php">Update Classes</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Teachers
                </a>
                <ul class="dropdown-menu"> <!-- Added Teachers link as dropdown options -->
                  <li><a class="dropdown-item" href="ViewTeachersHTML.php">View Teachers</a></li>
                  <li><a class="dropdown-item" href="AddTeacher.html">Add a Teacher</a></li>
                  <li><a class="dropdown-item" href="EditTeacherHTML.php">Update Teachers</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Students
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="ViewStudentHTML.php">View Students</a></li>
                  <li><a class="dropdown-item" href="AddStudent.html">Add a Student</a></li>
                  <li><a class="dropdown-item" href="#">Remove a Student</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Parents
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="ViewParentHTML.php">View Parents</a></li>
                  <li><a class="dropdown-item" href="AddParent.html">Add a Parent</a></li>
                  <li><a class="dropdown-item" href="#">Remove a Parent</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Teacher Assistants
                </a>
                <ul class="dropdown-menu"> <!-- Added Teacher assistants link as dropdown options -->
                  <li><a class="dropdown-item" href="ViewTeacherassistantHTML.php">View Teacher Assistants</a></li>
                  <li><a class="dropdown-item" href="AddTeacherAssistant.html">Add a Teacher Assistant</a></li>
                  <li><a class="dropdown-item" href="#">Remove Teacher Assistants</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Attendance
                </a>
                <ul class="dropdown-menu"> <!-- Added Attendance link as dropdown options -->
                  <li><a class="dropdown-item" href="#">View Attendance</a></li>
                  <li><a class="dropdown-item" href="TakeAttendance.html">Take Attendance</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Salaries
                </a>
                <ul class="dropdown-menu"> <!-- Added Salaries link as dropdown options -->
                  <li><a class="dropdown-item" href="ViewSalaryHTML.php">View Salaries</a></li>
                  <li><a class="dropdown-item" href="AddSalaryHTML.php">Add Salaries</a></li>
                  <li><a class="dropdown-item" href="EditSalaryHTML.php">Update/Delete Salaries</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

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

        // Get form data
        $className = $_POST['className'];

        // Fetch students based on the selected class name
$studentsQuery = "SELECT students.studentID, students.studentName, students.studentSurname, classes.className
FROM students 
INNER JOIN classes ON students.className = classes.className 
WHERE classes.className = '$className'";

$studentsResult = $conn->query($studentsQuery);

if ($studentsResult->num_rows > 0) {
?>

<?php echo "<br><h2>Mark Attendance for $className </h2><br>" ?>

<form action="TakeAttendanceSubmit.php" method="post">
<table>
<thead>
<tr>
    <th>studentID</th>
    <th>attendanceDate</th>
    <th>studentName</th>
    <th>studentSurname</th>
    <th>className</th>
    <th>attendanceStatus</th>
    <th>attendanceNotes</th>
</tr>
</thead>
<tbody>
<?php
while ($row = $studentsResult->fetch_assoc()) {
  $studentID = $row['studentID'];
  $studentName = $row['studentName'];
  $studentSurname = $row['studentSurname'];
  $className = $row['className'];
  echo "<tr>";
  echo "<td>" . $studentID . "<input type='hidden' name='studentID[]' value='" . $studentID . "'></td>";
  echo "<td>" . date('d-m-Y') . "<input type='hidden' name='attendanceDate[]' value='" . date('Y-m-d') . "'></td>";
  echo "<td>" . $studentName . "<input type='hidden' name='studentName[]' value='" . $studentName . "'></td>";
  echo "<td>" . $studentSurname . "<input type='hidden' name='studentSurname[]' value='" . $studentSurname . "'></td>";
  echo "<td>" . $className . "<input type='hidden' name='className[]' value='" . $className . "'></td>";
  echo "<td>";
?>
  <select name="attendanceStatus[]">
      <option value="Present">Present</option>
      <option value="Late">Late</option>
      <option value="Absent">Absent</option>
  </select>
<?php
  echo "</td>";
  echo "<td><input type='text' name='attendanceNotes[]'></td>";
  echo "</tr>";
}
?>
</tbody>
</table>
<input type="submit" value="Submit Attendance">
</form>
<?php
} else {
echo "No students found in the selected class.";
}
?>