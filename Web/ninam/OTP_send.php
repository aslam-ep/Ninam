<?php
	/*
	Developed By Hector(aslamepnd7@gmail.com)
	*/
	$res=array();
	$email=$_GET['email'];
	$otp=$_GET['otp'];	

						require("class.phpmailer.php");
						$mail = new PHPMailer(); // create a new object
						$mail->IsSMTP(); // enable SMTP
						$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
						$mail->SMTPAuth = true; // authentication enabled
						$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
						$mail->Host = "smtp.gmail.com";
						$mail->Port = 587;
						$mail->Username = "ssmalunmi@gmail.com";  // SMTP username gmail username
						$mail->Password = "aaars12345"; // SMTP password   gmail password
						
						$mail->From = "ssmalunmi@gmail.com"; // from email address
						//$mail->FromName = "Username & Password"; //from name
						   
						$mail->AddAddress($email);        
						
						$mail->WordWrap = 10000;                                 
						$mail->IsHTML(true);                          
						
						$mail->Subject = "NINAM - BLOOD BANK";
						$mail->Body    = "OTP: ".$otp;
						$mail->AltBody = "Secure this!!";
						if($mail->Send())
						{
							$res['status']="1";
						}
						else
						{
							$res['status']="0";
						}
	echo json_encode($res);
?>						