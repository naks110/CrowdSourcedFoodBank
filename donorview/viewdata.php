<!DOCTYPE html>
<html>
<title>CSFB-D.AC View Pg</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
     <!--<button><a href="../donorlogin/authentication.php" class="btn btn-info">donor view</a></button> 
     <input type="button" value="Go Back" onclick="history.go(-1)">  -->
     <button><a onclick="history.go(-1)" class="btn btn-info">Go Back to Donor View / View Last Post</a></button> 


<?php
echo "<table class='table table-striped table-primary'>";
 echo "<thead class='thead-dark'><tr><th>Item Name</th><th>Item Type</th><th>Quantity</th><th>Donar Name</th><th>Email</th><th>Phone No</th><th>Address</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 80px; border: 1px solid skyblue;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "csfb-db.mysql.database.azure.com:3306";  
$username = "naks";  
$password = "pass007!";  
$dbname = "dbfood";  

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT item_name, itemtype, quantity, donarname, email, pno, address FROM fdonar");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>

</body>
</html>