<?php
    include '../connection.php';
    $message_id = $_GET['message_id'];
    $sql = "DELETE FROM messages WHERE message_id = '".$message_id."'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query);
    header('location: index.php?p=user');
?>