
<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>SENSORI</TITLE>
</HEAD>
    <body>
<?php


if ($_SESSION['livello']>1 ){
        include 'dentroUser2.php';
       
    }else{
        include 'homeadmin2.php';
       
    }
    
    




$str= 'Utenti :<br/>';
 $_SESSION['pss']= 'cinegga00';

$cn = mysqli_connect('mysql.hostinger.it', 'u426573260_luis', $_SESSION['pss'], 'u426573260_primo');
$sql = 'SELECT *  FROM Utente ';
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati





   
if ($n_ris> 0){
     
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
   
     $str= $str."Id: ".$row['id']."  Nome : ".$row['nome']." email  ".$row['email']."  Livello ".$row['livello']." Codice dati ".$row['datiCode']." <br>";
       
       
    }
    
 }else {
     echo'Non ci sono sensori non assegnati';
	 
}
echo $str;
$cn = null;
 ?> 
</body>

</HTML>

	    
	    
