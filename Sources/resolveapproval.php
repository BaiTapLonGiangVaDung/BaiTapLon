<?php
	$type=trim($_POST['typeButton']);
	$id=trim($_POST['id']);
	require('connection.php');
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