<?php      
    $localhost = "localhost";  
    $user = "root";  
    $password = "";  
    $db_name = "dbfood";  
      
    $con = mysqli_connect($localhost, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  