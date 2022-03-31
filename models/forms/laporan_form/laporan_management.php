<div class="card-body">
    <h5 class="card-title">FORM LAPORAN</h5>
    <?php if($id_unik == $id && $data["status"] == "OK"){ ?>
    <div id="form">
        <form action="" method="post" enctype="multipart/form-data" onsubmit="return validasi_input2(this)">
            <div class="mb-3">
                <div class="form-text mb-2">
                    Data Anggaran
                </div>
                <input type="hidden" name="link" value="<?= $_SESSION["id_pengurus"] ?>">
                <input type="hidden" name="id_unik" value="<?= $id ?>">
                <input type="hidden" name="id_management" value="<?= $id_management ?>">
                <div class="input-group mb-1">
                    <span class="input-group-text" id="basic-addon1"><b>Dari</b></span>
                    <input type="text" class="form-control" name="program" value="<?= $data["kategori"] ?>" readonly>
                </div>

                <?php if ($id_management == "aset_yayasan") { ?>
                <div class="input-group mb-1">
                    <span class="input-group-text" id="basic-addon1"><b>Jenis Aset</b></span>
                    <input type="text" class="form-control" value="<?= $data["jenis"] ?>" readonly>
                </div>
                <?php } ?>

                <div class="input-group mb-1">
                    <span class="input-group-text" id="basic-addon1"><b>Cabang</b></span>
                    <input type="text" class="form-control" value="<?= $data["cabang"] ?>" readonly>
                </div>

                <div class="input-group mb-1">
                    <span class="input-group-text" id="basic-addon1"><b>Tgl diajukan</b></span>
                    <input type="text" class="form-control"
                        value="<?= date('d-m-Y', strtotime($data["tgl_dibuat"])); ?>" readonly>
                </div>

                <div class="input-group mb-1">
                    <span class="input-group-text" id="basic-addon1"><b>Rencana</b></span>
                    <input type="text" class="form-control" name="deskripsi" value="<?= ucwords($data["deskripsi"]) ?>"
                        readonly>
                </div>

                <?php if ($data["jenis"] == "Pembelian Barang") { ?>
                <div class="input-group mb-1">
                    <span class="input-group-text" id="basic-addon1"><b>Qty Anggaran</b></span>
                    <input type="text" class="form-control" value="<?= ucwords($data["qty_anggaran"]) ?> Pcs" readonly>
                </div>
                <?php } ?>

                <div class="input-group mb-1">
                    <span class="input-group-text" id="basic-addon1"><b>Dana anggaran</b></span>
                    <input type="text" class="form-control"
                        value="Rp. <?= number_format($data["dana_anggaran"],0,"." , ".") ?>" readonly>
                </div>
            </div>
            <div class="mb-3">
                <div id="disabledSelect" class="form-text mb-2">
                    Tanggal Laporan
                </div>
                <input type="date" class="form-control" name="tanggal_laporan">
            </div>

            <?php if ($data["jenis"] == "Pembelian Barang") { ?>
            <div id="disabledSelect" class="form-text mb-2">
                Qty Pembelian
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><b>Qty</b></span>
                <input type="text" class="form-control" name="qty" id="rupiah2" maxlength="11"
                    placeholder="qty pembelian" onkeypress="return hanyaAngka(event)" autocomplete="off" required
                    oninvalid="this.setCustomValidity('qty harus diisi')" oninput="this.setCustomValidity('')">
                <span class="input-group-text" id="basic-addon1"><b>Pcs</b></span>
            </div>
            <?php } ?>
            <div class="mb-3">
                <div id="disabledSelect" class="form-text mb-2">
                    Deskripsi Pemakaian
                </div>
                <input type="text" class="form-control" name="deskripsi_laporan" placeholder="rincian pemakaian"
                    id="alpabet" style="text-transform: capitalize;" autocomplete="off">
                <!-- <div id="drag-drop-area"></div> -->
            </div>

            <div id="disabledSelect" class="form-text mb-2">
                Dana Terpakai
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text" id="basic-addon1"><b>Rp</b></span>
                <input type="text" class="form-control" name="dana_laporan" id="rupiah" maxlength="11"
                    placeholder="Nominal" onkeypress="return hanyaAngka(event)" autocomplete="off">
            </div>

            <div id="disabledSelect" class="form-text mb-2">
                Lampirkan Bukti
            </div>

            <div class="file-drop-area">
                <span class="choose-file-button">Pilih Gambar</span>
                <span class="file-message">or drag and drop files here</span>
                <input type="file" name="gambar[]" class="file-input" accept=".jpg,.jpeg,.png" multiple required
                    oninvalid="this.setCustomValidity('Lampirkan Foto')" oninput="this.setCustomValidity('')">
            </div>
            <div id="divImageMediaPreview"> </div>

            <div class="button">
                <input type="submit" name="input" class="btn btn-primary w-100" value="Laporkan">
            </div>
        </form>
    </div>
    <?php } else { ?>
    <div class="table-responsive">
        <div class="text-center">
            <label for=""><b style="color: black;">Tabel Laporan <?= $judul ?></b>
                <hr>
            </label>
        </div>
        <?php if ($id_management == "aset_yayasan") { ?>
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
                while ($r = $q2->fetch_assoc()) {
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
                    <td style="text-align: center;"><a class="btn btn-primary"
                            href="../admin/<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management ?>&id_forms=edit_laporan&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin laporan ini mau diedit?!')">Edit</a> || <a
                            class="btn btn-danger"
                            href="../models/forms/hapus_laporan/hapus_lapManagement.php?id_dataManagement=<?= $id_management ?>&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin anggaran ini mau dihapus?!')">Hapus</a>

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
                            class="btn btn-success btn-xs view_data_management">
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
        <table id="tabel-data_laporan" class="table table-striped table-bordered nowrap">
            <thead>
                <tr style="text-align: center;">
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Dilaporkan</th>
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
                while ($r = $q2->fetch_assoc()) {
                $bln       = substr($r['tgl_laporan'], 5,-3);
                $anggaran = $r['dana_anggaran'];
                $terpakai = $r['dana_terpakai'];
                $sisa = $anggaran - $terpakai;
                ?>
                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td style="text-align: center;"><?= ucwords($r['kategori']) ?></td>
                    <td style="text-align: center;"><?= ucwords($r['posisi']) ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_dibuat'])); ?></td>
                    <td><?= ucwords($r['deskripsi']) ?></td>
                    <td>Rp. <?= number_format($anggaran,0,"." , ".") ?></td>
                    <td style="text-align: center;">
                        <?= date('d-m-Y', strtotime($r['tgl_laporan'])); ?></td>
                    <td><?= ucwords($r['pemakaian']) ?></td>
                    <td style="text-align: center;"><a class="btn btn-primary"
                            href="../admin/<?= $_SESSION["username"] ?>.php?id_dataManagement=<?= $id_management ?>&id_forms=edit_laporan&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin laporan ini mau diedit?!')">Edit</a> || <a
                            class="btn btn-danger"
                            href="../models/forms/hapus_laporan/hapus_lapManagement.php?id_dataManagement=<?= $id_management ?>&id_unik=<?= $r['id'] ?>&id_p=<?= $bln ?>"
                            onclick="return confirm('Yakin anggaran ini mau dihapus?!')">Hapus</a>

                    </td>
                    <td>Rp. <?= number_format($terpakai,0,"." , ".") ?></td>
                    <td>Rp. <?= number_format($sisa,0,"." , ".") ?></td>
                    <td style="text-align: center;"><input type="button" name="view" value="Lihat"
                            data-id="<?= $r['id']  ?>" data-management="<?= $id_management ?>"
                            class="btn btn-success btn-xs view_data_management">
                    </td>
                </tr>
                <?php } ?>
            </tbody>

            <tfoot>
                <tr style="text-align: center;">
                    <th colspan="5">Total</th>
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
    <?php } ?>
</div>