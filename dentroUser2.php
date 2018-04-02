
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
    <h4>Menu Cliente</h4>
  </div>
   
  
  
    <A href="ForminserireR2.php"class="w3-bar-item w3-button" >Inserire una rilevazione   </A>
    
    
  <button class="w3-button w3-block w3-left-align" onclick="myvisuaFunc()">
  Visualizza <i class="fa fa-caret-down"></i>
  </button>
  <div id="demoVisua" class="w3-hide w3-white w3-card  w3-light-grey">
      <A href="sensoreall.php" class="w3-bar-item w3-button w3-dark-grey">I miei sensori  </A>
      <A href="stampaMR.php" class="w3-bar-item w3-button w3-dark-grey">Le rivelazioni dei miei sensori </A>
 <A href="marcheMieS.php" class="w3-bar-item w3-button w3-dark-grey">Le marche dei miei sensori  </A>
 <A href="tipoMieS.php" class="w3-bar-item w3-button w3-dark-grey">I tipi dei  miei sensori  </A>
 
  </div>

   <button class="w3-button w3-block w3-left-align" onclick="myAdrop()">
      Elimina <i class="fa fa-caret-down"></i>
    </button>
     <div id="demoEli" class="w3-hide w3-white w3-card  w3-light-grey">
<A href="formdropMS2.php" class="w3-bar-item w3-button w3-dark-grey">Una mio sensore  </A>
<A href="formdropMR2.php" class="w3-bar-item w3-button w3-dark-grey">Una rilevazione di un mio sensore  </A>
    </div>
    


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






</script>

</body>
</html>






