<?php 
session_start();

error_reporting(0);
require '../../function.php';

$unik       = $_GET["id_unik"];

    $qKategori  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE id = '$unik'");
    $dKategori  = mysqli_fetch_assoc($qKategori);
    $yatim     = $dKategori["yatim"];

    if ($yatim == "Yatim Binaan") {
            $update = mysqli_query($conn, "UPDATE `2022_program` SET
            `yatim` ='Yatim Luar Binaan'
            WHERE id = '$unik' ");

    } else {
        $update = mysqli_query($conn, "UPDATE `2022_program` SET
            `yatim` ='Yatim Binaan'
            WHERE id = '$unik' ");
    }

    if ($update == true) {
        echo "<script>
        alert('Kategori Yatim Berhasil Diganti');
        document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=program';
        </script>";
    }  else {
        echo "<script>
        alert('Kategori Yatim Tidak Berhasil Diganti');
        document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=program';
        </script>";
    }


?>