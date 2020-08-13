<?php

require 'init_conn_db.php';

$conn = new mysqli($servername, $db_username, $db_password,$db_name);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = '
CREATE TABLE Users(
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(20) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(30) NOT NULL
)
';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else {
    if($conn->query('CREATE DATABASE flight') === TRUE) {
        echo 'DB succesfully created';
    
        if($conn->query($sql) === TRUE) {
            echo 'Table succesfully created';                
        }
        else {
            echo 'Error in table creation' . $conn->error;
        }

    }
    else {
        echo 'Error in DB creation' . $conn->error;
    }
  }

$conn->close();
?>
