<?php
    $hostname="localhost";
	$username="root";
	$password="";
	$dbname="pizzeria";
	$connect = mysql_connect($hostname,$username,$password)
	or die ("error connecting to db");
        if($connect)
  		echo("done");
	mysql_select_db($dbname);
?>