<?php
    include '../connection.php';
    $user_id = $_GET['user_id'];
    $sql = "SELECT * FROM users WHERE user_id = '".$user_id."'";
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
                    <h1 class="m-0 text-dark">แก้ไขผู้ใช้</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard.php">หน้าหลัก</a></li>
                        <li class="breadcrumb-item active">แก้ไขผู้ใช้</li>
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
                        <form action="user/user_update.php" method="post" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">ชื่อบัญชีผู้ใช้</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control-plaintext" name="username"
                                            value="<?= $result['username'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">รหัสผ่าน</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="user_password"
                                            value="<?= $result['user_password'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ชื่อ - สกุล</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="user_full_name"
                                            value="<?= $result['user_full_name'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ระดับ</label>
                                    <div class="col-sm-10">
                                        <select name="user_role" id="" class="form-control">
                                            <option value="1"
                                                <?= $retVal = ($result['user_role'] == 1) ? 'selected' : '' ; ?>>admin
                                            </option>
                                            <option value="2"
                                                <?= $retVal = ($result['user_role'] == 2) ? 'selected' : '' ; ?>>
                                                membership</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ระดับ</label>
                                    <div class="col-sm-10">
                                        <select name="user_status" id="" class="form-control">
                                            <option value="1"
                                                <?= $retVal = ($result['user_status'] == 1) ? 'selected' : '' ; ?>>
                                                เปิดการใช้งาน</option>
                                            <option value="2"
                                                <?= $retVal = ($result['user_status'] == 2) ? 'selected' : '' ; ?>>
                                                ปิดการใช้งาน</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="user_id" value="<?= $result['user_id'] ?>">
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">บันทึก</button>
                                <a href="?p=user" class="btn btn-default float-right">ยกเลิก</a>
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
        $('#user').addClass('active')
    })
</script>