<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => dbfood
		$conn = mysqli_connect("localhost", "root", "", "dbfood");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
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
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
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
