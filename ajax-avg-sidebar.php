<?php 
require_once "conn.php";
if (isset($_GET['id'])&&!empty($_GET['id'])) {
	$data = '';
	$id = $_GET['id'];
	$sql = "SELECT * FROM chat_users WHERE category_id = ".$id." LIMIT 2";
	$result = mysqli_query($conn, $sql);
	while ($chat_users = mysqli_fetch_assoc($result)) {
		$data = '<div class="div-menu-item">
		<div class="div-menu-item-wrapper">
		<div>
		<img src="telegram-logo-1.png" class="rounded-circle img-fluid" alt="Users Images">
		</div>
		<div class="div-menu-item-wrapper-item">
		<span>'.$chat_users["name"].'</span>
		<span>Comments</span>
		</div>
		</div>
		<div>'.date("H:s").'</div>
		</div>';
	}
	echo $data.$id;
}

?>