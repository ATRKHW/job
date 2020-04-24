<?php
    include '../../connection.php';
	$customer_id_card = $_POST['customer_id_card'];
	$customer_name = $_POST['customer_name'];
	$customer_tel = $_POST['customer_tel'];
	$customer_email = $_POST['customer_email'];
	$customer_id = $_POST['customer_id'];
	$sql = "UPDATE customers SET customer_id_card = '".$customer_id_card."', customer_name = '".$customer_name."', customer_tel = '".$customer_tel."', customer_email = '".$customer_email."' WHERE customer_id = '".$customer_id."'";
	$query = mysqli_query($conn, $sql);
	mysqli_close($conn);
	header('location: customer_show.php');
?>