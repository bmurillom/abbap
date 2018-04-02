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
 
$cn = mysqli_connect('mysql.hostinger.it', 'u426573260_luis', 'cinegga00', 'u426573260_primo');
$sql = "SELECT *  FROM Utente WHERE  nome = '$name' and password = '$ps'";
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

   
   
 

 

   
   
   
    

$cn = null;

?> 
</body>
</html>
