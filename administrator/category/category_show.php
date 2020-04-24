<?php
    include 'connection.php';
    $sql = "SELECT * FROM categories";
    $query = mysqli_query($conn, $sql);
?>
<table>
    <tbody>
        <?php
            while ($result = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?= $result['category_name'] ?></td>
            <td>
                <a href="category_form_update.php?category_id=<?= $result['category_id'] ?>">แก้ไข</a>
                <a href="category_delete.php?category_id=<?= $result['category_id'] ?>">ลบ</a> 
            </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>