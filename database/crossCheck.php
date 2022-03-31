<?php
$_SESSION["id_periode"] = $_GET["id_periode"];
if ($_SESSION["id_periode"] == true) {
    $qInCheck = mysqli_query($conn, "SELECT * FROM income_media WHERE MONTH(tanggal_tf) = '$_SESSION[id_periode]' AND status = 'OK'");
    $nInCheck = $qInCheck->num_rows;
} else {
    $qInCheck = mysqli_query($conn, "SELECT * FROM income_media WHERE status = 'OK'");
    $nInCheck = $qInCheck->num_rows;
}

$dInCheck = mysqli_fetch_assoc($qInCheck);
$bInCheck = convertDateDBtoIndo($dInCheck["tanggal_tf"]);
$inCheckT = substr($bInCheck, 3, -5);
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Database</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <li class="breadcrumb-item">Database</li>
                <li class="breadcrumb-item active">Crosscheck Income</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns pengajuan-->
            <div class="col-lg-12" id="form-pengajuan">
                <div class="col-12">
                    <div class="card">
                        <?php include '../models/database/pemasukan/periode.php'; ?>
                    </div>
                </div>

                <!-- Laporan  -->
                <div class="col-12">
                    <div class="card">
                        <?php include '../models/database/pemasukan/sub-crossCheck.php'; ?>
                    </div>
                </div><!-- End Laporan  -->
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->