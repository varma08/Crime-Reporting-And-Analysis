<?php  
 $connect = mysqli_connect("localhost", "root", "", "analytics");  
 $query = "SELECT location,COUNT(*) as number FROM stats GROUP BY location";
 $result = mysqli_query($connect, $query); 
 $query1 = "SELECT category,COUNT(*) as number1 FROM stats GROUP BY category";
 $result1 = mysqli_query($connect, $query1);  
 ?>  
 <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <div>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawlocationChart);
      google.charts.setOnLoadCallback(drawcategoryChart);


      function drawlocationChart() {

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

        var chart = new google.visualization.PieChart(document.getElementById('location_chart_div'));

        chart.draw(data, options);
        
      }
  
      function drawcategoryChart() {

        var data = google.visualization.arrayToDataTable([
          ['category', 'number1'],
          <?php  
            while($row = mysqli_fetch_array($result1))  
            {  
              echo "['".$row["category"]."', ".$row["number1"]."],";  
            }  
          ?>  
        ]);

        var options = {
          title: ' Category wise Crime Distribution',
          
        };

        var chart = new google.visualization.PieChart(document.getElementById('category_chart_div'));

        chart.draw(data, options);
      }
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
      background-image:url("test3.png");
      background-repeat: no-repeat;
      background-size:100%;
      }
    </style>
    
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Php Login System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="welcome.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="report.php">Report</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="analytics.php">Analytics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> Welcome</a>
      </li>
  </ul>
  </div>


  </div>
</nav>
        <br>
        <br>
        <br> 
        <div id="location_chart_div" style="border: 10px solid #ccc"></div>
        <br>
        <br>
        <br>
        <div id="category_chart_div" style="border: 10px solid #ccc"></div>
        <br>
        <br>
        <br>
      
    
  </body>
</html>
