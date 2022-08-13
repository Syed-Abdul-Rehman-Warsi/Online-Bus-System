<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "shah";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);


if (isset($_POST["email"])){
    $uemail = $_POST['email'];
    $upassword = $_POST['password'];

    $sql = "select * from user where email='".$uemail."'AND password='".$upassword."'
    limit 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)==1){
        echo '<centre><div><a href="index.html"><img src="ls.jpg" width=100% ></div></centre>';
        exit();
    }
    
    else{

        echo '<script>alert("Login failed please enter the correct details")
            </script>';
            
      
            
          exit();
    }
    
    
   
} 





?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
      body{
    background-color: rgb(162, 170, 170);
}
      
</style>
</head>
<body>

<center><form method="POST" action="Login.php">
  <div class="mb-3">
    <h2>Login with your Email and Password!</h2>
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
  <button type="submit" class="btn btn-outline-primary">Submit</button>
  <a class="btn btn-outline-primary" href="Register.php" role="button">Register</a>
</form></center>
</body>
</html> 


