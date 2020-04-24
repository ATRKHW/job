<?php
    include '../../connection.php';
    $post_id = $_GET['post_id'];
    $sql = "DELETE FROM posts WHERE post_id = '".$post_id."'";
    $query = mysqli_query($conn, $sql);
    header('location: post_show.php');
?>