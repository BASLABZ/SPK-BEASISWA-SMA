   <?php 
            $row_data = mysql_fetch_array(mysql_query("SELECT * FROM students where students_id = '".$_GET['id']."' "));
            if (isset($_POST['ubah'])) {
                $tanggallahir = jin_date_sql($_POST['students_dateofborn']);
                $query_ubah = mysql_query("UPDATE students set 
                                                                students_name = '".$_POST['students_name']."',
                                                                students_dateofborn = '".$tanggallahir."',
                                                                students_address = '".$_POST['students_address']."',
                                                                students_email = '".$_POST['students_email']."',
                                                                students_phonenumber = '".$_POST['students_phonenumber']."',
                                                                students_class = '".$_POST['students_class']."',
                                                                students_majors = '".$_POST['students_majors']."'
                                                            WHERE students_id = '".$_GET['id']."'

                    ");
                if ($query_ubah) {
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
                            <h5><span class="fa fa-plus"></span> Form Edit Data</h5>
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
                                        <input type="text" class="form-control" name="students_name" required="" value="<?php echo $row_data['students_name']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="students_dateofborn" required="" value="<?php echo $row_data['students_dateofborn']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                      <textarea class="form-control" name="students_address" required=""><?php echo $row_data['students_address']; ?> </textarea>
                                    </div>
                                     <div class="form-group">
                                        <label>No Telp</label>
                                        <input type="text" class="form-control" name="students_phonenumber" required="" value="<?php echo $row_data['students_phonenumber']; ?>">
                                    </div>
                                     <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="students_email" required="" value="<?php echo $row_data['students_email']; ?>">
                                    </div>
                                     <div class="form-group">
                                        <label>Kelas</label>
                                        <input type="text" class="form-control" name="students_class" required="" value="<?php echo $row_data['students_class']; ?>">
                                    </div>
                                     <div class="form-group">
                                        <label>Major</label>
                                        <input type="text" class="form-control" name="students_majors" required="" value="<?php echo $row_data['students_majors']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-sm" name="ubah"><span class="fa fa-save"></span> Simpan</button>
                                         <button type="reset" class="btn btn-warning btn-sm"><span class="fa fa-refresh"></span> Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
