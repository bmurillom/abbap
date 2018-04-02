<?php
session_start();
?>
<!DOCTYPE HTML>
<html>  
<body>
    
     <?php


$idt= $_POST["id"];
$conn = new PDO("mysql:host="mysql.hostinger.it";dbname="u426573260_primo", "u426573260_luis", "cinegga00");

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM tipo WHERE tipologia = '$idt' ";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Tipo dispositivo eliminato";
    
   include 'homeU.php';

    
    



?> 
<br>
<br>
   
</body>
</html>
