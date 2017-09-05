   <?php 
            if (isset($_POST['simpan'])) {
                $pass = $_POST['password'];
                $password = md5($pass);
                $query_simpan = mysql_query("INSERT INTO access (access_username,access_password,access_control)
                                                VALUES ('".$_POST['username']."','".$password."','".$_POST['control']."') ");
                if ($query_simpan) {
                     echo "<script> alert('Terima Kasih Data Berhasil Disimpan');
                        location.href='index.php?hal=master/user/list'</script>";exit;
                }
            }
    ?>
   <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><span class="fa fa-user"></span> Data User</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a>User</a>
                        </li>
                        <li class="active">
                            <strong>Tambah Data User</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><span class="fa fa-plus"></span> Form Tambah Data</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-6">
                                <form class="role" method="POST">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="username" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" required="">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="control">
                                            <option value="admin">ADMIN</option>
                                            <option value="petugas">PETUGAS</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-sm" name="simpan"><span class="fa fa-save"></span> Simpan</button>
                                         <button type="reset" class="btn btn-warning btn-sm"><span class="fa fa-refresh"></span> Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
