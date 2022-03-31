<?php 
session_start();

error_reporting(0);
require '../../function.php';

$unik     = $_GET["id_unik"];
$periode  = $_GET["id_p"]; 
$query  = mysqli_query($conn, "SELECT * FROM 2022_uang_makan WHERE id = '$unik' AND MONTH(tgl_dibuat) = '$periode' ");
$data   = mysqli_fetch_assoc($query);
$program= $data["kategori"];
$deskripsi   = $data["deskripsi"];
$ip     = get_client_ip();
$date   = date("Y-m-d H:i:s");

// die(var_dump($posisi));

$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Mengkonfirmasi Anggaran $program dengan perencanaan $deskripsi')");


$update = mysqli_query($conn, "UPDATE `2022_uang_makan` SET 
            `status`  ='OK'
            WHERE id    = '$unik' "); 

// die(var_dump($update));
if ($update !== true) {
    echo "<script>
alert('Data Tidak Berhasil Dikonfirmasi');
document.location.href = '../../admin/$_SESSION[username].php?id_checklist=checklist_pengajuanUangmakan';
</script>";

} else {
echo "<script>
alert('Data Anggaran Berhasil Dikonfirmasi');
document.location.href = '../../admin/$_SESSION[username].php?id_checklist=checklist_pengajuanUangmakan';
</script>";
}


?>