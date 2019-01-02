<?php
	session_start();
	require('connection.php');
	if (isset($_SESSION['MaTaiKhoan'])) {
		$iduser=$_SESSION['MaTaiKhoan'];
		$sql= "select* from taikhoan where MaTaiKhoan=$iduser;";
		$resultImage = mysqli_query($con, $sql);
		$userinfo = mysqli_fetch_assoc($resultImage);
		$sql="select h.MaHinhAnh, h.TenHinhAnh, h.MoTaHinhAnh, t.MaTaiKhoan, t.TenDangNhap, t.AnhDaiDien,th.TrangThai, h.NgayDang,h.Resize FROM hinhanh h
		LEFT JOIN taikhoan t ON t.MaTaiKhoan=h.MaTaiKhoan
		LEFT JOIN thich th ON th.MaHinhAnh=h.MaHinhAnh and th.MaTaiKhoan=$iduser
 		where h.MaTaiKhoan>0 and h.PheDuyet=1 order by h.NgayDang DESC";
	}else{
		$sql="select * FROM hinhanh h
		LEFT JOIN taikhoan t ON t.MaTaiKhoan=h.MaTaiKhoan
 		where h.MaTaiKhoan>0 and h.PheDuyet=1 order by h.NgayDang DESC";
	}
	$result=mysqli_query($con, $sql);
	//Lấy ra 3 ảnh có nhiều lượt like nhất
	$sqlTopLike="select h.MaHinhAnh,h.TenHinhAnh,h.Resize,count(t.MaHinhAnh) as demlike from hinhanh h
			left join thich t on t.MaHinhAnh=h.MaHinhAnh
    		where h.MaTaiKhoan>0 group by h.MaHinhAnh limit 3;";
	$resultTopLike = mysqli_query($con, $sqlTopLike);
	$con->close();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Diễn đàn</title>
	<link rel="shortcut icon" type="image/x-icon" href="image/icon/photo-camera.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script type="text/javascript">
		var idUserName=<?php echo $_SESSION['MaTaiKhoan'] ?>;
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
					<a href="index.php">Slytherin</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-5 col-sm-3" align="right">
				<div class="p-t-logo">
					<div class="row">
						<div class="col-lg-7" >
							<div id="search">
								<div class="row">
									<div class="col-lg-10 col-md-10 col-sm-10" style="padding: 0px;">
										<input type="text" name="txtSearch" id="txtSearch">
									</div>
									<div id="btn-search" class="col-lg-2 col-md-2 col-sm-2" style="padding-left:5px;">
										<img class="image-search" src="image/icon/search-gay.png" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-5" style="padding-left: 0px;">
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
	<div id="froum-all">
		<div class="container-fluid" style="padding: 0px;">
			<div class="row">
				<div class="col-lg-8">
					<?php foreach ($result as $item) {?>
						<div class="froum-content">
							<div class="header-avatar-froum">
								<div class="row">
									<div class="avatar-froum-div col-lg-2" style="padding: 0px;">
										<img class="avatar-froum" src="image/avatarresize/<?php echo $item['AnhDaiDien'] ?>" alt="">
									</div>
									<div class="col-lg-10">
										<a href="others.php?username=<?php echo $item['TenDangNhap'] ?>" style="font-weight: 500"><?php echo $item['TenDangNhap'] ?></a><br>
										<span style="font-size: 15px;">Ngày đăng: <?php echo $item['NgayDang']; ?></span>
									</div>
								</div>
							</div>
							<div>
								<a href="image.php?id=<?php echo $item["MaHinhAnh"] ?>" title="">
									<img class="image-froum" src="image/resize/<?php echo $item['Resize'] ?>" alt="">
								</a>
							</div>
							<div class="icon-like">
								<button id="like-<?php echo $item['MaHinhAnh']?>">
									<?php
										if (isset($_SESSION['UserName'])) {
											if($item['TrangThai']==1){
									?>
												<img src='image/icon/like-like.png'>
									<?php }else
												echo"<img src='image/icon/like.png'>";
									}else
										echo "<img src='image/icon/like.png'>";
									?>
								</button>
								<span>Thích</span>
							</div>
							<div class="describe-image">
								<span>0 lượt thích</span><br>
								<span><?php echo $item['MoTaHinhAnh'] ?></span><br>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="col-lg-4">
					<div class="row" style="padding-left: 15px;">
						<?php if (isset($_SESSION['UserName'])) {?>
							<div class="avatar-froum-div col-lg-4" style="padding: 0px;">
								<img class="avatar-froum" src="image/avatarresize/<?php echo $userinfo['AnhDaiDien'] ?>" alt="">
							</div>
							<div class="col-lg-8">
								<span style="font-weight: 500"><?php echo $userinfo['TenDangNhap'] ?></span><br>
								<span style="font-size: 15px;"><?php echo $userinfo['HoTen'] ?></span>
							</div>
						<?php }else{?>
							<div class="avatar-froum-div col-lg-4" style="padding: 0px;">
								<img class="avatar-froum" src="image/avatar/user.png" alt="">
							</div>
							<div class="col-lg-8">
								<span style="font-size: 15px;">Bạn chưa đăng nhập</span>
							</div>
						<?php }?>
					</div>
					<div id="top-like">
						<div class="title-toplike">
							<span >Ảnh nhiều lượt thích</span>
						</div>
						<?php foreach ($resultTopLike as $item) {?>
							<div class="image-top-like-all">
								<div class="row">
									<div class="col-lg-5">
										<img class="image-top-like" src="image/resize/<?php echo $item['Resize'] ?>" alt="">
									</div>
									<div class="col-lg-5">
										<span><?php echo $item['demlike'] ?> lượt thích</span>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="info-bottom">
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