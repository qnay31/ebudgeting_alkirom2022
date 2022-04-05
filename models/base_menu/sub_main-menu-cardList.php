<?php 
if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "kepala_pengajuan" || $_SESSION["id_pengurus"] == "management_keuangan") {
    $bulan     = date("Y-m-d");
    $bln       = substr($bulan, 5,-3);
    $convert   = convertDateDBtoIndo($bulan);
    $bulanan   = substr($convert, 3, -5);
    // program
    $q = mysqli_query($conn, "SELECT * FROM 2022_data_program");
    $i = 1;
    $sql = $q;
    while($r = mysqli_fetch_array($sql))
    {
        $i++;   
        $d_anggaran = $r['anggaran_global'];
        $total_anggaran[$i] = $d_anggaran;

        $hasil_anggaran = array_sum($total_anggaran);

        $d_terpakai = $r['terpakai_global'];
        $total_terpakai[$i] = $d_terpakai;

        $hasil_terpakai = array_sum($total_terpakai);
    }

    // logistik
    $q2 = mysqli_query($conn, "SELECT * FROM 2022_data_logistik");
    $sql2 = $q2;
    while($r2 = mysqli_fetch_array($sql2))
    {
        $i++;   
        $d_anggaran2 = $r2['anggaran_global'];
        $total_anggaran2[$i] = $d_anggaran2;

        $hasil_anggaran2 = array_sum($total_anggaran2);

        $d_terpakai2 = $r2['terpakai_global'];
        $total_terpakai2[$i] = $d_terpakai2;

        $hasil_terpakai2 = array_sum($total_terpakai2);
    }

    // humas
    $q3 = mysqli_query($conn, "SELECT * FROM 2022_data_aset_yayasan");
    $sql3 = $q3;
    while($r3 = mysqli_fetch_array($sql3))
    {
        $i++;   
        $d_anggaran3 = $r3['anggaran_global'];
        $total_anggaran3[$i] = $d_anggaran3;

        $hasil_anggaran3 = array_sum($total_anggaran3);

        $d_terpakai3 = $r3['terpakai_global'];
        $total_terpakai3[$i] = $d_terpakai3;

        $hasil_terpakai3 = array_sum($total_terpakai3);
    }

    // aset yayasan
    $q4 = mysqli_query($conn, "SELECT * FROM 2022_data_uang_makan");
    $sql4 = $q4;
    while($r4 = mysqli_fetch_array($sql4))
    {
        $i++;   
        $d_anggaran4 = $r4['anggaran_global'];
        $total_anggaran4[$i] = $d_anggaran4;

        $hasil_anggaran4 = array_sum($total_anggaran4);

        $d_terpakai4 = $r4['terpakai_global'];
        $total_terpakai4[$i] = $d_terpakai4;

        $hasil_terpakai4 = array_sum($total_terpakai4);
    }

    $q5 = mysqli_query($conn, "SELECT * FROM 2022_data_gaji_karyawan");
    $sql5 = $q5;
    while($r5 = mysqli_fetch_array($sql5))
    {
        $i++;   
        $d_anggaran5 = $r5['anggaran_global'];
        $total_anggaran5[$i] = $d_anggaran5;

        $hasil_anggaran5 = array_sum($total_anggaran5);

        $d_terpakai5 = $r5['terpakai_global'];
        $total_terpakai5[$i] = $d_terpakai5;

        $hasil_terpakai5 = array_sum($total_terpakai5);
    }

    $q6 = mysqli_query($conn, "SELECT * FROM 2022_data_anggaran_lain");
    $sql6 = $q6;
    while($r6 = mysqli_fetch_array($sql6))
    {
        $i++;   
        $d_anggaran6 = $r6['anggaran_global'];
        $total_anggaran6[$i] = $d_anggaran6;

        $hasil_anggaran6 = array_sum($total_anggaran6);

        $d_terpakai6 = $r6['terpakai_global'];
        $total_terpakai6[$i] = $d_terpakai6;

        $hasil_terpakai6 = array_sum($total_terpakai6);
    }

    $q7 = mysqli_query($conn, "SELECT * FROM 2022_data_maintenance");
    $sql7 = $q7;
    while($r7 = mysqli_fetch_array($sql7))
    {
        $i++;   
        $d_anggaran7 = $r7['anggaran_global'];
        $total_anggaran7[$i] = $d_anggaran7;

        $hasil_anggaran7 = array_sum($total_anggaran7);

        $d_terpakai7 = $r7['terpakai_global'];
        $total_terpakai7[$i] = $d_terpakai7;

        $hasil_terpakai7 = array_sum($total_terpakai7);
    }

    $q8 = mysqli_query($conn, "SELECT * FROM 2022_data_operasional_yayasan");
    $sql8 = $q8;
    while($r8 = mysqli_fetch_array($sql8))
    {
        $i++;   
        $d_anggaran8 = $r8['anggaran_global'];
        $total_anggaran8[$i] = $d_anggaran8;

        $hasil_anggaran8 = array_sum($total_anggaran8);

        $d_terpakai8 = $r8['terpakai_global'];
        $total_terpakai8[$i] = $d_terpakai8;

        $hasil_terpakai8 = array_sum($total_terpakai8);
    }

    $q9 = mysqli_query($conn, "SELECT * FROM 2022_data_paudqu");
    $sql9 = $q9;
    while($r9 = mysqli_fetch_array($sql9))
    {
        $i++;   
        $d_anggaran9 = $r9['anggaran_global'];
        $total_anggaran9[$i] = $d_anggaran9;

        $hasil_anggaran9 = array_sum($total_anggaran9);

        $d_terpakai9 = $r9['terpakai_global'];
        $total_terpakai9[$i] = $d_terpakai9;

        $hasil_terpakai9 = array_sum($total_terpakai9);
    }

    $anggaran_global = $hasil_anggaran+$hasil_anggaran2+$hasil_anggaran3+$hasil_anggaran4+$hasil_anggaran5+$hasil_anggaran6+$hasil_anggaran7+$hasil_anggaran8+$hasil_anggaran9;

    $terpakai_global = $hasil_terpakai+$hasil_terpakai2+$hasil_terpakai3+$hasil_terpakai4+$hasil_terpakai5+$hasil_terpakai6+$hasil_terpakai7+$hasil_terpakai8+$hasil_terpakai9;

    $cashback_global = $anggaran_global-$terpakai_global;
    // die(var_dump($terpakai_global));
    
    // bulanan
    // program
    $k = mysqli_query($conn, "SELECT * FROM 2022_data_program WHERE bulan = '$bulanan'");
    $skl = $k;
    while($dBulanan = mysqli_fetch_array($skl))
    {
        $i++;   
        $d_anggaranBulanan = $dBulanan['anggaran_global'];
        $total_anggaranBulanan[$i] = $d_anggaranBulanan;

        $hasil_anggaranBulanan = array_sum($total_anggaranBulanan);

        $d_terpakaiBulanan = $dBulanan['terpakai_global'];
        $total_terpakaiBulanan[$i] = $d_terpakaiBulanan;

        $hasil_terpakaiBulanan = array_sum($total_terpakaiBulanan);
        // die(var_dump($d_anggaranBulanan));
        $cashbackBulanan = $hasil_anggaranBulanan-$hasil_terpakaiBulanan;
    }

    // logistik
    $k2 = mysqli_query($conn, "SELECT * FROM 2022_data_logistik WHERE bulan = '$bulanan'");
    $skl2 = $k2;
    while($dBulanan2 = mysqli_fetch_array($skl2))
    {
        $i++;   
        $d_anggaranBulanan2 = $dBulanan2['anggaran_global'];
        $total_anggaranBulanan2[$i] = $d_anggaranBulanan2;

        $hasil_anggaranBulanan2 = array_sum($total_anggaranBulanan2);

        $d_terpakaiBulanan2 = $dBulanan2['terpakai_global'];
        $total_terpakaiBulanan2[$i] = $d_terpakaiBulanan2;

        $hasil_terpakaiBulanan2 = array_sum($total_terpakaiBulanan2);
        $cashbackBulanan2 = $hasil_anggaranBulanan2-$hasil_terpakaiBulanan2;
    }

    // aset
    $k3 = mysqli_query($conn, "SELECT * FROM 2022_data_aset_yayasan WHERE bulan = '$bulanan'");
    $skl3 = $k3;
    while($dBulanan3 = mysqli_fetch_array($skl3))
    {
        $i++;   
        $d_anggaranBulanan3 = $dBulanan3['anggaran_global'];
        $total_anggaranBulanan3[$i] = $d_anggaranBulanan3;

        $hasil_anggaranBulanan3 = array_sum($total_anggaranBulanan3);

        $d_terpakaiBulanan3 = $dBulanan3['terpakai_global'];
        $total_terpakaiBulanan3[$i] = $d_terpakaiBulanan3;

        $hasil_terpakaiBulanan3 = array_sum($total_terpakaiBulanan3);
        $cashbackBulanan3 = $hasil_anggaranBulanan3-$hasil_terpakaiBulanan3;
    }

    // uang makan
    $k4 = mysqli_query($conn, "SELECT * FROM 2022_data_uang_makan WHERE bulan = '$bulanan'");
    $skl4 = $k4;
    while($dBulanan4 = mysqli_fetch_array($skl4))
    {
        $i++;   
        $d_anggaranBulanan4 = $dBulanan4['anggaran_global'];
        $total_anggaranBulanan4[$i] = $d_anggaranBulanan4;

        $hasil_anggaranBulanan4 = array_sum($total_anggaranBulanan4);

        $d_terpakaiBulanan4 = $dBulanan4['terpakai_global'];
        $total_terpakaiBulanan4[$i] = $d_terpakaiBulanan4;

        $hasil_terpakaiBulanan4 = array_sum($total_terpakaiBulanan4);
        $cashbackBulanan4 = $hasil_anggaranBulanan4-$hasil_terpakaiBulanan4;
    }

    // gaji karyawan
    $k5 = mysqli_query($conn, "SELECT * FROM 2022_data_gaji_karyawan WHERE bulan = '$bulanan'");
    $skl5 = $k5;
    while($dBulanan5 = mysqli_fetch_array($skl5))
    {
        $i++;   
        $d_anggaranBulanan5 = $dBulanan5['anggaran_global'];
        $total_anggaranBulanan5[$i] = $d_anggaranBulanan5;

        $hasil_anggaranBulanan5 = array_sum($total_anggaranBulanan5);

        $d_terpakaiBulanan5 = $dBulanan5['terpakai_global'];
        $total_terpakaiBulanan5[$i] = $d_terpakaiBulanan5;

        $hasil_terpakaiBulanan5 = array_sum($total_terpakaiBulanan5);
        $cashbackBulanan5 = $hasil_anggaranBulanan5-$hasil_terpakaiBulanan5;
    }

    $k6 = mysqli_query($conn, "SELECT * FROM 2022_data_anggaran_lain WHERE bulan = '$bulanan'");
    $skl6 = $k6;
    while($dBulanan6 = mysqli_fetch_array($skl6))
    {
        $i++;   
        $d_anggaranBulanan6 = $dBulanan6['anggaran_global'];
        $total_anggaranBulanan6[$i] = $d_anggaranBulanan6;

        $hasil_anggaranBulanan6 = array_sum($total_anggaranBulanan6);

        $d_terpakaiBulanan6 = $dBulanan6['terpakai_global'];
        $total_terpakaiBulanan6[$i] = $d_terpakaiBulanan6;

        $hasil_terpakaiBulanan6 = array_sum($total_terpakaiBulanan6);
        $cashbackBulanan6 = $hasil_anggaranBulanan6-$hasil_terpakaiBulanan6;
    }

    $k7 = mysqli_query($conn, "SELECT * FROM 2022_data_maintenance WHERE bulan = '$bulanan'");
    $skl7 = $k7;
    while($dBulanan7 = mysqli_fetch_array($skl7))
    {
        $i++;   
        $d_anggaranBulanan7 = $dBulanan7['anggaran_global'];
        $total_anggaranBulanan7[$i] = $d_anggaranBulanan7;

        $hasil_anggaranBulanan7 = array_sum($total_anggaranBulanan7);

        $d_terpakaiBulanan7 = $dBulanan7['terpakai_global'];
        $total_terpakaiBulanan7[$i] = $d_terpakaiBulanan7;

        $hasil_terpakaiBulanan7 = array_sum($total_terpakaiBulanan7);
        $cashbackBulanan7 = $hasil_anggaranBulanan7-$hasil_terpakaiBulanan7;
    }

    $k8 = mysqli_query($conn, "SELECT * FROM 2022_data_operasional_yayasan WHERE bulan = '$bulanan'");
    $skl8 = $k8;
    while($dBulanan8 = mysqli_fetch_array($skl8))
    {
        $i++;   
        $d_anggaranBulanan8 = $dBulanan8['anggaran_global'];
        $total_anggaranBulanan8[$i] = $d_anggaranBulanan8;

        $hasil_anggaranBulanan8 = array_sum($total_anggaranBulanan8);

        $d_terpakaiBulanan8 = $dBulanan8['terpakai_global'];
        $total_terpakaiBulanan8[$i] = $d_terpakaiBulanan8;

        $hasil_terpakaiBulanan8 = array_sum($total_terpakaiBulanan8);
        $cashbackBulanan8 = $hasil_anggaranBulanan8-$hasil_terpakaiBulanan8;
    }

    $k9 = mysqli_query($conn, "SELECT * FROM 2022_data_paudqu WHERE bulan = '$bulanan'");
    $skl9 = $k9;
    while($dBulanan9 = mysqli_fetch_array($skl9))
    {
        $i++;   
        $d_anggaranBulanan9 = $dBulanan9['anggaran_global'];
        $total_anggaranBulanan9[$i] = $d_anggaranBulanan9;

        $hasil_anggaranBulanan9 = array_sum($total_anggaranBulanan9);

        $d_terpakaiBulanan9 = $dBulanan9['terpakai_global'];
        $total_terpakaiBulanan9[$i] = $d_terpakaiBulanan9;

        $hasil_terpakaiBulanan9 = array_sum($total_terpakaiBulanan9);
        $cashbackBulanan9 = $hasil_anggaranBulanan9-$hasil_terpakaiBulanan9;
    }

    $anggaran_globalBulanan = $hasil_anggaranBulanan+$hasil_anggaranBulanan2+$hasil_anggaranBulanan3+$hasil_anggaranBulanan4+$hasil_anggaranBulanan5+$hasil_anggaranBulanan6+$hasil_anggaranBulanan7+$hasil_anggaranBulanan8+$hasil_anggaranBulanan9;

    $terpakai_globalBulanan = $hasil_terpakaiBulanan+$hasil_terpakaiBulanan2+$hasil_terpakaiBulanan3+$hasil_terpakaiBulanan4+$hasil_terpakaiBulanan5+$hasil_terpakaiBulanan6+$hasil_terpakaiBulanan7+$hasil_terpakaiBulanan8+$hasil_terpakaiBulanan9;

    $cashback_globalBulananan = $anggaran_globalBulanan-$terpakai_globalBulanan;
    // PEMASUKAN

    // media sosial
    $incBulanan = mysqli_query($conn, "SELECT * FROM 2022_data_income WHERE bulan = '$bulanan'");
    while($data_incBulanan = mysqli_fetch_array($incBulanan))
    {
        $i++;   
        $d_incomeBulanan = $data_incBulanan['income_global'];
        $total_incomeBulanan[$i] = $d_incomeBulanan;

        $hasil_incomeBulanan = array_sum($total_incomeBulanan);

        $d_resiBulanan = $data_incBulanan['income_tanpaResi'];
        $total_resiBulanan[$i] = $d_resiBulanan;

        $hasil_resiBulanan = array_sum($total_resiBulanan);
        // die(var_dump($d_resiBulanan));
    }

    $inc1 = mysqli_query($conn, "SELECT * FROM 2022_data_income");
    while($data_inc1 = mysqli_fetch_array($inc1))
    {
        $i++;   
        $d_income1 = $data_inc1['income_global'];
        $total_income1[$i] = $d_income1;

        $hasil_income1 = array_sum($total_income1);

        $d_resi1 = $data_inc1['income_tanpaResi'];
        $total_resi1[$i] = $d_resi1;

        $hasil_resi1 = array_sum($total_resi1);
    }

    $pemasukanYayasanBulanan = $hasil_incomeBulanan + $hasil_resiBulanan+$cashback_globalBulananan;

    // tahun
    $pemasukanYayasanWresi = $hasil_income1+$hasil_resi1;
    $pemasukanYayasanGlobal = $hasil_income1+$hasil_resi1+$cashback_global;
    
} elseif ($_SESSION["id_pengurus"] == "kepala_cabang") {
    // program
    $q = mysqli_query($conn, "SELECT * FROM 2022_data_program");
    $i = 1;
    $sql = $q;
    while($r = mysqli_fetch_array($sql))
    {
        $i++;   
        $d_anggaran         = $r['anggaran_program_bogor'];
        $total_anggaran[$i] = $d_anggaran;

        $hasil_anggaran     = array_sum($total_anggaran);

        $d_terpakai         = $r['terpakai_program_bogor'];
        $total_terpakai[$i] = $d_terpakai;

        $hasil_terpakai     = array_sum($total_terpakai);
        $cashback           = $hasil_anggaran - $hasil_terpakai;
    }

    $q2 = mysqli_query($conn, "SELECT * FROM 2022_data_logistik");
    $sql2 = $q2;
    while($r2 = mysqli_fetch_array($sql2))
    {
        $i++;   
        $d_anggaran2         = $r2['anggaran_logistik_bogor'];
        $total_anggaran2[$i] = $d_anggaran2;

        $hasil_anggaran2     = array_sum($total_anggaran2);

        $d_terpakai2         = $r2['terpakai_logistik_bogor'];
        $total_terpakai2[$i] = $d_terpakai2;

        $hasil_terpakai2     = array_sum($total_terpakai2);
        $cashback2           = $hasil_anggaran2 - $hasil_terpakai2;
    }

    // media sosial
    $bulan     = date("Y-m-d");
    $bln       = substr($bulan, 5,-3);

    $incBulanan = mysqli_query($conn, "SELECT * FROM income_media WHERE cabang = 'Bogor' AND status = 'OK' AND MONTH(tanggal_tf) = '$bln'");
    while($data_incBulanan = mysqli_fetch_array($incBulanan))
    {
        $i++;   
        $d_incomeBulanan = $data_incBulanan['jumlah_tf'];
        $total_incomeBulanan[$i] = $d_incomeBulanan;

        $hasil_incomeBulanan = array_sum($total_incomeBulanan);
        // die(var_dump($hasil_incomeBulanan));
    }

    $inc1 = mysqli_query($conn, "SELECT * FROM 2022_data_income");
    while($data_inc1 = mysqli_fetch_array($inc1))
    {
        $i++;   
        $d_income1 = $data_inc1['income_bogor'];
        $total_income1[$i] = $d_income1;

        $hasil_income1 = array_sum($total_income1);
    }

} elseif ($_SESSION["id_pengurus"] == "kepala_income") {
    $bulan     = date("Y-m-d");
    $bln       = substr($bulan, 5,-3);
    $i = 1;

    $incBulananFB = mysqli_query($conn, "SELECT * FROM income_media WHERE id_pengurus = 'facebook_depok' AND status = 'OK' AND MONTH(tanggal_tf) = '$bln'");
    while($data_incBulananFB = mysqli_fetch_array($incBulananFB))
    {
        $i++;   
        $d_incomeBulananFB = $data_incBulananFB['jumlah_tf'];
        $total_incomeBulananFB[$i] = $d_incomeBulananFB;

        $hasil_incomeBulananFB = array_sum($total_incomeBulananFB);
        // die(var_dump($bln));
    }

    $incBulananFB_b = mysqli_query($conn, "SELECT * FROM income_media WHERE id_pengurus = 'facebook_bogor' AND status = 'OK' AND MONTH(tanggal_tf) = '$bln'");
    while($data_incBulananFB_b = mysqli_fetch_array($incBulananFB_b))
    {
        $i++;   
        $d_incomeBulananFB_b = $data_incBulananFB_b['jumlah_tf'];
        $total_incomeBulananFB_b[$i] = $d_incomeBulananFB_b;

        $hasil_incomeBulananFB_b = array_sum($total_incomeBulananFB_b);
        // die(var_dump($bln));
    }

    $incBulananIns = mysqli_query($conn, "SELECT * FROM income_media WHERE id_pengurus = 'instagram' AND status = 'OK' AND MONTH(tanggal_tf) = '$bln'");
    while($data_incBulananIns = mysqli_fetch_array($incBulananIns))
    {
        $i++;   
        $d_incomeBulananIns = $data_incBulananIns['jumlah_tf'];
        $total_incomeBulananIns[$i] = $d_incomeBulananIns;

        $hasil_incomeBulananIns = array_sum($total_incomeBulananIns);
        // die(var_dump($bln));
    }

    $hasil_incomeBulananGlobal = $hasil_incomeBulananFB+$hasil_incomeBulananFB_b+$hasil_incomeBulananIns;

    $convert   = convertDateDBtoIndo($bulan);
    $bulanNR     = substr($convert, 3, -5);

    $inc = mysqli_query($conn, "SELECT * FROM 2022_data_income WHERE bulan = '$bulanNR'");
    while($data_inc = mysqli_fetch_array($inc))
    {
        $i++;   
        $d_income = $data_inc['income_tanpaResi'];
        $total_income[$i] = $d_income;

        $hasil_income = array_sum($total_income);

        $d_incomeGlobal = $data_inc['income_global'];
        $total_incomeGlobal[$i] = $d_incomeGlobal;

        $hasil_incomeGlobal = array_sum($total_incomeGlobal);
    }

    $incTahun = mysqli_query($conn, "SELECT * FROM 2022_data_income");
    while($data_incTahun = mysqli_fetch_array($incTahun))
    {
        $i++;   
        $d_incomeGlobalTahun = $data_incTahun['income_global'];
        $total_incomeGlobalTahun[$i] = $d_incomeGlobalTahun;

        $hasil_incomeGlobalTahun = array_sum($total_incomeGlobalTahun);
    }

} elseif ($_SESSION["id_pengurus"] == "manager_facebook" || $_SESSION["id_pengurus"] == "manager_instagram") {
    $bulan     = date("Y-m-d");
    $bln       = substr($bulan, 5,-3);
    $i = 1;
    
    if ($_SESSION["username"] == "admin_facebook") {
        $incBulanan = mysqli_query($conn, "SELECT data_akun.id_pengurus, data_akun.nama_akun, data_akun.team, income_media.jumlah_tf, income_media.pemegang 
        FROM data_akun JOIN income_media ON income_media.nama_akun = data_akun.nama_akun WHERE data_akun.team = 'Facebook Taman' AND MONTH(tanggal_tf)= '$bln' AND income_media.status = 'OK'");
        while($data_incBulanan = mysqli_fetch_array($incBulanan))
        {
            $i++;   
            $d_incomeBulanan = $data_incBulanan['jumlah_tf'];
            $total_incomeBulanan[$i] = $d_incomeBulanan;

            $hasil_incomeBulanan = array_sum($total_incomeBulanan);
            // die(var_dump($hasil_incomeBulanan));
        }
        
        $inc = mysqli_query($conn, "SELECT data_akun.id_pengurus, data_akun.nama_akun, data_akun.team, income_media.jumlah_tf, income_media.pemegang 
        FROM data_akun JOIN income_media ON income_media.nama_akun = data_akun.nama_akun WHERE data_akun.team = 'Facebook Taman' AND income_media.status = 'OK'");
        while($data_inc = mysqli_fetch_array($inc))
        {
            $i++;   
            $d_income = $data_inc['jumlah_tf'];
            $total_income[$i] = $d_income;

            $hasil_income = array_sum($total_income);
        }

    } elseif ($_SESSION["username"] == "facebook_pusat") {
        $incBulanan = mysqli_query($conn, "SELECT data_akun.id_pengurus, data_akun.nama_akun, data_akun.team, income_media.jumlah_tf, income_media.pemegang 
        FROM data_akun JOIN income_media ON income_media.nama_akun = data_akun.nama_akun WHERE data_akun.team = 'Facebook Pusat' AND MONTH(tanggal_tf)= '$bln' AND income_media.status = 'OK'");
        while($data_incBulanan = mysqli_fetch_array($incBulanan))
        {
            $i++;   
            $d_incomeBulanan = $data_incBulanan['jumlah_tf'];
            $total_incomeBulanan[$i] = $d_incomeBulanan;

            $hasil_incomeBulanan = array_sum($total_incomeBulanan);
            // die(var_dump($hasil_incomeBulanan));
        }
        
        $inc = mysqli_query($conn, "SELECT data_akun.id_pengurus, data_akun.nama_akun, data_akun.team, income_media.jumlah_tf, income_media.pemegang 
        FROM data_akun JOIN income_media ON income_media.nama_akun = data_akun.nama_akun WHERE data_akun.team = 'Facebook Pusat' AND income_media.status = 'OK'");
        while($data_inc = mysqli_fetch_array($inc))
        {
            $i++;   
            $d_income = $data_inc['jumlah_tf'];
            $total_income[$i] = $d_income;

            $hasil_income = array_sum($total_income);
        }

    } elseif ($_SESSION["username"] == "instagram_taman") {
        $incBulanan = mysqli_query($conn, "SELECT data_akun.id_pengurus, data_akun.nama_akun, data_akun.team, income_media.jumlah_tf, income_media.pemegang 
        FROM data_akun JOIN income_media ON income_media.nama_akun = data_akun.nama_akun WHERE data_akun.team = 'Instagram Taman' AND MONTH(tanggal_tf)= '$bln' AND income_media.status = 'OK'");
        while($data_incBulanan = mysqli_fetch_array($incBulanan))
        {
            $i++;   
            $d_incomeBulanan = $data_incBulanan['jumlah_tf'];
            $total_incomeBulanan[$i] = $d_incomeBulanan;

            $hasil_incomeBulanan = array_sum($total_incomeBulanan);
            // die(var_dump($hasil_incomeBulanan));
        }
        
        $inc = mysqli_query($conn, "SELECT data_akun.id_pengurus, data_akun.nama_akun, data_akun.team, income_media.jumlah_tf, income_media.pemegang 
        FROM data_akun JOIN income_media ON income_media.nama_akun = data_akun.nama_akun WHERE data_akun.team = 'Instagram Taman' AND income_media.status = 'OK'");
        while($data_inc = mysqli_fetch_array($inc))
        {
            $i++;   
            $d_income = $data_inc['jumlah_tf'];
            $total_income[$i] = $d_income;

            $hasil_income = array_sum($total_income);
        }
    
    } elseif ($_SESSION["username"] == "instagram_bojong") {
        $incBulanan = mysqli_query($conn, "SELECT data_akun.id_pengurus, data_akun.nama_akun, data_akun.team, income_media.jumlah_tf, income_media.pemegang 
        FROM data_akun JOIN income_media ON income_media.nama_akun = data_akun.nama_akun WHERE data_akun.team = 'Instagram Bojong' AND MONTH(tanggal_tf)= '$bln' AND income_media.status = 'OK'");
        while($data_incBulanan = mysqli_fetch_array($incBulanan))
        {
            $i++;   
            $d_incomeBulanan = $data_incBulanan['jumlah_tf'];
            $total_incomeBulanan[$i] = $d_incomeBulanan;

            $hasil_incomeBulanan = array_sum($total_incomeBulanan);
            // die(var_dump($hasil_incomeBulanan));
        }
        
        $inc = mysqli_query($conn, "SELECT data_akun.id_pengurus, data_akun.nama_akun, data_akun.team, income_media.jumlah_tf, income_media.pemegang 
        FROM data_akun JOIN income_media ON income_media.nama_akun = data_akun.nama_akun WHERE data_akun.team = 'Instagram Bojong' AND income_media.status = 'OK'");
        while($data_inc = mysqli_fetch_array($inc))
        {
            $i++;   
            $d_income = $data_inc['jumlah_tf'];
            $total_income[$i] = $d_income;

            $hasil_income = array_sum($total_income);
        }

    } elseif ($_SESSION["username"] == "instagram_meruyung") {
        $incBulanan = mysqli_query($conn, "SELECT data_akun.id_pengurus, data_akun.nama_akun, data_akun.team, income_media.jumlah_tf, income_media.pemegang 
        FROM data_akun JOIN income_media ON income_media.nama_akun = data_akun.nama_akun WHERE data_akun.team = 'Instagram Meruyung' AND MONTH(tanggal_tf)= '$bln' AND income_media.status = 'OK'");
        while($data_incBulanan = mysqli_fetch_array($incBulanan))
        {
            $i++;   
            $d_incomeBulanan = $data_incBulanan['jumlah_tf'];
            $total_incomeBulanan[$i] = $d_incomeBulanan;

            $hasil_incomeBulanan = array_sum($total_incomeBulanan);
            // die(var_dump($hasil_incomeBulanan));
        }
        
        $inc = mysqli_query($conn, "SELECT data_akun.id_pengurus, data_akun.nama_akun, data_akun.team, income_media.jumlah_tf, income_media.pemegang 
        FROM data_akun JOIN income_media ON income_media.nama_akun = data_akun.nama_akun WHERE data_akun.team = 'Instagram Meruyung' AND income_media.status = 'OK'");
        while($data_inc = mysqli_fetch_array($inc))
        {
            $i++;   
            $d_income = $data_inc['jumlah_tf'];
            $total_income[$i] = $d_income;

            $hasil_income = array_sum($total_income);
        }
        
    } else {
        $incBulanan = mysqli_query($conn, "SELECT * FROM income_media WHERE cabang = '$_SESSION[cabang]' AND id_pengurus = '$_SESSION[username]' AND status = 'OK' AND MONTH(tanggal_tf) = '$bln'");
        while($data_incBulanan = mysqli_fetch_array($incBulanan))
        {
            $i++;   
            $d_incomeBulanan = $data_incBulanan['jumlah_tf'];
            $total_incomeBulanan[$i] = $d_incomeBulanan;

            $hasil_incomeBulanan = array_sum($total_incomeBulanan);
            // die(var_dump($hasil_incomeBulanan));
        }
        
        $inc = mysqli_query($conn, "SELECT * FROM income_media WHERE cabang = '$_SESSION[cabang]' AND id_pengurus = '$_SESSION[username]' AND status = 'OK'");
        while($data_inc = mysqli_fetch_array($inc))
        {
            $i++;   
            $d_income = $data_inc['jumlah_tf'];
            $total_income[$i] = $d_income;

            $hasil_income = array_sum($total_income);

        }
    }
        
} else {
    $bulan     = date("Y-m-d");
    $bln       = substr($bulan, 5,-3);
    $i = 1;
    
    $incBulanan = mysqli_query($conn, "SELECT * FROM income_media WHERE pemegang = '$_SESSION[nama]' AND status = 'OK' AND MONTH(tanggal_tf) = '$bln'");
    while($data_incBulanan = mysqli_fetch_array($incBulanan))
    {
        $i++;   
        $d_incomeBulanan = $data_incBulanan['jumlah_tf'];
        $total_incomeBulanan[$i] = $d_incomeBulanan;

        $hasil_incomeBulanan = array_sum($total_incomeBulanan);
        // die(var_dump($hasil_incomeBulanan));
    }

    // die(var_dump($akun));
    $inc = mysqli_query($conn, "SELECT * FROM income_media WHERE pemegang = '$_SESSION[nama]' AND status = 'OK'");
    while($data_inc = mysqli_fetch_array($inc))
    {
        $i++;   
        $d_income = $data_inc['jumlah_tf'];
        $total_income[$i] = $d_income;

        $hasil_income = array_sum($total_income);

    }
}

?>

<?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
<!-- Card -->
<div class="col-xxl-4 col-md-4">
    <div class="card info-card customers-card">
        <div class="card-body">
            <h5 class="card-title">Pemasukan Yayasan <span>| Bulan Ini</span></h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <h6 data-bs-toggle="tooltip" data-bs-placement="right" data-bs-html="true"
                        title="Media Sosial : <?= number_format($hasil_incomeBulanan,0,"." , ".") ?> <br> Tanpa Resi : <?= number_format($hasil_resiBulanan,0,"." , ".") ?> <br> Cashback : <?= number_format($cashback_globalBulananan,0,"." , ".") ?>">
                        Rp. <?= number_format($pemasukanYayasanBulanan,0,"." , ".") ?> <i
                            class="bi bi-question-diamond-fill"></i></h6>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<!-- Card -->
<div class="col-xxl-4 col-md-4">
    <div class="card info-card customers-card">
        <div class="card-body">
            <h5 class="card-title">Pemasukan Non Cashback <span>| Per Tahun</span></h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <h6 data-bs-toggle="tooltip" data-bs-placement="right" data-bs-html="true"
                        title="Media Sosial : <?= number_format($hasil_income1,0,"." , ".") ?> <br> Tanpa Resi : <?= number_format($hasil_resi1,0,"." , ".") ?>">
                        Rp. <?= number_format($pemasukanYayasanWresi,0,"." , ".") ?> <i
                            class="bi bi-question-diamond-fill"></i></h6>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia&idMedia=mediaGlobal&id_periode=<?= $bln; ?>"><span
                            class="detail-bulanan">Lihat bulanan →</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<!-- Card -->
<div class="col-xxl-4 col-md-4">
    <div class="card info-card customers-card">
        <div class="card-body">
            <h5 class="card-title">Pemasukan Global <span>| Per Tahun</span></h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <h6 data-bs-toggle="tooltip" data-bs-placement="right" data-bs-html="true"
                        title="Media Sosial : <?= number_format($hasil_income1,0,"." , ".") ?> <br> Tanpa Resi : <?= number_format($hasil_resi1,0,"." , ".") ?> <br> Cashback : <?= number_format($cashback_global,0,"." , ".") ?>">
                        Rp. <?= number_format($pemasukanYayasanGlobal,0,"." , ".") ?> <i
                            class="bi bi-question-diamond-fill"></i></h6>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<!-- Card -->
<div class="col-xxl-12">
    <div class="splide" id="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <!-- Program -->
                <li class="splide__slide">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Program <span>| Bulan Ini</span>
                                <a
                                    href="<?= $_SESSION["username"] ?>.php?id_database=database_program&id_periode=<?= $bln; ?>">
                                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="right" title="Lihat detail laporan">
                                        <i class="text-danger">New !</i>
                                    </i>
                                </a>
                            </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-down-up"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                                        <?= number_format($hasil_anggaranBulanan,0,"." , ".") ?></h6>
                                    <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Terpakai">Rp.
                                        <?= number_format($hasil_terpakaiBulanan,0,"." , ".") ?> - </h6>
                                    <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Cashback">Rp.
                                        <?= number_format($cashbackBulanan,0,"." , ".") ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- PaudQU -->
                <li class="splide__slide">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">PaudQu <span>| Bulan Ini</span>
                                <a
                                    href="<?= $_SESSION["username"] ?>.php?id_database=database_paudqu&id_periode=<?= $bln; ?>">
                                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="right" title="Lihat detail laporan">
                                        <i class="text-danger">New !</i>
                                    </i>
                                </a>
                            </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-down-up"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                                        <?= number_format($hasil_anggaranBulanan9,0,"." , ".") ?></h6>
                                    <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Terpakai">Rp.
                                        <?= number_format($hasil_terpakaiBulanan9,0,"." , ".") ?> - </h6>
                                    <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Cashback">Rp.
                                        <?= number_format($cashbackBulanan9,0,"." , ".") ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Logistik -->
                <li class="splide__slide">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Logistik <span>| Bulan Ini</span>
                                <a
                                    href="<?= $_SESSION["username"] ?>.php?id_database=database_logistik&id_periode=<?= $bln; ?>">
                                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="right" title="Lihat detail laporan">
                                        <i class="text-danger">New !</i>
                                    </i>
                                </a>
                            </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-down-up"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                                        <?= number_format($hasil_anggaranBulanan2,0,"." , ".") ?></h6>
                                    <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Terpakai">Rp.
                                        <?= number_format($hasil_terpakaiBulanan2,0,"." , ".") ?> - </h6>
                                    <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Cashback">Rp.
                                        <?= number_format($cashbackBulanan2,0,"." , ".") ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Aset Yayasan -->
                <li class="splide__slide">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Aset <span>| Bulan Ini</span>
                                <a
                                    href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_database=database_aset_yayasan&id_periode=<?= $bln; ?>">
                                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="right" title="Lihat detail laporan">
                                        <i class="text-danger">New !</i>
                                    </i>
                                </a>
                            </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-down-up"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                                        <?= number_format($hasil_anggaranBulanan3,0,"." , ".") ?></h6>
                                    <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Terpakai">Rp.
                                        <?= number_format($hasil_terpakaiBulanan3,0,"." , ".") ?> - </h6>
                                    <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Cashback">Rp.
                                        <?= number_format($cashbackBulanan3,0,"." , ".") ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Uang Makan -->
                <li class="splide__slide">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Uang Makan <span>| Bulan Ini</span>
                                <a
                                    href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_database=database_uang_makan&id_periode=<?= $bln; ?>">
                                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="right" title="Lihat detail laporan">
                                        <i class="text-danger">New !</i>
                                    </i>
                                </a>
                            </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-down-up"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                                        <?= number_format($hasil_anggaranBulanan4,0,"." , ".") ?></h6>
                                    <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Terpakai">Rp.
                                        <?= number_format($hasil_terpakaiBulanan4,0,"." , ".") ?> - </h6>
                                    <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Cashback">Rp.
                                        <?= number_format($cashbackBulanan4,0,"." , ".") ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Gajj Karyawan -->
                <li class="splide__slide">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Gaji <span>| Bulan Ini</span>
                                <a
                                    href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_database=database_gaji_karyawan&id_periode=<?= $bln; ?>">
                                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="right" title="Lihat detail laporan">
                                        <i class="text-danger">New !</i>
                                    </i>
                                </a>
                            </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-down-up"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                                        <?= number_format($hasil_anggaranBulanan5,0,"." , ".") ?></h6>
                                    <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Terpakai">Rp.
                                        <?= number_format($hasil_terpakaiBulanan5,0,"." , ".") ?> - </h6>
                                    <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Cashback">Rp.
                                        <?= number_format($cashbackBulanan5,0,"." , ".") ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Biaya Lainnya -->
                <li class="splide__slide">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Biaya Lainnya <span>| Bulan Ini</span>
                                <a
                                    href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_database=database_anggaran_lain&id_periode=<?= $bln; ?>">
                                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="right" title="Lihat detail laporan">
                                        <i class="text-danger">New !</i>
                                    </i>
                                </a>
                            </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-down-up"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                                        <?= number_format($hasil_anggaranBulanan6,0,"." , ".") ?></h6>
                                    <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Terpakai">Rp.
                                        <?= number_format($hasil_terpakaiBulanan6,0,"." , ".") ?> - </h6>
                                    <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Cashback">Rp.
                                        <?= number_format($cashbackBulanan6,0,"." , ".") ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Maintenance -->
                <li class="splide__slide">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Maintenance <span>| Bulan Ini</span>
                                <a
                                    href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_database=database_maintenance&id_periode=<?= $bln; ?>">
                                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="right" title="Lihat detail laporan">
                                        <i class="text-danger">New !</i>
                                    </i>
                                </a>
                            </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-down-up"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                                        <?= number_format($hasil_anggaranBulanan7,0,"." , ".") ?></h6>
                                    <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Terpakai">Rp.
                                        <?= number_format($hasil_terpakaiBulanan7,0,"." , ".") ?> - </h6>
                                    <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Cashback">Rp.
                                        <?= number_format($cashbackBulanan7,0,"." , ".") ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Operasional -->
                <li class="splide__slide">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Operasional <span>| Bulan Ini</span>
                                <a
                                    href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_database=database_operasional_yayasan&id_periode=<?= $bln; ?>">
                                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="right" title="Lihat detail laporan">
                                        <i class="text-danger">New !</i>
                                    </i>
                                </a>
                            </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-down-up"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                                        <?= number_format($hasil_anggaranBulanan8,0,"." , ".") ?></h6>
                                    <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Terpakai">Rp.
                                        <?= number_format($hasil_terpakaiBulanan8,0,"." , ".") ?> - </h6>
                                    <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Cashback">Rp.
                                        <?= number_format($cashbackBulanan8,0,"." , ".") ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>

<div class="col-xxl-4 col-md-4">
    <div class="card info-card sales-card">
        <div class="card-body">
            <h5 class="card-title">Anggaran <span>| Bulan Ini</span>
            </h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-graph-up"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($anggaran_globalBulanan,0,"." , ".") ?></h6>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=<?= $bln; ?>"><span
                            class="detail-bulanan">Lihat bulanan →</span></a>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<!-- Card -->
<div class="col-xxl-4 col-md-4">
    <div class="card info-card revenue-card">
        <div class="card-body">
            <h5 class="card-title">Terpakai <span>| Bulan Ini</span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-graph-down"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($terpakai_globalBulanan,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<!-- Card -->
<div class="col-xxl-4 col-md-4">
    <div class="card info-card customers-card">
        <div class="card-body">
            <h5 class="card-title">Cashback <span>| Bulan Ini</span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cash-coin"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($cashback_globalBulananan,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<!-- Card -->
<div class="col-xxl-4 col-md-4">
    <div class="card info-card sales-card">
        <div class="card-body">
            <h5 class="card-title">Anggaran <span>| Global</span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-graph-up"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($anggaran_global,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<!-- Card -->
<div class="col-xxl-4 col-md-4">
    <div class="card info-card revenue-card">
        <div class="card-body">
            <h5 class="card-title">Terpakai <span>| Global</span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-graph-down"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($terpakai_global,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<!-- Card -->
<div class="col-xxl-4 col-md-4">
    <div class="card info-card customers-card">
        <div class="card-body">
            <h5 class="card-title">Cashback <span>| Global</span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cash-coin"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($cashback_global,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<?php } elseif ($_SESSION["id_pengurus"] == "kepala_pengajuan") { ?>
<!-- Card -->
<div class="col-xxl-12">
    <div class="splide" id="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <!-- Program -->
                <li class="splide__slide">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Program <span>| Bulan Ini</span>
                                <a
                                    href="<?= $_SESSION["username"] ?>.php?id_database=database_program&id_periode=<?= $bln; ?>">
                                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="right" title="Lihat detail laporan">
                                        <i class="text-danger">New !</i>
                                    </i>
                                </a>
                            </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-down-up"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                                        <?= number_format($hasil_anggaranBulanan,0,"." , ".") ?></h6>
                                    <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Terpakai">Rp.
                                        <?= number_format($hasil_terpakaiBulanan,0,"." , ".") ?> - </h6>
                                    <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Cashback">Rp.
                                        <?= number_format($cashbackBulanan,0,"." , ".") ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- PaudQU -->
                <li class="splide__slide">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">PaudQu <span>| Bulan Ini</span>
                                <a
                                    href="<?= $_SESSION["username"] ?>.php?id_database=database_paudqu&id_periode=<?= $bln; ?>">
                                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="right" title="Lihat detail laporan">
                                        <i class="text-danger">New !</i>
                                    </i>
                                </a>
                            </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-down-up"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                                        <?= number_format($hasil_anggaranBulanan9,0,"." , ".") ?></h6>
                                    <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Terpakai">Rp.
                                        <?= number_format($hasil_terpakaiBulanan9,0,"." , ".") ?> - </h6>
                                    <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Cashback">Rp.
                                        <?= number_format($cashbackBulanan9,0,"." , ".") ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Logistik -->
                <li class="splide__slide">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Logistik <span>| Bulan Ini</span>
                                <a
                                    href="<?= $_SESSION["username"] ?>.php?id_database=database_logistik&id_periode=<?= $bln; ?>">
                                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="right" title="Lihat detail laporan">
                                        <i class="text-danger">New !</i>
                                    </i>
                                </a>
                            </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-down-up"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                                        <?= number_format($hasil_anggaranBulanan2,0,"." , ".") ?></h6>
                                    <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Terpakai">Rp.
                                        <?= number_format($hasil_terpakaiBulanan2,0,"." , ".") ?> - </h6>
                                    <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Cashback">Rp.
                                        <?= number_format($cashbackBulanan2,0,"." , ".") ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Aset Yayasan -->
                <li class="splide__slide">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Aset <span>| Bulan Ini</span>
                                <a
                                    href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_database=database_aset_yayasan&id_periode=<?= $bln; ?>">
                                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="right" title="Lihat detail laporan">
                                        <i class="text-danger">New !</i>
                                    </i>
                                </a>
                            </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-down-up"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                                        <?= number_format($hasil_anggaranBulanan3,0,"." , ".") ?></h6>
                                    <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Terpakai">Rp.
                                        <?= number_format($hasil_terpakaiBulanan3,0,"." , ".") ?> - </h6>
                                    <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Cashback">Rp.
                                        <?= number_format($cashbackBulanan3,0,"." , ".") ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Uang Makan -->
                <li class="splide__slide">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Uang Makan <span>| Bulan Ini</span>
                                <a
                                    href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_database=database_uang_makan&id_periode=<?= $bln; ?>">
                                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="right" title="Lihat detail laporan">
                                        <i class="text-danger">New !</i>
                                    </i>
                                </a>
                            </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-down-up"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                                        <?= number_format($hasil_anggaranBulanan4,0,"." , ".") ?></h6>
                                    <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Terpakai">Rp.
                                        <?= number_format($hasil_terpakaiBulanan4,0,"." , ".") ?> - </h6>
                                    <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Cashback">Rp.
                                        <?= number_format($cashbackBulanan4,0,"." , ".") ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Gajj Karyawan -->
                <li class="splide__slide">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Gaji <span>| Bulan Ini</span>
                                <a
                                    href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_database=database_gaji_karyawan&id_periode=<?= $bln; ?>">
                                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="right" title="Lihat detail laporan">
                                        <i class="text-danger">New !</i>
                                    </i>
                                </a>
                            </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-down-up"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                                        <?= number_format($hasil_anggaranBulanan5,0,"." , ".") ?></h6>
                                    <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Terpakai">Rp.
                                        <?= number_format($hasil_terpakaiBulanan5,0,"." , ".") ?> - </h6>
                                    <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Cashback">Rp.
                                        <?= number_format($cashbackBulanan5,0,"." , ".") ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Biaya Lainnya -->
                <li class="splide__slide">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Biaya Lainnya <span>| Bulan Ini</span>
                                <a
                                    href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_database=database_anggaran_lain&id_periode=<?= $bln; ?>">
                                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="right" title="Lihat detail laporan">
                                        <i class="text-danger">New !</i>
                                    </i>
                                </a>
                            </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-down-up"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                                        <?= number_format($hasil_anggaranBulanan6,0,"." , ".") ?></h6>
                                    <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Terpakai">Rp.
                                        <?= number_format($hasil_terpakaiBulanan6,0,"." , ".") ?> - </h6>
                                    <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Cashback">Rp.
                                        <?= number_format($cashbackBulanan6,0,"." , ".") ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Maintenance -->
                <li class="splide__slide">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Maintenance <span>| Bulan Ini</span>
                                <a
                                    href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_database=database_maintenance&id_periode=<?= $bln; ?>">
                                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="right" title="Lihat detail laporan">
                                        <i class="text-danger">New !</i>
                                    </i>
                                </a>
                            </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-down-up"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                                        <?= number_format($hasil_anggaranBulanan7,0,"." , ".") ?></h6>
                                    <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Terpakai">Rp.
                                        <?= number_format($hasil_terpakaiBulanan7,0,"." , ".") ?> - </h6>
                                    <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Cashback">Rp.
                                        <?= number_format($cashbackBulanan7,0,"." , ".") ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Operasional -->
                <li class="splide__slide">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Operasional <span>| Bulan Ini</span>
                                <a
                                    href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_database=database_operasional_yayasan&id_periode=<?= $bln; ?>">
                                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="right" title="Lihat detail laporan">
                                        <i class="text-danger">New !</i>
                                    </i>
                                </a>
                            </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-down-up"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                                        <?= number_format($hasil_anggaranBulanan8,0,"." , ".") ?></h6>
                                    <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Terpakai">Rp.
                                        <?= number_format($hasil_terpakaiBulanan8,0,"." , ".") ?> - </h6>
                                    <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right"
                                        title="Cashback">Rp.
                                        <?= number_format($cashbackBulanan8,0,"." , ".") ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>

<div class="col-xxl-4 col-md-4">
    <div class="card info-card sales-card">
        <div class="card-body">
            <h5 class="card-title">Anggaran <span>| Bulan Ini</span>
            </h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-graph-up"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($anggaran_globalBulanan,0,"." , ".") ?></h6>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_ebudget=globalData&id_periode=<?= $bln; ?>"><span
                            class="detail-bulanan">Lihat bulanan →</span></a>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<!-- Card -->
<div class="col-xxl-4 col-md-4">
    <div class="card info-card revenue-card">
        <div class="card-body">
            <h5 class="card-title">Terpakai <span>| Bulan Ini</span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-graph-down"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($terpakai_globalBulanan,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<!-- Card -->
<div class="col-xxl-4 col-md-4">
    <div class="card info-card customers-card">
        <div class="card-body">
            <h5 class="card-title">Cashback <span>| Bulan Ini</span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cash-coin"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($cashback_globalBulananan,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<!-- Card -->
<div class="col-xxl-4 col-md-4">
    <div class="card info-card sales-card">
        <div class="card-body">
            <h5 class="card-title">Anggaran <span>| Global</span></h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-graph-up"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($anggaran_global,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<!-- Card -->
<div class="col-xxl-4 col-md-4">
    <div class="card info-card revenue-card">
        <div class="card-body">
            <h5 class="card-title">Terpakai <span>| Global</span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-graph-down"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($terpakai_global,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<!-- Card -->
<div class="col-xxl-4 col-md-4">
    <div class="card info-card customers-card">
        <div class="card-body">
            <h5 class="card-title">Cashback <span>| Global</span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cash-coin"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($cashback_global,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->


<?php } elseif ($_SESSION["id_pengurus"] == "kepala_cabang") { ?>
<!-- Card -->
<div class="col-xxl-4 col-md-4">
    <div class="card info-card sales-card">
        <div class="card-body">
            <h5 class="card-title">Anggaran <span>| Program</span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-graph-up"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($hasil_anggaran,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<!-- Card -->
<div class="col-xxl-4 col-md-4">
    <div class="card info-card revenue-card">
        <div class="card-body">
            <h5 class="card-title">Terpakai <span>| Program</span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-graph-down"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($hasil_terpakai,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<!-- Card -->
<div class="col-xxl-4 col-xl-4">
    <div class="card info-card customers-card">
        <div class="card-body">
            <h5 class="card-title">Cashback <span>| Program</span></h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($cashback,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Card -->

<!-- Card -->
<div class="col-xxl-4 col-md-64">
    <div class="card info-card sales-card">
        <div class="card-body">
            <h5 class="card-title">Anggaran <span>| Logistik</span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-graph-up"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($hasil_anggaran2,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<!-- Card -->
<div class="col-xxl-4 col-md-64">
    <div class="card info-card revenue-card">
        <div class="card-body">
            <h5 class="card-title">Terpakai <span>| Logistik</span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-graph-down"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($hasil_terpakai2,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<!-- Card -->
<div class="col-xxl-4 col-xl-4">
    <div class="card info-card customers-card">
        <div class="card-body">
            <h5 class="card-title">Cashback <span>| Logistik</span></h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($cashback2,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Card -->

<!-- Card -->
<div class="col-xxl-6 col-md-6">
    <div class="card info-card customers-card">
        <div class="card-body">
            <h5 class="card-title">Pemasukan Media <span>| Bulan Ini</span></h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($hasil_incomeBulanan,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<!-- Card -->
<div class="col-xxl-6 col-md-6">
    <div class="card info-card customers-card">
        <div class="card-body">
            <h5 class="card-title">Pemasukan Media <span>| Per Tahum</span></h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($hasil_income1,0,"." , ".") ?></h6>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia&idMedia=fbBogor&id_periode=<?= $bln; ?>"><span
                            class="detail-bulanan">Lihat bulanan →</span></a>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<?php } elseif ($_SESSION["id_pengurus"] == "kepala_income") { ?>
<!-- Card -->
<div class="col-xxl-4 col-md-4">
    <div class="card info-card revenue-card">
        <div class="card-body">
            <h5 class="card-title">Facebook Depok <span>| Bulan Ini</h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($hasil_incomeBulananFB,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Card -->
<div class="col-xxl-4 col-md-4">
    <div class="card info-card revenue-card">
        <div class="card-body">
            <h5 class="card-title">Facebook Bogor <span>| Bulan Ini</span></h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($hasil_incomeBulananFB_b,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Card -->
<div class="col-xxl-4 col-md-4">
    <div class="card info-card revenue-card">
        <div class="card-body">
            <h5 class="card-title">Instagram <span>| Bulan Ini</h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($hasil_incomeBulananIns,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xxl-6 col-md-6">
    <div class="card info-card revenue-card">
        <div class="card-body">
            <h5 class="card-title">Income Media <span>| Bulan Ini</span></h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($hasil_incomeBulananGlobal,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Card -->
<div class="col-xxl-6 col-md-6">
    <div class="card info-card revenue-card">
        <div class="card-body">
            <h5 class="card-title">Income Non Resi <span>| Bulan Ini</span></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($hasil_income,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xxl-6 col-md-6">
    <div class="card info-card customers-card">
        <div class="card-body">
            <h5 class="card-title">Income Verif Keuangan <span>| Bulan Ini</span></h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($hasil_incomeGlobal,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xxl-6 col-md-6">
    <div class="card info-card customers-card">
        <div class="card-body">
            <h5 class="card-title">Income Verif Keuangan <span>| Tahun Ini</span></h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($hasil_incomeGlobalTahun,0,"." , ".") ?></h6>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia&idMedia=mediaGlobal&id_periode=<?= $bln; ?>"><span
                            class="detail-bulanan">Lihat bulanan →</span></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Card -->
<?php } elseif ($_SESSION["id_pengurus"] == "manager_facebook") { ?>
<!-- Card -->
<div class="col-xxl-6 col-md-6">
    <div class="card info-card revenue-card">
        <div class="card-body">
            <h5 class="card-title">Total Income Bulan Ini <span>| <?= $_SESSION["cabang"] ?></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($hasil_incomeBulanan,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xxl-6 col-md-6">
    <div class="card info-card revenue-card">
        <div class="card-body">
            <h5 class="card-title">Total Income Per Tahun <span>| <?= $_SESSION["cabang"] ?></h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($hasil_income,0,"." , ".") ?></h6>
                    <?php if ($_SESSION["cabang"] == "Depok") { ?>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia&idMedia=fbDepok&id_periode=<?= $bln; ?>"><span
                            class="detail-bulanan">Lihat bulanan →</span></a>

                    <?php } else { ?>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia&idMedia=fbBogor&id_periode=<?= $bln; ?>"><span
                            class="detail-bulanan">Lihat bulanan →</span></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } elseif ($_SESSION["id_pengurus"] == "manager_instagram") { ?>
<!-- Card -->
<div class="col-xxl-6 col-md-6">
    <div class="card info-card revenue-card">
        <div class="card-body">
            <h5 class="card-title">Total Income Bulan Ini <span>| Instagram</h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($hasil_incomeBulanan,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xxl-6 col-md-6">
    <div class="card info-card revenue-card">
        <div class="card-body">
            <h5 class="card-title">Total Income Keseluruhan <span>| Instagram</h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($hasil_income,0,"." , ".") ?></h6>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia&idMedia=instagram&id_periode=<?= $bln; ?>"><span
                            class="detail-bulanan">Lihat bulanan →</span></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } else { ?>
<!-- Card -->
<div class="col-xxl-6 col-md-6">
    <div class="card info-card revenue-card">
        <div class="card-body">
            <h5 class="card-title">Total Income Bulan Ini</h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($hasil_incomeBulanan,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xxl-6 col-md-6">
    <div class="card info-card revenue-card">
        <div class="card-body">
            <h5 class="card-title">Total Income Keseluruhan</h5>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($hasil_income,0,"." , ".") ?></h6>
                    <a id="detail-bulanan"><span class="detail-bulanan maintenance">Lihat bulanan →</span></a>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card -->

<?php } ?>