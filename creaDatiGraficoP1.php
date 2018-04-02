<?php
session_start();
?>
 <!DOCTYPE HTML>
<HTML>
<HEAD> 
<TITLE>Grafico</TITLE>
</HEAD>
    <body> 
    <div align=\"right\">
 <?php
     

$codU = $_SESSION['id'] ;
$n = 0;
$id = $_POST["id"]; 


$cn = mysqli_connect("mysql.hostinger.it", "u426573260_luis", "cinegga00", "u426573260_primo");

$sql = " SELECT *
        FROM  rilevazione inner join dispositivo on codice_S = id
        where proprieta = '$codU' and id ='$id' order by descrizione ";
        
     
        
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati

$date = array();
$valore = array();
$tempD;
$tempV;



   
if ($n_ris > 0){
    echo " Lista rilevazione sensori : <br>";
    

    while ($row = $ris->fetch_assoc()) {
    // output data of each row
     $n = $n +1;
    echo "-Id sensore : ".$row['codice_S']." - Valore ".$row['valore']." - Descrizione ".$row['descrizione']."<br>";
    
    $elementi = explode('/', $row['descrizione']);
    $tempD = $elementi[0];
    $tempV=   $elementi[1];
    $_date[$n] = $tempD;
    $_valore[$n]=$tempV;
    
    
        
       
        
      
    
    }
    
 }else {
     echo" Il sensore selezionato non ha rilevazioni o non è presente  ";
	 

 
        
        
        
        
   
   
   
    
    
    
    include 'creaGrafico.php';
    include 'HomeU.php';


?>





</body>

</HTML>
