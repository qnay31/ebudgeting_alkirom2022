<nav class="stroke">
    <ul>
        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_forms=input_income">Income</a>
        </li>

        <li>
            <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_verifIncome">Verifikasi
                <?php if ($s > 0) { ?>
                <span class="badge badge-danger badge-counter"><?= $s ?></span>
                <?php } ?>
            </a>
        </li>

        <li>
            <a class="active" href="<?= $_SESSION["username"] ?>.php?id_forms=forms_laporanIncome">Laporan
            </a>
        </li>
    </ul>
    </ul>
</nav>