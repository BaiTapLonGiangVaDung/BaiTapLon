<?php
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hình ảnh</title>
	<link rel="shortcut icon" type="image/x-icon" href="https://unsplash.com/favicon.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
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
						    	<a class="nav-link" href="#">Blog</a>
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
	<div id="image-form">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8 p-r-30">
					<img class="picture-info" src="image/background/image1.jpg" alt="">
					<div class="image-related">
						<div class="row">
							<div class="col-lg-12">
								<div class="image-related-text">
									<span>Hình ảnh liên quan</span>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 pd-l-r-15">
								<img class="picture-info" src="image/background/image17.jpg" alt="">
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 pd-l-r-15">
								<img class="picture-info" src="image/background/image18.jpg" alt="">
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 pd-l-r-15">
								<img class="picture-info" src="image/background/image19.jpg" alt="">
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 pd-l-r-15">
								<img class="picture-info" src="image/background/image16.jpg" alt="">
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 pd-l-r-15">
								<img class="picture-info" src="image/background/image20.jpg" alt="">
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 pd-l-r-15">
								<img class="picture-info" src="image/background/image21.jpg" alt="">
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 pd-l-r-15">
								<img class="picture-info" src="image/background/image22.jpg" alt="">
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 pd-l-r-15">
								<img class="picture-info" src="image/background/image23.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="image-sponsored">
						<div class="row">
							<div class="col-lg-12">
								<div class="image-info-header-text">
									<span>Thông tin hình ảnh</span><br>
								</div>
								<div class="image-info-text">
									<span class="fw-image-info-text">Bảy cuốn sách trên cái bàn cạnh cái đèn gần cửa sổ</span><br>
									<span>Thể loại: Linh tinh</span><br>
									<span>Kích cỡ file: 1MB</span><br>
									<span>Độ phân giải: 1426*1080</span><br>
									<span class="fw-image-info-text">Cam kết: </span><br>
									<div style="padding-left: 15px;">
										<span>✓ Miễn phí cho mục đích sử dụng cá nhân và thương mại</span><br>
										<span>✓ Không yêu cầu ghi nhận</span>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="image-sponsored-text">
									<span>Hình ảnh được tài trợ</span>
								</div>
							</div>
							<div class="col-lg-6 col-md-2 col-sm-2 pd-l-r-15">
								<img class="picture-info" src="image/background/image10.jpg" alt="">
							</div>
							<div class="col-lg-6 col-md-2 col-sm-2 pd-l-r-15">
								<img class="picture-info" src="image/background/image11.jpg" alt="">
							</div>
							<div class="col-lg-6 col-md-2 col-sm-2 pd-l-r-15">
								<img class="picture-info" src="image/background/image12.jpg" alt="">
							</div>
							<div class="col-lg-6 col-md-2 col-sm-2 pd-l-r-15">
								<img class="picture-info" src="image/background/image13.jpg" alt="">
							</div>
							<div class="col-lg-6 col-md-2 col-sm-2 pd-l-r-15">
								<img class="picture-info" src="image/background/image14.jpg" alt="">
							</div>
							<div class="col-lg-6 col-md-2 col-sm-2 pd-l-r-15">
								<img class="picture-info" src="image/background/image20.jpg" alt="">
							</div>
						</div>
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