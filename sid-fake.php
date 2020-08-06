<?php

include 'library.php';
include 'classes/class.phpmailer.php';


send_mail("siddhant180wins@gmail.com","SiDRinkss") or die("Not sent!");
echo "Sent!";

function send_mail($email,$name)
{
//echo "$email,$productname,$sellerprice,$description,$name lalalallalala";
$mail	= new PHPMailer; // call the class 
	$mail->IsSMTP(); 
$mail->IsHTML(true);
$mail->SMTPDebug = 1;
	$mail->Host = SMTP_HOST; //Hostname of the mail server
	$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
	$mail->SMTPAuth = true; //Whether to use SMTP authentication
	$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
	$mail->Password = SMTP_PWORD; //Password for SMTP authentication
	$mail->AddReplyTo("products@bigbasket.com", "BigBasket"); //reply-to address
	$mail->SetFrom("products@bigbasket.com", "BigBasket"); //From address of the mail
	
	$mail->Subject = "Product Upload Information"; //Subject od your mail
	$mail->AddAddress($email,$name); //To address who will receive this email
	
$mail->Body ='Hi '.$name.',Your product  was successfully uploaded <a href = "http://emarket.gawds.in.">here</a> and is in review process.<br/>It will be uploaded within 2 hours.<br/><a href = "http://emarket.gawds.in">Visit this page to view.</a>Reply to this mail for any queries.<br><br>Regards,<br>G.A.W.D.S';
		
	$send = $mail->Send(); //Send the mails
	
}
?>
