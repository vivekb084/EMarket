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
require_once __DIR__ . '/db_connect.php';
$db = new DB_CONNECT();

$productid = $_GET['productid'];

setcookie("productid",$productid);
/*$stmt = $db->prepare("Select * from productinfo where productid=:prodid"); 
$stmt->bindParam(':prodid', $productid);
$stmt->execute();*/
$con=mysqli_connect("localhost","root","","gawdsin_emarket") or die(mysqli_error());
$q = mysqli_query($con,"Select * from productinfo where productid='$productid'");
$row = mysqli_fetch_array($q);
$pname = $row['productname'];
$pprice= $row['sellerprice'];
$pdesc = $row['description'];
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Edit Product Details</title>
		<link href="css/register.css" rel="stylesheet">
		<script src="js/upload_image.js"></script>

	</head>
	<body>
		<div id="dashmenu">
			<a class="add" href="dash.php">Back to Dashboard</a>
			<a class="add" href="products.php">All Products</a>
			<div id="seller"><span id="sellername" onclick="menu();">Hi, <?php echo $_SESSION['name'];?>&#x25BC;</span>
				<div id="log">
					<li><a href="logout.php?logout=<?php echo $logout;?>"><span data-hover="Log Out">Log Out</span></a>
				</div>
			</div>
		</div>
		<div id="telling">Edit product details below</div>
		<form id="upload_form" method="post" action= "addedited.php" enctype="multipart/form-data">
			<input type="text" name="productname" placeholder=<?php echo $pname; ?>  value = <?php echo $pname; ?> required><br>
			<input type="text" name="price" placeholder=<?php echo $pprice; ?> value = <?php echo $pprice; ?> required><br>
			
			<h2> Edit Product Description</h2>
			
			<textarea name="description"><?php echo $pdesc; ?></textarea><br/>
			
            <div>
				
                		<input type="submit" class="submit" name="submit" value="Submit">
			</div>
		</form>
		
</div>
<script>
			var menu_flag=false;
			function menu(){
				if(!menu_flag){
					document.getElementById('log').style.display='block';
					menu_flag=true;
				}
				else{
					document.getElementById('log').style.display='none';
					menu_flag=false;
				}
			}
		</script>
			</body>
			</html>