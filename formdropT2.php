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

<h2>Inserisci dati del Tipo di sensore da eliminare    </h2>

<form action="dropT.php" method="post">
  <div class="imgcontainer">
    <img src="immaDelete.bmp" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Id tipo sensore </b></label>
    <input type="text" placeholder="Id" name="id" required>
   












        
    <button type="submit">Elimina</button>
    
  </div>

  
</form>

    <?php
  $str= 'Lista tipi dei sensori <br/>';   
$cn = mysqli_connect('mysql.hostinger.it', 'u426573260_luis', 'cinegga00', 'u426573260_primo');	
$sql = 'SELECT  tipologia , primaP, secondaP, terzaP FROM  tipo ';      
$ris = mysqli_query($cn,$sql) ; //esegue la query
$n_ris = mysqli_num_rows($ris); //dice il numero di record trovati





   
if ($n_ris > 0){
  
   
    while ($row = $ris->fetch_assoc()) {
    // output data of each row
    
    
 $str=$str."Tipo valore stringa      ".$row['primaP']."  ".$row['secondaP']."  ".$row['terzaP']." <br/>";
    }
    
 }else {
     echo' Questo utente non rilevazioni ';
	 
}
 

   echo"$str";
   
   
    


$cn = null;

 

?> 
<br>
<A href="homeU.php" > Torna alla home</A>

</body>
</html>
