<div class="card-body">
    <h5 class="card-title">CHECKLIST PENGAJUAN</h5>
    <div class="table-responsive">
        <div class="text-center">
            <label for=""><b style="color: black;">Pengajuan Aset Yayasan</b>
                <hr>
            </label>
        </div>
        <table id="tabel-data_aset" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Cabang</th>
                    <th scope="col">Diajukan</th>
                    <th scope="col">Tgl Pengajuan</th>
                    <th scope="col">Rencana</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Status</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Anggaran</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    while ($r = $q->fetch_assoc()) {
                    $bln       = substr($r['tgl_dibuat'], 5,-3);
                ?>

                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td style="text-align: center;"><?= ucwords($r['kategori']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['jenis']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['cabang']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['posisi']) ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_dibuat'])); ?></td>
                    <td><?= ucwords($r['deskripsi']) ?></td>
                    <td style="text-align: center;">
                        <?php if ($r["jenis"] == "Pembangunan") { ?>
                        -
                        <?php } else { ?>
                        <?= ucwords($r['qty_anggaran']) ?> Pcs
                        <?php } ?>
                    </td>
                    <td style="text-align: center;"><b><?= ucwords($r['status']) ?></b></td>
                    <td style=" text-align: center;">
                        <a class="btn btn-success"
                            href="../verif/anggaran/angAset.php?id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Data anggaran sudah sesuai dan konfirmasi sekarang?')">Konfirmasi</a>
                    </td>
                    <td>Rp. <?= number_format($r['dana_anggaran'],0,"." , ".") ?></td>
                </tr>

                <?php }  ?>

            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="10">Total</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>