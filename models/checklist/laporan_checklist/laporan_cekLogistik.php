<div class="card-body">
    <h5 class="card-title">CHECKLIST LAPORAN</h5>
    <div class="table-responsive">
        <div class="text-center">
            <label for=""><b style="color: black;">Tabel Laporan Logistik</b>
                <hr>
            </label>
        </div>
        <table id="tabel-data_lapCabang" class="table table-striped table-bordered nowrap">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Logistik</th>
                    <th scope="col">Dilaporkan</th>
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
                    <td><?= ucwords($r['logistik']) ?></td>
                    <td><?= ucwords($r['posisi']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['cabang']) ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_pengajuan'])); ?></td>
                    <td><?= ucwords($r['deskripsi']) ?></td>
                    <td>Rp. <?= number_format($anggaran,0,"." , ".") ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_pemakaian'])); ?></td>
                    <td><?= ucwords($r['deskripsi_pemakaian']) ?></td>
                    <td style="text-align: center;">
                        <a class="btn btn-success"
                            href="../verif/laporan/lapLogistik.php?id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Laporan sudah selesai dan sudah yakin??!')">Konfirmasi</a>
                    </td>
                    <td>Rp. <?= number_format($terpakai,0,"." , ".") ?></td>
                    <td>Rp. <?= number_format($sisa,0,"." , ".") ?></td>
                    <td style="text-align: center;"><input type="button" name="view" value="Lihat"
                            data-id="<?= $r['id']  ?>" class="btn btn-danger btn-xs view_data_logistik">
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
        <div id="dataModal_logistik" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Bukti Kwitansi</h4>
                    </div>
                    <div class="modal-body" id="detail_user_logistik">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>