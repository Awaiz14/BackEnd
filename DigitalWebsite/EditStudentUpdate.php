<!DOCTYPE html> <!-- Specify the document is written in HTML -->
 <html lang="en"> <!-- indicates start of HTML document and the language of it (english) -->
    <head> <!-- Head section provides non-visible information, metadata and resource links -->
      <meta charset="UTF-8"> <!-- Specify metadata such as character encoding -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <title>Edit Student!</title> <!-- Set the title of the page which is shown in the browser tabs -->
      <!-- Links elements to link external resources (Bootstrap) -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <!-- MY OWN CODE -->
    <style> 
      body { /* Styling the main body */
        margin: 0; 
        padding: 0; /* Setting no margin or padding for any content in the body*/
        background-color: maroon;
      }
        
      .navbar {
      background-color: blueviolet; /* Adds background colour to bootstrap nav bar */
      border-bottom: 4px solid black; /* Adds a bottom border to bootstrap nav bar */
      }

      .navbar-nav .nav-link {
        font-size: 18px; /* Changes size of navbar link text */
        color: white; /* Changes colour of navbar link text */
      }
      
      form {
        width: 400px; /* Changes size of the html form */
        margin-top: 20px; /* Adds spacing on top */
        margin-left: 20px; /* Adds spacing on left */
        background-color: orangered; /* Changes background colour of form */
        justify-content: center; /* Centers all the content in form */
        text-align: center; /* Centers all the text in form */
        border: solid 4px black; /* Adds border to form */
        border-radius: 6px;
      }

      select { /* Styles the input boxes which are select options */
        border: 2px solid black;
        border-radius: 4px;
        padding: 2px;
        margin-bottom: 10px;
        width: 350px; /* Size of the option box */
      }

      input[type="text"],
      input[type="email"],
      input[type="tel"],
      input[type="number"],
      input[type="date"] { /* Styles the the different input boxes based on input type*/
        border: 2px solid black;
        border-radius: 4px;
        padding: 2px;
        margin-bottom: 10px; /* Adds space below each input box */
        width: 350px; /* Size of the input boxes */
      }

      input[type="submit"] { /* Styles the submit button */
        padding: 8px 16px;
        margin-bottom: 10px;
        background-color: #4CAF50; /* Colour of submit button */
        color: white; /* Colour of submit buttons text */
        border: none;
        border-radius: 4px;
        cursor: pointer;
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
                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

      <?php

        //MY OWN CODE
        //Retrieve the studentID from the URL parameter
        $studentID = $_GET['id'];

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

        // Retrieve the existing record from students table
        $sql = "SELECT * FROM students WHERE studentID = '$studentID'";
        $result = $conn->query($sql);
        // Display the existing record in a form
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

      ?>

      <H1> Edit student!</H1>    
      <form action="EditStudentUpdateSubmit.php" method="POST"> <!-- Creates a HTML form and links to php -->

        <!-- Prepopulated form which can be edited if it is not readonly -->

        studentID: <input type="text" id="studentID" name="studentID" value="<?php echo $row['studentID']; ?>" readonly><br>

        First Name: <input type="text" id="studentName" name="studentName" placeholder="e.g. John" pattern="[A-Za-z]+" title="Please enter a valid First name (no numbers)" value="<?php echo $row['studentName']; ?>" required><br>

        Last Name: <input type="text" id="studentSurname" name="studentSurname" placeholder="e.g. John" pattern="[A-Za-z]+" title="Please enter a valid Surname (no numbers)" value="<?php echo $row['studentSurname']; ?>" required><br>

        Date Of Birth: <input type="date" id="studentDOB" name="studentDOB" max="2019-09-01" min="2012-09-02" value="<?php echo $row['studentDOB']; ?>" required><br>

        Email: <input type="email" id="studentEmail" name="studentEmail" placeholder="e.g. firstname+studentID@alphonsus.ac.uk" pattern="[a-zA-Z]+S\d{3}@alphonsus.ac.uk" title="Please enter your email in the format firstnameS001@alphonsus.ac.uk" value="<?php echo $row['studentEmail']; ?>" required><br>

        Address: <input type="text" id="studentAddress" name="studentAddress" placeholder="House number street, city, country, postcode" value="<?php echo $row['studentAddress']; ?>" required><br>

        <?php
          // Fetch existing class names from the 'classes' table and prepopulate the class name options
          $sql_classes = "SELECT className FROM classes";
          $result_classes = $conn->query($sql_classes);

          // Display the dropdown if class names are retrieved
          if ($result_classes->num_rows > 0) {
        ?>

        Class Name:
        <select id="className" name="className" onchange="updateTeacherID()">
          <?php
            while ($row_class = $result_classes->fetch_assoc()) {
                $className = $row_class['className'];
                $selected = ($className == $row['className']) ? "selected" : "";
                echo "<option value='$className' $selected>$className</option>";
            }
          ?>
        </select><br>

        <?php
          } else {
              echo "No classes found.";
          }
        ?>

        TeacherID: <input type="text" id="teacherID" name="teacherID" value="<?php echo $row['teacherID']; ?>" readonly><br>

        <?php
          // Fetch parent IDs from the 'parents' table excluding the blank option for Parent1ID
          $sql_parents_1 = "SELECT parentID FROM parents WHERE parentID <> ''";
          $result_parents_1 = $conn->query($sql_parents_1);

          // Display the dropdown if non-blank parent IDs are retrieved for Parent1ID
          if ($result_parents_1->num_rows > 0) {
        ?>

        Parent1ID:
        <select id="parent1ID" name="parent1ID">
          <?php
            while ($row_parent_1 = $result_parents_1->fetch_assoc()) {
                $parentID_1 = $row_parent_1['parentID'];
                $selected_1 = ($parentID_1 == $row['parent1ID']) ? "selected" : "";
                echo "<option value='$parentID_1' $selected_1>$parentID_1</option>";
            }
          ?>
        </select><br>

        <?php
          } else {
              echo "No non-blank parent IDs found for Parent1ID.";
          }
        ?>

        <?php
          // Fetch all parent IDs from the 'parents' table for Parent2ID (including null/blank)
          $sql_parents_2 = "SELECT parentID FROM parents";
          $result_parents_2 = $conn->query($sql_parents_2);

          // Display the dropdown for all parent IDs (including null/blank) for Parent2ID
          if ($result_parents_2->num_rows > 0) {
        ?>

        Parent2ID:
        <select id="parent2ID" name="parent2ID">
          <?php
            while ($row_parent_2 = $result_parents_2->fetch_assoc()) {
                $parentID_2 = $row_parent_2['parentID'];
                $selected_2 = ($parentID_2 == $row['parent2ID']) ? "selected" : "";
                echo "<option value='$parentID_2' $selected_2>$parentID_2</option>";
            }
          ?>
        </select><br>

        <?php
          } else {
              echo "No parent IDs found for Parent2ID.";
          }
        ?>

        Medical Info: <input type="text" id="medicalInfo" name="medicalInfo" placeholder="e.g. Allergies, disabilities etc" value="<?php echo $row['medicalInfo']; ?>"><br><br>

        <input type="submit" value="Update">
      </form>

      <?php
      } else {
          echo "No record found.";
      }
      $conn->close(); //Close connection

      //END OF MY OWN CODE

      ?>

      <!-- JS cdn link for bootstrap elements to work -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

      <!-- This code retrieves data from database in order to execute JS function below -->
      <!-- MY OWN CODE -->
      <?php
      $servername = "127.0.0.1";
      $username = "root";
      $password = "";
      $database = "school";

      $conn = new mysqli($servername, $username, $password, $database);

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT className, teacherID FROM classes"; //Gets the className's and teacherID's 
      $result = $conn->query($sql);

      $teacherIDs = [];
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              $teacherIDs[$row['className']] = $row['teacherID']; //Gets the corresponding teacherID's and Classes
          }
      }
      $conn->close();
      ?>

      <script>
          var teacherIDs = <?php echo json_encode($teacherIDs); ?>;
          
          function updateTeacherID() { //Function which populates the teacherID when class is chosen
              var className = document.getElementById("className").value;
              var teacherID = document.getElementById("teacherID");

              if (teacherIDs[className]) {
                  teacherID.value = teacherIDs[className]; //The assigned teacher for the class selected will be chosen
              } else {
                  teacherID.value = ""; // Clear if no teacher ID found
              }
          }
      </script>

      <!-- END OF MY OWN CODE -->
      
    </body>
</html>