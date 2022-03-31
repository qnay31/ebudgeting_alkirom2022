<div class="card-body">
    <h5 class="card-title">GRAFIK PROGRAM</h5>

    <!-- Bar Chart -->
    <?php if ($_SESSION["id_pengurus"] == "ketua_yayasan" || $_SESSION["id_pengurus"] == "management_keuangan" || $_SESSION["id_pengurus"] == "kepala_pengajuan") { ?>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <h5 class="card-title text-center">GLOBAL PROGRAM YAYASAN</h5>
                <div class="chart-bar">
                    <canvas id="chartBar_global_program"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <h5 class="card-title text-center">SUB CABANG</h5>
                <div class="chart-bar">
                    <canvas id="chartBar_sub_program"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <h5 class="card-title text-center mt-4">PROGRAM DEPOK</h5>
                <div class="chart-bar">
                    <canvas id="chartBar_depok_program"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6 col-md-12">
            <div class="card">
                <h5 class="card-title text-center">PENDIDIKAN DEPOK</h5>
                <div class="chart-bar">
                    <canvas id="chartBar_depok_progPendidikan"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-12">
            <div class="card">
                <h5 class="card-title text-center">KESEHATAN DEPOK</h5>
                <div class="chart-bar">
                    <canvas id="chartBar_depok_progKesehatan"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <h5 class="card-title text-center">PROGRAM BOGOR</h5>
                <div class="chart-bar">
                    <canvas id="chartBar_bogor_program"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6 col-md-12">
            <div class="card">
                <h5 class="card-title text-center">PENDIDIKAN BOGOR</h5>
                <div class="chart-bar">
                    <canvas id="chartBar_bogor_progPendidikan"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-12">
            <div class="card">
                <h5 class="card-title text-center">KESEHATAN BOGOR</h5>
                <div class="chart-bar">
                    <canvas id="chartBar_bogor_progKesehatan"></canvas>
                </div>
            </div>
        </div>
    </div>

    <?php } else { ?>
    <h5 class="card-title text-center">PROGRAM BOGOR</h5>
    <div class="chart-bar">
        <canvas id="chartBar_bogor_program"></canvas>
    </div>

    <div class="row mt-5">
        <div class="col-xl-6 col-md-12">
            <div class="card">
                <h5 class="card-title text-center">PENDIDIKAN BOGOR</h5>
                <div class="chart-bar">
                    <canvas id="chartBar_bogor_progPendidikan"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-12">
            <div class="card">
                <h5 class="card-title text-center">KESEHATAN BOGOR</h5>
                <div class="chart-bar">
                    <canvas id="chartBar_bogor_progKesehatan"></canvas>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- End Bar Chart -->
</div>