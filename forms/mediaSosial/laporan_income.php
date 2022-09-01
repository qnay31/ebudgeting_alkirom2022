<?php
$bulan      = date("Y-m-d");
$bln        = substr($bulan, 5,-3);
$query   = mysqli_query($conn, "SELECT * FROM data_akun WHERE nomor_id = '$_SESSION[id]' ORDER BY `nama_akun` ASC ");

$query2   = mysqli_query($conn, "SELECT * FROM data_akun WHERE nomor_id = '$_SESSION[id]' ORDER BY `nama_akun` ASC ");
$data2 = mysqli_fetch_assoc($query2);
$team = $data2['team'];

if (isset($_POST["laporan"]) ) {
    $link = $_SESSION["username"];
        if(laporan_akun($_POST) > 0 ) {
            echo "<script>
                    alert('Laporan Harian Berhasil dikirim');
                    document.location.href = '$link.php?id_forms=forms_laporanIncome';
                </script>";    
        } 
            else {
            echo mysqli_error($conn);
        }
    }

    $q  = mysqli_query($conn, "SELECT * FROM laporan_media WHERE id_pengurus = '$_SESSION[id_pengurus]' AND nomor_id = '$_SESSION[id]' ORDER BY `tgl_laporan` DESC");

    $q2  = mysqli_query($conn, "SELECT * FROM income_media WHERE id_pengurus = '$_SESSION[id_pengurus]' AND nomor_id = '$_SESSION[id]' AND status = 'Menunggu Verifikasi' ORDER BY `tanggal_tf` DESC");
    $s = $q2->num_rows;

?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Form Input Income</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <li class="breadcrumb-item">Form</li>
                <li class="breadcrumb-item active">Input Income</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns pengajuan-->
            <div class="col-lg-12" id="form-pengajuan">
                <div class="row">
                    <?php include '../models/mediaSosial/mediaSosial_models/laporan-nav.php'; ?>
                </div>

                <!-- Laporan  -->
                <div class="col-12">
                    <div class="card">
                        <?php include '../models/mediaSosial/laporan_income.php'; ?>
                    </div>
                </div><!-- End Laporan  -->
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->