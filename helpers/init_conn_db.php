<?php
$servername = "remotemysql.com";
$db_username = "7LrAxhdI5t";
$db_password = "toxkOhoalY";
$db_name = '7LrAxhdI5t';

$conn = mysqli_connect($servername, $db_username, $db_password,$db_name);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connection sucess";
