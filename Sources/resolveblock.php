<?php
	$UserName=trim($_POST['UserNameOther']);
	require('connection.php');
	$sql="update taikhoan SET MaChucVu = 3 WHERE TenDangNhap = '$UserName';";
	if(mysqli_query($con, $sql)){
		echo 1;
	}
 ?>