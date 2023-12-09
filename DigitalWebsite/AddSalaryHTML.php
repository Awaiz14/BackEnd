<!DOCTYPE html> <!-- Specify the document is written in HTML -->
 <html lang="en"> <!-- indicates start of HTML document and the language of it (english) -->
    <head> <!-- Head section provides non-visible information, metadata and resource links -->
      <meta charset="UTF-8"> <!-- Specify metadata such as character encoding -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <title>Add Salaries!</title> <!-- Set the title of the page which is shown in the browser tabs -->
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
      <!-- Strictly Bootstrap code added from Bootstrap website to create navbar(changed to suit my webpage) -->
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
                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
      <H1> Lets add a salary!</H1>
      <form action="addSalary.php" method="POST"> <!-- Creates a HTML form which includes validation and links to php -->

        <label for="staffID">Staff ID:</label> <!-- form option copy/pasted for as many needed -->
        <select name="staffID" id="staffID" onchange="updateStaffRole()" required>
          <?php include 'AddSalaryDropdownOptions.php'; ?>
        </select>
        <br>

        <label for="staffRole">Staff Role:</label><br> <!-- form option copy/pasted for as many needed -->
        <input type="text" id="staffRole" name="staffRole" readonly> <br>
        
        <label for="staffLevel">Staff level:</label><br> <!-- form option copy/pasted for as many needed -->
        <select name="staffLevel" id="staffLevel" onchange="validatePay()" required> 
          <option value=""disabled selected>Select a level</option> <!-- Acts like a placeholder default option non-selectable -->
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select> <br>

        <label for="pay">Annual Pay:</label><br> <!-- form option copy/pasted for as many needed -->
        <input type="number" id="annualPay" name="annualPay" required><br>

        <label for="frequency">Pay Frequency:</label><br> 
        <select name="payFrequency" id="payFrequency" required> 
          <option value=""disabled selected>Select</option> <!-- Acts like a placeholder default option non-selectable -->
          <option value="Weekly">Weekly</option><!-- form option copy/pasted for as many needed -->
          <option value="Monthly">Monthly</option>
        </select> <br>

        <input type="submit" value="Submit"> <!-- Submit button-->
      </form>

      <p>Upon submitting successfully a salary record should be added to my "salaries" table.</p> <!-- Extra information-->

      <!-- END OF MY OWN CODE -->

      <!-- JS cdn link for bootstrap elements to work -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      
      <!-- MY OWN CODE -->
      <script>
        function updateStaffRole() { //Function which populates the staffRole depending on the staffID chosen
          var staffIDSelect = document.getElementById("staffID");
          var staffRoleInput = document.getElementById("staffRole");
          var selectedStaffID = staffIDSelect.value;
          // Perform the necessary checks and updates the staff role
          if (selectedStaffID.startsWith("TA")) {
            staffRoleInput.value = "Assistant"; //If staffID selected starts with TA then staffRole populates with Assistant
          } else if (selectedStaffID.startsWith("T")) {
            staffRoleInput.value = "Teacher"; //If staffID selected starts with T then staffRole populates with Teacher
          } else {
            staffRoleInput.value = ""; // Clear the staff role if no match is found
          }
        }
      </script>

      <script>
      function validatePay() { //Function which limits the pay range depending on staffRole and staffLevel chosen
      var staffRoleSelect = document.getElementById("staffRole");
      var staffLevelSelect = document.getElementById("staffLevel");
      var annualPayInput = document.getElementById("annualPay");
      var selectedStaffLevel = staffLevelSelect.value;
      var selectedStaffRole = staffRoleSelect.value;
      // Perform the necessary checks and update the annual pay range
      if (selectedStaffRole === "Assistant" && selectedStaffLevel === "1") { // Sets a min/max amount for different levels of salary
        annualPayInput.setAttribute("min", "18000");
        annualPayInput.setAttribute("max", "20000");
      } else if (selectedStaffRole === "Assistant" && selectedStaffLevel === "2") { //copy pasted for as many conditions
        annualPayInput.setAttribute("min", "20001");
        annualPayInput.setAttribute("max", "22000");
      } else if (selectedStaffRole === "Assistant" && selectedStaffLevel === "3") { //copy pasted for as many conditions needed
        annualPayInput.setAttribute("min", "22001");
        annualPayInput.setAttribute("max", "24000");
      } else if (selectedStaffRole === "Teacher" && selectedStaffLevel === "1") { //copy pasted for as many conditions needed
        annualPayInput.setAttribute("min", "24001");
        annualPayInput.setAttribute("max", "28000");
      } else if (selectedStaffRole === "Teacher" && selectedStaffLevel === "2") { //copy pasted for as many conditions needed
        annualPayInput.setAttribute("min", "28001");
        annualPayInput.setAttribute("max", "32000");
      } else if (selectedStaffRole === "Teacher" && selectedStaffLevel === "3") { //copy pasted for as many conditions needed
        annualPayInput.setAttribute("min", "32001");
        annualPayInput.setAttribute("max", "40000");
      } else {
        // Clear the range attributes if no match is found
        annualPayInput.removeAttribute("min");
        annualPayInput.removeAttribute("max");
      }
      }
      </script>

      <!-- END OF MY OWN CODE -->
      
    </body>
</html>