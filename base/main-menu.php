    <main id="main" class="main">
    <div class="pagetitle">


        <?php if ($_SESSION["posisi"] == "Kepala Income") { ?>

        <?php if ($id_management == "") { ?>
        <h1>Dashboard <?= $_SESSION["posisi"] ?></h1>
        <?php } else { ?>
        <h1>Dashboard <?= $judul ?></h1>
        <?php } ?>

        <?php } elseif ($_SESSION["posisi"] == "Facebook Depok" || $_SESSION["posisi"] == "Facebook Bogor" || $_SESSION["posisi"] == "Instagram") { ?>
        <h1>Dashboard <?= $nama ?></h1>
        <?php
        $bulan      = date("Y-m-d");
        $bln       = substr($bulan, 5,-3);
        
        $q  = mysqli_query($conn, "SELECT * FROM laporan_media WHERE pemegang = '$nama' AND MONTH(tgl_laporan) = '$bln' ORDER BY `tgl_laporan` DESC");
        ?>

        <?php } else { ?>
        <h1>Dashboard <?= $_SESSION["posisi"] ?></h1>
        <?php } ?>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Home</a></li>
                <?php if ($_GET["id_adminKey"] == "") { ?>
                <li class="breadcrumb-item active">Dashboard</li>

                <?php } else { ?>
                <li class="breadcrumb-item active"><?= ucwords($_GET["id_adminKey"]); ?></li>
                <?php } ?>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <?php if ($_SESSION["id_pengurus"] == "admin_web") { ?>
                    <?php if ($_GET["id_adminKey"] == "") { ?>
                    <?php
                        include '../models/base_menu/main-menu_admin.php';
                    ?>
                    
                    <?php } elseif ($_GET["id_adminKey"] == "edit_income") { ?>
                    <?php
                        include '../models/base_admin/edit.php';
                        ?>

                    <?php } else { ?>
                    <div class="col-12">
                        <div class="card">
                            <?php include '../models/base_admin/admin_menu.php'; ?>
                        </div>
                    </div>

                    <?php } ?>

                    <?php } else { ?>
                    <?php
                        include '../models/base_menu/sub_main-menu-cardList.php';
                    ?>
                    <?php } ?>

                    <?php
                        include '../models/base_menu/sub_main-menu-chart.php';
                    ?>

                    <?php if ($_SESSION["id_pengurus"] == "facebook_depok" || $_SESSION["id_pengurus"] == "facebook_bogor" || $_SESSION["id_pengurus"] == "instagram") { ?>
                    <!-- Laporan  -->
                    <div class="col-12">
                        <div class="card">
                            <?php include '../models/database/pemasukan/sub-lapAkun.php'; ?>
                        </div>
                    </div><!-- End Laporan  -->
                    <?php } ?>

                    <?php if ($_SESSION["id_pengurus"] == "manager_facebook" || $_SESSION["id_pengurus"] == "manager_instagram") { ?>
                    <?php
                        include '../models/base_menu/sub_main-menu-listAkun.php';
                    ?>
                    <?php } ?>

                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>

</main><!-- End #main -->