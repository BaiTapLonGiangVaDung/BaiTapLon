<?php
	session_start();
	$username=trim($_POST['username']);
	$password=trim($_POST['password']);
	$con=mysqli_connect('localhost','root','123456','webhinhanh');
	if(!$con){
		die('ket noi that bai'.mysqli_connect_error());
	}
	$sql="select* from taikhoan where TenDangNhap='$username' and MatKhau='$password'";
	$result= mysqli_query($con, $sql);
	if (mysqli_num_rows($result)==1){
		$_SESSION['UserName']=$username;
		echo 1;

	}else
		echo "Tài khoản hoặc mật khẩu không đúng";
	$con->close();
 ?>