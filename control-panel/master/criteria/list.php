  <!-- delete data -->
<?php 
    if (isset($_GET['hapus'])) {
        $query_del = mysql_query("DELETE FROM criteria WHERE criteria_id = '".$_GET['hapus']."'");
        if ($query_del) {
              echo "<script> alert('Terima Kasih Data Berhasil Dihapus');
                        location.href='index.php?hal=master/criteria/list'</script>";exit;
        }
    }
 ?>
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><span class="fa fa-task"></span> Data Criteria</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a>Criteria</a>
                        </li>
                        <li class="active">
                            <strong>Data Criteria</strong>
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
                        <h5>MASTER DATA Criteria <a href="index.php?hal=master/criteria/add" class="btn btn-success btn-sm"> <span class="fa fa-plus"></span> Tambah</a></h5>
                       
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kriteria</th>
                        <th>Initial</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $no = 1;
                        $query = mysql_query("SELECT * FROM criteria order by criteria_id ASC");

                        while ($row_criteria = mysql_fetch_array($query)) {
                     ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row_criteria['criteria_name']; ?></td>
                        <td><?php echo $row_criteria['criteria_initial']; ?></td>
                        <td class="text-center">
                            <a href="index.php?hal=master/criteria/edit&id=<?php echo $row_criteria['criteria_id']; ?>" class="btn btn-sm btn-primary"><span class="fa fa-pencil"></span> Ubah</a>
                            <a href="index.php?hal=master/criteria/list&hapus=<?php echo $row_criteria['criteria_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda Yakin ingin menghapus data ini?')"><span class="fa fa-trash"></span> Hapus</a>
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