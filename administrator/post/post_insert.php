<?php
    include '../../connection.php';
	$post_topic = $_POST['post_topic'];
	$post_description = $_POST['post_description'];
	$user_id = $_SESSION['user_id'];
	$target_dir = "images/";
	$path = $_FILES['post_image']['name'];
	$ext = pathinfo($path, PATHINFO_EXTENSION);
	$target_file = $target_dir . time() . '.' . $ext;
	move_uploaded_file($_FILES["post_image"]["tmp_name"] , $target_file);
	$sql = "INSERT INTO posts (post_topic, post_description, post_image, user_id) VALUES ('".$post_topic."', '".$post_description."', '".$target_file."', '".$user_id."')";
	$query = mysqli_query($conn, $sql);
	mysqli_close($conn);
	header('location: ../index.php?p=post');
?>