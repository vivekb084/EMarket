<?php
session_start();
if($_SESSION['username']!="123456" && $_SESSION['password']!="gonnarock**##")
{
					$message="Wrong userID or password";
					 echo '<script>alert('.'"'.$message.'"'.');</script>';
					echo '<META HTTP-EQUIV="Refresh" Content="0; URL=register.php">'; 
}
else
{
function url() {
		$rand = rand(1,1000000);
		return $rand;
		}
		//$_SESSION['username']=$usernam
		$_SESSION['logout']=$logout=url();
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/style.css" rel="stylesheet">
  </head>
  <body>
  <a href="logout.php?logout=<?php echo $logout;?>"><span data-hover="Log Out">Log Out</span></a>
	<div id="topnav">
		<a class="navbutton" href="index.html#buyhow">How to Buy</a>
		<a class="navbutton" href="index.html#sellhow">How to Sell</a>
		<a class="navbutton" href="index.html#aboutus">About Us</a>
	</div>
		<div id="adplace">
			
		</div>
		<div id="item">
			<span id="close">x</span>
			<div class="pic"><img class="loading" src="images/loading.gif"/></div>
			<div class="description">
				<div id="name"><img class="loading" src="images/loading.gif"/></div>
				<div id="details"><img class="loading" src="images/loading.gif"/></div>
				<div id="cost"><img class="loading" src="images/loading.gif"/></div><span class="bid" onclick="approve();">Approve</span>
				<br><hr/><br>
				<div id="contact">
					<h4>Contact Details of Seller</h4>
					<span id="seller"><img class="loading" src="images/loading.gif"/></span><br>
					<span id="phone"><img class="loading" src="images/loading.gif"/></span><br>
					<span id="address"><img class="loading" src="images/loading.gif"/></span>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script>
			var product_id;
			function approve(){
				$.get( "productsapprove_reply.php?productid="+product_id, function( data ) {
										console.log('hey');
										$('#item .bid').html(data);
				});
			}
			$('body').on('click','.ad',function(){
				$('#item').css('z-index','2');
				$('#item').css('opacity','1');
				$('#adplace').css('opacity','0.3');
				product_id = $('.pid', this).text();
				$('#item .pic').html("<img src='upload/"+product_id+".jpg'/>");			
				$.get( "product_reply.php?productid="+product_id+"&query=productname", function( data ) {
					$('#item .description #name').html(data);
				});
				$.get( "product_reply.php?productid="+product_id+"&query=description", function( data ) {
					$('#item .description #details').html(data);
				});
				$.get( "product_reply.php?productid="+product_id+"&query=sellerprice", function( data ) {
					$('#item .description #cost').html('Best buy @ Rs. '+data);
				});
				$.get( "contact_reply.php?productid="+product_id+"&query=name", function( data ) {
					$('#item #contact #seller').html(data);
				});
				$.get( "contact_reply.php?productid="+product_id+"&query=mobno", function( data ) {
					$('#item #contact #phone').html(data);
				});
				$.get( "contact_reply.php?productid="+product_id+"&query=roomno", function( data ) {
					$('#item #contact #address').html('Room No '+data);
				});
				$.get( "contact_reply.php?productid="+product_id+"&query=blockno", function( data ) {
					$('#item #contact #address').append(', Block '+data);
				});
				$.get( "contact_reply.php?productid="+product_id+"&query=hostelno", function( data ) {
					$('#item #contact #address').append(', Hostel No '+data);
				});
			});
			$('#item #close').click(function(){
				$('#item').css('z-index','-1');
				$('#item').css('opacity','0');
				$('#adplace').css('opacity','1');
				$('#item .description #name').html('<img class="loading" src="images/loading.gif"/>');
				$('#item .description #details').html('<img class="loading" src="images/loading.gif"/>');
				$('#item .description #cost').html('<img class="loading" src="images/loading.gif"/>');
				$('#item #contact #seller').html('<img class="loading" src="images/loading.gif"/>');
				$('#item #contact #phone').html('<img class="loading" src="images/loading.gif"/>');
				$('#item #contact #address').html('<img class="loading" src="images/loading.gif"/>');
			});
			
			$(document).ready(function(){
				var products;
				
				$.get( "getproductsapprove.php", function( data ) {
					products = $.parseJSON(data);
					for(var i=0;i<products.length;++i)
				$('#adplace').append('<div class="ad"><div class="title"><span><img class="loading" src="images/loading.gif"/></span></div><div class="photo"><img class="loading" src="images/loading.gif"/></div><img src="images/stamp_sold.png" id="stamp"/><div class="price"><img class="loading" src="images/loading.gif"/></div><div class="pid"></div></div>');
				
					for(var i=0;i<products.length;++i){
						loadAds(i+1,products[i]);
					}					
				});
			});
			
			function loadAds(i,productid){
				$.get( "product_reply.php?productid="+productid+"&query=productname", function( data ) {
					$( ".ad:nth-child("+i+") .title span" ).html( data );
				});
				$.get( "product_reply.php?productid="+productid+"&query=sellerprice", function( data ) {
					$( ".ad:nth-child("+i+") .price" ).html( 'Best buy at Rs. '+data );
				});
				$( ".ad:nth-child("+i+") .photo" ).html("<img src='upload/"+productid+".jpg'/>");
				$( ".ad:nth-child("+i+") .pid" ).html(productid);
			}
		</script>
  </body>
</html>