<?php 
session_start();

error_reporting(0);
require '../../function.php';

$unik     = $_GET["id_unik"];

// die(var_dump($hapus));
$query2 = mysqli_query($conn, "DELETE FROM `laporan_media` WHERE id = '$unik'");

if ($query2 == true) {
    echo "<script>
    alert('Data Berhasil Dihapus');
    document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=laporan_media';
    </script>";
}  else {
    echo "<script>
    alert('Data Tidak Berhasil Dihapus');
    document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=laporan_media';
    </script>";
}




?>