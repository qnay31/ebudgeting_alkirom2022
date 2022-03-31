<div class="card-body">
    <h5 class="card-title">GRAFIK <?= strtoupper($judul) ?></h5>

    <!-- Bar Chart -->
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <h5 class="card-title text-center"><?= strtoupper($judul) ?></h5>
                <div class="chart-bar">
                    <canvas id="chartBar_global_<?= $id_management ?>"></canvas>
                </div>
            </div>
        </div>
    </div>

    <?php if ($id_management == "aset_yayasan") { ?>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <h5 class="card-title text-center">SUB KATEGORI <?= strtoupper($judul) ?></h5>
                <div class="chart-bar">
                    <canvas id="chartBar_sub_<?= $id_management ?>"></canvas>
                </div>
            </div>
        </div>
    </div>

    <?php } elseif ($id_management == "maintenance") { ?>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <h5 class="card-title text-center">SUB KATEGORI <?= strtoupper($judul) ?></h5>
                <div class="chart-bar">
                    <canvas id="chartBar_sub_<?= $id_management ?>"></canvas>
                </div>
            </div>
        </div>
    </div>
    <?php } else { ?>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <h5 class="card-title text-center">SUB CABANG <?= strtoupper($judul) ?></h5>
                <div class="chart-bar">
                    <canvas id="chartBar_sub_<?= $id_management ?>"></canvas>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>


    <?php if ($id_management == "aset_yayasan") { ?>
    <div class="row">
        <div class="col-xl-6 col-md-12">
            <div class="card">
                <h5 class="card-title text-center">PEMBELIAN BARANG</h5>
                <div class="chart-bar">
                    <canvas id="chartBar_pembelian_<?= $id_management ?>"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-12">
            <div class="card">
                <h5 class="card-title text-center">PEMBANGUNAN</h5>
                <div class="chart-bar">
                    <canvas id="chartBar_pembangunan_<?= $id_management ?>"></canvas>
                </div>
            </div>
        </div>
    </div>

    <?php } else { ?>
    <?php if ($id_management == "maintenance") { ?>
    <div class="row">
        <div class="col-xl-6 col-md-12">
            <div class="card">
                <h5 class="card-title text-center"><?= strtoupper($judul) ?> GEDUNG</h5>
                <div class="chart-bar">
                    <canvas id="chartBar_gedung_<?= $id_management ?>"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-12">
            <div class="card">
                <h5 class="card-title text-center"><?= strtoupper($judul) ?> ASET</h5>
                <div class="chart-bar">
                    <canvas id="chartBar_aset_<?= $id_management ?>"></canvas>
                </div>
            </div>
        </div>
    </div>
    <?php } else { ?>
    <div class="row">
        <div class="col-xl-6 col-md-12">
            <div class="card">
                <h5 class="card-title text-center"><?= strtoupper($judul) ?> DEPOK</h5>
                <div class="chart-bar">
                    <canvas id="chartBar_depok_<?= $id_management ?>"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-12">
            <div class="card">
                <h5 class="card-title text-center"><?= strtoupper($judul) ?> BOGOR</h5>
                <div class="chart-bar">
                    <canvas id="chartBar_bogor_<?= $id_management ?>"></canvas>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <?php } ?>
    <!-- End Bar Chart -->
</div>