<!DOCTYPE html>
<html>
<title>CSFB-D.AC View</title>
<body>

<?php
echo "<table style='border: solid 1px black;'>";
 echo "<tr><th>Item Name</th><th>Item Type</th><th>Quantity</th><th>Donar Name</th><th>Email</th><th>Phone No</th><th>Address</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
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
    $stmt = $conn->prepare("SELECT item_name, itemtype, quantity, donarname, email, pno, address FROM fdonar where 1");
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