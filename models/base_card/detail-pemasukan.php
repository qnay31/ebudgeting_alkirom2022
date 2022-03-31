<?php 

$q = mysqli_query($conn, "SELECT * FROM 2022_data_income");
$i = 1;
$sql = $q;
while($r = mysqli_fetch_array($sql))
{
    $i++;   
    $d_incomeMedia              = $r['income_global'];
    $total_incomeMedia[$i]      = $d_incomeMedia;
    $incomeMedia                = array_sum($total_incomeMedia);

    $d_incomeNonresi            = $r['income_tanpaResi'];
    $total_incomeNonresi[$i]    = $d_incomeNonresi;
    $incomeNonresi              = array_sum($total_incomeNonresi);

    $incomeGlobal               = $incomeMedia+$incomeNonresi; 

    $d_incomeDepok              = $r['income_depok'];
    $total_incomeDepok[$i]      = $d_incomeDepok;
    $incomeDepok                = array_sum($total_incomeDepok);

    $d_incomeBogor              = $r['income_bogor'];
    $total_incomeBogor[$i]      = $d_incomeBogor;

    $incomeBogor                = array_sum($total_incomeBogor);

    $d_incomeInstagram          = $r['income_instagram'];
    $total_incomeInstagram[$i]  = $d_incomeInstagram;

    $incomeInstagram            = array_sum($total_incomeInstagram);
}

?>
<div class="row">
    <!-- Card -->
    <div class="col-xxl-12 col-md-12">
        <div class="card revenue-card">
            <h5 class="card-title text-center">Detail Global Pemasukan Yayasan</h5>
        </div>
    </div><!-- End Card -->

    <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan" || $_SESSION["id_pengurus"] == "kepala_pengajuan" || $_SESSION["id_pengurus"] == "kepala_income") { ?>
    <!-- Card -->
    <div class="col-xxl-4 col-md-4">
        <div class="card info-card revenue-card">
            <div class="card-body">
                <h5 class="card-title">Income Media</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Income Media">Rp.
                            <?= number_format($incomeMedia,0,"." , ".") ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Card -->

    <!-- Card -->
    <div class="col-xxl-4 col-md-4">
        <div class="card info-card revenue-card">
            <div class="card-body">
                <h5 class="card-title">Income Non Resi</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Non Resi">Rp.
                            <?= number_format($incomeNonresi,0,"." , ".") ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="col-xxl-4 col-md-4">
        <div class="card info-card revenue-card">
            <div class="card-body">
                <h5 class="card-title">Total Income Global</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Income Global">Rp.
                            <?= number_format($incomeGlobal,0,"." , ".") ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="col-xxl-4 col-md-4">
        <div class="card info-card revenue-card">
            <div class="card-body">
                <h5 class="card-title">Media Facebook Depok</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Facebook Depok">Rp.
                            <?= number_format($incomeDepok,0,"." , ".") ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Card -->

    <!-- Card -->
    <div class="col-xxl-4 col-md-4">
        <div class="card info-card revenue-card">
            <div class="card-body">
                <h5 class="card-title">Media Facebook Bogor</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Facebook Bogor">Rp.
                            <?= number_format($incomeBogor,0,"." , ".") ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="col-xxl-4 col-md-4">
        <div class="card info-card revenue-card">
            <div class="card-body">
                <h5 class="card-title">Media Instagram</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Instagram">Rp.
                            <?= number_format($incomeInstagram,0,"." , ".") ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->

    <?php } else { ?>
    <!-- Card -->
    <div class="col-xxl-6 col-md-6">
        <div class="card info-card revenue-card">
            <div class="card-body">
                <h5 class="card-title">Media Facebook Bogor</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <div class="ps-3">
                        <h6 data-bs-toggle="tooltip" data-bs-placement="right" title="Facebook Bogor">Rp.
                            <?= number_format($incomeBogor,0,"." , ".") ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->
    <?php } ?>

</div>