<?php
    include 'connection.php';
    $sql = "SELECT * FROM posts";
    $query = mysqli_query($conn, $sql);
?>
<table>
    <tbody>
        <?php
            while ($result = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?= $result['post_topic'] ?></td>
            <td><?= $result['post_description'] ?></td>
            <td><img src="<?= $result['post_image'] ?>" alt=""></td>
            <td>
                <a href="post_form_update.php?post_id=<?= $result['post_id'] ?>">แก้ไข</a>
                <a href="post_delete.php?post_id=<?= $result['post_id'] ?>">ลบ</a> 
            </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>