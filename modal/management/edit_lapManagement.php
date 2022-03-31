<div class="modal fade" id="laporan_<?= $r["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Laporan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="form">
                    <form action="" method="post" onsubmit="return validasi_input2(this)">
                        <div class="mb-3">
                            <div class="form-text mb-2">
                                Data Laporan
                            </div>
                            <input type="hidden" name="id" value="<?= $r["id"] ?>">
                            <input type="hidden" name="id_management" value="<?= $_GET["id_adminKey"] ?>">
                        </div>
                        <div class="input-group mb-1">
                            <span class="input-group-text" id="basic-addon1"><b>Dari</b></span>
                            <input type="text" class="form-control" name="program" value="<?= $r["kategori"] ?>"
                                readonly>
                        </div>

                        <?php if ($_GET["id_adminKey"] == "aset_yayasan") { ?>
                        <div class="input-group mb-1">
                            <span class="input-group-text" id="basic-addon1"><b>Jenis Aset</b></span>
                            <input type="text" class="form-control" value="<?= $r["jenis"] ?>" readonly>
                        </div>
                        <?php } ?>

                        <div class="input-group mb-1">
                            <span class="input-group-text" id="basic-addon1"><b>Cabang</b></span>
                            <input type="text" class="form-control" value="<?= $r["cabang"] ?>" readonly>
                        </div>

                        <div class="input-group mb-1">
                            <span class="input-group-text" id="basic-addon1"><b>Tgl Laporan</b></span>
                            <input type="text" class="form-control"
                                value="<?= date('d-m-Y', strtotime($r["tgl_laporan"])); ?>" readonly>
                        </div>

                        <div class="input-group mb-1">
                            <span class="input-group-text" id="basic-addon1"><b>Pemakaian</b></span>
                            <input type="text" class="form-control" name="deskripsi"
                                value="<?= ucwords($r["pemakaian"]) ?>" readonly>

                        </div>

                        <?php if ($r["jenis"] == "Pembelian Barang") { ?>
                        <div class="input-group mb-1">
                            <span class="input-group-text" id="basic-addon1"><b>Qty Pembelian</b></span>
                            <input type="text" class="form-control" value="<?= ucwords($r["qty_pembelian"]) ?> Pcs"
                                readonly>
                        </div>
                        <?php } ?>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><b>Dana Terpakai</b></span>
                            <input type="text" class="form-control"
                                value="Rp. <?= number_format($r["dana_terpakai"],0,"." , ".") ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <div id="disabledSelect" class="form-text mb-2">
                                Tanggal Pemakaian <b>(EDIT)</b>
                            </div>
                            <input type="date" class="form-control" name="tanggal_laporan"
                                value="<?= $r["tgl_laporan"] ?>">

                        </div>
                        <div class="mb-3">
                            <div id="disabledSelect" class="form-text mb-2">
                                Deskripsi Pemakaian <b>(EDIT)</b>
                            </div>
                            <input type="text" class="form-control" name="deskripsi_laporan"
                                placeholder="Contoh: Pemakaian" id="alpabet" value="<?= $r["pemakaian"] ?>"
                                style="text-transform: capitalize;" autocomplete="off">
                        </div>

                        <?php if ($r["jenis"] == "Pembelian Barang") { ?>
                        <div id="disabledSelect" class="form-text mb-2">
                            Qty Pembelian
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><b>Qty</b></span>
                            <input type="text" class="form-control admin_rp" name="qty" id="rupiah2" maxlength="11"
                                placeholder="qty pembelian" onkeypress="return hanyaAngka(event)" autocomplete="off"
                                required oninvalid="this.setCustomValidity('qty harus diisi')"
                                oninput="this.setCustomValidity('')"
                                value="<?= number_format($r["qty_pembelian"],0,"." , ".") ?>">
                            <span class="input-group-text" id="basic-addon1"><b>Pcs</b></span>
                        </div>
                        <?php } ?>

                        <div id="disabledSelect" class="form-text mb-2">
                            Terpakai <b>(EDIT)</b>
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text" id="basic-addon1"><b>Rp</b></span>
                            <input type="text" class="form-control admin_rp" name="dana_laporan" id="rupiah" maxlength="11"
                                placeholder="Nominal" onkeypress="return hanyaAngka(event)" autocomplete="off"
                                value="<?= number_format($r["dana_terpakai"],0,"." , ".") ?>">
                        </div>
                        <div class="button">
                            <input type="submit" name="edit_laporan" class="btn btn-primary w-100" value="Ubah Data">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>