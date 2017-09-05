<?php 
      
      include '../config/config.php';
      session_start();
      if (isset($_GET['logout'])) {
          session_destroy();
             echo "<script> alert('Anda Yakin Ingin Keluar'); location.href='../index.php' </script>";exit;}
 ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>SPK-BEASISWA | Dashboard <?php echo $_SESSION['access_control']; ?></title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
       <?php include 'menukiri.php'; ?>

        <div id="page-wrapper" class="gray-bg dashbard-1">
       
           
             <?php 
          if(empty( $_GET['hal']) ||  $_GET['hal'] ==""){
          $_GET['hal'] = "konten-tengah.php";
          }
          if(file_exists( $_GET['hal'].".php")){
          include  $_GET['hal'].".php";
          }else {
          include"konten-tengah.php";
          }   
       
            ?>
            
        </div>
    </div>
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/demo/sparkline-demo.js"></script>
    <script src="js/plugins/chartJs/Chart.min.js"></script>
    <script src="js/plugins/toastr/toastr.min.js"></script>
     <script src="js/plugins/dataTables/datatables.min.js"></script>
<script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({});
        });
    </script>
</body>
</html>
