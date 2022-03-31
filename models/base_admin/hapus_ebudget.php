<?php 
session_start();

error_reporting(0);
require '../../function.php';

$unik     = $_GET["id_unik"];

$query  = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id = '$unik'");
$data   = mysqli_fetch_assoc($query);
$akun   = $data["username"];

$akun2 = unlink("../../admin/".$akun.".php");
// die(var_dump($akun2));
$query2 = mysqli_query($conn, "DELETE FROM `akun_pengurus` WHERE id = '$unik' ");

if ($query2 == true) {
    echo "<script>
    alert('Data Berhasil Dihapus');
    document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=akunEbudget';
    </script>";
}  else {
    echo "<script>
    alert('Data Tidak Berhasil Dihapus');
    document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=akunEbudget';
    </script>";
}




?>