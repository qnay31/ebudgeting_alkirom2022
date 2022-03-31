<div class="col-xxl-4 col-md-4">
    <div class="card info-card customers-card">
        <div class="card-body">
            <h5 class="card-title">List Akun : </h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                    <?php
                    $akunQuery  = mysqli_query($conn, "SELECT * FROM data_akun WHERE nomor_id = '$keyAccount' ORDER BY nama_akun");
                    ?>
                    <?php
                    $no = 1;
                    while ($data = mysqli_fetch_array($akunQuery)) { ?>
                    <span class="akun"><b>Akun <?= $no++ ?>:</b>
                        <span><?= ucwords($data["nama_akun"]) ?></span>

                    </span>
                    <br>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xxl-4 col-md-4">
    <div class="card info-card revenue-card">
        <div class="card-body">
            <h5 class="card-title">
                <?php if ($periode == "") { ?>
                Income Per Tahun

                <?php } else { ?>
                Income Bulan Ini
                <?php } ?>
            </h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <?php
                        if ($periode == "") {
                            $incomeBulanan = mysqli_query($conn, "SELECT nama_akun, SUM(jumlah_tf) AS total_tf FROM income_media WHERE nomor_id = '$keyAccount' AND status = 'OK' GROUP BY nama_akun ");

                        } else {
                            $incomeBulanan = mysqli_query($conn, "SELECT nama_akun, SUM(jumlah_tf) AS total_tf FROM income_media WHERE nomor_id = '$keyAccount' AND MONTH(tanggal_tf) = '$periode' AND status = 'OK' GROUP BY nama_akun ");
                        }
                        
                    ?>

                    <?php
                        $no = 1;
                        while ($dataIncome = mysqli_fetch_array($incomeBulanan)) { 
                    
                    ?>
                    <span class="akun"><b><?= ucwords($dataIncome["nama_akun"]); ?> : </b>
                        <span><?= number_format($dataIncome["total_tf"],0,"." , ".") ?></span>

                    </span>
                    <br>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xxl-4 col-md-4">
    <div class="card info-card revenue-card">
        <div class="card-body">
            <h5 class="card-title">
                <?php if ($periode == "") { ?>
                Income Global Per Tahun

                <?php } else { ?>
                Income Global Per Bulan
                <?php } ?>
            </h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <?php
                        if ($periode == "") {
                            $incGlobalBulanan = mysqli_query($conn, "SELECT pemegang, SUM(jumlah_tf) AS total_tf FROM income_media WHERE nomor_id = '$keyAccount' AND status = 'OK' GROUP BY pemegang ");
                            
                        } else {
                            $incGlobalBulanan = mysqli_query($conn, "SELECT pemegang, SUM(jumlah_tf) AS total_tf FROM income_media WHERE nomor_id = '$keyAccount' AND MONTH(tanggal_tf) = '$periode' AND status = 'OK' GROUP BY pemegang ");
                        }
                            
                    ?>

                    <?php
                        $no = 1;
                        while ($dataGlobal = mysqli_fetch_array($incGlobalBulanan)) { 
                    
                        ?>
                    <h6>Rp. <?= number_format($dataGlobal["total_tf"],0,"." , ".") ?></h6>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Card -->