<?php
    include 'connection.php';
    $customer_id = $_GET['customer_id'];
    $sql = "DELETE FROM customers WHERE customer_id = '".$customer_id."'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query);
?>