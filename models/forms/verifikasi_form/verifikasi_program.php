<div class="card-body">
    <h5 class="card-title">FORM VERIFIKASI</h5>
    <div class="table-responsive">
        <div class="text-center">
            <label for="">
                <?php if ($_GET["id_dataManagement"] == "program") { ?>
                <b style="color: black;">Tabel Verifikasi Program</b>
                <?php } else { ?>
                <b style="color: black;">Tabel Verifikasi <?= $judul ?></b>
                <?php } ?>
                <hr>
            </label>
        </div>
        <table id="tabel-data_verifikasi" class="table table-bordered">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <?php if ($_GET["id_dataManagement"] == "program") { ?>
                    <th scope="col">Program</th>
                    <th scope="col">Yatim</th>
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
                    <td style="text-align: center;"><?= ucwords($r['program']) ?> </td>
                    <?php if ($_GET["id_dataManagement"] == "program") { ?>
                    <td style="text-align: center;"><?= ucwords($r['yatim']) ?></td>

                    <?php } else { ?>
                    <td style="text-align: center;"><?= ucwords($r['posisi']) ?></td>
                    <?php } ?>
                    <td style="text-align: center;"><?= ucwords($r['cabang']) ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_pengajuan'])); ?></td>
                    <td><?= ucwords($r['deskripsi']) ?></td>
                    <td style="text-align: center;"><b><?= ucwords($r['status']) ?></b></td>
                    <?php if($r['status'] == "OK"){ ?>
                    <td style=" text-align: center;">
                        <?php if ($_GET["id_dataManagement"] == "paudqu") { ?>
                        <a class="btn btn-success"
                            href="<?= $_SESSION["username"] ?>.php?id_forms=forms_laporan&id_dataManagement=paudqu&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Semua tugas selesai, siap laporkan !!')"><i
                                class="bi bi-box-arrow-right text-white"></i></a>
                        <?php } else { ?>
                        <a class="btn btn-success"
                            href="<?= $_SESSION["username"] ?>.php?id_forms=forms_laporan&id_dataManagement=program&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Semua tugas selesai, siap laporkan !!')"><i
                                class="bi bi-box-arrow-right text-white"></i></a>
                        <?php } ?>

                    </td>
                    <?php } elseif ($r['status_b'] == "OK") { ?>
                    <td style=" text-align: center;">
                        Menunggu Konfirmasi Admin
                    </td>
                    <?php } else { ?>
                    <td style=" text-align: center;">
                        <?php if ($_GET["id_dataManagement"] == "paudqu") { ?>
                        <a class="btn btn-primary"
                            href="../admin/<?= $_SESSION["username"] ?>.php?id_forms=edit_pengajuan&id_dataManagement=paudqu&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin anggaran ini mau diedit?!')"><i
                                class="bi bi-pencil text-white"></i></a> ||
                        <a class="btn btn-danger"
                            href="../models/forms/hapus_pengajuan/hapus_paudqu.php?id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin anggaran ini mau dihapus?!')"><i
                                class="bi bi-trash text-white"></i></a>

                        <?php } else { ?>
                        <a class="btn btn-primary"
                            href="../admin/<?= $_SESSION["username"] ?>.php?id_forms=edit_pengajuan&id_dataManagement=program&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin anggaran ini mau diedit?!')"><i
                                class="bi bi-pencil text-white"></i></a> ||
                        <a class="btn btn-danger"
                            href="../models/forms/hapus_pengajuan/hapus_program.php?id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin anggaran ini mau dihapus?!')"><i
                                class="bi bi-trash text-white"></i></a>
                        <?php } ?>

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
    </div>
</div>