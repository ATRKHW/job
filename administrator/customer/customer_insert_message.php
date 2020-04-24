<?php
    include '../../connection.php';
	$message_description = $_POST['message_description'];
	$customer_id = $_POST['customer_id'];
	$user_id = $_POST['user_id'];
	$sql = "INSERT INTO messages (message_description, customer_id, user_id) VALUES ('".$message_description."', '".$customer_id."', '".$user_id."')";
	$query = mysqli_query($conn, $sql);
	mysqli_close($conn);
	header('location: message/message_show.php');
?>