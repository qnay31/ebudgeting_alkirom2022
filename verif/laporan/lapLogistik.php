<?php 
session_start();

error_reporting(0);
require '../../function.php';

$unik     = $_GET["id_unik"];
$periode  = $_GET["id_p"]; 
$query      = mysqli_query($conn, "SELECT * FROM 2022_logistik WHERE id = '$unik' AND MONTH(tgl_pemakaian) = '$periode' ");
$data       = mysqli_fetch_assoc($query);
$logistik   = $data["logistik"];
$deskripsi  = $data["deskripsi_pemakaian"];
$cabang     = $data["cabang"];
$id_pengurus   = $data["id_pengurus"];
$ip         = get_client_ip();
$date       = date("Y-m-d H:i:s");

$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Mengkonfirmasi Laporan $logistik dengan deskripsi $deskripsi')");

// die(var_dump($result2));
$update = mysqli_query($conn, "UPDATE `2022_logistik` SET 
            `laporan`   ='Terverifikasi'
            WHERE id    = '$unik' "); 

// Global
$q  = mysqli_query($conn, "SELECT * FROM 2022_logistik WHERE MONTH(tgl_pemakaian) = '$periode' AND laporan = 'Terverifikasi' ");

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

// logistik depok
$q2  = mysqli_query($conn, "SELECT * FROM 2022_logistik WHERE MONTH(tgl_pemakaian) = '$periode' AND laporan = 'Terverifikasi' AND cabang = 'Depok' ");

$sql2 = $q2;
while($r2 = mysqli_fetch_array($sql2))
{
    $d_anggaran2 = $r2['dana_anggaran'];
    $i++;
    $total_anggaran2[$i] = $d_anggaran2;

    $hasil_anggaran2 = array_sum($total_anggaran2);

    $d_terpakai2 = $r2['dana_terpakai'];
    $total_terpakai2[$i] = $d_terpakai2;

    $hasil_terpakai2 = array_sum($total_terpakai2);
}

// logistik bogor
$q3  = mysqli_query($conn, "SELECT * FROM 2022_logistik WHERE MONTH(tgl_pemakaian) = '$periode' AND laporan = 'Terverifikasi' AND cabang = 'Bogor' ");

$sql3 = $q3;
while($r3 = mysqli_fetch_array($sql3))
{
    $d_anggaran3 = $r3['dana_anggaran'];
    $i++;
    $total_anggaran3[$i] = $d_anggaran3;

    $hasil_anggaran3 = array_sum($total_anggaran3);

    $d_terpakai3 = $r3['dana_terpakai'];
    $total_terpakai3[$i] = $d_terpakai3;

    $hasil_terpakai3 = array_sum($total_terpakai3);
}


// cek nama
$c_query = mysqli_query($conn, "SELECT bulan FROM 2022_data_logistik WHERE bulan = '$bulan' ");

// sub cabang logistik
// pendidikan depok
if ($cabang == 'Depok') {
    if (mysqli_fetch_assoc($c_query)) {
        $tes = mysqli_query($conn, "UPDATE `2022_data_logistik` SET 
            `anggaran_logistik_depok`       ='$hasil_anggaran2',
            `terpakai_logistik_depok`       ='$hasil_terpakai2',
            `anggaran_global`               ='$hasil_anggaran',
            `terpakai_global`               ='$hasil_terpakai'
            WHERE bulan = '$bulan' ");
        }

        // die(var_dump($c_query));
        // kesehatan depok
    } elseif ($cabang == 'Bogor') {
        if (mysqli_fetch_assoc($c_query)) {
            mysqli_query($conn, "UPDATE `2022_data_logistik` SET 
            `anggaran_logistik_bogor`       ='$hasil_anggaran3',
            `terpakai_logistik_bogor`       ='$hasil_terpakai3',
            `anggaran_global`               ='$hasil_anggaran',
            `terpakai_global`               ='$hasil_terpakai'
            WHERE bulan = '$bulan' ");   
        }
        
    }

    
    

// die(var_dump($update));
if ($update == false ) {
    echo "<script>
alert('Data Tidak Berhasil Dikonfirmasi');
document.location.href = '../../admin/$_SESSION[username].php?id_checklist=checklist_laporanLogistik';
</script>";
} else {
echo "<script>
alert('Data Laporan Berhasil Dikonfirmasi');
document.location.href = '../../admin/$_SESSION[username].php?id_checklist=checklist_laporanLogistik';
</script>";
}


?>