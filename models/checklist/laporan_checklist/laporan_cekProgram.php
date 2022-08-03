<div class="card-body">
    <h5 class="card-title">CHECKLIST LAPORAN</h5>
    <div class="table-responsive">
        <div class="text-center">
            <?php if ($_GET["id_checklist"] == "checklist_laporan") { ?>
            <label for=""><b style="color: black;">Tabel Laporan Program</b>
                <hr>
            </label>

            <?php } else { ?>
            <label for=""><b style="color: black;">Tabel Laporan ProgPaudQu El-ZamZamram</b>
                <hr>
            </label>
            <?php } ?>
        </div>
        <table id="tabel-data_lapCabang" class="table table-striped table-bordered nowrap">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <?php if ($_GET["id_checklist"] == "checklist_laporan") { ?>
                    <th scope="col">Program</th>
                    <th scope="col">Kategori</th>

                    <?php } else { ?>
                    <th scope="col">Kategori</th>
                    <th scope="col">Dilaporkan</th>
                    <?php } ?>

                    <th scope="col">Cabang</th>
                    <th scope="col">Tgl Pengajuan</th>
                    <th scope="col">Perencanaan</th>
                    <th scope="col">Anggaran</th>
                    <th scope="col">Tgl laporan</th>
                    <th scope="col">Pemakaian</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Terpakai</th>
                    <th scope="col">Cashback</th>
                    <th scope="col">Resi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($r = $q3->fetch_assoc()) {
                $bln       = substr($r['tgl_pemakaian'], 5,-3);
                $anggaran = $r['dana_anggaran'];
                $terpakai = $r['dana_terpakai'];
                $sisa = $anggaran - $terpakai;
                ?>
                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td><?= ucwords($r['program']) ?></td>
                    <?php if ($_GET["id_checklist"] == "checklist_laporan") { ?>
                    <td><?= ucwords($r['yatim']) ?></td>

                    <?php } else { ?>
                    <td><?= ucwords($r['posisi']) ?></td>
                    <?php } ?>
                    <td style="text-align: center;"><?= ucwords($r['cabang']) ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_pengajuan'])); ?></td>
                    <td><?= ucwords($r['deskripsi']) ?></td>
                    <td>Rp. <?= number_format($anggaran,0,"." , ".") ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_pemakaian'])); ?></td>
                    <td><?= ucwords($r['deskripsi_pemakaian']) ?></td>
                    <td style="text-align: center;">
                        <?php if ($_GET["id_checklist"] == "checklist_laporan") { ?>
                        <a class="btn btn-success"
                            href="../verif/laporan/lapProgram.php?id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Laporan sudah selesai dan sudah yakin??!')"><i
                                class="bi bi-check2-all text-white"></i></a>

                        <?php } else { ?>
                        <a class="btn btn-success"
                            href="../verif/laporan/lapPaudqu.php?id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Laporan sudah selesai dan sudah yakin??!')"><i
                                class="bi bi-check2-all text-white"></i></a>
                        <?php } ?>
                    </td>
                    <td>Rp. <?= number_format($terpakai,0,"." , ".") ?></td>
                    <td>Rp. <?= number_format($sisa,0,"." , ".") ?></td>
                    <td style="text-align: center;">
                        <?php if ($_GET["id_checklist"] == "checklist_laporan") { ?>
                        <input type="button" name="view" value="Lihat" data-id="<?= $r['id']  ?>"
                            class="btn btn-danger btn-xs view_data_program">

                        <?php } else { ?>
                        <input type="button" name="view" value="Lihat" data-id="<?= $r['id']  ?>"
                            class="btn btn-success btn-xs view_data_paudqu">
                        <?php } ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="6">Total</th>
                    <th></th>
                    <th colspan="3">Total</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
        <!-- Modal -->
        <?php if ($_GET["id_checklist"] == "checklist_laporan") { ?>
        <div id="dataModal_program" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Bukti Kwitansi</h4>
                    </div>
                    <div class="modal-body" id="detail_user_program">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <?php } else { ?>
        <div id="dataModal_paudqu" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Bukti Kwitansi</h4>
                    </div>
                    <div class="modal-body" id="detail_user_paudqu">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>