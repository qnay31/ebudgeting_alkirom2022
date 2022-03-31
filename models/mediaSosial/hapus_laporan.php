<?php 
session_start();

error_reporting(0);
require '../../function.php';

$id_hapus = $_GET["id_hapus"];
$unik     = $_GET["id_unik"];
$periode  = $_GET["id_p"]; 
$query    = mysqli_query($conn, "SELECT * FROM laporan_media WHERE id = '$unik' AND nama_akun = '$id_hapus' AND MONTH(tgl_laporan) = '$periode' ");
$data           = mysqli_fetch_assoc($query);
$nama_akun      = $data["nama_akun"];
$ip             = get_client_ip();
$date           = date("Y-m-d H:i:s");

// die(var_dump($hapus));
$query2 = mysqli_query($conn, "DELETE FROM `laporan_media` WHERE id = '$unik' AND nama_akun = '$id_hapus' AND MONTH(tgl_laporan) = '$periode' ");

// die(var_dump($query2));
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Menghapus laporan harian media sosial dari akun $nama_akun')");

if ($query2 == true) {
    echo "<script>
    alert('Data Berhasil Dihapus');
    document.location.href = '../../admin/$_SESSION[username].php?id_forms=forms_laporanIncome';
    </script>";
}  else {
    echo "<script>
    alert('Data Tidak Berhasil Dihapus');
    document.location.href = '../../admin/$_SESSION[username].php?id_forms=forms_laporanIncome';
    </script>";
}




?>