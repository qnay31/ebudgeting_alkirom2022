<?php
    $_SESSION["id_income"] = $_GET["id_income"];
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Database</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <li class="breadcrumb-item">Database</li>
                <li class="breadcrumb-item active">Pemasukan Media Sosial</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns pengajuan-->
            <div class="col-lg-12" id="form-pengajuan">

                <?php if ($_GET["id_periode"] == "") { ?>

                <?php } else { ?>
                <!-- periode -->
                <div class="col-12">
                    <div class="card">
                        <?php include '../models/database/pemasukan/periode.php'; ?>
                    </div>
                </div>
                <?php } ?>

                <!-- Laporan  -->
                <div class="col-12">
                    <div class="card">
                        <?php include '../models/database/pemasukan/sub-pemasukan.php'; ?>
                    </div>
                </div><!-- End Laporan  -->
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->