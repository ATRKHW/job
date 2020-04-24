<?php
    include 'connection.php';
    $category_id = $_GET['category_id'];
    $sql = "DELETE FROM categories WHERE category_id = '".$category_id."'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query);
?>