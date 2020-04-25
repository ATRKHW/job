<?php
    include '../connection.php';
    $sql = "SELECT * FROM categories";
    $query = mysqli_query($conn, $sql);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">กลุ่ม <a href="?p=group-create" class="btn btn-success"><i
                                class="fas fa-plus"></i></a></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard.php">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active">เพิ่มกลุ่ม</li>
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
                            <h3 class="card-title">รายชื่อกลุ่ม</h3>

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
                                        <th>ชื่อกลุ่ม</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while ($result = mysqli_fetch_array($query)) {
                                    ?>
                                    <tr>
                                        <td><?= $result['category_name'] ?></td>
                                        <td>
                                            <a class="btn btn-info"
                                                href="?p=group-user-list&category_id=<?= $result['category_id'] ?>&category_name=<?= $result['category_name'] ?>">จัดการ</a>
                                            <a class="btn btn-warning"
                                                href="?p=group-edit&category_id=<?= $result['category_id'] ?>">แก้ไข</a>
                                            <a class="btn btn-danger"
                                                href="?p=group-delete&category_id=<?= $result['category_id'] ?>">ลบ</a>
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