<?php
    include '../connection.php';
    $sql = "SELECT * FROM users";
    $query = mysqli_query($conn, $sql);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">  
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">ผู้ใช้</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard.php">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active">ผู้ใช้</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">รายการผู้ใช้</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="ค้นหา">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ชื่อบัญชีผู้ใช้</th>
                                        <th>รหัสผ่าน</th>
                                        <th>ชื่อ - สกุล</th>
                                        <th>ระดับ</th>
                                        <th>สถานะ</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while ($result = mysqli_fetch_array($query)) {
                                    ?>
                                    <tr>
                                        <td><?= $result['username'] ?></td>
                                        <td><?= $result['user_password'] ?></td>
                                        <td><?= $result['user_full_name'] ?></td>
                                        <td><?= $retVal = ($result['user_role'] == 1) ? 'admin' : 'membership' ; ?></td>
                                        <td><?= $retVal = ($result['user_status'] == 1) ? 'เปิดใช้งาน' : 'ปิดการใช้งาน' ; ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm"
                                                href="?p=user-message&user_id=<?= $result['user_id'] ?>">ข้อความ</a>
                                            <a class="btn btn-info btn-sm"
                                                href="?p=user-edit&user_id=<?= $result['user_id'] ?>">แก้ไข</a>
                                            <a class="btn btn-danger btn-sm"
                                                href="?p=user-delete&user_id=<?= $result['user_id'] ?>">ลบ</a>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
    require 'script.php';
?>

<script>
    $(document).ready(function () {
        $('#user').addClass('active')
    })
</script>