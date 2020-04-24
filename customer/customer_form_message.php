<form action="customer_insert_message.php" method="post">
    <textarea name="message_description" id="" cols="30" rows="10"></textarea>
    <input type="hidden" name="customer_id" value="<?= $_GET['customer_id'] ?>">
</form>