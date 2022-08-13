
<?php
$servername = "localhost";
$user = "root";
$password = "";
$database = "shah";

$conn = mysqli_connect($servername, $user, $password, $database);

if (isset($_POST['submit'])) {
    $uname = $_POST['Username'];
    $uemail = $_POST['email'];
    $upassword = $_POST['password'];

    $sql_u = "SELECT * FROM user WHERE username='$uname'";
    $sql_e = "SELECT * FROM user WHERE email='$uemail'";
    $res_u = mysqli_query($conn, $sql_u);
    $res_e = mysqli_query($conn, $sql_e);

    if (mysqli_num_rows($res_u) > 0) {
      // $name_error = "Sorry... username already taken";
      // echo ($name_error); 
      echo '<script>alert("Sorry... username already taken")
            </script>';	
    }else if(mysqli_num_rows($res_e) > 0){
      // $email_error = "Sorry... email already taken";
      // echo ($email_error); 	
      echo '<script>alert("Sorry... email already taken")
            </script>';
      
    }
    
    else{
         $query = "INSERT INTO user (username, email, password) 
                  VALUES ('$uname', '$uemail', '$upassword')";
         $results = mysqli_query($conn, $query);
         echo '<centre><div><img src="tick.jpg" width=400px ></div></centre>';
         echo '<centre><div>"You are successfully registered"</div></centre>';
         echo '<centre><div><a href="index.html">Go to Home Page</a></div></centre>';
         exit();
    }
}

?>
 








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
body {
  background-color: rgb(162, 170, 170);
}
</style>
</head>
<body>
<h1>REGISTER YOURSELF!</h1>
<center><form method="POST" action="Register.php">
<div class="mb-3">
    <h2>Please enter your valid details!</h2>
    <label for="exampleInputEmail1" class="form-label">UserName</label>
    <input type="user"  name="Username" class="form-control" id="exampleInputuser1" aria-describedby="userHelp">
    <div id="userhelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <label class="form-check-label" for="exampleCheck1">Check me out</label> <br>
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <br>
    
  </div>
  <button type="submit" name = "submit" class="btn btn-outline-primary">Submit</button>
  <a class="btn btn-outline-primary" href="index.html" role="button">Home</a>
</form></center>
</body>
</html> 


