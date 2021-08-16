<?php 
require_once "conn.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Telegram chat</title>
	<!-- CSS only -->
	<link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" >
	<link href="node_modules/bootstrap/dist/css/bootstrap.rtl.min.css" rel="stylesheet" >
	<link href="node_modules/bootstrap/dist/css/bootstrap-reboot.min.css" rel="stylesheet" >
	<link href="node_modules/bootstrap/dist/css/bootstrap-utilities.min.css" rel="stylesheet" >
	<!-- Fontawesome links -->
	<link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/fontawesome.min.css">
	<!-- Google fonts links -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Hahmlet:wght@100;422&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="node_modules/normalize.css">
	<link rel="shortcut icon" href="favicon.ico">
</head>
<body>
	<div class="container-fluid d-flex justify-content-center align-items-center">
		<div class="wrapper row">
			<?php include "header.php" ?>
			<!-- Header finished -->
			<?php include "wrapper-content.php" ?>
			
		</div>
	</div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="node_modules/bootstrap/distjs/bootstrap.min.js" ></script>
<script src="node_modules/bootstrap/distjs/bootstrap.bundle.min.js" ></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="node_modules/@fortawesome/fontawesome-freejs/all.min.js"></script>
<script src="node_modules/@fortawesome/fontawesome-freejs/fontawesome.min.js"></script>

<script>
	$(".left-sidebar").click(function(){
		let id = $(this).data("id");
		$.ajax({
			method: "GET",
			url: "ajax-avg-sidebar.php",
			data: { id: id },
			success: function(data) {
				$('.div-menu').append(data);
				console.log(data);
			},
			error: function (jqXHR, textStatus, errorThrown) {
				console.log(jqXHR);
				console.log(textStatus);
				console.log(errorThrown);
			}
		});
		$(this).attr("disabled");
	});
	// $(".left-sidebar").click(()=>{
	// 	$(".left-sidebar").addClass("active");
	// 	console.log("a");	
	// })
</script>
</html>