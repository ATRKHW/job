<?php
    include '../../connection.php';
	$user_password = $_POST['user_password'];
	$user_full_name = $_POST['user_full_name'];
	$user_role = $_POST['user_role'];
	$user_status = $_POST['user_status'];
	$user_id = $_POST['user_id'];
	$sql = "UPDATE users SET user_password = '".$user_password."', user_full_name = '".$user_full_name."', user_role = '".$user_role."', user_status = '".$user_status."' WHERE user_id = '".$user_id."'";
	$query = mysqli_query($conn, $sql);
	mysqli_close($conn);
	header('location: user_show.php');
?>