<?php 
session_start();

error_reporting(0);
require '../../function.php';

$unik     = $_GET["id_unik"];

$query  = mysqli_query($conn, "SELECT * FROM data_akun WHERE id = '$unik'");
$data   = mysqli_fetch_assoc($query);
$akun   = $data["nama_akun"];
// die(var_dump($akun));
$query2 = mysqli_query($conn, "DELETE FROM `data_akun` WHERE id = '$unik' AND nama_akun = '$akun' ");

if ($query2 == true) {
    echo "<script>
    alert('Data Berhasil Dihapus');
    document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=data_akun';
    </script>";
}  else {
    echo "<script>
    alert('Data Tidak Berhasil Dihapus');
    document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=data_akun';
    </script>";
}




?>