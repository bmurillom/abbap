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
     



$id =  $_POST['id'];
$nome = $_POST["nome"];
$data = $_POST["data"];
 
$conn = new PDO("mysql:host="mysql.hostinger.it";dbname="u426573260_primo", "u426573260_luis", "cinegga00");

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO marca  VALUES('$id', '$nome','$data')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Marca aggiunta";
    
   include 'homeU.php';
    
    



?> 


</body>
</HEAD>
</HTML>
