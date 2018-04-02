<?php
session_start();
?>
<!DOCTYPE HTML>
<html>  
<body>
    
     <?php

$name =  $_POST["name"];
$ps=  $_POST["pass"];
$email= $_POST["email"];

$conn = new PDO("mysql:host="mysql.hostinger.it";dbname="u426573260_primo", "u426573260_luis", "cinegga00");

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Utente(   nome, password, email)  VALUES('$name','$ps','$email')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    include'homeadmin.php';
    
    }



?> 
<br>
<br>
    <A href="index.php">Torna alla home page</A>
</body>
</html>
