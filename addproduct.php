<?php
/*session_start();
if(!empty($_SESSION['username']))
{

$name=$_SESSION['name'];
$username=$_SESSION['username'];
echo $username;
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
					
			$result=mysqli_query($con,"SELECT * FROM productinfo where (added = '$username' AND deleted=0) ") or die(mysqli_error());
			$n = mysqli_num_rows($result);
			$row = mysqli_fetch_array($result);

}
else{
session_destroy();
unset($_SESSION['username']);
unset($_SESSION['name']);
			$message="login First";
 header('Location: register.php?valid_auth=login First');
	

}*/
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Add Product Details</title>
		<link href="css/register.css" rel="stylesheet">
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

		<div id="telling">Add product details below</div>
		<form id="upload_form" method="post" action="addproduct_db.php" enctype="multipart/form-data">
			<input type="text" name="productname" placeholder="Products brand, name and model number, if any" required><br>
			<input type="number" name="price" placeholder="Price at which you want to sell" required><br>
			
			<h2> Enter Product Description</h2>
			
			<textarea name="description"></textarea><br/>
			
                         <div>
            <h2>Enter product type</h2>
            <select>
  <option value="electronics">Electronics</option>
  <option value="utility">Utility</option>
  <option value="vehicle">Vehicle</option>
  <option value="others">Others</option>
</select>
</div>
            <div>
				<h2>Upload the image of the product</label></h2>
                <input type="file" name="file" id="image_file" onChange="fileSelected();" required />
				<input type="button" class="submit" value="Upload" onClick="startUploading();" />
<marquee>Please Click the upload button after selecting the image. Image Size should be less than 2Mb!</marquee>
            <div id="fileinfo">
                        <div id="filename"></div>
                        <div id="filesize"></div>
                        <div id="filetype"></div>
                        <div id="filedim"></div>
                    </div>
                    		
                    		<div id="error"></div>
                    		<div id="error2"></div>
				<div id="abort"></div>
				<div id="warnsize"></div>
				
				
				
				<img id="preview" />
				</br>
				<div id="progress_info">
					<div id="progress"></div>
					<div id="progress_percent">&nbsp;</div>
					<div class="clear_both"></div>
					<div>
						<div id="speed">&nbsp;</div>
						<div id="remaining">&nbsp;</div>
						<div id="b_transfered">&nbsp;</div>
						<div class="clear_both"></div>
					</div>
					<div id="upload_response"></div>
				</div>
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
				<script src="js/upload_image.js"></script>
			</body>
</html>