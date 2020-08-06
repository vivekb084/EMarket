<?php
				$productid=$_GET['productid'];
				$query=$_GET['query'];

	
					$con=mysqli_connect("localhost","root","","gawdsin_emarket");
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
					//echo "ProductID = $productid wqeqweqeq";
					//echo $query;
					$result1=mysqli_query($con,"SELECT added FROM productinfo WHERE productid='$productid'") or die(mysqli_error());
					$count1=mysqli_fetch_array($result1) or die(mysqli_error());
					$x = $count1['added'];
				//	echo $x;
					$result=mysqli_query($con,"SELECT $query FROM userid WHERE rollno='$x'");
					$count=mysqli_fetch_array($result);
					//print_r($count);
					echo $count[$query];


?>