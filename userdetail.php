<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Candidates Managed</title>
</head>
<body style="background: repeating-linear-gradient( -45deg, #FFCCCC 0px, #FFCCCC 5px, 	#FFCCFF 6px, 	#FFCCFF 11px, 	#FFCCFF 12px);">
	<div class="container" style="width: 50%">
		<h1 style="text-align: center;"><i><b>Candidates Display</b></i></h1></h1><br><br>
		<h4>Displaying tourist Details</h4>
		<?php
			include 'connection.php';
			$sql = "SELECT * from tourist";
			$result = $connect->query($sql);
			if($result->num_rows>0){
				echo "<table border = 2px>
				<tr>
					
					<th>Name</th>
					<th>Password</th>					
					<th>Email</th>
					<th>Address</th>
					<th>City</th>
				
				</tr>";
			while($row = $result->fetch_assoc()){
				echo "
				<tr>
				<td>".$row['T_name']."</td>
				<td>".$row['T_password']."</td>
				<td>".$row['T_email']."</td>
				<td>".$row['T_address']."</td>
				<td>".$row['city']."</td>
				</tr>";
				}
			echo "</table>";
			}
			else{
				echo "0 rows returned";
			}

		?>

		<br>

		<div>
			<button><a href="home.html"><b>Return To Dashboard</b></a></button><br><br>
			</form>
		</div>

	</div>

</body>

</html>