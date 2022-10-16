<?php
include "config.php";
$id = $_POST['id'];
  $sqlquery = "DELETE FROM post WHERE id = '$id'";
  if (mysqli_query($conn, $sqlquery) === TRUE) {
    header("Location: home.php");
    exit();
    
}else {
echo "Error: " . $sql . "<br>" . $sqlConnect->error;
}   

?>