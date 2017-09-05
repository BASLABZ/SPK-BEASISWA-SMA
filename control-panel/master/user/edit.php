   <?php 
          $row_data = mysql_fetch_array(mysql_query("SELECT * FROM access where access_id = '".$_GET['id']."'"));

            if (isset($_POST['ubah'])) {
                $pass = $_POST['password'];
                $password = md5($pass);

                $query_ubah = mysql_query("UPDATE access set access_username='".$_POST['username']."' , access_password = '".$password."' , access_control = '".$_POST['control']."' where  access_id = '".$_GET['id']."' ");
                if ($query_ubah) {
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
                            <strong>Ubah Data User</strong>
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
                            <h5><span class="fa fa-plus"></span> Form Ubah Data</h5>
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
                                        <input type="text" class="form-control" name="username" required="" value="<?php echo $row_data['access_username']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" required="" value="<?php echo $row_data['access_password']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="control">
                                              <option value="admin" <?php if($row_data['access_control']=='admin'){echo "selected=selected";}?>>ADMIN</option>
                                              <option value="petugas" <?php if($row_data['access_control']=='petugas'){echo "selected=selected";}?>>PETUGAS</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-sm" name="ubah"><span class="fa fa-edit"></span> Ubah</button>
                                         <button type="reset" class="btn btn-warning btn-sm"><span class="fa fa-refresh"></span> Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
