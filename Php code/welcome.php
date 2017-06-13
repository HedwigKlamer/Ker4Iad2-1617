<?php
include "conect.php";
session_start();


$query = "SELECT tijd, UVstraling FROM `dingData` WHERE ding = ".$_SESSION['user_id']." ORDER BY id DESC LIMIT 15";

if (!($result = $mysqli->query($query)))
showerror($mysqli->errno,$mysqli->error);

//echo $_SESSION['user_id'];

//$row = $result->fetch_assoc();
//echo json_encode($row);
//
//echo json_encode(strftime(" %e %B %Y", strtotime($row["tijd"])));

?>

<!doctype html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Raleway" rel="stylesheet">  
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Tijd', 'UV'],
            <?php
            while($row = mysqli_fetch_array($result))
            {
             echo "['".strftime(" %e %B %H:%M", strtotime($row["tijd"]))."',".$row["UVstraling"]."],";   
            }
            ?>
        ]);

        var options = {
          
            title: 'UV index',
            curveType: 'function',
            legend: { position: 'bottom' },
            backgroundColor: '#fbf6a7',
            color: '#F67156'
            
            
            
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
    <style>
        body{
            margin: 70px;
            align-self: center;
            width: 1000px;
        }
        
        h1{
                margin-left: 100px;
                font-size: 60px; 
                color: #F67156; 
                font-family: 'Open Sans Condensed', sans-serif;
                
            }
        table{
           font-family: 'Raleway', sans-serif; 
        }
        tr:nth-child(even) {
            background-color: #f2f2f2
        }
        th {
            background-color: #F67156;
            color: white;
            text-align: right; 
            font-size: 90%; 
            font-style: bold;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
    </style>
    
</head>
<body>
    <h1>Welcome back <?php echo $_SESSION['user_name'] ?></h1>
    <div id="curve_chart" style="width: 1200px; height: 500px"></div>
    <br>
    <br>
    <table>
        <tr style="vertical-align: bottom">
            <th>Zonkracht</th>
            <th>Omschrijving</th>
            <th>Minuten blootstelling<br>
            tot huid rood kleurt</th>
            <th>Verbranding<br>
            van de huid</th>
        </tr>
        <tr>
            <td>>10</td>
            <td>Geen</td>
            <td>-</td>
            <td>Niet</td>
        </tr>
        <tr>
            <td>10-12</td>
            <td>Vrijwel geen</td>
            <td>100-50</td>
            <td>Niet</td>
        </tr>
        <tr>
            <td>13-14</td>
            <td>Zwak</td>
            <td>35-25</td>
            <td>Bijna niet</td>
        </tr>
        <tr>
            <td>15-16</td>
            <td>Matig</td>
            <td>25-15</td>
            <td>Gemakkelijk</td>
        </tr>
        <tr>
            <td>17-18</td>
            <td>Sterk</td>
            <td>15-10</td>
            <td>Snel</td>
        </tr>
        <tr>
            <td>19-100</td>
            <td>Zeer sterk</td>
            <td>&lt; 10</td>
            <td>Zeer snel</td>
        </tr>
    <tr>
    <th colspan="4" >De schaal van de zonkracht van het KNMI</th>
    </tr>
</table>
    
</body>
</html>