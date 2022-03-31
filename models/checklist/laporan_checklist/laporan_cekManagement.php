<div class="card-body">
    <h5 class="card-title">CHECKLIST LAPORAN</h5>
    <div class="table-responsive">
        <div class="text-center">
            <label for="">
                <?php if ($_GET["id_checklist"] == "checklist_laporanAset") { ?>
                <b style="color: black;">Tabel Laporan Aset Yayasan</b>
                <?php $id_management = "aset_yayasan"; ?>

                <?php } elseif ($_GET["id_checklist"] == "checklist_laporanUangmakan") { ?>
                <b style="color: black;">Tabel Laporan Uang Makan</b>
                <?php $id_management = "uang_makan"; ?>

                <?php } elseif ($_GET["id_checklist"] == "checklist_laporanGajikaryawan") { ?>
                <b style="color: black;">Tabel Laporan Gaji Karyawan</b>
                <?php $id_management = "gaji_karyawan"; ?>

                <?php } elseif ($_GET["id_checklist"] == "checklist_laporanMaintenance") { ?>
                <b style="color: black;">Tabel Laporan Maintenance</b>
                <?php $id_management = "maintenance"; ?>

                <?php } elseif ($_GET["id_checklist"] == "checklist_laporanOperasional") { ?>
                <b style="color: black;">Tabel Laporan Operasional</b>
                <?php 
                $id_management = "operasional_yayasan"; 
                ?>
                <?php } else { ?>
                <b style="color: black;">Tabel Laporan Biaya Lainnya</b>
                <?php $id_management = "anggaran_lain"; ?>

                <?php } ?>
                <hr>
            </label>
        </div>
        <?php if ($_GET["id_checklist"] == "checklist_laporanAset") { ?>
        <table id="tabel-data_lapAset" class="table table-striped table-bordered nowrap">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Cabang</th>
                    <th scope="col">Dilaporkan</th>
                    <th scope="col">Tgl Pengajuan</th>
                    <th scope="col">Perencanaan</th>
                    <th scope="col">Qty Anggaran</th>
                    <th scope="col">Anggaran</th>
                    <th scope="col">Tgl laporan</th>
                    <th scope="col">Pemakaian</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Qty Pembelian</th>
                    <th scope="col">Terpakai</th>
                    <th scope="col">Cashback</th>
                    <th scope="col">Resi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($r = $q3->fetch_assoc()) {
                $bln       = substr($r['tgl_laporan'], 5,-3);
                $anggaran = $r['dana_anggaran'];
                $terpakai = $r['dana_terpakai'];
                $sisa = $anggaran - $terpakai;
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
                        <?php if ($r["jenis"] == "Pembelian Barang") { ?>
                        <?= $r['qty_anggaran'] ?>
                        <?php } ?>
                    </td>
                    <td>Rp. <?= number_format($anggaran,0,"." , ".") ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_laporan'])); ?></td>
                    <td><?= ucwords($r['pemakaian']) ?></td>
                    <td style="text-align: center;">
                        <a class="btn btn-success"
                            href="../verif/laporan/lapManagement.php?id_verif=<?= $id_management ?>&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Laporan sudah selesai dan sudah yakin??!')">Konfirmasi</a>

                    </td>
                    <td style="text-align: center;">
                        <?php if ($r["jenis"] == "Pembelian Barang") { ?>
                        <?= $r['qty_pembelian'] ?>
                        <?php } ?>
                    </td>
                    <td>Rp. <?= number_format($terpakai,0,"." , ".") ?></td>
                    <td>Rp. <?= number_format($sisa,0,"." , ".") ?></td>
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
                    <th></th>
                    <th colspan="3">Total</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
        <?php } else { ?>
        <table id="tabel-data_lapCabang" class="table table-striped table-bordered nowrap">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
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
                $bln       = substr($r['tgl_laporan'], 5,-3);
                $anggaran = $r['dana_anggaran'];
                $terpakai = $r['dana_terpakai'];
                $sisa = $anggaran - $terpakai;
                ?>
                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td><?= ucwords($r['kategori']) ?></td>
                    <td><?= ucwords($r['posisi']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['cabang']) ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_dibuat'])); ?></td>
                    <td><?= ucwords($r['deskripsi']) ?></td>
                    <td>Rp. <?= number_format($anggaran,0,"." , ".") ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_laporan'])); ?></td>
                    <td><?= ucwords($r['pemakaian']) ?></td>
                    <td style="text-align: center;">
                        <a class="btn btn-success"
                            href="../verif/laporan/lapManagement.php?id_verif=<?= $id_management ?>&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Laporan sudah selesai dan sudah yakin??!')">Konfirmasi</a>
                    </td>
                    <td>Rp. <?= number_format($terpakai,0,"." , ".") ?></td>
                    <td>Rp. <?= number_format($sisa,0,"." , ".") ?></td>
                    <td style="text-align: center;"><input type="button" name="view" value="Lihat"
                            data-id="<?= $r['id']  ?>" data-management="<?= $id_management ?>"
                            class="btn btn-danger btn-xs view_data_management">
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