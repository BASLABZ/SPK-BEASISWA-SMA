   <?php 
            $row_data  = mysql_fetch_array(mysql_query("SELECT * FROM subcriteria where subriteria_id = '".$_GET['id']."'"));
            if (isset($_POST['ubah'])) {
                $query_ubah = mysql_query("UPDATE subcriteria set subcriteria_name = '".$_POST['subcriteria_name']."',
                                                                    subcriteria_initial = '".$_POST['subcriteria_initial']."',
                                                                    criteria_id = '".$_POST['criteria_id']."'
                                                            where subriteria_id = '".$_GET['id']."'");
                if ($query_ubah) {
                     echo "<script> alert('Terima Kasih Data Berhasil Diubah');
                        location.href='index.php?hal=master/subcriteria/list'</script>";exit;
                }
            }
    ?>
   <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><span class="fa fa-user"></span> Data Sub Criteria</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a>Sub Criteria</a>
                        </li>
                        <li class="active">
                            <strong>Tambah Data Sub Criteria</strong>
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
                                        <label>Nama Sub Criteria</label>
                                        <input type="text" class="form-control" name="subcriteria_name" required="" value="<?php echo $row_data['subcriteria_name']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Initial Sub Criteria</label>
                                        <input type="text" class="form-control" name="subcriteria_initial" required="" value="<?php echo $row_data['subcriteria_initial']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Criteria</label>
                                        <select class="form-control" name="criteria_id">
                                            <?php 
                                                $query_criteria = mysql_query("SELECT * FROM criteria order by criteria_id ASC");
                                                while ($criteria   = mysql_fetch_array($query_criteria)) {
                                                    
                                             ?>
                                             <option value="<?php echo $criteria['criteria_id']; ?>"><?php echo $criteria['criteria_name']; ?></option>
                                            <?php } ?>
                                        </select>
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
