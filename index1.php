<?php
session_start();
?>
<html>
   <head>
       <title>HOME|Pizzeria</title>
	   <link type="text/css" rel="stylesheet" href="stylesheet.css">
   </head>
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
   <body >
        <div id="header">
		   <h1>THE NEW EASTERN PIZZA's</h1>
		</div>
		
		<div id="navigation">
		
		    <ul>
			    <li><a href="index1.php" class="homepage">Home</a></li>
				<li><a href="table.php">Menu</a></li>
				<li><a href="table2.php">Order</a></li>
			    <li><a href="about1.php">About</a></li>
				<li><a href="contact1.php">Contact Us</a></li>
					
			</ul>
		</div>
		
	    <div class="sidebar">
	            <h2> ONLINE </h2>
				<h2> ORDERING </h2>
				<h2> BENEFITS </h2>
				<b>* Exclusive Deals</b><br>
				<b>* Fast Ordering</b><br>
				<b>* 12HRS Advance Pre-Order</b><br>
		</div>
		
		<div style="background-image:url(bg.jpg)">
			<img class="imagesidebar" id="imggi" src="offer.png">

		</div>
		
	    <div class="mainnn">
			<div class="con">
    <img src="1.jpg" class="img">
    <img src="2.jpg" class="img">
	<img src="3.jpg" class="img">
</div>

		</div>
		
		<div class="main">
			<p><b>Pizza</b> is a flatbread generally topped with <b>tomato sauce</b> and cheese and baked in an oven. <br>
		It is commonly topped with a selection of meats, vegetables and condiments. The term was first recorded in the 10th century, <br>
		in a Latin manuscript from Gaeta inCentral <i>Italy</i>. The modern pizza was invented in Naples, Italy, and the dish and its variants<br>
		have since become popular in many areas of the world.</p>
                      <p> In 2009, upon Italy's request, Neapolitan pizza was safeguarded in the European Union as a Traditional Speciality Guaranteedd<br>
       The Associazione Verace Pizza <b>Napoletana</b> (the True Neapolitan Pizza Association) is a non-profit organization founded in 1984 <br>
	   with headquarters in Naples. It promotes and protects the <b1>"true Neapolitan pizza"</b1>.Pizza is sold fresh, frozen or in portions. </p>
	   <p>Various types of ovens are used to cook them and many varieties exist. <br>
	   Several similar dishes are prepared from ingredients commonly used in pizza preparation, such as calzone and stromboli.</p>

		</div>
		
	    <div id="footer">
	                            <p class="highl">&copy 2014,The new eastern pizaa All right reserved.</p><br> 
                  The Pizza Hut name, logos, and related marks are trademarks of The New Eastern pizza's, Inc<br>
               Get your pizza at your door step! Pizza Hut India delivers your favorite pizzas across 54 cities,<br>
			   including Delhi, Mumbai, Bangalore, Chennai, Kolkata, Hyderabad, Pune, and Chandigarh and many others.<br> 
 Just call the TNEP Delivery Number - 9898 7988 for major cities or check the number to call in your city on our locator page<br>
 
		</div>
   </body>
</html>