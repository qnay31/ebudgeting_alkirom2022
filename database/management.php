<?php
    if ($_GET["id_periode"] == "") {
        $q  = mysqli_query($conn, "SELECT * FROM 2022_$id_management WHERE laporan = 'Terverifikasi' ORDER BY `tgl_dibuat` DESC");
        $s = $q->num_rows;
        $pProgram = "Global"; 

    } else {
        $periode = $_GET["id_periode"];
        $q  = mysqli_query($conn, "SELECT * FROM 2022_$id_management WHERE laporan = 'Terverifikasi' AND MONTH(tgl_laporan) = '$periode' ORDER BY `tgl_dibuat` DESC");

        $q2  = mysqli_query($conn, "SELECT * FROM 2022_$id_management WHERE laporan = 'Terverifikasi' AND MONTH(tgl_laporan) = '$periode' ORDER BY `tgl_dibuat` DESC");
        
        $data = mysqli_fetch_assoc($q2);
        $convert   = convertDateDBtoIndo($data['tgl_laporan']);
        $pProgram     = substr($convert, 2, -5); 
    }
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Database</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <li class="breadcrumb-item">Database</li>
                <li class="breadcrumb-item active"><?= $judul ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <!-- Left side columns pengajuan-->
            <div class="col-lg-12" id="form-pengajuan">
                <!-- periode -->
                <div class="col-12">
                    <div class="card">
                        <?php include '../models/database/sub-periode.php'; ?>
                    </div>
                </div>

                <!-- Laporan  -->
                <div class="col-12">
                    <div class="card">
                        <?php include '../models/database/management/sub-management.php'; ?>
                    </div>
                </div><!-- End Laporan  -->
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->