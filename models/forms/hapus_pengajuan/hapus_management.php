<?php 
session_start();

// error_reporting(0);
require '../../../function.php';
$id_management = $_GET["id_dataManagement"];
$unik     = $_GET["id_unik"];
$periode  = $_GET["id_p"]; 
$query    = mysqli_query($conn, "SELECT * FROM 2022_$id_management WHERE id = '$unik' AND MONTH(tgl_dibuat) = '$periode' ");
$data           = mysqli_fetch_assoc($query);
$kategori       = $data["kategori"];
$deskripsi      = $data["deskripsi"];
$ip             = get_client_ip();
$date           = date("Y-m-d H:i:s");

// die(var_dump($hapus));
$query2 = mysqli_query($conn, "DELETE FROM `2022_$id_management` WHERE id = '$unik' AND deskripsi = '$deskripsi' AND MONTH(tgl_dibuat) = '$periode' ");

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
    $result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Menghapus $kategori dengan rencana $deskripsi')");

    if ($query2 == true) {
        echo "<script>
        alert('Data Berhasil Dihapus');
        document.location.href = '../../../admin/$_SESSION[username].php?id_forms=forms_verifikasi&id_dataManagement=$id_management';
        </script>";
    }  else {
        echo "<script>
        alert('Data Tidak Berhasil Dihapus');
        document.location.href = '../../../admin/$_SESSION[username].php?id_forms=forms_verifikasi&id_dataManagement=$id_management';
        </script>";
    }
}

?>