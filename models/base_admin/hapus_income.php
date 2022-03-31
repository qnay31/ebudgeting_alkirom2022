<?php 
session_start();

error_reporting(0);
require '../../function.php';

$unik     = $_GET["id_unik"];

$query      = mysqli_query($conn, "SELECT * FROM income_media WHERE id = '$unik'");
$data       = mysqli_fetch_assoc($query);
$id_pengurus = $data["id_pengurus"];
$tanggal_tf = $data["tanggal_tf"];
$status     = $data["status"];

if ($id_pengurus == "facebook_depok") {
    $qData      = mysqli_query($conn, "SELECT * FROM 2022_income WHERE tgl_pemasukan = '$tanggal_tf' AND gedung = 'Facebook Depok' ");

} elseif ($id_pengurus == "facebook_bogor") {
    $qData      = mysqli_query($conn, "SELECT * FROM 2022_income WHERE tgl_pemasukan = '$tanggal_tf' AND gedung = 'Facebook Bogor' ");

} else {
    $qData      = mysqli_query($conn, "SELECT * FROM 2022_income WHERE tgl_pemasukan = '$tanggal_tf' AND gedung = 'Instagram' ");
}
$hData      = mysqli_fetch_assoc($qData);
$iStatus    = $hData["status"];

if ($status == "OK" && $iStatus == "Terverifikasi" ) {
    if ($id_pengurus == "facebook_depok") {
        $incQuery   = mysqli_query($conn, "SELECT * FROM income_media WHERE tanggal_tf = '$tanggal_tf' AND id_pengurus = 'facebook_depok' AND status = 'OK'");

    } elseif ($id_pengurus == "facebook_bogor") {
        $incQuery   = mysqli_query($conn, "SELECT * FROM income_media WHERE tanggal_tf = '$tanggal_tf' AND id_pengurus = 'facebook_bogor' AND status = 'OK'");

    } else {
        $incQuery   = mysqli_query($conn, "SELECT * FROM income_media WHERE tanggal_tf = '$tanggal_tf' AND id_pengurus = 'instagram' AND status = 'OK'");

    }
    $i = 1;
    while($Inc = mysqli_fetch_array($incQuery))
    {   
        $IncMedia   = $Inc['jumlah_tf'];
        $i++;
        $total_IncMedia[$i] = $IncMedia;
        
        $hasil_IncMedia = array_sum($total_IncMedia);
    }

    $convert    = convertDateDBtoIndo($tanggal_tf);
    $bulan      = substr($convert, 3, -5); 

    $query2     = mysqli_query($conn, "SELECT * FROM 2022_data_income WHERE bulan = '$bulan'");
    $data2      = mysqli_fetch_assoc($query2);
    $incomeD    = $data2["income_depok"];
    $incomeB    = $data2["income_bogor"];
    $incomeI    = $data2["income_instagram"];
    $income     = $data2["income_global"];

    if ($id_pengurus == "facebook_depok") {
        if ($income > 0 && $incomeD > 0) {
            $new_incomeD = $incomeD - $hasil_IncMedia;
            $new_income = $income - $hasil_IncMedia;
    
            $upToIncome = mysqli_query($conn, "UPDATE 2022_data_income SET 
                        `income_depok` = '$new_incomeD',
                        `income_global` = '$new_income'
                            WHERE bulan = '$bulan'
                        ");
        }

    } elseif ($id_pengurus == "facebook_bogor") {
        if ($income > 0 && $incomeB > 0) {
            $new_incomeB = $incomeB - $hasil_IncMedia;
            $new_income = $income - $hasil_IncMedia;

            $upToIncome = mysqli_query($conn, "UPDATE 2022_data_income SET 
                        `income_bogor` = '$new_incomeB',
                        `income_global` = '$new_income'
                            WHERE bulan = '$bulan'
                        ");
        }

    } else {
        if ($income > 0 && $incomeI > 0) {
            $new_incomeI = $incomeI - $hasil_IncMedia;
            $new_income = $income - $hasil_IncMedia;

            $upToIncome = mysqli_query($conn, "UPDATE 2022_data_income SET 
                        `income_instagram` = '$new_incomeI',
                        `income_global` = '$new_income'
                            WHERE bulan = '$bulan'
                        ");
        }

    }
    
}

$query3 = mysqli_query($conn, "DELETE FROM `income_media` WHERE id = '$unik' ");

if ($id_pengurus == "facebook_depok") {
    $queryIncome = mysqli_query($conn, "SELECT * FROM income_media WHERE tanggal_tf = '$tanggal_tf' AND id_pengurus = 'facebook_depok' AND status = 'OK'"); 

} elseif ($id_pengurus == "facebook_bogor") {
    $queryIncome = mysqli_query($conn, "SELECT * FROM income_media WHERE tanggal_tf = '$tanggal_tf' AND id_pengurus = 'facebook_bogor' AND status = 'OK'"); 

} else {
    $queryIncome = mysqli_query($conn, "SELECT * FROM income_media WHERE tanggal_tf = '$tanggal_tf' AND id_pengurus = 'instagram' AND status = 'OK'"); 
}

$numsIncome  = $queryIncome->num_rows;
// die(var_dump($numsIncome));
if ($numsIncome === 0) {
    if ($id_pengurus == "facebook_depok") {
        mysqli_query($conn, "DELETE FROM `2022_income` WHERE tgl_pemasukan = '$tanggal_tf' AND gedung = 'Facebook Depok' ");

    } elseif ($id_pengurus == "facebook_bogor") {
        mysqli_query($conn, "DELETE FROM `2022_income` WHERE tgl_pemasukan = '$tanggal_tf' AND gedung = 'Facebook Bogor' ");

    } else {
        mysqli_query($conn, "DELETE FROM `2022_income` WHERE tgl_pemasukan = '$tanggal_tf' AND gedung = 'Instagram' ");
    }

} else {
    $i = 1;
    while($r = mysqli_fetch_array($queryIncome))
    {   
        $tanggal    = $r["tanggal_tf"]; 
        $status     = $r["status"];
        $d_income   = $r['jumlah_tf'];
        $i++;
        $total_income[$i] = $d_income;
        
        $hasil_income = array_sum($total_income);
    }

    if ($id_pengurus == "facebook_depok") {
        $upIncome = mysqli_query($conn, "UPDATE `2022_income` SET 
        `id_pengurus`   ='kepala_income',
        `kategori`      ='Media Sosial',
        `posisi`        ='Kepala Income',
        `gedung`        ='Facebook Depok',
        `tgl_pemasukan` ='$tanggal',
        `income`        ='$hasil_income',
        `status`        ='Pending'
        WHERE 
        tgl_pemasukan   = '$tanggal' AND gedung = 'Facebook Depok' "); 

    } elseif ($id_pengurus == "facebook_bogor") {
        $upIncome = mysqli_query($conn, "UPDATE `2022_income` SET 
        `id_pengurus`   ='kepala_income',
        `kategori`      ='Media Sosial',
        `posisi`        ='Kepala Income',
        `gedung`        ='Facebook Bogor',
        `tgl_pemasukan` ='$tanggal',
        `income`        ='$hasil_income',
        `status`        ='Pending'
        WHERE 
        tgl_pemasukan   = '$tanggal' AND gedung = 'Facebook Bogor' "); 

    } else {
        $upIncome = mysqli_query($conn, "UPDATE `2022_income` SET 
        `id_pengurus`   ='kepala_income',
        `kategori`      ='Media Sosial',
        `posisi`        ='Kepala Income',
        `gedung`        ='Instagram',
        `tgl_pemasukan` ='$tanggal',
        `income`        ='$hasil_income',
        `status`        ='Pending'
        WHERE 
        tgl_pemasukan   = '$tanggal' AND gedung = 'Instagram' "); 
    }
    // die(var_dump($upIncome));
}

if ($_SESSION["id_pengurus"] == "admin_web") {
    if ($query3 == true) {
        echo "<script>
        alert('Data Berhasil Dihapus');
        document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=income_media';
        </script>";
    }  else {
        echo "<script>
        alert('Data Tidak Berhasil Dihapus');
        document.location.href = '../../admin/$_SESSION[username].php?id_adminKey=income_media';
        </script>";
    }
} else {
    if ($query3 == true) {
        echo "<script>
        alert('Data Berhasil Dihapus');
        document.location.href = '../../admin/$_SESSION[username].php?id_database=database_crossCheck';
        </script>";
    }  else {
        echo "<script>
        alert('Data Tidak Berhasil Dihapus');
        document.location.href = '../../admin/$_SESSION[username].php?id_database=database_crossCheck';
        </script>";
    }
}

?>