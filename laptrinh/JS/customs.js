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
			url: 'solveapproval.php',
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
});
