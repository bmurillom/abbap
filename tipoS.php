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



 $str='Lista tipi dei   sensori <br/> ';
$codU = $_SESSION['id'] ;
$ps= 'cinegga00'
$cn = mysqli_connect('mysql.hostinger.it', 'u426573260_luis',$ps , 'u426573260_primo');
$sql = 'SELECT  tipologia , primaP, secondaP, terzaP FROM  tipo ';
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati





   
if ($n_ris > 0){
   
   
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
    
    $str= $str."Tipologia sensore  ".$row['tipologia']." Tipo valore stringa       ".$row['primaP']."   ".$row['secondaP']."  ".$row['terzaP']." ";
     
    }
    
 }else {
     echo'Non ci sono tipi ';
	 
}
 

   echo $str;
   
   
    

$cn = null;

   
   
   
    




?> 
