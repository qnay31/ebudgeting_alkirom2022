<?php

$unik     = $_GET["id_unik"];
$periode  = $_GET["id_p"]; 

if ($_SESSION["id_pengurus"] == "facebook") {
    $q  = mysqli_query($conn, "SELECT * FROM income_media WHERE id_pengurus = 'facebook_depok' AND nomor_id = '$_SESSION[id]' ORDER BY `tanggal_tf` DESC");
    $s = $q->num_rows;
    // die(var_dump($s));

    $q3  = mysqli_query($conn, "SELECT * FROM income_media WHERE id_pengurus = 'facebook_depok' AND nomor_id = '$_SESSION[id]' AND status = 'Menunggu Verifikasi' AND id = '$unik' AND MONTH(tanggal_tf) = '$periode' ORDER BY `tanggal_tf` DESC");
    $data   = mysqli_fetch_assoc($q3);

} else {
    $q  = mysqli_query($conn, "SELECT * FROM income_media WHERE id_pengurus = '$_SESSION[id_pengurus]' AND nomor_id = '$_SESSION[id]' ORDER BY `tanggal_tf` DESC");
    $s = $q->num_rows;
    // die(var_dump($s));

    $q3  = mysqli_query($conn, "SELECT * FROM income_media WHERE id_pengurus = '$_SESSION[id_pengurus]' AND nomor_id = '$_SESSION[id]' AND status = 'Menunggu Verifikasi' AND id = '$unik' AND MONTH(tanggal_tf) = '$periode' ORDER BY `tanggal_tf` DESC");
    $data   = mysqli_fetch_assoc($q3);
}

if (isset($_POST["input"]) ) {
    $link = $_SESSION["username"];
    if(edit_incomeMedia($_POST) > 0 ) {
            echo "<script>
                    alert('Data Income Berhasil Diedit');
                    document.location.href = '$link.php?id_forms=forms_verifIncome';
                </script>";
        } 
            else {
            echo mysqli_error($conn);
        }
    }

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
                        <?php include '../models/mediaSosial/edit_income.php'; ?>
                    </div>
                </div><!-- End Laporan  -->
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->