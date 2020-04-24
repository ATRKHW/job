<?php
    include 'connection.php';
    $category_id = $_GET['category_id'];
    $sql = "SELECT * FROM categories WHERE category_id = '".$category_id."'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query);
?>
<form action="category_update.php" method="post">
    <input type="text" name="category_name" id="" value="<?= $result['category_name'] ?>">
    <input type="hidden" name="category_id" value="<?= $result['category_id'] ?>">
</form>