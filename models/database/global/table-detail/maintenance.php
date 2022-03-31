<div class="table-responsive">
    <table id="tabel-detailLogistik" class="table table-striped table-bordered nowrap">
        <thead>
            <tr style="text-align: center;">
                <th scope="col">No</th>
                <th scope="col">Periode</th>
                <th scope="col">Anggaran Maintenance Aset</th>
                <th scope="col">Terpakai Maintenance Aset</th>
                <th scope="col">Anggaran Maintenance Gedung</th>
                <th scope="col">Terpakai Maintenance Gedung</th>
                <th scope="col">Anggaran Global</th>
                <th scope="col">Terpakai Global</th>
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
                <td>Rp. <?= number_format($r["anggaran_maintenance_aset"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["terpakai_maintenance_aset"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["anggaran_maintenance_gedung"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["terpakai_maintenance_gedung"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["anggaran_global"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["terpakai_global"],0,"." , ".") ?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr style="text-align: center;">
                <th colspan="2">Total</th>
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