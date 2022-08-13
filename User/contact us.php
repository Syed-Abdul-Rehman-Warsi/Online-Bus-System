

 <?php
$servername = "localhost";
$user = "root";
$password = "";
$database = "shah";

$conn = mysqli_connect($servername, $user, $password, $database);

if (isset($_POST['submit'])) {
      $uname = $_POST['name'];
      $uemail = $_POST['email'];
      $uphn = $_POST['number'];
      $umsg = $_POST['subject'];

    $sql_u = "SELECT * FROM contact WHERE name='$uname'";
    $res_u = mysqli_query($conn, $sql_u);

         $query = "INSERT INTO contact (name, email, phn,message) 
                  VALUES ('$uname', '$uemail','$uphn','$umsg')";
         $results = mysqli_query($conn, $query);
         echo '<centre><div><img src="tick.jpg" width=500px ></div></centre>';
         echo '<centre><div><a href="contact us.php">click here</a></div></centre>';
         exit();
    
}

?>








<!DOCTYPE html>
<html>
<head>
    <title>Contact us</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="c.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body>
    <!-- Creating Logo First -->
    <nav class="navbar navbar-dark bg-dark">
      <div class="container">
          <h1 class="head1">SHAH GI BUSES</h1>
          <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
              <a class="btn btn-outline-primary" href="Login.php" role="button">Login</a>
              <a class="btn btn-outline-primary" href="Register.php" role="button">Register</a>
              <!-- <button type="button" class="btn btn-outline-primary">Register</button> -->
          </form>
      </div>
  </nav>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
      <div class="container-fluid">

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          Bus Routes
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="medicine.html">KARACHI</a></li>
                            <li><a class="dropdown-item" href="medicine.html">LAHORE</a></li>
                            <!-- <li><hr class="dropdown-divider"></li> -->
                            <li><a class="dropdown-item" href="medicine.html">ISLAMABAD</a></li>
                            <li><a class="dropdown-item" href="busdtail.php">BUS DETAILS</a></li>
                            
                        </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="about.html">AboutUs</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="contact us.php" >ContactUs</a>
                  </li>


              </ul>

          </div>
      </div>
  </nav>

<center><h2 style="color:white">SHAH GI BUSUES</h2></center>
<div class="container">
  <!-- <div style="text-align:center">
    <h1 style="color:white">Contact Us</h1>
  </div> -->
  <div class="row">
    
    <div class="column">
      <form action="contact us.php" method="POST">
        <label for="fname"><b style="color:white">Name</b></label>
        <input type="text" id="fname" name="name" placeholder="Your name..">
        <label for="lname"><b style="color:white">Email</b></label>
        <input type="text" id="lname" name="email" placeholder="email">
        <label for="lname"><b style="color:white">phone Number</b></label><br>
        <input type="text" id="lname" name="number" placeholder="Phone Number"><br>
        <label for="country"><b style="color:white">City</b></label>
        <select id="country" name="country">
          <option value="australia">Karachi</option>
          <option value="canada">Lahore</option>
          <option value="usa">Sialkoot</option>
          <option value="usa">Quetta</option>
          <option value="usa">Peshawar</option>
          <option value="usa">Multan</option>
          <option value="usa">Faislabad</option>
          <option value="usa">Sakkhar</option>
          <option value="usa">Islamabad</option>
          <option value="usa">Chitral</option>
        </select>
        <label for="subject"><b style="color:white">Message</b></label>
        <textarea id="subject" name="subject" placeholder="Write your Message.... " style="height:170px"></textarea><br><br>
        
        <button type="submit" name = "submit" class="btn btn-outline-primary">Submit</button>
      </form>
        
    </div>
    <div class="column">
    </div>
  </div>
</div>

</body>
</html>
