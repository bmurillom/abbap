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
    background-color: 	#008080 ;
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

<h2>Inserisci dati del Nuovo sensore  </h2>

<form action="newsadd.php" method="post">
  <div class="imgcontainer">
    <img src="immainseriU.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Id Sensore  </b></label>
    <input type="text" placeholder="Id" name="id" required>
    <label for="uname"><b> Tipo </b></label>
    <input type="text" placeholder="Type" name="tipo" required>
    <label for="uname"><b> Marca </b></label>
    <input type="text" placeholder="marca" name="marca" required>
    <label for="uname"><b> Proprieta </b></label>
    <input type="text" placeholder="Id utente proprietario" name="p" required>













        
    <button type="submit">Regista</button>
    
  </div>

  
</form>

    
<br>
<A href="homeU.php" > Torna alla home</A>

</body>
</html>