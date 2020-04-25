<?php
	session_start();
    include '../../connection.php';
	$message_description = $_POST['message_description'];
	$user_sender_id = $_SESSION['user_id'];
	$user_reciever_id = $_POST['user_id'];
	$sql = "INSERT INTO messages (message_description, user_sender_id, user_reciever_id) VALUES ('".$message_description."', '".$user_sender_id."', '".$user_reciever_id."')";
	$query = mysqli_query($conn, $sql);
	mysqli_close($conn);
	// header('location: message/message_show.php');
?>