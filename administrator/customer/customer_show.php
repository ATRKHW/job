<?php
    include '../connection.php';
    $sql = "SELECT * FROM customers";
    $query = mysqli_query($conn, $sql);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">ลูกค้า <a href="customer_form_insert.php" class="btn btn-success"><i
                                class="fas fa-user-plus"></i></a></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard.php">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active">ลูกค้า</li>
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
                            <h3 class="card-title">รายการลูกค้า</h3>

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
                                        <th>เลขที่บัตรประจำตัวประชาชน</th>
                                        <th>ชื่อ - สกุล</th>
                                        <th>เบอร์โทรศัพท์</th>
                                        <th>อีเมล์</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                                while ($result = mysqli_fetch_array($query)) {
                                            ?>
                                    <tr>
                                        <td><?= $result['customer_id_card'] ?></td>
                                        <td><?= $result['customer_name'] ?></td>
                                        <td><?= $result['customer_tel'] ?></td>
                                        <td><?= $result['customer_email'] ?></td>
                                        <td>
                                            <a class="btn btn-primary"
                                                href="customer_form_message.php?customer_id=<?= $result['customer_id'] ?>">ข้อความ</a>
                                            <a class="btn btn-warning"
                                                href="customer_form_update.php?customer_id=<?= $result['customer_id'] ?>">แก้ไข</a>
                                            <a class="btn btn-danger"
                                                href="customer_delete.php?customer_id=<?= $result['customer_id'] ?>">ลบ</a>
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