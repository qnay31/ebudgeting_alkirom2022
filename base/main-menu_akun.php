<?php
$keyAccount = $_SESSION["keyAccount"] = $_GET["id_accountKey"];
$periode    = $_SESSION["bulan"] = $_GET["id_bulan"];
$_SESSION["idLaporan"] = $_GET["idLaporan"];
$queryP     = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id = '$keyAccount' ");
$data       = mysqli_fetch_assoc($queryP);

if ($periode == "") {
    $q  = mysqli_query($conn, "SELECT * FROM laporan_media WHERE nomor_id = '$keyAccount' ORDER BY `tgl_laporan` DESC");
} else {
    $q  = mysqli_query($conn, "SELECT * FROM laporan_media WHERE nomor_id = '$keyAccount' AND MONTH(tgl_laporan) = '$periode' ORDER BY `tgl_laporan` DESC");
}


?>
<main id="main" class="main">
    <div class="pagetitle">

        <h1>Dashboard <?= $data["nama"] ?></h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php?id_profil=dataPengurus">Data
                        Pengurus</a></li>
                <?php } else { ?>
                <li class="breadcrumb-item">Akun Media</li>
                <?php } ?>
                <li class="breadcrumb-item active"><?= ucwords($data["nama"]) ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <?php include '../models/base_akun/sub_akun-cardList.php'; ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="tabNav">
                                <!-- Bordered Tabs -->
                                <ul class="nav nav-tabs nav-tabs-bordered">
                                    <?php if ($_GET["idLaporan"] == "Income") { ?>
                                    <li class="nav-item">
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_accountKey=<?= $keyAccount; ?>&id_bulan=<?= $periode; ?>&idLaporan=Akun"><button
                                                class="nav-link">Laporan
                                                Akun</button></a>
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_accountKey=<?= $keyAccount; ?>&id_bulan=<?= $periode; ?>&idLaporan=Income">
                                            <button class="nav-link active">Laporan
                                                Income</button></a>

                                    </li>

                                    <?php } else { ?>
                                    <li class="nav-item">
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_accountKey=<?= $keyAccount; ?>&id_bulan=<?= $periode; ?>&idLaporan=Akun"><button
                                                class="nav-link active">Laporan
                                                Akun</button></a>
                                    </li>

                                    <li class="nav-item">
                                        <a
                                            href="<?= $_SESSION["username"] ?>.php?id_accountKey=<?= $keyAccount; ?>&id_bulan=<?= $periode; ?>&idLaporan=Income">
                                            <button class="nav-link">Laporan
                                                Income</button></a>

                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="tab-content pt-2">
                            <?php if ($_GET["idLaporan"] == "Income") { ?>
                            <?php include '../models/base_akun/sub_akun-lapIncome.php'; ?>

                            <?php } else { ?>
                            <?php include '../models/base_akun/sub_akun-lapAkun.php'; ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>

</main><!-- End #main -->