<?php
    include 'connection.php';
	$id_card = $_POST['id_card'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$sql = "INSERT INTO customers (id_card, first_name, last_name) VALUES ('".$id_card."', '".$first_name."', '".$last_name."')";
	$query = mysqli_query($conn, $sql);
	mysqli_close($conn);
?>