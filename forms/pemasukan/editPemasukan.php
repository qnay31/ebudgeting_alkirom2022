<?php

$unik       = $_GET["id_unik"];
$periode    = $_GET["id_p"]; 
$incomeId   = $_GET["incomeId"]; 

if (isset($_POST["input"]) ) {
    $link = $_SESSION["username"];
    if(edit_pemasukan($_POST) > 0 ) {
            echo "<script>
                    alert('Data Pemasukan Berhasil Diedit');
                    document.location.href = '$link.php?id_forms=forms_verifPemasukan';
                </script>";
        } 
            else {
            echo mysqli_error($conn);
        }
    }

$q  = mysqli_query($conn, "SELECT * FROM 2022_income WHERE id_pengurus = '$_SESSION[id_pengurus]' AND `posisi` = '$_SESSION[posisi]' AND status = 'Pending' ORDER BY `tgl_pemasukan` DESC");
$s = $q->num_rows;

$q2  = mysqli_query($conn, "SELECT * FROM income_media WHERE status = 'Menunggu Verifikasi' ORDER BY `tanggal_tf` DESC");
$s2 = $q2->num_rows;

if ($incomeId == "") {
    $q3  = mysqli_query($conn, "SELECT * FROM 2022_income WHERE id_pengurus = '$_SESSION[id_pengurus]' AND `posisi` = '$_SESSION[posisi]' AND status = 'Pending' AND id = '$unik' AND MONTH(tgl_pemasukan) = '$periode' ORDER BY `tgl_pemasukan` DESC");
    $data   = mysqli_fetch_assoc($q3);
} else {
    $q3  = mysqli_query($conn, "SELECT * FROM 2022_incometanparesi WHERE id_pengurus = '$_SESSION[id_pengurus]' AND `posisi` = '$_SESSION[posisi]' AND status = 'Menunggu Verifikasi' AND id = '$unik' AND MONTH(tgl_pemasukan) = '$periode' ORDER BY `tgl_pemasukan` DESC");
    $data   = mysqli_fetch_assoc($q3);
}

$k  = mysqli_query($conn, "SELECT * FROM 2022_incometanparesi WHERE id_pengurus = '$_SESSION[id_pengurus]' AND `posisi` = '$_SESSION[posisi]' AND status = 'Menunggu Verifikasi' ORDER BY `tgl_pemasukan` DESC");
$l = $k->num_rows;



?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Form Pemasukan Income</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <li class="breadcrumb-item">Form</li>
                <li class="breadcrumb-item active">Pemasukan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns pengajuan-->
            <div class="col-lg-12" id="form-pengajuan">
                <div class="row">
                    <?php include '../models/pemasukan/pemasukan_models/verifikasi-nav.php'; ?>
                </div>

                <!-- Laporan  -->
                <div class="col-12">
                    <div class="card">
                        <?php include '../models/pemasukan/edit_pemasukan.php'; ?>
                    </div>
                </div><!-- End Laporan  -->
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->