<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete</title>
</head>
<body>

<?php
include 'connection.php';
// Retrieve user input from form
$Email = $_REQUEST["email"];
$PASSWORD = $_REQUEST['password'];

	$sql = "DELETE FROM tourist WHERE email = '$Email'";
	if (mysqli_query($connect, $sql)) {
		echo "Record Deleted Succesfully."."<br>";
		exit();
	} else {
		echo "Error deleting record: " . mysqli_error($connect);
	}
mysqli_close($connect);
?>
	<br>
	<button>
		<a href="home.html">Return to Home page!</a>
	</button>
</body>
</html>
