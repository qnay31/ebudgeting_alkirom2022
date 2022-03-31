<?php

$bulan      = date("Y-m-d");
$bln       = substr($bulan, 5,-3);
// die(var_dump($bln));
$keyAccount = $_GET["id_accountKey"];
$Account    = $_GET["id_akun"];
$queryP     = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id = '$keyAccount' ");
$data       = mysqli_fetch_assoc($queryP);

$queryAc    = mysqli_query($conn, "SELECT * FROM data_akun WHERE nama_akun = '$Account' AND pemegang = '$data[nama]' AND nomor_id = '$data[id]' ORDER BY `nama_akun` ASC ");
$acMedia    = mysqli_fetch_assoc($queryAc);

$i = 1;

$inMediaBulanan = mysqli_query($conn, "SELECT * FROM income_media WHERE nama_akun = '$Account' AND nomor_id = '$keyAccount' AND pemegang = '$acMedia[pemegang]' AND status = 'OK' AND MONTH(tanggal_tf) = '$bln' ");

while($data_inMediaBulanan = mysqli_fetch_array($inMediaBulanan))
{
    $i++;   
    $d_inMediaBulanan= $data_inMediaBulanan['jumlah_tf'];
    $total_inMediaBulanan[$i] = $d_inMediaBulanan;

    $hasil_inMediaBulanan = array_sum($total_inMediaBulanan);
}

$inMedia = mysqli_query($conn, "SELECT * FROM income_media WHERE nama_akun = '$Account' AND nomor_id = '$keyAccount' AND pemegang = '$acMedia[pemegang]' AND status = 'OK' ");

while($data_inMedia = mysqli_fetch_array($inMedia))
{
    $i++;   
    $d_inMedia= $data_inMedia['jumlah_tf'];
    $total_inMedia[$i] = $d_inMedia;

    $hasil_inMedia = array_sum($total_inMedia);
}


$q  = mysqli_query($conn, "SELECT * FROM laporan_media WHERE nama_akun = '$Account' AND nomor_id = '$keyAccount' AND pemegang = '$acMedia[pemegang]' AND MONTH(tgl_laporan) = '$bln' ORDER BY `tgl_laporan` DESC");

?>
<main id="main" class="main">
    <div class="pagetitle">

        <h1>Dashboard <?= $data["nama"] ?></h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Home</a></li>
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
                        <?php include '../models/base_akun/sub_akun-lapAkun.php'; ?>
                    </div>
                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>

</main><!-- End #main -->