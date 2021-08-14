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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
<script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="node_modules/@fortawesome/fontawesome-freejs/all.min.js"></script>
<script src="node_modules/@fortawesome/fontawesome-freejs/fontawesome.min.js"></script>

<script>
	$(".header-icons").click(()=>{
		$.ajax({
			method: "GET",
			url: "ajax-avg-sidebar.php",
			data: { product_id: id },
			success: function(data) {
				$('#shopping_cart').html(data);
				console.log(data);
			},
			error: function (jqXHR, textStatus, errorThrown) {
				console.log(jqXHR);
				console.log(textStatus);
				console.log(errorThrown);
			}
		})
	})
</script>
</html>