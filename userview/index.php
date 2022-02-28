<!DOCTYPE html>
<html lang="en">

<head>
<title>CSFB-D.AC Post</title>
</head>

<body>
	<center>
		<h1>Storing Form data in Database</h1>

		<form action="insert.php" method="post">
			
			
<p>
				<label for="itemname">Item Name:</label>
				<input type="text" name="item_name" id="itemname">
			</p>



			
			
<!--<p>
				<label for="itemtype">itemtype:</label>
				<input type="text" name="item_type" id="itemtype">
			</p>-->
 <label for="itemtype">Item Type:</label>
  <select id="itemtype" name="itemtype">
    <option value="food">Food</option>
    <option value="cloths">Cloths</option>
    <option value="drink">Drink</option>
    <option value="other">Other</option>
  </select>


			
			
<p>
				<label for="quantity">Quantity:</label>
				<input type="text" name="quantity" id="quantity">
			</p>


			
			
			
<p>
				<label for="donarname">Donar Name:</label>
				<input type="text" name="donarname" id="donarname">
			</p>


			
			
			
<p>
				<label for="emailAddress">Email Address:</label>
				<input type="text" name="email" id="emailAddress">
			</p>


			<p>
				<label for="pno">Donar Phone NO:</label>
				<input type="text" name="pno" id="pno">
			</p>


			
			
			
<p>
				<label for="Address">Address:</label>
				<input type="text" name="address" id="Address">
			</p>



			
			<input type="submit" value="Submit">
			<a href="viewdata.php"><h2>show entries</h2></a>
		</form>
	</center>
</body>

</html>
