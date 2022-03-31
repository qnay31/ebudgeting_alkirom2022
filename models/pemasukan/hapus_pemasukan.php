<?php 
session_start();

error_reporting(0);
require '../../function.php';

$id_hapus = $_GET["incomeId"];
$unik     = $_GET["id_unik"];
$periode  = $_GET["id_p"]; 
if ($id_hapus == "nonResi") {
        $query    = mysqli_query($conn, "SELECT * FROM 2022_incometanparesi WHERE id = '$unik' AND MONTH(tgl_pemasukan) = '$periode' ");
        $data         = mysqli_fetch_assoc($query);
        $kategori     = $data["kategori"];
        $ip           = get_client_ip();
        $date         = date("Y-m-d H:i:s");
        $query2 = mysqli_query($conn, "DELETE FROM `2022_incometanparesi` WHERE id = '$unik' AND kategori = '$kategori' AND MONTH(tgl_pemasukan) = '$periode' ");
    } else {
        $query    = mysqli_query($conn, "SELECT * FROM 2022_income WHERE id = '$unik' AND MONTH(tgl_pemasukan) = '$periode' ");
        $data         = mysqli_fetch_assoc($query);
        $kategori     = $data["kategori"];
        $ip           = get_client_ip();
        $date         = date("Y-m-d H:i:s");
        $query2 = mysqli_query($conn, "DELETE FROM `2022_income` WHERE id = '$unik' AND kategori = '$kategori' AND MONTH(tgl_pemasukan) = '$periode' ");
    }
    

$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Menghapus Laporan $kategori')");

        if ($query2 == true) {
            echo "<script>
            alert('Data Berhasil Dihapus');
            document.location.href = '../../admin/$_SESSION[username].php?id_forms=forms_verifPemasukan';
            </script>";
        } else {
            echo "<script>
            alert('Data Tidak Berhasil Dihapus');
            document.location.href = '../../admin/$_SESSION[username].php?id_forms=forms_verifPemasukan';
            </script>";
        }
?>