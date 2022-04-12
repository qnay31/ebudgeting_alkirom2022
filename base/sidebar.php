<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <?php if ($_GET["id_database"] == true ) { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <?php } elseif ($_GET["idTeam"] == true) { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <?php } elseif ($_GET["id_forms"] == true) { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <?php } elseif ($_GET["id_grafik"] == true) { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <?php } elseif ($_GET["id_checklist"] == true) { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <?php } elseif ($_GET["id_daily"] == true) { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <?php } elseif ($_GET["id_profil"] == true) { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <?php } elseif ($_GET["id_accountKey"] == true && $_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <?php } else { ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= $_SESSION["username"] ?>.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <?php } ?>

        <?php if (
            $_SESSION["id_pengurus"] == "ketua_yayasan" ||
            $_SESSION["id_pengurus"] == "kepala_income" ||
            $_SESSION["username"] == "facebook_depok" ||
            $_SESSION["username"] == "facebook_bogor" ||
            $_SESSION["id_pengurus"] == "kepala_cabang" ||
            $_SESSION["username"] == "instagram"
            ) { ?>
        <?php if ($_GET["idTeam"] == "teamMedia" || $_GET["idTeam"] == "changeMedia") { ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= $_SESSION["username"] ?>.php?idTeam=teamMedia">
                <i class="bi bi-people"></i><span class="badge badge-danger badge-counter">New</span>
                <span>Team Media</span>
            </a>
        </li>

        <?php } else { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?idTeam=teamMedia">
                <i class="bi bi-people"></i><span class="badge badge-danger badge-counter">New</span>
                <span>Team Media</span>
            </a>
        </li>
        <?php } ?>

        <?php } ?>

        <?php if (
            $_GET["id_database"] == "database_global" || 
            $_GET["id_database"] == "database_paudqu" || 
            $_GET["id_database"] == "database_program" || 
            $_GET["id_database"] == "database_logistik" || 
            $_GET["id_database"] == "database_aset_yayasan" || 
            $_GET["id_database"] == "database_uang_makan" || 
            $_GET["id_database"] == "database_gaji_karyawan" || 
            $_GET["id_database"] == "database_anggaran_lain" || 
            $_GET["id_database"] == "database_maintenance" || 
            $_GET["id_database"] == "database_operasional_yayasan" || 
            $_GET["id_database"] == "database_pemasukanMedia" || 
            $_GET["id_database"] == "database_harianMedia" || 
            $_GET["id_database"] == "database_akunMedia" || 
            $_GET["id_database"] == "database_crossCheck"
        ) { ?>
        <li class="nav-item">
            <a class="nav-link" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Database</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "kepala_pengajuan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <?php if ($_GET["id_database"] == "database_program") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global">
                        <i class="bi bi-circle"></i><span>Lap Global Yayasan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_program" class="active">
                        <i class="bi bi-circle"></i><span>Lap Global Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_paudqu">
                        <i class="bi bi-circle"></i><span>Lap Global PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_logistik">
                        <i class="bi bi-circle"></i><span>Lap Global Logistik</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_database=database_aset_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Aset</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_database=database_uang_makan">
                        <i class="bi bi-circle"></i><span>Lap Global Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_database=database_gaji_karyawan">
                        <i class="bi bi-circle"></i><span>Lap Global Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_database=database_anggaran_lain">
                        <i class="bi bi-circle"></i><span>Lap Global Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_database=database_maintenance">
                        <i class="bi bi-circle"></i><span>Lap Global Maintenance</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_database=database_operasional_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Operasional</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Media</span>
                    </a>
                </li>

                <?php } ?>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Akun</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia">
                        <i class="bi bi-circle"></i><span>Laporan Akun</span>
                    </a>
                </li>
                <?php } ?>

                <?php } elseif ($_GET["id_database"] == "database_paudqu") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global">
                        <i class="bi bi-circle"></i><span>Lap Global Yayasan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_program">
                        <i class="bi bi-circle"></i><span>Lap Global Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_paudqu" class="active">
                        <i class="bi bi-circle"></i><span>Lap Global PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_logistik">
                        <i class="bi bi-circle"></i><span>Lap Global Logistik</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_database=database_aset_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Aset</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_database=database_uang_makan">
                        <i class="bi bi-circle"></i><span>Lap Global Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_database=database_gaji_karyawan">
                        <i class="bi bi-circle"></i><span>Lap Global Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_database=database_anggaran_lain">
                        <i class="bi bi-circle"></i><span>Lap Global Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_database=database_maintenance">
                        <i class="bi bi-circle"></i><span>Lap Global Maintenance</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_database=database_operasional_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Operasional</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Media</span>
                    </a>
                </li>

                <?php } ?>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Akun</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia">
                        <i class="bi bi-circle"></i><span>Laporan Akun</span>
                    </a>
                </li>
                <?php } ?>

                <?php } elseif ($_GET["id_database"] == "database_global") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global" class="active">
                        <i class="bi bi-circle"></i><span>Lap Global Yayasan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_program">
                        <i class="bi bi-circle"></i><span>Lap Global Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_paudqu">
                        <i class="bi bi-circle"></i><span>Lap Global PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_logistik">
                        <i class="bi bi-circle"></i><span>Lap Global Logistik</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_database=database_aset_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Aset</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_database=database_uang_makan">
                        <i class="bi bi-circle"></i><span>Lap Global Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_database=database_gaji_karyawan">
                        <i class="bi bi-circle"></i><span>Lap Global Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_database=database_anggaran_lain">
                        <i class="bi bi-circle"></i><span>Lap Global Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_database=database_maintenance">
                        <i class="bi bi-circle"></i><span>Lap Global Maintenance</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_database=database_operasional_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Operasional</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Media</span>
                    </a>
                </li>

                <?php } ?>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Akun</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia">
                        <i class="bi bi-circle"></i><span>Laporan Akun</span>
                    </a>
                </li>
                <?php } ?>



                <?php } elseif ($_GET["id_database"] == "database_aset_yayasan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global">
                        <i class="bi bi-circle"></i><span>Lap Global Yayasan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_program">
                        <i class="bi bi-circle"></i><span>Lap Global Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_paudqu">
                        <i class="bi bi-circle"></i><span>Lap Global PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_logistik">
                        <i class="bi bi-circle"></i><span>Lap Global Logistik</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_database=database_aset_yayasan"
                        class="active">
                        <i class="bi bi-circle"></i><span>Lap Global Aset</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_database=database_uang_makan">
                        <i class="bi bi-circle"></i><span>Lap Global Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_database=database_gaji_karyawan">
                        <i class="bi bi-circle"></i><span>Lap Global Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_database=database_anggaran_lain">
                        <i class="bi bi-circle"></i><span>Lap Global Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_database=database_maintenance">
                        <i class="bi bi-circle"></i><span>Lap Global Maintenance</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_database=database_operasional_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Operasional</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Media</span>
                    </a>
                </li>

                <?php } ?>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Akun</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia">
                        <i class="bi bi-circle"></i><span>Laporan Akun</span>
                    </a>
                </li>
                <?php } ?>

                <?php } elseif ($_GET["id_database"] == "database_uang_makan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global">
                        <i class="bi bi-circle"></i><span>Lap Global Yayasan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_program">
                        <i class="bi bi-circle"></i><span>Lap Global Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_paudqu">
                        <i class="bi bi-circle"></i><span>Lap Global PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_logistik">
                        <i class="bi bi-circle"></i><span>Lap Global Logistik</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_database=database_aset_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Aset</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_database=database_uang_makan"
                        class="active">
                        <i class="bi bi-circle"></i><span>Lap Global Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_database=database_gaji_karyawan">
                        <i class="bi bi-circle"></i><span>Lap Global Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_database=database_anggaran_lain">
                        <i class="bi bi-circle"></i><span>Lap Global Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_database=database_maintenance">
                        <i class="bi bi-circle"></i><span>Lap Global Maintenance</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_database=database_operasional_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Operasional</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Media</span>
                    </a>
                </li>

                <?php } ?>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Akun</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia">
                        <i class="bi bi-circle"></i><span>Laporan Akun</span>
                    </a>
                </li>
                <?php } ?>

                <?php } elseif ($_GET["id_database"] == "database_gaji_karyawan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global">
                        <i class="bi bi-circle"></i><span>Lap Global Yayasan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_program">
                        <i class="bi bi-circle"></i><span>Lap Global Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_paudqu">
                        <i class="bi bi-circle"></i><span>Lap Global PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_logistik">
                        <i class="bi bi-circle"></i><span>Lap Global Logistik</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_database=database_aset_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Aset</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_database=database_uang_makan">
                        <i class="bi bi-circle"></i><span>Lap Global Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_database=database_gaji_karyawan"
                        class="active">
                        <i class="bi bi-circle"></i><span>Lap Global Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_database=database_anggaran_lain">
                        <i class="bi bi-circle"></i><span>Lap Global Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_database=database_maintenance">
                        <i class="bi bi-circle"></i><span>Lap Global Maintenance</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_database=database_operasional_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Operasional</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Media</span>
                    </a>
                </li>

                <?php } ?>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Akun</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia">
                        <i class="bi bi-circle"></i><span>Laporan Akun</span>
                    </a>
                </li>
                <?php } ?>

                <?php } elseif ($_GET["id_database"] == "database_anggaran_lain") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global">
                        <i class="bi bi-circle"></i><span>Lap Global Yayasan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_program">
                        <i class="bi bi-circle"></i><span>Lap Global Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_paudqu">
                        <i class="bi bi-circle"></i><span>Lap Global PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_logistik">
                        <i class="bi bi-circle"></i><span>Lap Global Logistik</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_database=database_aset_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Aset</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_database=database_uang_makan">
                        <i class="bi bi-circle"></i><span>Lap Global Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_database=database_gaji_karyawan">
                        <i class="bi bi-circle"></i><span>Lap Global Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_database=database_anggaran_lain"
                        class="active">
                        <i class="bi bi-circle"></i><span>Lap Global Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_database=database_maintenance">
                        <i class="bi bi-circle"></i><span>Lap Global Maintenance</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_database=database_operasional_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Operasional</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Media</span>
                    </a>
                </li>

                <?php } ?>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Akun</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia">
                        <i class="bi bi-circle"></i><span>Laporan Akun</span>
                    </a>
                </li>
                <?php } ?>

                <?php } elseif ($_GET["id_database"] == "database_maintenance") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global">
                        <i class="bi bi-circle"></i><span>Lap Global Yayasan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_program">
                        <i class="bi bi-circle"></i><span>Lap Global Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_paudqu">
                        <i class="bi bi-circle"></i><span>Lap Global PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_logistik">
                        <i class="bi bi-circle"></i><span>Lap Global Logistik</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_database=database_aset_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Aset</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_database=database_uang_makan">
                        <i class="bi bi-circle"></i><span>Lap Global Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_database=database_gaji_karyawan">
                        <i class="bi bi-circle"></i><span>Lap Global Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_database=database_anggaran_lain">
                        <i class="bi bi-circle"></i><span>Lap Global Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_database=database_maintenance"
                        class="active">
                        <i class="bi bi-circle"></i><span>Lap Global Maintenance</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_database=database_operasional_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Operasional</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Media</span>
                    </a>
                </li>

                <?php } ?>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Akun</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia">
                        <i class="bi bi-circle"></i><span>Laporan Akun</span>
                    </a>
                </li>
                <?php } ?>

                <?php } elseif ($_GET["id_database"] == "database_operasional_yayasan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global">
                        <i class="bi bi-circle"></i><span>Lap Global Yayasan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_program">
                        <i class="bi bi-circle"></i><span>Lap Global Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_paudqu">
                        <i class="bi bi-circle"></i><span>Lap Global PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_logistik">
                        <i class="bi bi-circle"></i><span>Lap Global Logistik</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_database=database_aset_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Aset</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_database=database_uang_makan">
                        <i class="bi bi-circle"></i><span>Lap Global Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_database=database_gaji_karyawan">
                        <i class="bi bi-circle"></i><span>Lap Global Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_database=database_anggaran_lain">
                        <i class="bi bi-circle"></i><span>Lap Global Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_database=database_maintenance">
                        <i class="bi bi-circle"></i><span>Lap Global Maintenance</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_database=database_operasional_yayasan"
                        class="active">
                        <i class="bi bi-circle"></i><span>Lap Global Operasional</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Media</span>
                    </a>
                </li>

                <?php } ?>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Akun</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia">
                        <i class="bi bi-circle"></i><span>Laporan Akun</span>
                    </a>
                </li>
                <?php } ?>

                <?php } elseif ($_GET["id_database"] == "database_pemasukanMedia") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global">
                        <i class="bi bi-circle"></i><span>Lap Global Yayasan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_program">
                        <i class="bi bi-circle"></i><span>Lap Global Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_paudqu">
                        <i class="bi bi-circle"></i><span>Lap Global PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_logistik">
                        <i class="bi bi-circle"></i><span>Lap Global Logistik</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_database=database_aset_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Aset</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_database=database_uang_makan">
                        <i class="bi bi-circle"></i><span>Lap Global Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_database=database_gaji_karyawan">
                        <i class="bi bi-circle"></i><span>Lap Global Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_database=database_anggaran_lain">
                        <i class="bi bi-circle"></i><span>Lap Global Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_database=database_maintenance">
                        <i class="bi bi-circle"></i><span>Lap Global Maintenance</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_database=database_operasional_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Operasional</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia" class="active">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Media</span>
                    </a>
                </li>


                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Akun</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia">
                        <i class="bi bi-circle"></i><span>Laporan Akun</span>
                    </a>
                </li>
                <?php } ?>

                <?php } elseif ($_GET["id_database"] == "database_harianMedia") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global">
                        <i class="bi bi-circle"></i><span>Lap Global Yayasan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_program">
                        <i class="bi bi-circle"></i><span>Lap Global Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_paudqu">
                        <i class="bi bi-circle"></i><span>Lap Global PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_logistik">
                        <i class="bi bi-circle"></i><span>Lap Global Logistik</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_database=database_aset_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Aset</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_database=database_uang_makan">
                        <i class="bi bi-circle"></i><span>Lap Global Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_database=database_gaji_karyawan">
                        <i class="bi bi-circle"></i><span>Lap Global Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_database=database_anggaran_lain">
                        <i class="bi bi-circle"></i><span>Lap Global Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_database=database_maintenance">
                        <i class="bi bi-circle"></i><span>Lap Global Maintenance</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_database=database_operasional_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Operasional</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Media</span>
                    </a>
                </li>


                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia" class="active">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Akun</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia">
                        <i class="bi bi-circle"></i><span>Laporan Akun</span>
                    </a>
                </li>

                <?php } elseif ($_GET["id_database"] == "database_akunMedia") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global">
                        <i class="bi bi-circle"></i><span>Lap Global Yayasan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_program">
                        <i class="bi bi-circle"></i><span>Lap Global Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_paudqu">
                        <i class="bi bi-circle"></i><span>Lap Global PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_logistik">
                        <i class="bi bi-circle"></i><span>Lap Global Logistik</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_database=database_aset_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Aset</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_database=database_uang_makan">
                        <i class="bi bi-circle"></i><span>Lap Global Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_database=database_gaji_karyawan">
                        <i class="bi bi-circle"></i><span>Lap Global Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_database=database_anggaran_lain">
                        <i class="bi bi-circle"></i><span>Lap Global Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_database=database_maintenance">
                        <i class="bi bi-circle"></i><span>Lap Global Maintenance</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_database=database_operasional_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Operasional</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Media</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Akun</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia" class="active">
                        <i class="bi bi-circle"></i><span>Laporan Akun</span>
                    </a>
                </li>
                <?php } ?>

                <?php } else { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global">
                        <i class="bi bi-circle"></i><span>Lap Global Yayasan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_program">
                        <i class="bi bi-circle"></i><span>Lap Global Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_paudqu">
                        <i class="bi bi-circle"></i><span>Lap Global PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_logistik" class="active">
                        <i class="bi bi-circle"></i><span>Lap Global Logistik</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_database=database_aset_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Aset</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_database=database_uang_makan">
                        <i class="bi bi-circle"></i><span>Lap Global Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_database=database_gaji_karyawan">
                        <i class="bi bi-circle"></i><span>Lap Global Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_database=database_anggaran_lain">
                        <i class="bi bi-circle"></i><span>Lap Global Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_database=database_maintenance">
                        <i class="bi bi-circle"></i><span>Lap Global Maintenance</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_database=database_operasional_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Operasional</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Media</span>
                    </a>
                </li>

                <?php } ?>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Akun</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia">
                        <i class="bi bi-circle"></i><span>Laporan Akun</span>
                    </a>
                </li>
                <?php } ?>

                <?php } ?>

                <?php } elseif ($_SESSION["id_pengurus"] == "kepala_cabang") { ?>
                <?php if ($_GET["id_database"] == "database_program") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_program" class="active">
                        <i class="bi bi-circle"></i><span>Laporan Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_logistik">
                        <i class="bi bi-circle"></i><span>Laporan Logistik</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Media</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia">
                        <i class="bi bi-circle"></i><span>Lap Akun Global</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Rincian Pemasukan</span>
                    </a>
                </li>

                <?php } elseif ($_GET["id_database"] == "database_pemasukanMedia") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_program">
                        <i class="bi bi-circle"></i><span>Laporan Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_logistik">
                        <i class="bi bi-circle"></i><span>Laporan Logistik</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia" class="active">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Media</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia">
                        <i class="bi bi-circle"></i><span>Lap Akun Global</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Rincian Pemasukan</span>
                    </a>
                </li>

                <?php } elseif ($_GET["id_database"] == "database_akunMedia") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_program">
                        <i class="bi bi-circle"></i><span>Laporan Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_logistik">
                        <i class="bi bi-circle"></i><span>Laporan Logistik</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Media</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia" class="active">
                        <i class="bi bi-circle"></i><span>Lap Akun Global</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Rincian Pemasukan</span>
                    </a>
                </li>

                <?php } elseif ($_GET["id_database"] == "database_harianMedia") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_program">
                        <i class="bi bi-circle"></i><span>Laporan Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_logistik">
                        <i class="bi bi-circle"></i><span>Laporan Logistik</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Media</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia">
                        <i class="bi bi-circle"></i><span>Lap Akun Global</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia" class="active">
                        <i class="bi bi-circle"></i><span>Rincian Pemasukan</span>
                    </a>
                </li>

                <?php } else { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_program">
                        <i class="bi bi-circle"></i><span>Laporan Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_logistik" class="active">
                        <i class="bi bi-circle"></i><span>Laporan Logistik</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Media</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia">
                        <i class="bi bi-circle"></i><span>Lap Akun Global</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Rincian Pemasukan</span>
                    </a>
                </li>
                <?php } ?>

                <?php } elseif ($_SESSION["id_pengurus"] == "kepala_income") { ?>
                <?php
                    $pToday = date("Y-m-d");
                    $cToday = substr($pToday, 5, -3);
                ?>
                <?php if ($_GET["id_database"] == "database_harianMedia") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Pemasukan Media (Sahila)</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia" class="active">
                        <i class="bi bi-circle"></i><span>Pemasukan Global (Sarah)</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_database=database_crossCheck&id_periode=<?= $cToday; ?>">
                        <i class="bi bi-circle"></i><span>Crosscheck Income</span>
                    </a>
                </li>

                <?php } elseif ($_GET["id_database"] == "database_crossCheck") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Pemasukan Media (Sahila)</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Pemasukan Global (Sarah)</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_crossCheck&id_periode=<?= $cToday; ?>"
                        class="active">
                        <i class="bi bi-circle"></i><span>Crosscheck Income</span>
                    </a>
                </li>

                <?php } else { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia" class="active">
                        <i class="bi bi-circle"></i><span>Pemasukan Media (Sahila)</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Pemasukan Global (Sarah)</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_database=database_crossCheck&id_periode=<?= $cToday; ?>">
                        <i class="bi bi-circle"></i><span>Crosscheck Income</span>
                    </a>
                </li>

                <?php } ?>

                <?php } else { ?>
                <?php if ($_GET["id_database"] == "database_harianMedia") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia">
                        <i class="bi bi-circle"></i><span>Lap Akun Global</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "facebook_depok" || $_SESSION["id_pengurus"] == "facebook_bogor" || $_SESSION["id_pengurus"] == "instagram" || $_SESSION["id_pengurus"] == "facebook") { ?>
                <?php } else { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Harian</span>
                    </a>
                </li>
                <?php } ?>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia" class="active">
                        <i class="bi bi-circle"></i><span>Rincian Pemasukan</span>
                    </a>
                </li>

                <?php } elseif ($_GET["id_database"] == "database_pemasukanMedia") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia">
                        <i class="bi bi-circle"></i><span>Lap Akun Global</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia" class="active">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Harian</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Rincian Pemasukan</span>
                    </a>
                </li>

                <?php } else { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia" class="active">
                        <i class="bi bi-circle"></i><span>Lap Akun Global</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "facebook_depok" || $_SESSION["id_pengurus"] == "facebook_bogor" || $_SESSION["id_pengurus"] == "instagram" || $_SESSION["id_pengurus"] == "facebook") { ?>
                <?php } else { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Harian</span>
                    </a>
                </li>
                <?php } ?>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Rincian Pemasukan</span>
                    </a>
                </li>
                <?php } ?>

                <?php } ?>
            </ul>
        </li>
        <?php } else { ?>
        <li class="nav-item">
            <?php if ($_SESSION["id_pengurus"] == "admin_web") { ?>
            <?php } else { ?>
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Database</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <?php } ?>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "kepala_pengajuan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_global">
                        <i class="bi bi-circle"></i><span>Lap Global Yayasan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_program">
                        <i class="bi bi-circle"></i><span>Lap Global Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_paudqu">
                        <i class="bi bi-circle"></i><span>Lap Global PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_logistik">
                        <i class="bi bi-circle"></i><span>Lap Global Logistik</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_database=database_aset_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Aset</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_database=database_uang_makan">
                        <i class="bi bi-circle"></i><span>Lap Global Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_database=database_gaji_karyawan">
                        <i class="bi bi-circle"></i><span>Lap Global Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_database=database_anggaran_lain">
                        <i class="bi bi-circle"></i><span>Lap Global Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_database=database_maintenance">
                        <i class="bi bi-circle"></i><span>Lap Global Maintenance</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_database=database_operasional_yayasan">
                        <i class="bi bi-circle"></i><span>Lap Global Operasional</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Media</span>
                    </a>
                </li>

                <?php } else { ?>
                <?php } ?>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Akun</span>
                    </a>
                </li>


                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia">
                        <i class="bi bi-circle"></i><span>Laporan Akun</span>
                    </a>
                </li>
                <?php } ?>

                <?php } elseif ($_SESSION["id_pengurus"] == "kepala_cabang") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_program">
                        <i class=" bi bi-circle"></i><span>Laporan Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_logistik">
                        <i class=" bi bi-circle"></i><span>Laporan Logistik</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Media</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia">
                        <i class="bi bi-circle"></i><span>Lap Akun Global</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Rincian Pemasukan</span>
                    </a>
                </li>

                <?php } elseif ($_SESSION["id_pengurus"] == "kepala_income") { ?>
                <?php
                $pToday = date("Y-m-d");
                $cToday = substr($pToday, 5, -3);
                ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Pemasukan Media (Sahila)</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Pemasukan Global (Sarah)</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_database=database_crossCheck&id_periode=<?= $cToday; ?>">
                        <i class="bi bi-circle"></i><span>Crosscheck Income</span>
                    </a>
                </li>

                <?php } else { ?>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_akunMedia">
                        <i class="bi bi-circle"></i><span>Lap Akun Global</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "facebook_depok" || $_SESSION["id_pengurus"] == "facebook_bogor" || $_SESSION["id_pengurus"] == "instagram" || $_SESSION["id_pengurus"] == "facebook") { ?>
                <?php } else { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Lap Pemasukan Harian</span>
                    </a>
                </li>
                <?php } ?>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_database=database_harianMedia">
                        <i class="bi bi-circle"></i><span>Rincian Pemasukan</span>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </li>
        <?php } ?>

        <!-- End Database Nav -->

        <?php if ($_GET["id_forms"] == "forms_pengajuan" || $_GET["id_forms"] == "forms_verifikasi" || $_GET["id_forms"] == "edit_pengajuan" || $_GET["id_forms"] == "forms_laporan" || $_GET["id_forms"] == "forms_pemasukan" || $_GET["id_forms"] == "edit_laporan" || $_GET["id_forms"] == "forms_verifPemasukan" || $_GET["id_forms"] == "edit_pemasukan" || $_GET["id_forms"] == "daftar_pengajuan" || $_GET["id_forms"] == "input_income" || $_GET["id_forms"] == "forms_verifIncome" || $_GET["id_forms"] == "edit_incomeMedia"|| $_GET["id_forms"] == "forms_check" || $_GET["id_forms"] == "forms_laporanIncome"|| $_GET["id_forms"] == "edit_laporanMedia") { ?>
        <li class="nav-item">
            <a class="nav-link" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Form</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                <?php if ($_GET["id_forms"] == "forms_pengajuan" || $_GET["id_forms"] == "forms_pemasukan" || $_GET["id_forms"] == "forms_verifikasi" || $_GET["id_forms"] == "forms_verifPemasukan" || $_GET["id_forms"] == "edit_pengajuan" || $_GET["id_forms"] == "forms_laporan" || $_GET["id_forms"] == "edit_laporan" || $_GET["id_forms"] == "daftar_pengajuan" || $_GET["id_forms"] == "input_income" || $_GET["id_forms"] == "forms_check" || $_GET["id_forms"] == "forms_verifIncome" || $_GET["id_forms"] == "edit_incomeMedia" || $_GET["id_forms"] == "forms_laporanIncome"|| $_GET["id_forms"] == "edit_laporanMedia") { ?>
                <?php if ($_SESSION["id_pengurus"] == "kepala_pengajuan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_forms=daftar_pengajuan" class="active">
                        <i class="bi bi-circle"></i><span>Pengajuan & Laporan</span>
                    </a>
                </li>

                <?php } elseif ($_SESSION["id_pengurus"] == "kepala_income") { ?>
                <?php if ($id_management == "") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_check" class="active">
                        <i class="bi bi-circle"></i><span>Pemasukan Media Sosial</span>
                    </a>
                </li>

                <?php } else { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_management=<?= $id_management ?>&id_forms=forms_pemasukan"
                        class="active">
                        <i class="bi bi-circle"></i><span><?= $judul ?></span>
                    </a>
                </li>
                <?php } ?>

                <?php } else { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_forms=input_income" class="active">
                        <i class="bi bi-circle"></i><span>Input Income</span>
                    </a>
                </li>
                <?php } ?>

                <?php } else { ?>
                <?php } ?>

            </ul>
        </li>
        <?php } elseif ($_SESSION["id_pengurus"] == "kepala_cabang") { ?>
        <?php } elseif ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
        <?php } elseif ($_SESSION["id_pengurus"] == "management_keuangan") { ?>
        <?php } elseif ($_SESSION["id_pengurus"] == "manager_facebook" || $_SESSION["id_pengurus"] == "manager_instagram") { ?>
        <?php } elseif ($_SESSION["id_pengurus"] == "kepala_pengajuan") { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Form</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_forms=daftar_pengajuan">
                        <i class="bi bi-circle"></i><span>Pengajuan & Laporan</span>
                    </a>
                </li>
            </ul>
        </li>
        <?php }  elseif ($_SESSION["id_pengurus"] == "facebook_depok" || $_SESSION["id_pengurus"] == "facebook_bogor" || $_SESSION["id_pengurus"] == "instagram" || $_SESSION["id_pengurus"] == "facebook") { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Form</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_forms=input_income">
                        <i class="bi bi-circle"></i><span>Input Income</span>
                    </a>
                </li>
            </ul>
        </li>
        <?php } else { ?>
        <li class="nav-item">
            <?php if ($_SESSION["id_pengurus"] == "admin_web") { ?>
            <?php } else { ?>
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Form</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <?php } ?>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_check">
                        <i class="bi bi-circle"></i><span>Pemasukan Media Sosial</span>
                    </a>
                </li>
            </ul>
        </li>
        <?php } ?>

        <!-- End Forms Nav -->

        <?php if ($_GET["id_grafik"] == "grafik_program" || $_GET["id_grafik"] == "grafik_paudqu" || $_GET["id_grafik"] == "grafik_logistik" || $_GET["id_grafik"] == "grafik_aset_yayasan" || $_GET["id_grafik"] == "grafik_uang_makan" || $_GET["id_grafik"] == "grafik_gaji_karyawan" || $_GET["id_grafik"] == "grafik_anggaran_lain" || $_GET["id_grafik"] == "grafik_maintenance" || $_GET["id_grafik"] == "grafik_operasional_yayasan" || $_GET["id_grafik"] == "grafik_pemasukanMedia") { ?>
        <li class="nav-item">
            <a class="nav-link" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Grafik</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "kepala_pengajuan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <?php if ($_GET["id_grafik"] == "grafik_program") { ?>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_program" class="active">
                        <i class="bi bi-circle"></i><span>Grafik Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_paudqu">
                        <i class="bi bi-circle"></i><span>Grafik PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_logistik">
                        <i class="bi bi-circle"></i><span>Grafik Logistik</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_grafik=grafik_aset_yayasan">
                        <i class="bi bi-circle"></i><span>Grafik Aset</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_grafik=grafik_uang_makan">
                        <i class="bi bi-circle"></i><span>Grafik Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_grafik=grafik_gaji_karyawan">
                        <i class="bi bi-circle"></i><span>Grafik Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_grafik=grafik_anggaran_lain">
                        <i class="bi bi-circle"></i><span>Grafik Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_grafik=grafik_maintenance">
                        <i class="bi bi-circle"></i><span>Grafik Maintenance</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_grafik=grafik_operasional_yayasan">
                        <i class="bi bi-circle"></i><span>Grafik Operasional</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Grafik Pemasukan Media</span>
                    </a>
                </li>

                <?php } else { ?>
                <?php } ?>

                <?php } elseif ($_GET["id_grafik"] == "grafik_paudqu") { ?>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_program">
                        <i class="bi bi-circle"></i><span>Grafik Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_paudqu" class="active">
                        <i class="bi bi-circle"></i><span>Grafik PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_logistik">
                        <i class="bi bi-circle"></i><span>Grafik Logistik</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_grafik=grafik_aset_yayasan">
                        <i class="bi bi-circle"></i><span>Grafik Aset</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_grafik=grafik_uang_makan">
                        <i class="bi bi-circle"></i><span>Grafik Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_grafik=grafik_gaji_karyawan">
                        <i class="bi bi-circle"></i><span>Grafik Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_grafik=grafik_anggaran_lain">
                        <i class="bi bi-circle"></i><span>Grafik Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_grafik=grafik_maintenance">
                        <i class="bi bi-circle"></i><span>Grafik Maintenance</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_grafik=grafik_operasional_yayasan">
                        <i class="bi bi-circle"></i><span>Grafik Operasional</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Grafik Pemasukan Media</span>
                    </a>
                </li>

                <?php } else { ?>
                <?php } ?>

                <?php } elseif ($_GET["id_grafik"] == "grafik_aset_yayasan") { ?>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_program">
                        <i class="bi bi-circle"></i><span>Grafik Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_paudqu">
                        <i class="bi bi-circle"></i><span>Grafik PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_logistik">
                        <i class="bi bi-circle"></i><span>Grafik Logistik</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_grafik=grafik_aset_yayasan"
                        class="active">
                        <i class="bi bi-circle"></i><span>Grafik Aset</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_grafik=grafik_uang_makan">
                        <i class="bi bi-circle"></i><span>Grafik Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_grafik=grafik_gaji_karyawan">
                        <i class="bi bi-circle"></i><span>Grafik Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_grafik=grafik_anggaran_lain">
                        <i class="bi bi-circle"></i><span>Grafik Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_grafik=grafik_maintenance">
                        <i class="bi bi-circle"></i><span>Grafik Maintenance</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_grafik=grafik_operasional_yayasan">
                        <i class="bi bi-circle"></i><span>Grafik Operasional</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Grafik Pemasukan Media</span>
                    </a>
                </li>

                <?php } else { ?>
                <?php } ?>

                <?php } elseif ($_GET["id_grafik"] == "grafik_uang_makan") { ?>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_program">
                        <i class="bi bi-circle"></i><span>Grafik Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_paudqu">
                        <i class="bi bi-circle"></i><span>Grafik PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_logistik">
                        <i class="bi bi-circle"></i><span>Grafik Logistik</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_grafik=grafik_aset_yayasan">
                        <i class="bi bi-circle"></i><span>Grafik Aset</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_grafik=grafik_uang_makan"
                        class="active">
                        <i class="bi bi-circle"></i><span>Grafik Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_grafik=grafik_gaji_karyawan">
                        <i class="bi bi-circle"></i><span>Grafik Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_grafik=grafik_anggaran_lain">
                        <i class="bi bi-circle"></i><span>Grafik Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_grafik=grafik_maintenance">
                        <i class="bi bi-circle"></i><span>Grafik Maintenance</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_grafik=grafik_operasional_yayasan">
                        <i class="bi bi-circle"></i><span>Grafik Operasional</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Grafik Pemasukan Media</span>
                    </a>
                </li>

                <?php } else { ?>
                <?php } ?>

                <?php } elseif ($_GET["id_grafik"] == "grafik_gaji_karyawan") { ?>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_program">
                        <i class="bi bi-circle"></i><span>Grafik Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_paudqu">
                        <i class="bi bi-circle"></i><span>Grafik PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_logistik">
                        <i class="bi bi-circle"></i><span>Grafik Logistik</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_grafik=grafik_aset_yayasan">
                        <i class="bi bi-circle"></i><span>Grafik Aset</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_grafik=grafik_uang_makan">
                        <i class="bi bi-circle"></i><span>Grafik Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_grafik=grafik_gaji_karyawan"
                        class="active">
                        <i class="bi bi-circle"></i><span>Grafik Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_grafik=grafik_anggaran_lain">
                        <i class="bi bi-circle"></i><span>Grafik Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_grafik=grafik_maintenance">
                        <i class="bi bi-circle"></i><span>Grafik Maintenance</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_grafik=grafik_operasional_yayasan">
                        <i class="bi bi-circle"></i><span>Grafik Operasional</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Grafik Pemasukan Media</span>
                    </a>
                </li>

                <?php } else { ?>
                <?php } ?>

                <?php } elseif ($_GET["id_grafik"] == "grafik_anggaran_lain") { ?>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_program">
                        <i class="bi bi-circle"></i><span>Grafik Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_paudqu">
                        <i class="bi bi-circle"></i><span>Grafik PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_logistik">
                        <i class="bi bi-circle"></i><span>Grafik Logistik</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_grafik=grafik_aset_yayasan">
                        <i class="bi bi-circle"></i><span>Grafik Aset</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_grafik=grafik_uang_makan">
                        <i class="bi bi-circle"></i><span>Grafik Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_grafik=grafik_gaji_karyawan">
                        <i class="bi bi-circle"></i><span>Grafik Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_grafik=grafik_anggaran_lain"
                        class="active">
                        <i class="bi bi-circle"></i><span>Grafik Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_grafik=grafik_maintenance">
                        <i class="bi bi-circle"></i><span>Grafik Maintenance</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_grafik=grafik_operasional_yayasan">
                        <i class="bi bi-circle"></i><span>Grafik Operasional</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Grafik Pemasukan Media</span>
                    </a>
                </li>

                <?php } else { ?>
                <?php } ?>

                <?php } elseif ($_GET["id_grafik"] == "grafik_maintenance") { ?>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_program">
                        <i class="bi bi-circle"></i><span>Grafik Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_paudqu">
                        <i class="bi bi-circle"></i><span>Grafik PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_logistik">
                        <i class="bi bi-circle"></i><span>Grafik Logistik</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_grafik=grafik_aset_yayasan">
                        <i class="bi bi-circle"></i><span>Grafik Aset</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_grafik=grafik_uang_makan">
                        <i class="bi bi-circle"></i><span>Grafik Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_grafik=grafik_gaji_karyawan">
                        <i class="bi bi-circle"></i><span>Grafik Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_grafik=grafik_anggaran_lain">
                        <i class="bi bi-circle"></i><span>Grafik Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_grafik=grafik_maintenance"
                        class="active">
                        <i class="bi bi-circle"></i><span>Grafik Maintenance</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_grafik=grafik_operasional_yayasan">
                        <i class="bi bi-circle"></i><span>Grafik Operasional</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Grafik Pemasukan Media</span>
                    </a>
                </li>

                <?php } else { ?>
                <?php } ?>

                <?php } elseif ($_GET["id_grafik"] == "grafik_operasional_yayasan") { ?>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_program">
                        <i class="bi bi-circle"></i><span>Grafik Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_paudqu">
                        <i class="bi bi-circle"></i><span>Grafik PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_logistik">
                        <i class="bi bi-circle"></i><span>Grafik Logistik</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_grafik=grafik_aset_yayasan">
                        <i class="bi bi-circle"></i><span>Grafik Aset</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_grafik=grafik_uang_makan">
                        <i class="bi bi-circle"></i><span>Grafik Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_grafik=grafik_gaji_karyawan">
                        <i class="bi bi-circle"></i><span>Grafik Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_grafik=grafik_anggaran_lain">
                        <i class="bi bi-circle"></i><span>Grafik Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_grafik=grafik_maintenance">
                        <i class="bi bi-circle"></i><span>Grafik Maintenance</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_grafik=grafik_operasional_yayasan"
                        class="active">
                        <i class="bi bi-circle"></i><span>Grafik Operasional</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Grafik Pemasukan Media</span>
                    </a>
                </li>

                <?php } else { ?>
                <?php } ?>

                <?php } elseif ($_GET["id_grafik"] == "grafik_pemasukanMedia") { ?>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_program">
                        <i class="bi bi-circle"></i><span>Grafik Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_paudqu">
                        <i class="bi bi-circle"></i><span>Grafik PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_logistik">
                        <i class="bi bi-circle"></i><span>Grafik Logistik</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_grafik=grafik_aset_yayasan">
                        <i class="bi bi-circle"></i><span>Grafik Aset</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_grafik=grafik_uang_makan">
                        <i class="bi bi-circle"></i><span>Grafik Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_grafik=grafik_gaji_karyawan">
                        <i class="bi bi-circle"></i><span>Grafik Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_grafik=grafik_anggaran_lain">
                        <i class="bi bi-circle"></i><span>Grafik Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_grafik=grafik_maintenance">
                        <i class="bi bi-circle"></i><span>Grafik Maintenance</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_grafik=grafik_operasional_yayasan">
                        <i class="bi bi-circle"></i><span>Grafik Operasional</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_pemasukanMedia" class="active">
                        <i class="bi bi-circle"></i><span>Grafik Pemasukan Media</span>
                    </a>
                </li>

                <?php } else { ?>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_program">
                        <i class="bi bi-circle"></i><span>Grafik Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_paudqu">
                        <i class="bi bi-circle"></i><span>Grafik PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_logistik" class="active">
                        <i class="bi bi-circle"></i><span>Grafik Logistik</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_grafik=grafik_aset_yayasan">
                        <i class="bi bi-circle"></i><span>Grafik Aset</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_grafik=grafik_uang_makan">
                        <i class="bi bi-circle"></i><span>Grafik Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_grafik=grafik_gaji_karyawan">
                        <i class="bi bi-circle"></i><span>Grafik Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_grafik=grafik_anggaran_lain">
                        <i class="bi bi-circle"></i><span>Grafik Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_grafik=grafik_maintenance">
                        <i class="bi bi-circle"></i><span>Grafik Maintenance</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_grafik=grafik_operasional_yayasan">
                        <i class="bi bi-circle"></i><span>Grafik Operasional</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Grafik Pemasukan Media</span>
                    </a>
                </li>

                <?php } else { ?>
                <?php } ?>
                <?php } ?>


                <?php } elseif ($_SESSION["id_pengurus"] == "kepala_cabang") { ?>
                <?php if ($_GET["id_grafik"] == "grafik_program") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_program" class="active">
                        <i class="bi bi-circle"></i><span>Grafik Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_logistik">
                        <i class="bi bi-circle"></i><span>Grafik Logistik</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Grafik Pemasukan Media</span>
                    </a>
                </li>

                <?php } elseif ($_GET["id_grafik"] == "grafik_pemasukanMedia") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_program">
                        <i class="bi bi-circle"></i><span>Grafik Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_logistik">
                        <i class="bi bi-circle"></i><span>Grafik Logistik</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_pemasukanMedia" class="active">
                        <i class="bi bi-circle"></i><span>Grafik Pemasukan Media</span>
                    </a>
                </li>

                <?php } else { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_program">
                        <i class="bi bi-circle"></i><span>Grafik Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_logistik" class="active">
                        <i class="bi bi-circle"></i><span>Grafik Logistik</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Grafik Pemasukan Media</span>
                    </a>
                </li>
                <?php } ?>

                <?php } elseif ($_SESSION["id_pengurus"] == "kepala_income") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_pemasukanMedia" class="active">
                        <i class="bi bi-circle"></i><span>Grafik Pemasukan Media</span>
                    </a>
                </li>

                <?php } else { ?>
                # code...
                <?php } ?>
            </ul>
        </li>
        <?php }  elseif ($_SESSION["id_pengurus"] == "facebook_depok" || $_SESSION["id_pengurus"] == "facebook_bogor" || $_SESSION["id_pengurus"] == "instagram") { ?>
        <?php } elseif ($_SESSION["id_pengurus"] == "manager_facebook" || $_SESSION["id_pengurus"] == "manager_instagram" || $_SESSION["id_pengurus"] == "facebook") { ?>
        <?php } else { ?>
        <li class="nav-item">
            <?php if ($_SESSION["id_pengurus"] == "admin_web") { ?>
            <?php } else { ?>
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Grafik</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <?php } ?>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "kepala_pengajuan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_program">
                        <i class="bi bi-circle"></i><span>Grafik Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_paudqu">
                        <i class="bi bi-circle"></i><span>Grafik PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_logistik">
                        <i class="bi bi-circle"></i><span>Grafik Logistik</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=aset_yayasan&id_grafik=grafik_aset_yayasan">
                        <i class="bi bi-circle"></i><span>Grafik Aset</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_dataManagement=uang_makan&id_grafik=grafik_uang_makan">
                        <i class="bi bi-circle"></i><span>Grafik Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=gaji_karyawan&id_grafik=grafik_gaji_karyawan">
                        <i class="bi bi-circle"></i><span>Grafik Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=anggaran_lain&id_grafik=grafik_anggaran_lain">
                        <i class="bi bi-circle"></i><span>Grafik Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=maintenance&id_grafik=grafik_maintenance">
                        <i class="bi bi-circle"></i><span>Grafik Maintenance</span>
                    </a>
                </li>

                <li>
                    <a
                        href="<?= $_SESSION["username"] ?>.php?id_dataManagement=operasional_yayasan&id_grafik=grafik_operasional_yayasan">
                        <i class="bi bi-circle"></i><span>Grafik Operasional</span>
                    </a>
                </li>

                <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Grafik Pemasukan Media</span>
                    </a>
                </li>

                <?php } else { ?>
                <?php } ?>

                <?php } elseif ($_SESSION["id_pengurus"] == "kepala_cabang") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_program">
                        <i class="bi bi-circle"></i><span>Grafik Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_logistik">
                        <i class="bi bi-circle"></i><span>Grafik Logistik</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Grafik Pemasukan Media</span>
                    </a>
                </li>

                <?php } elseif ($_SESSION["id_pengurus"] == "kepala_income") { ?>
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_grafik=grafik_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Grafik Pemasukan Media</span>
                    </a>
                </li>

                <?php } else { ?>
                # code...
                <?php } ?>
            </ul>
        </li>
        <?php } ?>

        <!-- End Charts Nav -->

        <?php if ($_SESSION["id_pengurus"] == "management_keuangan") { ?>
        <?php if ($_GET["id_checklist"] == "checklist_pengajuan" || $_GET["id_checklist"] == "checklist_verifikasi" || $_GET["id_checklist"] == "checklist_laporan") { ?>
        <li class="nav-item">
            <a class="nav-link" data-bs-target="#checklist-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-check"></i><span>Checklist</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="checklist-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuan" class="active">
                        <i class="bi bi-circle"></i><span>Checklist Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanPaudqu">
                        <i class="bi bi-circle"></i><span>Checklist PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanLogistik">
                        <i class="bi bi-circle"></i><span>Checklist Logistik</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAset">
                        <i class="bi bi-circle"></i><span>Checklist Aset</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanUangmakan">
                        <i class="bi bi-circle"></i><span>Checklist Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanGajikaryawan">
                        <i class="bi bi-circle"></i><span>Checklist Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAnggaranlain">
                        <i class="bi bi-circle"></i><span>Checklist Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanMaintenance">
                        <i class="bi bi-circle"></i><span>Checklist Maintenance</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanOperasional">
                        <i class="bi bi-circle"></i><span>Checklist Operasional</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Pemasukan Media</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Checklist Nav -->

        <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanPaudqu" || $_GET["id_checklist"] == "checklist_verifikasiPaudqu" || $_GET["id_checklist"] == "checklist_laporanPaudqu") { ?>
        <li class="nav-item">
            <a class="nav-link" data-bs-target="#checklist-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-check"></i><span>Checklist</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="checklist-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuan">
                        <i class="bi bi-circle"></i><span>Checklist Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanPaudqu" class="active">
                        <i class="bi bi-circle"></i><span>Checklist PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanLogistik">
                        <i class="bi bi-circle"></i><span>Checklist Logistik</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAset">
                        <i class="bi bi-circle"></i><span>Checklist Aset</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanUangmakan">
                        <i class="bi bi-circle"></i><span>Checklist Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanGajikaryawan">
                        <i class="bi bi-circle"></i><span>Checklist Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAnggaranlain">
                        <i class="bi bi-circle"></i><span>Checklist Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanMaintenance">
                        <i class="bi bi-circle"></i><span>Checklist Maintenance</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanOperasional">
                        <i class="bi bi-circle"></i><span>Checklist Operasional</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Pemasukan Media</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Checklist Nav -->

        <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanLogistik" || $_GET["id_checklist"] == "checklist_verifikasiLogistik" || $_GET["id_checklist"] == "checklist_laporanLogistik") { ?>
        <li class="nav-item">
            <a class="nav-link" data-bs-target="#checklist-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-check"></i><span>Checklist</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="checklist-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuan">
                        <i class="bi bi-circle"></i><span>Checklist Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanPaudqu">
                        <i class="bi bi-circle"></i><span>Checklist PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanLogistik" class="active">
                        <i class="bi bi-circle"></i><span>Checklist Logistik</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAset">
                        <i class="bi bi-circle"></i><span>Checklist Aset</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanUangmakan">
                        <i class="bi bi-circle"></i><span>Checklist Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanGajikaryawan">
                        <i class="bi bi-circle"></i><span>Checklist Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAnggaranlain">
                        <i class="bi bi-circle"></i><span>Checklist Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanMaintenance">
                        <i class="bi bi-circle"></i><span>Checklist Maintenance</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanOperasional">
                        <i class="bi bi-circle"></i><span>Checklist Operasional</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Pemasukan Media</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Checklist Nav -->

        <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanAset" || $_GET["id_checklist"] == "checklist_verifikasiAset" || $_GET["id_checklist"] == "checklist_laporanAset") { ?>
        <li class="nav-item">
            <a class="nav-link" data-bs-target="#checklist-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-check"></i><span>Checklist</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="checklist-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuan">
                        <i class="bi bi-circle"></i><span>Checklist Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanPaudqu">
                        <i class="bi bi-circle"></i><span>Checklist PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanLogistik">
                        <i class="bi bi-circle"></i><span>Checklist Logistik</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAset" class="active">
                        <i class="bi bi-circle"></i><span>Checklist Aset</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanUangmakan">
                        <i class="bi bi-circle"></i><span>Checklist Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanGajikaryawan">
                        <i class="bi bi-circle"></i><span>Checklist Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAnggaranlain">
                        <i class="bi bi-circle"></i><span>Checklist Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanMaintenance">
                        <i class="bi bi-circle"></i><span>Checklist Maintenance</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanOperasional">
                        <i class="bi bi-circle"></i><span>Checklist Operasional</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Pemasukan Media</span>
                    </a>
                </li>

            </ul>
        </li>
        <!-- End Checklist Nav -->

        <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanUangmakan" || $_GET["id_checklist"] == "checklist_verifikasiUangmakan" || $_GET["id_checklist"] == "checklist_laporanUangmakan") { ?>
        <li class="nav-item">
            <a class="nav-link" data-bs-target="#checklist-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-check"></i><span>Checklist</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="checklist-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuan">
                        <i class="bi bi-circle"></i><span>Checklist Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanPaudqu">
                        <i class="bi bi-circle"></i><span>Checklist PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanLogistik">
                        <i class="bi bi-circle"></i><span>Checklist Logistik</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAset">
                        <i class="bi bi-circle"></i><span>Checklist Aset</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanUangmakan" class="active">
                        <i class="bi bi-circle"></i><span>Checklist Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanGajikaryawan">
                        <i class="bi bi-circle"></i><span>Checklist Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAnggaranlain">
                        <i class="bi bi-circle"></i><span>Checklist Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanMaintenance">
                        <i class="bi bi-circle"></i><span>Checklist Maintenance</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanOperasional">
                        <i class="bi bi-circle"></i><span>Checklist Operasional</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Pemasukan Media</span>
                    </a>
                </li>

            </ul>
        </li>
        <!-- End Checklist Nav -->

        <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanGajikaryawan" || $_GET["id_checklist"] == "checklist_verifikasiGajikaryawan" || $_GET["id_checklist"] == "checklist_laporanGajikaryawan") { ?>
        <li class="nav-item">
            <a class="nav-link" data-bs-target="#checklist-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-check"></i><span>Checklist</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="checklist-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuan">
                        <i class="bi bi-circle"></i><span>Checklist Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanPaudqu">
                        <i class="bi bi-circle"></i><span>Checklist PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanLogistik">
                        <i class="bi bi-circle"></i><span>Checklist Logistik</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAset">
                        <i class="bi bi-circle"></i><span>Checklist Aset</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanUangmakan">
                        <i class="bi bi-circle"></i><span>Checklist Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanGajikaryawan"
                        class="active">
                        <i class=" bi bi-circle"></i><span>Checklist Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAnggaranlain">
                        <i class="bi bi-circle"></i><span>Checklist Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanMaintenance">
                        <i class="bi bi-circle"></i><span>Checklist Maintenance</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanOperasional">
                        <i class="bi bi-circle"></i><span>Checklist Operasional</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Pemasukan Media</span>
                    </a>
                </li>

            </ul>
        </li>
        <!-- End Checklist Nav -->

        <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanAnggaranlain" || $_GET["id_checklist"] == "checklist_verifikasiAnggaranlain" || $_GET["id_checklist"] == "checklist_laporanAnggaranlain") { ?>
        <li class="nav-item">
            <a class="nav-link" data-bs-target="#checklist-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-check"></i><span>Checklist</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="checklist-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuan">
                        <i class="bi bi-circle"></i><span>Checklist Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanPaudqu">
                        <i class="bi bi-circle"></i><span>Checklist PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanLogistik">
                        <i class="bi bi-circle"></i><span>Checklist Logistik</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAset">
                        <i class="bi bi-circle"></i><span>Checklist Aset</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanUangmakan">
                        <i class="bi bi-circle"></i><span>Checklist Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanGajikaryawan">
                        <i class="bi bi-circle"></i><span>Checklist Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAnggaranlain"
                        class="active">
                        <i class="bi bi-circle"></i><span>Checklist Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanMaintenance">
                        <i class="bi bi-circle"></i><span>Checklist Maintenance</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanOperasional">
                        <i class="bi bi-circle"></i><span>Checklist Operasional</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Pemasukan Media</span>
                    </a>
                </li>

            </ul>
        </li>
        <!-- End Checklist Nav -->

        <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanMaintenance" || $_GET["id_checklist"] == "checklist_verifikasiMaintenance" || $_GET["id_checklist"] == "checklist_laporanMaintenance") { ?>
        <li class="nav-item">
            <a class="nav-link" data-bs-target="#checklist-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-check"></i><span>Checklist</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="checklist-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuan">
                        <i class="bi bi-circle"></i><span>Checklist Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanPaudqu">
                        <i class="bi bi-circle"></i><span>Checklist PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanLogistik">
                        <i class="bi bi-circle"></i><span>Checklist Logistik</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAset">
                        <i class="bi bi-circle"></i><span>Checklist Aset</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanUangmakan">
                        <i class="bi bi-circle"></i><span>Checklist Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanGajikaryawan">
                        <i class="bi bi-circle"></i><span>Checklist Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAnggaranlain">
                        <i class="bi bi-circle"></i><span>Checklist Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanMaintenance"
                        class="active">
                        <i class="bi bi-circle"></i><span>Checklist Maintenance</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanOperasional">
                        <i class="bi bi-circle"></i><span>Checklist Operasional</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Pemasukan Media</span>
                    </a>
                </li>

            </ul>
        </li>
        <!-- End Checklist Nav -->

        <?php } elseif ($_GET["id_checklist"] == "checklist_pengajuanOperasional" || $_GET["id_checklist"] == "checklist_verifikasiOperasional" || $_GET["id_checklist"] == "checklist_laporanOperasional") { ?>
        <li class="nav-item">
            <a class="nav-link" data-bs-target="#checklist-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-check"></i><span>Checklist</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="checklist-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuan">
                        <i class="bi bi-circle"></i><span>Checklist Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanPaudqu">
                        <i class="bi bi-circle"></i><span>Checklist PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanLogistik">
                        <i class="bi bi-circle"></i><span>Checklist Logistik</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAset">
                        <i class="bi bi-circle"></i><span>Checklist Aset</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanUangmakan">
                        <i class="bi bi-circle"></i><span>Checklist Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanGajikaryawan">
                        <i class="bi bi-circle"></i><span>Checklist Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAnggaranlain">
                        <i class="bi bi-circle"></i><span>Checklist Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanMaintenance">
                        <i class="bi bi-circle"></i><span>Checklist Maintenance</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanOperasional"
                        class="active">
                        <i class="bi bi-circle"></i><span>Checklist Operasional</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Pemasukan Media</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Checklist Nav -->

        <?php } elseif ($_GET["id_checklist"] == "checklist_pemasukanMedia") { ?>
        <li class="nav-item">
            <a class="nav-link" data-bs-target="#checklist-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-check"></i><span>Checklist</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="checklist-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuan">
                        <i class="bi bi-circle"></i><span>Checklist Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanPaudqu">
                        <i class="bi bi-circle"></i><span>Checklist PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanLogistik">
                        <i class="bi bi-circle"></i><span>Checklist Logistik</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAset">
                        <i class="bi bi-circle"></i><span>Checklist Aset</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanUangmakan">
                        <i class="bi bi-circle"></i><span>Checklist Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanGajikaryawan">
                        <i class="bi bi-circle"></i><span>Checklist Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAnggaranlain">
                        <i class="bi bi-circle"></i><span>Checklist Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanMaintenance">
                        <i class="bi bi-circle"></i><span>Checklist Maintenance</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanOperasional">
                        <i class="bi bi-circle"></i><span>Checklist Operasional</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pemasukanMedia" class="active">
                        <i class="bi bi-circle"></i><span>Pemasukan Media</span>
                    </a>
                </li>

            </ul>
        </li>
        <!-- End Checklist Nav -->

        <?php } else { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#checklist-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-check"></i><span>Checklist</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="checklist-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuan">
                        <i class="bi bi-circle"></i><span>Checklist Program</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanPaudqu">
                        <i class="bi bi-circle"></i><span>Checklist PaudQu</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanLogistik">
                        <i class="bi bi-circle"></i><span>Checklist Logistik</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAset">
                        <i class="bi bi-circle"></i><span>Checklist Aset</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanUangmakan">
                        <i class="bi bi-circle"></i><span>Checklist Uang Makan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanGajikaryawan">
                        <i class="bi bi-circle"></i><span>Checklist Gaji Karyawan</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAnggaranlain">
                        <i class="bi bi-circle"></i><span>Checklist Biaya Lainnya</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanMaintenance">
                        <i class="bi bi-circle"></i><span>Checklist Maintenance</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanOperasional">
                        <i class="bi bi-circle"></i><span>Checklist Operasional</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pemasukanMedia">
                        <i class="bi bi-circle"></i><span>Pemasukan Media</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Checklist Nav -->
        <?php } ?>

        <?php } else { ?>
        <?php } ?>


        <!-- End Daily Report Nav -->
        <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
        <li class="nav-heading">Pages</li>

        <?php if ($_GET["id_profil"] == "myProfil") { ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= $_SESSION["username"] ?>.php?id_profil=myProfil">
                <i class="bi bi-person"></i>
                <span>Profil</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?id_profil=dataPengurus">
                <i class="bi bi-people"></i>
                <span>Data Pengurus</span><span class="badge badge-danger badge-counter">New</span>
            </a>
        </li><!-- End data member Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?id_profil=logActivity">
                <i class="bi bi-list-check"></i>
                <span>Log aktivitas</span>
            </a>
        </li>

        <?php } elseif ($_GET["id_profil"] == "dataPengurus" || $_GET["id_accountKey"] == true) { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?id_profil=myProfil">
                <i class="bi bi-person"></i>
                <span>Profil</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link" href="<?= $_SESSION["username"] ?>.php?id_profil=dataPengurus">
                <i class="bi bi-people"></i>
                <span>Data Pengurus</span><span class="badge badge-danger badge-counter">New</span>
            </a>
        </li><!-- End data member Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?id_profil=logActivity">
                <i class="bi bi-list-check"></i>
                <span>Log aktivitas</span>
            </a>
        </li>

        <?php } elseif ($_GET["id_profil"] == "logActivity") { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?id_profil=myProfil">
                <i class="bi bi-person"></i>
                <span>Profil</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?id_profil=dataPengurus">
                <i class="bi bi-people"></i>
                <span>Data Pengurus</span><span class="badge badge-danger badge-counter">New</span>
            </a>
        </li><!-- End data member Page Nav -->

        <li class="nav-item">
            <a class="nav-link" href="<?= $_SESSION["username"] ?>.php?id_profil=logActivity">
                <i class="bi bi-list-check"></i>
                <span>Log aktivitas</span>
            </a>
        </li>

        <?php } else { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?id_profil=myProfil">
                <i class="bi bi-person"></i>
                <span>Profil</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?id_profil=dataPengurus">
                <i class="bi bi-people"></i>
                <span>Data Pengurus</span><span class="badge badge-danger badge-counter">New</span>
            </a>
        </li><!-- End data member Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?id_profil=logActivity">
                <i class="bi bi-list-check"></i>
                <span>Log aktivitas</span>
            </a>
        </li><!-- End Log Activity Page Nav -->
        <?php } ?>

        <!-- End Log Aktivitas Page Nav -->
        <?php } else { ?>
        <li class="nav-heading">Pages</li>

        <?php if ($id_management == "") { ?>
        <?php if ($_GET["id_profil"] == "myProfil") { ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= $_SESSION["username"] ?>.php?id_profil=myProfil">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li>
        <?php } else { ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= $_SESSION["username"] ?>.php?id_profil=myProfil">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li>
        <?php } ?>
        <?php } else { ?>
        <?php if ($_GET["id_profil"] == "myProfil") { ?>
        <li class="nav-item">
            <a class="nav-link"
                href="<?= $_SESSION["username"] ?>.php?id_management=<?= $id_management ?>&id_profil=myProfil">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li>
        <?php } else { ?>
        <li class="nav-item">
            <a class="nav-link collapsed"
                href="<?= $_SESSION["username"] ?>.php?id_management=<?= $id_management ?>&id_profil=myProfil">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li>
        <?php } ?>
        <?php } ?>


        <!-- End Profile Page Nav -->
        <?php }?>

        <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
        <li class="nav-heading">Menu</li>

        <li class="nav-item"></i>
            <a class="nav-link collapsed"
                href="https://eprogram.alkiromamanah.com/redirect.php?toAction=Eprogram&user=<?= $_SESSION["id_pengurus"] ?>"
                target="_blank">
                <i class="bi bi-stack"></i>
                <span>Eprogram</span>
            </a>
        </li>
        <!-- End Eprogram Page Nav -->

        <li class="nav-item"></i>
            <a class="nav-link collapsed"
                href="https://ebudgeting.dompetdonasi.com/redirect.php?toAction=Ebudgeting&user=<?= $_SESSION["id_pengurus"] ?>"
                target="_blank">
                <i class="bi bi-stack"></i><span class="badge badge-danger badge-counter">New</span>
                <span>DYPA Ebudgeting</span>
            </a>
        </li>
        <!-- End Eprogram Page Nav -->
        <?php } elseif ($_SESSION["id_pengurus"] == "kepala_cabang") { ?>
        <li class="nav-heading">Menu</li>

        <li class="nav-item"></i>
            <a class="nav-link collapsed"
                href="https://eprogram.alkiromamanah.com/redirect.php?toAction=Eprogram&user=<?= $_SESSION["id_pengurus"] ?>"
                target="_blank">
                <i class="bi bi-stack"></i><span class="badge badge-danger badge-counter">New</span>
                <span>Eprogram</span>
            </a>
        </li>
        <!-- End Eprogram Page Nav -->

        <?php } ?>

    </ul>

</aside><!-- End Sidebar-->