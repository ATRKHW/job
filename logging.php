<?php
	include 'connection.php';
	session_start();
	echo $username = mysqli_real_escape_string($conn, $_POST['username']);
	echo $user_password = mysqli_real_escape_string($conn, $_POST['user_password']);
	$sql = "SELECT user_id, username, user_password, user_full_name, user_role, user_status FROM users WHERE username = '".$username."' AND user_password ='".$user_password."'";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_fetch_array($query);
	if(!$result)
	{
		header("location: login.php");
	} else {
		if ($result["user_status"] != 0) {
			$_SESSION['user_id'] = $result["user_id"];
			$_SESSION['user_full_name'] = $result["user_full_name"];
			switch ($result["user_role"]) {
				case 1:
					header("location: administrator/index.php?p=dashboard");
					break;
				case 2:
					header("location: dashboard.php");
					break;
				
				default:
					# code...
					break;
			}
		} else {
			header("location: login.php");
		}
	}
	mysqli_close($conn);
?>