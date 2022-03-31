<main id="main" class="main">
    <div class="pagetitle">
        <h1>Form Pengajuan & Laporan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <li class="breadcrumb-item">Form</li>
                <li class="breadcrumb-item active">Daftar Pengajuan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns pengajuan-->
            <div class="col-lg-12" id="form-pengajuan">
                <!-- Laporan  -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">DAFTAR PENGAJUAN</h5>
                        </div>
                        <div class="list-group">
                            <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_pengajuan&id_dataManagement=program"
                                class="list-group-item list-group-item-action">Program</a>
                            <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_pengajuan&id_dataManagement=logistik"
                                class="list-group-item list-group-item-action">Logistik</a>
                            <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_pengajuan&id_dataManagement=aset_yayasan"
                                class="list-group-item list-group-item-action">Aset Yayasan</a>
                            <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_pengajuan&id_dataManagement=uang_makan"
                                class="list-group-item list-group-item-action">Uang Makan</a>
                            <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_pengajuan&id_dataManagement=gaji_karyawan"
                                class="list-group-item list-group-item-action">Gaji Karyawan</a>
                            <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_pengajuan&id_dataManagement=anggaran_lain"
                                class="list-group-item list-group-item-action">Biaya Lainnya</a>
                            <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_pengajuan&id_dataManagement=maintenance"
                                class="list-group-item list-group-item-action">Maintenance</a>
                            <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_pengajuan&id_dataManagement=operasional_yayasan"
                                class="list-group-item list-group-item-action">Operasional</a>
                            <a href="<?= $_SESSION["username"] ?>.php?id_forms=forms_pengajuan&id_dataManagement=paudqu"
                                class="list-group-item list-group-item-action">PaudQu El-ZamZam</a>
                        </div>

                    </div>
                </div><!-- End Laporan  -->
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->