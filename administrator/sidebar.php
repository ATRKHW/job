<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">..........</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $_SESSION['user_full_name'] ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
			   with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="?p=user" class="nav-link" id="user">
                        <i class="fas fa-user nav-icon"></i>
                        <p>
                            ผู้ใช้
                        </p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="?p=customer" class="nav-link" id="customer">
                        <i class="fas fa-user-tie"></i>
                        <p>
                            ลูกค้า
                        </p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="?p=group" class="nav-link" id="group">
                        <i class="fas fa-users nav-icon"></i>
                        <p>
                            กลุ่ม
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?p=post" class="nav-link" id="post">
                        <i class="fas fa-blog nav-icon"></i>
                            กระทู้
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" id="">
                        <i class="fas fa-inbox nav-icon"></i>
                        <p>
                            ข้อความ
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../logout.php" class="nav-link">
                        <i class="fas fa-sign-out-alt nav-icon"></i>
                        <p>
                            ออกจากระบบ
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>