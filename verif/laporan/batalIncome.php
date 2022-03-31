<?php 
session_start();

error_reporting(0);
require '../../function.php';

$unik     = $_GET["id_unik"];
$periode  = $_GET["id_p"]; 
$query  = mysqli_query($conn, "SELECT * FROM income_media WHERE id = '$unik' AND MONTH(tanggal_tf) = '$periode' ");
$data   = mysqli_fetch_assoc($query);
$nama_akun= $data["nama_akun"];
$ip     = get_client_ip();
$date   = date("Y-m-d H:i:s");

// die(var_dump($posisi));

$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Membatalkan Income Harian Media Sosial dengan nama akun $nama_akun')");


$update = mysqli_query($conn, "UPDATE `income_media` SET 
            `status`  ='Dibatalkan'
            WHERE id    = '$unik' "); 

// die(var_dump($update));
if ($update !== true) {
    echo "<script>
alert('Income Tidak Berhasil Dibatalkan');
document.location.href = '../../admin/$_SESSION[username].php?id_forms=forms_check';
</script>";

} else {
echo "<script>
alert('Income Berhasil Dibatalkan');
document.location.href = '../../admin/$_SESSION[username].php?id_forms=forms_check';
</script>";
}


?>