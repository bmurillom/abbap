<?php
session_start();
?>
<!DOCTYPE HTML>
<html>  
<body>
    
     <?php


$idR= $_POST['idR'];
$valoreR= $_POST["valoreR"];

$conn = new PDO("mysql:host="mysql.hostinger.it";dbname="u426573260_primo", "u426573260_luis", "cinegga00");

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM rilevazione WHERE codice_S = '$idR' and valore = '$valoreR' ";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Dispositivo cancellato";
    
   include 'homeU.php';

    
 


?> 
<br>
<br>
    <A href="index.php">Torna alla home page</A>
</body>
</html>
