<?php
include 'library.php';
include 'classes/class.phpmailer.php';
session_start();
if(!empty($_SESSION['username']))
{
$username=$_SESSION['username'];

}
else
{
session_destroy();
header("location:login.php?message=Login First!");
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$productname=test_input($_POST['productname']);
$sellerprice=test_input($_POST['price']);
$description=test_input($_POST['description']);
$cat = test_input($_POST['category']);


					$con=mysqli_connect("localhost","root","","gawdsin_emarket");
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
					$result=mysqli_query($con,"SELECT * FROM userid WHERE rollno='$username'");
					$count=mysqli_fetch_array($result);
					if($count['uploadflag']==0)
					{
					$message="Image is not uploaded";
					echo '<script>alert('.'"'.$message.'"'.');</script>';
					}
					else{
					$productid="";
					$productid.=$username;
					$productid.="_";
					$productid.=$count['productcount']+1;
					
					mysqli_query($con,"INSERT INTO productinfo(productname,sellerprice,description,bid,added,productid,sold,approved,category)
					VALUES ('$productname','$sellerprice','$description','0','$username','$productid','1',0,'$cat')") or die(mysql_error());
					
					mysqli_query($con,"UPDATE userid SET productcount=$count[productcount]+1 WHERE rollno=$username");
					
					mysqli_query($con,"UPDATE userid SET uploadflag=0 WHERE rollno=$username");
					$details = mysqli_query($con,"select * from userid where rollno = '$username'");
					$detrow = mysqli_fetch_array($details);
					$emailid = $detrow['email'];
					$name = $detrow['name'];	
					send_mail($emailid,$productname,$sellerprice,$description,$name);
					$mess="Product Uploaded! It will be added after a review within 2hrs";
					echo '<script>alert('.'"'.$mess.'"'.');</script>';
					 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=dash.php">';
					
					
					
					}
}
function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
   
     return $data;
}
function send_mail($email,$productname,$sellerprice,$description,$name)
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
	
	$mail->Subject = "Product Upload Information"; //Subject od your mail
	$mail->AddAddress($email,$name); //To address who will receive this email
	
$mail->Body ='Hi '.$name.',Your product '.$productname.' was successfully uploaded <a href = "http://emarket.gawds.in.">here</a> and is in review process.<br/>It will be uploaded within 2 hours.<br/><a href = "http://emarket.gawds.in">Visit this page to view.</a>Reply to this mail for any queries.<br><br>Regards,<br>G.A.W.D.S';
		
	$send = $mail->Send(); //Send the mails
	
}
?>