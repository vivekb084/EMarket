<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{

					$con=mysqli_connect("localhost","root","","gawdsin_emarket");
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
					$rollno=test_input($_POST["rollno"],$con);
$password=test_input($_POST["password"],$con);

					if($rollno=="123456" && $password=="gonnarock**##")
					{
						$_SESSION['username']=$rollno;
						$_SESSION['password']=$password;
						echo '<META HTTP-EQUIV="Refresh" Content="0; URL=productsapprove.php">';
					}
					else
					{
					$result=mysqli_query($con,"SELECT * FROM userid WHERE rollno='$rollno' AND password='$password'");
					$count=mysqli_fetch_array($result);
					if($count)
					{
					$_SESSION['username']=$rollno;
					$_SESSION['name']=$count['name'];
					echo '<META HTTP-EQUIV="Refresh" Content="0; URL=dash.php">';    
					exit();
					}
					else
					{
					session_destroy();
					 $message="Wrong userID or password";
					 echo '<script>alert('.'"'.$message.'"'.');</script>';
					echo '<META HTTP-EQUIV="Refresh" Content="0; URL=register.php">';    
					exit();
					}
 					
					}
					

}
function test_input($data,$con)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     $data = mysqli_real_escape_string($con,$data);
     return $data;
}
 



?>