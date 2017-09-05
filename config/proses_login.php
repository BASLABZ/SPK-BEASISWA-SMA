<?php
session_start();
include 'config.php';
$username = $_POST['username'];
$password = $_POST['password'];
$password = md5($password);

$query = "SELECT * FROM access WHERE access_username = '$username'";

$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);

if ($password == $data['access_password'])
{
echo "<script> alert('Login Sukses');</script>";
    // menyimpan username dan level ke dalam session
    $_SESSION['access_username'] = $data['access_username'];
    $_SESSION['access_id'] = $data['access_id'];
    $_SESSION['access_password'] = $data['access_password'];
    $_SESSION['access_control'] = $data['access_control'];
    //Penggunaan Meta Header HTTP
    if ($data['access_control']=='admin'){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../control-panel/index.php">';    
    }else if($data['access_control']=='petugas'){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../control-panel/index.php">';    
    }
    exit;
}
else 
echo "<script> alert('Proses Login Gagal Silahkan Melakukan Login Lagi');</script>"; 
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../index.php">';    
    exit;
?>