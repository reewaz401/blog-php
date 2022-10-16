<?php
/**
 * checks if user is still login
 */
    $check_login = function (){
        session_start();
        $id = $_SESSION['user_id'];
        if($_SESSION["user_id"] == null) header("Location: index.php");
    };
/**
 * checks if user should be redirect to home
 */
    $is_home = function (){
        session_start();
        if($_SESSION){
        $user_id = $_SESSION["user_id"] || null;
        if($user_id) header("Location: home.php");
        }
    };
?>