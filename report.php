
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP login system!</title>
    <style>
      body{
      background-image:url("test3.png");
      background-repeat: no-repeat;
      background-size:100%;
      }
      .central{
        
        border: 5px;
        margin-left: 500px;
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

  


<div class="container mt-4">
<h3 style="color:white;">Please File your Complaint Here:</h3>
<hr>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $location = $_POST['location'];
        $number = $_POST['number'];
        $report = $_POST['report'];
        $category = $_POST['category'];
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "analytics";

        $conn = mysqli_connect($servername, $username, $password, $database);
      // Submit these to a database
      $sql = "INSERT INTO `stats` ( `Name`, `E-mail Id`, `Location`, `Phone No.`, `Report`, `Category`) VALUES ( '$name', '$email', '$location', '$number', '$report', '$category')";
      $result = mysqli_query($conn, $sql);
      if($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your entry has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      }
      else{
          // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      }
    
    
    
    }


    
?>

<div class="container mt-3">

    <form action="/LOGIN-PHP/report.php" method="post">
    <div class="form-group col-md-4">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
    </div>
    <div class="form-group col-md-4">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your Email Id">
        
    </div>
    <div class="form-group col-md-4">
        <label for="location">Location</label>
        
        <select id="location" type="location" class="form-control" name="location" >
        <option selected>Select Location of Crime</option>
        <option>Kharghar</option>
        <option>Nerul</option>
        <option>Bhandup</option>
        <option>Vikhroli</option>
        <option>Mulund</option>
      </select>
        
    </div>
    <div class="form-group col-md-4">
        <label for="number">Phone No.</label>
        <input type="number" class="form-control" id="number" name="number" placeholder="Enter your Mobile Number">
    </div>
    <div class="form-group col-md-4">
        <label for="report">Report</label>
        <textarea class="form-control" id="report" name="report" cols="30" rows="5" placeholder="Enter your Report" ></textarea>
         
    </div>
    <div class="form-group col-md-4">
        <label for="category">Crime Category</label>
        <select id="category" type="category" class="form-control" name="category" >
        <option selected>Select Category of Crime</option>
        <option>Theft</option>
        <option>Physical Assault</option>
        <option>Murder</option>
        <option>Road Accident</option>
        <option>Kidnapping</option>
      </select>
        
    </div>
    
    
    <div class="central">
  <button type="submit" class="btn btn-primary" textalign="centre">Submit</button>
    </div>
    </form>
    
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

