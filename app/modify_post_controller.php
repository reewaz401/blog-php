<?php
include "config.php";
$header = $_POST['header'];
$id = $_POST['id'];
$text = $_POST['text'];
  $sqlquery = "UPDATE post SET header = '$header' , text = '$text' WHERE id = '$id'";
  if (mysqli_query($conn, $sqlquery) === TRUE) {
    header("Location: home.php");
    exit();
}else {
echo "Error: " . $sql . "<br>" . $sqlConnect->error;
}   
?>