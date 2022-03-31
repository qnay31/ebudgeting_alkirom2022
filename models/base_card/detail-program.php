<?php 

$q = mysqli_query($conn, "SELECT * FROM 2022_data_program");
$i = 1;
$sql = $q;
while($r = mysqli_fetch_array($sql))
{
    $i++;   
    $d_anggaran = $r['anggaran_pendidikan'];
    $total_anggaran[$i] = $d_anggaran;

    $hasil_anggaran = array_sum($total_anggaran);

    $d_terpakai = $r['terpakai_pendidikan'];
    $total_terpakai[$i] = $d_terpakai;

    $hasil_terpakai = array_sum($total_terpakai);
    $cashback   = $hasil_anggaran - $hasil_terpakai;

    $d_anggaran2 = $r['anggaran_kesehatan'];
    $total_anggaran2[$i] = $d_anggaran2;

    $hasil_anggaran2 = array_sum($total_anggaran2);

    $d_terpakai2 = $r['terpakai_kesehatan'];
    $total_terpakai2[$i] = $d_terpakai2;

    $hasil_terpakai2 = array_sum($total_terpakai2);
    $cashback2   = $hasil_anggaran2 - $hasil_terpakai2;

    $d_anggaran3 = $r['anggaran_program_depok'];
    $total_anggaran3[$i] = $d_anggaran3;

    $hasil_anggaran3 = array_sum($total_anggaran3);

    $d_terpakai3 = $r['terpakai_program_depok'];
    $total_terpakai3[$i] = $d_terpakai3;

    $hasil_terpakai3 = array_sum($total_terpakai3);
    $cashback3   = $hasil_anggaran3 - $hasil_terpakai3;

    $d_anggaran4 = $r['anggaran_pendidikan_bogor'];
    $total_anggaran4[$i] = $d_anggaran4;

    $hasil_anggaran4 = array_sum($total_anggaran4);

    $d_terpakai4 = $r['terpakai_pendidikan_bogor'];
    $total_terpakai4[$i] = $d_terpakai4;

    $hasil_terpakai4 = array_sum($total_terpakai4);
    $cashback4   = $hasil_anggaran4 - $hasil_terpakai4;

    $d_anggaran5 = $r['anggaran_kesehatan_bogor'];
    $total_anggaran5[$i] = $d_anggaran5;

    $hasil_anggaran5 = array_sum($total_anggaran5);

    $d_terpakai5 = $r['terpakai_kesehatan_bogor'];
    $total_terpakai5[$i] = $d_terpakai5;

    $hasil_terpakai5 = array_sum($total_terpakai5);
    $cashback5   = $hasil_anggaran5 - $hasil_terpakai5;

    $d_anggaran6 = $r['anggaran_program_bogor'];
    $total_anggaran6[$i] = $d_anggaran6;

    $hasil_anggaran6 = array_sum($total_anggaran6);

    $d_terpakai6 = $r['terpakai_program_bogor'];
    $total_terpakai6[$i] = $d_terpakai6;

    $hasil_terpakai6 = array_sum($total_terpakai6);
    $cashback6   = $hasil_anggaran6 - $hasil_terpakai6;
    // var_dump($r['terpakai_kesehatan']);

    $angPendidikan  = $hasil_anggaran+$hasil_anggaran4;
    $terPendidikan  = $hasil_terpakai+$hasil_terpakai4;
    $cashPendidikan = $angPendidikan-$terPendidikan;

    $angKesehatan  = $hasil_anggaran2+$hasil_anggaran5;
    $terKesehatan  = $hasil_terpakai2+$hasil_terpakai5;
    $cashKesehatan = $angKesehatan-$terKesehatan;

    $angGlobal  = $hasil_anggaran3+$hasil_anggaran6;
    $terGlobal  = $hasil_terpakai3+$hasil_terpakai6;
    $cashGlobal = $angGlobal-$terGlobal;
}

?>
<div class="row">
    <!-- Card -->
    <div class="col-xxl-12 col-md-12">
        <div class="card customers-card">
            <h5 class="card-title text-center">Detail Global Program Yayasan</h5>
        </div>
    </div><!-- End Card -->

    <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan" || $_SESSION["id_pengurus"] == "kepala_pengajuan") { ?>
    <!-- Card -->
    <div class="col-xxl-4 col-md-4">
        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title">Pendidikan Global</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                            <?= number_format($angPendidikan,0,"." , ".") ?></h6>
                        <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right" title="Terpakai">Rp.
                            <?= number_format($terPendidikan,0,"." , ".") ?> - </h6>
                        <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right" title="Cashback">Rp.
                            <?= number_format($cashPendidikan,0,"." , ".") ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Card -->

    <!-- Card -->
    <div class="col-xxl-4 col-md-4">
        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title">Kesehatan Global</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                            <?= number_format($angKesehatan,0,"." , ".") ?></h6>
                        <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right" title="Terpakai">Rp.
                            <?= number_format($terKesehatan,0,"." , ".") ?> - </h6>
                        <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right" title="Cashback">Rp.
                            <?= number_format($cashKesehatan,0,"." , ".") ?></h6>
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
                <h5 class="card-title">Total Program Global</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                            <?= number_format($angGlobal,0,"." , ".") ?></h6>
                        <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right" title="Terpakai">Rp.
                            <?= number_format($terGlobal,0,"." , ".") ?> - </h6>
                        <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right" title="Cashback">Rp.
                            <?= number_format($cashGlobal,0,"." , ".") ?></h6>
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
                <h5 class="card-title">Pendidikan Depok</h5>

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
                <h5 class="card-title">Kesehatan Depok</h5>

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
                <h5 class="card-title">Total Program Depok</h5>

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
    <?php } ?>

    <!-- Card -->
    <div class="col-xxl-4 col-md-4">
        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title">Pendidikan Bogor</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                            <?= number_format($hasil_anggaran4,0,"." , ".") ?></h6>
                        <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right" title="Terpakai">Rp.
                            <?= number_format($hasil_terpakai4,0,"." , ".") ?> - </h6>
                        <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right" title="Cashback">Rp.
                            <?= number_format($cashback4,0,"." , ".") ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Card -->

    <!-- Card -->
    <div class="col-xxl-4 col-md-4">
        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title">Kesehatan Bogor</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                            <?= number_format($hasil_anggaran5,0,"." , ".") ?></h6>
                        <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right" title="Terpakai">Rp.
                            <?= number_format($hasil_terpakai5,0,"." , ".") ?> - </h6>
                        <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right" title="Cashback">Rp.
                            <?= number_format($cashback5,0,"." , ".") ?></h6>
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
                <h5 class="card-title">Total Program Bogor</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Anggaran">Rp.
                            <?= number_format($hasil_anggaran6,0,"." , ".") ?></h6>
                        <h6 class="text-danger" data-bs-toggle="tooltip" data-bs-placement="right" title="Terpakai">Rp.
                            <?= number_format($hasil_terpakai6,0,"." , ".") ?> - </h6>
                        <h6 class="text-success" data-bs-toggle="tooltip" data-bs-placement="right" title="Cashback">Rp.
                            <?= number_format($cashback6,0,"." , ".") ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->

</div>