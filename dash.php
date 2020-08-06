<?php
session_start();
if(!empty($_SESSION['username']))
{
$name=$_SESSION['name'];
$username=$_SESSION['username'];
function url() {
		$rand = rand(1,1000000);
		return $rand;
		}
		$_SESSION['username']=$username;
		$_SESSION['logout']=$logout=url();
$con=mysqli_connect("localhost","root","","gawdsin_emarket") or die(mysqli_error());
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
					
			$result=mysqli_query($con,"SELECT * FROM productinfo where (added = '$username' AND deleted=0) ");
			$n = mysqli_num_rows($result);
			$row = mysqli_fetch_array($result);

}
else{
session_destroy();
unset($_SESSION['username']);
unset($_SESSION['name']);
			$message="login First";
 header('Location: register.php?valid_auth=login First');
	

}
					
					
					
		
			//$count=mysqli_fetch_array($result,MYSQLI_NUM);
			//$a=array("22");
			//while($count=mysqli_fetch_array($result)){
			//array_push($a,$count['ID']);
			
			//}
	//		echo json_encode($arr);	
		//	print_r($arr);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Seller Dashboard</title>
		<link href="css/dashboard.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="dashmenu">
			<a class="add" href="addproduct.php">Add Product</a>
			<a class="add" href="products.php">All Products</a>
			<div id="seller"><span id="sellername" onclick="menu();">Hi, <?php echo $_SESSION['name'];?>&#x25BC;</span>
				<div id="log">
					<li><a href="logout.php?logout=<?php echo $logout;?>"><span data-hover="Log Out">Log Out</span></a>
				</div>
			</div>
		</div>
		<div id="products">
			<h2>Your Products</h2>
			<!--<li><a href="sfd">Product 1</a><a class="delete" href="delete1">Delete</a>
			<li><a href="sfd">Product 2</a><a class="delete" href="delete1">Delete</a>-->
			<?php
				for($i=0;$i<$n;$i++)
				{echo "<li><a href=editproduct.php?productid=$row[productid]>$row[productname]</a><a class='delete' href='delete.php?productid=$row[productid]'>Delete</a>";
				$row = mysqli_fetch_array($result);	}?>
			
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