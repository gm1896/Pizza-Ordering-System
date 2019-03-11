<?php
	include "connect.php";
    include("phpmailer/class.phpmailer.php");

	$name=$_POST['name'];
    $email=$_POST['email'];
	$pass=$_POST['password'];
    $add=$_POST['add'];
	$contact=$_POST['contact'];
	
	$sql="insert into customer(cname,email,password,address,contact) values('$name','$email',md5('$pass'),'$add','$contact')";
	mysql_query($sql,$connect);
    /*$mail=$_POST['email'];
    $msg="thank you";
    echo $mail;
    mail($mail,'Confrimation',$msg);*/
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth= true;
    $mail->Port = 465; // Or 587
    $mail->Username= 'pizzeria.thane@gmail.com';
    $mail->Password= 'pizzeria@123';
    $mail->SMTPSecure = 'ssl';
    $mail->From = 'pizzeria.thane@gmail.com';
    $mail->FromName= 'pizzeria';
    $mail->isHTML(true);
    $mail->Subject ='confirm';
    $mail->Body = 'thanks for Registering with Us!You can now order The delicious pizzas anytime';
    $mail->addAddress($email);
        if(!$mail->send()){
     echo "Mailer Error: " . $mail->ErrorInfo;
    }else{
     echo "E-Mail has been sent";
    }

	echo "Information submitted successfully";
	header('location:login2.php');
?>



