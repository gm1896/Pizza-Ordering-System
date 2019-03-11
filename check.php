<html>
<form method="POST">
<?php
include "connect.php";
$_SESSION['logged']=false;
$email=$_POST['email']; 
$password=$_POST['password']; 
$sql="SELECT `cname`,`email`FROM `customer` WHERE `email`='$email' and `password`=md5('$password')";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1)
	{
		session_start();
		while($row=mysql_fetch_array($result))
	{
		$uid=$row['cid'];
		$name=$row['cname'];
	}
    $_SESSION['logged']=true;
	$_SESSION['uname']=$name;
	header("location:table.php");
	}
else
	{
	 echo '<script>alert("no user found try again")</script>';
	 echo '<script>window.location.href="login2.php";</script>';
	}
?>
</form>
</html>