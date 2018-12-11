$(document).ready(function(){
	$('#btnSignin').click(function(){
		var username= $('#txtUsernameLogin').val();
		var password= $('#txtPasswordLogin').val();
		var ConfirmPassword= $('#txtConfirmPassword').val();
		var email= $('#txtEmail').val();
		var error= $('#errorSignin');
		error.html("");
		if (password==ConfirmPassword) {
			$.ajax({
				url: 'checksignin.php',
				type: 'POST',
				data: {
					username: username,
					password: password,
					email: email
			},
			success: function(response){
				if (response==1) {
				error.html("<p>Đăng ký thành công,xin hãy vào gmail để xác thực tài khoản</p>")
				}
				else{
				error.html("<p>"+response+"</p>");
				}
			}
		});
		}else{
			error.html("<p>Mật khẩu nhập lại phải trùng với mật khẩu ban đầu</p>")
		}
	});
});