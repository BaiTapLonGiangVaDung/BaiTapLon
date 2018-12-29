<?php
	$UserName=trim($_POST['UserNameOther']);
	$con=mysqli_connect('localhost','root','123456','webhinhanh');
	if(!$con){
		die('ket noi that bai'.mysqli_connect_error());
	}
	$sql="update taikhoan SET MaChucVu = 3 WHERE TenDangNhap = '$UserName';";
	if(mysqli_query($con, $sql)){
		echo 1;
	}
 ?>