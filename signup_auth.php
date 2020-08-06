<?php

include 'library.php';
include 'classes/class.phpmailer.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$name=test_input($_POST["name"]);
$password=test_input($_POST["password"]);
$rollno=test_input($_POST["rollno"]);
$email=test_input($_POST["email"]);
$mobno=test_input($_POST["mobno"]);
$hostelno=test_input($_POST["hostelno"]);
$blockno=test_input($_POST["blockno"]);
$roomno=test_input($_POST["roomno"]);

					$con=mysqli_connect("localhost","root","","gawdsin_emarket") or die(mysqli_error());
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
					$result=mysqli_query($con,"SELECT * FROM userid WHERE rollno='$rollno'");
					$count=mysqli_fetch_array($result);
					if(!$count['rollno']){
					$x = mysqli_query($con,"INSERT INTO userid (name,password,rollno,email,mobno,hostelno,blockno,roomno)
					VALUES ('$name','$password','$rollno','$email','$mobno','$hostelno','$blockno','$roomno')") or die(mysqli_error());
					
					$messag="Registered Successful";
					send_mail($email,$name);
					echo '<script>alert('.'"'.$messag.'"'.');</script>';
					echo '<META HTTP-EQUIV="Refresh" Content="0; URL=register.php">';    
					exit();
 					//header('Location:login.php');
					}
					else
					 {
					 $message="Roll no allready exisit";
					 echo '<script>alert('.'"'.$message.'"'.');</script>';
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=register.php">';    
					exit();
 					
 					//header('location:signup.php');
					 }

}
function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
function send_mail($email,$name)
{
//echo "$email,$productname,$sellerprice,$description,$name lalalallalala";
$mail	= new PHPMailer; // call the class 
	$mail->IsSMTP(); 
$mail->IsHTML(true);

	$mail->Host = SMTP_HOST; //Hostname of the mail server
	$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
	$mail->SMTPAuth = true; //Whether to use SMTP authentication
	$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
	$mail->Password = SMTP_PWORD; //Password for SMTP authentication
	$mail->AddReplyTo("gawds@gawds.in", "Reply name"); //reply-to address
	$mail->SetFrom("gawds@gawds.in", "TEAM G.A.W.D.S"); //From address of the mail
	
	$mail->Subject = "Congratulations!"; //Subject od your mail
	$mail->AddAddress($email,$name); //To address who will receive this email
	
$mail->Body ='Hi '.$name.',<br/> Welcome to the world of G.A.W.D.S.<br/>You just registered on our emarket initiative. Now, you have the platform to buy and sell old stuff within our campus in NIT Kurukshetra.<br/> To add a product to sell, login at http://emarket.gawds.in/register.php and upload your product.<br/> Happy Shopping :)<br/> Regards,<br/>G A W D S';
		
	$send = $mail->Send(); //Send the mails
	
}


?>