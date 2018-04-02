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
    background-color: 	#FF4040 ;
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
<body>

<h2>Inserisci dati sensore e rilevazione   </h2>

<form action="dropMR.php" method="post">
  <div class="imgcontainer">
    <img src="immaDelete.bmp" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Id sensore </b></label>
    <input type="text" placeholder="Id" name="idR" required>
    <label for="uname"><b> Valore rilevazione </b></label>
    <input type="text" placeholder="Value" name="valoreR" required>





        
    <button type="submit">Elimina</button>
    
  </div>

  
</form>

    <?php
     
$servername = "mysql.hostinger.it";
$username = "u426573260_luis";
$password = "cinegga00";
$dbname = "u426573260_primo";

$codU = $_SESSION['id'] ;

$cn = mysqli_connect($servername, $username, $password, $dbname);
$sql = " SELECT  codice_S, valore , descrizione
        FROM ( dispositivo inner join rilevazione on dispositivo.id = rilevazione.codice_S)
        WHERE  proprieta = '$codU'";
        
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati





   
if ($n_ris > 0){
    
    

    
    
    
    
    echo " Lista rilevazione sensori : <br>";
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
    
    echo "-Id sensore :".$row['codice_S']." Valore |".$row['valore']."| Descrizione ".$row['descrizioneTipo']."<br>";
    
       
       
    }
    
 }else {
     echo" Questo utente non rrrrrrrrilevazioni ";
	 


$cn = null;

?> 
<br>
<A href="homeU.php" > Torna alla home</A>

</body>
</html>
