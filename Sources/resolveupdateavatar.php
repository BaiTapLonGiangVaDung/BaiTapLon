<?php
//upload.php
    if($_FILES["file-avatar"]["name"] != ''){
        error_reporting(0);
        $file_name = $_FILES['file-avatar']['name'];
        $file_tmp = $_FILES['file-avatar']['tmp_name'];
        if(move_uploaded_file($file_tmp,"image/avatar/".$file_name)) {
            require('connection.php');
            $accountName= $_POST['accountName'];
            $sql="update taikhoan SET AnhDaiDien = '$file_name' WHERE (TenDangNhap = '$accountName');";
            $result = mysqli_query($con, $sql);
            echo "success";
        }else{
           echo "Đã có lỗi xảy ra file ko đc upload!";
        }
        include_once("resolveresize.php");
        $kaboom = explode(".", $file_name); // Split file name into an array using the dot
        $fileExt = end($kaboom); // Now target the last array element to get the file extension
        $target_file = "image/avatar/$file_name";
        $resized_file = "image/avatarresize/$file_name";
        $wmax = 700;
        $hmax = 420;
        ak_img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);

    }
?>
