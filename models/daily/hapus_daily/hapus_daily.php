<?php 
session_start();

error_reporting(0);
require '../../../function.php';

$unik     = $_GET["id_unik"];
$periode  = $_GET["id_p"]; 
$query    = mysqli_query($conn, "SELECT * FROM 2022_daily_report WHERE id = '$unik' AND MONTH(tgl_aktivitas) = '$periode' ");
$data           = mysqli_fetch_assoc($query);
$aktivitas      = $data["aktivitas"];
$deskripsi      = $data["deskripsi"];
$ip             = get_client_ip();
$date           = date("Y-m-d H:i:s");

$q2    = mysqli_query($conn, "SELECT * FROM 2022_galeri_daily WHERE nomor_id = '$unik' AND program = '$aktivitas' ");
$i = 1;
$sql2 = $q2;

while ($data2 = mysqli_fetch_array($sql2)) {
    $dokumentasi = $data2['dokumentasi'];
    $i++;
    $total_dokumentasi[$i] = $dokumentasi;
    $hapus = unlink("../../../assets/img/laporan/daily/".$total_dokumentasi[$i]);
    // die(var_dump($hapus));
}


// die(var_dump($hapus));
$query2 = mysqli_query($conn, "DELETE FROM `2022_daily_report` WHERE id = '$unik' AND aktivitas = '$aktivitas' ");

$query3 = mysqli_query($conn, "DELETE FROM `2022_galeri_daily` WHERE nomor_id = '$unik' AND program = '$aktivitas'");

// die(var_dump($query3));
$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Menghapus Daily Report $aktivitas dengan deskripsi $deskripsi')");

if (($query2 == true )) {
    echo "<script>
alert('Data Berhasil Dihapus');
document.location.href = '../../../admin/$_SESSION[username].php?id_daily=daily_report';
</script>";

} else {
echo "<script>
alert('Data Berhasil Dihapus');
document.location.href = '../../../admin/$_SESSION[username].php?id_daily=daily_report';
</script>";
}

?>