<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!DOCTYPE html>
< lang="en">
<style>
    body {
    background: #3A3A42;
    box-sizing: content-box;
  }
  
  .menu {
    position: fixed;
    height: 100vh;
    background: #4371d3;
    width: 10vw;
    box-shadow: 1px 0 2px rgba(0, 0, 0, 0.2);
    transition: 1s;
  }
  .menu:hover {
    width: 40vw;
  }
  .menu:hover ~ .container {
    transform: perspective(80vw) rotateY(10deg) translateX(35vw) scaleY(1.2);
  }
  .menu:hover nav {
    left: 20%;
  }
  
  .container {
    width: 90%;
    margin-left: 10vw;
    background: #6d6a6a77;
    transition: 1s;
    transform-origin: left center;
    color: #e0e2d1;
  }
  .container .content {
    padding: 100px 20%;
  }
  
  nav {
    position: absolute;
    margin-top: 50%;
    left: -1000px;
    transition: 0.5s;
  }
  nav ul {
    color: white;
    text-transform: capitalize;
    list-style-type: none;
  }
  nav li {
    line-height: 2em;
    letter-spacing: 0.1em;
  }
  nav a {
    font-size: 30px;
    text-decoration: none;
    color: white;
    font-weight: 600;
  }
  nav a:hover {
    color: #eee;
  }
  
  p {
    line-height: 1.5em;
  }
  
  h1 {
    color: #ffffff;
    font-size: 100px;
  }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINI PROJECT</title>
  <link rel="stylesheet" type="text/css" href="minip.css"/>
    </head>
<body >
 <div class="menu">
	<nav>
		<ul>
	<li><a href="http://localhost/login-php/register.php">  Register <img src="https://img.icons8.com/ios/25/000000/edit-user-male.png"/> </a></li>
	<li><a href="http://localhost/login-php/login.php">Login  <img src="https://img.icons8.com/ios/25/000000/login-rounded-right--v1.png"/></a></li>
	<li><a href="http://localhost/login-php/report.php">File a Complaint  <img src="https://img.icons8.com/ios/25/000000/error--v2.png"/></a></li>
	<li><a href="http://localhost/login-php/analytics.php">Analytics  <img src="https://img.icons8.com/ios/25/000000/laptop-metrics--v1.png"/></a></li>
	<li><a href="contacts.html">Contacts  <img src="https://img.icons8.com/ios-filled/25/000000/duplicate-contacts.png"/></a></li>
		</ul>
	</nav>
</div>
<div class="container">
	<div class="content">
		<h1>Crime Reporting and analysis</h1>
		<h3>
	     Report your crime in real time
        </h3>
		
</div>
<div class="content">
		</div>
</div>

</body>

</html>