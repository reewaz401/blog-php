<?php
include "config.php";
session_start();
if($_POST['psw']!=$_POST['psw-repeat']) header("Location: signup.php?message=Enter same password");
else{
$username = $_POST['name'];
$type =  intval($_POST['type']);
$pass = password_hash($_POST["psw"],PASSWORD_DEFAULT);
  $checkQuery = "SELECT * FROM user WHERE username = '$username'";
  $result1 = mysqli_query($conn, $checkQuery);
  $result1Array = mysqli_fetch_array($result1);
  if(!$result1Array){
  $sqlquery = "INSERT INTO user (username, password, type) VALUES ('$username', '$pass', $type)";
  $result = mysqli_query($conn, $sqlquery);
  if ($result == 1) {
    $_SESSION["user_id"] = $conn->insert_id;
    $_SESSION["user_type"] = $type;
    $_SESSION["uname"] = $username;
    header("Location: home.php");
  }else {
  header("Location: index.php?message=Something is Worng.Try Again");
  }
  }else{
    header("Location: index.php?message=Already Registered");
  }
} 

?>