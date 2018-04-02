 <!DOCTYPE HTML>
<HTML>
<HEAD> <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<TITLE>Grafico</TITLE>
</HEAD>
    <body> 
<canvas id="myLineChart" width="600" height="600"></canvas> 
 
<script> 
// Definisco i dati da mostrare nel grafico 
var data = { 
 
    labels: ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto"], 
    datasets: [ 
        { 
            label: "Temperature 2013", 
            fillColor: "rgba(99,240,220,0.2)", 
            strokeColor: "rgba(99,240,220,1)", 
            pointColor: "rgba(99,240,220,1)", 
            pointStrokeColor: "#fff", 
            pointHighlightFill: "#fff", 
            pointHighlightStroke: "rgba(220,220,220,1)", 
            data: [8, 11, 18, 22, 24, 26, 34, 39] 
        }, 
        { 
            label: "Temperature 2014", 
            fillColor: "rgba(205,99,151,0.2)", 
            strokeColor: "rgba(205,99,151,1)", 
            pointColor: "rgba(205,99,151,1)", 
            pointStrokeColor: "#fff", 
            pointHighlightFill: "#fff", 
            pointHighlightStroke: "rgba(151,187,205,1)", 
            data: [16, 18, 22, 24, 26, 28, 32, 36] 
        } 
    ] 
}; 
 
// Ottengo il contesto 2D del Canvas in cui mostrare il grafico 
var ctx = document.getElementById("myLineChart").getContext("2d"); 
 
// Crea il grafico e visualizza i dati 
var myLineChart = new Chart(ctx).Line(data); 
</script> 
</body>

</HTML>
