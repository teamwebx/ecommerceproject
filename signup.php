<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: blue;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: blue;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "educretinfo";
$conn =  mysqli_connect($servername, $username,  $password, $dbname);

 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  if(isset($_POST['signup']))
  {
    $myemail=$_POST['email'];
       $mypass=$_POST['pass'];
      

    $sql = "INSERT INTO employeeinfo (email,pass) VALUES ('$myemail','$mypass')";
    mysqli_query($conn,$sql) or die("Querry Error");
    // $result = mysqli_query($conn,$sql);
    if(1)
    {
        echo '<script>alert("Welcome to E-Commerce.Com")</script>';
        echo "<script> window.location.assign('dbmsproject.php'); </script>";
    }
   
  }
?>
</head>
<body>

<form action="" method="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw-repeat"><b>Password</b></label>
      <input type="password" placeholder="Repeat Password" name="pass" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
   
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button name="signup" type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>

