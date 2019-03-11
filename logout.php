<?php
session_start();
unset($_SESSION['customer']);
$_SESSION['logged']=false;
session_destroy();
header('location:index.php');
?>