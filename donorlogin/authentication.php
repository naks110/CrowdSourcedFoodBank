<?php error_reporting(0); ?>
<?php      

    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from donarlogin where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Donor View </center></h1>. "  ;
        }  
        else{  
            header("Location: ../error.html"); 
             exit();
        }     

?>  

    
    <!DOCTYPE html>
<html lang="en">

<head>
<title>CSFB-D.AC Post Pg</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body style="background-color:coral;">
    <button style="position: absolute; right: 10px;"><a href="../signuporlogin.html"class="btn btn-info" >logout</a></button>


    <center>
        <div class="card bg-warning" style="width: 30rem;">
        <h1>Make Donation Entry</h1>

       <right> <form action="../donorview/insert.php" method="post">
            
            
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
            <hr>
            <a class="btn btn-success"href="../donorview/viewdata.php">show entries</a>
        </form>
    </right>
    </div>

    </center>
</body>

</html>

