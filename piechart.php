<?php
include("connection.php");
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['product Name', 'Total Qty Sold'],
          <?php
             $query = "Select * from graph";
             $data = mqsqli_query($conn, $query);
             while($result = mysqli_fetch_assoc($data))
             {
              echo "['".$result['product_name']."',".$result['total_order']."],";
             }
          ?>
        ]);

        var options = {
          title: 'Top product by sale'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>