<?php
if ($_SESSION["id_pengurus"] == "management_keuangan") {
    // program
    $q  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE laporan = 'Belum Laporan' AND status = 'Pending' ORDER BY `tgl_pengajuan` DESC");
    $s = $q->num_rows;

    $q2  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE laporan = 'Menunggu Verifikasi' ORDER BY `tgl_pengajuan` DESC");
    $s2 = $q2->num_rows;
    
    // paudqu
    $q_paud  = mysqli_query($conn, "SELECT * FROM 2022_paudqu WHERE laporan = 'Belum Laporan' AND status = 'Pending' ORDER BY `tgl_pengajuan` DESC");
    $paud = $q_paud->num_rows;

    $q_paud2  = mysqli_query($conn, "SELECT * FROM 2022_paudqu WHERE laporan = 'Menunggu Verifikasi' ORDER BY `tgl_pengajuan` DESC");
    $paud2 = $q_paud2->num_rows;

    // logistik
    $n_log  = mysqli_query($conn, "SELECT * FROM 2022_logistik WHERE laporan = 'Belum Laporan' AND status = 'Pending' ORDER BY `tgl_pengajuan` DESC");
    $logistik = $n_log->num_rows;

    $n_log2  = mysqli_query($conn, "SELECT * FROM 2022_logistik WHERE laporan = 'Menunggu Verifikasi' ORDER BY `tgl_pengajuan` DESC");
    $logistik2 = $n_log2->num_rows;

    // aset yayasan
    $n_as   = mysqli_query($conn, "SELECT * FROM 2022_aset_yayasan WHERE laporan = 'Belum Laporan' AND status = 'Pending' ORDER BY `tgl_dibuat` DESC");
    $aset   = $n_as->num_rows;

    $n_as2  = mysqli_query($conn, "SELECT * FROM 2022_aset_yayasan WHERE laporan = 'Menunggu Verifikasi' ORDER BY `tgl_dibuat` DESC");
    $aset2  = $n_as2->num_rows;

    // uang makan
    $n_uang     = mysqli_query($conn, "SELECT * FROM 2022_uang_makan WHERE laporan = 'Belum Laporan' AND status = 'Pending' ORDER BY `tgl_dibuat` DESC");
    $uang_makan = $n_uang->num_rows;

    $n_uang2        = mysqli_query($conn, "SELECT * FROM 2022_uang_makan WHERE laporan = 'Menunggu Verifikasi' ORDER BY `tgl_dibuat` DESC");
    $uang_makan2    = $n_uang2->num_rows;

    // gaji karyawan
    $n_gaji         = mysqli_query($conn, "SELECT * FROM 2022_gaji_karyawan WHERE laporan = 'Belum Laporan' AND status = 'Pending' ORDER BY `tgl_dibuat` DESC");
    $gaji_karyawan  = $n_gaji->num_rows;

    $n_gaji2        = mysqli_query($conn, "SELECT * FROM 2022_gaji_karyawan WHERE laporan = 'Menunggu Verifikasi' ORDER BY `tgl_dibuat` DESC");
    $gaji_karyawan2 = $n_gaji2->num_rows;

    // biaya lainnya
    $n_lain         = mysqli_query($conn, "SELECT * FROM 2022_anggaran_lain WHERE laporan = 'Belum Laporan' AND status = 'Pending' ORDER BY `tgl_dibuat` DESC");
    $anggaran_lain  = $n_lain->num_rows;

    $n_lain2        = mysqli_query($conn, "SELECT * FROM 2022_anggaran_lain WHERE laporan = 'Menunggu Verifikasi' ORDER BY `tgl_dibuat` DESC");
    $anggaran_lain2 = $n_lain2->num_rows;

    // Maintenance
    $n_main         = mysqli_query($conn, "SELECT * FROM 2022_maintenance WHERE laporan = 'Belum Laporan' AND status = 'Pending' ORDER BY `tgl_dibuat` DESC");
    $maintenance    = $n_main->num_rows;

    $n_main2        = mysqli_query($conn, "SELECT * FROM 2022_maintenance WHERE laporan = 'Menunggu Verifikasi' ORDER BY `tgl_dibuat` DESC");
    $maintenance2   = $n_main2->num_rows;

    // income media sosial
    $n_inMedia      = mysqli_query($conn, "SELECT * FROM 2022_income WHERE status = 'Menunggu Verifikasi' ORDER BY `tgl_pemasukan` DESC");
    $incomeMedia    = $n_inMedia->num_rows;
    
    // non resi
    $n_inNonresi      = mysqli_query($conn, "SELECT * FROM 2022_incometanparesi WHERE status = 'Menunggu Verifikasi' ORDER BY `tgl_pemasukan` DESC");
    $incomeNonresi    = $n_inNonresi->num_rows;

    // operasional yayasan
    $n_oy         = mysqli_query($conn, "SELECT * FROM 2022_operasional_yayasan WHERE laporan = 'Belum Laporan' AND status = 'Pending' ORDER BY `tgl_dibuat` DESC");
    $operasional_yayasan    = $n_oy->num_rows;

    $n_oy2        = mysqli_query($conn, "SELECT * FROM 2022_operasional_yayasan WHERE laporan = 'Menunggu Verifikasi' ORDER BY `tgl_dibuat` DESC");
    $operasional_yayasan2   = $n_oy2->num_rows;

} elseif ($_SESSION["id_pengurus"] == "kepala_income") {
    // income media sosial
    $n_in      = mysqli_query($conn, "SELECT * FROM income_media WHERE status = 'Menunggu Verifikasi' ORDER BY `tanggal_tf` DESC");
    $income    = $n_in->num_rows;

} else {
    // program
    $q  = mysqli_query($conn, "SELECT * FROM 2022_program WHERE laporan = 'Belum Laporan' AND status = 'OK' ORDER BY `tgl_pengajuan` DESC");
    $s = $q->num_rows;
    
    // paud
    $q_paud  = mysqli_query($conn, "SELECT * FROM 2022_paudqu WHERE laporan = 'Belum Laporan' AND status = 'OK' ORDER BY `tgl_pengajuan` DESC");
    $paud = $q_paud->num_rows;

    // logistik
    $n_log  = mysqli_query($conn, "SELECT * FROM 2022_logistik WHERE laporan = 'Belum Laporan' AND status = 'OK' ORDER BY `tgl_pengajuan` DESC");
    $logistik = $n_log->num_rows;

    // aset yayasan
    $n_as   = mysqli_query($conn, "SELECT * FROM 2022_aset_yayasan WHERE laporan = 'Belum Laporan' AND status = 'OK' ORDER BY `tgl_dibuat` DESC");
    $aset   = $n_as->num_rows;

    // uang makan
    $n_uang     = mysqli_query($conn, "SELECT * FROM 2022_uang_makan WHERE laporan = 'Belum Laporan' AND status = 'OK' ORDER BY `tgl_dibuat` DESC");
    $uang_makan = $n_uang->num_rows;

    // gaji karyawan
    $n_gaji         = mysqli_query($conn, "SELECT * FROM 2022_gaji_karyawan WHERE laporan = 'Belum Laporan' AND status = 'OK' ORDER BY `tgl_dibuat` DESC");
    $gaji_karyawan  = $n_gaji->num_rows;

    // biaya lainnya
    $n_lain         = mysqli_query($conn, "SELECT * FROM 2022_anggaran_lain WHERE laporan = 'Belum Laporan' AND status = 'OK' ORDER BY `tgl_dibuat` DESC");
    $anggaran_lain  = $n_lain->num_rows;

    // Maintenance
    $n_main         = mysqli_query($conn, "SELECT * FROM 2022_maintenance WHERE laporan = 'Belum Laporan' AND status = 'OK' ORDER BY `tgl_dibuat` DESC");
    $maintenance    = $n_main->num_rows;

    // operasional yayasan
    $n_oy         = mysqli_query($conn, "SELECT * FROM 2022_operasional_yayasan WHERE laporan = 'Belum Laporan' AND status = 'OK' ORDER BY `tgl_dibuat` DESC");
    $operasional_yayasan    = $n_oy->num_rows;
}

