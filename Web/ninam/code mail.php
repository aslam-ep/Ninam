<?php   
	/*
	Developed By Hector(aslamepnd7@gmail.com)
	*/
	require("class.phpmailer.php");

	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587;
	$mail->Username = "";  // SMTP username gmail username
	$mail->Password = ""; // SMTP password   gmail password


	$mail->From = ""; // from email address
	$mail->FromName = ""; //from name
	 
	//$mail->AddAddress($email1);
	//if(!empty($email2)){
		//$mail->AddAddress($email2);
	//}
	//$mail->AddAddress("haneefapkv@gmail.com");  
	$mail->AddAddress($email);                   // to address 
	//$mail->AddReplyTo($email);
	//$mail->AddReplyTo("$remail2");

	//$mail->WordWrap = 50;                                 // set word wrap to 50 characters
	//$mail->AddAttachment("resume/$resume");         // add attachments
	//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
	$mail->IsHTML(true);                                  // set email format to HTML

	$mail->Subject = "UserName and password";
	$mail->Body    = "Your username is:$username <br> password : $password ,<br/>Parent username is:$username1 <br> password : $password1";
	$mail->AltBody = "";

	if(!$mail->Send())
	{
		echo 'not send';
	   ?>
		<script type="text/javascript">
		alert("your registration  not succesfully completed");
		window.location="mainadminhome.php";
		</script>
	   
	   <?php
	}
	else
	{
		echo ' send';
		?>
		<script type="text/javascript">
		alert("your registration succesfully completed");
		window.location="mainadminhome.php";
		</script>
	   
	   <?php
	}
?>	