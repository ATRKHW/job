<?php
    include 'connection.php';
	$post_topic = $_POST['post_topic'];
	$post_description = $_POST['post_description'];
	$post_id = $_POST['post_id'];
	$sql = "UPDATE posts SET post_topic = '".$post_topic."', post_description = '".$post_description."' WHERE customer_id = '".$post_id."'";
	$query = mysqli_query($conn, $sql);
	mysqli_close($conn);
?>