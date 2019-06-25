<?php
session_start();
$title = "Customer Logout | WatchUs";
$page = "logout";

UNSET($_SESSION['login_user']);
session_unset();
session_destroy();
header("Location: login.php");
    
?>