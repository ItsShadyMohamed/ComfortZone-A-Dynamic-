<?php
$host = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";
$conn= mysqli_connect($host,$username,$password,$database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
 ?>
