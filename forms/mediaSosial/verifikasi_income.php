<?php

if ($_SESSION["username"] == "cadangan") {
    $q  = mysqli_query($conn, "SELECT * FROM income_media WHERE id_pengurus = 'facebook_depok' AND nomor_id = '$_SESSION[id]' ORDER BY `tanggal_tf` DESC, jam_tf DESC");

    $q2  = mysqli_query($conn, "SELECT * FROM income_media WHERE id_pengurus = 'facebook_depok' AND nomor_id = '$_SESSION[id]' AND status = 'Menunggu Verifikasi' ORDER BY `tanggal_tf` DESC, jam_tf DESC");
    $s = $q2->num_rows;

    $q3  = mysqli_query($conn, "SELECT * FROM income_media WHERE id_pengurus = 'facebook_depok' AND nomor_id = '$_SESSION[id]' AND status = 'OK' ORDER BY `tanggal_tf` DESC, jam_tf DESC");

} else {
    $q  = mysqli_query($conn, "SELECT * FROM income_media WHERE id_pengurus = '$_SESSION[id_pengurus]' AND nomor_id = '$_SESSION[id]' ORDER BY `tanggal_tf` DESC, jam_tf DESC");

    $q2  = mysqli_query($conn, "SELECT * FROM income_media WHERE id_pengurus = '$_SESSION[id_pengurus]' AND nomor_id = '$_SESSION[id]' AND status = 'Menunggu Verifikasi' ORDER BY `tanggal_tf` DESC, jam_tf DESC");
    $s = $q2->num_rows;

    $q3  = mysqli_query($conn, "SELECT * FROM income_media WHERE id_pengurus = '$_SESSION[id_pengurus]' AND nomor_id = '$_SESSION[id]' AND status = 'OK' ORDER BY `tanggal_tf` DESC, jam_tf DESC");
}


// die(var_dump($_SESSION['id_pengurus']));
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
                    <?php include '../models/mediaSosial/mediaSosial_models/verifikasi-nav.php'; ?>
                </div>

                <!-- Laporan  -->
                <div class="col-12">
                    <div class="card">
                        <?php include '../models/mediaSosial/verifikasi_income.php'; ?>
                    </div>

                    <div class="card">
                        <?php include '../models/mediaSosial/verifSukses_income.php'; ?>
                    </div>
                </div><!-- End Laporan  -->
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->