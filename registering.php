<?php
	include 'connection.php';
	$user_full_name = $_POST['user_full_name'];
	$username = $_POST['username'];
	$user_password = $_POST['user_password'];
	$user_role = 2;
	$sql = "INSERT INTO users (username, user_password, user_full_name, user_role) VALUES ('".$username."', '".$user_password."', '".$user_full_name."', '".$user_role."')";
	$query = mysqli_query($conn, $sql);
	mysqli_close($conn);
	header("location: login.php");
?>