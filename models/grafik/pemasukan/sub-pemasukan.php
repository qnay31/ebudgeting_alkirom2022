<div class="card-body">
    <h5 class="card-title">GRAFIK PEMASUKAN</h5>

    <?php if ($_SESSION["id_pengurus"] == "kepala_cabang") { ?>
    <h5 class="card-title text-center">INCOME MEDIA SOSIAL BOGOR</h5>
    <div class="chart-bar">
        <canvas id="chartBar_bogor_incMedia"></canvas>
    </div>

    <?php } else { ?>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <h5 class="card-title text-center">INCOME MEDIA SOSIAL GLOBAL</h5>
                <div class="chart-bar">
                    <canvas id="chartBar_global_incMedia"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <h5 class="card-title text-center">PEMASUKAN SUB GEDUNG</h5>
                <div class="chart-bar">
                    <canvas id="chartBar_sub_income"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6 col-md-12">
            <div class="card">
                <h5 class="card-title text-center">INCOME FACEBOOK DEPOK</h5>
                <div class="chart-bar">
                    <canvas id="chartBar_a_incMedia"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-12">
            <div class="card">
                <h5 class="card-title text-center">INCOME FACEBOOK BOGOR</h5>
                <div class="chart-bar">
                    <canvas id="chartBar_bogor_incMedia"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-12">
            <div class="card">
                <h5 class="card-title text-center">INCOME INSTAGRAM</h5>
                <div class="chart-bar">
                    <canvas id="chartBar_instagram_incMedia"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-12">
            <div class="card">
                <h5 class="card-title text-center">INCOME NON RESI</h5>
                <div class="chart-bar">
                    <canvas id="chartBar_nonResi_incMedia"></canvas>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <!-- End Bar Chart -->
</div>