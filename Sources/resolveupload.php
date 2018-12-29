<?php
//upload.php
    if($_FILES["file"]["name"] != ''){
        error_reporting(0);
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        if(move_uploaded_file($file_tmp,"image/background/".$file_name)) {
            echo "success";
        }else{
           echo "Đã có lỗi xảy ra file ko đc upload!";
        }
        include_once("resolveresize.php");
        $kaboom = explode(".", $file_name); // Split file name into an array using the dot
        $fileExt = end($kaboom); // Now target the last array element to get the file extension
        $target_file = "image/background/$file_name";
        $resized_file = "image/resize/resize_$file_name";
        $wmax = 700;
        $hmax = 420;
        ak_img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);


        $con=mysqli_connect('localhost','root','123456','webhinhanh');
        if(!$con){
            die('ket noi that bai'.mysqli_connect_error());
        }
        if(isset($_POST['coll']) and isset($_POST['description'])){
            $coll= $_POST['coll'];
            $description=$_POST['description'];
            $sizefile=$_POST['sizefile'];
            $accountName= $_POST['accountName'];
            $sql="select * from taikhoan where TenDangNhap='$accountName'";
            $resultSelect = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($resultSelect);
            $idUser=$row["MaTaiKhoan"];
            $sqlInsert="insert into hinhanh (`TenHinhAnh`, `KichCo`, `MoTaHinhAnh`, `MaBoSuuTap`, `MaTaiKhoan`,`Resize`,`NgayDang`) VALUES ('$file_name', '$sizefile"."KB"."', '$description', '$coll', '$idUser','resize_$file_name',NOW())";
            $resultInsert = mysqli_query($con, $sqlInsert);
        }
    }
?>
