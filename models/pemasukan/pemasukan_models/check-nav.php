<nav class="stroke">
    <ul>
        <li>
            <a class="active" href="<?= $_SESSION["username"] ?>.php?id_forms=forms_check">Check
                <?php if ($s > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s ?></span>
                <?php } ?>
            </a>
        </li>

        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_pemasukan">Pemasukan</a>
        </li>

        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_verifPemasukan">Verifikasi
                <?php if ($s2+$l > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s2+$l ?></span>
                <?php } ?>
            </a>
        </li>
    </ul>
</nav>