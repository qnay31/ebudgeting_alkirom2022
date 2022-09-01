<div class="card-body">
    <h5 class="card-title">DATABASE LAPORAN</h5>
    <?php
        $_SESSION["mediaLaporan"] = $_GET["mediaLaporan"];
    ?>
    <?php if ($_GET["mediaLaporan"] == "") { ?>
    <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
    <div class="media-select">
        <span class="facebook">
            <a class="btn"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia&mediaLaporan=facebook">Facebook</a>
        </span>
        <span class="instagram">
            <a class="btn"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia&mediaLaporan=instagram">Instagram</a>
        </span>
    </div>
    <?php } ?>

    <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>

    <?php } else { ?>
    <div class="table-responsive">
        <div class="text-center">
            <label for="">
                <?php if ($_GET["mediaLaporan"] == "instagram") { ?>
                <b style="color: black;">Laporan Akun INSTAGRAM</b>

                <?php } elseif ($_GET["mediaLaporan"] == "facebook") { ?>
                <b style="color: black;">Laporan Akun FACEBOOK</b>

                <?php } else { ?>
                <b style="color: black;">Laporan Akun Media Sosial</b>
                <?php } ?>
                <hr>
            </label>
        </div>

        <table id="tabel-database_lapMedia" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Pengurus</th>
                    <th scope="col">Team</th>
                    <th scope="col">Akun</th>
                    <th scope="col">Tgl Laporan</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Keterangan</th>
                    <?php if ($_SESSION["id_pengurus"] == "instagram" || $_SESSION["id_pengurus"] == "manager_instagram" || $_GET["mediaLaporan"] == "instagram") { ?>
                    <th scope="col">Total Pengikut</th>
                    <th scope="col">Total Mengikuti</th>
                    <th scope="col">Pengikut Terbaru</th>
                    <th scope="col">Mengikuti terbaru</th>

                    <?php } else { ?>
                    <th scope="col">Total Teman</th>
                    <th scope="col">Add Pertemanan</th>
                    <th scope="col">Teman Baru</th>
                    <th scope="col">Hapus Teman</th>
                    <?php } ?>
                    <th scope="col">Total Serangan</th>
                    <th scope="col">Respon</th>
                    <th scope="col">Minta Norek</th>
                    <th scope="col">Tanya Alamat</th>
                    <th scope="col">Insya Allah</th>
                    <th scope="col">B. Bisa Bantu</th>
                    <th scope="col">Tidak Respon</th>
                    <th scope="col">Donatur</th>
                    <th scope="col">Total Income</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="8">Total</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>
    <?php } ?>

    <?php } else { ?>
    <div class="media-select">
        <?php if ($_GET["mediaLaporan"] == "instagram") { ?>
        <span class="facebook">
            <a class="btn"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia&mediaLaporan=facebook">Facebook</a>
        </span>

        <?php } else { ?>
        <span class="instagram">
            <a class="btn"
                href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia&mediaLaporan=instagram">Instagram</a>
        </span>
        <?php } ?>
    </div>

    <div class="table-responsive">
        <div class="text-center">
            <label for="">
                <?php if ($_GET["mediaLaporan"] == "instagram") { ?>
                <b style="color: black;">Laporan Akun INSTAGRAM</b>

                <?php } elseif ($_GET["mediaLaporan"] == "facebook") { ?>
                <b style="color: black;">Laporan Akun FACEBOOK</b>

                <?php } else { ?>
                <b style="color: black;">Laporan Akun Media Sosial</b>
                <?php } ?>
                <hr>
            </label>
        </div>

        <table id="tabel-database_lapMedia" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Pengurus</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Akun</th>
                    <th scope="col">Tgl Laporan</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Keterangan</th>
                    <?php if ($_SESSION["id_pengurus"] == "instagram" || $_SESSION["id_pengurus"] == "manager_instagram" || $_GET["mediaLaporan"] == "instagram") { ?>
                    <th scope="col">Total Pengikut</th>
                    <th scope="col">Total Mengikuti</th>
                    <th scope="col">Pengikut Terbaru</th>
                    <th scope="col">Mengikuti terbaru</th>

                    <?php } else { ?>
                    <th scope="col">Total Teman</th>
                    <th scope="col">Add Pertemanan</th>
                    <th scope="col">Teman Baru</th>
                    <th scope="col">Hapus Teman</th>
                    <?php } ?>
                    <th scope="col">Total Serangan</th>
                    <th scope="col">Respon</th>
                    <th scope="col">Minta Norek</th>
                    <th scope="col">Tanya Alamat</th>
                    <th scope="col">Insya Allah</th>
                    <th scope="col">B. Bisa Bantu</th>
                    <th scope="col">Tidak Respon</th>
                    <th scope="col">Donatur</th>
                    <th scope="col">Total Income</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="8">Total</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>
    <?php } ?>
</div>