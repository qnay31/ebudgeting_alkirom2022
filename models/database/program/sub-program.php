<div class="card-body">
    <h5 class="card-title">DATABASE PROGRAM</h5>
    <div class="table-responsive">
        <?php if ($_GET["id_database"] == "database_program") { ?>
        <h5 class="card-title text-center">Laporan Program <?= $pProgram; ?></h5>

        <?php } else { ?>
        <h5 class="card-title text-center">Laporan PaudQu El-ZamZam <?= $pProgram; ?></h5>
        <?php } ?>
        
        <table id="tabel-database_laporan" class="table table-striped table-bordered nowrap">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <?php if ($_GET["id_database"] == "database_program") { ?>
                    <th scope="col">Program</th>

                    <?php } else { ?>
                    <th scope="col">Kategori</th>
                    <?php } ?>
                    <th scope="col">Dilaporkan</th>
                    <th scope="col">Cabang</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Tgl Pengajuan</th>
                    <th scope="col">Perencanaan</th>
                    <th scope="col">Anggaran</th>
                    <th scope="col">Tgl laporan</th>
                    <th scope="col">Pemakaian</th>
                    <th scope="col">Status</th>
                    <th scope="col">Terpakai</th>
                    <th scope="col">Cashback</th>
                    <th scope="col">Resi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($r = $q->fetch_assoc()) {
                $convert   = convertDateDBtoIndo($r['tgl_pemakaian']);
                $bulan     = substr($convert, 2);
                $anggaran = $r['dana_anggaran'];
                $terpakai = $r['dana_terpakai'];
                $sisa = $anggaran - $terpakai;
                ?>
                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td><?= ucwords($r['program']) ?></td>
                    <td><?= ucwords($r['posisi']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['cabang']) ?></td>
                    <td style="text-align: center;"><?= $bulan ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_pengajuan'])); ?></td>
                    <td><?= ucwords($r['deskripsi']) ?></td>
                    <td><?= number_format($anggaran) ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_pemakaian'])); ?></td>
                    <td><?= ucwords($r['deskripsi_pemakaian']) ?></td>
                    <td style="text-align: center;">
                        <span class="badge bg-success"><?= $r["laporan"] ?></span>
                    </td>
                    <td><?= number_format($terpakai) ?></td>
                    <td><?= number_format($sisa) ?></td>
                    <td style="text-align: center;">
                        <?php if ($_GET["id_database"] == "database_program") { ?>
                        <input type="button" name="view" value="Lihat" data-id="<?= $r['id']  ?>"
                            class="btn btn-danger btn-xs view_data_program">

                        <?php } else { ?>
                        <input type="button" name="view" value="Lihat" data-id="<?= $r['id']  ?>"
                            class="btn btn-danger btn-xs view_data_paudqu">
                        <?php } ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="7">Total</th>
                    <th></th>
                    <th colspan="3">Total</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
        <!-- Modal -->
        <?php if ($_GET["id_database"] == "database_program") { ?>
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