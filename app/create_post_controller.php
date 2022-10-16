<?php
include "config.php";
session_start();
$id = $_SESSION["user_id"];
$header = $_POST["header"];
$text = $_POST["text"];
  $sqlquery = "INSERT INTO post (user_id, header, text) VALUES ('$id', '$header', '$text')";
  if (mysqli_query($conn, $sqlquery) === TRUE) {
    header("Location: home.php");
    exit();
    
}else {
echo "Error: " . $sql . "<br>" . $sqlConnect->error;
}   
?>