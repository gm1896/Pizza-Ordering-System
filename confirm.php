<?php
include "connect.php";
$pizza=$_GET['pizza'];
$sql="insert into ord1(pizza) values('$pizza')";
mysql_query($sql,$connect);
header('location:track.php');    
?>