<nav class="stroke">
    <ul>
        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_check">Check
                <?php if ($s2 > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s2 ?></span>
                <?php } ?>
            </a>
        </li>

        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_pemasukan">Pemasukan</a>
        </li>

        <li>
            <a class="active" href="<?= $_SESSION["username"] ?>.php?id_forms=forms_verifPemasukan">Verifikasi
                <?php if ($s+$l > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s+$l ?></span>
                <?php } ?>
            </a>
        </li>

    </ul>
</nav>