<div class="card-body">
    <h5 class="card-title">CHECKLIST PEMASUKAN</h5>

    <div class="table-responsive">
        <div class="text-center">
            <label for=""><b style="color: black;">Pemasukan Income Media Sosial</b>
                <hr>
            </label>
        </div>

        <table id="tabel-data_verifMedia" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Dilaporkan Oleh</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Income</th>
                    <th scope="col">Tgl Pemasukan</th>
                    <th scope="col">Status Admin</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Income</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    while ($r = $q->fetch_assoc()) {
                    $bln       = substr($r['tgl_pemasukan'], 5,-3);
                ?>

                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td style="text-align: center;"><?= ucwords($r['posisi']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['kategori']) ?></td>
                    <td>Income <?= ucwords($r['gedung']) ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_pemasukan'])); ?></td>
                    <td style="text-align: center;"><b><?= ucwords($r['status']) ?></b></td>
                    <td style=" text-align: center;">
                        <a class="btn btn-success"
                            href="../verif/laporan/lapPemasukan.php?id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Data pemasukan sudah sesuai dan konfirmasi sekarang?')">Konfirmasi</a>
                    </td>
                    <td>Rp. <?= number_format($r['income'],0,"." , ".") ?></td>
                </tr>

                <?php } ?>
            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="7">Total</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>

        <!-- Non Resi -->
        <div class="text-center">
            <label for=""><b style="color: black;">Pemasukan Income Non Resi</b>
                <hr>
            </label>
        </div>

        <table id="tabel-data_verifMedia2" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Dilaporkan Oleh</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Income</th>
                    <th scope="col">Tgl Pemasukan</th>
                    <th scope="col">Status Admin</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Income</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    while ($r = $q2->fetch_assoc()) {
                    $bln       = substr($r['tgl_pemasukan'], 5,-3);
                ?>

                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td style="text-align: center;"><?= ucwords($r['posisi']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['kategori']) ?></td>
                    <td>Income <?= ucwords($r['gedung']) ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_pemasukan'])); ?></td>
                    <td style="text-align: center;"><b><?= ucwords($r['status']) ?></b></td>
                    <td style=" text-align: center;">
                        <a class="btn btn-success"
                            href="../verif/laporan/lapPemasukan.php?id_verif=NonResi&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Data pemasukan sudah sesuai dan konfirmasi sekarang?')">Konfirmasi</a>
                    </td>
                    <td>Rp. <?= number_format($r['income'],0,"." , ".") ?></td>
                </tr>

                <?php } ?>
            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="7">Total</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>