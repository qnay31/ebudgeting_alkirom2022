<div class="card-body">
    <h5 class="card-title">LAPORAN AKUN</h5>

    <div class="table-responsive">
        <div class="text-center">
            <label for="">
                <b style="color: black;">Laporan <?= ucwords($acMedia["nama_akun"]) ?></b>
                <hr>
            </label>
        </div>

        <table id="tabel-database_lapMedia2" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Pengurus</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Akun</th>
                    <th scope="col">Tgl Laporan</th>
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
                <?php
                    $no = 1;
                    while ($r = $q->fetch_assoc()) {
                ?>
                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td style="text-align: center;"><?= ucwords($r['pemegang']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['posisi']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['nama_akun']) ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_laporan'])); ?></td>
                    <td style="text-align: center;"><?= number_format($r['totalSerangan'],0,"." , ".") ?></td>
                    <td style="text-align: center;"><?= number_format($r['respon'],0,"." , ".") ?></td>
                    <td style="text-align: center;"><?= number_format($r['minta_norek'],0,"." , ".") ?></td>
                    <td style="text-align: center;"><?= number_format($r['alamat'],0,"." , ".") ?></td>
                    <td style="text-align: center;"><?= number_format($r['insya_allah'],0,"." , ".") ?></td>
                    <td style="text-align: center;"><?= number_format($r['belumbisa_bantu'],0,"." , ".") ?></td>
                    <td style="text-align: center;"><?= number_format($r['tidak_respon'],0,"." , ".") ?></td>
                    <td style="text-align: center;"><?= number_format($r['donatur'],0,"." , ".") ?></td>
                    <td>Rp. <?= number_format($r['total_income'],0,"." , ".") ?></td>
                </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="5">Total</th>
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