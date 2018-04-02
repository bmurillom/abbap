<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>SENSORI</TITLE>
</HEAD>
    <body>
<h2> Inserire i dati per assegnare il sensore  </h2>

 
<form action="giaEsistenteS.php" method="post">
<h3> Dati utente </h3><br>
Id Utente a cui lo si vuole assegnare : <input type="text" name="user"><br>
<br>
<?php


$codU = $_SESSION['id'] ;


$cn = mysqli_connect("mysql.hostinger.it", "u426573260_luis", "cinegga00", "u426573260_primo");
$sql = "SELECT *  FROM Utente ";
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati





   
if ($n_ris> 0){
     echo " Lista Utenti : <br>";
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
   
 echo "<p>-Id: ".$row['id']." - Nome : ".$row["nome"]." -e_mail  ".$row['email']." - Livello ".$row['livello']."
 -Codice dati ".$row["datiCode"]." </p>";
    
       
       
    }else {
     echo" Non ci sono sensori non assegnati ";
	 
}
 

   
   
   
    

$cn = null;
    
 
 

   
   
   
    


 ?>
<h3>Dati sensore  </h3><br>
Id Sensore da assegnare  : <input type="text" name="ide"><br>
<br>

<?php
     



$cnx = mysqli_connect("mysql.hostinger.it", "u426573260_luis", "cinegga00", "u426573260_primo"); 
$sqlx = "SELECT *  FROM dispositivo   ";
$ris = mysqli_query($cnx,$sqlx) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati




   
if ($n_ris> 0){
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
    echo " <p>Lista sensori assegnabili:  -Id: ".$row['id']." - Tipo : ".$row["tipo"]." -Marca  ".$row['marca']." - Codice Utente  ".$row['proprieta']." </p>";
    
       
       
    }
    

    
}else {
     echo" Non ci sono sensori non assegnati ";
	 
}
 

   
   
   
    

$cn = null;

   
   
   
    



?> 

<input type="submit">

</form>


 


 </body>

</HTML>

   
   
   
    



?> 

<input type="submit">

</form>


 


 </body>

</HTML>
