<?php
session_start();
$_SESSION["user_id"] = null;
$_SESSION["user_type"] = null;
header("Location: ./index.php");
exit();
?>