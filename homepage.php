<?php
error_reporting(0);
session_start();

if (!isset($_SESSION["halaman_utama"])) {
    header("Location: ../index.php?pesan=gagal");
    exit;
}

require 'function.php';

$home_query = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE username = '$_SESSION[username]' ");
$home_data  = mysqli_fetch_assoc($home_query);
$nama       = strtolower($home_data['nama']);
$profil     = $home_data['profil'];

if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "kepala_pengajuan" || $_SESSION["id_pengurus"] == "management_keuangan") {
    $id_global  = $_GET["id_global"];
    $id_management  = $_GET["id_dataManagement"];
    if ($id_management == "aset_yayasan") {
        $judul = "Aset Yayasan";
        
    } elseif ($id_management == "uang_makan") {
        $judul = "Uang Makan";

    } elseif ($id_management == "gaji_karyawan") {
        $judul = "Gaji Karyawan";

    } elseif ($id_management == "maintenance") {
        $judul = "Maintenance";

    } elseif ($id_management == "operasional_yayasan") {
        $judul = "Operasional Yayasan";
        
    } elseif ($id_management == "paudqu") {
        $judul = "PaudQu El-ZamZam";

    } elseif ($id_management == "jasa") {
        $judul = "Pembayaran Jasa";

    } else {
        $judul = "Biaya Lainnya";
    }
}

if ($_SESSION["id_pengurus"] == "facebook_depok" || $_SESSION["id_pengurus"] == "facebook_bogor" || $_SESSION["id_pengurus"] == "instagram") {
    $_GET["id_database"] == "database_akunMedia";
    $_SESSION["media"] = $_GET["id_database"];
}


?>
<!DOCTYPE html>
<html lang="en">

