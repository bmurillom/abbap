<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
     

<div class="w3-sidebar w3-bar-block w3-light-grey" style="width:50%" >
   <img src="home-orbit-mask.png" alt="Fjords" style="width:100%">
   <div class="w3-container w3-dark-grey">
    <h4>Menu Amministratore</h4>
  </div>
   
  <button class="w3-button w3-block w3-left-align" onclick="myinsFunc()">
  Inserisci  <i class="fa fa-caret-down"></i>
  </button> 
   <div id="demoinse" class="w3-hide w3-white w3-card">
  <A href="registrazione2.php"  class="w3-bar-item w3-button w3-dark-grey">Un nuovo utente  </A>
 <A href="formInserimentoSensore2.php"  class="w3-bar-item w3-button w3-dark-grey">Un nuovo sensore </A>
 <A href="forminserimentoM2.php"  class="w3-bar-item w3-button w3-dark-grey">Una nuovo marca di sensori  </A>
<A href="formInserimentotipo2.php" class="w3-bar-item w3-button w3-dark-grey">Un nuovo tipo di sensore  </A>
</div>
  
  
    
  <button class="w3-button w3-block w3-left-align" onclick="myvisuaFunc()">
  Visualizza <i class="fa fa-caret-down"></i>
  </button>
  <div id="demoVisua" class="w3-hide w3-white w3-card"> 
      
      <A href="allU.php" class="w3-bar-item w3-button w3-dark-grey"> Tutti gli Utenti </A>
<A href="all.php"class="w3-bar-item w3-button w3-dark-grey">Tutti i  Sensori </A>
 <A href="stampaR.php" class="w3-bar-item w3-button w3-dark-grey">Tutte le Rilevazioni </A>
 <A href="marcheS.php"class="w3-bar-item w3-button w3-dark-grey">Tutte le Marche   </A>
 <A href="tipoS.php" class="w3-bar-item w3-button w3-dark-grey"> Le Tipologie dei  sensori  </A>
      
  </div>

   <button class="w3-button w3-block w3-left-align" onclick="myAdrop()">
      Elimina <i class="fa fa-caret-down"></i>
    </button>
     <div id="demoEli" class="w3-hide w3-white w3-card">
         
         
         
<A href="formdropC2.php" class="w3-bar-item w3-button w3-dark-grey">Un Utente  </A>
<A href="formdropS2.php" class="w3-bar-item w3-button w3-dark-grey">Un sensore  </A>
 <A href="formdropMarca2.php" class="w3-bar-item w3-button w3-dark-grey">Una  marca   </A>
 <A href="formdropT2.php" class="w3-bar-item w3-button w3-dark-grey">Un  tipo di  sensore  </A>
         
    
    </div>
    <A href="formAssegnaS.php"class="w3-bar-item w3-button" >Assegna un Cliente ad un sensore   </A>
    
    
  <A href="index.html"class="w3-bar-item w3-button" >Logout  </A>
     </div>
    
     
     
     
  
  

<div style="margin-left:53%">

<div class="w3-container">
<h2>Sidebar</h2>
<p>Put any element inside the sidebar.</p>
<div align=\"center\">
</div>

</div>



<script>



function myvisuaFunc(){
    var x = document.getElementById("demoVisua");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-dark-grey";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-dark-grey", "");
    }
}

function myAdrop(){
    var x = document.getElementById("demoEli");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-dark-grey";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-dark-grey", "");
    }
}

function myEmailFunc() {
    var x = document.getElementById("demoE");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-dark-grey";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-dark-grey", "");
    }
}

function myinsFunc(){
    var x = document.getElementById("demoinse");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-dark-grey";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-dark-grey", "");
    }
}






</script>

</body>
</html>

