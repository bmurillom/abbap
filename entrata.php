<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
     <?php
     


$name =  $_POST['user'];
$ps=  $_POST['password'];
 $_SESSION['pss']= 'cinegga00';

$cn = mysqli_connect('mysql.hostinger.it', 'u426573260_luis', $_SESSION['pss'], 'u426573260_primo');

$sql = 'SELECT *  FROM Utente WHERE  nome = '$name' AND password = '$ps'';
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati



   
if ($n_ris> 0){
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
       
         $_SESSION['email'] = $row['email'];
      $_SESSION['nome'] = $row['nome'];
      $_SESSION['id'] = $row['id'];
      $_SESSION['livello'] = $row['livello'];
      
         
       include 'homeU.php';
    }
    
 }else {
    
	 include 'index.html';
}

   
   
 

 

   
   
   
    



?> 
</body>
</html>
