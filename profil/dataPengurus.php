<?php 
// ketua yayasan
$kYas = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id_pengurus = 'ketua_yayasan' ");

// kepala cabang
$kCab = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id_pengurus = 'kepala_cabang' ");

// management keuangan
$kMuang = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id_pengurus = 'management_keuangan' ");

// kepala pengajuan
$kPaju = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id_pengurus = 'kepala_pengajuan' ");

// kepala income
$kInc = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id_pengurus = 'kepala_income' ");


// facebook depok
// manager
$mFB_depok = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE username = 'facebook_depok' ");
// pengurus
$AFB_depok = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id_pengurus = 'facebook_depok' ORDER BY `nama` ASC ");
$pengurus_depok = mysqli_num_rows($AFB_depok);

$AFB_depok2 = mysqli_query($conn, "SELECT * FROM data_akun WHERE id_pengurus = 'facebook_depok' ");
$akun_depok = mysqli_num_rows($AFB_depok2);


// facebook bogor
// manager
$mFB_bogor = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE username = 'facebook_bogor' ");
// pengurus
$AFB_bogor = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id_pengurus = 'facebook_bogor' ORDER BY `nama` ASC ");
$pengurus_bogor = mysqli_num_rows($AFB_bogor);

$AFB_bogor2 = mysqli_query($conn, "SELECT * FROM data_akun WHERE id_pengurus = 'facebook_bogor' ");
$akun_bogor = mysqli_num_rows($AFB_bogor2);

// instagram
// manager
$mins = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE username = 'instagram' ");
// pengurus
$Ains = mysqli_query($conn, "SELECT * FROM akun_pengurus WHERE id_pengurus = 'instagram' ORDER BY `nama` ASC ");
$pengurus_ins = mysqli_num_rows($Ains);

$Ains2 = mysqli_query($conn, "SELECT * FROM data_akun WHERE id_pengurus = 'instagram' ");
$akun_ins = mysqli_num_rows($Ains2);

// die(var_dump($AFB_depok));


?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Pengurus</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Pengurus</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <?php include '../models/profil/dataPengurus/tab-nav.php'; ?>
                        </ul>

                        <div class="tab-content pt-2">
                            <?php include '../models/profil/dataPengurus/admin.php' ?>

                            <?php include '../models/profil/dataPengurus/fb_depok.php'; ?>

                            <?php include '../models/profil/dataPengurus/fb_bogor.php'; ?>

                            <?php include '../models/profil/dataPengurus/instagram.php'; ?>
                        </div><!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>