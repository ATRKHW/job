<?php
    include '../../connection.php';
    $category_name = $_POST['category_name'];
	$sql = "INSERT INTO categories (category_name) VALUES ('".$category_name."')";
	$query = mysqli_query($conn, $sql);
	mysqli_close($conn);
	header('location: category_show.php');
?>