<?php
	include '../connection.php';
	$user_id = $_GET['user_id'];
	$group_id = $_GET['group_id'];
	$sql = "UPDATE users SET user_group = '".$group_id."' WHERE user_id = '".$user_id."'";
	$query = mysqli_query($conn, $sql);
	mysqli_close($conn);
	// header('location: ../index.php?p=group-user-list');
?>