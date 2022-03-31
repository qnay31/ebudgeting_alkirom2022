<main id="main" class="main">
    <div class="pagetitle">
        <h1>Grafik</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <li class="breadcrumb-item">Grafik</li>
                <li class="breadcrumb-item active"><?= $judul ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns pengajuan-->
            <div class="col-lg-12" id="form-pengajuan">
                <div class="col-12">
                    <?php include '../models/base_card/detail-management.php'; ?>
                </div>

                <!-- Laporan  -->
                <div class="col-12">
                    <div class="card">
                        <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
                        <?php include '../models/grafik/management/sub-management.php'; ?>

                        <?php } else { ?>
                        <?php include '../models/grafik/management/sub-management.php'; ?>
                        <?php } ?>
                    </div>
                </div><!-- End Laporan  -->
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->