<?php 
if ($id_management == "aset_yayasan") {
    $q = mysqli_query($conn, "SELECT * FROM 2022_data_$id_management");
    $i = 1;
    $sql = $q;
    while($r = mysqli_fetch_array($sql))
    {
        $i++;   
        $d_anggaran = $r['anggaran_pembangunan'];
        $total_anggaran[$i] = $d_anggaran;

        $hasil_anggaran = array_sum($total_anggaran);

        $d_terpakai = $r['terpakai_pembangunan'];
        $total_terpakai[$i] = $d_terpakai;

        $hasil_terpakai = array_sum($total_terpakai);
        $cashback   = $hasil_anggaran - $hasil_terpakai;

        $d_anggaran2 = $r['anggaran_pembelian'];
        $total_anggaran2[$i] = $d_anggaran2;

        $hasil_anggaran2 = array_sum($total_anggaran2);

        $d_terpakai2 = $r['terpakai_pembelian'];
        $total_terpakai2[$i] = $d_terpakai2;

        $hasil_terpakai2 = array_sum($total_terpakai2);
        $cashback2   = $hasil_anggaran2 - $hasil_terpakai2;

        $d_anggaran3 = $r['anggaran_global'];
        $total_anggaran3[$i] = $d_anggaran3;

        $hasil_anggaran3 = array_sum($total_anggaran3);

        $d_terpakai3 = $r['terpakai_global'];
        $total_terpakai3[$i] = $d_terpakai3;

        $hasil_terpakai3 = array_sum($total_terpakai3);
        $cashback3   = $hasil_anggaran3 - $hasil_terpakai3;
    }

} elseif ($id_management == "maintenance") {
    $q = mysqli_query($conn, "SELECT * FROM 2022_data_$id_management");
    $i = 1;
    $sql = $q;
    while($r = mysqli_fetch_array($sql))
    {
        $i++;   
        $d_anggaran = $r["anggaran_{$id_management}_aset"];
        $total_anggaran[$i] = $d_anggaran;
        // var_dump($d_anggaran);
        $hasil_anggaran = array_sum($total_anggaran);

        $d_terpakai = $r["terpakai_{$id_management}_aset"];
        $total_terpakai[$i] = $d_terpakai;

        $hasil_terpakai = array_sum($total_terpakai);
        $cashback   = $hasil_anggaran - $hasil_terpakai;

        $d_anggaran2 = $r["anggaran_{$id_management}_gedung"];
        $total_anggaran2[$i] = $d_anggaran2;

        $hasil_anggaran2 = array_sum($total_anggaran2);

        $d_terpakai2 = $r["terpakai_{$id_management}_gedung"];
        $total_terpakai2[$i] = $d_terpakai2;

        $hasil_terpakai2 = array_sum($total_terpakai2);
        $cashback2   = $hasil_anggaran2 - $hasil_terpakai2;

        $d_anggaran3 = $r['anggaran_global'];
        $total_anggaran3[$i] = $d_anggaran3;

        $hasil_anggaran3 = array_sum($total_anggaran3);

        $d_terpakai3 = $r['terpakai_global'];
        $total_terpakai3[$i] = $d_terpakai3;

        $hasil_terpakai3 = array_sum($total_terpakai3);
        $cashback3   = $hasil_anggaran3 - $hasil_terpakai3;
    }

} else {
    $q = mysqli_query($conn, "SELECT * FROM 2022_data_$id_management");
    $i = 1;
    $sql = $q;
    while($r = mysqli_fetch_array($sql))
    {
        $i++;   
        $d_anggaran = $r["anggaran_{$id_management}_depok"];
        $total_anggaran[$i] = $d_anggaran;
        // var_dump($d_anggaran);
        $hasil_anggaran = array_sum($total_anggaran);

        $d_terpakai = $r["terpakai_{$id_management}_depok"];
        $total_terpakai[$i] = $d_terpakai;

        $hasil_terpakai = array_sum($total_terpakai);
        $cashback   = $hasil_anggaran - $hasil_terpakai;

        $d_anggaran2 = $r["anggaran_{$id_management}_bogor"];
        $total_anggaran2[$i] = $d_anggaran2;

        $hasil_anggaran2 = array_sum($total_anggaran2);

        $d_terpakai2 = $r["terpakai_{$id_management}_bogor"];
        $total_terpakai2[$i] = $d_terpakai2;

        $hasil_terpakai2 = array_sum($total_terpakai2);
        $cashback2   = $hasil_anggaran2 - $hasil_terpakai2;

        $d_anggaran3 = $r['anggaran_global'];
        $total_anggaran3[$i] = $d_anggaran3;

        $hasil_anggaran3 = array_sum($total_anggaran3);

        $d_terpakai3 = $r['terpakai_global'];
        $total_terpakai3[$i] = $d_terpakai3;

        $hasil_terpakai3 = array_sum($total_terpakai3);
        $cashback3   = $hasil_anggaran3 - $hasil_terpakai3;
    }
}


?>
<div class="row">
    <!-- Card -->
    <div class="col-xxl-12 col-md-12">
        <div class="card customers-card">
            <h5 class="card-title text-center">Detail Global <?= ucwords($judul) ?></h5>
        </div>
    </div><!-- End Card -->

    <!-- Card -->
    <div class="col-xxl-4 col-md-4">
        <div class="card info-card customers-card">
            <div class="card-body">
                <?php if ($id_management == "aset_yayasan") { ?>
                <h5 class="card-title">Pembangunan</h5>

                <?php } elseif ($id_management == "maintenance") { ?>
                <h5 class="card-title">Maintenance Aset</h5>

                <?php } else { ?>
                <h5 class="card-title"><?= ucwords($judul) ?> Depok</h5>
                <?php } ?>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                            <?= number_format($hasil_anggaran,0,"." , ".") ?></h6>
                        <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right" title="Terpakai">Rp.
                            <?= number_format($hasil_terpakai,0,"." , ".") ?> - </h6>
                        <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right" title="Cashback">Rp.
                            <?= number_format($cashback,0,"." , ".") ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Card -->

    <!-- Card -->
    <div class="col-xxl-4 col-md-4">
        <div class="card info-card customers-card">
            <div class="card-body">
                <?php if ($id_management == "aset_yayasan") { ?>
                <h5 class="card-title">Pembelian Barang</h5>

                <?php } elseif ($id_management == "maintenance") { ?>
                <h5 class="card-title">Maintenance Gedung</h5>

                <?php } else { ?>
                <h5 class="card-title"><?= ucwords($judul) ?> Bogor</h5>
                <?php } ?>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                            <?= number_format($hasil_anggaran2,0,"." , ".") ?></h6>
                        <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right" title="Terpakai">Rp.
                            <?= number_format($hasil_terpakai2,0,"." , ".") ?> - </h6>
                        <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right" title="Cashback">Rp.
                            <?= number_format($cashback2,0,"." , ".") ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="col-xxl-4 col-md-4">
        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title">Total <?= ucwords($judul) ?></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                            <?= number_format($hasil_anggaran3,0,"." , ".") ?></h6>
                        <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right" title="Terpakai">Rp.
                            <?= number_format($hasil_terpakai3,0,"." , ".") ?> - </h6>
                        <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right" title="Cashback">Rp.
                            <?= number_format($cashback3,0,"." , ".") ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->

</div>