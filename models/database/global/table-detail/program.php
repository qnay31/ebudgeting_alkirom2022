<div class="table-responsive">
    <table id="tabel-detailProgram" class="table table-striped table-bordered nowrap">
        <thead>
            <tr style="text-align: center;">
                <th scope="col">No</th>
                <th scope="col">Periode</th>
                <th scope="col">Anggaran Pendidikan Depok</th>
                <th scope="col">Terpakai Pendidikan Depok</th>
                <th scope="col">Anggaran Kesehatan Depok</th>
                <th scope="col">Terpakai Kesehatan Depok</th>
                <th scope="col">Anggaran Program Depok</th>
                <th scope="col">Terpakai Program Depok</th>
                <th scope="col">Anggaran Pendidikan Bogor</th>
                <th scope="col">Terpakai Pendidikan Bogor</th>
                <th scope="col">Anggaran Kesehatan Bogor</th>
                <th scope="col">Terpakai Kesehatan Bogor</th>
                <th scope="col">Anggaran Program Bogor</th>
                <th scope="col">Terpakai Program Bogor</th>
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
                <td>Rp. <?= number_format($r["anggaran_pendidikan"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["terpakai_pendidikan"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["anggaran_kesehatan"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["terpakai_kesehatan"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["anggaran_program_depok"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["terpakai_program_depok"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["anggaran_pendidikan_bogor"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["terpakai_pendidikan_bogor"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["anggaran_kesehatan_bogor"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["terpakai_kesehatan_bogor"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["anggaran_program_bogor"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["terpakai_program_bogor"],0,"." , ".") ?></td>
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