<?php
include 'base/header.php'
?>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="<?= $_SESSION["username"] ?>.php" class="logo d-flex align-items-center">
                <img src="../assets/img/icons/logo_favicon.png" alt="">
                <span class="d-none d-lg-block">Ebudgeting</span>
            </a>

            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <?php
            include 'base/icon-navigation.php';
        ?>
    </header><!-- End Header -->

    <?php 
        include 'base/sidebar.php';
    ?>

    <!-- database program -->
    <?php if ($_GET["id_database"] == "database_program" || $_GET["id_database"] == "database_paudqu") { ?>
    <?php
        include 'database/program.php';
    ?>

    <!-- team media -->
    <?php } elseif ($_GET["idTeam"] == "teamMedia" || $_GET["idTeam"] == "changeMedia" || $_GET["idTeam"] == "listMedia") { ?>
    <?php
        include 'teaming/team_media.php';
    ?>

    <!-- database global -->
    <?php } elseif ($_GET["id_database"] == "database_global") { ?>
    <?php
        include 'database/global.php';
    ?>

    <!-- database logistik -->
    <?php } elseif ($_GET["id_database"] == "database_logistik") { ?>
    <?php
        include 'database/logistik.php';
    ?>

    <!-- database management -->
    <?php } elseif ($_GET["id_database"] == "database_$id_management") { ?>
    <?php
        include 'database/management.php';
    ?>

    <!-- database laporan akun -->
    <?php } elseif ($_GET["id_database"] == "database_akunMedia") { ?>
    <?php
        include 'database/lapAkun.php';
    ?>

    <!-- database pemasukan media sosial -->
    <?php } elseif ($_GET["id_database"] == "database_pemasukanMedia") { ?>
    <?php
        include 'database/pemasukan.php';
    ?>

    <!-- database pemasukan media sosial harian-->
    <?php } elseif ($_GET["id_database"] == "database_harianMedia") { ?>
    <?php
        include 'database/harianPemasukan.php';
    ?>

    <!-- database crosscheck pemasukan media sosial harian-->
    <?php } elseif ($_GET["id_database"] == "database_crossCheck") { ?>
    <?php
        include 'database/crossCheck.php';
    ?>

    <!-- database income tim media sosial harian-->
    <?php } elseif ($_GET["id_database"] == "database_incomeTim") { ?>
    <?php
        include 'database/incomeTeam.php';
    ?>

    <!-- database edit income media sosial -->
    <?php } elseif ($_GET["id_adminKey"] == "edit_income") { ?>
    <?php
        include '../forms/pemasukan/editIncome.php';
    ?>

    <!-- form pengajuan -->
    <?php } elseif ($_GET["id_forms"] == "daftar_pengajuan") { ?>
    <?php
        include 'forms/daftar_pengajuan.php';
    ?>

    <!-- form pengajuan -->
    <?php } elseif ($_GET["id_forms"] == "forms_pengajuan") { ?>
    <?php
        include 'forms/pengajuan.php';
    ?>

    <!-- form income -->
    <?php } elseif ($_GET["id_forms"] == "input_income") { ?>
    <?php
        include 'forms/mediaSosial/input_income.php';
    ?>

    <!-- form check income -->
    <?php } elseif ($_GET["id_forms"] == "forms_check") { ?>
    <?php
        include 'forms/pemasukan/check_income.php';
    ?>

    <!-- form pemasukan -->
    <?php } elseif ($_GET["id_forms"] == "forms_pemasukan") { ?>
    <?php
        include 'forms/pemasukan/input.php';
    ?>

    <!-- verifikasi pengajuan -->
    <?php } elseif ($_GET["id_forms"] == "forms_verifikasi") { ?>
    <?php
        include 'forms/verifikasi.php';
    ?>

    <!-- verifikasi pengajuan -->
    <?php } elseif ($_GET["id_forms"] == "forms_verifIncome") { ?>
    <?php
        include 'forms/mediaSosial/verifikasi_income.php';
    ?>

    <!-- Verifikasi Pemasukan -->
    <?php } elseif ($_GET["id_forms"] == "forms_verifPemasukan") { ?>
    <?php
        include 'forms/pemasukan/verifPemasukan.php';
    ?>

    <!-- edit pengajuan -->
    <?php } elseif ($_GET["id_forms"] == "edit_pengajuan") { ?>
    <?php
        include 'forms/edit.php';
    ?>

    <!-- edit income media sosial -->
    <?php } elseif ($_GET["id_forms"] == "edit_incomeMedia") { ?>
    <?php
        include 'forms/mediaSosial/editIncome.php';
    ?>

    <!-- edit pemasukan -->
    <?php } elseif ($_GET["id_forms"] == "edit_pemasukan") { ?>
    <?php
        include 'forms/pemasukan/editPemasukan.php';
    ?>

    <!-- form laporan -->
    <?php } elseif ($_GET["id_forms"] == "forms_laporan") { ?>
    <?php
        include 'forms/laporan.php';
    ?>

    <!-- form laporan media -->
    <?php } elseif ($_GET["id_forms"] == "forms_laporanIncome") { ?>
    <?php
        include 'forms/mediaSosial/laporan_income.php';
    ?>

    <!-- form edit laporan -->
    <?php } elseif ($_GET["id_forms"] == "edit_laporan") { ?>
    <?php
        include 'forms/edit_laporan.php';
    ?>

    <!-- form edit laporan media -->
    <?php } elseif ($_GET["id_forms"] == "edit_laporanMedia") { ?>
    <?php
        include 'forms/mediaSosial/edit_laporan.php';
    ?>

    <!-- checklist pengajuan -->
    <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuan") { ?>
    <?php
        include 'checklist/check_pengajuan.php';
    ?>

    <!-- checklist pengajuan Paudqu-->
    <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanPaudqu") { ?>
    <?php
        include 'checklist/check_pengajuan.php';
    ?>

    <!-- checklist pengajuan Logistik-->
    <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanLogistik") { ?>
    <?php
        include 'checklist/check_pengajuan.php';
    ?>

    <!-- checklist pengajuan Aset Yayasan-->
    <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanAset") { ?>
    <?php
        include 'checklist/check_pengajuan.php';
    ?>

    <!-- checklist pengajuan Uang Makan -->
    <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanUangmakan") { ?>
    <?php
        include 'checklist/check_pengajuan.php';
    ?>

    <!-- checklist pengajuan Gaji Karyawan-->
    <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanGajikaryawan") { ?>
    <?php
        include 'checklist/check_pengajuan.php';
    ?>

    <!-- checklist pengajuan Biaya Lainnya -->
    <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanAnggaranlain") { ?>
    <?php
        include 'checklist/check_pengajuan.php';
    ?>

    <!-- checklist pengajuan Maintenance -->
    <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanMaintenance") { ?>
    <?php
        include 'checklist/check_pengajuan.php';
    ?>

    <!-- checklist pengajuan Operasional -->
    <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanOperasional") { ?>
    <?php
        include 'checklist/check_pengajuan.php';
    ?>

    <!-- checklist pengajuan Jasa -->
    <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanJasa") { ?>
    <?php
        include 'checklist/check_pengajuan.php';
    ?>

    <!-- checklist pemasukan Media -->
    <?php } elseif ($_GET["id_checklist"] == "checklist_pemasukanMedia") { ?>
    <?php
        include 'checklist/check_pengajuan.php';
    ?>

    <!-- checklist verifikasi -->
    <?php } elseif ($_GET["id_checklist"] == "checklist_verifikasi") { ?>
    <?php
        include 'checklist/check_verifikasi.php';
    ?>

    <!-- checklist verifikasi paudqu -->
    <?php } elseif ($_GET["id_checklist"] == "checklist_verifikasiPaudqu") { ?>
    <?php
        include 'checklist/check_verifikasi.php';
    ?>

    <!-- checklist verifikasi Logistik -->
    <?php } elseif ($_GET["id_checklist"] == "checklist_verifikasiLogistik") { ?>
    <?php
        include 'checklist/check_verifikasi.php';
    ?>

    <!-- checklist verifikasi Aset Yayasan-->
    <?php } elseif ($_GET["id_checklist"] == "checklist_verifikasiAset") { ?>
    <?php
        include 'checklist/check_verifikasi.php';
    ?>

    <!-- checklist verifikasi Uang Makan -->
    <?php } elseif ($_GET["id_checklist"] == "checklist_verifikasiUangmakan") { ?>
    <?php
        include 'checklist/check_verifikasi.php';
    ?>

    <!-- checklist verifikasi Gaji Karyawan-->
    <?php } elseif ($_GET["id_checklist"] == "checklist_verifikasiGajikaryawan") { ?>
    <?php
        include 'checklist/check_verifikasi.php';
    ?>

    <!-- checklist verifikasi Biaya Lainnya -->
    <?php } elseif ($_GET["id_checklist"] == "checklist_verifikasiAnggaranlain") { ?>
    <?php
        include 'checklist/check_verifikasi.php';
    ?>

    <!-- checklist verifikasi Maintenance -->
    <?php } elseif ($_GET["id_checklist"] == "checklist_verifikasiMaintenance") { ?>
    <?php
        include 'checklist/check_verifikasi.php';
    ?>

    <!-- checklist verifikasi Operasional -->
    <?php } elseif ($_GET["id_checklist"] == "checklist_verifikasiOperasional") { ?>
    <?php
        include 'checklist/check_verifikasi.php';
    ?>

    <!-- checklist verifikasi Jasa -->
    <?php } elseif ($_GET["id_checklist"] == "checklist_verifikasiJasa") { ?>
    <?php
        include 'checklist/check_verifikasi.php';
    ?>

    <!-- checklist laporan -->
    <?php } elseif ($_GET["id_checklist"] == "checklist_laporan" || $_GET["id_checklist"] == "checklist_laporanPaudqu") { ?>
    <?php
        include 'checklist/check_laporan.php';
    ?>

    <!-- checklist laporan Logistik -->
    <?php } elseif ($_GET["id_checklist"] == "checklist_laporanLogistik") { ?>
    <?php
        include 'checklist/check_laporan.php';
    ?>

    <!-- checklist verifikasi Aset Yayasan-->
    <?php } elseif ($_GET["id_checklist"] == "checklist_laporanAset") { ?>
    <?php
        include 'checklist/check_laporan.php';
    ?>

    <!-- checklist verifikasi Uang Makan -->
    <?php } elseif ($_GET["id_checklist"] == "checklist_laporanUangmakan") { ?>
    <?php
        include 'checklist/check_laporan.php';
    ?>

    <!-- checklist verifikasi Gaji Karyawan-->
    <?php } elseif ($_GET["id_checklist"] == "checklist_laporanGajikaryawan") { ?>
    <?php
        include 'checklist/check_laporan.php';
    ?>

    <!-- checklist verifikasi Biaya Lainnya -->
    <?php } elseif ($_GET["id_checklist"] == "checklist_laporanAnggaranlain") { ?>
    <?php
        include 'checklist/check_laporan.php';
    ?>

    <!-- checklist verifikasi Maintenance -->
    <?php } elseif ($_GET["id_checklist"] == "checklist_laporanMaintenance") { ?>
    <?php
        include 'checklist/check_laporan.php';
    ?>

    <!-- checklist verifikasi Operasional -->
    <?php } elseif ($_GET["id_checklist"] == "checklist_laporanOperasional") { ?>
    <?php
        include 'checklist/check_laporan.php';
    ?>

    <!-- checklist verifikasi Jasa -->
    <?php } elseif ($_GET["id_checklist"] == "checklist_laporanJasa") { ?>
    <?php
        include 'checklist/check_laporan.php';
    ?>

    <!-- grafik program -->
    <?php } elseif ($_GET["id_grafik"] == "grafik_program") { ?>
    <?php
        include 'grafik/program.php';
    ?>

    <!-- grafik paudqu -->
    <?php } elseif ($_GET["id_grafik"] == "grafik_paudqu") { ?>
    <?php
        include 'grafik/paudqu.php';
    ?>

    <!-- grafik logistik -->
    <?php } elseif ($_GET["id_grafik"] == "grafik_logistik") { ?>
    <?php
        include 'grafik/logistik.php';
    ?>

    <!-- grafik management -->
    <?php } elseif ($_GET["id_grafik"] == "grafik_$id_management") { ?>
    <?php
        include 'grafik/management.php';
    ?>

    <!-- grafik pemasukan Media -->
    <?php } elseif ($_GET["id_grafik"] == "grafik_pemasukanMedia") { ?>
    <?php
        include 'grafik/pemasukan.php';
    ?>

    <!-- myProfil -->
    <?php } elseif ($_GET["id_profil"] == "myProfil") { ?>
    <?php
        include 'profil/set_profil.php';
    ?>

    <!-- data Pengurus -->
    <?php } elseif ($_GET["id_profil"] == "dataPengurus") { ?>
    <?php
        include 'profil/dataPengurus.php';
    ?>

    <!-- log aktivitas -->
    <?php } elseif ($_GET["id_profil"] == "logActivity") { ?>
    <?php
        include 'profil/log_aktivitas.php';
    ?>

    <?php } else { ?>
    <?php if ($_GET["id_accountKey"] == "") { ?>
    <?php
        include 'base/main-menu.php';
    ?>

    <?php } else { ?>
    <?php
        include 'base/main-menu_akun.php';
    ?>
    <?php } ?>

    <?php } ?>

    <?php include 'modal/maintenance.php'; ?>
    <?php include 'modal/kritikSaran.php'; ?>

    <?php
        include 'base/footer.php';
    ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <?php
        include 'base/script.php';
    ?>
</body>

</html>