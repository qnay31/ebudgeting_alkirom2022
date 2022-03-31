<div class="tab-pane fade show active profile-overview" id="profile-program">
    <section class="section dashboard">
        <div class="row">
            <?php
                $no = 1;
                while ($data_kYas = $kYas->fetch_assoc()) { ?>
            <!-- Card -->
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card customers-card">
                    <div class="card-body bg">
                        <h5 class="card-title"><?= $data_kYas["posisi"] ?></h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <div class="ps-3">
                                <h6><?= ucwords($data_kYas["nama"]) ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Card -->
            <?php } ?>

            <?php
                $no = 1;
                while ($data_kCab = $kCab->fetch_assoc()) { ?>
            <!-- Card -->
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card customers-card">
                    <div class="card-body bg">
                        <h5 class="card-title"><?= $data_kCab["posisi"] ?> <?= $data_kCab["cabang"] ?></h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <div class="ps-3">
                                <h6><?= ucwords($data_kCab["nama"]) ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Card -->
            <?php } ?>

            <?php
                $no = 1;
                while ($data_kMuang = $kMuang->fetch_assoc()) { ?>
            <!-- Card -->
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card customers-card">
                    <div class="card-body bg">
                        <h5 class="card-title"><?= $data_kMuang["posisi"] ?> <?= $data_kMuang["cabang"] ?></h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <div class="ps-3">
                                <h6><?= ucwords($data_kMuang["nama"]) ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Card -->
            <?php } ?>

            <?php
                $no = 1;
                while ($data_kPaju = $kPaju->fetch_assoc()) { ?>
            <!-- Card -->
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card customers-card">
                    <div class="card-body bg">
                        <h5 class="card-title"><?= $data_kPaju["posisi"] ?> <?= $data_kPaju["cabang"] ?></h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <div class="ps-3">
                                <h6><?= ucwords($data_kPaju["nama"]) ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Card -->
            <?php } ?>

            <?php
                $no = 1;
                while ($data_kInc = $kInc->fetch_assoc()) { ?>
            <!-- Card -->
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card customers-card">
                    <div class="card-body bg">
                        <h5 class="card-title"><?= $data_kInc["posisi"] ?> <?= $data_kInc["cabang"] ?></h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <div class="ps-3">
                                <h6><?= ucwords($data_kInc["nama"]) ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Card -->
            <?php } ?>
        </div>
    </section>
</div>