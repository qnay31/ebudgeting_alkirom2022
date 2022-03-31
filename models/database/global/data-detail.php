<div class="card-body">
    <h5 class="card-title">DATA DETAIL YAYASAN</h5>
    <?php if ($_GET["id_lapGlobal"] == "") { ?>
    <div class="row justify-content-start">
        <?php if ($id_global == "program") { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global"
                    class="btn btn-primary bg-success">Database
                    Global</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=logistik"
                    class="btn btn-primary">Logistik Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=aset_yayasan"
                    class="btn btn-primary">Aset Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=uang_makan"
                    class="btn btn-primary">Uang Makan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=gaji_karyawan"
                    class="btn btn-primary">Gaji Karyawan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=anggaran_lain"
                    class="btn btn-primary">Biaya Lainnya</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=maintenance"
                    class="btn btn-primary">Maintenance Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=operasional_yayasan"
                    class="btn btn-primary">Operasional Yayasan</a>
            </div>
        </div>

        <?php if ($_SESSION["id_pengurus"] == "kepala_pengajuan") { ?>

        <?php } else { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=income"
                    class="btn btn-primary">Pemasukan Media</a>
            </div>
        </div>

        <?php } ?>

        <?php } elseif ($id_global == "logistik") { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=program"
                    class="btn btn-primary">Program Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global"
                    class="btn btn-primary bg-success">Database
                    Global</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=aset_yayasan"
                    class="btn btn-primary">Aset Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=uang_makan"
                    class="btn btn-primary">Uang Makan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=gaji_karyawan"
                    class="btn btn-primary">Gaji Karyawan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=anggaran_lain"
                    class="btn btn-primary">Biaya Lainnya</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=maintenance"
                    class="btn btn-primary">Maintenance Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=operasional_yayasan"
                    class="btn btn-primary">Operasional Yayasan</a>
            </div>
        </div>

        <?php if ($_SESSION["id_pengurus"] == "kepala_pengajuan") { ?>

        <?php } else { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=income"
                    class="btn btn-primary">Pemasukan Media</a>
            </div>
        </div>
        <?php } ?>

        <?php } elseif ($id_global == "aset_yayasan") { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=program"
                    class="btn btn-primary">Program Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=logistik"
                    class="btn btn-primary">Logistik Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global"
                    class="btn btn-primary bg-success">Database Global</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=uang_makan"
                    class="btn btn-primary">Uang Makan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=gaji_karyawan"
                    class="btn btn-primary">Gaji Karyawan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=anggaran_lain"
                    class="btn btn-primary">Biaya Lainnya</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=maintenance"
                    class="btn btn-primary">Maintenance Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=operasional_yayasan"
                    class="btn btn-primary">Operasional Yayasan</a>
            </div>
        </div>

        <?php if ($_SESSION["id_pengurus"] == "kepala_pengajuan") { ?>

        <?php } else { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=income"
                    class="btn btn-primary">Pemasukan Media</a>
            </div>
        </div>
        <?php } ?>

        <?php } elseif ($id_global == "uang_makan") { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=program"
                    class="btn btn-primary">Program Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=logistik"
                    class="btn btn-primary">Logistik Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=aset_yayasan"
                    class="btn btn-primary">Aset Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global"
                    class="btn btn-primary bg-success">Database Global</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=gaji_karyawan"
                    class="btn btn-primary">Gaji Karyawan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=anggaran_lain"
                    class="btn btn-primary">Biaya Lainnya</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=maintenance"
                    class="btn btn-primary">Maintenance Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=operasional_yayasan"
                    class="btn btn-primary">Operasional Yayasan</a>
            </div>
        </div>

        <?php if ($_SESSION["id_pengurus"] == "kepala_pengajuan") { ?>

        <?php } else { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=income"
                    class="btn btn-primary">Pemasukan Media</a>
            </div>
        </div>
        <?php } ?>

        <?php } elseif ($id_global == "gaji_karyawan") { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=program"
                    class="btn btn-primary">Program Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=logistik"
                    class="btn btn-primary">Logistik Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=aset_yayasan"
                    class="btn btn-primary">Aset Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=uang_makan"
                    class="btn btn-primary">Uang Makan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global"
                    class="btn btn-primary bg-success">Database Global</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=anggaran_lain"
                    class="btn btn-primary">Biaya Lainnya</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=maintenance"
                    class="btn btn-primary">Maintenance Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=operasional_yayasan"
                    class="btn btn-primary">Operasional Yayasan</a>
            </div>
        </div>

        <?php if ($_SESSION["id_pengurus"] == "kepala_pengajuan") { ?>

        <?php } else { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=income"
                    class="btn btn-primary">Pemasukan Media</a>
            </div>
        </div>

        <?php } ?>

        <?php } elseif ($id_global == "anggaran_lain") { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=program"
                    class="btn btn-primary">Program Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=logistik"
                    class="btn btn-primary">Logistik Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=aset_yayasan"
                    class="btn btn-primary">Aset Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=uang_makan"
                    class="btn btn-primary">Uang Makan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=gaji_karyawan"
                    class="btn btn-primary">Gaji Karyawan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global"
                    class="btn btn-primary bg-success">Database Global</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=maintenance"
                    class="btn btn-primary">Maintenance Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=operasional_yayasan"
                    class="btn btn-primary">Operasional Yayasan</a>
            </div>
        </div>

        <?php if ($_SESSION["id_pengurus"] == "kepala_pengajuan") { ?>

        <?php } else { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=income"
                    class="btn btn-primary">Pemasukan Media</a>
            </div>
        </div>
        <?php } ?>

        <?php } elseif ($id_global == "maintenance") { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=program"
                    class="btn btn-primary">Program Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=logistik"
                    class="btn btn-primary">Logistik Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=aset_yayasan"
                    class="btn btn-primary">Aset Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=uang_makan"
                    class="btn btn-primary">Uang Makan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=gaji_karyawan"
                    class="btn btn-primary">Gaji Karyawan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=anggaran_lain"
                    class="btn btn-primary">Biaya Lainnya</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global"
                    class="btn btn-primary bg-success">Database Global</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=operasional_yayasan"
                    class="btn btn-primary">Operasional Yayasan</a>
            </div>
        </div>

        <?php if ($_SESSION["id_pengurus"] == "kepala_pengajuan") { ?>

        <?php } else { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=income"
                    class="btn btn-primary">Pemasukan Media</a>
            </div>
        </div>
        <?php } ?>

        <?php } elseif ($id_global == "operasional_yayasan") { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=program"
                    class="btn btn-primary">Program Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=logistik"
                    class="btn btn-primary">Logistik Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=aset_yayasan"
                    class="btn btn-primary">Aset Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=uang_makan"
                    class="btn btn-primary">Uang Makan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=gaji_karyawan"
                    class="btn btn-primary">Gaji Karyawan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=anggaran_lain"
                    class="btn btn-primary">Biaya Lainnya</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=maintenance"
                    class="btn btn-primary">Maintenance Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global"
                    class="btn btn-primary bg-success">Database Global</a>
            </div>
        </div>

        <?php if ($_SESSION["id_pengurus"] == "kepala_pengajuan") { ?>

        <?php } else { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=income"
                    class="btn btn-primary">Pemasukan Media</a>
            </div>
        </div>
        <?php } ?>

        <?php } elseif ($id_global == "income") { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=program"
                    class="btn btn-primary">Program Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=logistik"
                    class="btn btn-primary">Logistik Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=aset_yayasan"
                    class="btn btn-primary">Aset Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=uang_makan"
                    class="btn btn-primary">Uang Makan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=gaji_karyawan"
                    class="btn btn-primary">Gaji Karyawan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=anggaran_lain"
                    class="btn btn-primary">Biaya Lainnya</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=maintenance"
                    class="btn btn-primary">Maintenance Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=operasional_yayasan"
                    class="btn btn-primary">Operasional Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global"
                    class="btn btn-primary bg-success">Database Global</a>
            </div>
        </div>

        <?php } else { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=program"
                    class="btn btn-primary">Program Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=logistik"
                    class="btn btn-primary">Logistik Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=aset_yayasan"
                    class="btn btn-primary">Aset Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=uang_makan"
                    class="btn btn-primary">Uang Makan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=gaji_karyawan"
                    class="btn btn-primary">Gaji Karyawan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=anggaran_lain"
                    class="btn btn-primary">Biaya Lainnya</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=maintenance"
                    class="btn btn-primary">Maintenance Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=operasional_yayasan"
                    class="btn btn-primary">Operasional Yayasan</a>
            </div>
        </div>

        <?php if ($_SESSION["id_pengurus"] == "kepala_pengajuan") { ?>

        <?php } else { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_global=income"
                    class="btn btn-primary">Pemasukan Media</a>
            </div>
        </div>
        <?php } ?>
        <?php } ?>
    </div>

    <?php } else { ?>
    <div class="row justify-content-start">
        <?php if ($id_global == "program") { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_lapGlobal=2021"
                    class="btn btn-primary bg-success">Database Global</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=logistik"
                    class="btn btn-primary">Logistik Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=humas"
                    class="btn btn-primary">Humas Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=aset_yayasan"
                    class="btn btn-primary">Aset Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=baksos"
                    class="btn btn-primary">Bakti Sosial Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=gaji"
                    class="btn btn-primary">Gaji Karyawan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=lainnya"
                    class="btn btn-primary">Biaya Lainnya</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=maintenance"
                    class="btn btn-primary">Maintenance Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=operasional_yayasan"
                    class="btn btn-primary">Operasional Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=pemasukan"
                    class="btn btn-primary">Pemasukan Humas</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=income_new"
                    class="btn btn-primary">Pemasukan Media</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=cashback"
                    class="btn btn-primary">Cashback Yayasan</a>
            </div>
        </div>

        <?php } elseif ($id_global == "logistik") { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=program"
                    class="btn btn-primary">Program Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_lapGlobal=2021"
                    class="btn btn-primary bg-success">Database Global</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=humas"
                    class="btn btn-primary">Humas Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=aset_yayasan"
                    class="btn btn-primary">Aset Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=baksos"
                    class="btn btn-primary">Bakti Sosial Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=gaji"
                    class="btn btn-primary">Gaji Karyawan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=lainnya"
                    class="btn btn-primary">Biaya Lainnya</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=maintenance"
                    class="btn btn-primary">Maintenance Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=operasional_yayasan"
                    class="btn btn-primary">Operasional Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=pemasukan"
                    class="btn btn-primary">Pemasukan Humas</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=income_new"
                    class="btn btn-primary">Pemasukan Media</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=cashback"
                    class="btn btn-primary">Cashback Yayasan</a>
            </div>
        </div>

        <?php } elseif ($id_global == "humas") { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=program"
                    class="btn btn-primary">Program Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=logistik"
                    class="btn btn-primary">Logistik Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_lapGlobal=2021"
                    class="btn btn-primary bg-success">Database Global</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=aset_yayasan"
                    class="btn btn-primary">Aset Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=baksos"
                    class="btn btn-primary">Bakti Sosial Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=gaji"
                    class="btn btn-primary">Gaji Karyawan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=lainnya"
                    class="btn btn-primary">Biaya Lainnya</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=maintenance"
                    class="btn btn-primary">Maintenance Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=operasional_yayasan"
                    class="btn btn-primary">Operasional Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=pemasukan"
                    class="btn btn-primary">Pemasukan Humas</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=income_new"
                    class="btn btn-primary">Pemasukan Media</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=cashback"
                    class="btn btn-primary">Cashback Yayasan</a>
            </div>
        </div>

        <?php } elseif ($id_global == "aset_yayasan") { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=program"
                    class="btn btn-primary">Program Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=logistik"
                    class="btn btn-primary">Logistik Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=humas"
                    class="btn btn-primary">Humas Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_lapGlobal=2021"
                    class="btn btn-primary bg-success">Database Global</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=baksos"
                    class="btn btn-primary">Bakti Sosial Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=gaji"
                    class="btn btn-primary">Gaji Karyawan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=lainnya"
                    class="btn btn-primary">Biaya Lainnya</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=maintenance"
                    class="btn btn-primary">Maintenance Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=operasional_yayasan"
                    class="btn btn-primary">Operasional Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=pemasukan"
                    class="btn btn-primary">Pemasukan Humas</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=income_new"
                    class="btn btn-primary">Pemasukan Media</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=cashback"
                    class="btn btn-primary">Cashback Yayasan</a>
            </div>
        </div>

        <?php } elseif ($id_global == "baksos") { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=program"
                    class="btn btn-primary">Program Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=logistik"
                    class="btn btn-primary">Logistik Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=humas"
                    class="btn btn-primary">Humas Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=aset_yayasan"
                    class="btn btn-primary">Aset Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_lapGlobal=2021"
                    class="btn btn-primary bg-success">Database Global</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=gaji"
                    class="btn btn-primary">Gaji Karyawan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=lainnya"
                    class="btn btn-primary">Biaya Lainnya</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=maintenance"
                    class="btn btn-primary">Maintenance Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=operasional_yayasan"
                    class="btn btn-primary">Operasional Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=pemasukan"
                    class="btn btn-primary">Pemasukan Humas</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=income_new"
                    class="btn btn-primary">Pemasukan Media</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=cashback"
                    class="btn btn-primary">Cashback Yayasan</a>
            </div>
        </div>

        <?php } elseif ($id_global == "gaji") { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=program"
                    class="btn btn-primary">Program Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=logistik"
                    class="btn btn-primary">Logistik Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=humas"
                    class="btn btn-primary">Humas Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=aset_yayasan"
                    class="btn btn-primary">Aset Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=baksos"
                    class="btn btn-primary">Bakti Sosial Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_lapGlobal=2021"
                    class="btn btn-primary bg-success">Database Global</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=lainnya"
                    class="btn btn-primary">Biaya Lainnya</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=maintenance"
                    class="btn btn-primary">Maintenance Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=operasional_yayasan"
                    class="btn btn-primary">Operasional Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=pemasukan"
                    class="btn btn-primary">Pemasukan Humas</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=income_new"
                    class="btn btn-primary">Pemasukan Media</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=cashback"
                    class="btn btn-primary">Cashback Yayasan</a>
            </div>
        </div>

        <?php } elseif ($id_global == "lainnya") { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=program"
                    class="btn btn-primary">Program Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=logistik"
                    class="btn btn-primary">Logistik Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=humas"
                    class="btn btn-primary">Humas Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=aset_yayasan"
                    class="btn btn-primary">Aset Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=baksos"
                    class="btn btn-primary">Bakti Sosial Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=gaji"
                    class="btn btn-primary">Gaji Karyawan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_lapGlobal=2021"
                    class="btn btn-primary bg-success">Database Global</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=maintenance"
                    class="btn btn-primary">Maintenance Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=operasional_yayasan"
                    class="btn btn-primary">Operasional Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=pemasukan"
                    class="btn btn-primary">Pemasukan Humas</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=income_new"
                    class="btn btn-primary">Pemasukan Media</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=cashback"
                    class="btn btn-primary">Cashback Yayasan</a>
            </div>
        </div>

        <?php } elseif ($id_global == "maintenance") { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=program"
                    class="btn btn-primary">Program Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=logistik"
                    class="btn btn-primary">Logistik Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=humas"
                    class="btn btn-primary">Humas Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=aset_yayasan"
                    class="btn btn-primary">Aset Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=baksos"
                    class="btn btn-primary">Bakti Sosial Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=gaji"
                    class="btn btn-primary">Gaji Karyawan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=lainnya"
                    class="btn btn-primary">Biaya Lainnya</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_lapGlobal=2021"
                    class="btn btn-primary bg-success">Database Global</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=operasional_yayasan"
                    class="btn btn-primary">Operasional Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=pemasukan"
                    class="btn btn-primary">Pemasukan Humas</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=income_new"
                    class="btn btn-primary">Pemasukan Media</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=cashback"
                    class="btn btn-primary">Cashback Yayasan</a>
            </div>
        </div>

        <?php } elseif ($id_global == "operasional_yayasan") { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=program"
                    class="btn btn-primary">Program Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=logistik"
                    class="btn btn-primary">Logistik Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=humas"
                    class="btn btn-primary">Humas Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=aset_yayasan"
                    class="btn btn-primary">Aset Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=baksos"
                    class="btn btn-primary">Bakti Sosial Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=gaji"
                    class="btn btn-primary">Gaji Karyawan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=lainnya"
                    class="btn btn-primary">Biaya Lainnya</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=maintenance"
                    class="btn btn-primary">Maintenance Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_lapGlobal=2021"
                    class="btn btn-primary bg-success">Database Global</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=pemasukan"
                    class="btn btn-primary">Pemasukan Humas</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=income_new"
                    class="btn btn-primary">Pemasukan Media</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=cashback"
                    class="btn btn-primary">Cashback Yayasan</a>
            </div>
        </div>

        <?php } elseif ($id_global == "pemasukan") { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=program"
                    class="btn btn-primary">Program Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=logistik"
                    class="btn btn-primary">Logistik Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=humas"
                    class="btn btn-primary">Humas Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=aset_yayasan"
                    class="btn btn-primary">Aset Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=baksos"
                    class="btn btn-primary">Bakti Sosial Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=gaji"
                    class="btn btn-primary">Gaji Karyawan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=lainnya"
                    class="btn btn-primary">Biaya Lainnya</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=maintenance"
                    class="btn btn-primary">Maintenance Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=operasional_yayasan"
                    class="btn btn-primary">Operasional Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_lapGlobal=2021"
                    class="btn btn-primary bg-success">Database Global</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=income_new"
                    class="btn btn-primary">Pemasukan Media</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=cashback"
                    class="btn btn-primary">Cashback Yayasan</a>
            </div>
        </div>

        <?php } elseif ($id_global == "income_new") { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=program"
                    class="btn btn-primary">Program Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=logistik"
                    class="btn btn-primary">Logistik Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=humas"
                    class="btn btn-primary">Humas Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=aset_yayasan"
                    class="btn btn-primary">Aset Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=baksos"
                    class="btn btn-primary">Bakti Sosial Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=gaji"
                    class="btn btn-primary">Gaji Karyawan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=lainnya"
                    class="btn btn-primary">Biaya Lainnya</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=maintenance"
                    class="btn btn-primary">Maintenance Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=operasional_yayasan"
                    class="btn btn-primary">Operasional Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=pemasukan"
                    class="btn btn-primary">Pemasukan Humas</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_lapGlobal=2021"
                    class="btn btn-primary bg-success">Database Global</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=cashback"
                    class="btn btn-primary">Cashback Yayasan</a>
            </div>
        </div>

        <?php } elseif ($id_global == "cashback") { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=program"
                    class="btn btn-primary">Program Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=logistik"
                    class="btn btn-primary">Logistik Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=humas"
                    class="btn btn-primary">Humas Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=aset_yayasan"
                    class="btn btn-primary">Aset Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=baksos"
                    class="btn btn-primary">Bakti Sosial Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=gaji"
                    class="btn btn-primary">Gaji Karyawan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=lainnya"
                    class="btn btn-primary">Biaya Lainnya</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=maintenance"
                    class="btn btn-primary">Maintenance Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=operasional_yayasan"
                    class="btn btn-primary">Operasional Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=pemasukan"
                    class="btn btn-primary">Pemasukan Humas</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=income_new"
                    class="btn btn-primary">Pemasukan Media</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global&id_lapGlobal=2021"
                    class="btn btn-primary bg-success">Database Global</a>
            </div>
        </div>

        <?php } else { ?>
        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=program"
                    class="btn btn-primary">Program Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=logistik"
                    class="btn btn-primary">Logistik Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=humas"
                    class="btn btn-primary">Humas Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=aset_yayasan"
                    class="btn btn-primary">Aset Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=baksos"
                    class="btn btn-primary">Bakti Sosial Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=gaji"
                    class="btn btn-primary">Gaji Karyawan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=lainnya"
                    class="btn btn-primary">Biaya Lainnya</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=maintenance"
                    class="btn btn-primary">Maintenance Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=operasional_yayasan"
                    class="btn btn-primary">Operasional Yayasan</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=pemasukan"
                    class="btn btn-primary">Pemasukan Humas</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=income_new"
                    class="btn btn-primary">Pemasukan Media</a>
            </div>
        </div>

        <div class="col-xxl-1 col-md-4 mb-2">
            <div class="button">
                <a href="<?= $_SESSION["username"] ?>.php?id_lapGlobal=2021&id_database=database_global&id_global=cashback"
                    class="btn btn-primary">Cashback Yayasan</a>
            </div>
        </div>
        <?php } ?>
    </div>
    <?php } ?>

</div>