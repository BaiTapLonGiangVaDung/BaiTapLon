<?php
	session_start();
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
					<a href="index.php" style="padding-left: 100px;">Slytherin</a>
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
	<div id="about-form">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="about-sly">
                        <h3>Slytherin</h3>
                        <div>	
                            <a class="nav-link" href="about.php" style="padding-left: 0px;color: #7d7d7d;">FAQ</a>				
                            <a class="nav-link" href="term.php" style="padding-left: 0px;color: #7d7d7d;">Điều khoản dịch vụ</a>
                        </div>								
												
					</div>
				</div>
				<div class="col-lg-9">
					<div class="about-sly-content">
						<h3>Điều khoản dịch vụ</h3>
						<h4>Chào mừng bạn đến với Slytherin!</h4>
						<p>
                        Cảm ơn bạn đã sử dụng các sản phẩm và dịch vụ của chúng tôi. Dịch vụ được cung cấp bởi Slytherin có trụ sở tại 12 Tây Sơn Hà Nội, Việt Nam. Bằng việc sử dụng Dịch vụ của chúng tôi, bạn đang đồng ý với các điều khoản này. Vui lòng đọc kỹ các điều khoản này. 
                        Dịch vụ của chúng tôi rất đa dạng nên đôi khi có thể áp dụng các điều khoản bổ sung hoặc các yêu cầu về sản phẩm (bao gồm cả yêu cầu về độ tuổi). Các điều khoản bổ sung sẽ được cung cấp kèm theo Dịch vụ liên quan và các điều khoản bổ sung đó sẽ trở thành một phần thuộc thỏa thuận của bạn với chúng tôi nếu bạn sử dụng các Dịch vụ đó.
						</p>
						<h4>Nội dung của bạn trong Dịch vụ của chúng tôi</h4>
						<p>
                        Một số Dịch vụ của chúng tôi cho phép bạn tải lên, đệ trình, lưu trữ, gửi hoặc nhận nội dung. Bạn giữ quyền sở hữu mọi quyền sở hữu trí tuệ mà bạn có đối với nội dung đó. Tóm lại, những gì thuộc về bạn sẽ luôn thuộc về bạn.
                        </p>
                       
                        <p>
                        Khi bạn tải lên, đệ trình, lưu trữ, gửi hoặc nhận nội dung đến hoặc qua Dịch vụ của chúng tôi, bạn cấp cho Google (và những người chúng tôi làm việc cùng) giấy phép toàn cầu để sử dụng, làm trang chủ, lưu trữ, nhân bản, điều chỉnh, tạo các tác phẩm phái sinh (chẳng hạn như những tác phẩm có nguồn gốc từ bản dịch, phóng tác hoặc những thay đổi khác mà chúng tôi thực hiện để nội dung của bạn hoạt động tốt hơn với Dịch vụ của chúng tôi), truyền đạt, xuất bản, trình diễn công khai, hiển thị và phân phối công khai nội dung đó. Những quyền bạn cấp trong giấy phép này là nhằm phục vụ các mục đích có giới hạn như điều hành, quảng bá và cải thiện Dịch vụ của chúng tôi và để phát triển những dịch vụ mới. Giấy phép này sẽ vẫn tiếp tục có hiệu lực ngay cả nếu trong trường hợp bạn ngừng sử dụng Dịch vụ của chúng tôi (ví dụ: đối với một bản danh sách doanh nghiệp mà bạn đã thêm vào Google Maps). Một số Dịch vụ có thể cung cấp cho bạn những cách để truy cập và xóa nội dung đã được cung cấp cho Dịch vụ đó. Ngoài ra, trong một số Dịch vụ của chúng tôi, có những điều khoản hoặc cài đặt thu hẹp phạm vi sử dụng nội dung đã được gửi trong những Dịch vụ đó. Đảm bảo rằng bạn có các quyền cần thiết để cấp cho chúng tôi giấy phép này cho bất kỳ nội dung nào bạn gửi đến Dịch vụ của chúng tôi.
                        </p>
               
                        <p>
                        Hệ thống tự động của chúng tôi phân tích nội dung của bạn (bao gồm cả email) để cung cấp cho bạn các tính năng sản phẩm có liên quan đến cá nhân, chẳng hạn như kết quả tìm kiếm tùy chỉnh, quảng cáo tùy chỉnh cũng như phát hiện spam và phần mềm độc hại. Phân tích này diễn ra khi nội dung được gửi, nhận cũng như khi được lưu trữ.
                        </p>
                        
                        <p>
                        Nếu bạn có Tài khoản Google, chúng tôi có thể hiển thị tên Profile (tên hiển thị), ảnh Profile (ảnh hiển thị) của bạn và các hành động bạn thực hiện trên Google hoặc trên các ứng dụng của bên thứ ba được kết nối với Tài khoản Google của bạn (chẳng hạn như +1s, các bài đánh giá bạn viết và những nhận xét bạn đăng) trong các Dịch vụ của chúng tôi, kể cả hiển thị trong các quảng cáo và trong các bối cảnh thương mại khác. Chúng tôi sẽ tôn trọng các lựa chọn của bạn đưa ra để giới hạn các cài đặt về mức độ hiển thị hoặc chia sẻ trong Tài khoản Google của bạn. Ví dụ: bạn có thể chọn các cài đặt sao cho tên và ảnh của bạn không xuất hiện trong một quảng cáo nào đó.
                        </p>
                        
                        <p>
                        Bạn có thể tìm thêm thông tin về cách Google sử dụng và lưu trữ nội dung trong chính sách về sự riêng tư hoặc các điều khoản bổ sung dành cho Dịch vụ cụ thể. Nếu bạn gửi phản hồi hoặc đề xuất về Dịch vụ của chúng tôi, chúng tôi có thể sử dụng phản hồi hoặc đề xuất của bạn mà không phải chịu bất cứ nghĩa vụ nào.
                        </p>
						<h4>Sửa đổi và chấm dứt Dịch vụ của chúng tôi</h4>
						<p>
                        Chúng tôi không ngừng thay đổi và cải tiến Dịch vụ của mình. Chúng tôi có thể thêm hoặc xóa các chức năng hoặc tính năng và chúng tôi cũng có thể tạm ngừng hoặc ngừng hoàn toàn một Dịch vụ.
						</p>						
						<p>
                        Bạn có thể ngừng sử dụng Dịch vụ của chúng tôi bất kỳ lúc nào, mặc dù chúng tôi sẽ rất tiếc khi bạn không còn sử dụng Dịch vụ của chúng tôi nữa. Google cũng có thể ngừng cung cấp Dịch vụ cho bạn hay thêm hoặc tạo ra những giới hạn mới cho Dịch vụ của chúng tôi bất kỳ lúc nào.
                        </p>
                        <p>
                        Chúng tôi tin rằng bạn sở hữu dữ liệu của bạn và việc bảo toàn quyền truy cập của bạn đối với dữ liệu đó là điều quan trọng. Nếu chúng tôi ngừng một Dịch vụ nào đó, khi khả thi và hợp lý, chúng tôi sẽ cung cấp cho bạn thông báo trước hợp lý và cơ hội để đưa thông tin ra khỏi Dịch vụ đó. 
                        </p>
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