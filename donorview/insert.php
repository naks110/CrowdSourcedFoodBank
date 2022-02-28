<!DOCTYPE html>
<html>
<title>D.AC Food Insertion</title>
<head>
	
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body class="bg-warning">
	<center>
		<!--<input type="button" value="Go Back" onclick="history.go(-1)"> 
		<button><a onclick="history.go(-1)" class="btn btn-info">Go Back to Repost/View Last Post</a></button> -->
		 
		<a onclick="history.go(-1)" class="btn btn-info"><h5>Go back to Donor View</h5></a>
		<a href="viewdata.php" class="btn btn-info"><h5>show entries</h5></a>
		<?php

$conn = mysqli_init();
mysqli_real_connect($conn, "csfb-db.mysql.database.azure.com", "naks", "pass007!", "dbfood", 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
		
		// Taking all 5 values from the form data(input)
		$item_name = $_REQUEST['item_name'];
		$itemtype = $_REQUEST['itemtype'];
		$quantity= $_REQUEST['quantity'];
		$donarname= $_REQUEST['donarname'];
		$email = $_REQUEST['email'];
		$pno = $_REQUEST['pno'];
		$address = $_REQUEST['address'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO fdonar VALUES ('$item_name',
			'$itemtype','$quantity','$donarname','$email','$pno','$address')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored successfully."
				. " Please click on View Entries"
				. " to view the updated data</h3>";

			echo nl2br("\n$item_name\n $itemtype\n "
				. "$quantity\n $donarname\n $email \n$pno \n$address");
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
