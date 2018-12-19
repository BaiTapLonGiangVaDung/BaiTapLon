<?php
	include ("store/PHPMailer.php");
	include ("store/Exception.php");
	include ("store/OAuth.php");
	include ("store/POP3.php");
	include ("store/SMTP.php");
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	$username=trim($_POST['username']);
	$password=trim($_POST['password']);
	$email= trim($_POST['email']);
	$Verification= md5(rand(0,1000));
	/*function generate_token() {
        return md5(microtime().mt_rand());
    }

    $options = [
        'salt' => generate_token(),
        'cost' => 12
    ];*/
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	try {
	    //Server settings
	    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
	    $mail->isSMTP();                                      // Set mailer to use SMTP
	    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;                               // Enable SMTP authentication
	    $mail->Username = 'giangnt621@wru.vn';                 // SMTP username
	    $mail->Password = 'slytherin123';                           // SMTP password
	    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	    $mail->Port = 587;                                    // TCP port to connect to
	    //Recipients
	    $mail->addAddress($email, $username);
	    $mail->SetFrom($email);  // Add a recipient              // Name is optional
	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'Send Email from Localhost';
	    $mail->Body    = 'Hello '.$username.'! <br>'.'Bạn là thành viên mới nhất của Slytherin, một cộng đồng chia sẻ ảnh miễn phí.Chúng tôi rất vui khi có bạn và nóng lòng muốn xem ảnh của bạn.<br>'.'Hãy xác minh địa chỉ email của bạn bằng cách nhấp vào liên kết dưới đây <br>'."http://localhost:8081/laptrinh/verify.php?email=$email&verify=$Verification <br>".'Dữ liệu truy cập của bạn:<br>'.'Địa chỉ email: '.$email.' <br>'.'Tên người dùng: '.$username.' <br>'."From: hanoi.aptech2018@gmail.com" . "\r\n" ."CC: somebodyelse@example.com";
	} catch (Exception $e) {
	    echo 'Không thể gửi mail';
	}
	if(empty($email) || empty($password) || empty($username)){
        echo "Vui lòng điền đủ thông tin";
    }else{
    	$con=mysqli_connect('localhost','root','','webhinhanh');
		if(!$con){
			die('ket noi that bai'.mysqli_connect_error());
		}
		$sql="insert into taikhoan(TenDangNhap, MatKhau, Email,Active,Verification) value('$username','$hash','$email',0,'$Verification')";
		if(mysqli_query($con, $sql)){
			echo 1;
			$mail->send();
		}else
			echo "Tên tài khoản có thể bị trùng vui lòng nhập tài khoản khác";
    }
	
 ?>