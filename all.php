<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
     <?php
     


$codU = $_SESSION['id'] ;


$cn = mysqli_connect("mysql.hostinger.it", "u426573260_luis", "cinegga00", "u426573260_primo");

$sql = "SELECT *  FROM dispositivo ";
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati


include 'homeU.php';


   
if ($n_ris> 0){
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
    echo " Sensore: <br>";
     echo "-Id: ".$row['id']." - Tipo : ".$row["tipo"]." -Marca  ".$row['marca']." - Zona ".$row['zona ']."  Codice Utente  ".$row['proprieta']." <br>";
    
       
       
    }
    
 }else {
     echo" Questo utente non ha  sensori ";
	 

 

   
   
   
    




?> 
</body>
</html>
