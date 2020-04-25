<?php
    include '../../connection.php';
	$category_name = $_POST['category_name'];
	$category_id = $_POST['category_id'];
	$sql = "UPDATE categories SET category_name = '".$category_name."' WHERE category_id = '".$category_id."'";
	$query = mysqli_query($conn, $sql);
	mysqli_close($conn);
	header('location: ../index.php?p=group');
?>