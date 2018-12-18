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
            $sqlInsert="insert into hinhanh (`TenHinhAnh`, `KichCo`, `MoTaHinhAnh`, `MaBoSuuTap`, `MaTaiKhoan`) VALUES ('$file_name', '$sizefile"."KB"."', '$description', '$coll', '$idUser')";
            $resultInsert = mysqli_query($con, $sqlInsert);
        }
    }
?>
