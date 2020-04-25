<?php
    include '../connection.php';
    $category_id = $_GET['category_id'];
    $sql = "SELECT * FROM categories WHERE category_id = '".$category_id."'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">แก้ไขลูกค้า</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard.php">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active">แก้ไขลูกค้า</li>
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
                <div class="col-md-12">
                    <div class="card card-info">
                        <!-- form start -->
                        <form action="category/category_update.php" method="post" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">ประเภท</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="category_name"
                                            value="<?= $result['category_name'] ?>">
                                    </div>
                                </div>
                                <input type="hidden" name="category_id" value="<?= $result['category_id'] ?>">
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">บันทึก</button>
                                <a href="?p=group" class="btn btn-default float-right">ยกเลิก</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->