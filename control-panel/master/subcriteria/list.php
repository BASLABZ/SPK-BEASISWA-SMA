  <!-- delete data -->
<?php 
    if (isset($_GET['hapus'])) {
        $query_del = mysql_query("DELETE FROM subcriteria WHERE subriteria_id = '".$_GET['hapus']."'");
        if ($query_del) {
              echo "<script> alert('Terima Kasih Data Berhasil Dihapus');
                        location.href='index.php?hal=master/subcriteria/list'</script>";exit;
        }
    }
 ?>
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><span class="fa fa-task"></span> Data  Sub Criteria</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a>Criteria</a>
                        </li>
                        <li class="active">
                            <strong>Data Sub  Criteria</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
             <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>MASTER DATA Sub Criteria <a href="index.php?hal=master/subcriteria/add" class="btn btn-success btn-sm"> <span class="fa fa-plus"></span> Tambah</a></h5>
                       
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Subcriteria Name</th>
                        <th>Subcriteria Initial</th>
                        <th>Criteria</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $no = 1;
                        $query = mysql_query("SELECT * FROM subcriteria s inner join criteria c on s.criteria_id = c.criteria_id order by s.subriteria_id ASC");

                        while ($row_subcriteria = mysql_fetch_array($query)) {
                     ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row_subcriteria['subcriteria_name']; ?></td>
                        <td><?php echo $row_subcriteria['subcriteria_initial']; ?></td>
                        <td><?php echo $row_subcriteria['criteria_name']; ?></td>
                        <td class="text-center">
                            <a href="index.php?hal=master/subcriteria/edit&id=<?php echo $row_subcriteria['subriteria_id']; ?>" class="btn btn-sm btn-primary"><span class="fa fa-pencil"></span> Ubah</a>
                            <a href="index.php?hal=master/subcriteria/list&hapus=<?php echo $row_subcriteria['subriteria_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda Yakin ingin menghapus data ini?')"><span class="fa fa-trash"></span> Hapus</a>
                        </td>
                    </tr>
                   <?php } ?>
                    </tfoot>
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
            
        </div>