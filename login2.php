<html>

<form name=login action="check.php" method="POST" id="myForm" onSubmit="return validateForm()" >
<head>
       <title>ORDER|Pizzeria</title>
	   <link type="text/css" rel="stylesheet" href="stylesheet1.css">
   	   <script>
function myFunction() {
    document.getElementById("myForm").reset();
}
function validateForm()
{
var user=document.login.email.value;
var user=user.trim();
var pass=document.login.password.value;
if(user == '')
{
document.getElementById('error').innerHTML="Please Enter Username";
return false;
}
if(pass == '')
{
document.getElementById('error').innerHTML="Please Enter Password";
return false;
}
}

</script>
<meta http-equiv="Cache-Control" content="no-store" />
   </head>
   <body>
       <div id="header">
		   <h1>THE NEW EASTERN PIZZA's</h1>
		</div>
		
		<div id="navigation">
		
		    <ul>
			    <li><a href="index.php" >Home</a></li>
				<li><a href="table1.php" >Menu</a></li>
				<li><a href="login2.php" class="orderpage">Order</a></li>
			    <li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact Us</a></li>
					
			</ul>
		</div>
		
        <div id="wrapper">
		
		<div id="ordercontent">
		<!-- <form name="login" onSubmit="return validateForm()">  -->
		
        <div id="error" align="center"></div>
		          <input type="text" class="loginD" name="email" placeholder="Enter email Id" ><br><br><br><br><br>
				  <input type="password" class="loginD" name="password" placeholder="Enter Password"><br><br><br>
				  <a href="table.php"><input type="submit" class="Login" name="Log In" value="Log In"></a><br><br><br>
				  
		<p1>Don't have an account yet?</p1><br><br>
				  <a href="signup.html"><p1>Create an account!</p1></a>
				  
		<!-- </form>	-->	  
		</div>
		<div id="ordercontent1">
		<img src="reset.jpg" onclick="myFunction()" value="Reset form" height="50" width="75">
		</div>
		
        </div>
		
		<div id="footer">
	                            <p1 class="highl">&copy 2014,The new eastern pizaa All right reserved.</p1><br> 
                  The Pizza Hut name, logos, and related marks are trademarks of The New Eastern pizza's, Inc<br>
               Get your pizza at your door step! Pizza Hut India delivers your favorite pizzas across 54 cities,<br>
			   including Delhi, Mumbai, Bangalore, Chennai, Kolkata, Hyderabad, Pune, and Chandigarh and many others.<br> 
 Just call the TNEP Delivery Number - 9898 7988 for major cities or check the number to call in your city on our locator page<br>
 
		</div>
   </body>
</form>   
</html>