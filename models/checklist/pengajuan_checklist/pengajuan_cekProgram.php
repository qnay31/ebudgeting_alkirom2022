<div class="card-body">
    <h5 class="card-title">CHECKLIST PENGAJUAN</h5>
    <div class="table-responsive">
        <div class="text-center">
            <?php if ($_GET["id_checklist"] == "checklist_pengajuan") { ?>
            <label for=""><b style="color: black;">Pengajuan Program</b>
                <hr>
            </label>
            <?php } else { ?>
            <label for=""><b style="color: black;">Pengajuan PaudQu El-ZamZam</b>
                <hr>
            </label>
            <?php } ?>

        </div>
        <table id="tabel-data_verifikasi" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <?php if ($_GET["id_checklist"] == "checklist_pengajuan") { ?>
                    <th scope="col">Program</th>
                    <th scope="col">Kategori</th>
                    <?php } else { ?>
                    <th scope="col">Kategori</th>
                    <th scope="col">Diajukan Oleh</th>
                    <?php } ?>
                    <th scope="col">Cabang</th>
                    <th scope="col">Tgl Pengajuan</th>
                    <th scope="col">Perencanaan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Anggaran</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    while ($r = $q->fetch_assoc()) {
                    $bln       = substr($r['tgl_pengajuan'], 5,-3);
                ?>

                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td><?= ucwords($r['program']) ?> </td>
                    <?php if ($_GET["id_checklist"] == "checklist_pengajuan") { ?>
                    <td style="text-align: center;"><?= ucwords($r['yatim']) ?></td>

                    <?php } else { ?>
                    <td style="text-align: center;"><?= ucwords($r['posisi']) ?></td>
                    <?php } ?>
                    <td style="text-align: center;"><?= ucwords($r['cabang']) ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_pengajuan'])); ?></td>
                    <td><?= ucwords($r['deskripsi']) ?></td>
                    <td style="text-align: center;"><b><?= ucwords($r['status']) ?></b></td>
                    <td style=" text-align: center;">
                        <?php if ($_GET["id_checklist"] == "checklist_pengajuan") { ?>
                        <a class="btn btn-success"
                            href="../verif/anggaran/angProgram.php?id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Data anggaran sudah sesuai dan konfirmasi sekarang?')"><i
                                class="bi bi-check2-all text-white"></i></a>

                        <?php } else { ?>
                        <a class="btn btn-success"
                            href="../verif/anggaran/angPaudqu.php?id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Data anggaran sudah sesuai dan konfirmasi sekarang?')"><i
                                class="bi bi-check2-all text-white"></i></a>
                        <?php } ?>
                    </td>
                    <td>Rp. <?= number_format($r['dana_anggaran'],0,"." , ".") ?></td>
                </tr>

                <?php } ?>
            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="8">Total</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>