<?php
session_start();
if($_SESSION['username']=="123456" && $_SESSION['password']=="gonnarock**##")
					{
					//echo $_GET['productid'];
					$con=mysqli_connect("localhost","root","","gawdsin_emarket");
					if (mysqli_connect_errno())
					{
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
					$productid=$_GET['productid'];
					mysqli_query($con,"UPDATE productinfo SET approved=1 WHERE productid='$productid'");
					echo "Approved";
						
					}
					
					
else
{
session_destroy();
					 //$message="Wrong userID or password";
					 header("location:register.php?valid_auth=Wrong userID or password");
					//echo '<META HTTP-EQUIV="Refresh" Content="0; URL=register.php?valid_auth=Wrong userID or password">';  
}

?>