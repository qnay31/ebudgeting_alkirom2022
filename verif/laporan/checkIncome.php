<?php 
session_start();

error_reporting(0);
require '../../function.php';

$unik     = $_GET["id_unik"];
$periode  = $_GET["id_p"]; 
$query  = mysqli_query($conn, "SELECT * FROM income_media WHERE id = '$unik' AND MONTH(tanggal_tf) = '$periode' ");
$data   = mysqli_fetch_assoc($query);
$id_pengurus= $data["id_pengurus"];
$nama_akun= $data["nama_akun"];
$tanggal_tf= $data["tanggal_tf"];
$ip     = get_client_ip();
$date   = date("Y-m-d H:i:s");

// die(var_dump($posisi));

$result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Mengkonfirmasi Income Harian Media Sosial dengan nama akun $nama_akun')");

$update = mysqli_query($conn, "UPDATE `income_media` SET 
            `status`  ='OK'
            WHERE id    = '$unik' "); 

if ($id_pengurus == "facebook_depok") {
    $kuery      = mysqli_query($conn, "SELECT * FROM income_media WHERE tanggal_tf = '$tanggal_tf' AND id_pengurus = 'facebook_depok' AND status = 'OK' ");
    $i = 1;
    while($r = mysqli_fetch_array($kuery))
    {   
        $tanggal    = $r["tanggal_tf"]; 
        $status     = $r["status"];
        $d_income   = $r['jumlah_tf'];
        $verif      = $r['verif'];
        $i++;
        $total_income[$i] = $d_income;
        
        $hasil_income = array_sum($total_income);
    }

    $income2022 = mysqli_query($conn, "SELECT * FROM 2022_income WHERE tgl_pemasukan = '$tanggal' AND gedung = 'Facebook Depok' ");
    $numIncome  = $income2022->num_rows;
    $hData      = mysqli_fetch_assoc($income2022);
    $iStatus    = $hData["status"];

    if ($iStatus == "Terverifikasi") {
        $convert    = convertDateDBtoIndo($tanggal);
        $bulan      = substr($convert, 3, -5); 

        $query2     = mysqli_query($conn, "SELECT * FROM 2022_data_income WHERE bulan = '$bulan'");
        $data2      = mysqli_fetch_assoc($query2);
        $incomeD    = $data2["income_depok"];
        $income     = $data2["income_global"];

        if ($income > 0 && $incomeD > 0) {
            $new_incomeD = $incomeD - $hasil_income + $d_income;
            $new_income = $income - $hasil_income + $d_income;

            $upToIncome = mysqli_query($conn, "UPDATE 2022_data_income SET 
                        `income_depok` = '$new_incomeD',
                        `income_global` = '$new_income'
                            WHERE bulan = '$bulan'
                        ");
        }
    }
    // die(var_dump($tIncome));

    if ($numIncome === 1 && $status == "OK") {
        $upIncome = mysqli_query($conn, "UPDATE `2022_income` SET 
                    `id_pengurus`   ='$_SESSION[id_pengurus]',
                    `kategori`      ='Media Sosial',
                    `posisi`        ='$_SESSION[posisi]',
                    `gedung`        ='Facebook Depok',
                    `tgl_pemasukan` ='$tanggal',
                    `income`        ='$hasil_income',
                    `status`        ='Pending'
                    WHERE 
                    tgl_pemasukan   = '$tanggal' AND gedung = 'Facebook Depok' ");
        
        // die(var_dump($tIncome));
    } else {
        $inpIncome  = mysqli_query($conn, "INSERT INTO 2022_income VALUES('', '$_SESSION[id_pengurus]', 'Media Sosial', '$_SESSION[posisi]',
        'Facebook Depok', '$tanggal', '$d_income', 'Pending')");
        // die(var_dump($inpIncome));
    }

} elseif ($id_pengurus == "facebook_bogor") {
    $kuery      = mysqli_query($conn, "SELECT * FROM income_media WHERE tanggal_tf = '$tanggal_tf' AND id_pengurus = 'facebook_bogor' AND status = 'OK' ");
    $i = 1;
    while($r = mysqli_fetch_array($kuery))
    {   
        $tanggal    = $r["tanggal_tf"]; 
        $status     = $r["status"];
        $d_income   = $r['jumlah_tf'];
        $verif      = $r['verif'];
        $i++;
        $total_income[$i] = $d_income;
        
        $hasil_income = array_sum($total_income);
    }

    $income2022 = mysqli_query($conn, "SELECT * FROM 2022_income WHERE gedung = 'Facebook Bogor' AND tgl_pemasukan = '$tanggal' ");
    $numIncome  = $income2022->num_rows;
    $hData      = mysqli_fetch_assoc($income2022);
    $iStatus    = $hData["status"];
    // die(var_dump($income2022));
    if ($iStatus == "Terverifikasi") {
        $convert    = convertDateDBtoIndo($tanggal);
        $bulan      = substr($convert, 3, -5); 

        $query2     = mysqli_query($conn, "SELECT * FROM 2022_data_income WHERE bulan = '$bulan'");
        $data2      = mysqli_fetch_assoc($query2);
        $incomeB    = $data2["income_bogor"];
        $income     = $data2["income_global"];

        if ($income > 0 && $incomeB > 0) {
            $new_incomeB = $incomeB - $hasil_income + $d_income;
            $new_income = $income - $hasil_income + $d_income;

            $upToIncome = mysqli_query($conn, "UPDATE 2022_data_income SET 
                        `income_bogor`  = '$new_incomeB',
                        `income_global` = '$new_income'
                            WHERE bulan = '$bulan'
                        ");
        }
    }
    // die(var_dump($tIncome));

    if ($numIncome === 1 && $status == "OK") {
        $upIncome = mysqli_query($conn, "UPDATE `2022_income` SET 
                    `id_pengurus`   ='$_SESSION[id_pengurus]',
                    `kategori`      ='Media Sosial',
                    `posisi`        ='$_SESSION[posisi]',
                    `gedung`        ='Facebook Bogor',
                    `tgl_pemasukan` ='$tanggal',
                    `income`        ='$hasil_income',
                    `status`        ='Pending'
                    WHERE 
                    tgl_pemasukan   = '$tanggal' AND gedung = 'Facebook Bogor' ");
        
        // die(var_dump($tIncome));
    } else {
        $inpIncome  = mysqli_query($conn, "INSERT INTO 2022_income VALUES('', '$_SESSION[id_pengurus]', 'Media Sosial', '$_SESSION[posisi]',
        'Facebook Bogor', '$tanggal', '$d_income', 'Pending')");
        // die(var_dump($inpIncome));
    }

} else {
    $kuery      = mysqli_query($conn, "SELECT * FROM income_media WHERE tanggal_tf = '$tanggal_tf' AND id_pengurus = 'instagram' AND status = 'OK' ");
    $i = 1;
    while($r = mysqli_fetch_array($kuery))
    {   
        $tanggal    = $r["tanggal_tf"]; 
        $status     = $r["status"];
        $d_income   = $r['jumlah_tf'];
        $verif      = $r['verif'];
        $i++;
        $total_income[$i] = $d_income;
        
        $hasil_income = array_sum($total_income);
    }

    $income2022 = mysqli_query($conn, "SELECT * FROM 2022_income WHERE tgl_pemasukan = '$tanggal' AND gedung = 'Instagram' ");
    $numIncome  = $income2022->num_rows;
    $hData      = mysqli_fetch_assoc($income2022);
    $iStatus    = $hData["status"];

    if ($iStatus == "Terverifikasi") {
        $convert    = convertDateDBtoIndo($tanggal);
        $bulan      = substr($convert, 3, -5); 

        $query2     = mysqli_query($conn, "SELECT * FROM 2022_data_income WHERE bulan = '$bulan'");
        $data2      = mysqli_fetch_assoc($query2);
        $incomeI    = $data2["income_instagram"];
        $income     = $data2["income_global"];

        if ($income > 0 && $incomeI > 0) {
            $new_incomeI = $incomeI - $hasil_income + $d_income;
            $new_income = $income - $hasil_income + $d_income;

            $upToIncome = mysqli_query($conn, "UPDATE 2022_data_income SET 
                        `income_instagram` = '$new_incomeI',
                        `income_global` = '$new_income'
                            WHERE bulan = '$bulan'
                        ");
        }
    }
    // die(var_dump($tIncome));

    if ($numIncome === 1 && $status == "OK") {
        $upIncome = mysqli_query($conn, "UPDATE `2022_income` SET 
                    `id_pengurus`   ='$_SESSION[id_pengurus]',
                    `kategori`      ='Media Sosial',
                    `posisi`        ='$_SESSION[posisi]',
                    `gedung`        ='Instagram',
                    `tgl_pemasukan` ='$tanggal',
                    `income`        ='$hasil_income',
                    `status`        ='Pending'
                    WHERE 
                    tgl_pemasukan   = '$tanggal' AND gedung = 'Instagram' ");
        
        // die(var_dump($tIncome));
    } else {
        $inpIncome  = mysqli_query($conn, "INSERT INTO 2022_income VALUES('', '$_SESSION[id_pengurus]', 'Media Sosial', '$_SESSION[posisi]',
        'Instagram', '$tanggal', '$d_income', 'Pending')");
        // die(var_dump($inpIncome));
    }

}

// die(var_dump($update));
if ($update !== true) {
    echo "<script>
alert('Income Tidak Berhasil Dikonfirmasi');
document.location.href = '../../admin/$_SESSION[username].php?id_forms=forms_check';
</script>";

} else {
echo "<script>
alert('Income Berhasil Dikonfirmasi');
document.location.href = '../../admin/$_SESSION[username].php?id_forms=forms_check';
</script>";
}


?>