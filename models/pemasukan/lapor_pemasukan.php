<?php 
session_start();

error_reporting(1);
require '../../function.php';

$unik     = $_GET["id_unik"];
$periode  = $_GET["id_p"]; 
$query  = mysqli_query($conn, "SELECT * FROM 2022_income WHERE id = '$unik' AND MONTH(tgl_pemasukan) = '$periode' ");
$data   = mysqli_fetch_assoc($query);
$tanggal = date('d-m-Y', strtotime($data['tgl_pemasukan']));
$ip         = get_client_ip();
$date       = date("Y-m-d H:i:s");

// die(var_dump($posisi));

$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah mengirimkan Income Harian Media Sosial tanggal $tanggal')");


$update = mysqli_query($conn, "UPDATE `2022_income` SET 
            `status`  ='Menunggu Verifikasi'
            WHERE id    = '$unik' "); 

// die(var_dump($update));
if ($update !== true) {
    echo "<script>
alert('Income tidak berhasil dikirim');
document.location.href = '../../admin/$_SESSION[username].php?id_forms=forms_verifPemasukan';
</script>";

} else {
echo "<script>
alert('Income berhasil dikirim');
document.location.href = '../../admin/$_SESSION[username].php?id_forms=forms_verifPemasukan';
</script>";
}


?>