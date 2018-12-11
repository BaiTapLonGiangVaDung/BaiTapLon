<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quản lý</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://unsplash.com/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
    <div class="container-fluid background-mn ">
        <div class="row ">
            <div class="col-md-6 padding-mn">
                <a id="logo-mn" href="index.php">Slytherin</a>
                <p style="font-size: 35px; font-weight: bold;padding-left: 10px;
                background: -webkit-linear-gradient(white, #bba1a1);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;">
                    Manager </p>
            </div>
            <div class="col-md-6 padding-mn2">
                <p style="color:white">Xin chào Admin</p>
                <div id="input-mn">
                    <input type="button" value="Tài khoản" />
                    <input type="button" value="Cài đặt" />
                    <input type="button" value="Đăng xuất" />
                </div>
            </div>
        </div>        
    </div>
    <div class="container-fluid">
    <div class="row">
            <div class="col-md-12 background-mn2">           
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'London')">Ảnh chờ duyệt</button>
                    <button class="tablinks" onclick="openCity(event, 'Paris')">Ảnh đã duyệt</button>
                    <button class="tablinks" onclick="openCity(event, 'Tokyo')">Ảnh vừa xóa</button>
                </div>
                <div id="London" class="tabcontent">              
                </div>
                <div id="Paris" class="tabcontent">                 
                </div>
                <div id="Tokyo" class="tabcontent">         
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="JS/management.js"></script>
</body>

</html>