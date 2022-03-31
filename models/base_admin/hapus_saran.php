<?php 
session_start();

error_reporting(0);
require '../../function.php';

$unik     = $_GET["id_unik"];
$query2 = mysqli_query($conn, "DELETE FROM `kritiksaran` WHERE id = '$unik' ");

if ($query2 == true) {
    echo "<script>
    alert('Saran Berhasil Dihapus');
    document.location.href = '../../admin/$_SESSION[username].php';
    </script>";
}  else {
    echo "<script>
    alert('Saran Tidak Berhasil Dihapus');
    document.location.href = '../../admin/$_SESSION[username].php';
    </script>";
}




?>