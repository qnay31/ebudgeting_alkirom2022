<div class="card-body">
    <h5 class="card-title">CHECKLIST VERIFIKASI</h5>
    <div class="table-responsive">
        <div class="text-center">
            <label for="">
                <?php if ($_GET["id_checklist"] == "checklist_verifikasiAset") { ?>
                <b style="color: black;">Verifikasi Aset Yayasan</b>

                <?php } elseif ($_GET["id_checklist"] == "checklist_verifikasiUangmakan") { ?>
                <b style="color: black;">Verifikasi Uang Makan</b>

                <?php } elseif ($_GET["id_checklist"] == "checklist_verifikasiGajikaryawan") { ?>
                <b style="color: black;">Verifikasi Gaji Karyawan</b>

                <?php } elseif ($_GET["id_checklist"] == "checklist_verifikasiMaintenance") { ?>
                <b style="color: black;">Verifikasi Maintenance</b>

                <?php } elseif ($_GET["id_checklist"] == "checklist_verifikasiOperasional") { ?>
                <b style="color: black;">Verifikasi Operasional</b>

                <?php } elseif ($_GET["id_checklist"] == "checklist_verifikasiJasa") { ?>
                <b style="color: black;">Verifikasi Jasa</b>

                <?php } else { ?>
                <b style="color: black;">Verifikasi Biaya Lainnya</b>
                <?php } ?>

                <hr>
            </label>
        </div>
        <?php if ($_GET["id_checklist"] == "checklist_verifikasiAset") { ?>
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
                    while ($r = $q2->fetch_assoc()) {
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
                    <td>
                        <?php if ($r["status"] == "OK") { ?>
                        <b>Belum Membuat Laporan</b>
                        <?php } else { ?>
                        Menunggu Konfirmasi Admin
                        <?php } ?>
                    </td>
                    <td>Rp. <?= number_format($r['dana_anggaran'],0,"." , ".") ?></td>
                </tr>

                <?php }  ?>

            </tbody>
            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="9">Total</th>
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
                    <th scope="col">Keterangan</th>
                    <th scope="col">Anggaran</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    while ($r = $q2->fetch_assoc()) {
                    $bln       = substr($r['tgl_dibuat'], 5,-3);
                ?>

                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td><?= ucwords($r['kategori']) ?></td>
                    <td><?= ucwords($r['posisi']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['cabang']) ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_dibuat'])); ?></td>
                    <td><?= ucwords($r['deskripsi']) ?></td>
                    <td style="text-align: center;"><b><?= ucwords($r['status']) ?></b></td>
                    <td>
                        <?php if ($r["status"] == "OK") { ?>
                        <b>Belum Membuat Laporan</b>
                        <?php } else { ?>
                        Menunggu Konfirmasi Admin
                        <?php } ?>
                    </td>
                    <td>Rp. <?= number_format($r['dana_anggaran'],0,"." , ".") ?></td>
                </tr>

                <?php } ?>
            </tbody>
            <?php } ?>

            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="8">Total</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>

    </div>
</div>