<main id="main" class="main">
    <div class="pagetitle">
        <h1>Log Ebudgeting</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $_SESSION["username"] ?>.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Log Aktivitas</li>
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
                            <h5 class="card-title">LOG AKTIVITAS EBUDGETING </h5>
                            <div class="table-responsive">
                                <table id="tabel-log" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr style="text-align: center;">
                                            <th scope="col">No</th>
                                            <th scope="col" class="search">Nama</th>
                                            <th scope="col" class="search">Posisi</th>
                                            <th scope="col">Ip Address</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Pukul</th>
                                            <th scope="col">Riwayat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- End Laporan  -->
            </div><!-- End Left side columns -->
        </div>
    </section>
</main><!-- End #main -->