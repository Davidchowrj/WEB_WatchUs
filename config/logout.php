<?php
require('home.php');
session_start();
session_unset();
session_destroy();
$login = false;
header("Location: signin.php");
?>
