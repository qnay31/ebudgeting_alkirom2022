<div class="card-body">
    <h5 class="card-title">PERIODE</h5>
    <ul class="nav nav-tabs nav-tabs-bordered">
        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "01") { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>">Global</a>

            <?php } else { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>">Global</a>
            <?php } ?>

            <?php } else { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>&id_periode=01">Januari</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>&id_periode=01">Januari</a>
            <?php } ?>
            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "02") { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>">Global</a>

            <?php } else { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>">Global</a>
            <?php } ?>

            <?php } else { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>&id_periode=02">Februari</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>&id_periode=02">Februari</a>
            <?php } ?>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "03") { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>">Global</a>

            <?php } else { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>">Global</a>
            <?php } ?>

            <?php } else { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>&id_periode=03">Maret</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>&id_periode=03">Maret</a>
            <?php } ?>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "04") { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>">Global</a>

            <?php } else { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>">Global</a>
            <?php } ?>

            <?php } else { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>&id_periode=04">April</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>&id_periode=04">April</a>
            <?php } ?>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "05") { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>">Global</a>

            <?php } else { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>">Global</a>
            <?php } ?>

            <?php } else { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>&id_periode=05">Mei</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>&id_periode=05">Mei</a>
            <?php } ?>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "06") { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>">Global</a>

            <?php } else { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>">Global</a>
            <?php } ?>

            <?php } else { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>&id_periode=06">Juni</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>&id_periode=06">Juni</a>
            <?php } ?>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "07") { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>">Global</a>

            <?php } else { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>">Global</a>
            <?php } ?>

            <?php } else { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>&id_periode=07">Juli</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>&id_periode=07">Juli</a>
            <?php } ?>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "08") { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>">Global</a>

            <?php } else { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>">Global</a>
            <?php } ?>

            <?php } else { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>&id_periode=08">Agustus</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>&id_periode=08">Agustus</a>
            <?php } ?>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "09") { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>">Global</a>

            <?php } else { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>">Global</a>
            <?php } ?>

            <?php } else { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>&id_periode=09">September</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>&id_periode=09">September</a>
            <?php } ?>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "10") { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>">Global</a>

            <?php } else { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>">Global</a>
            <?php } ?>

            <?php } else { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>&id_periode=10">Oktober</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>&id_periode=10">Oktober</a>
            <?php } ?>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "11") { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>">Global</a>

            <?php } else { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>">Global</a>
            <?php } ?>

            <?php } else { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>&id_periode=11">November</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>&id_periode=11">November</a>
            <?php } ?>

            <?php } ?>
        </li>

        <li class="nav-item">
            <?php if ($_GET["id_periode"] == "12") { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>">Global</a>

            <?php } else { ?>
            <a class="nav-link active"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>">Global</a>
            <?php } ?>

            <?php } else { ?>
            <?php if ($id_management == "") { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_database=<?= $_GET["id_database"]; ?>&id_periode=12">Desember</a>

            <?php } else { ?>
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management; ?>&id_database=database_<?= $id_management; ?>&id_periode=12">Desember</a>
            <?php } ?>

            <?php } ?>
        </li>
    </ul>
</div>