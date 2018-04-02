<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: 	#006000 ;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #red;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 20%;
    border-radius: 25%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body background ="puzzle.jpg">

<h2>Inserisci dati del sensore e della rilevazione   </h2>

<form action="inserimentoR.php" method="post">
  <div class="imgcontainer">
    <img src="aggiuntaimma.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Id sensore </b></label>
    <input type="text" placeholder="Id" name="idS" required>
    <label for="uname"><b> Valore rilevazione </b></label>
    <input type="text" placeholder="Value" name="valore" required>
    <label for="uname"><b> Descrizione rilevazione </b></label>
    <input type="text" placeholder="description" name="desc" required>









        
    <button type="submit">Inserisci</button>
    
  </div>

  
</form>

     <?php
     


$codU = $_SESSION['id'] ;


$cn = mysqli_connect("mysql.hostinger.it", "u426573260_luis", "cinegga00", "u426573260_primo");

$sql = "SELECT *  FROM dispositivo WHERE  proprieta = '$codU' ";
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati




   
if ($n_ris> 0){
     echo " I miei sensori: <br>";
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
   
    echo "-Id: ".$row['id']." - Tipo : ".$row["tipo"]." -Marca  ".$row['marca']." - Codice Utente  ".$row['proprieta']." <br>";
    
       
       
    }
    
 }else {
     echo" Questo utente non ha  sensori ";
	 

 

   
   
   



?> 
<br>
<A href="homeU.php" > Torna alla home</A>

</body>
</html>
