   <?php 
            if (isset($_POST['simpan'])) {
                $tanggallahir = jin_date_sql($_POST['students_dateofborn']);
                $query_simpan = mysql_query("INSERT INTO students
                                                    (students_name,students_dateofborn,students_address,students_phonenumber,students_email,students_class,students_majors) 
                                            values ('".$_POST['students_name']."','".$tanggallahir."',
                                                    '".$_POST['students_address']."','".$_POST['students_phonenumber']."',
                                                    '".$_POST['students_email']."','".$_POST['students_class']."',
                                                    '".$_POST['students_majors']."')");
                if ($query_simpan) {
                     echo "<script> alert('Terima Kasih Data Berhasil Disimpan');
                        location.href='index.php?hal=master/students/list'</script>";exit;
                }
            }
    ?>
   <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><span class="fa fa-user"></span> Data Siswa</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a>Siswa</a>
                        </li>
                        <li class="active">
                            <strong>Tambah Data Siswa</strong>
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
                                        <label>Nama Siswa</label>
                                        <input type="text" class="form-control" name="students_name" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="students_dateofborn" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                      <textarea class="form-control" name="students_address" required=""> </textarea>
                                    </div>
                                     <div class="form-group">
                                        <label>No Telp</label>
                                        <input type="text" class="form-control" name="students_phonenumber" required="">
                                    </div>
                                     <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="students_email" required="">
                                    </div>
                                     <div class="form-group">
                                        <label>Kelas</label>
                                        <input type="text" class="form-control" name="students_class" required="">
                                    </div>
                                     <div class="form-group">
                                        <label>Major</label>
                                        <input type="text" class="form-control" name="students_majors" required="">
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
