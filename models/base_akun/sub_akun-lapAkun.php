<div class="card-body">

    <div class="table-responsive">
        <h5 class="card-title text-center">Laporan Akun</h5>

        <table id="tabel-subLaporanMedia" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Pengurus</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Akun</th>
                    <th scope="col">Tgl Laporan</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Keterangan</th>
                    <?php if ($_SESSION["id_pengurus"] == "manager_instagram" || $_GET["mediaLaporan"] == "instagram") { ?>
                    <th scope="col">Total Pengikut</th>
                    <th scope="col">Total Mengikuti</th>
                    <th scope="col">Pengikut Terbaru</th>
                    <th scope="col">Mengikuti terbaru</th>

                    <?php } else { ?>
                    <th scope="col">Total Teman</th>
                    <th scope="col">Add Pertemanan</th>
                    <th scope="col">Teman Baru</th>
                    <th scope="col">Hapus Teman</th>
                    <?php } ?>
                    <th scope="col">Total Serangan</th>
                    <th scope="col">Respon</th>
                    <th scope="col">Minta Norek</th>
                    <th scope="col">Tanya Alamat</th>
                    <th scope="col">Insya Allah</th>
                    <th scope="col">B. Bisa Bantu</th>
                    <th scope="col">Tidak Respon</th>
                    <th scope="col">Donatur</th>
                    <th scope="col">Total Income</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="8">Total</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>