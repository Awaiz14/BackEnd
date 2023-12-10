<!DOCTYPE html> <!-- Specify the document is written in HTML -->
  <html lang="en"> <!-- indicates start of HTML document and the language of it (english) -->
    <head> <!-- Head section provides non-visible information, metadata and resource links -->
      <meta charset="UTF-8"> <!-- Specify metadata such as character encoding -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <title>Edit Teacher Assistant!</title> <!-- Set the title of the page which is shown in the browser tabs -->
      <!-- Links elements to link external resources (Bootstrap) -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <!-- MY OWN CODE -->
    <style> 
      body { /* Styling the main body */
        margin: 0; 
        padding: 0; /* Setting no margin or padding for any content in the body*/
        background-color: darkmagenta;
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
      <!-- Strictly Bootstrap code added from Bootstrap website to create navbar (changed to suit my webpage) -->
      <!-- https://getbootstrap.com/docs/5.3/components/navbar/ -->
      <nav class="navbar navbar-expand-lg bg-maroon"> <!-- Expands navbar full width and chooses bg colour - overwritten with css -->
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">St Alphonsus Primary School</a> <!-- Has school name as logo on left in navbar -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a> <!-- Has home page link in navbar -->
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
                <ul class="dropdown-menu"> <!-- Added Students link as dropdown options -->
                  <li><a class="dropdown-item" href="ViewStudentHTML.php">View Students</a></li>
                  <li><a class="dropdown-item" href="AddStudentHTML.php">Add a Student</a></li>
                  <li><a class="dropdown-item" href="EditStudentHTML.php">Update/Delete Students</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Parents
                </a>
                <ul class="dropdown-menu"> <!-- Added Parents link as dropdown options -->
                  <li><a class="dropdown-item" href="ViewParentHTML.php">View Parents</a></li>
                  <li><a class="dropdown-item" href="AddParent.html">Add a Parent</a></li>
                  <li><a class="dropdown-item" href="EditParentHTML.php">Update Parents</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Teacher Assistants
                </a>
                <ul class="dropdown-menu"> <!-- Added Teacher assistants link as dropdown options -->
                  <li><a class="dropdown-item" href="ViewTeacherassistantHTML.php">View Teacher Assistants</a></li>
                  <li><a class="dropdown-item" href="AddTeacherAssistant.html">Add a Teacher Assistant</a></li>
                  <li><a class="dropdown-item" href="EditTeacherAssistantHTML.php">Update Teacher Assistants</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Attendance
                </a>
                <ul class="dropdown-menu"> <!-- Added Attendance link as dropdown options -->
                  <li><a class="dropdown-item" href="ViewAttendanceHTML.php">View Attendance</a></li>
                  <li><a class="dropdown-item" href="TakeAttendanceHTML.php">Take Attendance</a></li>
                  <li><a class="dropdown-item" href="EditAttendanceHTML.php">Update Attendance</a></li>
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

      <!-- MY OWN CODE -->
      <h1>Edit Teacher Assistants</h1>
      
      <table> <!-- Creates table on webpage -->
        <tr>  <!-- Defines the table row and groups headers and data -->
        <th>assistantID</th> <!-- Table header for each column -->
        <th>assistantTitle</th>
        <th>assistantName</th>
        <th>assistantSurname</th>
        <th>assistantDOB</th>
        <th>assistantEmail</th>
        <th>assistantPhone</th>
        <th>assistantAddress</th>
        <th>teacherID</th>
        <th>assistantSalary</th>
        <th>Edit</th>
        </tr>
        <!-- PHP code that needs to be executed to retrieve and display information required -->
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

          // Retrieve information from the teacherassistants table in school database
          $query = "SELECT assistantID, assistantTitle, assistantName, assistantSurname, 
          assistantDOB, assistantEmail, assistantPhone, assistantAddress, teacherID, assistantSalary FROM teacherassistants";
          $result = mysqli_query($conn, $query);
          // Display the retrieved information in the HTML table
          while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>" . $row['assistantID'] . "</td>";
              echo "<td>" . $row['assistantTitle'] . "</td>";
              echo "<td>" . $row['assistantName'] . "</td>";
              echo "<td>" . $row['assistantSurname'] . "</td>";
              echo "<td>" . $row['assistantDOB'] . "</td>";
              echo "<td>" . $row['assistantEmail'] . "</td>";
              echo "<td>" . $row['assistantPhone'] . "</td>";
              echo "<td>" . $row['assistantAddress'] . "</td>";
              echo "<td>" . $row['teacherID'] . "</td>";
              echo "<td>" . $row['assistantSalary'] . "</td>";
              echo "<td> <button><a href='EditTeacherAssistantUpdate.php?id=".$row['assistantID']."'>Update</a></button></td>";
              echo "</tr>";
          }
          
          // Close the database connection
          mysqli_close($conn);
        ?>
      </table>
      
      <!-- END OF MY OWN CODE -->

      <!-- JS cdn link for bootstrap elements to work -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    </body>
</html>