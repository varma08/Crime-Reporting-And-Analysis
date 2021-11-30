        
        <div class="container mt-4">
<h3 style="color:;"><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
<hr>

</div>

<select id="location" class="form-control" name="location" >
        <option selected>Select Location of Crime</option>
        <option>Kharghar</option>
        <option>Nerul</option>
        <option>Bhandup</option>
        <option>Vikhroli</option>
        <option>Mulund</option>
      </select>

<select id="category" class="form-control"  >
        <option selected>Select Category of Crime</option>
        <option>Theft</option>
        <option>Physical Assault</option>
        <option>Murder</option>
        <option>Road Accident</option>
        <option>Kidnapping</option>
      </select>

      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your report  has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';

$query = "SELECT location,COUNT(*) as number FROM stats GROUP BY location";
$result = mysqli_query($connect, $query); 
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['location', 'number'],
          <?php  
            while($row = mysqli_fetch_array($result))  
            {  
              echo "['".$row["location"]."', ".$row["number"]."],";  
            }  
          ?>  
        ]);

        var options = {
          title: 'Location wise Crime Distribution',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));

        chart.draw(data, options);
      }
    </script>
    
    
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>