<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
     <?php
     


$codU = $_SESSION['id'] ;


$cn = mysqli_connect('mysql.hostinger.it', 'u426573260_luis', 'cinegga00', 'u426573260_primo');
$sql = " SELECT   marca.id , marca.nome , marca.dataP
        FROM ( dispositivo inner join marca on dispositivo.marca = marca.id) 
        WHERE  proprieta = '$codU'";
        
$ris = mysqli_query($cn,$sql) ; //esegue la queryinclude 'homeU.php';
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati


include 'homeU.php';


   
if ($n_ris> 0){
     echo " Lista marche dei miei dispositivi   ";
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
   
   echo " Id Marca  ".$row['id']."    Nome ".$row['nome']." Data creazione  ".$row['dataP']." <br />";
    
        
       
    }
    
 }else {
     echo" Questo utente non ha  sensori ";
	 
}
 

   
 
   
   
   
    

$cn = null;
   
    



?> 
</body>
</html>
