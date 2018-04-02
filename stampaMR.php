<?php
// Start the session
session_start();
?>

 <?php
     


$codU = $_SESSION['id'] ;

$cn = mysqli_connect("mysql.hostinger.it", "u426573260_luis", "cinegga00", "u426573260_primo");
$sql = " SELECT tipo , id ,  primaP, secondaP, terzaP, valore, descrizione
        FROM  dispositivo  inner join tipo on tipo = tipologia inner join rilevazione on id = codice_S
        WHERE proprieta = '$codU' ";
        
     
        
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati

if ($_SESSION['livello']>1 ){
        include 'dentroUser2.php';
        
    }else{
        include 'homeadmin2.php';
        
    }


   
if ($n_ris > 0){
    echo " Lista rilevazione sensori : <br>";
    
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
    
    echo "<p>-Id sensore : ".$row['id']." di tipo : ".$row['tipo']." - Valore ".$row['valore']." - Descrizione ".$row['descrizione']."
    <br> Tipo valore stringa    - :  ".$row['primaP']." -  ".$row['secondaP']." - ".$row['terzaP']."<br> </p>";
    }else {
     echo" Non ci sono sensori non assegnati ";
	 
}
 

   
   
   
    

$cn = null;
   
   
   
   


?> 
