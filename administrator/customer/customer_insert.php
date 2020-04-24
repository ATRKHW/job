<?php
    include '../../connection.php';
	$customer_id_card = $_POST['customer_id_card'];
	$customer_name = $_POST['customer_name'];
	$customer_tel = $_POST['customer_tel'];
	$customer_email = $_POST['customer_email'];
	$sql = "INSERT INTO customers (customer_id_card, customer_name, customer_tel, customer_email) VALUES ('".$customer_id_card."', '".$customer_name."', '".$customer_tel."', '".$customer_email."')";
	$query = mysqli_query($conn, $sql);
	mysqli_close($conn);
	header('location: customer_show.php');
?>