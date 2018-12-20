window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("nav-sticky");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
$(document).ready(function(){
	$('#list-photo-approval button').click(function(){
		var idphoto= $(this).attr('id');
		var typeButton=idphoto.substr(0,1);
		var id=idphoto.slice(1);
		$.ajax({
			url: 'resolveapproval.php',
			type: 'POST',
			data: {
				typeButton: typeButton,
				id: id
			},
			success: function(response){
				if (response=='d') {
					$('#clickbutton-approval-'+id).html("<button id='btn-click-approval'>Ảnh đã được duyệt</button>");
				}
				if (response=='x') {
					$('#clickbutton-approval-'+id).html("<button id='btn-click-approval'>Ảnh đã được xóa</button>");
				}
			}
		});
	});
	$('#upload').on('click', function () {
        var name = document.getElementById("file").files[0].name;
        var form_data = new FormData();
        var ext = name.split('.').pop().toLowerCase();
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("file").files[0]);
        var f = document.getElementById("file").files[0];
        var fsize = f.size;
        var error= $('#upload_image');
        var image= $('#photo-upload');
        var coll= $('#col-val').val();
        var description= $('#txtDescription').val();
        var sizefile=parseInt(fsize/1024);
        var accountName=$('#account-name').text();
        error.html("");
        if(coll==""){
            $('#upload_image').html("<p>Bạn phải chọn thể loại ảnh</p>");
        }else{
            if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1){
                $('#upload_image').html("<p>File không hợp lệ</p>");
            }else{
                if(fsize < 20000000){
                    form_data.append("file", document.getElementById('file').files[0]);
                    form_data.append('coll', coll);
                    form_data.append('description', description);
                    form_data.append('sizefile', sizefile);
                    form_data.append('accountName', accountName);
                    $.ajax({
                        url:"resolveupload.php",
                        method:"POST",
                        data: form_data,
                        contentType: false,
                        cache: false,
                        processData: false,
                        success:function(response){
                            if(response == "success"){
                            image.html("<img src='image/background/"+name+"' class='image-upload-form'>");
                            error.html("<p>Upload file thành công</p>");
                        }
                        else{
                            error.html("<p>"+response+"</p>");
                        }
                        }
                    });
                }
                else{
                   $('#upload_image').html("<p>Ảnh phải có kích cỡ dưới 20MB</p>");
                }
            }
        }
    });
    $('#btn-comment').click(function(){
        var comment=$('#txtComment').val();
        $.ajax({
            url: 'resolvecomment.php',
            type: 'POST',
            data: {
                comment: comment,
                idUserName: idUserName,
                idImage: idImage
            },
            success: function(response){
                if (response==1) {
                    window.location.reload();
                }
            }
        });
    });
});
