<div class="card-body">
    <h5 class="card-title">DATABASE <?= strtoupper($judul) ?></h5>
    <div class="table-responsive">
        <h5 class="card-title text-center">Laporan <?= $judul ?> <?= $pProgram; ?></h5>
        <?php if ($id_management == "aset_yayasan") { ?>
        <table id="tabel-database_lapAset" class="table table-striped table-bordered nowrap">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Dilaporkan</th>
                    <th scope="col">Cabang</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Tgl Pengajuan</th>
                    <th scope="col">Perencanaan</th>
                    <th scope="col">Qty Rencana</th>
                    <th scope="col">Anggaran</th>
                    <th scope="col">Tgl laporan</th>
                    <th scope="col">Qty Pembelian</th>
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
                $convert   = convertDateDBtoIndo($r['tgl_laporan']);
                $bulan     = substr($convert, 2);
                $anggaran = $r['dana_anggaran'];
                $terpakai = $r['dana_terpakai'];
                $sisa = $anggaran - $terpakai;
                ?>
                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td style="text-align: center;"><?= ucwords($r['kategori']) ?></td>
                    <td><?= ucwords($r['jenis']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['posisi']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['cabang']) ?></td>
                    <td style="text-align: center;"><?= $bulan ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_dibuat'])); ?></td>
                    <td><?= ucwords($r['deskripsi']) ?></td>
                    <td style="text-align: center;">
                        <?php if ($r["jenis"] == "Pembelian Barang") { ?>
                        <?= $r['qty_anggaran'] ?>
                        <?php } ?>
                    </td>
                    <td><?= number_format($anggaran) ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_laporan'])); ?></td>
                    <td><?= ucwords($r['pemakaian']) ?></td>
                    <td style="text-align: center;">
                        <?php if ($r["jenis"] == "Pembelian Barang") { ?>
                        <?= $r['qty_pembelian'] ?>
                        <?php } ?>
                    </td>
                    <td style="text-align: center;">
                        <span class="badge bg-success"><?= $r["laporan"] ?></span>
                    </td>
                    <td><?= number_format($terpakai) ?></td>
                    <td><?= number_format($sisa) ?></td>
                    <td style="text-align: center;"><input type="button" name="view" value="Lihat"
                            data-id="<?= $r['id']  ?>" data-management="<?= $id_management ?>"
                            class="btn btn-danger btn-xs view_data_management">
                    </td>
                </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="8">Total</th>
                    <th></th>
                    <th colspan="3">Total</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
        <?php } else { ?>
        <table id="tabel-database_laporan" class="table table-striped table-bordered nowrap">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
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
                $convert   = convertDateDBtoIndo($r['tgl_laporan']);
                $bulan     = substr($convert, 2);
                $anggaran = $r['dana_anggaran'];
                $terpakai = $r['dana_terpakai'];
                $sisa = $anggaran - $terpakai;
                ?>
                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td style="text-align: center;"><?= ucwords($r['kategori']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['posisi']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['cabang']) ?></td>
                    <td style="text-align: center;"><?= $bulan ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_dibuat'])); ?></td>
                    <td><?= ucwords($r['deskripsi']) ?></td>
                    <td><?= number_format($anggaran) ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_laporan'])); ?></td>
                    <td><?= ucwords($r['pemakaian']) ?></td>
                    <td style="text-align: center;">
                        <span class="badge bg-success"><?= $r["laporan"] ?></span>
                    </td>
                    <td><?= number_format($terpakai) ?></td>
                    <td><?= number_format($sisa) ?></td>
                    <td style="text-align: center;"><input type="button" name="view" value="Lihat"
                            data-id="<?= $r['id']  ?>" data-management="<?= $id_management ?>"
                            class="btn btn-danger btn-xs view_data_management">
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
        <?php } ?>

        <!-- Modal -->
        <div id="dataModal_management" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Bukti Kwitansi</h4>
                    </div>
                    <div class="modal-body" id="detail_user_management">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>