if ($_SESSION["id_pengurus"] == "admin_web") {
    $querySaran = mysqli_query($conn, "SELECT * FROM kritiksaran ORDER BY tgl_saran DESC");
    $saran      = $querySaran->num_rows;

} else {
    $querySaran = mysqli_query($conn, "SELECT * FROM kritiksaran WHERE nama = '$_SESSION[nama]' ORDER BY tgl_saran DESC");
    $saran      = $querySaran->num_rows;
}

if (isset($_POST["inputSaran"]) ) {
    $link = $_SESSION["username"];
    if(kritikSaran($_POST) > 0 ) {
    echo "<script>
            alert('Kritik Dan Saran Berhasil Dikirim');
            document.location.href = '$link.php';
        </script>";            
    } 
        else {
        echo mysqli_error($conn);
    }
}

if (isset($_POST["editSaran"]) ) {
    $link = $_SESSION["username"];
    if(editSaran($_POST) > 0 ) {
    echo "<script>
            alert('Saran berhasil diubah');
            document.location.href = '$link.php';
        </script>";            
    } 
        else {
        echo mysqli_error($conn);
    }
}

if (isset($_POST["balasSaran"]) ) {
    $link = $_SESSION["username"];
    if(balasSaran($_POST) > 0 ) {
    echo "<script>
            alert('Balasan terkirim');
            document.location.href = '$link.php';
        </script>";            
    } 
        else {
        echo mysqli_error($conn);
    }
}
?>

