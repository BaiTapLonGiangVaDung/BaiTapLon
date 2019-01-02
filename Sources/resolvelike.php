<?php
	$idUserName=trim($_POST['idUserName']);
	$idImage=trim($_POST['idImage']);
	require('connection.php');
	$sql="select * from thich where MaHinhAnh=$idImage and MaTaiKhoan=$idUserName";
	$result=mysqli_query($con, $sql);
	if(mysqli_num_rows($result)==1){
		$sqldelete="delete FROM thich WHERE MaHinhAnh=$idImage and MaTaiKhoan=$idUserName; ";
		if(mysqli_query($con, $sqldelete)){
			echo 0;
		}
	}else{
		$sqlInsert="insert INTO thich (MaTaiKhoan, MaHinhAnh, TrangThai) VALUES ('$idUserName', '$idImage', '1'); ";
		if(mysqli_query($con, $sqlInsert)){
			echo 1;
		}
	}
 ?>