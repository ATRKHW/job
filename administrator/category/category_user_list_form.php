<?php
    include '../connection.php';
    $group_id = $_GET['group_id'];
    $group_name = $_GET['group_name'];
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
                    <h1 class="m-0 text-dark">กลุ่ม <?= $group_name ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard.php">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active">กลุ่ม <?= $group_name ?></li>
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
                            <h3 class="card-title">รายชื่อสมาชิก</h3>

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
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while ($result = mysqli_fetch_array($query)) {
                                    ?>
                                    <tr>
                                        <td><?= $result['username'] ?></td>
                                        <td>
                                            <a class="btn btn-success"
                                                href="?p=group-add-member&user_id=<?= $result['user_id'] ?>&group_id=<?= $group_id ?>">เพิ่ม</a>
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
        $('#group').addClass('active')
    })
</script>