<?php 
session_start();

error_reporting(0);
require '../../function.php';

$unik     = $_GET["id_unik"];

if ($_GET["idCabang"] == "") {
    $query  = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id = '$unik'");
    $data   = mysqli_fetch_assoc($query);
    $id_pengurus   = $data["id_pengurus"];
    // die(var_dump($akun2));
    if ($id_pengurus == "facebook_depok") {
        $updateEbudget = mysqli_query(
            $conn, 
            " UPDATE akun_pengurus SET 
                `id_pengurus`   ='facebook_bogor',
                `cabang`        ='Bogor',
                `posisi`        ='Facebook Bogor'
                WHERE id        = '$unik'
            "
        );

        $updateAkun = mysqli_query($conn, 
            "UPDATE data_akun SET
                `id_pengurus`   ='facebook_bogor',
                `cabang`        ='Bogor',
                `posisi`        ='Facebook Bogor'
                WHERE nomor_id  = '$unik';
            ");
        
        $updateIncome = mysqli_query($conn, 
            "UPDATE income_media SET 
                `id_pengurus`   ='facebook_bogor',
                `cabang`        ='Bogor'
                WHERE nomor_id  = '$unik';
        ");

        $updateLaporan = mysqli_query($conn,
            "UPDATE laporan_media SET
                `id_pengurus`   ='facebook_bogor',
                `posisi`        ='Facebook Bogor'
                WHERE nomor_id  = '$unik';
        ");

    } elseif ($id_pengurus == "facebook_bogor") {
        $updateEbudget = mysqli_query(
            $conn, 
            " UPDATE akun_pengurus SET 
                `id_pengurus`   ='facebook_depok',
                `cabang`        ='Depok',
                `posisi`        ='Facebook Depok'
                WHERE id        = '$unik'
            "
        );

        $updateAkun = mysqli_query($conn, 
            "UPDATE data_akun SET
                `id_pengurus`   ='facebook_depok',
                `cabang`        ='Depok',
                `posisi`        ='Facebook Depok'
                WHERE nomor_id  = '$unik';
            ");
        
        $updateIncome = mysqli_query($conn, 
            "UPDATE income_media SET 
                `id_pengurus`   ='facebook_depok',
                `cabang`        ='Depok'
                WHERE nomor_id  = '$unik';
        ");

        $updateLaporan = mysqli_query($conn,
            "UPDATE laporan_media SET
                `id_pengurus`   ='facebook_depok',
                `posisi`        ='Facebook Depok'
                WHERE nomor_id  = '$unik';
        ");
    } else {
        $updateEbudget = mysqli_query(
            $conn, 
            " UPDATE akun_pengurus SET 
                `id_pengurus`   ='instagram',
                `cabang`        ='Depok',
                `posisi`        ='Instagram'
                WHERE id        = '$unik'
            "
        );

        $updateAkun = mysqli_query($conn, 
            "UPDATE data_akun SET
                `id_pengurus`   ='instagram',
                `cabang`        ='Depok',
                `posisi`        ='Instagram'
                WHERE nomor_id  = '$unik';
            ");
        
        $updateIncome = mysqli_query($conn, 
            "UPDATE income_media SET 
                `id_pengurus`   ='instagram',
                `cabang`        ='Depok'
                WHERE nomor_id  = '$unik';
        ");

        $updateLaporan = mysqli_query($conn,
            "UPDATE laporan_media SET
                `id_pengurus`   ='instagram',
                `posisi`        ='Instagram'
                WHERE nomor_id  = '$unik';
        ");
    }


    if ($updateEbudget == true && 
        $updateAkun == true && 
        $updateIncome == true && 
        $updateLaporan == true) {
        echo "<script>
        alert('Data cabang berhasil dipindahkan');
        document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=akunEbudget';
        </script>";
    }  else {
        echo "<script>
        alert('Data Tidak Berhasil dipindahkan');
        document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=akunEbudget';
        </script>";
    }
} else {
    $namaAkun     = $_GET["namaAkun"];
    $query  = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id = '$unik'");
    $data   = mysqli_fetch_assoc($query);
    $id_pengurus   = $data["id_pengurus"];

    $qAkun  = mysqli_query($conn, "SELECT * FROM data_akun WHERE nomor_id = '$unik' AND nama_akun = '$namaAkun'");
    $dAkun  = mysqli_fetch_assoc($qAkun);
    $cabang = $dAkun["cabang"];

    if ($id_pengurus == "facebook_depok" && $cabang == "Bogor") {
        $updateAkun = mysqli_query($conn, 
        "UPDATE data_akun SET
            `id_pengurus`   ='facebook_depok',
            `cabang`        ='Depok',
            `posisi`        ='Facebook Depok'
            WHERE nomor_id  = '$unik' AND nama_akun = '$namaAkun';
        ");

        $updateIncome = mysqli_query($conn, 
        "UPDATE income_media SET 
            `id_pengurus`   ='facebook_depok',
            `cabang`        ='Depok'
            WHERE nomor_id  = '$unik' AND nama_akun = '$namaAkun';
        ");

        $updateLaporan = mysqli_query($conn,
        "UPDATE laporan_media SET
            `id_pengurus`   ='facebook_depok',
            `posisi`        ='Facebook Depok'
            WHERE nomor_id  = '$unik' AND nama_akun = '$namaAkun';
        ");

    } elseif ($id_pengurus == "facebook_bogor" && $cabang == "Depok") {
        $updateAkun = mysqli_query($conn, 
        "UPDATE data_akun SET
                `id_pengurus`   ='facebook_bogor',
                `cabang`        ='Bogor',
                `posisi`        ='Facebook Bogor'
                WHERE nomor_id  = '$unik' AND nama_akun = '$namaAkun';
            ");
        
        $updateIncome = mysqli_query($conn, 
            "UPDATE income_media SET 
                `id_pengurus`   ='facebook_bogor',
                `cabang`        ='Bogor'
                WHERE nomor_id  = '$unik' AND nama_akun = '$namaAkun';
        ");

        $updateLaporan = mysqli_query($conn,
            "UPDATE laporan_media SET
                `id_pengurus`   ='facebook_bogor',
                `posisi`        ='Facebook Bogor'
                WHERE nomor_id  = '$unik' AND nama_akun = '$namaAkun';
        ");
    } elseif ($id_pengurus == "instagram" && $cabang == "Bogor") {
        $updateAkun = mysqli_query($conn, 
            "UPDATE data_akun SET
                `id_pengurus`   ='instagram',
                `cabang`        ='Depok',
                `posisi`        ='Instagram'
                WHERE nomor_id  = '$unik' AND nama_akun = '$namaAkun';
            ");
        
        $updateIncome = mysqli_query($conn, 
            "UPDATE income_media SET 
                `id_pengurus`   ='instagram',
                `cabang`        ='Depok'
                WHERE nomor_id  = '$unik' AND nama_akun = '$namaAkun';
        ");

        $updateLaporan = mysqli_query($conn,
            "UPDATE laporan_media SET
                `id_pengurus`   ='instagram',
                `posisi`        ='Instagram'
                WHERE nomor_id  = '$unik' AND nama_akun = '$namaAkun';
        ");
    }


    if ($updateAkun == true && 
        $updateIncome == true && 
        $updateLaporan == true) {
        echo "<script>
        alert('Data cabang berhasil dipindahkan');
        document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=data_akun';
        </script>";
    }  else {
        echo "<script>
        alert('Data Tidak Berhasil dipindahkan');
        document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=data_akun';
        </script>";
    }
}


?>