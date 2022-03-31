<?php 
session_start();

error_reporting(0);
require '../../function.php';

$unik       = $_GET["id_unik"];
$idSwitch   = $_GET["idSwitch"];
$idkategori = $_GET["id_kategori"];

if ($idSwitch == "cabang") {

    $qKategori  = mysqli_query($conn, "SELECT * FROM 2022_$idkategori WHERE id = '$unik'");
    $dKategori  = mysqli_fetch_assoc($qKategori);
    $cabang     = $dKategori["cabang"];
    $laporan    = $dKategori["laporan"];
    // die(var_dump($laporan));
    if ($cabang == "Depok") {
        if ($laporan == "Terverifikasi") {
            $update = mysqli_query($conn, "UPDATE `2022_$idkategori` SET
            `cabang` ='Bogor',
            `laporan` = 'Menunggu Verifikasi'
            WHERE id = '$unik' ");

        } else {
            $update = mysqli_query($conn, "UPDATE `2022_$idkategori` SET
            `cabang` ='Bogor'
            WHERE id = '$unik' ");
        }

    } else {
        if ($laporan == "Terverifikasi") {
            $update = mysqli_query($conn, "UPDATE `2022_$idkategori` SET
            `cabang` ='Depok',
            `laporan` = 'Menunggu Verifikasi'
            WHERE id = '$unik' ");

        } else {
            $update = mysqli_query($conn, "UPDATE `2022_$idkategori` SET
            `cabang` ='Depok'  
            WHERE id = '$unik' ");
        }
    }

    if ($update == true) {
        echo "<script>
        alert('Cabang Berhasil Diganti');
        document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=$idkategori';
        </script>";
    }  else {
        echo "<script>
        alert('Cabang Tidak Berhasil Diganti');
        document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=$idkategori';
        </script>";
    }
} else {
    $update = mysqli_query($conn, "UPDATE `2022_$idkategori` SET
            `laporan` = 'Menunggu Verifikasi'
            WHERE id = '$unik' ");

    if ($update == true) {
        echo "<script>
        alert('Status Laporan Berhasil Diganti');
        document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=$idkategori';
        </script>";
    }  else {
        echo "<script>
        alert('Status Laporan Tidak Berhasil Diganti');
        document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=$idkategori';
        </script>";
    }
}


?>