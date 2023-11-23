<!DOCTYPE html>
<html>
<head>
<title>View Teachers</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style> 

        body { 
          margin: 0; 
          padding: 0; /* Setting no margin or padding for any content in the body*/
          background-color: blue;
        }
        
        .navbar {
          background-color: blueviolet;
          border-bottom: 4px solid black;
          
        }
        
        .navbar-nav .nav-link {
          font-size: 18px;
          color: white;
        }

        h1 {
          margin-left: 20px;
          margin-top: 20px;
          margin-bottom: 20px;
        }

        table {
          border-collapse: collapse;
          width: 100%;
        }

        th, td {
          padding: 6px;
          color: white;
          text-align: center;
          border-bottom: 1px solid #ddd;
        }

        th {
          background-color: maroon;
        }

        tr {
          background-color: grey;
        }
        tr:hover {
          background-color: blue; 
        }

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
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="ViewClassHTML.php">View Classes</a></li>
              <li><a class="dropdown-item" href="AddClass.html">Add a Class</a></li>
              <li><a class="dropdown-item" href="#">Remove a Class</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
              <li><a class="dropdown-item" href="#">View Students</a></li>
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

<h1>Teachers</h1>
<table>
<tr>
<th>teacherID</th>
<th>teacherTitle</th>
<th>teacherName</th>
<th>teacherSurname</th>
<th>teacherDOB</th>
<th>teacherEmail</th>
<th>teacherPhone</th>
<th>teacherAddress</th>
<th>annualSalary</th>
</tr>
<!-- PHP code to retrieve and display teachers' information -->
<?php include 'ViewTeachers.php';?>

</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

