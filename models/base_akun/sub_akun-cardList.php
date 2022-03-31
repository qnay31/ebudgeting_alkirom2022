<!-- Card -->
<div class="col-xxl-6 col-md-6">
    <div class="card info-card revenue-card">
        <div class="card-body">
            <h5 class="card-title">Income Bulan Ini <span>| <?= ucwords($acMedia["nama_akun"]) ?></span></h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($hasil_inMediaBulanan,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xxl-6 col-md-6">
    <div class="card info-card revenue-card">
        <div class="card-body">
            <h5 class="card-title">Income Per Tahun <span>| <?= ucwords($acMedia["nama_akun"]) ?></span></h5>

            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-credit-card"></i>
                </div>
                <div class="ps-3">
                    <h6>Rp. <?= number_format($hasil_inMedia,0,"." , ".") ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Card -->