<?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "admin_web") { ?>
<?php }  elseif ($_SESSION["id_pengurus"] == "facebook_depok") { ?>
<?php }  elseif ($_SESSION["id_pengurus"] == "facebook_bogor") { ?>
<?php }  elseif ($_SESSION["id_pengurus"] == "facebook") { ?>
<?php }  elseif ($_SESSION["id_pengurus"] == "instagram") { ?>
<?php } elseif ($_SESSION["id_pengurus"] == "manager_facebook" || $_SESSION["id_pengurus"] == "manager_instagram") { ?>
<?php }  elseif ($_SESSION["id_pengurus"] == "kepala_pengajuan") { ?>
<li class="nav-item dropdown">
    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-bell"></i>
        <?php if ($s+$logistik+$aset+$uang_makan+$gaji_karyawan+$anggaran_lain+$maintenance+$operasional_yayasan+$paud > 0) { ?>
        <span
            class="badge bg-primary badge-number"><?= $s+$logistik+$aset+$uang_makan+$gaji_karyawan+$anggaran_lain+$maintenance+$operasional_yayasan+$paud ?></span>
        <?php } ?>
    </a><!-- End Notification Icon -->
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications ketua-yayasan">
        <?php if ($s+$logistik+$aset+$uang_makan+$gaji_karyawan+$anggaran_lain+$maintenance+$operasional_yayasan+$paud > 0) { ?>
        <li class="dropdown-header">
            Kamu mempunyai
            <?= $s+$logistik+$aset+$uang_makan+$gaji_karyawan+$anggaran_lain+$maintenance+$operasional_yayasan+$paud ?>
            notifikasi baru
        </li>

        <?php if ($s > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_verifikasi&id_dataManagement=program">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-up text-primary"></i>
                <div>
                    <h4>Pengajuan Program</h4>
                    <p>Ada <?= $s ?> pengajuan perlu dilaporkan</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($paud > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_verifikasi&id_dataManagement=paudqu">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-up text-primary"></i>
                <div>
                    <h4>Pengajuan PaudQu</h4>
                    <p>Ada <?= $paud ?> pengajuan perlu dilaporkan</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($logistik > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_verifikasi&id_dataManagement=logistik">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-up text-primary"></i>
                <div>
                    <h4>Pengajuan Logistik</h4>
                    <p>Ada <?= $logistik ?> pengajuan perlu dilaporkan</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($aset > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_verifikasi&id_dataManagement=aset_yayasan">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-up text-primary"></i>
                <div>
                    <h4>Pengajuan Aset Yayasan</h4>
                    <p>Ada <?= $aset ?> pengajuan perlu dilaporkan</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($uang_makan > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_verifikasi&id_dataManagement=uang_makan">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-up text-primary"></i>
                <div>
                    <h4>Pengajuan Uang Makan</h4>
                    <p>Ada <?= $uang_makan ?> pengajuan perlu dilaporkan</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($gaji_karyawan > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_verifikasi&id_dataManagement=gaji_karyawan">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-up text-primary"></i>
                <div>
                    <h4>Pengajuan Gaji Karyawan</h4>
                    <p>Ada <?= $gaji_karyawan ?> pengajuan perlu dilaporkan</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($anggaran_lain > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_verifikasi&id_dataManagement=anggaran_lain">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-up text-primary"></i>
                <div>
                    <h4>Pengajuan Biaya Lainnya</h4>
                    <p>Ada <?= $anggaran_lain ?> pengajuan perlu dilaporkan</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($maintenance > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_verifikasi&id_dataManagement=maintenance">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-up text-primary"></i>
                <div>
                    <h4>Pengajuan Maintenance</h4>
                    <p>Ada <?= $maintenance ?> pengajuan perlu dilaporkan</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($operasional_yayasan > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_verifikasi&id_dataManagement=operasional_yayasan">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-up text-primary"></i>
                <div>
                    <h4>Pengajuan Operasional</h4>
                    <p>Ada <?= $operasional_yayasan ?> pengajuan perlu dilaporkan</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php } else { ?>
        <li class="dropdown-header">
            Tidak ada notifikasi terbaru
        </li>
        <?php } ?>
    </ul><!-- End Notification Dropdown Items -->
</li><!-- End Notification Nav -->
<!-- End Notification Nav -->
<?php } elseif ($_SESSION["id_pengurus"] == "kepala_income") { ?>
<?php if ($id_management == "") { ?>
<li class="nav-item dropdown">
    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-bell"></i>
        <?php if ($income > 0) { ?>
        <span class="badge bg-danger badge-number"><?= $income ?></span>
        <?php } ?>
    </a><!-- End Notification Icon -->
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications ketua-yayasan">
        <?php if ($income > 0) { ?>
        <li class="dropdown-header">
            Kamu mempunyai
            <?= $income ?>
            notifikasi baru
        </li>

        <?php if ($income > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_check">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-credit-card text-warning"></i>
                <div>
                    <h4>Check Income</h4>
                    <p>Ada <?= $income ?> Income perlu dilaporkan</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php } else { ?>
        <li class="dropdown-header">
            Tidak ada notifikasi terbaru
        </li>
        <?php } ?>
    </ul><!-- End Notification Dropdown Items -->
</li>
<?php } ?>

<!-- End Notification Nav -->
<?php } elseif ($_SESSION["id_pengurus"] == "management_keuangan") { ?>
<li class="nav-item dropdown">
    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-bell"></i>
        <?php if ($s+$s2+$logistik+$logistik2+$aset+$aset2+$uang_makan+$uang_makan2+$gaji_karyawan+$gaji_karyawan2+$anggaran_lain+$anggaran_lain2+$maintenance+$maintenance2+$operasional_yayasan+$operasional_yayasan2+$incomeMedia+$incomeNonresi+$paud+$paud2 > 0) { ?>
        <span
            class="badge bg-primary badge-number"><?= $s+$s2+$logistik+$logistik2+$aset+$aset2+$uang_makan+$uang_makan2+$gaji_karyawan+$gaji_karyawan2+$anggaran_lain+$anggaran_lain2+$maintenance+$maintenance2+$incomeHumas+$operasional_yayasan+$operasional_yayasan2+$incomeMedia+$incomeNonresi+$paud+$paud2 ?></span>
        <?php } ?>
    </a><!-- End Notification Icon -->
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications ketua-yayasan">
        <?php if ($s+$s2+$logistik+$logistik2+$aset+$aset2+$uang_makan+$uang_makan2+$gaji_karyawan+$gaji_karyawan2+$anggaran_lain+$anggaran_lain2+$maintenance+$maintenance2+$operasional_yayasan+$operasional_yayasan2+$incomeMedia+$incomeNonresi+$paud+$paud2 > 0) { ?>
        <li class="dropdown-header">
            Kamu mempunyai
            <?= $s+$s2+$logistik+$logistik2+$aset+$aset2+$uang_makan+$uang_makan2+$gaji_karyawan+$gaji_karyawan2+$anggaran_lain+$anggaran_lain2+$maintenance+$maintenance2+$operasional_yayasan+$operasional_yayasan2+$incomeMedia+$incomeNonresi+$paud+$paud2 ?>
            notifikasi baru
        </li>

        <?php if ($incomeMedia+$incomeNonresi > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pemasukanMedia">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-credit-card text-warning"></i>
                <div>
                    <h4>Pemasukan Media</h4>
                    <p>Ada <?= $incomeMedia+$incomeNonresi ?> Pemasukan perlu disetujui</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($s > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuan">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-up text-primary"></i>
                <div>
                    <h4>Pengajuan Program</h4>
                    <p>Ada <?= $s ?> pengajuan perlu disetujui</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($paud > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanPaudqu">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-up text-primary"></i>
                <div>
                    <h4>Pengajuan PaudQu</h4>
                    <p>Ada <?= $paud ?> pengajuan perlu disetujui</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($logistik > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanLogistik">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-up text-primary"></i>
                <div>
                    <h4>Pengajuan Logistik</h4>
                    <p>Ada <?= $logistik ?> pengajuan perlu disetujui</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($aset > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAset">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-up text-primary"></i>
                <div>
                    <h4>Pengajuan Aset Yayasan</h4>
                    <p>Ada <?= $aset ?> pengajuan perlu disetujui</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($uang_makan > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanUangmakan">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-up text-primary"></i>
                <div>
                    <h4>Pengajuan Uang Makan</h4>
                    <p>Ada <?= $uang_makan ?> pengajuan perlu disetujui</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($gaji_karyawan > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanGajikaryawan">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-up text-primary"></i>
                <div>
                    <h4>Pengajuan Gaji Karyawan</h4>
                    <p>Ada <?= $gaji_karyawan ?> pengajuan perlu disetujui</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($anggaran_lain > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanAnggaranlain">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-up text-primary"></i>
                <div>
                    <h4>Pengajuan Biaya Lainnya</h4>
                    <p>Ada <?= $anggaran_lain ?> pengajuan perlu disetujui</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($maintenance > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanMaintenance">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-up text-primary"></i>
                <div>
                    <h4>Pengajuan Maintenance</h4>
                    <p>Ada <?= $maintenance ?> pengajuan perlu disetujui</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($operasional_yayasan > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuanOperasional">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-up text-primary"></i>
                <div>
                    <h4>Pengajuan Operasional</h4>
                    <p>Ada <?= $operasional_yayasan ?> pengajuan perlu disetujui</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($s2 > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>

        <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_laporan">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-down text-success"></i>
                <div>
                    <h4>Laporan Program</h4>
                    <p>Ada <?= $s2 ?> laporan perlu disutujui</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($paud2 > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>

        <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_laporanPaudqu">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-down text-success"></i>
                <div>
                    <h4>Laporan PaudQu</h4>
                    <p>Ada <?= $paud2 ?> laporan perlu disutujui</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($logistik2 > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>

        <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_laporanLogistik">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-down text-success"></i>
                <div>
                    <h4>Laporan Logistik</h4>
                    <p>Ada <?= $logistik2 ?> laporan perlu disutujui</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($aset2 > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>

        <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_laporanAset">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-down text-success"></i>
                <div>
                    <h4>Laporan Aset Yayasan</h4>
                    <p>Ada <?= $aset2 ?> laporan perlu disutujui</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($uang_makan2 > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>

        <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_laporanUangmakan">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-down text-success"></i>
                <div>
                    <h4>Laporan Uang Makan</h4>
                    <p>Ada <?= $uang_makan2 ?> laporan perlu disutujui</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($gaji_karyawan2 > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>

        <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_laporanGajikaryawan">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-down text-success"></i>
                <div>
                    <h4>Laporan Gaji Karyawan</h4>
                    <p>Ada <?= $gaji_karyawan2 ?> laporan perlu disutujui</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($anggaran_lain2 > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>

        <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_laporanAnggaranlain">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-down text-success"></i>
                <div>
                    <h4>Laporan Biaya Lainnya</h4>
                    <p>Ada <?= $anggaran_lain2 ?> laporan perlu disutujui</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($maintenance2 > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>

        <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_laporanMaintenance">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-down text-success"></i>
                <div>
                    <h4>Laporan Maintenance</h4>
                    <p>Ada <?= $maintenance2 ?> laporan perlu disutujui</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($operasional_yayasan2 > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>

        <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_laporanOperasional">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-down text-success"></i>
                <div>
                    <h4>Laporan Operasional</h4>
                    <p>Ada <?= $operasional_yayasan2 ?> laporan perlu disutujui</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php } else { ?>
        <li class="dropdown-header">
            Tidak ada notifikasi terbaru
        </li>
        <?php } ?>
    </ul><!-- End Notification Dropdown Items -->
</li><!-- End Notification Nav -->
<?php } elseif ($_SESSION["id_pengurus"] == "kepala_cabang") { ?>

<?php } else { ?>
<?php if ($id_kepLogistik == "") { ?>
<li class="nav-item dropdown">
    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-bell"></i>
        <?php if ($s+$s2 > 0) { ?>
        <span class="badge bg-primary badge-number"><?= $s+$s2 ?></span>
        <?php } ?>
    </a><!-- End Notification Icon -->
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
        <?php if ($s+$s2 > 0) { ?>
        <li class="dropdown-header">
            Kamu mempunyai <?= $s+$s2 ?> notifikasi baru
        </li>

        <?php if ($s > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_pengajuan">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-up text-primary"></i>
                <div>
                    <h4>Pengajuan
                        <?php if ($_SESSION["id_pengurus"] == "kepala_program" && $_SESSION["cabang"] == "Depok") { ?>
                        Program
                        <?php } else { ?>
                        Logistik
                        <?php } ?>
                    </h4>
                    <p>Ada <?= $s ?> pengajuan perlu disetujui</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($s2 > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>

        <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_laporan">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-down text-success"></i>
                <div>
                    <h4>Laporan
                        <?php if ($_SESSION["id_pengurus"] == "kepala_program" && $_SESSION["cabang"] == "Depok") { ?>
                        Program
                        <?php } else { ?>
                        Logistik
                        <?php } ?>
                    </h4>
                    <p>Ada <?= $s2 ?> laporan perlu disutujui</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php } else { ?>
        <li class="dropdown-header">
            Tidak ada notifikasi terbaru
        </li>
        <?php } ?>
    </ul><!-- End Notification Dropdown Items -->
</li>
<?php } else { ?>
<li class="nav-item dropdown">
    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-chat-left-text"></i>
        <?php if ($maintenance > 0) { ?>
        <span class="badge bg-primary badge-number"><?= $maintenance ?></span>
        <?php } ?>
    </a><!-- End Notification Icon -->
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
        <?php if ($maintenance > 0) { ?>
        <li class="dropdown-header">
            Kamu mempunyai <?= $maintenance ?> pesan baru
        </li>

        <?php if ($maintenance > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <a href="<?= $_SESSION["username"] ?>.php?id_kepLogistik=<?= $id_kepLogistik ?>&id_forms=forms_verifikasi">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-up text-primary"></i>
                <div>
                    <h4>Pengajuan Terverifikasi
                    </h4>
                    <p><?= $maintenance ?> pengajuan maintenance siap dilaporkan</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php if ($s2 > 0) { ?>
        <li>
            <hr class="dropdown-divider">
        </li>

        <a href="<?= $_SESSION["username"] ?>.php?id_checklist=checklist_laporan">
            <li class="notification-item"><span class="badge badge-danger badge-counter">New</span>
                <i class="bi bi-graph-down text-success"></i>
                <div>
                    <h4>Laporan
                        <?php if ($_SESSION["id_pengurus"] == "kepala_program" && $_SESSION["cabang"] == "Depok") { ?>
                        Program
                        <?php } else { ?>
                        Logistik
                        <?php } ?>
                    </h4>
                    <p>Ada <?= $s2 ?> laporan perlu disutujui</p>
                    <p><?= date("d-m-Y") ?></p>
                </div>
            </li>
        </a>
        <?php } ?>

        <?php } else { ?>
        <li class="dropdown-header">
            Tidak ada notifikasi terbaru
        </li>
        <?php } ?>
    </ul><!-- End Notification Dropdown Items -->
</li>
<?php } ?>

<!-- End Notification Nav -->
<?php } ?>

<?php if ($_SESSION["id_pengurus"] == "kepala_income" || $_SESSION["id_pengurus"] == "facebook" || $_SESSION["id_pengurus"] == "kepala_cabang" || $_SESSION["id_pengurus"] == "admin_web") { ?>
<?php } elseif ($_SESSION["id_pengurus"] == "kepala_pengajuan" || $_SESSION["id_pengurus"] == "ketua_yayasan") { ?>
<?php } elseif ($_SESSION["id_pengurus"] == "management_keuangan") { ?>
<?php } elseif ($_SESSION["id_pengurus"] == "facebook_depok" || $_SESSION["id_pengurus"] == "facebook_bogor" || $_SESSION["id_pengurus"] == "instagram") { ?>
<?php } elseif ($_SESSION["id_pengurus"] == "manager_facebook" || $_SESSION["id_pengurus"] == "manager_instagram") { ?>
<?php } else { ?>
<li class="nav-item dropdown">
    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-chat-left-text"></i>
        <?php if ($id_management == "aset_yayasan") { ?>
        <?php if ($s3 > 0) { ?>
        <span class="badge bg-success badge-number"><?= $s3 ?></span>
        <?php } ?>

        <?php } elseif ($id_management == "uang_makan") { ?>
        <?php if ($s3 > 0) { ?>
        <span class="badge bg-success badge-number"><?= $s3 ?></span>
        <?php } ?>

        <?php } elseif ($id_management == "gaji_karyawan") { ?>
        <?php if ($s3 > 0) { ?>
        <span class="badge bg-success badge-number"><?= $s3 ?></span>
        <?php } ?>

        <?php } elseif ($id_management == "anggaran_lain") { ?>
        <?php if ($s3 > 0) { ?>
        <span class="badge bg-success badge-number"><?= $s3 ?></span>
        <?php } ?>

        <?php } else { ?>
        <?php if ($s3 > 0) { ?>
        <span class="badge bg-success badge-number"><?= $s3 ?></span>
        <?php } elseif ($s3 == 0 && $_SESSION["id_pengurus"] == "logistik") { ?>
        <?php } else { ?>
        <span class="badge bg-danger badge-number">!</span>
        <?php }?>

        <?php } ?>

    </a><!-- End Messages Icon -->
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
        <?php if ($id_management == "") { ?>
        <?php if ($s3 > 0) { ?>
        <li class="dropdown-header">
            Kamu mempunyai <?= $s3 ?> pesan baru
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        <li class="message-item"><span class="badge badge-danger badge-counter">New</span>
            <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_verifikasi">
                <img src="../assets/img/icons/profil.png" alt="" class="rounded-circle">
                <div>
                    <h4>Administrator</h4>
                    <p>Laporkan segera pengajuan kamu</p>
                    <p><?= date("d-m'Y") ?></p>
                </div>
            </a>
        </li>

        <li>
            <hr class="dropdown-divider">
        </li>
        <?php } else { ?>
        <li class="dropdown-header">
            Tidak ada pesan baru
        </li>
        <?php }?>
        <?php } else { ?>
        <?php if ($s3 > 0) { ?>
        <li class="dropdown-header">
            Kamu mempunyai <?= $s3 ?> pesan baru
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        <li class="message-item"><span class="badge badge-danger badge-counter">New</span>
            <a href="<?= $_SESSION["username"] ?>.php?id_management=<?= $id_management ?>&id_forms=forms_verifikasi">
                <img src="../assets/img/icons/profil.png" alt="" class="rounded-circle">
                <div>
                    <h4>Administrator</h4>
                    <p>Laporkan segera pengajuan kamu</p>
                    <p><?= date("d-m'Y") ?></p>
                </div>
            </a>
        </li>

        <li>
            <hr class="dropdown-divider">
        </li>
        <?php } else { ?>
        <li class="dropdown-header">
            Tidak ada pesan baru
        </li>
        <?php }?>
        <?php } ?>


    </ul><!-- End Messages Dropdown Items -->
</li>
<?php } ?>

<li class="nav-item dropdown" id="showEdit">
    <a class="nav-link nav-icon showDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-megaphone"></i>

    </a><!-- End Notification Icon -->
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications ketua-yayasan">
        <?php if ($_SESSION["id_pengurus"] == "admin_web") { ?>
        <?php if ($saran > 0) { ?>
        <li class="dropdown-header">
            <?= $saran; ?> Pesan Masuk! <b></b> <i class="bi bi-chat-square-text-fill"></i>
        </li>

        <?php } else { ?>
        <li class="dropdown-header">
            Tidak ada pesan masuk! <i class="bi bi-chat-square-text-fill"></i>
        </li>
        <?php } ?>
        <?php } else { ?>
        <a href="#" data-bs-toggle="modal" data-bs-target="#modalLaporan">
            <li class="dropdown-header">
                Tulis kritik dan saran disini! <i class="bi bi-pencil"></i>
            </li>
        </a>
        <?php } ?>
        <?php if ($saran > 0) { ?>
        <?php
            $no = 1;
            while ($data = mysqli_fetch_array($querySaran)) { 
                ?>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li class="notification-item ">
            <div class="saranMasukan">
                <h4 class="textName"><?= ucwords($data["nama"]); ?></h4>
                <p><?= ucfirst($data["saran"]); ?> </p>
                <p><?= date('d-m-Y', strtotime($data['tgl_saran'])); ?></p>
                <?php if ($_SESSION["id_pengurus"] == "admin_web") { ?>
                <p class="editLaporanSaran">
                    <?php if ($data["balasan"] == "") { ?>
                    <a href="#" class="editSaran show" data-id="<?= $data["id"]; ?>">Balas
                        <?= ucwords($data["nama"]); ?></a>

                    <?php } ?>
                </p>
                <div class="menu<?= $data["id"]; ?>" style="display: none;">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $data["id"]; ?>">
                        <input type="text" class="form-control" placeholder="Tulis disini.." aria-label="Username"
                            aria-describedby="basic-addon1" name="balasan" autocomplete="off" required>
                        <div class="button">
                            <input type="submit" name="balasSaran" class="btn btn-primary w-100" value="Kirim Balasan">
                        </div>
                    </form>
                </div>
                <?php } else { ?>
                <p class="editLaporanSaran">
                    <a href="#" class="editSaran showEdit" data-id="<?= $data["id"]; ?>">Edit saran</a>
                    <a href="../models/base_admin/hapus_saran.php?id_unik=<?= $data['id'] ?>" class=" hapusSaran"
                        onclick="return confirm('Saran akan dihapus?!')">Hapus saran</a>
                </p>
                <div class="menuEdit<?= $data["id"]; ?>" style="display: none;">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $data["id"] ?>">
                        <div class="form-floating mb-2">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                style="height: 100px" name="saran" required
                                oninvalid="this.setCustomValidity('Saran tidak boleh kosong')"
                                oninput="this.setCustomValidity('')"><?= ucfirst($data["saran"]); ?></textarea>
                            <label for="floatingTextarea2">Tulis disini..</label>
                        </div>
                        <div class="button">
                            <input type="submit" name="editSaran" class="btn btn-primary w-100" value="Kirim Edit">
                        </div>
                    </form>
                </div>
                <?php } ?>
            </div>
        </li>

        <?php if ($data['balasan'] == "") { ?>

        <?php } else { ?>
        <li class="notification-item saranBalasan">
            <div class="saranMasukan">
                <i class="bi bi-reply-fill"></i>balasan
                <p><?= ucfirst($data["balasan"]); ?></p>
                <p><?= date('d-m-Y', strtotime($data['tgl_balasan'])) ?></p>
            </div>
        </li>
        <?php } ?>

        <?php } ?>

        <?php } ?>
    </ul><!-- End Notification Dropdown Items -->
</li>

<!-- End Messages Nav -->