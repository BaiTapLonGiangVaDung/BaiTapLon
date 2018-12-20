<?php
	$idUserName=trim($_POST['idUserName']);
	$idImage=trim($_POST['idImage']);
	$comment=$_POST['comment'];
	$con=mysqli_connect('localhost','root','123456','webhinhanh');
	if(!$con){
		die('ket noi that bai'.mysqli_connect_error());
	}
	$sql="insert into `webhinhanh`.`binhluan` (`MaTaiKhoan`, `MaHinhAnh`, `BinhLuan`) value ('$idUserName', '$idImage', '$comment');";
	if(mysqli_query($con, $sql)){
		echo 1;
	}
 ?>