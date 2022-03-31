<?php 
session_start();

error_reporting(0);
require '../../../function.php';

$unik     = $_GET["id_unik"];
$periode  = $_GET["id_p"]; 
$query    = mysqli_query($conn, "SELECT * FROM 2022_logistik WHERE id = '$unik' AND MONTH(tgl_pemakaian) = '$periode' ");
$data         = mysqli_fetch_assoc($query);
$logistik      = $data["logistik"];
$ip           = get_client_ip();
$date         = date("Y-m-d H:i:s");

$q2    = mysqli_query($conn, "SELECT * FROM 2022_galeri_logistik WHERE nomor_id = '$unik' AND program = '$logistik' ");
$i = 1;
$sql2 = $q2;

while ($data2 = mysqli_fetch_array($sql2)) {
    $dokumentasi = $data2['dokumentasi'];
    $i++;
    $total_dokumentasi[$i] = $dokumentasi;
    unlink("../../../assets/img/laporan/logistik/".$total_dokumentasi[$i]);
}

// die(var_dump($q2));
$query2 = mysqli_query($conn, "UPDATE `2022_logistik` SET 
`tgl_pemakaian`='',
`deskripsi_pemakaian`='',
`dana_terpakai`='',
`laporan`='Belum Laporan'

WHERE id = '$unik' AND logistik = '$logistik' ");

$query3 = mysqli_query($conn, "DELETE FROM `2022_galeri_logistik` WHERE nomor_id = '$unik' AND program = '$logistik'");

if ($_SESSION["id_pengurus"] == "admin_web") {
    if ($query2 == true) {
        echo "<script>
        alert('Data Berhasil Dihapus');
        document.location.href = '../../../admin/$_SESSION[username].php?id_adminKey=logistik';
        </script>";
        
    } else {
        echo "<script>
        alert('Data Tidak Berhasil Dihapus');
        document.location.href = '../../../admin/$_SESSION[username].php?id_adminKey=logistik';
        </script>";
    }
    
} else {
    $result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Menghapus Laporan $logistik')");

    if ($query2 == true) {
        echo "<script>
        alert('Data Berhasil Dihapus');
        document.location.href = '../../../admin/$_SESSION[username].php?id_forms=forms_laporan&id_dataManagement=logistik';
        </script>";
    } else {
        echo "<script>
        alert('Data Tidak Berhasil Dihapus');
        document.location.href = '../../../admin/$_SESSION[username].php?id_forms=forms_laporan&id_dataManagement=logistik';
        </script>";
    }
}

?>