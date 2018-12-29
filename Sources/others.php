<?php
    session_start();
    $con=mysqli_connect('localhost','root','123456','webhinhanh');
    if(!$con){
        die('ket noi that bai'.mysqli_connect_error());
    }
    //lấy ra thông tin người dùng
    $others=$_GET['username'];
    $sql="select * from taikhoan where TenDangNhap='$others'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $idTaiKhoan=$row["MaTaiKhoan"];

    $sql="select * from hinhanh where MaTaiKhoan= $idTaiKhoan and PheDuyet=1";
    $resultImage = mysqli_query($con, $sql);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Thông tin về chúng tôi</title>
	<link rel="shortcut icon" type="image/x-icon" href="https://unsplash.com/favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script type="text/javascript">
		var UserNameOther='<?php echo $_GET['username']; ?>';
	</script>
</head>
<body >
	<div class="container-fluid" id="div-top-shop">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3" id="hello-span">
				<span >Chào mừng các bạn đến với website</span>
			</div>
			<div class="col-lg-5 col-md-4 col-sm-4">
				<div class="site-title-shop" align="center">
					<a href="index.php" style="padding-left: 100px;">Slytherin</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-5 col-sm-3" align="right">
				<div class="p-t-logo">
					<a class="p-r-logo" href="https://www.facebook.com/">
						<img class="icon-logo" src="image/icon/fb-logo.png" alt="">
					</a>
					<a class="p-r-logo" href="https://www.google.com/">
						<img class="icon-logo" src="image/icon/google-plus.png" alt="">
					</a>
					<a class="p-r-logo" href="">
						<img class="icon-logo" src="image/icon/inta-logo.png" alt="">
					</a>
					<a class="p-r-logo" href="">
						<img class="icon-logo" src="image/icon/sky-logo.png" alt="">
					</a>
					<a class="p-r-logo" href="">
						<img class="icon-logo" src="image/icon/twitter-logo.png" alt="">
					</a>
					<?php
						if (isset($_SESSION['UserName'])) {
					?>
					<a href="accounts.php" id="account-name"><?php echo $_SESSION['UserName'] ?></a>
					<a href="logout.php" id="logout">/Đăng xuất</a>
					<?php }else
						echo "<a href='login.php' id='login-top'>Đăng nhập</a>";
					?>
				</div>
			</div>
		</div>
	</div>
	<div id="nav-sticky">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div>
						<ul class="nav justify-content-center pd-t">
							<li class="nav-item">
		                        <a class="nav-link active" href="index.php">Trang chủ</a>
		                     </li>
		                     <li class="nav-item">
		                        <a class="nav-link" href="collection.php">Bộ sưu tập</a>
		                     </li>
		                     <li class="nav-item">
		                        <a class="nav-link" href="forum.php">Diễn đàn</a>
		                     </li>
		                     <li class="nav-item">
		                        <a class="nav-link" href="about.php">Thông tin</a>
		                     </li>
		                     <li class="nav-item">
		                        <a class="nav-link" href="#">Liên kết</a>
		                     </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="container-fluid p-l-r-50">
        <div class="row">
        	<div class="col-lg-12">
        		<p id="acc-top">Thông tin cá nhân</p>
        	</div>

            <div class="col-lg-5 col-md-7">
                <div class="bocboc">
                    <p style="margin-left: 10%;">Ảnh đại diện</p>
                    <div class="avatar-image">
                    	<img class="image-avatar" src="image/avatar/<?php echo $row['AnhDaiDien'] ?>"/>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-5">
            	<div class="bocboc">
                    <label>Tên người dùng</label>
                    <input type="text" value="<?php echo $row['TenDangNhap'] ?>"/> <br />
                </div>
                <div class="bocboc">
                    <label>Gmail</label>
                    <input type="text" value="<?php echo $row['Email'] ?>"/> <br />
                </div>
                <div class="bocboc">
                    <label>Họ và tên</label>
                    <input id="txtHoTen" name="txtTenHoTen" type="text" value="<?php echo $row['HoTen'] ?>" />
                </div>
                <div class="bocboc">
                    <label id="lb-gioitinh">Giới tính</label>
                    <select name="id-gioitinh" id="id-gioitinh">
                    	<?php if($row['GioiTinh']==null){ ?>
                        	<option value selected >-------</option>
                    	<?php }else{ ?>
                    		<option value selected><?php echo $row['GioiTinh'] ?></option>
                    	<?php } ?>
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                    </select>
                </div>
                <div class="bocboc">
                    <label>Thành phố</label>
                    <input id="txtThanhPho" name="txtThanhPho" type="text" value="<?php echo $row['ThanhPho'] ?>" />
                </div>
                <div class="bocboc">
                    <label>Quốc gia</label>
                    <input id="txtQuocGia" name="txtQuocGia" type="text" value="<?php echo $row['QuocGia'] ?>" />
                </div>
                <div class="bocboc">
                    <label>Ngày tháng năm sinh</label>
					<input id="txtNgaySinh" name="txtNgaySinh" type="text" value="<?php echo $row['NgaySinh'] ?> " placeholder="yyyy/mm/dd" />
                </div>
            </div>
        </div>
        <hr style="margin-top: 20px;margin-bottom: 10px;background-color: lightgray;" >
        <?php if($_SESSION['ChucVu']==1){?>
            <div class="col-lg-12" id="block" style="align:center">
	            <p>Cấm người dùng</p>
	        </div>
        <?php } ?>
    </div>
    <div id="mypicture-form">
        <div class="container-fluid">
            <div class="row">
            	<div class="col-lg-12">
		    		<p id="acc-top">Ảnh của <?php echo $_GET['username'] ?></p>
		    	</div>
                <?php foreach ($resultImage as $item) {?>
                      <div class="col-lg-3 col-md-4 col-sm-6 p-l-r-5">
                          <a href="image.php?id=<?php echo $item["MaHinhAnh"] ?>" title="">
                            <div class="image-background-form-mypicture">
                              <img class="featured-photos-object-mypicture" src="image/resize/<?php echo $item["Resize"] ?>" alt="">
                            </div>
                          </a>
                      </div>
                <?php } ?>
                <?php if (mysqli_num_rows($resultImage)==0) {?>
                    <div id="my-image-null">
                      <img src='image/icon/image-icon.png' class='image-upload-form'>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
	<div class="info-bottom" style="margin-top: 21px;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4">
					<div class="padding-sly">
						<h1 class="site-title">
							<a href="#">Slytherin</a>
						</h1>
						<p class="site-tiny">Khám phá thế giới muôn màu</p>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="row">
						<div class="col-lg-6">
							<span class="font-bold-bottom">Liên hệ với chúng tôi</span><br><br>
							<div class="font-info-bottom">
								<span>Bạn có câu hỏi gì không?</span><br>
								<span>Hãy cho chúng tôi biết tại cửa hàng ở 12 Tây Sơn Hà Nội hoặc liên lạc với chúng tôi qua số điện thoại 099099099</span><br>
							</div>
							<div class="p-t-logo">
								<a class="p-r-logo" href="https://www.facebook.com/">
									<img class="icon-logo" src="image/icon/fb-logo.png" alt="">
								</a>
								<a class="p-r-logo" href="https://www.google.com/">
									<img class="icon-logo" src="image/icon/google-plus.png" alt="">
								</a>
								<a class="p-r-logo" href="">
									<img class="icon-logo" src="image/icon/inta-logo.png" alt="">
								</a>
								<a class="p-r-logo" href="">
									<img class="icon-logo" src="image/icon/sky-logo.png" alt="">
								</a>
								<a class="p-r-logo" href="">
									<img class="icon-logo" src="image/icon/twitter-logo.png" alt="">
								</a>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4">
							<span class="font-bold-bottom">Danh mục</span><br><br>
							<div >
								<ul >
									<li class="p-b-li"><a href="#" class="font-info-bottom ">Đầm</a></li>
									<li class="p-b-li"><a href="#" class="font-info-bottom">Kính râm</a></li>
									<li class="p-b-li"><a href="#" class="font-info-bottom">Đồng hồ</a></li>
									<li class="p-b-li"><a href="#" class="font-info-bottom">Giày</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4">
							<span class="font-bold-bottom">Liên kết</span><br><br>
							<div >
								<ul >
									<li class="p-b-li"><a href="#" class="font-info-bottom ">Tìm kiếm</a></li>
									<li class="p-b-li"><a href="#" class="font-info-bottom">Về chúng tôi</a></li>
									<li class="p-b-li"><a href="#" class="font-info-bottom">Liên hệ chúng tôi</a></li>
									<li class="p-b-li"><a href="#" class="font-info-bottom">Facebock</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4">
							<span class="font-bold-bottom">Trợ giúp</span><br><br>
							<div >
								<ul >
									<li class="p-b-li"><a href="#" class="font-info-bottom">Kiểm tra</a></li>
									<li class="p-b-li"><a href="#" class="font-info-bottom">Bộ sưu tập</a></li>
									<li class="p-b-li"><a href="#" class="font-info-bottom">Hình ảnh</a></li>
									<li class="p-b-li"><a href="#" class="font-info-bottom">Download</a></li>
								</ul>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="p-l-r-bt">
			<div class="row">
				<div class="col-lg-6">
					<span class="font-info-bottom">© 2018 Slytherin. Tất cả các quyền được bảo lưu.</span>
				</div>
				<div class="col-lg-6">
					<span class="font-info-bottom">Khu vực và các quốc gia: Việt Nam, Thái Lan, Singapore, Lào, Nhật Bản</span>
				</div>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	<script src="JS/customs.js"></script>
</body>
</html>