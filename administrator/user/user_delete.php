<?php
    include '../connection.php';
    $user_id = $_GET['user_id'];
    $sql = "DELETE FROM users WHERE user_id = '".$user_id."'";
    $query = mysqli_query($conn, $sql);
    header('location: ../index.php?p=user');
?>