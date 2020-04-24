<?php
    include 'connection.php';
    $user_id = $_GET['user_id'];
    $sql = "SELECT * FROM users WHERE user_id = '".$user_id."'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query);
?>
<form action="customer_update.php" method="post">
    <input type="text" name="user_password" id="" value="<?= $result['user_password'] ?>">
    <input type="text" name="user_full_name" id="" value="<?= $result['user_full_name'] ?>">
    <input type="text" name="user_role" id="" value="<?= $result['user_role'] ?>">
    <input type="hidden" name="user_id" value="<?= $result['user_id'] ?>">
</form>