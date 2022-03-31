<div class="table-responsive">
    <table id="tabel-detailLogistik" class="table table-striped table-bordered nowrap">
        <thead>
            <tr style="text-align: center;">
                <th scope="col">No</th>
                <th scope="col">Periode</th>
                <th scope="col">Anggaran Gaji Depok</th>
                <th scope="col">Terpakai Gaji Depok</th>
                <th scope="col">Anggaran Gaji Bogor</th>
                <th scope="col">Terpakai Gaji Bogor</th>
                <th scope="col">Anggaran Global</th>
                <th scope="col">Terpakai Global</th>
            </tr>
        </thead>
        <?php if ($_GET["id_lapGlobal"] == "") { ?>
        <tbody>
            <?php
                $no = 1;
                while ($r = $q->fetch_assoc()) {
                ?>
            <tr>
                <td style="text-align: center;"><?= $no++ ?></td>
                <td><?= ucwords($r['bulan']) ?> <?= $r["tahun"] ?></td>
                <td>Rp. <?= number_format($r["anggaran_gaji_karyawan_depok"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["terpakai_gaji_karyawan_depok"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["anggaran_gaji_karyawan_bogor"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["terpakai_gaji_karyawan_bogor"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["anggaran_global"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["terpakai_global"],0,"." , ".") ?></td>
            </tr>
            <?php } ?>
        </tbody>
        <?php } else { ?>
        <tbody>
            <?php
                $no = 1;
                while ($r = $q->fetch_assoc()) {
                ?>
            <tr>
                <td style="text-align: center;"><?= $no++ ?></td>
                <td><?= ucwords($r['bulan']) ?> <?= $r["tahun"] ?></td>
                <td>Rp. <?= number_format($r["anggaran_gaji_depok"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["terpakai_gaji_depok"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["anggaran_gaji_bogor"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["terpakai_gaji_bogor"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["anggaran_global"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["terpakai_global"],0,"." , ".") ?></td>
            </tr>
            <?php } ?>
        </tbody>
        <?php } ?>

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