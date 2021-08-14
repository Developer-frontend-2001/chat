<?php 
require_once "conn.php";
if (isset($_GET['id'])&&!empty($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM chat_users WHERE category_id = ".$id;
	$result = mysqli_query($conn, $sql);
	$chat_users = mysqli_fetch_assoc($result);
	while ($chat_users = mysqli_fetch_assoc($result);) {
		// code...
	}
}


?>