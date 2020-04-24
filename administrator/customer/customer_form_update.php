<?php
    include 'connection.php';
    $customer_id = $_GET['customer_id'];
    $sql = "SELECT * FROM customers WHERE customer_id = '".$customer_id."'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query);
?>
<form action="customer_update.php" method="post">
    <input type="text" name="id_card" id="" value="<?= $result['id_card'] ?>">
    <input type="text" name="first_name" id="" value="<?= $result['first_name'] ?>">
    <input type="text" name="last_name" id="" value="<?= $result['last_name'] ?>">
    <input type="hidden" name="customer_id" value="<?= $result['customer_id'] ?>">
</form>