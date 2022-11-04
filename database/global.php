<?php
$qToday  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE MONTH(tgl_pemakaian) = '$_GET[id_periode]'");
$nToday  = $qToday->num_rows;
$dToday  = mysqli_fetch_assoc($qToday);
$cToday  = convertDateDBtoIndo($dToday["tgl_pemakaian"]);
$bToday  = substr($cToday, 3, -5);
// die(var_dump($bToday));

// program
$qProgram   = mysqli_query($conn, "SELECT * FROM 2022_data_program WHERE bulan = '$bToday'");
$bProgram   = mysqli_fetch_assoc($qProgram);
$AngProgB   = $bProgram["anggaran_program_bogor"]; 
$TerProgB   = $bProgram["terpakai_program_bogor"]; 
$CashProgB  = $AngProgB-$TerProgB;
$AngProgD   = $bProgram["anggaran_program_depok"]; 
$TerProgD   = $bProgram["terpakai_program_depok"]; 
$CashProgD  = $AngProgD-$TerProgD;
$AngProg    = $bProgram["anggaran_global"]; 
$TerProg    = $bProgram["terpakai_global"]; 
$CashProg   = $AngProg-$TerProg;

// paudqu
$qPaudqu    = mysqli_query($conn, "SELECT * FROM 2022_data_paudqu WHERE bulan = '$bToday'");
$bPaudqu    = mysqli_fetch_assoc($qPaudqu);
$AngPaud    = $bPaudqu["anggaran_global"]; 
$TerPaud    = $bPaudqu["terpakai_global"]; 
$CashPaud   = $AngPaud-$TerPaud;

// logistik
$qLogistik  = mysqli_query($conn, "SELECT * FROM 2022_data_logistik WHERE bulan = '$bToday'");
$bLogistik  = mysqli_fetch_assoc($qLogistik);
$AngLogB    = $bLogistik["anggaran_logistik_bogor"]; 
$TerLogB    = $bLogistik["terpakai_logistik_bogor"]; 
$CashLogB   = $AngLogB-$TerLogB;
$AngLogD    = $bLogistik["anggaran_logistik_depok"]; 
$TerLogD    = $bLogistik["terpakai_logistik_depok"]; 
$CashLogD   = $AngLogD-$TerLogD;
$AngLog     = $bLogistik["anggaran_global"]; 
$TerLog     = $bLogistik["terpakai_global"]; 
$CashLog    = $AngLog-$TerLog;

// aset yayasan
$qAset      = mysqli_query($conn, "SELECT * FROM 2022_data_aset_yayasan WHERE bulan = '$bToday'");
$bAset      = mysqli_fetch_assoc($qAset);
$AngAsetB   = $bAset["anggaran_pembangunan"]; 
$TerAsetB   = $bAset["terpakai_pembangunan"]; 
$CashAsetB  = $AngAsetB-$TerAsetB;
$AngAsetD   = $bAset["anggaran_pembelian"]; 
$TerAsetD   = $bAset["terpakai_pembelian"]; 
$CashAsetD  = $AngAsetD-$TerAsetD;
$AngAset    = $bAset["anggaran_global"]; 
$TerAset    = $bAset["terpakai_global"]; 
$CashAset   = $AngAset-$TerAset;

// uang makan yayasan
$qUangMakan     = mysqli_query($conn, "SELECT * FROM 2022_data_uang_makan WHERE bulan = '$bToday'");
$bUangMakan     = mysqli_fetch_assoc($qUangMakan);
$AngUmakanB     = $bUangMakan["anggaran_uang_makan_bogor"]; 
$TerUmakanB     = $bUangMakan["terpakai_uang_makan_bogor"]; 
$CashUmakanB    = $AngUmakanB-$TerUmakanB;
$AngUmakanD     = $bUangMakan["anggaran_uang_makan_depok"]; 
$TerUmakanD     = $bUangMakan["terpakai_uang_makan_depok"]; 
$CashUmakanD    = $AngUmakanD-$TerUmakanD;
$AngUmakan      = $bUangMakan["anggaran_global"]; 
$TerUmakan      = $bUangMakan["terpakai_global"]; 
$CashUmakan     = $AngUmakan-$TerUmakan;

// gaji karyawan
$qGajiKaryawan  = mysqli_query($conn, "SELECT * FROM 2022_data_gaji_karyawan WHERE bulan = '$bToday'");
$bGajiKaryawan  = mysqli_fetch_assoc($qGajiKaryawan);
$AngGajiB       = $bGajiKaryawan["anggaran_gaji_karyawan_bogor"]; 
$TerGajiB       = $bGajiKaryawan["terpakai_gaji_karyawan_bogor"]; 
$CashGajiB      = $AngGajiB-$TerGajiB;
$AngGajiD       = $bGajiKaryawan["anggaran_gaji_karyawan_depok"]; 
$TerGajiD       = $bGajiKaryawan["terpakai_gaji_karyawan_depok"]; 
$CashGajiD      = $AngGajiD-$TerGajiD;
$AngGaji        = $bGajiKaryawan["anggaran_global"]; 
$TerGaji        = $bGajiKaryawan["terpakai_global"]; 
$CashGaji       = $AngGaji-$TerGaji;

