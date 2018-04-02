<?php
session_start();
?>

 <!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>Dati Sensore </TITLE>
</HEAD>
    <body>

 
 <?php
     



$id =  $_POST['idS'];
$valore = $_POST['valore'];
$descrizione = $_POST["desc"];
 
$conn = new PDO("mysql:host="mysql.hostinger.it";dbname="u426573260_primo", "u426573260_luis", "cinegga00");

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO rilevazione  VALUES('$id', '$valore','$descrizione')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Rilevazione assegnata";
    
   include 'homeU.php';
    
    
    


?> 


</body>
</HEAD>
</HTML>
