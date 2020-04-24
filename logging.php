<?php
	include 'connection.php';
	session_start();
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$sql = "SELECT username, pwd, fullname FROM users WHERE username = '".$username."' AND pwd ='".$pwd."'";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_fetch_array($query);
	if(!$result)
	{
		header("Location: login.php");
	} else {
		$_SESSION['username'] = $result["username"];
		header("location: index.php");
	}
	mysqli_close($conn);
?>