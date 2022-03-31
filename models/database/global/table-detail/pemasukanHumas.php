<div class="table-responsive">
    <table id="tabel-detailPemHumas" class="table table-striped table-bordered nowrap">
        <thead>
            <tr style="text-align: center;">
                <th scope="col">No</th>
                <th scope="col">Periode</th>
                <th scope="col">Pemasukan Kotak Amal</th>
                <th scope="col">Pemasukan Celengan</th>
                <th scope="col">Pemasukan Global</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no = 1;
                while ($r = $q->fetch_assoc()) {
                ?>
            <tr>
                <td style="text-align: center;"><?= $no++ ?></td>
                <td><?= ucwords($r['bulan']) ?> <?= $r["tahun"] ?></td>
                <td>Rp. <?= number_format($r["pemasukan_kotak_amal"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["pemasukan_celengan"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["pemasukan_global"],0,"." , ".") ?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr style="text-align: center;">
                <th colspan="2">Total</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</div>