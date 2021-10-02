<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "college";

  $conn = mysqli_connect('sql6.freemysqlhosting.net','sql6441142','EmnudfUuyc','sql6441142');
  if(!$conn){
     echo "Database connection error".mysqli_connect_error();
  }
?>
