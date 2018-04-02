<?php
// Start the session
session_start();
?>

<?php
     

$codiceD = $_POST['code'];
$codU = $_SESSION['id'] ;


$cn = mysqli_connect('mysql.hostinger.it', 'u426573260_luis', 'cinegga00', 'u426573260_primo');
$sql = "SELECT *  FROM Utente where datiCode = '$codiceD' ";
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati





   
if ($n_ris> 0){
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
       
         $_SESSION['email'] = $row['email'];
      $_SESSION['nome'] = $row['nome'];
      $_SESSION['id'] = $row['id'];
      $_SESSION['livello'] = $row['livello'];
      
         
       include 'formgrafico.php';
    }
    
 }else {
     echo" Codice dati errato ";
	 include 'index.html';
}
 

   
   
   
    

$cn = null;

 

   
   
   




?> 
