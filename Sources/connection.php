<?php
	$con=mysqli_connect('localhost','root','123456','webhinhanh');
    if(!$con){
        die('ket noi that bai'.mysqli_connect_error());
    };
    mysqli_query($con,"SET NAMES 'UTF8'");
 ?>