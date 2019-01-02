<?php
	session_start();
	require('connection.php');
	$mesage;
	if(isset($_GET['email']) and isset($_GET['verify'])){
		$email=$_GET['email'];
		$verify=$_GET['verify'];
		$sql="select * from taikhoan where email='$email' and Verification='$verify'";
		$verifySelect= mysqli_query($con, $sql);
		if (mysqli_num_rows($verifySelect)) {
			$sqlUpdate="update taikhoan set Active =1 where email='$email' and Verification='$verify' and Active=0";
			if(mysqli_query($con, $sqlUpdate)){
				$mesage="Tài khoản đã được kích hoạt thành công";
			}else
				$mesage="Lỗi";
		}else{
			$mesage="Url không hợp lệ hoặc bạn đã kích hoạt tài khoản của mình";
		}
	}else{
		$mesage="Làm ơn sử dụng liên kết đã được gửi đến email của bạn";
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Thông tin về chúng tôi</title>
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
	<div id="content-verify">
		<span><?php echo $mesage; ?></span>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	<script src="JS/customs.js"></script>
</body>
</html>