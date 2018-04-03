<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
     <?php
     

$str= 'Lista marche dei miei dispositivi:<br/>';
$codU = $_SESSION['id'] ;
$cn = mysqli_connect('mysql.hostinger.it', 'u426573260_luis', 'cinegga00', 'u426573260_primo');
$sql = " SELECT   marca.id , marca.nome , marca.dataP
        FROM ( dispositivo inner join marca on dispositivo.marca = marca.id) 
        WHERE  proprieta = '$codU'";
        
$ris = mysqli_query($cn,$sql) ; //esegue la queryinclude 'homeU.php';
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati


include 'homeU.php';


   
if ($n_ris> 0){
    
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
   
   $str= $str." Id Marca  ".$row['id']."    Nome ".$row['nome']." Data creazione  ".$row['dataP']." <br />";
    
        
       
    }
    
 }else {
     echo' Questo utente non ha  sensori ';
	 
}
 
echo "$str";
   
 
   
   
   
    

$cn = null;
   
    



?> 
</body>
</html>
