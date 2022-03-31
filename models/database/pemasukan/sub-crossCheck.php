<div class="card-body">
    <h5 class="card-title">DATABASE CROSSCHECK</h5>

    <div class="table-responsive">
        <?php if ($_SESSION["id_periode"] == "") { ?>
        <h5 class="card-title text-center">CrossCheck Global</h5>

        <?php } else { ?>
        <?php if ($nInCheck > 0) { ?>
        <h5 class="card-title text-center">CrossCheck <?= $inCheckT; ?></h5>

        <?php } else { ?>
        <h5 class="card-title text-center">Tidak ada data</h5>
        <?php } ?>
        <?php } ?>
        
        <?php if ($nInCheck > 0) { ?>
        <table id="tabel-data_databaseCrossCheck" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Dipegang Oleh</th>
                    <th scope="col">Income</th>
                    <th scope="col">Nama Akun</th>
                    <th scope="col">Status</th>
                    <th scope="col">Opsi</th>
                    <th scope="col">Nama Donatur</th>
                    <th scope="col">Tanggal Transfer</th>
                    <th scope="col">Bank</th>
                    <th scope="col">Jumlah Income</th>
                </tr>
            </thead>
            <tbody>
                <!-- Client Side -->
            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="9">Total</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
        <?php } ?>
    </div>
</div>