<?php
$servername = "localhost";
$user = "root";
$password = "";
$database = "shah";

$conn = mysqli_connect($servername, $user, $password, $database);

if (isset($_POST['submit'])) {
      $ufname = $_POST['fname'];
      $ulname = $_POST['lname'];
      $ucity = $_POST['city'];
      $uemail = $_POST['email'];
      $ucontact = $_POST['contact'];
      $ucontry = $_POST['country'];
      $uzip = $_POST['zip'];
      
      
      

    $sql_u = "SELECT * FROM booking WHERE name='$ufname'";
    $res_u = mysqli_query($conn, $sql_u);

         $query = "INSERT INTO booking (fname, lname, city, email, contact, start, end) 
                  VALUES ('$ufname', '$ulname','$ucity','$uemail','$ucontact','$ucontry','$uzip')";
         $results = mysqli_query($conn, $query);
         echo '<centre><div><img src="tick.jpg" width=500px ></div></centre>';
         echo '<centre><div><a href="book.php">click here</a></div></centre>';
         exit();
    
}

?>




























<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="style7.css">
    <title>Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
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
                        <a class="nav-link active" aria-current="page" href="contact us.php">ContactUs</a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>
    <!-- <img src="login.jpg" class="img-fluid" alt="Responsive image"> -->
    <div class="container">
        <form action="book.php" method="POST">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationServer01">First name</label>
                    <input name="fname" type="text" class="form-control is-valid" id="validationServer01" value="" required>
                    <div class="valid-feedback">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationServer02">Last name</label>
                    <input name="lname" type="text" class="form-control is-valid" id="validationServer02" value="" required>
                    <div class="valid-feedback">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationServer03">City</label>
                    <input name="city" type="text" class="form-control is-invalid" id="validationServer03" required>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationServer04">Start Point</label>
                    <select name='country' class="custom-select is-invalid" id="validationServer04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>KARACHI</option>
                        <option>LAHORE</option>
                        <option>ISLAMABAD</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a Start Point.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                <label for="validationServer04">End Point</label>
                <select name='zip' class="custom-select is-invalid" id="validationServer04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>KARACHI</option>
                        <option>LAHORE</option>
                        <option>ISLAMABAD</option>
                        <option>PESHAWAR</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a End Point.
                    </div>
                </div>
            </div>
            
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationServer03">Email</label>
                    <input name="email" type="text" class="form-control is-invalid" id="validationServer03" required>
                    <div class="invalid-feedback">
                        Please provide a valid EmailAddress.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationServer03">Contact</label>
                    <input name="contact" type="text" class="form-control is-invalid" id="validationServer03" required>
                    <div class="invalid-feedback">
                        Please provide a valid Contact Number.
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                    <label class="form-check-label" for="invalidCheck3">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>

            
            

            <button type="submit" name = "submit" class="btn btn-outline-primary">Submit</button>
        </form>
    </div>

</body>

</html>