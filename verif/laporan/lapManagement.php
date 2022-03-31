<?php 
session_start();

error_reporting(0);
require '../../function.php';

$id_verif = $_GET["id_verif"];
$unik     = $_GET["id_unik"];
$periode  = $_GET["id_p"]; 
$query      = mysqli_query($conn, "SELECT * FROM 2022_$id_verif WHERE id = '$unik' AND MONTH(tgl_laporan) = '$periode' ");
$data       = mysqli_fetch_assoc($query);
$deskripsi  = $data["pemakaian"];
$kategori   = $data["kategori"];
$jenis      = $data["jenis"];
$cabang     = $data["cabang"];
$id_pengurus   = $data["id_pengurus"];
$ip         = get_client_ip();
$date       = date("Y-m-d H:i:s");

$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Mengkonfirmasi Laporan $kategori dengan deskripsi $deskripsi')");

// die(var_dump($result2));
$update = mysqli_query($conn, "UPDATE `2022_$id_verif` SET 
            `laporan`   ='Terverifikasi'
            WHERE id    = '$unik' "); 

// Global

    $q  = mysqli_query($conn, "SELECT * FROM 2022_$id_verif WHERE MONTH(tgl_laporan) = '$periode' AND laporan = 'Terverifikasi' ");

    $i = 1;
    $sql = $q;
    while($r = mysqli_fetch_array($sql))
    {
        $convert   = convertDateDBtoIndo($r['tgl_laporan']);
        $bulan     = substr($convert, 3, -5);

        $d_anggaran = $r['dana_anggaran'];
        $i++;
        $total_anggaran[$i] = $d_anggaran;

        $hasil_anggaran = array_sum($total_anggaran);

        $d_terpakai = $r['dana_terpakai'];
        $total_terpakai[$i] = $d_terpakai;

        $hasil_terpakai = array_sum($total_terpakai);


}

if ($id_verif == "aset_yayasan") {
    // pembangunan
    $q2  = mysqli_query($conn, "SELECT * FROM 2022_$id_verif WHERE MONTH(tgl_laporan) = '$periode' AND laporan = 'Terverifikasi' AND jenis = 'Pembangunan' ");

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

    // pembelian
    $q3  = mysqli_query($conn, "SELECT * FROM 2022_$id_verif WHERE MONTH(tgl_laporan) = '$periode' AND laporan = 'Terverifikasi' AND jenis = 'Pembelian Barang' ");

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

} elseif ($id_verif == "maintenance") {
    // maintenance gedung
    $q2  = mysqli_query($conn, "SELECT * FROM 2022_$id_verif WHERE MONTH(tgl_laporan) = '$periode' AND laporan = 'Terverifikasi' AND kategori = 'Maintenance Gedung' ");

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

    // maintenance aset
    $q3  = mysqli_query($conn, "SELECT * FROM 2022_$id_verif WHERE MONTH(tgl_laporan) = '$periode' AND laporan = 'Terverifikasi' AND kategori  = 'Maintenance Aset' ");

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


} else {
    // dan lain lain nya
    $q2  = mysqli_query($conn, "SELECT * FROM 2022_$id_verif WHERE MONTH(tgl_laporan) = '$periode' AND laporan = 'Terverifikasi' AND cabang = 'Depok' ");

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

    // dan lain lain nya
    $q3  = mysqli_query($conn, "SELECT * FROM 2022_$id_verif WHERE MONTH(tgl_laporan) = '$periode' AND laporan = 'Terverifikasi' AND cabang = 'Bogor' ");

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
}



// cek nama
$c_query = mysqli_query($conn, "SELECT bulan FROM 2022_data_$id_verif WHERE bulan = '$bulan' ");

// sub cabang kategori
if ($id_verif == "aset_yayasan") {
    if ($id_pengurus == 'kepala_pengajuan' && $jenis == 'Pembangunan') {
        if (mysqli_fetch_assoc($c_query)) {
            $tes = mysqli_query($conn, "UPDATE `2022_data_$id_verif` SET 
                `anggaran_pembangunan`       ='$hasil_anggaran2',
                `terpakai_pembangunan`       ='$hasil_terpakai2',
                `anggaran_global`            ='$hasil_anggaran',
                `terpakai_global`            ='$hasil_terpakai'
                WHERE bulan = '$bulan' ");
            }
    
            // die(var_dump($c_query));
        } elseif ($id_pengurus == 'kepala_pengajuan' && $jenis == 'Pembelian Barang') {
            if (mysqli_fetch_assoc($c_query)) {
                mysqli_query($conn, "UPDATE `2022_data_$id_verif` SET 
                `anggaran_pembelian`       ='$hasil_anggaran3',
                `terpakai_pembelian`       ='$hasil_terpakai3',
                `anggaran_global`          ='$hasil_anggaran',
                `terpakai_global`          ='$hasil_terpakai'
                WHERE bulan = '$bulan' ");   
            }
    
        }
} elseif ($id_verif == "maintenance") {
    if ($id_pengurus == 'kepala_pengajuan' && $kategori == 'Maintenance Gedung') {
        if (mysqli_fetch_assoc($c_query)) {
            mysqli_query($conn, "UPDATE `2022_data_$id_verif` SET 
            `anggaran_{$id_verif}_gedung`    ='$hasil_anggaran2',
            `terpakai_{$id_verif}_gedung`    ='$hasil_terpakai2',
            `anggaran_global`               ='$hasil_anggaran',
            `terpakai_global`               ='$hasil_terpakai'
            WHERE bulan = '$bulan' ");
        }
        
    } else {
        if (mysqli_fetch_assoc($c_query)) {
            mysqli_query($conn, "UPDATE `2022_data_$id_verif` SET 
            `anggaran_{$id_verif}_aset`    ='$hasil_anggaran3',
            `terpakai_{$id_verif}_aset`    ='$hasil_terpakai3',
            `anggaran_global`               ='$hasil_anggaran',
            `terpakai_global`               ='$hasil_terpakai'
            WHERE bulan = '$bulan' ");   
        }
    }
    
} else {
    if ($id_pengurus == 'kepala_pengajuan' && $cabang == 'Depok') {
        if (mysqli_fetch_assoc($c_query)) {
            mysqli_query($conn, "UPDATE `2022_data_$id_verif` SET 
            `anggaran_{$id_verif}_depok`    ='$hasil_anggaran2',
            `terpakai_{$id_verif}_depok`    ='$hasil_terpakai2',
            `anggaran_global`               ='$hasil_anggaran',
            `terpakai_global`               ='$hasil_terpakai'
            WHERE bulan = '$bulan' ");
        }
        
    } else {
        if (mysqli_fetch_assoc($c_query)) {
            mysqli_query($conn, "UPDATE `2022_data_$id_verif` SET 
            `anggaran_{$id_verif}_bogor`    ='$hasil_anggaran3',
            `terpakai_{$id_verif}_bogor`    ='$hasil_terpakai3',
            `anggaran_global`               ='$hasil_anggaran',
            `terpakai_global`               ='$hasil_terpakai'
            WHERE bulan = '$bulan' ");   
        }
    }
}
    
    

// die(var_dump($update));
if ($update == false ) {
    if ($id_verif == "aset_yayasan") {
        echo "<script>
        alert('Data Tidak Berhasil Dikonfirmasi');
        document.location.href = '../../admin/$_SESSION[username].php?id_checklist=checklist_laporanAset';
        </script>";
    } elseif ($id_verif == "uang_makan") {
        echo "<script>
        alert('Data Tidak Berhasil Dikonfirmasi');
        document.location.href = '../../admin/$_SESSION[username].php?id_checklist=checklist_laporanUangmakan';
        </script>";
    } elseif ($id_verif == "gaji_karyawan") {
        echo "<script>
        alert('Data Tidak Berhasil Dikonfirmasi');
        document.location.href = '../../admin/$_SESSION[username].php?id_checklist=checklist_laporanGajikaryawan';
        </script>";

    } elseif ($id_verif == "maintenance") {
        echo "<script>
        alert('Data Tidak Berhasil Dikonfirmasi');
        document.location.href = '../../admin/$_SESSION[username].php?id_checklist=checklist_laporanMaintenance';
        </script>";

    } elseif ($id_verif == "operasional_yayasan") {
        echo "<script>
        alert('Data Tidak Berhasil Dikonfirmasi');
        document.location.href = '../../admin/$_SESSION[username].php?id_checklist=checklist_laporanOperasional';
        </script>";

    } else {
        echo "<script>
        alert('Data Tidak Berhasil Dikonfirmasi');
        document.location.href = '../../admin/$_SESSION[username].php?id_checklist=checklist_laporanAnggaranlain';
        </script>";
    }
    
} else {
    if ($id_verif == "aset_yayasan") {
        echo "<script>
        alert('Data Laporan Berhasil Dikonfirmasi');
        document.location.href = '../../admin/$_SESSION[username].php?id_checklist=checklist_laporanAset';
        </script>";
    } elseif ($id_verif == "uang_makan") {
        echo "<script>
        alert('Data Laporan Berhasil Dikonfirmasi');
        document.location.href = '../../admin/$_SESSION[username].php?id_checklist=checklist_laporanUangmakan';
        </script>";
    } elseif ($id_verif == "gaji_karyawan") {
        echo "<script>
        alert('Data Laporan Berhasil Dikonfirmasi');
        document.location.href = '../../admin/$_SESSION[username].php?id_checklist=checklist_laporanGajikaryawan';
        </script>";

    } elseif ($id_verif == "maintenance") {
        echo "<script>
        alert('Data Laporan Berhasil Dikonfirmasi');
        document.location.href = '../../admin/$_SESSION[username].php?id_checklist=checklist_laporanMaintenance';
        </script>";

    } elseif ($id_verif == "operasional_yayasan") {
        echo "<script>
        alert('Data Laporan Berhasil Dikonfirmasi');
        document.location.href = '../../admin/$_SESSION[username].php?id_checklist=checklist_laporanOperasional';
        </script>";

    } else {
        echo "<script>
        alert('Data Laporan Berhasil Dikonfirmasi');
        document.location.href = '../../admin/$_SESSION[username].php?id_checklist=checklist_laporanAnggaranlain';
        </script>";
    }

}


?>