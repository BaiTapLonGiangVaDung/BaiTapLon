<?php
	$idUserName=trim($_POST['idUserName']);
	$hoten=trim($_POST['hoten']);
	$gioitinh=trim($_POST['gioitinh']);
	$thanhpho=trim($_POST['thanhpho']);
	$quocgia=trim($_POST['quocgia']);
	$ngaysinh=trim($_POST['ngaysinh']);
	require('connection.php');
	$sql="update taikhoan set HoTen = '$hoten', ThanhPho = '$thanhpho', QuocGia = '$quocgia', GioiTinh = '$gioitinh', NgaySinh = '$ngaysinh' WHERE (MaTaiKhoan = '$idUserName')";
	if(mysqli_query($con, $sql)){
		echo 1;
	}
 ?>