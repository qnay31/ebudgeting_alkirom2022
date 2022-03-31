<?php 
session_start();

error_reporting(0);
require '../../function.php';

$id_verif = $_GET["id_verif"]; 
$unik     = $_GET["id_unik"];
$periode  = $_GET["id_p"]; 

    if ($id_verif == "NonResi") {
        $query          = mysqli_query($conn, "SELECT * FROM 2022_incometanparesi WHERE id = '$unik' AND MONTH(tgl_pemasukan) = '$periode' ");
        $data           = mysqli_fetch_assoc($query);
        $kategori       = $data["kategori"];
        $gedung         = $data["gedung"];
        $id_pengurus    = $data["id_pengurus"];
        $ip             = get_client_ip();
        $date           = date("Y-m-d H:i:s");

        // die(var_dump($result2));
        $update = mysqli_query($conn, "UPDATE `2022_incometanparesi` SET 
                    `status`   ='Terverifikasi'
                    WHERE id    = '$unik' "); 

        // pemasukan tanpa Resi
        $q6  = mysqli_query($conn, "SELECT * FROM 2022_incometanparesi WHERE MONTH(tgl_pemasukan) = '$periode' AND status = 'Terverifikasi' AND gedung = 'Tanpa Resi' ");
        $i = 1;
        $sql6 = $q6;
        while($r6 = mysqli_fetch_array($sql6))
        {   
            $convert   = convertDateDBtoIndo($r6['tgl_pemasukan']);
            $bulan     = substr($convert, 3, -5);
            $d_income6 = $r6['income'];
            $i++;
            $total_income6[$i] = $d_income6;
            
            $hasil_income6 = array_sum($total_income6);
        }
        
    } else {
        $query          = mysqli_query($conn, "SELECT * FROM 2022_income WHERE id = '$unik' AND MONTH(tgl_pemasukan) = '$periode' ");
        $data           = mysqli_fetch_assoc($query);
        $kategori       = $data["kategori"];
        $gedung         = $data["gedung"];
        $id_pengurus    = $data["id_pengurus"];
        $ip             = get_client_ip();
        $date           = date("Y-m-d H:i:s");

        // die(var_dump($result2));
        $update = mysqli_query($conn, "UPDATE `2022_income` SET 
                    `status`   ='Terverifikasi'
                    WHERE id    = '$unik' "); 

        // Global
        $q  = mysqli_query($conn, "SELECT * FROM 2022_income WHERE MONTH(tgl_pemasukan) = '$periode' AND status = 'Terverifikasi' ");

        $i = 1;
        $sql = $q;
        while($r = mysqli_fetch_array($sql))
        {
            $convert   = convertDateDBtoIndo($r['tgl_pemasukan']);
            $bulan     = substr($convert, 3, -5);

            $d_income = $r['income'];
            $i++;
            $total_income[$i] = $d_income;

            $hasil_income = array_sum($total_income);
        }
        
        // pemasukan depok
        $q2  = mysqli_query($conn, "SELECT * FROM 2022_income WHERE MONTH(tgl_pemasukan) = '$periode' AND status = 'Terverifikasi' AND gedung = 'Facebook Depok' ");

        $sql2 = $q2;
        while($r2 = mysqli_fetch_array($sql2))
        {
            $d_income2 = $r2['income'];
            $i++;
            $total_income2[$i] = $d_income2;
            
            $hasil_income2 = array_sum($total_income2);
        }

        // pemasukan Bogor
            $q4  = mysqli_query($conn, "SELECT * FROM 2022_income WHERE MONTH(tgl_pemasukan) = '$periode' AND status = 'Terverifikasi' AND gedung = 'Facebook Bogor' ");
        
        $sql4 = $q4;
        while($r4 = mysqli_fetch_array($sql4))
        {
            $d_income4 = $r4['income'];
            $i++;
            $total_income4[$i] = $d_income4;
            
            $hasil_income4 = array_sum($total_income4);
        }

        // pemasukan Instagram
        $q5  = mysqli_query($conn, "SELECT * FROM 2022_income WHERE MONTH(tgl_pemasukan) = '$periode' AND status = 'Terverifikasi' AND gedung = 'Instagram' ");
        
        $sql5 = $q5;
        while($r5 = mysqli_fetch_array($sql5))
        {
            $d_income5 = $r5['income'];
            $i++;
            $total_income5[$i] = $d_income5;
            
            $hasil_income5 = array_sum($total_income5);
        }
    }
    

    

    $result2 = mysqli_query($conn, "INSERT INTO 2022_log_aktivity VALUES('', '$_SESSION[nama]', '$_SESSION[posisi]', '$ip', '$date', '$_SESSION[nama] Divisi $_SESSION[posisi] Telah Mengkonfirmasi Laporan $kategori dengan income dari gedung $gedung')");
    
    // cek nama
    $c_query = mysqli_query($conn, "SELECT bulan FROM 2022_data_income WHERE bulan = '$bulan' ");
    
    // sub cabang pemasukan
    // celengan
    if ($id_pengurus == 'kepala_income' && $gedung == 'Facebook Depok') {
        if (mysqli_fetch_assoc($c_query)) {
                $update2 = mysqli_query($conn, "UPDATE `2022_data_income` SET 
                `income_depok`   ='$hasil_income2',
                `income_global`  ='$hasil_income'
                WHERE bulan      = '$bulan' ");
                // die(var_dump($hasil_income));
            }
            
        } elseif ($id_pengurus == 'kepala_income' && $gedung == 'Facebook Bogor') {
            if (mysqli_fetch_assoc($c_query)) {
                mysqli_query($conn, "UPDATE `2022_data_income` SET 
                `income_bogor`   ='$hasil_income4',
                `income_global`  ='$hasil_income'
                WHERE bulan      = '$bulan' ");
            }
            
        } elseif ($id_pengurus == 'kepala_income' && $gedung == 'Instagram') {
            if (mysqli_fetch_assoc($c_query)) {
                mysqli_query($conn, "UPDATE `2022_data_income` SET 
                `income_instagram`  ='$hasil_income5',
                `income_global`     ='$hasil_income'
                WHERE bulan         = '$bulan' ");
            }
            
        } else {
            if (mysqli_fetch_assoc($c_query)) {
                mysqli_query($conn, "UPDATE `2022_data_income` SET 
                `income_tanpaResi`  ='$hasil_income6'
                WHERE bulan         = '$bulan' ");
                // die(var_dump($update2));
            }
        }

    // die(var_dump($update));
    if ($update == false ) {
        echo "<script>
    alert('Data Tidak Berhasil Dikonfirmasi');
    document.location.href = '../../admin/$_SESSION[username].php?id_checklist=checklist_pemasukanMedia';
    </script>";
    } else {
    echo "<script>
    alert('Data Laporan Berhasil Dikonfirmasi');
    document.location.href = '../../admin/$_SESSION[username].php?id_checklist=checklist_pemasukanMedia';
    </script>";
    }


?>