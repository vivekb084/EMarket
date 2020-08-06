<?php
session_start();
if(!empty($_SESSION['username']))
{
					$message="logout First";
					 echo '<script>alert('.'"'.$message.'"'.');</script>';
					echo '<META HTTP-EQUIV="Refresh" Content="0; URL=dash.php">';
}
else
{
session_destroy();
}
if(!empty($_GET['valid_auth']))
{
$message=$_GET['valid_auth'];
echo '<script>alert('.'"'.$message.'"'.');</script>';
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>GAWDS eMarket Seller Registration</title>
		<link href="css/register.css" rel="stylesheet">
	</head>
	<body>
		<div id="topnav">
			<a class="navbutton" href="home.html#buyhow">How to Buy</a>
			<a class="navbutton" href="home.html#sellhow">How to Sell</a>
			<a class="navbutton" href="home.html#aboutus">About Us</a>
			<a class="navbutton down" href="products.php">Products</a>
		</div>
		<div id="telling">Mr./Miss Seller, please fill up the form below to register for selling products.</div>
		<form id="registerform" method="post" action="signup_auth.php" enctype="multipart/form-data">
			<h2>Register here</h2>
			<div id="part1">
			<input type="number" pattern="[0-9]*" name="rollno" placeholder="Your Roll Number" autofocus required><br><br>
			
			<input id="pass1" type="password" name="password" placeholder="Enter a password" required><br>
			<input id="pass2" type="password" placeholder="Confirm password" required><br><br>
			
			<input type="text" name="name" placeholder="Your full name" required><br>
			<input type="tel" name="mobno" placeholder="Mobile Number" required><br>
			<input type="email" name="email" placeholder="Email address" required><br>
			</div>
			<div id="part2">
			<div id="addressbar">Please enter NIT Address Details</div><br>
			<input type="number" pattern="[0-9]*" name="hostelno" placeholder="Hostel Number" required><br>
			<input type="text" name="blockno" placeholder="Block" required><br>
			<input type="number" pattern="[0-9]*" name="roomno" placeholder="Room Number" required><br>
			<input type="submit" name="submit" value="Register" required class="submit" onclick="checkPassword();">
			</div>
		</form>
		<form id="loginform" method="post" action="login_auth.php" enctype="multipart/form-data">			
			<h2>Login here</h2>
			<input type="number" pattern="[0-9]*" name="rollno" placeholder="Your Roll Number" autofocus required><br><br>
			<input type="password" name="password" placeholder="Enter your password" required><br>
			<input type="submit" name="login" value="Login" required class="submit">
		</form>
		<div id="bottom"><a href="http://gawds.in">gawds.in</a> &copy; 2014 - 2015 GAWDS - Graphics and Web Development Squad </div>
		<script>
			function checkPassword(){
				var pass1 = document.getElementById('pass1');
				var pass2 = document.getElementById('pass2');
				if(pass1.value!=pass2.value){
					pass1.value='';
					pass2.value='';
					alert("Passwords don't match. Pleas re-enter.");
				}
			}
		</script>
	</body>
</html>