<?php
	$idUserName=trim($_POST['idUserName']);
	$idImage=trim($_POST['idImage']);
	$comment=$_POST['comment'];
	require('connection.php');
	$sql="insert into `webhinhanh`.`binhluan` (`MaTaiKhoan`, `MaHinhAnh`, `BinhLuan`) value ('$idUserName', '$idImage', '$comment');";
	if(mysqli_query($con, $sql)){
		echo 1;
	}
 ?>