// anggaran lainnya
$qAngLainnya    = mysqli_query($conn, "SELECT * FROM 2022_data_anggaran_lain WHERE bulan = '$bToday'");
$bAngLainnya    = mysqli_fetch_assoc($qAngLainnya);
$AngLainnyaB    = $bAngLainnya["anggaran_anggaran_lain_bogor"]; 
$TerLainnyaB    = $bAngLainnya["terpakai_anggaran_lain_bogor"]; 
$CashLainnyaB   = $AngLainnyaB-$TerLainnyaB;
$AngLainnyaD    = $bAngLainnya["anggaran_anggaran_lain_depok"]; 
$TerLainnyaD    = $bAngLainnya["terpakai_anggaran_lain_depok"]; 
$CashLainnyaD   = $AngLainnyaD-$TerLainnyaD;
$AngLainnya     = $bAngLainnya["anggaran_global"]; 
$TerLainnya     = $bAngLainnya["terpakai_global"]; 
$CashLainnya    = $AngLainnya-$TerLainnya;

// maintenance
$qMaintenance   = mysqli_query($conn, "SELECT * FROM 2022_data_maintenance WHERE bulan = '$bToday'");
$bMaintenance   = mysqli_fetch_assoc($qMaintenance);
$AngMaintenB    = $bMaintenance["anggaran_maintenance_aset"]; 
$TerMaintenB    = $bMaintenance["terpakai_maintenance_aset"]; 
$CashMaintenB   = $AngMaintenB-$TerMaintenB;
$AngMaintenD    = $bMaintenance["anggaran_maintenance_gedung"]; 
$TerMaintenD    = $bMaintenance["terpakai_maintenance_gedung"]; 
$CashMaintenD   = $AngMaintenD-$TerMaintenD;
$AngMainten     = $bMaintenance["anggaran_global"]; 
$TerMainten     = $bMaintenance["terpakai_global"]; 
$CashMainten    = $AngMainten-$TerMainten;

// operasional
$qOperasional   = mysqli_query($conn, "SELECT * FROM 2022_data_operasional_yayasan WHERE bulan = '$bToday'");
$bOperasional   = mysqli_fetch_assoc($qOperasional);
$AngOpYayasB    = $bOperasional["anggaran_operasional_yayasan_bogor"]; 
$TerOpYayasB    = $bOperasional["terpakai_operasional_yayasan_bogor"]; 
$CashOpYayasB   = $AngOpYayasB-$TerOpYayasB;
$AngOpYayasD    = $bOperasional["anggaran_operasional_yayasan_depok"]; 
$TerOpYayasD    = $bOperasional["terpakai_operasional_yayasan_depok"]; 
$CashOpYayasD   = $AngOpYayasD-$TerOpYayasD;
$AngOpYayas     = $bOperasional["anggaran_global"]; 
$TerOpYayas     = $bOperasional["terpakai_global"]; 
$CashOpYayas    = $AngOpYayas-$TerOpYayas;

// jasa
$qJasa   = mysqli_query($conn, "SELECT * FROM 2022_data_jasa WHERE bulan = '$bToday'");
$bJasa   = mysqli_fetch_assoc($qJasa);
$AngJasa     = $bJasa["anggaran_global"]; 
$TerJasa     = $bJasa["terpakai_global"]; 
$CashJasa    = $AngJasa-$TerJasa;
// die(var_dump($bProgram));
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Database</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <li class="breadcrumb-item">Database</li>
                <li class="breadcrumb-item active">Global</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns pengajuan-->
            <div class="col-lg-12" id="form-pengajuan">


                <!-- Laporan  -->
                <?php if ($_GET["id_ebudget"] == "") { ?>
                <div class="col-12">
                    <?php if ($id_global == "") { ?>
                    <?php if ($_SESSION["id_pengurus"] == "kepala_pengajuan") { ?>
                    <?php } else { ?>
                    <div class="card">
                        <?php include '../models/database/global/pemasukan.php'; ?>
                    </div>
                    <?php } ?>

                    <div class="card">
                        <?php include '../models/database/global/pengeluaran.php'; ?>
                    </div>

                    <?php } else { ?>
                    <div class="card">
                        <?php include '../models/database/global/detail.php'; ?>
                    </div>

                    <?php } ?>

                    <div class="card">
                        <?php include '../models/database/global/data-detail.php'; ?>
                    </div>
                </div><!-- End Laporan  -->

                <?php } else { ?>
                <div class="col-12">
                    <div class="card">
                        <?php include '../models/database/global/periodeGlobal.php'; ?>
                    </div>
                </div>

                <div class="card">
                    <?php include '../models/database/global/all-data.php'; ?>
                </div>
                <?php } ?>
                <!-- End Laporan  -->
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->