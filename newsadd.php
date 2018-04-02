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
$tipo =  $_POST["tipo"];
$marca =  $_POST['marca'];
$p = $_POST['p'];
 
$conn = new PDO("mysql:host="mysql.hostinger.it";dbname="u426573260_primo", "u426573260_luis", "cinegga00");

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO dispositivo(id, tipo, marca, proprieta)  VALUES('$id','$tipo','$marca', '$p')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    
   include 'homeU.php';
    
    
  


?> 


</body>
</HEAD>
</HTML>
