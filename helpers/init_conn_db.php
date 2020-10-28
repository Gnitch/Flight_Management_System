<?php
$servername = "localhost";
$db_username = "php";
$db_password = "password";
$db_name = 'flight';

$conn = mysqli_connect($servername, $db_username, $db_password,$db_name);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connection sucess";
