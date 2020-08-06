<?php
			$con=mysqli_connect("localhost","root","","gawdsin_emarket");
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			$pid = array();		
			$result=mysqli_query($con,"SELECT * FROM productinfo where approved=0");
			$n = mysqli_num_rows($result);
			$row = mysqli_fetch_array($result);
			for($i=0;$i<$n;$i++)
			{$pid[$i] = $row['productid'];
			$row = mysqli_fetch_array($result);
			}
			echo json_encode($pid);
?>