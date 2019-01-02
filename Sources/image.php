<?php
	session_start();
	require('connection.php');
	if (isset($_SESSION['MaTaiKhoan'])) {
		$iduser=$_SESSION['MaTaiKhoan'];
		$sql= "select* from taikhoan where MaTaiKhoan=$iduser;";
		$resultImage = mysqli_query($con, $sql);
		$userinfo = mysqli_fetch_assoc($resultImage);
	}

	//lấy ra ảnh
	$id=$_GET['id'];
	$sql= "select * from hinhanh h, bosuutap b where h.MaBoSuuTap=b.MaBoSuuTap and MaHinhAnh=$id;";
	$resultImage = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($resultImage);
	$collectionImage=$row["MaBoSuuTap"];
	//Lấy ra thông tin người đăng ảnh
	$sqlPoster= "select * from hinhanh h, taikhoan t where h.MaTaiKhoan=t.MaTaiKhoan and MaHinhAnh=$id;";
	$resultPoster = mysqli_query($con, $sqlPoster);
	$rowPoster = mysqli_fetch_assoc($resultPoster);
	//Lấy ra những ảnh cùng bộ sưu tập
	$sqlcollectionImage= "select * from hinhanh where MaBoSuuTap=$collectionImage ORDER BY rand() limit 8";
	$resultCollectionImage = mysqli_query($con, $sqlcollectionImage);
	//Lấy ra những ảnh được tài trợ
	$sqlImageSponsored= "select * from hinhanh where AnhTaiTro=1 limit 6";
	$resultImageSponsored = mysqli_query($con, $sqlImageSponsored);
	//Lấy ra danh sách những bình luận của ảnh
	$sqlComment="select * from taikhoan t, binhluan b where t.MaTaiKhoan=b.MaTaiKhoan and b.MaHinhAnh=$id";
	$resultComment = mysqli_query($con, $sqlComment);
	//Lấy ra trạng thái thích của ảnh và người dùng
	if (isset($_SESSION['MaTaiKhoan'])) {
		$iduser=$_SESSION['MaTaiKhoan'];
		$sqlLike="select * from thich where MaHinhAnh=$id and MaTaiKhoan=$iduser";
		$resultLike = mysqli_query($con, $sqlLike);
		$rowLike = mysqli_fetch_assoc($resultLike);
	};
	//Đếm số like của ảnh
	$sqlDemLike="select *,count(*) as demlike from thich where MaHinhAnh=$id;";
	$resultDemLike = mysqli_query($con, $sqlDemLike);
	$rowDemLike = mysqli_fetch_assoc($resultDemLike);
	$con->close();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hình ảnh</title>
	<link rel="shortcut icon" type="image/x-icon" href="image/icon/photo-camera.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script type="text/javascript">
		var idUserName=<?php echo $_SESSION['MaTaiKhoan'] ?>;
		var idImage=<?php echo $id ?>;
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
	<div id="image-form">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8 p-r-30">
					<img class="picture-info" src="image/background/<?php echo $row["TenHinhAnh"] ?>" alt="">
					<div class="col-lg-12" style="padding: 0px;">
						<div class="icon-like">
							<button id="like-image">
								<?php
									if (isset($_SESSION['UserName'])) {
										if($rowLike['TrangThai']==1){
								?>
											<img src='image/icon/like-like.png'>
								<?php }else
											echo"<img src='image/icon/like.png'>";
								}else
									echo "<img src='image/icon/like.png'>";
								?>
							</button>
							<span>Thích</span>
							<span style="margin-left: 25px;"><?php echo $rowDemLike['demlike'] ?> lượt thích</span><br>
							<span>Ngày đăng: <?php echo $row["NgayDang"] ?></span>
						</div>
						<div class="image-info-header-text">
							<span>Thông tin hình ảnh</span><br>
						</div>
						<div class="image-info-text">
							<div id="avatar-poster">
								<div class="row">
									<div class="col-lg-1 col-md-1 comment-image">
										<?php if (isset($rowPoster['AnhDaiDien'])){ ?>
											<img class="avatar-comment" src="image/avatarresize/<?php echo $rowPoster['AnhDaiDien'] ?>" alt="">
										<?php }else{?>
											<img class="avatar-comment" src="image/avatarresize/user.png" alt="">
										<?php  }?>
									</div>
									<div class="col-lg-11 col-md-11">
										<div class="name-poster-image">
											<a href="others.php?username=<?php echo $rowPoster['TenDangNhap'] ?>"><?php echo $rowPoster['TenDangNhap'] ?></a><br>
											<span><?php echo $rowPoster['HoTen'] ?></span>
										</div>
									</div>
								</div>
							</div>
							<span class="fw-image-info-text">Mô tả hình ảnh: <?php echo $row["MoTaHinhAnh"] ?></span><br>
							<span>Thể loại: <?php echo $row["TenBoSuuTap"] ?></span><br>
							<span>Kích cỡ file: <?php echo $row["KichCo"] ?></span><br>
							<span>Độ phân giải: <?php echo $row["DoPhanGiai"] ?></span><br>
							<span class="fw-image-info-text">Cam kết: </span><br>
							<div style="padding-left: 15px;">
								<span>✓ Miễn phí cho mục đích sử dụng cá nhân và thương mại</span><br>
								<span>✓ Không yêu cầu ghi nhận</span>
							</div>
						</div>
					</div>
					<div id="comment-form">
						<div class="row" style="margin-left: 0px;">
							<div class="col-lg-1 col-md-1 comment-image">
								<img class="avatar-comment" src="image/avatarresize/<?php echo $userinfo['AnhDaiDien'] ?>" alt="">
							</div>
							<div class="col-lg-11 col-md-11 ">
								<textarea id="txtComment" class="comment-text" name="" placeholder="Thêm bình luận của bạn"></textarea>
								<button id="btn-comment" class="btn btn-primary">Bình luận</button>
							</div>
							<?php foreach ($resultComment as $item) {?>
								<div class="col-lg-12 comment-all">
									<div class="row">
										<div class="col-lg-1 col-md-1 comment-image">
											<img class="avatar-comment" src="image/avatarresize/<?php echo $item['AnhDaiDien'] ?>" alt="">
										</div>
										<div class="col-lg-11 col-md-11">
											<div class="username-comment">
												<a href="others.php?username=<?php echo $item['TenDangNhap'] ?>" class="span-username-comment"><?php echo $item['TenDangNhap'] ?></a>
											</div>
											<div style="margin-top: 5px;">
												<span><?php echo $item['BinhLuan'] ?></span>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="image-sponsored">
						<div class="row">
							<div class="col-lg-12">
								<div class="image-sponsored-text">
									<span>Hình ảnh được tài trợ</span>
								</div>
							</div>
							<?php foreach ($resultImageSponsored as $item) {?>
								<div class="col-lg-6 col-md-2 col-sm-2 pd-l-r-15">
									<a href="image.php?id=<?php echo $item["MaHinhAnh"] ?>" title="">
										<img class="picture-info" src="image/resize/<?php echo $item["Resize"] ?>" alt="">
									</a>
								</div>
							<?php } ?>
							<div class="col-lg-12">
								<div class="image-related-text">
									<span>Hình ảnh cùng chủ đề</span>
								</div>
							</div>
							<?php foreach ($resultCollectionImage as $item) {?>
								<div class="col-lg-6 col-md-2 col-sm-2 pd-l-r-15">
									<a href="image.php?id=<?php echo $item["MaHinhAnh"] ?>" title="">
										<div class="div-picture-related-info">
											<img class="picture-related-info" src="image/resize/<?php echo $item["Resize"] ?>" alt="">
										</div>
									</a>
								</div>
							<?php } ?>
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
									<li class="p-b-li"><a href="#" class="font-info-bottom ">Động vật</a></li>
									<li class="p-b-li"><a href="#" class="font-info-bottom">Thiên nhiên</a></li>
									<li class="p-b-li"><a href="#" class="font-info-bottom">Công nghệ</a></li>
									<li class="p-b-li"><a href="#" class="font-info-bottom">Trò chơi</a></li>
									<li class="p-b-li"><a href="#" class="font-info-bottom">Đồ ăn</a></li>
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