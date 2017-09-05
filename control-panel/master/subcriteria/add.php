   <?php 
            if (isset($_POST['simpan'])) {
                $query_simpan = mysql_query("INSERT INTO subcriteria (subcriteria_name,subcriteria_initial,criteria_id)
                                                VALUES ('".$_POST['subcriteria_name']."','".$_POST['subcriteria_initial']."' , '".$_POST['criteria_id']."') ");
                if ($query_simpan) {
                     echo "<script> alert('Terima Kasih Data Berhasil Disimpan');
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
                                        <input type="text" class="form-control" name="subcriteria_name" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Initial Sub Criteria</label>
                                        <input type="text" class="form-control" name="subcriteria_initial" required="">
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
