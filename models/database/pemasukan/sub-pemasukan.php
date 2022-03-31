<?php 
$hariIni   = date("Y-m-d");
$bln       = substr($hariIni, 5,-3);

$periode = $_GET["id_periode"];
$_SESSION["periode"] = $periode;
$_SESSION["idMedia"] = $_GET["idMedia"];
$income     = mysqli_query($conn, "SELECT * FROM 2022_income WHERE MONTH(tgl_pemasukan) = '$periode'");
$data       = mysqli_fetch_assoc($income);
$convert    = convertDateDBtoIndo($data['tgl_pemasukan']);
$bulan      = substr($convert, 3, -5);

if ($_GET["id_periode"] == "") {
    $incFB = mysqli_query($conn, "SELECT * FROM 2022_data_income");
    while($data_incFB = mysqli_fetch_array($incFB))
    {
        $i++;   
        $d_incomeFB = $data_incFB['income_depok'];
        $total_incomeFB[$i] = $d_incomeFB;

        $hasil_incomeFB = array_sum($total_incomeFB);

        $d_incomeFB_b = $data_incFB['income_bogor'];
        $total_incomeFB_b[$i] = $d_incomeFB_b;

        $hasil_incomeFB_b = array_sum($total_incomeFB_b);

        $d_incomeIns = $data_incFB['income_instagram'];
        $total_incomeIns[$i] = $d_incomeIns;

        $hasil_incomeIns = array_sum($total_incomeIns);

        $d_incomeNR = $data_incFB['income_tanpaResi'];
        $total_incomeNR[$i] = $d_incomeNR;

        $hasil_incomeNR = array_sum($total_incomeNR);
    }
    
} else {
    $incFB = mysqli_query($conn, "SELECT * FROM 2022_data_income WHERE bulan = '$bulan'");
    while($data_incFB = mysqli_fetch_array($incFB))
    {
        $i++;   
        $d_incomeFB = $data_incFB['income_depok'];
        $total_incomeFB[$i] = $d_incomeFB;

        $hasil_incomeFB = array_sum($total_incomeFB);

        $d_incomeFB_b = $data_incFB['income_bogor'];
        $total_incomeFB_b[$i] = $d_incomeFB_b;

        $hasil_incomeFB_b = array_sum($total_incomeFB_b);

        $d_incomeIns = $data_incFB['income_instagram'];
        $total_incomeIns[$i] = $d_incomeIns;

        $hasil_incomeIns = array_sum($total_incomeIns);

        $d_incomeNR = $data_incFB['income_tanpaResi'];
        $total_incomeNR[$i] = $d_incomeNR;

        $hasil_incomeNR = array_sum($total_incomeNR);
        
    }
    // die(var_dump($bulan));
}

$incomeGlobal = $hasil_incomeFB+$hasil_incomeFB_b+$hasil_incomeIns;

?>

