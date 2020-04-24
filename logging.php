<?php
	include 'connection.php';
	session_start();
	echo $username = mysqli_real_escape_string($conn, $_POST['username']);
	echo $user_password = mysqli_real_escape_string($conn, $_POST['user_password']);
	$sql = "SELECT username, user_password, user_full_name FROM users WHERE username = '".$username."' AND user_password ='".$user_password."'";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_fetch_array($query);
	if(!$result)
	{
		header("location: login.php");
	} else {
		$_SESSION['user_full_name'] = $result["user_full_name"];
		header("location: dashboard.php");
	}
	mysqli_close($conn);
?>