   <?php 
          $row_data = mysql_fetch_array(mysql_query("SELECT * FROM criteria where criteria_id = '".$_GET['id']."'"));

            if (isset($_POST['ubah'])) {
           
                $query_ubah = mysql_query("UPDATE criteria set criteria_name='".$_POST['criteria_name']."' , criteria_initial = '".$_POST['criteria_initial']."' where  criteria_id = '".$_GET['id']."'");
                if ($query_ubah) {
                     echo "<script> alert('Terima Kasih Data Berhasil Disimpan');
                        location.href='index.php?hal=master/criteria/list'</script>";exit;
                }
            }
    ?>
   <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><span class="fa fa-user"></span> Data Criteria</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a>Criteria</a>
                        </li>
                        <li class="active">
                            <strong>Ubah Data Criteria</strong>
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
                                        <label>Nama Criteria</label>
                                        <input type="text" class="form-control" name="criteria_name" required="" value="<?php echo $row_data['criteria_name']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Initial Criteria</label>
                                        <input type="text" class="form-control" name="criteria_initial" required="" value="<?php echo $row_data['criteria_initial']; ?>">
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
