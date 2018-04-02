<?php
// Start the session
session_start();
?>

 <?php
     


$codU = $_SESSION['id'] ;


$cn = mysqli_connect("mysql.hostinger.it", "u426573260_luis", "cinegga00", "u426573260_primo");

$sql = " SELECT  id , primaP, secondaP, terzaP
        FROM  dispositivo  inner join tipo on tipo = tipologia 
        WHERE proprieta = '$codU' ";
        
     
        
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati


include 'homeU.php';


   
if ($n_ris > 0){
    echo " Lista dei tipi dei miei  sensori : <br>";
   
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
    
    echo "<p>Id sensore : ".$row['id']." di tipo : ".$row['tipo']." <br> Tipo valore stringa    - :  ".$row['primaP']." -  ".$row['secondaP']." - ".$row['terzaP']."</p>";
    }else {
     echo" Non ci sono sensori non assegnati ";
	 
}
 

   
   
   
    

$cn = null;

   
   
   
   



?> 
