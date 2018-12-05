<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		include ("store/PHPMailer.php");
		include ("store/Exception.php");
		include ("store/OAuth.php");
		include ("store/POP3.php");
		include ("store/SMTP.php");
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;
		$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
		try {
		    //Server settings
		    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = 'giangtx13@gmail.com';                 // SMTP username
		    $mail->Password = '01673548981';                           // SMTP password
		    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 587;                                    // TCP port to connect to
		    //Recipients
		    $mail->addAddress('Dungnv620@wru.vn', 'dung');
		    $mail->SetFrom('Dungnv620@wru.vn');  // Add a recipient              // Name is optional
		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Send Email from Localhost';
		    $mail->Body    = 'Hello Teacher! <br>'."From: hanoi.aptech2018@gmail.com" . "\r\n" ."CC: somebodyelse@example.com";
		    $mail->send();
		    echo 'Message has been sent';
		} catch (Exception $e) {
		    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}
	 ?>
</body>
</html>

