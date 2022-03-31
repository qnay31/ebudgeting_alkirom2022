<?php 

$q = mysqli_query($conn, "SELECT * FROM 2022_data_logistik");
$i = 1;
$sql = $q;
while($r = mysqli_fetch_array($sql))
{
    $i++;   
    $d_anggaran = $r['anggaran_logistik_depok'];
    $total_anggaran[$i] = $d_anggaran;

    $hasil_anggaran = array_sum($total_anggaran);

    $d_terpakai = $r['terpakai_logistik_depok'];
    $total_terpakai[$i] = $d_terpakai;

    $hasil_terpakai = array_sum($total_terpakai);
    $cashback   = $hasil_anggaran - $hasil_terpakai;

    $d_anggaran2 = $r['anggaran_logistik_bogor'];
    $total_anggaran2[$i] = $d_anggaran2;

    $hasil_anggaran2 = array_sum($total_anggaran2);

    $d_terpakai2 = $r['terpakai_logistik_bogor'];
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

?>
<div class="row">
    <!-- Card -->
    <div class="col-xxl-12 col-md-12">
        <div class="card customers-card">
            <h5 class="card-title text-center">Detail Global Logistik Yayasan</h5>
        </div>
    </div><!-- End Card -->

    <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan" || $_SESSION["id_pengurus"] == "kepala_pengajuan") { ?>

    <!-- Card -->
    <div class="col-xxl-4 col-md-4">
        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title">Logistik Depok</h5>

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
                <h5 class="card-title">Logistik Bogor</h5>

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
                <h5 class="card-title">Logistik Global</h5>

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
    <?php } else { ?>
    <!-- Card -->
    <div class="col-xxl-12 col-md-12">
        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title">Logistik Bogor</h5>

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
    <?php } ?>

</div>