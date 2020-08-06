<?php
$con=mysqli_connect("localhost","root","","my_db");
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
			$pid = array();		
			$result=mysqli_query($con,"SELECT * FROM productinfo order by ID desc ");
			$n = mysqli_num_rows($result);

			 
			for($i=0;$i<$n;$i++)
			{
                         $row = mysqli_fetch_array($result);
                         $pid['$i'] = $row['productid'];
                          echo $row['productname'];
                         }
			echo json_encode($pid);

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Gawds E-Marketing Initiative</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/style.css" rel="stylesheet">
  </head>
  <body>
	<div id="topnav">
		<a class="navbutton" href="index.html#buyhow">How to Buy</a>
		<a class="navbutton" href="index.html#sellhow">How to Sell</a>
		<a class="navbutton" href="index.html#aboutus">About Us</a>
	</div>
		<div id="adplace">
			<div class="ad">
				<div class="title"><span>1 year old Canon Camera with 18-55mm lens</span></div>
				<div class="photo"><img src="images/canon.jpg"/></div>
				<img src="images/stamp_sold.png" id="stamp"/>
				<div class="traffic">
					<li><span>Status</span>
					<li>
					<li>
					<li>
				</div>
				<div class="price">Best Buy @ Rs.25000</div>
			</div>
			
		</div>
		<div id="item">
			<span id="close">x</span>
			<div class="pic"><img src="images/canon.jpg"/></div>
			<div class="description">
				<div id="name">Product Name</div>
				<div id="details">
				Description of product is here. How old is product. What brand product is of? What is the state of product? Is there any defect?
				All such kind of information is available here.
				</div>
				<div id="cost">Best buy @ Rs. 25000</div><span class="bid">Bid Now</span>
				<br><hr/><br>
				<div id="contact">
					<h4>Contact Details of Seller</h4>
					<span id="seller">Harsh Choudhary</span><br>
					<span id="phone">8901333191</span><br>
					<span id="address">Room No 451, A-Block, Hostel No 10</span>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script>
			$('body').on('click','.ad',function(){
				$('#item').css('z-index','2');
				$('#item').css('opacity','1');
				$('#adplace').css('opacity','0.3');
			});
			$('#item #close').click(function(){
				$('#item').css('z-index','-1');
				$('#item').css('opacity','0');
				$('#adplace').css('opacity','1');
			});
			$(document).ready(function(){
				var
				$('#adplace').append('<div class="ad"><div class="title"><span>1 year old Canon Camera with 18-55mm lens</span></div><div class="photo"><img src="images/canon.jpg"/></div><img src="images/stamp_sold.png" id="stamp"/><div class="price">Best Buy @ Rs.25000</div></div>');
				$.get( "ajax/test.html", function( data ) {
					$( ".ad .title" ).html( data );
					alert( "Load was performed." );
				});
			});
		</script>
  </body>
</html>