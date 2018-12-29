<?php
	session_start();
	$username=trim($_POST['username']);
	$password=trim($_POST['password']);
	$con=mysqli_connect('localhost','root','123456','webhinhanh');
	if(!$con){
		die('ket noi that bai'.mysqli_connect_error());
	}
	$sql="select* from taikhoan where TenDangNhap='$username'";
	$result= mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
	if (mysqli_num_rows($result)==1){
		if (password_verify($password, $row['MatKhau'])) {
			if ($row["Active"]==1) {
				$_SESSION['UserName']=$username;
				$_SESSION['MaTaiKhoan']=$row['MaTaiKhoan'];
				$_SESSION['ChucVu']=$row['MaChucVu'];
				echo 1;
			}
			else
				echo "Tài khoản của bạn chưa được kích hoạt,vui lòng kiểm tra gmail để xác nhận";
		}else{
			echo "Mật khẩu không đúng";
		}

	}else
		echo "Tài khoản không tồn tại";
	$con->close();
 ?>