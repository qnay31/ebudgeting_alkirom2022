<?php 
session_start();

error_reporting(0);
require '../../function.php';

$unik     = $_GET["id_unik"];
$query2 = mysqli_query($conn, "DELETE FROM `2022_log_aktivity` WHERE id = '$unik' ");

if ($query2 == true) {
    echo "<script>
    alert('Data Berhasil Dihapus');
    document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=logActivity';
    </script>";
}  else {
    echo "<script>
    alert('Data Tidak Berhasil Dihapus');
    document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=logActivity';
    </script>";
}




?>