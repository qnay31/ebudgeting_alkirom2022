<div class="table-responsive">
    <?php if ($_GET["id_lapGlobal"] == "2021") { ?>
    <table id="tabel-detailMedia" class="table table-striped table-bordered nowrap">
        <thead>
            <tr style="text-align: center;">
                <th scope="col">No</th>
                <th scope="col">Periode</th>
                <th scope="col">Income Gedung A</th>
                <th scope="col">Income Gedung B</th>
                <th scope="col">Income Gedung Bogor</th>
                <th scope="col">Income Gedung Instagram</th>
                <th scope="col">Income Global</th>
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
                <td>Rp. <?= number_format($r["income_a"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["income_b"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["income_bogor"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["income_instagram"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["income_global"],0,"." , ".") ?></td>
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
            </tr>
        </tfoot>
    </table>

    <?php } else { ?>
    <table id="tabel-detailMedia" class="table table-striped table-bordered nowrap">
        <thead>
            <tr style="text-align: center;">
                <th scope="col">No</th>
                <th scope="col">Periode</th>
                <th scope="col">Income Facebook Depok</th>
                <th scope="col">Income Facebook Bogor</th>
                <th scope="col">Income Instagram</th>
                <th scope="col">Income Global</th>
                <th scope="col">Income Tanpa Resi</th>
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
                <td>Rp. <?= number_format($r["income_depok"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["income_bogor"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["income_instagram"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["income_global"],0,"." , ".") ?></td>
                <td>Rp. <?= number_format($r["income_tanpaResi"],0,"." , ".") ?></td>
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

            </tr>
        </tfoot>
    </table>
    <?php } ?>
</div>