<nav class="stroke">
    <ul>
        <li>
            <a
                href="<?= $_SESSION["username"] ?>.php?id_forms=forms_pengajuan&id_dataManagement=<?= $id_management ?>">Pengajuan</a>
        </li>

        <li>
            <a
                href="<?= $_SESSION["username"] ?>.php?id_forms=forms_verifikasi&id_dataManagement=<?= $id_management ?>">Verifikasi
                <?php if ($s > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s ?></span>
                <?php } ?>
            </a>
        </li>

        <li>
            <?php if($id_unik == $id && $data["status"] == "OK"){ ?>
            <a class="active"
                href="<?= $_SESSION["username"] ?>.php?id_forms=forms_laporan&id_dataManagement=<?= $id_management ?>&id_unik=<?= $id ?>&id_p=<?= $unik ?>">Laporan
                <?php if ($s2 > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s2 ?></span>
                <?php } ?>
            </a>
            <?php } else { ?>
            <a class="active"
                href="<?= $_SESSION["username"] ?>.php?id_forms=forms_laporan&id_dataManagement=<?= $id_management ?>">Laporan
                <?php if ($s2 > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s2 ?></span>
                <?php } ?>
            </a>
            <?php } ?>
        </li>

    </ul>
</nav>

<?php 

// die(var_dump($id_unik));

?>