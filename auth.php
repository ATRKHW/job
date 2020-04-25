<?php
	include 'connection.php';
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT user_id, username, user_password, user_full_name, user_role, user_status FROM users WHERE username = '".$username."' AND user_password ='".$password."'";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_fetch_array($query);
	if(!$result)
	{
		header("location: index.php");
	} else {
		$_SESSION['user_full_name'] = $result["user_full_name"];
		header("location: index.php");
	}
	mysqli_close($conn);
?>