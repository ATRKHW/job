<?php
    include '../connection.php';
	$user_id = $_GET['user_id'];
	$sql = "UPDATE users SET user_group = null WHERE user_id = '".$user_id."'";
	$query = mysqli_query($conn, $sql);
	mysqli_close($conn);
	header('location: index.php?p=group');
?>