$(document).ready(function(){
	$('#btnLogin').click(function(){
		var username= $('#txtUsername').val();
		var password= $('#txtPassword').val();
		var error= $('#error');
		error.html("");
		$.ajax({
			url: 'checklogin.php',
			type: 'POST',
			data: {
				username: username,
				password: password
			},
			success: function(response){
				if (response==1) {
					window.location.href='index.php';
				}
				else{
					error.html("<p>"+response+"</p>");
				}
			}
		});
	});
});