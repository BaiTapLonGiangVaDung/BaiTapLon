<?php
include ("./PHPmailer/src/PHPMailer.php");
include ("./PHPmailer/src/Exception.php");
include ("./PHPmailer/src/OAuth.php");
include ("./PHPmailer/src/POP3.php");
include ("./PHPmailer/src/SMTP.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
try{
    $mail -> SMTPDebug = 2;
    $mail->isSMTP();                            // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username = 'dungnv620@wru.vn';          // SMTP username
    $mail->Password = 'dungpro123'; // SMTP password
    $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                          // TCP port to connect to

    $mail->setFrom('dungkt@wru.vn');
    $mail->addReplyTo('info@example.com', 'CodexWorld');
    $mail->addAddress('dungkt@wru.vn','thay');   // Add a recipient
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    $mail->isHTML(true);  // Set email format to HTML
    $mail->Subject = 'Email from Localhost';
    $mail->Body    ='Bài tập về nhà <br>'.'Họ Tên: Nguyễn Việt Dũng <br>'.'Lớp: 58TH3';
    $mail->send();
    echo 'Message has been sent';
}
catch(Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 
?>