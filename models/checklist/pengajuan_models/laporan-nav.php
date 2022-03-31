<nav class="stroke">
    <ul>
        <?php if ($_GET["id_checklist"] == "checklist_pengajuan" || $_GET["id_checklist"] == "checklist_verifikasi" || $_GET["id_checklist"] == "checklist_laporan") { ?>
        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuan">Pengajuan
                <?php if ($s > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s ?></span>
                <?php } ?>
            </a>
        </li>

        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_verifikasi">Verifikasi
                <?php if ($s2 > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s2 ?></span>
                <?php } ?>
            </a>
        </li>

        <li>
            <a class="active" href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_laporan">Laporan
                <?php if ($s3 > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s3 ?></span>
                <?php } ?>
            </a>
        </li>
        
        <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanPaudqu" || $_GET["id_checklist"] == "checklist_verifikasiPaudqu" || $_GET["id_checklist"] == "checklist_laporanPaudqu") { ?>
        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanPaudqu">Pengajuan
                <?php if ($s > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s ?></span>
                <?php } ?>
            </a>
        </li>

        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_verifikasiPaudqu">Verifikasi
                <?php if ($s2 > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s2 ?></span>
                <?php } ?>
            </a>
        </li>

        <li>
            <a class="active" href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_laporanPaudqu">Laporan
                <?php if ($s3 > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s3 ?></span>
                <?php } ?>
            </a>
        </li>

        <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanAset" || $_GET["id_checklist"] == "checklist_verifikasiAset" || $_GET["id_checklist"] == "checklist_laporanAset") { ?>
        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAset">Pengajuan
                <?php if ($s > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s ?></span>
                <?php } ?>
            </a>
        </li>

        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_verifikasiAset">Verifikasi
                <?php if ($s2 > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s2 ?></span>
                <?php } ?>
            </a>
        </li>

        <li>
            <a class="active" href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_laporanAset">Laporan
                <?php if ($s3 > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s3 ?></span>
                <?php } ?>
            </a>
        </li>

        <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanUangmakan" || $_GET["id_checklist"] == "checklist_verifikasiUangmakan" || $_GET["id_checklist"] == "checklist_laporanUangmakan") { ?>
        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanUangmakan">Pengajuan
                <?php if ($s > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s ?></span>
                <?php } ?>
            </a>
        </li>

        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_verifikasiUangmakan">Verifikasi
                <?php if ($s2 > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s2 ?></span>
                <?php } ?>
            </a>
        </li>

        <li>
            <a class="active" href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_laporanUangmakan">Laporan
                <?php if ($s3 > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s3 ?></span>
                <?php } ?>
            </a>
        </li>

        <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanGajikaryawan" || $_GET["id_checklist"] == "checklist_verifikasiGajikaryawan" || $_GET["id_checklist"] == "checklist_laporanGajikaryawan") { ?>
        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanGajikaryawan">Pengajuan
                <?php if ($s > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s ?></span>
                <?php } ?>
            </a>
        </li>

        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_verifikasiGajikaryawan">Verifikasi
                <?php if ($s2 > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s2 ?></span>
                <?php } ?>
            </a>
        </li>

        <li>
            <a class="active" href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_laporanGajikaryawan">Laporan
                <?php if ($s3 > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s3 ?></span>
                <?php } ?>
            </a>
        </li>

        <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanAnggaranlain" || $_GET["id_checklist"] == "checklist_verifikasiAnggaranlain" || $_GET["id_checklist"] == "checklist_laporanAnggaranlain") { ?>
        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAnggaranlain">Pengajuan
                <?php if ($s > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s ?></span>
                <?php } ?>
            </a>
        </li>

        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_verifikasiAnggaranlain">Verifikasi
                <?php if ($s2 > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s2 ?></span>
                <?php } ?>
            </a>
        </li>

        <li>
            <a class="active" href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_laporanAnggaranlain">Laporan
                <?php if ($s3 > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s3 ?></span>
                <?php } ?>
            </a>
        </li>

        <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanMaintenance" || $_GET["id_checklist"] == "checklist_verifikasiMaintenance" || $_GET["id_checklist"] == "checklist_laporanMaintenance") { ?>
        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanMaintenance">Pengajuan
                <?php if ($s > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s ?></span>
                <?php } ?>
            </a>
        </li>

        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_verifikasiMaintenance">Verifikasi
                <?php if ($s2 > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s2 ?></span>
                <?php } ?>
            </a>
        </li>

        <li>
            <a class="active" href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_laporanMaintenance">Laporan
                <?php if ($s3 > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s3 ?></span>
                <?php } ?>
            </a>
        </li>

        <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanOperasional" || $_GET["id_checklist"] == "checklist_verifikasiOperasional" || $_GET["id_checklist"] == "checklist_laporanOperasional") { ?>
        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanOperasional">Pengajuan
                <?php if ($s > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s ?></span>
                <?php } ?>
            </a>
        </li>

        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_verifikasiOperasional">Verifikasi
                <?php if ($s2 > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s2 ?></span>
                <?php } ?>
            </a>
        </li>

        <li>
            <a class="active" href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_laporanOperasional">Laporan
                <?php if ($s3 > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s3 ?></span>
                <?php } ?>
            </a>
        </li>

        <?php } else { ?>
        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanLogistik">Pengajuan
                <?php if ($s > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s ?></span>
                <?php } ?>
            </a>
        </li>

        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_verifikasiLogistik">Verifikasi
                <?php if ($s2 > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s2 ?></span>
                <?php } ?>
            </a>
        </li>

        <li>
            <a class="active" href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_laporanLogistik">Laporan
                <?php if ($s3 > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s3 ?></span>
                <?php } ?>
            </a>
        </li>
        <?php } ?>

    </ul>
</nav>