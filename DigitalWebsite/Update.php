<!DOCTYPE html> <!-- Specify the document is written in HTML -->
 <html lang="en"> <!-- indicates start of HTML document and the language of it (english) -->
    <head> <!-- Head section provides non-visible information, metadata and resource links -->
      <meta charset="UTF-8"> <!-- Specify metadata such as character encoding -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <title>Welcome!</title> <!-- Set the title of the page which is shown in the browser tabs -->
      <!-- Links elements to link external resources starting with Bootstrap, CSS and Google fonts -->
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
                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Classes
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="ViewClassHTML.php">View Classes</a></li>
                  <li><a class="dropdown-item" href="AddClass.html">Add a Class</a></li>
                  <li><a class="dropdown-item" href="#">Remove a Class</a></li>
                </ul>
              </li>
    
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Teachers
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="ViewTeachersHTML.php">View Teachers</a></li>
                  <li><a class="dropdown-item" href="AddTeacher.html">Add a Teacher</a></li>
                  <li><a class="dropdown-item" href="#">Remove a Teacher</a></li>
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
                  Dropdown link
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<?php
//Retrieve the staffID from the URL parameter
$staffID = $_GET['id'];

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

// Retrieve the existing record
$sql = "SELECT * FROM salaries WHERE staffID = '$staffID'";
$result = $conn->query($sql);
// Display the existing record in a form
if ($result->num_rows > 0) {
   $row = $result->fetch_assoc();
   ?>
<form action="process_update.php" method="POST">
    StaffID: <input type="text" name="staffID" value="<?php echo $row['staffID']; ?>" readonly><br>
    Staff Role: <input type="text" name="staffRole" value="<?php echo $row['staffRole']; ?>" readonly><br>
    Staff Level: <input type="text" name="staffLevel" value="<?php echo $row['staffLevel']; ?>"><br>
    Annual Pay: <input type="text" name="annualPay" value="<?php echo $row['annualPay']; ?>"><br>
    Pay Frequency: <input type="text" name="payFrequency" value="<?php echo $row['payFrequency']; ?>"><br>
    <input type="submit" value="Update">
</form>
<?php
} else {
   echo "No record found.";
}
$conn->close();
?>

      <!-- JS cdn link for bootstrap elements to work -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      
      <script>
         function updateStaffRole() {
          var staffIDSelect = document.getElementById("staffID");
          var staffRoleInput = document.getElementById("staffRole");
          var selectedStaffID = staffIDSelect.value;
          // Perform the necessary checks and update the staff role
          if (selectedStaffID.startsWith("TA")) {
            staffRoleInput.value = "Assistant";
          } else if (selectedStaffID.startsWith("T")) {
            staffRoleInput.value = "Teacher";
          } else {
            staffRoleInput.value = ""; // Clear the staff role if no match is found
          }
        }
      </script>

      <script>
      function validatePay() {
      var staffRoleSelect = document.getElementById("staffRole");
      var staffLevelSelect = document.getElementById("staffLevel");
      var annualPayInput = document.getElementById("annualPay");
      var selectedStaffLevel = staffLevelSelect.value;
      var selectedStaffRole = staffRoleSelect.value;
      // Perform the necessary checks and update the annual pay range
      if (selectedStaffRole === "Assistant" && selectedStaffLevel === "1") {
        annualPayInput.setAttribute("min", "18000");
        annualPayInput.setAttribute("max", "20000");
      } else if (selectedStaffRole === "Assistant" && selectedStaffLevel === "2") {
        annualPayInput.setAttribute("min", "20001");
        annualPayInput.setAttribute("max", "22000");
      } else if (selectedStaffRole === "Assistant" && selectedStaffLevel === "3") {
        annualPayInput.setAttribute("min", "22001");
        annualPayInput.setAttribute("max", "24000");
      } else if (selectedStaffRole === "Teacher" && selectedStaffLevel === "1") {
        annualPayInput.setAttribute("min", "24001");
        annualPayInput.setAttribute("max", "28000");
      } else if (selectedStaffRole === "Teacher" && selectedStaffLevel === "2") {
        annualPayInput.setAttribute("min", "28001");
        annualPayInput.setAttribute("max", "32000");
      } else if (selectedStaffRole === "Teacher" && selectedStaffLevel === "3") {
        annualPayInput.setAttribute("min", "32001");
        annualPayInput.setAttribute("max", "40000");
      } else {
        // Clear the range attributes if no match is found
        annualPayInput.removeAttribute("min");
        annualPayInput.removeAttribute("max");
      }
      }
      </script>
      
    </body>
</html>