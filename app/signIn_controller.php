<?php
include "config.php";
session_start();
 $uname = $_POST['uname'];
 $password = $_POST['psw'];
 if ($uname != "" && $password != ""){
     $sql_query = "select * from user where username='".$uname."'";
     $result = mysqli_query($conn,$sql_query);
     $resultArray = mysqli_fetch_array($result);
     if(!$resultArray)  $resultArray = [];
     if(sizeof($resultArray) > 0){
       if(password_verify($password,$resultArray["password"])){
        $id=$resultArray["id"];
        $type=$resultArray["type"];
         $_SESSION['uname'] = $uname;
         $_SESSION['user_id'] = $id;
         $_SESSION['user_type'] = $type;
         header("Location: home.php");
       }else header("Location: index.php?message=Invalid Password/Username");
     }else header("Location: index.php?message=Invalid Password/Username");

 }
?>