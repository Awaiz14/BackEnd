<!DOCTYPE html> <!-- Specify the document is written in HTML -->
 <html lang="en"> <!-- indicates start of HTML document and the language of it (english) -->
    <head> <!-- Head section provides non-visible information, metadata and resource links -->
      <meta charset="UTF-8"> <!-- Specify metadata such as character encoding -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <title>Add a Student!</title> <!-- Set the title of the page which is shown in the browser tabs -->
      <!-- Links elements to link external resources (Bootstrap) -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <!-- MY OWN CODE -->
    <style> 
      body { /* Styling the main body */
        margin: 0; 
        padding: 0; /* Setting no margin or padding for any content in the body*/
        background-color: red;
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
      <!-- Strictly Bootstrap code added from Bootstrap website to create Navbar (changed to suit my webpage) -->
      <!-- https://getbootstrap.com/docs/5.3/components/navbar/ -->
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

      <!-- MY OWN CODE -->  
      <H1> Lets add a student!</H1>    
      <form action="AddStudent.php" method="post"> <!-- Creates a HTML form which includes validation and links to php -->

        <label for="id">StudentID:</label><br>
        <input type="text" id="studentID" name="studentID" placeholder="e.g. S001" pattern="S\d{3}" title="Please enter uppercase 'S' followed by three numbers." maxlength="4" required><br>

        <label for="fname">First name:</label><br> <!-- form option copy/pasted for as many needed -->
        <input type="text" id="studentName" name="studentName" placeholder="e.g. John" pattern="[A-Za-z]+" title="Please enter a valid First name (no numbers)" required><br>

        <label for="lname">Last name:</label><br> <!-- form option copy/pasted for as many needed -->
        <input type="text" id="studentSurname" name="studentSurname" placeholder="e.g. Smith" pattern="[A-Za-z]+" title="Please enter a valid Surname (no numbers)" required><br>

        <label for="dob">Date Of Birth:</label><br> <!-- form option copy/pasted for as many needed -->
        <input type="date" id="studentDOB" name="studentDOB" max="2019-09-01" min="2012-09-02" required><br>

        <label for="email">Email:</label><br> <!-- form option copy/pasted for as many needed -->
        <input type="email" id="studentEmail" name="studentEmail" placeholder="e.g. firstname+studentID@alphonsus.ac.uk" pattern="[a-zA-Z]+S\d{3}@alphonsus.ac.uk" title="Please enter your email in the format firstnameS001@alphonsus.ac.uk" required><br>

        <label for="address">Address:</label><br> <!-- form option copy/pasted for as many needed -->
        <input type="text" id="studentAddress" name="studentAddress" placeholder="House number street, city, country, postcode" required><br>

        <label for="id">Class Name:</label><br> <!-- form option as a select option dropdown -->
        <select name="className" id="className" onchange="updateTeacherID()" required>
          <?php // Database connection parameters to populate dropdown with existing classes
          $servername = "127.0.0.1";
          $username = "root";
          $password = "";
          $database = "school";
          
          // Create connection
          $conn = new mysqli($servername, $username, $password, $database);

          // Query to retrieve className from the classes table
          $classQuery = "SELECT className FROM classes";
          $classResult = mysqli_query($conn, $classQuery);
          ?>
          <option value=""disabled selected>Select an option</option>
          <?php
          // Loop through the classNames and populate the dropdown options
          while ($row = mysqli_fetch_assoc($classResult)) {
            echo "<option value='" . $row['className'] . "'>" . $row['className'] . "</option>";
          }

          // Close the database connection
          mysqli_close($conn);
          ?>
        </select> <br>

        <label for="teacherID">TeacherID:</label><br> <!-- form option copy/pasted for as many needed -->
        <input type="text" id="teacherID" name="teacherID" readonly> <br>

        <label for="id">Parent1ID:</label><br> <!-- form option copy/pasted for as many needed -->
        <select id="parent1ID" name="parent1ID" required>
          <?php // Database connection parameters to populate dropdown with existing parents
          $servername = "127.0.0.1";
          $username = "root";
          $password = "";
          $database = "school";
          
          // Create connection
          $conn = new mysqli($servername, $username, $password, $database);

          // Query to retrieve ParentIDs from the parents table
          $parentQuery = "SELECT parentID FROM parents";
          $parentResult = mysqli_query($conn, $parentQuery);
          ?>
          <option value=""disabled selected>Select an option</option>
          <?php
          // Loop through the parentIDs and populate the dropdown options
          while ($row = mysqli_fetch_assoc($parentResult)) {
              if(!empty($row['parentID'])) {
            echo "<option value='" . $row['parentID'] . "'>" . $row['parentID'] . "</option>";
          }
          }

          // Close the database connection
          mysqli_close($conn); 
          ?>
        </select>
        <br>

        <label for="id">Parent2ID:</label><br> <!-- form option copy/pasted for as many needed -->
        <select id="parent2ID" name="parent2ID">
        <?php // Database connection parameters to populate dropdown with existing parents
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $database = "school";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Query to retrieve ParentIDs from the parents table
        $parentQuery = "SELECT parentID FROM parents";
        $parentResult = mysqli_query($conn, $parentQuery);
        ?>
        <option value=""disabled selected>Select an option</option>
        <?php
        // Loop through the parentIDs and populate the dropdown options
        while ($row = mysqli_fetch_assoc($parentResult)) {
          echo "<option value='" . $row['parentID'] . "'>" . $row['parentID'] . "</option>";
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
        </select>
        <br>

        <label for="info">Medical infomation:</label><br> <!-- form option copy/pasted for as many needed -->
        <input type="text" id="medicalInfo" name="medicalInfo" placeholder="e.g. Allergies, disabilities etc"><br>

        <input type="submit" value="Submit"> <!-- Submit button -->
      </form>
      
      <p>Upon submitting successfully a student record should be added to my "students" table.</p> <!-- Extra information-->

      <!-- END OF MY OWN CODE -->
  
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