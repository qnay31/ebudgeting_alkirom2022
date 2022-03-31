<?php 
session_start();

// error_reporting(0);
require '../../function.php';

$unik       = $_GET["id_unik"];
$periode    = $_GET["id_p"]; 
$query      = mysqli_query($conn, "SELECT * FROM 2022_paudqu WHERE id = '$unik' AND MONTH(tgl_pemakaian) = '$periode' ");
$data       = mysqli_fetch_assoc($query);
$program    = $data["program"];
$deskripsi  = $data["deskripsi_pemakaian"];
$cabang     = $data["cabang"];
$ip         = get_client_ip();
$date       = date("Y-m-d H:i:s");

$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Mengkonfirmasi Laporan $program dengan deskripsi $deskripsi')");

// die(var_dump($result2));
$update = mysqli_query($conn, "UPDATE `2022_paudqu` SET 
            `laporan`       ='Terverifikasi'
            WHERE id        = '$unik' "); 

// Global
$q  = mysqli_query($conn, "SELECT * FROM 2022_paudqu WHERE MONTH(tgl_pemakaian) = '$periode' AND laporan = 'Terverifikasi' ");

$i = 1;
$sql = $q;
while($r = mysqli_fetch_array($sql))
{
    $convert   = convertDateDBtoIndo($r['tgl_pemakaian']);
    $bulan     = substr($convert, 3, -5);

    $d_anggaran = $r['dana_anggaran'];
    $i++;
    $total_anggaran[$i] = $d_anggaran;

    $hasil_anggaran = array_sum($total_anggaran);

    $d_terpakai = $r['dana_terpakai'];
    $total_terpakai[$i] = $d_terpakai;

    $hasil_terpakai = array_sum($total_terpakai);
}
// cek nama
$c_query = mysqli_query($conn, "SELECT bulan FROM 2022_data_paudqu WHERE bulan = '$bulan' ");

// sub cabang program
// pendidikan depok
if ($cabang == 'Depok') {
    if (mysqli_fetch_assoc($c_query)) {
        $tes = mysqli_query($conn, "UPDATE `2022_data_paudqu` SET 
            `anggaran_global`               ='$hasil_anggaran',
            `terpakai_global`               ='$hasil_terpakai'
            WHERE bulan = '$bulan' ");
        }
    }

    
    

// die(var_dump($update));
if ($update == false ) {
    echo "<script>
alert('Data Tidak Berhasil Dikonfirmasi');
document.location.href = '../../admin/$_SESSION[username].php?id_checklist=checklist_laporanPaudqu';
</script>";
} else {
echo "<script>
alert('Data Laporan Berhasil Dikonfirmasi');
document.location.href = '../../admin/$_SESSION[username].php?id_checklist=checklist_laporanPaudqu';
</script>";
}


?>