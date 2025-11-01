<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>signup</title>
</head>
<body>
	<?php
include 'connection.php';
include 'Payment2.html';

$name=$_REQUEST["name"];
$password=$_REQUEST["password"];
$email=$_REQUEST["email"];
$address=$_REQUEST["address"];
$city=$_REQUEST["city"];
$contact=$_REQUEST["contact"];
$sql="INSERT INTO tourist(Name,Email,Password,Address,Contact,City)
VALUES('$city','$address','$email','$name','$password','$contact')";

if ($connect->query($sql)==TRUE)
{
	echo"data entered"."<br>";
}

else{
	echo"error";
}


$connect->close();
?>
<br>
<br>
<button>
<a href="home.html">Return to dashboard</a></button>
</body>
</html>
