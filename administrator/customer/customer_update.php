<?php
    include 'connection.php';
	$id_card = $_POST['id_card'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$customer_id = $_POST['customer_id'];
	$sql = "UPDATE customers SET id_card = '".$id_card."', first_name = '".$first_name."', last_name = '".$last_name."' WHERE customer_id = '".$customer_id."'";
	$query = mysqli_query($conn, $sql);
	mysqli_close($conn);
?>