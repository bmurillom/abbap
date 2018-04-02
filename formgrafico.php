<?php
session_start();
?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>Visione grafico </TITLE>
</HEAD>
    <body>
<h1> Inserisci l'id del sensore che desider esaminare  </h1><br>
<?php

include'tempALLMS.php';
?>
<form action="creaDatiGraficoP1.php" method="post">
<input type="txt" name="id"><br>


<input type="submit">


</form>


</body>
</HEAD>
</HTML>
