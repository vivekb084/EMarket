<?php
$con=mysqli_connect("localhost","r̥oot","","gawdsin_emarket") or die(mysqli_error());
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
					

if($_POST)
{
$q=$_POST['search'];
$sql_res=$result=mysqli_query($con,"SELECT * FROM productinfo  ");
while($row=mysqli_fetch_array($sql_res))
{
$name=$row['productname'];

?>
<div class="show" align="left">
<span class="name"><?php echo $final_username; ?></span>&nbsp;<br/><?php echo $final_email; ?><br/>
</div>
<?php
}
}
?>