<?php
echo " You can do this <br> ";
$servername = "localhost";
$username = "root";
$password = "";
$database = "analytics";

$conn = mysqli_connect($servername, $username, $password, $database);

echo "Connection was successful";

?>