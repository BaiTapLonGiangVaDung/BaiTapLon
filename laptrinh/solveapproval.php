<?php
	$type=trim($_POST['typeButton']);
	$id=trim($_POST['id']);
	$con=mysqli_connect('localhost','root','123456','webhinhanh');
	if(!$con){
		die('ket noi that bai'.mysqli_connect_error());
	}
	if($type=='d'){
		$sql="update hinhanh set PheDuyet =1 where MaHinhAnh=$id";
	}
	if($type=='x'){
		$sql="delete from hinhanh where MaHinhAnh=$id;";
	}
	if (mysqli_query($con, $sql)) {
		echo $type;
	}else
		echo "Lỗi";
	$con->close();
 ?>