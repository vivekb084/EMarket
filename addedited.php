<?php
session_start();
if(empty($_SESSION['username']))
{
					session_destroy();
					$message="login First";
					 echo '<script>alert('.'"'.$message.'"'.');</script>';
					 //header("location:register.php");
					echo '<META HTTP-EQUIV="Refresh" Content="0; URL=register.php">';
}
else
{
if(empty($_COOKIE['productid']))
echo "ERROR!";
$productid= $_COOKIE['productid'];

$productname = test_input($_POST['productname']);
$sellerprice =test_input($_POST['price']);
$description = test_input($_POST['description']);
$con=mysqli_connect("localhost","root","","gawdsin_emarket");
$q=mysqli_query($con,"UPDATE productinfo set productname='$productname',sellerprice='$sellerprice',description='$description',approved=0
					where productid= '$productid'") or die(mysql_error());
					}
function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
?>
<html>
<body>
Successfully edited. Sit back and relax till we review your added details.<br/>
<a href="dash.php">Go Back</a> Or <a href=products.php>Buy products</a>
</body>
</html>