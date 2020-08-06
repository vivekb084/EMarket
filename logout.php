<?php session_start();
$page = $_SERVER['PHP_SELF'];
 $sec = "1";
 header("Refresh: $sec; url=$page");
$rand=$m="";
if(isset($_GET['logout']))
	   {
	   
	   $m=$_GET['logout'];
	   if($m==$_SESSION['logout'])
	   {
	   
	  
	 if(isset($_SESSION['username'])){
       $usernam = $_SESSION['username'];}
	   echo $usernam;
       unset($_SESSION['username']);
	   unset($_SESSION['name']);
	   echo "<style>body{text-align:center; font-family:calibri; font-weight:bold; font-size: 1.3em; }</style><span>,&nbsp; You are logged out</span>";
	   if(isset($_SESSION['username'])){
		header("location:dash.php");
	   }
	   session_destroy();
	   
	   }
	   
	   else
		header("location:register.php");
	   }
else
	 {
	 header("location:register.php");
	 
	 }
?>

