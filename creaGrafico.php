
<?php
session_start();
?>
 <!DOCTYPE HTML>
<HTML>
<HEAD> 
<TITLE>Grafico</TITLE>
</HEAD>
    <body> <br>
    <A href="index.html">Indietro </A>
    <br>
 <br>
 <div align=\"right\">
   
<canvas id="myChart"></canvas>



<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

<script  >
var date = [];
var valore= [];
var lenght= [];


 dates = <?php echo json_encode($_date); ?>;
 valores= <?php echo json_encode($_valore); ?>;
lenght = <?php echo count($_date);; ?>;
lenght = lenght +1; 

for (  i = 1 ; i <  lenght ; i++){
    date.push(dates[i]); 
    valore.push(valores[i]);
    
   
}


 

var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: date,
        datasets: [{
            label: "My First dataset",
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: valore,
        }]
    },
options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
    // Configuration options go here

});


</script>

</body>

</HTML>
