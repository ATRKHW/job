<?php
    include 'connection.php';
    $post_id = $_GET['post_id'];
    $sql = "SELECT * FROM posts WHERE post_id = '".$post_id."'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query);
?>
<form action="customer_insert.php" method="post">
    <input type="text" name="post_topic" id="" value="<?= $result['post_topic'] ?>">
    <input type="text" name="post_description" id="" value="<?= $result['post_description'] ?>">
    <input type="hidden" name="post_id" value="<?= $result['post_id'] ?>">
</form>