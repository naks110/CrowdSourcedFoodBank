<!DOCTYPE html>
<html>
<title>D.AC insertion</title>
<head>
	
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body style="background-color:#c4fa08;">
	<center>
	<h5>Go to Login Page - <a href="../donorlogin/donorlogin.html"> <button class="btn-success">
			Click to Login</button> </a> </h5>
			<hr>

			<h4 style="color:orange;">Go Back - <a href="createdonaracc.php"> <button class="btn-warning">
			<- Go Back</button> </a> </h4>




		<?php

$conn = mysqli_init();
mysqli_real_connect($conn, "csfb-db.mysql.database.azure.com", "naks", "pass007!", "dbfood", 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
		
		// Taking all 5 values from the form data(input)
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$pno = $_REQUEST['pno'];
	
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO donarlogin VALUES ('$username',
			'$password','$email','$pno')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Account created successfully."
				. " thank you"
				. " .</h3>";



			echo nl2br("\n$username\n $password\n 
				. \n $email \n$pno ");


		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>