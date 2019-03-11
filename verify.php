<?php

session_start();
if (!(isset($_SESSION['logged'])=='yes')) 
{
header ("Location: cart.html");

}
else{
	header ("Location:login2.php");
}

?>