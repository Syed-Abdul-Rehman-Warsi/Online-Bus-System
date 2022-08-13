<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Connecting to the Database 
$servername = "localhost"; 
$username = "root"; $password = ""; 
$password = "";
$database = "login"; 
// Create a connection 
$conn = mysqli_connect($servername, $username, $password, $database); 
// Die if connection was not successful 
if (!$conn){ die("Sorry we failed to connect: ". mysqli_connect_error()); 
} 
else{ echo "Connection was successful<br>"; 
}
?>
</body>
</html>

