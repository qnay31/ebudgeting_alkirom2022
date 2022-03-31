<?php
// PEMASUKAN
if ($_GET["id_lapGlobal"] == "") {
    $tahun = "2022";
    // media sosial
    $inc2 = mysqli_query($conn, "SELECT * FROM 2022_data_income");
    while($data_inc2 = mysqli_fetch_array($inc2))
    {
        $i++;   
        $d_income2 = $data_inc2['income_global'];
        $total_income2[$i] = $d_income2;

        $hasil_income2 = array_sum($total_income2);
    }

    $income_global = $hasil_income+$hasil_income2;

} else {
    $tahun = "2021";

    // humas
    $inc = mysqli_query($conn, "SELECT * FROM data_pemasukan");
    while($data_inc = mysqli_fetch_array($inc))
    {
        $i++;   
        $d_income = $data_inc['pemasukan_celengan'];
        $total_income[$i] = $d_income;

        $income = array_sum($total_income);

        $d_income2 = $data_inc['pemasukan_kotak_amal'];
        $total_income2[$i] = $d_income2;

        $income2 = array_sum($total_income2);

        $hasil_income = $income+$income2;
    }

    // media sosial
    $inc2 = mysqli_query($conn, "SELECT * FROM data_income_new");
    while($data_inc2 = mysqli_fetch_array($inc2))
    {
        $i++;   
        $d_income2 = $data_inc2['income_global'];
        $total_income2[$i] = $d_income2;

        $hasil_income2 = array_sum($total_income2);
    }

    $income_global = $hasil_income+$hasil_income2;

    // cashback
    $inc3 = mysqli_query($conn, "SELECT * FROM data_cashback");
    while($data_inc3 = mysqli_fetch_array($inc3))
    {
        $i++;   
        $d_income3 = $data_inc3['cashback_global'];
        $total_income3[$i] = $d_income3;

        $hasil_income3 = array_sum($total_income3);
    }
}


?>
<div class="button-global">
    <?php if ($_GET["id_lapGlobal"] == "") { ?>
    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_lapGlobal=2021"
        class="btn btn-success w-100 text-white fw-bold">Lihat Laporan <br> 2021</a>

    <?php } else { ?>
    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global"
        class="btn btn-primary w-100 text-white fw-bold">Lihat Laporan <br> 2022</a>
    <?php } ?>
</div>
<div class="card-body">
    <div class="text-center mt-4">
        <label for="">
            <h5><b style="color: black;">LAPORAN YAYASAN <?= $tahun ?></b></h5>
            <hr>
        </label>
    </div>
    <h5 class="card-title">PEMASUKAN YAYASAN</h5>
    <div class="row justify-content-start">
        <?php if ($_GET["id_lapGlobal"] == "2021") { ?>
        <!-- Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">Pemasukan <span>| Media Sosial</span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-credit-card"></i>
                        </div>
                        <div class="ps-3">
                            <h6>Rp. <?= number_format($hasil_income2,0,"." , ".") ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Card -->

        <!-- Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">Pemasukan <span>| Humas</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-credit-card"></i>
                        </div>
                        <div class="ps-3">
                            <h6>Rp. <?= number_format($hasil_income,0,"." , ".") ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Card -->

        <!-- Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">Pemasukan <span>| Keseluruhan</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-credit-card"></i>
                        </div>
                        <div class="ps-3">
                            <h6>Rp. <?= number_format($income_global,0,"." , ".") ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Card -->
        <?php } else { ?>
        <!-- Card -->
        <div class="col-xxl-12 col-md-12">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">Pemasukan <span>| Media Sosial</span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-credit-card"></i>
                        </div>
                        <div class="ps-3">
                            <h6>Rp. <?= number_format($hasil_income2,0,"." , ".") ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>
</div>