<div class="row">
    <div class="col-xxl-3 col-md-6">
        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title">
                    <?php if ($_GET["id_periode"] == "") { ?>
                    Pemasukan Facebook Depok

                    <?php } else { ?>
                    Facebook Depok <?= $bulan; ?>
                    <?php } ?>
                </h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6>
                            <?php if ($hasil_incomeFB > 0) { ?>
                            Rp. <?= number_format($hasil_incomeFB,0,"." , ".") ?>

                            <?php } else { ?>
                            Belum Tersedia
                            <?php } ?>
                        </h6>
                        <?php if (
                            $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "01" || 
                            $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "02" ||
                            $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "03" ||
                            $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "05" ||
                            $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "04" ||
                            $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "06" ||
                            $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "07" ||
                            $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "08" ||
                            $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "09" ||
                            $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "10" ||
                            $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "11" ||
                            $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "12"
                            ) { ?>

                        <?php if ($hasil_incomeFB > 0) { ?>
                        <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia&idMedia=fbDepok"><span
                                class="detail-bulanan">Lihat tahunan →</span></a>

                        <?php } else { ?>
                        <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia"><span
                                class="detail-bulanan">Kembali →</span></a>
                        <?php } ?>

                        <?php } else { ?>
                        <?php if (
                            $hasil_incomeFB_b > 0 || 
                            $hasil_incomeIns > 0 || 
                            $incomeGlobal > 0 || 
                            $hasil_incomeNR > 0
                            ) { ?>
                        <a
                            href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia&idMedia=fbDepok&id_periode=<?= $bln; ?>"><span
                                class="detail-bulanan">Lihat bulanan →</span></a>

                        <?php } else { ?>
                        <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia"><span
                                class="detail-bulanan">Kembali →</span></a>
                        <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if ($_SESSION["username"] == "sekretaris_facebook") { ?>

    <?php } else { ?>
    <div class="col-xxl-3 col-md-6">
        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title">
                    <?php if ($_GET["id_periode"] == "") { ?>
                    Pemasukan Facebook Bogor

                    <?php } else { ?>
                    Facebook Bogor <?= $bulan; ?>
                    <?php } ?>
                </h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6>
                            <?php if ($hasil_incomeFB_b > 0) { ?>
                            Rp. <?= number_format($hasil_incomeFB_b,0,"." , ".") ?>

                            <?php } else { ?>
                            Belum Tersedia
                            <?php } ?>
                        </h6>
                        <?php if (
                            $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "01" || 
                            $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "02" ||
                            $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "03" ||
                            $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "05" ||
                            $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "04" ||
                            $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "06" ||
                            $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "07" ||
                            $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "08" ||
                            $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "09" ||
                            $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "10" ||
                            $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "11" ||
                            $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "12"
                            ) { ?>
                        <?php if ($hasil_incomeFB_b > 0) { ?>
                        <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia&idMedia=fbBogor"><span
                                class="detail-bulanan">Lihat tahunan →</span></a>

                        <?php } else { ?>
                        <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia"><span
                                class="detail-bulanan">Kembali →</span></a>
                        <?php } ?>

                        <?php } else { ?>
                        <?php if (
                            $hasil_incomeFB > 0 ||
                            $hasil_incomeIns > 0 ||
                            $hasil_incomeNR > 0 ||
                            $incomeGlobal > 0 
                            ) { ?>
                        <a
                            href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia&idMedia=fbBogor&id_periode=<?= $bln; ?>"><span
                                class="detail-bulanan">Lihat bulanan →</span></a>

                        <?php } else { ?>
                        <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia"><span
                                class="detail-bulanan">Kembali →</span></a>
                        <?php } ?>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xxl-3 col-md-6">
        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title">
                    <?php if ($_GET["id_periode"] == "") { ?>
                    Pemasukan Instagram

                    <?php } else { ?>
                    Instagram <?= $bulan; ?>
                    <?php } ?>
                </h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6>
                            <?php if ($hasil_incomeIns > 0) { ?>
                            Rp. <?= number_format($hasil_incomeIns,0,"." , ".") ?>

                            <?php } else { ?>
                            Belum Tersedia
                            <?php } ?>
                        </h6>
                        <?php if (
                            $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "01" || 
                            $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "02" ||
                            $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "03" ||
                            $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "05" ||
                            $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "04" ||
                            $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "06" ||
                            $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "07" ||
                            $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "08" ||
                            $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "09" ||
                            $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "10" ||
                            $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "11" ||
                            $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "12"
                            ) { ?>
                        <?php if ($hasil_incomeIns > 0) { ?>
                        <a
                            href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia&idMedia=instagram"><span
                                class="detail-bulanan">Lihat tahunan →</span></a>

                        <?php } else { ?>
                        <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia"><span
                                class="detail-bulanan">Kembali →</span></a>
                        <?php } ?>

                        <?php } else { ?>
                        <?php if (
                            $hasil_incomeFB > 0 ||
                            $hasil_incomeFB_b > 0 ||
                            $hasil_incomeNR > 0 ||
                            $incomeGlobal > 0 
                            ) { ?>
                        <a
                            href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia&idMedia=instagram&id_periode=<?= $bln; ?>"><span
                                class="detail-bulanan">Lihat bulanan →</span></a>

                        <?php } else { ?>
                        <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia"><span
                                class="detail-bulanan">Kembali →</span></a>
                        <?php } ?>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xxl-3 col-md-6">
        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title">
                    <?php if ($periode == "") { ?>
                    Pemasukan Non Resi

                    <?php } else { ?>
                    Non Resi <?= $bulan; ?>
                    <?php } ?>
                </h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6>
                            <?php if ($hasil_incomeNR > 0) { ?>
                            Rp. <?= number_format($hasil_incomeNR,0,"." , ".") ?>

                            <?php } else { ?>
                            Belum Tersedia
                            <?php } ?>
                        </h6>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "kepala_income" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
    <div class="col-xxl-6 col-md-6">
        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title">
                    <?php if ($_GET["id_periode"] == "") { ?>
                    Pemasukan Global Media

                    <?php } else { ?>
                    Pemasukan Media <?= $bulan; ?>
                    <?php } ?>
                </h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6>
                            <?php if ($incomeGlobal > 0) { ?>
                            Rp. <?= number_format($incomeGlobal,0,"." , ".") ?>

                            <?php } else { ?>
                            Belum Tersedia
                            <?php } ?>
                        </h6>
                        <?php if (
                            $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "01" || 
                            $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "02" ||
                            $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "03" ||
                            $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "05" ||
                            $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "04" ||
                            $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "06" ||
                            $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "07" ||
                            $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "08" ||
                            $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "09" ||
                            $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "10" ||
                            $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "11" ||
                            $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "12"
                            ) { ?>
                        <?php if ($incomeGlobal > 0) { ?>
                        <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia"><span
                                class="detail-bulanan">Lihat tahunan →</span></a>

                        <?php } else { ?>
                        <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia"><span
                                class="detail-bulanan">Kembali →</span></a>
                        <?php } ?>

                        <?php } else { ?>
                        <?php if (
                            $hasil_incomeFB > 0 ||
                            $hasil_incomeFB_b > 0 ||
                            $hasil_incomeIns > 0 ||
                            $hasil_incomeNR > 0
                        ) { ?>
                        <a
                            href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia&idMedia=mediaGlobal&id_periode=<?= $bln; ?>"><span
                                class="detail-bulanan">Lihat bulanan →</span></a>

                        <?php } else { ?>
                        <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia"><span
                                class="detail-bulanan">Kembali →</span></a>
                        <?php } ?>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xxl-6 col-md-6">
        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title">
                    <?php if ($periode = "") { ?>
                    Pemasukan Non Resi

                    <?php } else { ?>
                    Non Resi <?= $bulan; ?>
                    <?php } ?>
                </h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <?php if ($hasil_incomeNR > 0) { ?>
                        <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "kepala_income" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                        <h6>Rp.
                            <?= number_format($hasil_incomeNR,0,"." , ".") ?>
                        </h6>

                        <?php } else { ?>
                        <h6>Rp.
                            <?= number_format($hasil_incomeNR,0,"." , ".") ?>
                        </h6>
                        <?php } ?>

                        <?php } else { ?>
                        <h6>Belum Tersedia</h6>
                        <?php } ?>

                        <?php if (
                            $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "01" || 
                            $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "02" ||
                            $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "03" ||
                            $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "05" ||
                            $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "04" ||
                            $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "06" ||
                            $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "07" ||
                            $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "08" ||
                            $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "09" ||
                            $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "10" ||
                            $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "11" ||
                            $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "12"
                            ) { ?>
                        <?php if ($hasil_incomeNR > 0) { ?>
                        <a
                            href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia&id_income=nonResi&idMedia=nonResi"><span
                                class="detail-bulanan">Lihat tahunan →</span></a>

                        <?php } else { ?>
                        <a
                            href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia&id_income=nonResi&idMedia=nonResi"><span
                                class="detail-bulanan">Kembali →</span></a>
                        <?php } ?>

                        <?php } else { ?>
                        <?php if (
                            $hasil_incomeFB > 0 ||
                            $hasil_incomeFB_b > 0 ||
                            $hasil_incomeIns > 0 ||
                            $incomeGlobal > 0
                        ) { ?>
                        <a
                            href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia&id_income=nonResi&idMedia=nonResi&id_periode=<?= $bln; ?>"><span
                                class="detail-bulanan">Lihat bulanan →</span></a>

                        <?php } else { ?>
                        <a
                            href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia&id_income=nonResi&idMedia=nonResi"><span
                                class="detail-bulanan">Kembali →</span></a>
                        <?php } ?>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>
</div>

<!-- End Card -->
<div class="card-body">
    <h5 class="card-title">DATABASE PEMASUKAN</h5>

    <?php if ($_GET["id_income"] == "") { ?>
    <div class="table-responsive">
        <h5 class="card-title text-center">
            <?php if (
                $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "01" || 
                $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "02" ||
                $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "03" ||
                $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "05" ||
                $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "04" ||
                $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "06" ||
                $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "07" ||
                $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "08" ||
                $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "09" ||
                $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "10" ||
                $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "11" ||
                $_GET["idMedia"] == "fbDepok" && $_GET["id_periode"] == "12" ||
                $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "01" || 
                $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "02" ||
                $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "03" ||
                $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "05" ||
                $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "04" ||
                $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "06" ||
                $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "07" ||
                $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "08" ||
                $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "09" ||
                $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "10" ||
                $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "11" ||
                $_GET["idMedia"] == "fbBogor" && $_GET["id_periode"] == "12" ||
                $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "01" || 
                $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "02" ||
                $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "03" ||
                $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "05" ||
                $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "04" ||
                $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "06" ||
                $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "07" ||
                $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "08" ||
                $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "09" ||
                $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "10" ||
                $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "11" ||
                $_GET["idMedia"] == "instagram" && $_GET["id_periode"] == "12" ||
                $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "01" || 
                $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "02" ||
                $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "03" ||
                $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "05" ||
                $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "04" ||
                $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "06" ||
                $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "07" ||
                $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "08" ||
                $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "09" ||
                $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "10" ||
                $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "11" ||
                $_GET["idMedia"] == "mediaGlobal" && $_GET["id_periode"] == "12"

            ) { ?>
            <?php if ($_GET["idMedia"] == "fbDepok") { ?>
            <?php if ($hasil_incomeFB > 0) { ?>
            Laporan Facebook Depok <?= $bulan; ?>

            <?php } else { ?>
            Tidak Tersedia
            <?php } ?>

            <?php } elseif ($_GET["idMedia"] == "fbBogor") { ?>
            <?php if ($hasil_incomeFB_b > 0) { ?>
            Laporan Facebook Bogor <?= $bulan; ?>

            <?php } else { ?>
            Tidak Tersedia
            <?php } ?>

            <?php } elseif ($_GET["idMedia"] == "instagram") { ?>
            <?php if ($hasil_incomeIns > 0) { ?>
            Laporan Instagram <?= $bulan; ?>

            <?php } else { ?>
            Tidak Tersedia
            <?php } ?>

            <?php } else { ?>
            <?php if ($incomeGlobal > 0) { ?>
            Laporan Pemasukan Media <?= $bulan; ?>

            <?php } else { ?>
            Tidak Tersedia
            <?php } ?>
            <?php } ?>

            <?php } else { ?>
            <?php if ($_SESSION["idMedia"] == "") { ?>
            Laporan Pemasukan Media Sosial

            <?php } else { ?>
            <?php if ($_GET["idMedia"] == "fbDepok") { ?>
            Laporan Facebook Depok Tahunan

            <?php } elseif ($_GET["idMedia"] == "fbBogor") { ?>
            Laporan Facebook Bogor Tahunan

            <?php } else { ?>
            Laporan Instagram Tahunan
            <?php } ?>

            <?php } ?>
            <?php } ?>
        </h5>
        <?php if (
            $hasil_incomeFB > 0 ||
            $hasil_incomeFB_b > 0 ||
            $hasil_incomeIns > 0 ||
            $incomeGlobal > 0
        ) { ?>
        <table id="" class="table table-bordered databaseMedia">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Dilaporkan Oleh</th>
                    <th scope="col">Income</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Tgl Pemasukan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Income</th>
                </tr>
            </thead>
            <tbody>
                <!-- Ajax data -->
            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="7">Total</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>

        <?php } ?>
    </div>

    <?php } else { ?>
    <div class="table-responsive">
        <h5 class="card-title text-center">
            <?php if (
                $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "01" ||
                $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "02" ||
                $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "03" ||
                $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "05" ||
                $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "04" ||
                $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "06" ||
                $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "07" ||
                $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "08" ||
                $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "09" ||
                $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "10" ||
                $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "11" ||
                $_GET["idMedia"] == "nonResi" && $_GET["id_periode"] == "12"
            ) { ?>
            <?php if ($hasil_incomeNR > 0) { ?>
            Laporan Non Resi <?= $bulan; ?>

            <?php } else { ?>
            Tidak Tersedia
            <?php } ?>

            <?php } else { ?>
            Laporan Pemasukan Non Resi
            <?php } ?>
        </h5>
        <?php if ($hasil_incomeNR > 0) { ?>
        <table id="" class="table table-bordered databaseMedia">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Dilaporkan Oleh</th>
                    <th scope="col">Income</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Tgl Pemasukan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Income</th>
                </tr>
            </thead>
            <tbody>
                <!-- Ajax data -->
            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="7">Total</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>

        <?php } ?>
    </div>
    <?php } ?>

</div>