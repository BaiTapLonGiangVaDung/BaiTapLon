<?php
	session_start();
	require('connection.php');
	//lấy ra ảnh
	$sql="select * from hinhanh limit 16";
	$resultImage = mysqli_query($con, $sql);
	//Lấy ra bộ sưu tập
	$sqlCollection="select * from bosuutap limit 6";
	$resultCollection= mysqli_query($con, $sqlCollection);
	$con->close();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<link rel="shortcut icon" type="image/x-icon" href="image/icon/photo-camera.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body >
	<div class="container-fluid" id="div-top">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6" id="hello-span">
				<span >Chào mừng các bạn đến với website</span>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6" align="right">
				<div class="p-t-logo">
					<div class="row">
						<div class="col-lg-8" style="padding-right: 0px;">
							<div id="search">
								<div class="row">
									<div class="col-lg-11 col-md-11 col-sm-11" style="padding: 0px;">
										<input type="text" name="txtSearch" id="txtSearch">
									</div>
									<div id="btn-search" class="col-lg-1 col-md-1 col-sm-1" style="padding-left:  5px;">
										<img class="image-search" src="image/icon/search-gay.png" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4" style="padding-left: 0px;">
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
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="padding-sly">
					<h1 class="site-title">
						<a href="">Slytherin</a>
					</h1>
					<p class="site-tiny">Khám phá thế giới muôn màu</p>
				</div>
			</div>
		</div>
	</div>
	<div id="nav-sticky">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<ul class="nav justify-content-center">
					  <li class="nav-item">
					    <a class="nav-link active" href="#">Trang chủ</a>
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
	<div class="container-fluid" style="padding-right: 0px;padding-left: 0px;">
		<div id="demo" class="carousel slide" data-ride="carousel">

		  <!-- Indicators -->
		  <ul class="carousel-indicators">
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <li data-target="#demo" data-slide-to="1"></li>
		    <li data-target="#demo" data-slide-to="2"></li>
		    <li data-target="#demo" data-slide-to="3"></li>
		  </ul>

		  <!-- The slideshow -->
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		    	<div class="new-arrivals">
		    		<div id="new-arrivals-text">
						<div id="new-arrivals-box">
							<span>Khám phá thế giới thông qua đôi mắt của nhiếp ảnh gia</span><br>
						</div>
					</div>
		    	</div>
		    </div>
		    <div class="carousel-item">
				<div class="new-arrivals1">
		    		<div id="new-arrivals-text">
						<div id="new-arrivals-box">
							<span>Cùng tìm kiếm những bức ảnh tuyệt vời cho bạn</span><br>
						</div>
					</div>
		    	</div>
		    </div>
		    <div class="carousel-item">
				<div class="new-arrivals2">
		    		<div id="new-arrivals-text">
						<div id="new-arrivals-box">
							<span>Khám phá thế giới thông qua đôi mắt của nhiếp ảnh gia</span><br>
						</div>
					</div>
		    	</div>
		    </div>
		    <div class="carousel-item">
				<div class="new-arrivals3">
		    		<div id="new-arrivals-text">
						<div id="new-arrivals-box">
							<span>Khám phá thế giới thông qua đôi mắt của nhiếp ảnh gia</span><br>
						</div>
					</div>
		    	</div>
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a>

		</div>
	</div>
	<div id="product-list">
		<div class="container-fluid">
			<span class="f-40">BỘ SƯU TẬP NỔI BẬT</span>
			<div class="row" style="margin-top: 30px;">
				<?php foreach ($resultCollection as $item) {?>
					<div class="col-lg-4 col-md-6 col-sm-12 p-l-r-bst">
						<a href="collection.php?idcol=<?php echo $item["MaBoSuuTap"] ?>" title="">
							<div class="grid">
								<figure class="effect-marley">
			                        <img src="image/<?php echo $item["AnhBoSuuTap"] ?>" alt=""/>
			                        <figcaption>
			                            <h2><?php echo $item["TenBoSuuTap"]; ?></h2>
			                            <p><?php echo $item["MoTa"]; ?></p>
			                        </figcaption>
			                    </figure>
							</div>
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<div id="featured-photos">
		<div class="container-fluid">
			<span class="f-40">HÌNH ẢNH NỔI BẬT</span>
			<div id="featured-photos-list">
				<div class="row">
					<?php foreach ($resultImage as $item) {?>
						<div class="col-lg-3 col-md-4 col-sm-6 p-l-r-5">
							<a href="image.php?id=<?php echo $item["MaHinhAnh"] ?>" title="">
								<img class="featured-photos-object" src="image/resize/<?php echo $item["Resize"] ?>" alt="">
							</a>
						</div>
					<?php } ?>
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
						<div class="col-lg-6" style="margin-bottom: 30px;">
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
							<span class="font-bold-bottom">Bộ sưu tập</span><br><br>
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
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="JS/customs.js"></script>
</body>
</html>