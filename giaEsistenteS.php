<?php
session_start();
?>

<!DOCTYPE html>

<html>
<body>


<?php
     



$id =  $_POST["user"];

$descrizione =  $_POST["ide"];

 
$conn = new PDO("mysql:host="mysql.hostinger.it";dbname="u426573260_primo", "u426573260_luis", "cinegga00");

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = " UPDATE dispositivo SET proprieta = '$id' WHERE id = '$descrizione'";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Sensore Asegnato";
    
    include 'homeU.php';
    
    
    



?> 


</body>

</html>
