<div class="card-body">
    <h5 class="card-title">FORM VERIFIKASI</h5>
    <div class="table-responsive">
        <div class="text-center">
            <label for=""><b style="color: black;">Tabel Verifikasi <?= $judul ?></b>
                <hr>
            </label>
        </div>
        <?php if ($id_management == "aset_yayasan") { ?>
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
                    <td style="text-align: center;"><?= $r["cabang"] ?></td>
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
                    <?php if($r['status'] == "OK"){ ?>
                    <td style=" text-align: center;">
                        <a class="btn btn-success"
                            href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management ?>&id_forms=forms_laporan&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Semua tugas selesai, siap laporkan !!')">Laporan</a>
                    </td>
                    <?php } else { ?>
                    <td style=" text-align: center;">
                        <a class="btn btn-primary"
                            href="../admin/<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management ?>&id_forms=edit_pengajuan&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin anggaran ini mau diedit?!')">Edit</a> || <a
                            class="btn btn-danger"
                            href="../models/forms/hapus_pengajuan/hapus_management.php?id_dataManagement=<?= $id_management ?>&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin anggaran ini mau dihapus?!')">Hapus</a>
                    </td>
                    <?php } ?>
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

        <?php } else { ?>
        <table id="tabel-data_verifikasi" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Diajukan Oleh</th>
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
                    $bln       = substr($r['tgl_dibuat'], 5,-3);
                ?>

                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td style="text-align: center;"><?= ucwords($r['kategori']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['posisi']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['cabang']) ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_dibuat'])); ?></td>
                    <td><?= ucwords($r['deskripsi']) ?></td>
                    <td style="text-align: center;"><b><?= ucwords($r['status']) ?></b></td>
                    <?php if($r['status'] == "OK"){ ?>
                    <td style=" text-align: center;">
                        <a class="btn btn-success"
                            href="<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management ?>&id_forms=forms_laporan&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Semua tugas selesai, siap laporkan !!')">Laporan</a>
                    </td>
                    <?php } else { ?>
                    <td style=" text-align: center;">
                        <a class="btn btn-primary"
                            href="../admin/<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management ?>&id_forms=edit_pengajuan&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin anggaran ini mau diedit?!')">Edit</a> || <a
                            class="btn btn-danger"
                            href="../models/forms/hapus_pengajuan/hapus_management.php?id_dataManagement=<?= $id_management ?>&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin anggaran ini mau dihapus?!')">Hapus</a>
                    </td>
                    <?php } ?>
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
        <?php } ?>

    </div>
</div>