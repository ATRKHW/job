<?php
    ob_start();
    session_start();
    require 'header.php';
    require 'navbar.php';
    require 'sidebar.php';
    if (isset($_GET['p'])) {
        $p = $_GET['p'];
        switch ($p) {
            case 'dashboard':
                include 'dashboard.php';
                break;
            case 'user':
                include 'user/user_show.php';
                break;
            case 'user':
                include 'user/user_show.php';
                break;
            case 'user-edit':
                include 'user/user_form_update.php';
                break;
            case 'user-delete':
                include 'user/user_delete.php';
                break;
            case 'user-message':
                include 'user/user_form_message.php';
                break;
            case 'group':
                include 'category/category_show.php';
                break;
            case 'group-create':
                include 'category/category_form_insert.php';
                break;
            case 'group-edit':
                include 'category/category_form_update.php';
                break;
            case 'group-delete':
                include 'category/category_delete.php';
                break;
            case 'group-user-list':
                include 'category/category_user_list.php';
                break;
            case 'group-user-list-form':
                include 'category/category_user_list_form.php';
                break;
            case 'group-add-member':
                include 'category/category-user-list-add.php';
                break;
            case 'group-remove-member':
                include 'category/category_user_list_update.php';
                break;
            case 'post':
                include 'post/post_show.php';
                break;
        }
    }
    else {
        include 'dashboard.php';
    }
    include 'footer.php';
?>

</body>

</html>