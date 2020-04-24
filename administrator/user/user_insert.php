<?php
    include 'connection.php';
	$username = $_POST['username'];
	$user_password = $_POST['user_password'];
	$user_full_name = $_POST['user_full_name'];
	$user_role = $_POST['user_role'];
	$sql = "INSERT INTO users (username, user_password, user_full_name, user_role) VALUES ('".$username."', '".$user_password."', '".$user_full_name."', '".$user_role."')";
	$query = mysqli_query($conn, $sql);
	mysqli_close($conn);
?>