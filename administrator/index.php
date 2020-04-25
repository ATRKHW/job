<?php
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
            case 'post':
                include 'post/post_show.php';
                break;
        }
    }
    else {
        include 'dashboard.php';
    }
?>

</body>

</html>