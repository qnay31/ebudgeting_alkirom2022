<?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "kepala_pengajuan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
<!-- Grafik -->
<div class="col-xl-6 col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Grafik <span>/Program</span>
                <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_program">
                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Lihat detail laporan">
                    </i>
                </a>
            </h5>

            <!-- Line Chart -->
            <div class="chart-bar">
                <canvas id="chartBar_global_program"></canvas>
            </div>
            <!-- End Line Chart -->
        </div>
    </div>
</div>

<div class="col-xl-6 col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Grafik <span>/PaudQu El-ZamZam</span>
                <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_paudqu">
                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Lihat detail laporan">
                    </i>
                </a>
            </h5>

            <!-- Line Chart -->
            <div class="chart-bar">
                <canvas id="chartBar_global_paudqu"></canvas>
            </div>
            <!-- End Line Chart -->
        </div>
    </div>
</div>

<div class="col-xl-6 col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Grafik <span>/Logistik</span>
                <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_logistik">
                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Lihat detail laporan">
                    </i>
                </a>
            </h5>

            <!-- Line Chart -->
            <div class="chart-bar">
                <canvas id="chartBar_global_logistik"></canvas>
            </div>
            <!-- End Line Chart -->
        </div>
    </div>
</div>

<div class="col-xl-6 col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Grafik <span>/Aset Yayasan</span>
                <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_grafik=grafik_aset_yayasan">
                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Lihat detail laporan">
                    </i>
                </a>
            </h5>

            <!-- Line Chart -->
            <div class="chart-bar">
                <canvas id="chartBar_global_aset_yayasan"></canvas>
            </div>
            <!-- End Line Chart -->
        </div>
    </div>
</div>

<div class="col-xl-6 col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Grafik <span>/Uang Makan</span>
                <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_grafik=grafik_uang_makan">
                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Lihat detail laporan">
                    </i>
                </a>
            </h5>

            <!-- Line Chart -->
            <div class="chart-bar">
                <canvas id="chartBar_global_uang_makan"></canvas>
            </div>
            <!-- End Line Chart -->
        </div>
    </div>
</div>

<div class="col-xl-6 col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Grafik <span>/Gaji Karyawan</span>
                <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_grafik=grafik_gaji_karyawan">
                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Lihat detail laporan">
                    </i>
                </a>
            </h5>

            <!-- Line Chart -->
            <div class="chart-bar">
                <canvas id="chartBar_global_gaji_karyawan"></canvas>
            </div>
            <!-- End Line Chart -->
        </div>
    </div>
</div>

<div class="col-xl-6 col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Grafik <span>/Biaya Lainnya</span>
                <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_grafik=grafik_anggaran_lain">
                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Lihat detail laporan">
                    </i>
                </a>
            </h5>

            <!-- Line Chart -->
            <div class="chart-bar">
                <canvas id="chartBar_global_anggaran_lain"></canvas>
            </div>
            <!-- End Line Chart -->
        </div>
    </div>
</div>

<div class="col-xl-6 col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Grafik <span>/Maintenance</span>
                <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_grafik=grafik_maintenance">
                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Lihat detail laporan">
                    </i>
                </a>
            </h5>

            <!-- Line Chart -->
            <div class="chart-bar">
                <canvas id="chartBar_global_maintenance"></canvas>
            </div>
            <!-- End Line Chart -->
        </div>
    </div>
</div>

<div class="col-xl-6 col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Grafik <span>/Operasional Yayasan</span>
                <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_grafik=grafik_operasional_yayasan">
                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Lihat detail laporan">
                    </i>
                </a>
            </h5>

            <!-- Line Chart -->
            <div class="chart-bar">
                <canvas id="chartBar_global_operasional_yayasan"></canvas>
            </div>
            <!-- End Line Chart -->
        </div>
    </div>
</div>

<?php if ($_SESSION["id_pengurus"] == "kepala_pengajuan") { ?>
<?php } else { ?>
<div class="col-xl-6 col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Grafik <span>/Income Media Sosial</span>
                <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_pemasukanMedia">
                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Lihat detail income">
                    </i>
                </a>
            </h5>

            <!-- Line Chart -->
            <div class="chart-bar">
                <canvas id="chartBar_global_incMedia"></canvas>
            </div>
            <!-- End Line Chart -->
        </div>
    </div>
</div>
<?php } ?>

<!-- End Grafik -->
<?php } elseif ($_SESSION["id_pengurus"] == "kepala_cabang") { ?>
<div class="col-xl-6 col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Grafik <span>/Program</span>
                <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_program">
                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Lihat detail laporan">
                    </i>
                </a>
            </h5>

            <!-- Line Chart -->
            <div class="chart-bar">
                <canvas id="chartBar_bogor_program"></canvas>
            </div>
            <!-- End Line Chart -->
        </div>
    </div>
</div>

<div class="col-xl-6 col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Grafik <span>/Logistik</span>
                <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_logistik">
                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Lihat detail laporan">
                    </i>
                </a>
            </h5>

            <!-- Line Chart -->
            <div class="chart-bar">
                <canvas id="chartBar_bogor_logistik"></canvas>
            </div>
            <!-- End Line Chart -->
        </div>
    </div>
</div>

<div class="col-xl-6 col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Grafik <span>/Income Media Sosial</span>
                <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_pemasukanMedia">
                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Lihat detail income">
                    </i>
                </a>
            </h5>

            <!-- Line Chart -->
            <div class="chart-bar">
                <canvas id="chartBar_bogor_incMedia"></canvas>
            </div>
            <!-- End Line Chart -->
        </div>
    </div>
</div>

<?php } elseif ($_SESSION["id_pengurus"] == "kepala_income") { ?>
<div class="col-xl-12 col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Grafik <span>/Income Media Sosial</span>
                <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_pemasukanMedia">
                    <i class="bi bi-folder-symlink-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Lihat detail income">
                    </i>
                </a>
            </h5>

            <!-- Line Chart -->
            <div class="chart-bar">
                <canvas id="chartBar_global_incMedia"></canvas>
            </div>
            <!-- End Line Chart -->
        </div>
    </div>
</div>

<div class="col-xl-6 col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Grafik <span>/Income Media Per Gedung</span></h5>

            <!-- Line Chart -->
            <div class="chart-bar">
                <canvas id="chartBar_sub_income"></canvas>
            </div>
            <!-- End Line Chart -->
        </div>
    </div>
</div>

<div class="col-xl-6 col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Grafik <span>/Income Non Resi</span></h5>

            <!-- Line Chart -->
            <div class="chart-bar">
                <canvas id="chartBar_nonResi_incMedia"></canvas>
            </div>
            <!-- End Line Chart -->
        </div>
    </div>
</div>

<?php } else { ?>
<?php } ?>