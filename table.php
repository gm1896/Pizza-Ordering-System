<?php
session_start();
?>

<html>
<head>
   <title>MENU|Pizzeria</title>
   <link type="text/css" rel="stylesheet" href="stylesheet1.css">
</head>
<body>
 <?php
   error_reporting(0); 
  if($_SESSION['logged']==true)
    {
		$user=$_SESSION['uname'];
      echo "Hello,".$user;
      echo '<a href="logout.php"><button class=myButton>Logout</button></a></li>';
    }
  elseif($_SESSION['logged']==false)
    {
      echo '<a href="login2.php"><button class=myButton>SignIn</button></a>';
    }
  ?>
<div id="header">
		   <h1>THE NEW EASTERN PIZZA's</h1>
</div>
<div id="navigation">
		
		    <ul>
			    <li><a href="index1.php" >Home</a></li>
				<li><a href="table.php" class="menupage">Menu</a></li>
				<li><a href="table2.php">Order</a></li>
			    <li><a href="about1.php">About</a></li>
				<li><a href="contact1.php">Contact Us</a></li>
					
			</ul>
</div>
<div id="mainn">
<table align="center" border="0" cellspacing="50" >
<tr>
      <td ><img src="tandoori-paneer.png"></td>
	  <td ><img src="veggie-lovers.png"></td>
	  <td ><img src="veggie-supreme.png"></td>
</tr>
<tr>
      <td><b>&nbsp;&nbsp;&nbsp;TANDOORI PANEER</b></td>
	  <td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VEGGIE LOVER</b></td>
	  <td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VEGGIE SUPREME</b></td>
</tr>
<tr>
      <td>Paneer,<b1>Onion</b1>, capsicum,<br>
				red paprika and tomato.<br></td>
	  <td>Mushroom,<b1>Onion</b1>, tomato and<br>
				Capsicum<br></td>
	  <td>Mushroom, capsicum,<b1>Onion</b1>,<br>
				tomato, baby corn and olives.<br></td>
</tr>
<tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Rs. 150</b></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Rs. 150</b></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Rs. 150</b></td>
</tr>
<tr>
      <td><img src="country-feast.png"></td>
	  <td><img src="firey_ride.png"></td>
	  <td><img src="panner-vango.png"></td>
</tr>
<tr>
      <td><b>&nbsp;&nbsp;&nbsp;COUNTRY FEAST</b></td>
	  <td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FIERY RIDE</b></td>
	  <td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PANEER VEGORAMA</b></td>
</tr>
<tr>
      <td>Sweet corn, mushroom, tomato,<br> 
				<b1>Onion</b1> and capsicum.<br></td>
	  <td>&nbsp;&nbsp;&nbsp;Tomato, <b1>Onion</b1>, Capsicum,<br>
				&nbsp;&nbsp;&nbsp;Sweet Corn , Olives ,<br>
				&nbsp;&nbsp;&nbsp;Jalapenos & Green Chillies<br></td>
	  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paneer, <b1>Onion</b1>, Capsicum,<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sweet Corn, Red Capsicum,<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Black Olives, Red Paprika & <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Green Chillies<br></td>
</tr>
<tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Rs. 150</b></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Rs. 150</b></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Rs. 150</b></td>
</tr>
</table>
</div>
		 <div id="Obutton">
		 <input type="button" class="Login" name="Order" value="Order Now"><br><br><br>
		 
</div>
<table align="center" border="0" cellspacing="50">
<tr>
       <td>1. TANDOORI PANEER</b><td>
	   <td><b>Rs. 150</b><td>
	   
</tr>
<tr>s
       <td>2. VEGGIE LOVER</b><td>
	   <td><b>Rs. 150</b><td>
</tr>
<tr>
       <td>3. VEGGIE SUPREME</b><td>
	   <td><b>Rs. 150</b><td>
</tr>
<tr>
       <td>4. COUNTRY FEAST</b><td>
	   <td><b>Rs. 150</b><td>
</tr>
<tr>
       <td>5. FIERY RIDE</b><td>
	   <td><b>Rs. 150</b><td>
</tr>
<tr>
       <td>6. PANEER VEGORAMA</b><td>
	   <td><b>Rs. 150</b><td>
</tr>
</table>
<i>( * Only Cash On Delivery is available.)</i>
</div>
<div id="input" align="center">
<form action="confirm.php">
 <input type="text" class="loginD" name="pizza" placeholder="Enter choice" ><br><br><br><br><br>
</form> 
 </div>
<div id="footer">
	                            <p1 class="highl">&copy 2014,The new eastern pizaa All right reserved.</p1><br> 
                  The Pizza Hut name, logos, and related marks are trademarks of The New Eastern pizza's, Inc<br>
               Get your pizza at your door step! Pizza Hut India delivers your favorite pizzas across 54 cities,<br>
			   including Delhi, Mumbai, Bangalore, Chennai, Kolkata, Hyderabad, Pune, and Chandigarh and many others.<br> 
 Just call the TNEP Delivery Number - 9898 7988 for major cities or check the number to call in your city on our locator page<br>
 
</div>
</body>


</html>