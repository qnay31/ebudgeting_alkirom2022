<div class="card-body">
    <ul class="nav nav-tabs nav-tabs-bordered">
        <?php if ($_GET["idTeam"] == "teamMedia") { ?>
        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "") { ?>
            <a class="nav-link active" href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>">Global</a>

            <?php } else { ?>
            <a class="nav-link" href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>">Global</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "01") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=01">Januari</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=01">Januari</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "02") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=02">Februari</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=02">Februari</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "03") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=03">Maret</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=03">Maret</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "04") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=04">April</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=04">April</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "05") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=05">Mei</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=05">Mei</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "06") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=06">Juni</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=06">Juni</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "07") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=07">Juli</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=07">Juli</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "08") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=08">Agustus</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=08">Agustus</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "09") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=09">September</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=09">September</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "10") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=10">Oktober</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=10">Oktober</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "11") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=11">November</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=11">November</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "12") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=12">Desember</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&id_periode=12">Desember</a>

            <?php } ?>
        </li>

        <?php } else { ?>
        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "01") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=01">Januari</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=01">Januari</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "02") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=02">Februari</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=02">Februari</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "03") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=03">Maret</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=03">Maret</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "04") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=04">April</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=04">April</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "05") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=05">Mei</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=05">Mei</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "06") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=06">Juni</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=06">Juni</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "07") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=07">Juli</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=07">Juli</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "08") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=08">Agustus</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=08">Agustus</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "09") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=09">September</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=09">September</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "10") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=10">Oktober</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=10">Oktober</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "11") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=11">November</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=11">November</a>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "12") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=12">Desember</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?idTeam=<?= $_GET["idTeam"]; ?>&idMedia=<?= $_GET["idMedia"]; ?>&id_periode=12">Desember</a>

            <?php } ?>
        </li>

        <?php } ?>
    </ul>
</div>