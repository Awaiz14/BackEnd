<?php
  session_start();
  //MY OWN CODE
  //Database connection learnt from following link: 
  //https://www.raghwendra.com/blog/how-to-connect-html-to-database-with-mysql-using-php-example/

  // Database connection parameters
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $database = "school";
  
  // Creates the connection using the parameters
  $conn = new mysqli($servername, $username, $password, $database);
  
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch user data from the database (only one login detail at the moment)
    $sql = "SELECT id, username, password FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      if (password_verify($password, $row['password'])) {
          $_SESSION['username'] = $username;
          header("Location: index.html"); //Successful login goes to index main page
          exit();
      } else {
          // Unsuccessful login shows an alert
          echo "<script>alert('Invalid username or password. Please try again.');</script>";
      }
    } 
    else {
      echo "<script>alert('Invalid username or password. Please try again.');</script>";
    }
  
  }
  //End of PHP CODE
?> 

<!-- Start of HTML CODE -->
<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Login</title>
    </head>

    <style>
      body {
        font-family: Arial, sans-serif; /* Sets font for the webpage */
        margin: 0;
        padding: 0;
        background-color: #C0C0C0; /* Grey background */
      }

      .header {
        text-align: center; /* Centers the heading */
        padding: 20px;
      }

      .login-box { /* Styles the login box */
        background-color: white; /* White background */
        padding: 20px;
        border-radius: 8px; /* Rounded login box */
        border: 5px solid #0000ff; /* Initial border color neon blue */
        width: 300px;
        margin: 0 auto;
        text-align: center; /* Center the login box */
        animation: neonEffect 8s infinite; /* Animation settings */
        box-shadow: 0 0 20px 0 rgba(0, 0, 255, 0.5); /* Box shadow settings */
      }

      @keyframes neonEffect { /* Key frame for flashing border*/
        0% {
            border-color: #0000ff; /* Neon blue */
            box-shadow: 0 0 40px 0 rgba(0, 0, 255, 0.8);
        }
        25% {
            border-color: #ff0000; /* Neon red */
            box-shadow: 0 0 40px 0 rgba(255, 0, 0, 0.8);
        }
        50% {
            border-color: #00ff00; /* Neon green */
            box-shadow: 0 0 40px 0 rgba(0, 255, 0, 0.8);
        }
        75% {
            border-color: #ff00ff; /* Neon purple */
            box-shadow: 0 0 40px 0 rgba(255, 0, 255, 0.8);
        }
        100% {
            border-color: #0000ff; /* Back to Neon blue */
            box-shadow: 0 0 40px 0 rgba(0, 0, 255, 0.8);
        }
      }


      .login-title {
        margin-bottom: 20px; /* margin space for login title */
      }

      label {
        display: block;
        margin-bottom: 5px; /* Margin space for labels */
      }

      input[type="text"],
      input[type="password"],
      input[type="submit"] {
        width: calc(100% - 22px);
        padding: 10px;
        margin-bottom: 15px; /* Margin space for input fields */
        border-radius: 3px;
        border: 1px solid #ccc; /* border for input fields */
        box-sizing: border-box;
      }

      input[type="submit"] {
        background-color: #007bff; /* Submit button colour blue*/
        color: white; /* "login" text colour */
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #0056b3; /* Dark blue when hover*/
      }

      .instructions {
        margin-top: 20px;
        font-size: 14px; /* text size */
        color: #666; /* text colour */
      }

    </style>
    
    <body>
      <div class="header">
          <h1>WELCOME TO AWAIZ'S SCHOOL DATABASE</h1> <!-- Title -->
      </div>

      <div class="login-box">
          <h2 class="login-title">Admin Login</h2> <!-- Title of login box -->

          <form method="post" action=""> <!-- Form created for login -->
              <label for="username">Username:</label>
              <input type="text" id="username" name="username" required> <!-- Username required -->

              <label for="password">Password:</label>
              <input type="password" id="password" name="password" required> <!-- Password required -->

              <input type="submit" value="Login"> <!-- Submit button -->
          </form>

          <div class="instructions">
              <p>Username: Admin</p> <!-- Username and password given for successful login to see database-->
              <p>Password: Admin</p>
          </div>
      </div>
    </body>
</html>

<!-- END OF MY OWN CODE -->




