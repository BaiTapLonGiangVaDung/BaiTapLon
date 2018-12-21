<?php
	$idUserName=trim($_POST['idUserName']);
	$hoten=trim($_POST['hoten']);
	$gioitinh=trim($_POST['gioitinh']);
	$thanhpho=trim($_POST['thanhpho']);
	$quocgia=trim($_POST['quocgia']);
	$ngaysinh=trim($_POST['ngaysinh']);
	$con=mysqli_connect('localhost','root','123456','webhinhanh');
	if(!$con){
		die('ket noi that bai'.mysqli_connect_error());
	}
	$sql="update taikhoan set HoTen = '$hoten', ThanhPho = '$thanhpho', QuocGia = '$quocgia', GioiTinh = '$gioitinh', NgaySinh = '$ngaysinh' WHERE (MaTaiKhoan = '$idUserName')";
	if(mysqli_query($con, $sql)){
		echo 1;
	}
 ?>