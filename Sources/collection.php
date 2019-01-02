<?php
	session_start();
	require('connection.php');
	$resultImageAll;
	//lấy ra ảnh
	if (isset($_GET['idcol'])) {
		$idcol=$_GET['idcol'];
		$sql="select* from hinhanh h, bosuutap b where h.MaBoSuuTap=b.MaBoSuuTap and h.MaBoSuuTap=$idcol and h.PheDuyet=1";
		$resultImageAll = mysqli_query($con, $sql);
	}
	else if(isset($_GET['search'])){
		$search=$_GET['search'];
		$sql="select * from hinhanh where MoTaHinhAnh like '%$search%';";
		$resultImageAll = mysqli_query($con, $sql);
	}else {
		$sql="select * from hinhanh where PheDuyet=1";
		$resultImageAll = mysqli_query($con, $sql);
	}
	$sqlCategory="select* from bosuutap";
	$resultCategory = mysqli_query($con, $sqlCategory);
	$con->close();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Bộ sưu tập</title>
	<link rel="shortcut icon" type="image/x-icon" href="image/icon/photo-camera.png">
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
	<div id="form-right-shop">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-2">
					<div id="list-shop">
						<span class="text-bold-shop">Bộ sưu tập</span><br><br>
						<ul >
							<li class="p-b-li"><a href="collection.php" class="font-info-bottom">Tất cả</a></li>
							<?php foreach ($resultCategory as $item) {?>
								<li class="p-b-li">
									<a href="collection.php?idcol=<?php echo $item["MaBoSuuTap"] ?>" class="font-info-bottom "><?php echo $item["TenBoSuuTap"]; ?>
									</a>
								</li>
							<?php } ?>
						</ul>
					</div>
				</div>
				<div class="col-lg-10 col-md-10 col-sm-10">
					<div class="box-list">
						<div class="row">
							<?php foreach ($resultImageAll as $item) {?>
								<div class="col-lg-4 col-md-6 col-sm-12" style="padding: 0">
									<a href="image.php?id=<?php echo $item["MaHinhAnh"] ?>" title="">
										<div class="image-background-form">
											<img class="image-background" src="image/resize/<?php echo $item["Resize"] ?>" alt="">
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