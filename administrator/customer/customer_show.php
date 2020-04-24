<?php
    include 'connection.php';
    $sql = "SELECT * FROM customers";
    $query = mysqli_query($conn, $sql);
?>
<table>
    <tbody>
        <?php
            while ($result = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?= $result['id_card'] ?></td>
            <td><?= $result['first_name'] ?></td>
            <td><?= $result['last_name'] ?></td>
            <td>
                <a href="customer_form_send_messages.php?customer_id=<?= $result['customer_id'] ?>">ข้อความ</a>
                <a href="customer_form_update.php?customer_id=<?= $result['customer_id'] ?>">แก้ไข</a>
                <a href="customer_delete.php?customer_id=<?= $result['customer_id'] ?>">ลบ</a> 
            </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>