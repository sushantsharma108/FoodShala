<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "foodshala";

  // Create connection
  $conn = mysqli_connect($servername, $username, '', $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
?>