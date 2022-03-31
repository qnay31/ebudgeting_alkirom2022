<?php
    $bulan      = date("Y-m-d");
    $bln        = substr($bulan, 5,-3);
    $conv       = convertDateDBtoIndo($bulan);
    $sBulan     = substr($conv, 3, -5);
    $i = 1;
    // fb pusat
    $qfp   = mysqli_query($conn, "SELECT data_akun.id_pengurus, data_akun.nama_akun, data_akun.team, income_media.jumlah_tf, income_media.pemegang 
    FROM data_akun JOIN income_media ON income_media.nama_akun = data_akun.nama_akun WHERE data_akun.team = 'Facebook Pusat' AND MONTH(tanggal_tf)= '$bln' AND income_media.status = 'OK'");
    
    while ($ifp = mysqli_fetch_array($qfp)) {
        $i++;
        $incfp      = $ifp["jumlah_tf"];
        $totfp[$i]  = $incfp;
        $hifp       = array_sum($totfp);
    }

    // fb taman
    $qft   = mysqli_query($conn, "SELECT data_akun.id_pengurus, data_akun.nama_akun, data_akun.team, income_media.jumlah_tf 
    FROM data_akun JOIN income_media ON income_media.nama_akun = data_akun.nama_akun WHERE data_akun.team = 'Facebook Taman' AND MONTH(tanggal_tf)= '$bln' AND income_media.status = 'OK'");

    while ($ift = mysqli_fetch_array($qft)) {
        $i++;
        $incft      = $ift["jumlah_tf"];
        $totft[$i]  = $incft;
        $hift       = array_sum($totft);

    }

    // fb bogor
    $qfb   = mysqli_query($conn, "SELECT data_akun.id_pengurus, data_akun.nama_akun, data_akun.team, income_media.jumlah_tf 
    FROM data_akun JOIN income_media ON income_media.nama_akun = data_akun.nama_akun WHERE data_akun.team = 'Facebook Bogor' AND MONTH(tanggal_tf)= '$bln' AND income_media.status = 'OK'");

    while ($ifb = mysqli_fetch_array($qfb)) {
        $i++;
        $incfb      = $ifb["jumlah_tf"];
        $totfb[$i]  = $incfb;
        $hifb       = array_sum($totfb);

    }

    // instagram bojong
    $qib   = mysqli_query($conn, "SELECT data_akun.id_pengurus, data_akun.nama_akun, data_akun.team, income_media.jumlah_tf 
    FROM data_akun JOIN income_media ON income_media.nama_akun = data_akun.nama_akun WHERE data_akun.team = 'Instagram Bojong' AND MONTH(income_media.tanggal_tf)= '$bln' AND income_media.status = 'OK'");

    while ($iib = mysqli_fetch_array($qib)) {
        $i++;
        $incib      = $iib["jumlah_tf"];
        $totib[$i]  = $incib;
        $hiib       = array_sum($totib);

    }

    // instagram taman
    $qit   = mysqli_query($conn, "SELECT data_akun.id_pengurus, data_akun.nama_akun, data_akun.team, income_media.jumlah_tf 
    FROM data_akun JOIN income_media ON income_media.nama_akun = data_akun.nama_akun WHERE data_akun.team = 'Instagram Taman' AND MONTH(tanggal_tf)= '$bln' AND income_media.status = 'OK'");

    while ($iit = mysqli_fetch_array($qit)) {
        $i++;
        $incit      = $iit["jumlah_tf"];
        $totit[$i]  = $incit;
        $hiit       = array_sum($totit);
    }

    // instagram taman
    $qim   = mysqli_query($conn, "SELECT data_akun.id_pengurus, data_akun.nama_akun, data_akun.team, income_media.jumlah_tf 
    FROM data_akun JOIN income_media ON income_media.nama_akun = data_akun.nama_akun WHERE data_akun.team = 'Instagram Meruyung' AND MONTH(tanggal_tf)= '$bln' AND income_media.status = 'OK'");

    while ($iim = mysqli_fetch_array($qim)) {
        $i++;
        $incim      = $iim["jumlah_tf"];
        $totim[$i]  = $incim;
        $hiim       = array_sum($totim);
    }


?>

<div class="row pt-4">
    <div class="col-xxl-4 col-md-4">
        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title">
                    Facebook Pusat
                </h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6>
                            Rp. <?= number_format($hifp, 0,"." , "."); ?>
                        </h6><span class="detail-bulanan maintenance" tabindex="0" data-bs-toggle="popover"
                            data-bs-html="true" title="Detail Income"
                            data-bs-content="And here's some amazing content. <b>It<?= $totfp[2]; ?>?</b>"><?= $sBulan; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xxl-4 col-md-4">
        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title">
                    Facebook Taman
                </h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6>
                            Rp. <?= number_format($hift, 0,"." , "."); ?>
                        </h6><span class="detail-bulanan maintenance"><?= $sBulan; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xxl-4 col-md-4">
        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title">
                    Facebook Bogor
                </h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6>
                            Rp. <?= number_format($hifb, 0,"." , "."); ?>
                        </h6><span class="detail-bulanan maintenance"><?= $sBulan; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xxl-4 col-md-4">
        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title">
                    Instagram Bojong
                </h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6>
                            Rp. <?= number_format($hiib, 0,"." , "."); ?>
                        </h6><span class="detail-bulanan maintenance"><?= $sBulan; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xxl-4 col-md-4">
        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title">
                    Instagram Taman
                </h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6>
                            Rp. <?= number_format($hiit, 0,"." , "."); ?>
                        </h6><span class="detail-bulanan maintenance"><?= $sBulan; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xxl-4 col-md-4">
        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title">
                    Instagram Meruyung
                </h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6>
                            Rp. <?= number_format($hiim, 0,"." , "."); ?>
                        </h6><span class="detail-bulanan maintenance"><?= $sBulan; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>