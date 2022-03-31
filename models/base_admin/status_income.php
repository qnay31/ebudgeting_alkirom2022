<?php 
session_start();

error_reporting(0);
require '../../function.php';

$unik     = $_GET["id_unik"];
$update = mysqli_query($conn, "UPDATE `2022_income` SET
`status` ='Menunggu Verifikasi'
WHERE id = '$unik' ");

if ($update == true) {
    echo "<script>
    alert('Status Income Berhasil Diganti');
    document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=income';
    </script>";
}  else {
    echo "<script>
    alert('Status Income Tidak Berhasil Diganti');
    document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=income';
    </script>";
}




?>