<?php
$mail=$_POST['email'];
$msg="thank you";
echo $mail;
mail($mail,'Confrimation',$msg);
delay(20);
header('location:login2.php');
?>