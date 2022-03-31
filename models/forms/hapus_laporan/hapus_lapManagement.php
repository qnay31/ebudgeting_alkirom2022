<?php 
session_start();

error_reporting(0);
require '../../../function.php';

$id_management = $_GET["id_dataManagement"];
$unik     = $_GET["id_unik"];
$periode  = $_GET["id_p"]; 

$query    = mysqli_query($conn, "SELECT * FROM 2022_$id_management WHERE id = '$unik' AND MONTH(tgl_laporan) = '$periode' ");
$data       = mysqli_fetch_assoc($query);
$kategori   = $data["kategori"];
$ip         = get_client_ip();
$date       = date("Y-m-d H:i:s");

$q2    = mysqli_query($conn, "SELECT * FROM 2022_galeri_$id_management WHERE nomor_id = '$unik' AND program = '$kategori' ");
$i = 1;
$sql2 = $q2;

while ($data2 = mysqli_fetch_array($sql2)) {
    $dokumentasi = $data2['dokumentasi'];
    $i++;
    $total_dokumentasi[$i] = $dokumentasi;
    unlink("../../../assets/img/laporan/$id_management/".$total_dokumentasi[$i]);
}

// die(var_dump($q2));
if ($id_management == "aset_yayasan") {
    $query2 = mysqli_query($conn, "UPDATE `2022_$id_management` SET 
    `tgl_laporan`='',
    `pemakaian`='',
    `qty_pembelian`='',
    `dana_terpakai`='',
    `laporan`='Belum Laporan'
    WHERE id = '$unik' AND kategori = '$kategori' ");
    
} else {
    $query2 = mysqli_query($conn, "UPDATE `2022_$id_management` SET 
    `tgl_laporan`='',
    `pemakaian`='',
    `dana_terpakai`='',
    `laporan`='Belum Laporan'
    WHERE id = '$unik' AND kategori = '$kategori' ");
}


$query3 = mysqli_query($conn, "DELETE FROM `2022_galeri_$id_management` WHERE nomor_id = '$unik' AND program = '$kategori'");

if ($_SESSION["id_pengurus"] == "admin_web") {
    if ($query2 == true) {
        echo "<script>
        alert('Data Berhasil Dihapus');
        document.location.href = '../../../admin/$_SESSION[username].php?id_adminKey=$id_management';
        </script>";

    }  else {
        echo "<script>
        alert('Data Tidak Berhasil Dihapus');
        document.location.href = '../../../admin/$_SESSION[username].php?id_adminKey=$id_management';
        </script>";
    }

} else {
    $result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Menghapus Laporan $katagori')");

    if ($query2 == true) {
        echo "<script>
        alert('Data Berhasil Dihapus');
        document.location.href = '../../../admin/$_SESSION[username].php?id_forms=forms_laporan&id_dataManagement=$id_management';
        </script>";
    } else {
        echo "<script>
        alert('Data Tidak Berhasil Dihapus');
        document.location.href = '../../../admin/$_SESSION[username].php?id_forms=forms_laporan&id_dataManagement=$id_management';
        </script>";
    }
}

?>