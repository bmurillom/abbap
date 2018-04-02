<?php
// Start the session
session_start();
?>
   
<?php
     include 'homeU.php';
    

     


$codU = $_SESSION['id'] ;

	$cn = mysqli_connect('mysql.hostinger.it', 'u426573260_luis', 'cinegga00', 'u426573260_primo');

$sql = "SELECT *  FROM dispositivo where proprieta = '$codU' ";
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati





   
if ($n_ris> 0){
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
 
 echo "Id ".$row['id']."   Tipo  ".$row['tipo']."  Marca  ".$row['marca']."   Zona ".$row['zona']."  Codice Utente  ".$row['proprieta']." ";
    
       
       
    }
    
 }else {
     echo"Non ci sono sensori";
	 
}
 

   
   
   
    

$cn = null;
 

   
   
   
   



?> 





