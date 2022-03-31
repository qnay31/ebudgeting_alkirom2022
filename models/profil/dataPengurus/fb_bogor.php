<div class="tab-pane fade profile-edit pt-3" id="profile-humas">
    <section class="section dashboard">
        <div class="row">
            <?php
                $no = 1;
                while ($data_mFB_bogor = $mFB_bogor->fetch_assoc()) { ?>
            <!-- Card -->
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card customers-card">
                    <div class="card-body bg">
                        <h5 class="card-title">Manager <?= $data_mFB_bogor["posisi"] ?> <?= $data_mFB_bogor["cabang"] ?>
                        </h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <div class="ps-3">
                                <h6><?= ucwords($data_mFB_bogor["nama"]) ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Card -->
            <?php } ?>
        </div>

        <h5 class="card-title">Pengurus | <?= $akun_bogor ?> Akun</h5>
        <div class="row">
            <?php
                $no = 1;
                while ($data_AFB_bogor = $AFB_bogor->fetch_assoc()) { ?>
            <!-- Card -->
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card revenue-card">
                    <div class="card-body bg">
                        <h5 class="card-title"><?= $data_AFB_bogor["posisi"] ?></h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <div class="ps-3">
                                <h6><?= ucwords($data_AFB_bogor["nama"]) ?></h6>
                                <?php
                                $query2   = mysqli_query($conn, "SELECT * FROM data_akun WHERE pemegang = '$data_AFB_bogor[nama]' ORDER BY `nama_akun` ASC ");
                                ?>

                                <?php
                                $no = 1;
                                while ($data2 = mysqli_fetch_array($query2)) { ?>
                                <span class="akun"><b>Akun <?= $no++ ?>:</b>
                                    <span class="akun"><?= ucwords($data2["nama_akun"]) ?></span>
                                </span>
                                <br>

                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Card -->
            <?php } ?>
        </div>
    </section>
</div>