<?php
echo $_SESSION['username'];
if(!isset($_SESSION['username']))
{
$con=mysqli_connect("localhost","root","","gawdsin_emarket");
$productid = $_GET['productid'];
echo $_SESSION['username'];
$q = mysqli_query($con,"UPDATE productinfo SET deleted=1 where productid='$productid'");
					$message="Deleted";
					 echo '<script>alert('.'"'.$message.'"'.');</script>';
					 //header("location:register.php");
					echo '<META HTTP-EQUIV="Refresh" Content="0; URL=dash.php">';
}
else
{
					$message="login First";
					 
					 header("location:register.php?valid_auth=Login First!");
					//echo '<META HTTP-EQUIV="Refresh" Content="0; URL=register.php">';
}

?>