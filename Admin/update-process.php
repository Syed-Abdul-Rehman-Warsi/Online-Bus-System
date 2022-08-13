<?php
include_once 'config.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE busttime set ID='" . $_POST['ID'] . "', start='" . $_POST['start'] . "', end='" . $_POST['end'] . "', dtime='" . $_POST['dtime'] . "' ,atime='" . $_POST['atime'] . "' WHERE ID='" . $_POST['ID'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM bustime WHERE ID='" . $_GET['ID'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update BUS DETAILS</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="busdtail.php">Bus Details</a>
</div>
Bus ID: <br>
<input type="hidden" name="ID" class="txtField" value="<?php echo $row['ID']; ?>">
<input type="text" name="ID"  value="<?php echo $row['ID']; ?>">
<br>
Start Point: <br>
<input type="text" name="start" class="txtField" value="<?php echo $row['start']; ?>">
<br>
End Point :<br>
<input type="text" name="end" class="txtField" value="<?php echo $row['end']; ?>">
<br>
Departure Time:<br>
<input type="text" name="dtime" class="txtField" value="<?php echo $row['dtime']; ?>">
<br>
Arival Time:<br>
<input type="text" name="atime" class="txtField" value="<?php echo $row['atime']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>
