<?php
    include 'connection.php';
    $sql = "SELECT * FROM users";
    $query = mysqli_query($conn, $sql);
?>
<table>
    <tbody>
        <?php
            while ($result = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?= $result['user_password'] ?></td>
            <td><?= $result['user_full_name'] ?></td>
            <td><?= $result['user_role'] ?></td>
            <td>
                <a href="user_form_update.php?user_id=<?= $result['user_id'] ?>">แก้ไข</a>
                <a href="user_delete.php?user_id=<?= $result['user_id'] ?>">ลบ</a> 
            </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>