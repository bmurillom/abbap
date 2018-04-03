<?php
// Start the session
session_start();
?>

 <?php
     
     if ($_SESSION['livello']>1 ){
        include 'dentroUser2.php';
        
    }else{
        include 'homeadmin2.php';
        
    }
    
     

$str= 'Lista rilevazioni sensori :<br/>';
$codU = $_SESSION['id'] ;
$cn = mysqli_connect('mysql.hostinger.it', 'u426573260_luis', 'cinegga00', 'u426573260_primo');
$sql = 'SELECT codice_S , valore, descrizione FROM  rilevazione';
        
     
        
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati





   
if ($n_ris > 0){
    
    
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
    
    $str= $str."Id sensore  ".$row['codice_S']."  Valore ".$row['valore']."  Descrizione ".$row['descrizione']." ";
     
    }
    
 }else {
     echo' Non ci sono rilevazioni ';
	 
}
 
echo $str;
   
   
   
    

$cn = null;

   
   
   
    





?>
