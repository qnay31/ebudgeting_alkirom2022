<nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

        <?php include 'notification.php'; ?>

        <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <img src="../assets/img/icons/<?= $profil ?>" alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2"><?= ucwords($nama) ?></span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                    <h6><?= ucwords($nama) ?></h6>
                    <span><?= $_SESSION["posisi"] ?> <?= $_SESSION["cabang"] ?></span>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <?php if ($_GET["id_profil"] == "myProfil") { ?>
                <li>
                    <a class="dropdown-item d-flex align-items-center bg-primary text-light"
                        href="<?= $_SESSION["username"] ?>.php?id_profil=myProfil">
                        <i class="bi bi-person"></i>
                        <span>Profil</span>
                    </a>
                </li>
                <?php } else { ?>
                <li>
                    <a class="dropdown-item d-flex align-items-center"
                        href="<?= $_SESSION["username"] ?>.php?id_profil=myProfil">
                        <i class="bi bi-person"></i>
                        <span>Profil</span>
                    </a>
                </li>
                <?php } ?>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
                <?php if ($_GET["id_profil"] == "logActivity") { ?>
                <li>
                    <a class="dropdown-item d-flex align-items-center bg-primary text-light"
                        href="<?= $_SESSION["username"] ?>.php?id_profil=logActivity">
                        <i class="bi bi-list-check"></i>
                        <span>Log aktivitas</span>
                    </a>
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>
                <?php } else { ?>
                <li>
                    <a class="dropdown-item d-flex align-items-center"
                        href="<?= $_SESSION["username"] ?>.php?id_profil=logActivity">
                        <i class="bi bi-list-check"></i>
                        <span>Log aktivitas</span>
                    </a>
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>
                <?php } ?>

                <?php } ?>

                <li>
                    <a class="dropdown-item d-flex align-items-center" href="../logout.php">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Keluar</span>
                    </a>
                </li>

            </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
    </ul>
</nav><!-- End Icons Navigation -->