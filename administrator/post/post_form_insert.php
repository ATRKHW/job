<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">เพิ่มกระทู้</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard.php">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active">เพิ่มกระทู้</li>
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
                        <form action="post/post_insert.php" method="post" enctype="multipart/form-data"
                            class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">เรื่อง</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="post_topic">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">รายละเอียด</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="post_description">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">รูปภาพ</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="" name="post_image">
                                        <!-- <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="post_image">
                                                    <label class="custom-file-label" for="exampleInputFile">เลือกไฟล์</label>
                                                </div> -->
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">บันทึก</button>
                                <a href="?p=post" class="btn btn-default float-right">ยกเลิก</a>
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

<?php
    require 'script.php';
?>

<script>
    $(document).ready(function () {
        $('#post').addClass('active')
    })
</script>