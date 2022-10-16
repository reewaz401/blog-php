<?php
// Create connection
$conn = mysqli_connect("db",  "root", "password", "data",);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>