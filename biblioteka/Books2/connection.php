<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteka";

$connection = mysqli_connect($servername, $username, $password, $dbname);

// provjera veze
if (!$connection) {
die("Connection failed: " . mysqli_connect_error());
}
?>