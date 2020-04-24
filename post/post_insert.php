<?php
    include 'connection.php';
	$post_topic = $_POST['post_topic'];
	$post_description = $_POST['post_description'];
	$post_image = $_POST['post_image'];
	$target_dir = "images/";
	$target_file = $target_dir . basename($_FILES["post_image"]["name"]);
    move_uploaded_file($_FILES["post_image"]["tmp_name"] , $target_file);
	$sql = "INSERT INTO posts (post_topic, post_description, post_image) VALUES ('".$post_topic."', '".$post_description."', '".$post_image."')";
	$query = mysqli_query($conn, $sql);
	mysqli_close($conn);
?>